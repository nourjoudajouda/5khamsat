<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Store;
use App\Models\VendorStore;
use App\Models\ShippmentDetails;
use App\Models\User;
use App\Models\Product;
use App\Models\Role;
use App\Models\Branche;
use App\Models\ExtraSpaces;
use App\Models\Invoice;
use App\Models\Shippments;
use App\Models\PaymentsVendor;
use Illuminate\Support\Facades\Gate;
use Hash;
use App\Models\Order;
use Auth;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->settings = Auth::user();
            $locales = Language::all();
            if(Auth::user()->type == 'admin'){
                $orders = Order::orderBy('id','ASC')
                ->with('users')
                ->with('vendors')
                ->paginate(5);
            }elseif(Auth::user()->type == 'vendor'){
                $orders = Order::where('vendor_id',Auth::user()->vendor_id)
                ->orderBy('id','ASC')
                ->with('users')
                ->with('vendors')
                ->paginate(5);
            }elseif(Auth::user()->type == 'store'){
                $orders = VendorStore::where('status',0)
                ->orderBy('id','ASC')
                ->with('users')
                ->paginate(5);
            }
            view()->share([   
                'orders'=>$orders,
                'locales'=>$locales,
            ]);
            return $next($request);
        });
    }
    public function index()
    {
        Gate::authorize('stores');
        $stores = Store::get();
        return view('dashborad.stores.index', [
            'stores' => $stores,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('stores.store');
        $role = Role::where('role_type', 'store')->first();
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['type'] = 'store';
        $data['role_id'] = $role->id;
        $user = User::create($data);

        $data = $request->all();
        $data['user_id'] = $user->id;
        $data['area'] = ($request->length * $request->width * $request->height);

        $store = Store::create($data);

        return redirect()->back()->with('status', __('common.created_successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response  
     */
    public function show($id)
    { 
        $store = Store::where('id', $id)->with('users') ->first(); 
        if($store){ 
 
            $branches = Branche::where('store_id',$store->id)->get();

            $first_branche = Branche::where('store_id',$store->id)->first();

            $new_shippments_count = Shippments::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
            $extra_spaces_count = ExtraSpaces::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
            $booking_orders_count = VendorStore::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
            $returns_orders_count = ShippmentDetails::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status','<>', 0)->count();
            $invoices = Invoice::where('status',0)->where('type',1)->where('store_id',$store->id)->orderByDesc('id')->get();
            $payments = PaymentsVendor::where('store_id',$store->id)->where('type',1)->orderByDesc('id')->get(); 

        }  
        $stores_vendors = VendorStore::where('store_id',$id)->with('vendors')->get();
        $new_bookings = Shippments::where('store_id',$id)->where('status',0)->with('details_shippment')->get();
        $accepted_bookings = Shippments::where('store_id',$id)->where('status',1)->with('details_shippment')->get();
        $inprocess_bookings = Shippments::where('store_id',$id)->where('status',2)->with('details_shippment')->get();
        $stored_bookings = Shippments::where('store_id',$id)->where('status',3)->with('details_shippment')->get();
        $canceled_bookings = Shippments::where('store_id',$id)->where('status',4)->with('details_shippment')->get();

        return view('dashborad.stores.view', [
            'store' => $store,
            'stores_vendors' => $stores_vendors,
            'accepted_bookings' => $accepted_bookings,
            'inprocess_bookings' => $inprocess_bookings,
            'stored_bookings' => $stored_bookings,
            'new_bookings' => $new_bookings,
            'canceled_bookings' => $canceled_bookings,
            'branches'=>$branches,
            'first_branche'=>$first_branche,
            'new_shippments_count'=>$new_shippments_count,
            'extra_spaces_count'=>$extra_spaces_count,
            'booking_orders_count'=>$booking_orders_count,
            'returns_orders_count'=>$returns_orders_count,
            'invoices'=>$invoices,
            'payments'=>$payments,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('stores.edit');

        $store = Store::where('id', $id)->with('users')->first();
        return view('dashborad.stores.edit', [
            'store' => $store,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('stores.update');
        $user = Store::find($id);
        $data = $request->input();
        $data['password'] = Hash::make($request->password);
        $user->update($data);

        $store = Store::find($id);
        $data = $request->input();
        $data['area'] = ($request->length * $request->width * $request->height);
        $store->update($data);

        return redirect()->back()->with('status', __('common.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('stores.delete');

        $item = Store::query()->findOrFail($id);
        if ($item) {
            Store::query()->where('id', $item->id)->delete();
            User::query()->where('id', $item->user_id)->delete();
            return "success"; 
        }
        return "fail";
    }

    public function delete_vendor($id)
    {

        Gate::authorize('stores.delete');

        $item = Store::query()->findOrFail($id);
        if ($item) {
            Store::query()->where('id', $item->id)->delete();
            User::query()->where('id', $item->user_id)->delete();
            $stores = Store::get();
            return view('dashborad.stores.index')->with([
                'stores' => $stores,
            ]);
        }
    }
    public function stores_vendor()
    {
        $store = VendorStore::where('user_id', Auth::user()->vendor_id)->count();

        if ($store > 0) { 
            $stores = VendorStore::where('user_id',Auth::user()->vendor_id)->get();
        } else {
            $stores = null; 
        }
        
        $new_store = Store::orderBy('count', 'ASC')->first(); 
        if($new_store){
            $branches = Branche::where('store_id',$new_store->id)->get();
        }else{
            $branches = [];
        }
        return view('dashborad.stores.vendor_stores', [
            'stores' => $stores,
            'new_store' => $new_store,
            'branches'=>$branches,
        ]);
    } 

    public function vendor_store($id){ 
        $store = VendorStore::where('store_id', $id)->first();
        $branches = Branche::where('store_id',$id)->get();
        $exstra_spaces = ExtraSpaces::where('store_id',$id)
        ->with('stores')
        ->get();
        $new_bookings = Shippments::where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$id)
        ->where('status',0)
        ->with('details_shippment')
        ->with('details_shippment.products')
        ->get();

        $accepted_bookings = Shippments::where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$id)
        ->where('status',1)
        ->with('details_shippment')
        ->with('details_shippment.products')
        ->get();

        $inprocess_bookings = Shippments::where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$id)
        ->where('status',2) 
        ->with('details_shippment')
        ->with('details_shippment.products')
        ->get();

        $stored_bookings = Shippments::where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$id)
        ->where('status',3)
        ->with('details_shippment')
        ->with('details_shippment.products')
        ->get();

        $canceled_bookings = Shippments::where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$id)
        ->where('status',4)
        ->with('details_shippment')
        ->with('details_shippment.products')
        ->get();

        $new_orders = ShippmentDetails::where('user_id',Auth::user()->vendor_id)
        ->where('status',1)
        ->where('store_id',$id)
        ->get();

        $accepted_orders = ShippmentDetails::where('user_id',Auth::user()->vendor_id)
        ->where('status',2)
        ->where('store_id',$id)
        ->get();

        $inprocess_orders = ShippmentDetails::where('user_id',Auth::user()->vendor_id)
        ->where('status',3)
        ->where('store_id',$id)
        ->get();

        $finished_orders = ShippmentDetails::where('user_id',Auth::user()->vendor_id)
        ->where('status',4)
        ->where('store_id',$id)
        ->get();

        $canceled_orders = ShippmentDetails::where('user_id',Auth::user()->vendor_id)
        ->where('status',5)
        ->where('store_id',$id) 
        ->get(); 

        $invoices = Invoice::where('status',0)->where('type',1)->where('vendor_id',Auth::user()->vendor_id)->orderByDesc('id')->get();
        $payments = PaymentsVendor::where('vendor_id',Auth::user()->vendor_id)->where('type',1)->orderByDesc('id')->get(); 

        return view('dashborad.stores.vendor_store', [
            'store' => $store,
            'new_bookings'=>$new_bookings,
            'accepted_bookings'=>$accepted_bookings,
            'inprocess_bookings'=>$inprocess_bookings,
            'stored_bookings'=>$stored_bookings,
            'canceled_bookings'=>$canceled_bookings,
            'new_orders'=>$new_orders,
            'accepted_orders'=>$accepted_orders,
            'inprocess_orders'=>$inprocess_orders,
            'finished_orders'=>$finished_orders,
            'canceled_orders'=>$canceled_orders,
            'exstra_spaces'=>$exstra_spaces,
            'branches'=>$branches,
            'invoices'=>$invoices,
            'payments'=>$payments,

        ]);
    }
 
    public function store_stores_vendor(Request $request)
    {
        $store = Store::where('id',$request->store_id)->first();
        $store->count += 1;
        $store->save();  

        $vendor_store = new VendorStore(); 
        $vendor_store->user_id = Auth::user()->vendor_id;
        $vendor_store->store_id = $store->id;
        $vendor_store->branche_id = $request->branche_id;
        $vendor_store->height = $request->height;
        $vendor_store->width = $request->width;
        $vendor_store->length = $request->length;
        $vendor_store->area = ($request->length * $request->width * $request->height);
        $vendor_store->price = $vendor_store->area * $store->square_meter_price;
        $vendor_store->save();
        
       
        return redirect()->back()->with('status', __('common.created_successfully'));
    }
    public function return_trader(Request $request)
    {
        $product = Product::where('id',$request->product_id)->first();
        $product->store = 2;
        $product->save();

        $store_vendor = VendorStore::where('user_id', Auth::user()->vendor_id)->first();

        $item = ShippmentDetails::where('product_id',$request->product_id)
        ->where('user_id',Auth::user()->vendor_id)
        ->where('store_id',$store_vendor->store_id)
        ->first();
        $item->return_qty = $request->return_qty;
        $item->status = 1;
        $item->save();

        return response([
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'item' => $item,
        ], 200);
    }
    public function extra_space(Request $request)
    {
        $store = VendorStore::where('user_id',Auth::user()->vendor_id)->where('store_id',$request->store_id)->first();
        $item = new ExtraSpaces();
        $item->user_id = Auth::user()->vendor_id;
        $item->store_id = $request->store_id;
        $item->branche_id = $request->branche_id;
        $item->height = $request->height;
        $item->width = $request->width;
        $item->length = $request->length;
        $item->area = ($request->length * $request->width * $request->height);
        $item->save();
    
        return redirect()->back()->with('status', __('common.created_successfully'));
    }
}
