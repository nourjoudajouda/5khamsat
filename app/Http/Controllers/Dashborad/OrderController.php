<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Order;
use App\Models\Vendor;
use App\Models\OrderDetail;
use App\Models\VendorStore;
use App\Models\Setting;
use App\Models\WalletVendors;
use App\Models\VendorDataLegal;
use App\Models\WalletAdmin;
use App\Models\PaymentsVendor;
use App\Models\Invoice;
use App\Models\VendorPoints;
use App\Models\Product;
use App\Models\User;
use Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use PDF;

class OrderController extends Controller
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
            $settings = Setting::first();
            view()->share([   
                'orders'=>$orders,
                'locales'=>$locales,
                'settings'=>$settings,
            ]);
            return $next($request);
        });
    }
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            $new_orders = Order::where('status', 0)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $current_orders = Order::where('status', 1)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $finished_orders = Order::where('status', 2)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $canceled_orders = Order::where('status', 3)
                ->with('vendors', 'users', 'order_details')
                ->get();
        }elseif(Auth::user()->role_id == 2) {
            $new_orders = Order::where('status', 0)
                ->where('vendor_id', Auth::user()->vendor_id)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $current_orders = Order::where('status', 1)
                ->where('vendor_id', Auth::user()->vendor_id)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $finished_orders = Order::where('status', 2)
                ->where('vendor_id', Auth::user()->vendor_id)
                ->with('vendors', 'users', 'order_details')
                ->get();
            $canceled_orders = Order::where('status', 3)
                ->where('vendor_id', Auth::user()->vendor_id)
                ->with('vendors', 'users', 'order_details')
                ->get();
        }
        $vendors = Vendor::get();
        return view('dashborad.orders.index', [
            'new_orders' => $new_orders,
            'current_orders' => $current_orders,
            'finished_orders' => $finished_orders,
            'canceled_orders' => $canceled_orders,
            'vendors' => $vendors,

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
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = OrderDetail::where('order_id', $id)
            ->with('products')
            ->get();
        $order = Order::where('id', $id)
            ->with('vendors', 'users', 'order_details')
            ->first();
        return view('dashborad.orders.view', [
            'order' => $order,
            'orders' => $orders,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::query()->findOrFail($id);
        $details_order = OrderDetail::where('order_id', $id)->get();
        if ($item) {
            Order::query()->where('id', $item->id)->delete();
            foreach ($details_order as $item) {
                OrderDetail::query()->where('order_id', $id)->delete();
                return "success";
            }
        }
        return "fail";
    }
    public function convert_order($id, $vendor_id)
    {
        $order = Order::where('id', $id)->first();
        $order->vendor_id = $vendor_id;
        $order->status = 1;
        $order->save();
        if ($order) {
            return "success";
        }
        return "fail";
    }
    public function export_pdf_order($id)
    {
        $order = Order::where('id', $id)
            ->with('vendors', 'users', 'order_details')
            ->first();
        $data = OrderDetail::where('order_id', $id)
            ->with('products')
            ->get();
        $pdf = PDF::loadView('dashborad.orders.pdf_order', ['data' => $data, 'order' => $order])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('order.pdf');
        return view('dashborad.orders.pdf_order', compact('data'));
        // return $pdf->download('users.pdf');
    }
    
    public function cancel_order(Request $request)
    {
        $item = Order::with('vendors')->where('id', $request->order_id)->first();

        $products = OrderDetail::where('order_id',$item->id)->select('sku')->get();

        $list = Product::whereIn('sku',$products)->select('vendor_id')->get();
        if ($item) {
            $item->status = 3;
            $item->notes = $request->notes;
            $item->save();

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'item' => $item,
            ], 200);
        }
        return "fail"; 
    } 
    public function paginate($items,  $no_per_page, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $no_per_page), $items->count(), $no_per_page, $page, $options);
    }
    public function warranty_disclosure() 
    {
        if(Auth::user()->role_id == 1){
            $orders = OrderDetail::where('order_id','<>',0)->with('orders')->get()->append('period')->where('period','>',0);
            $orders  = $this->paginate($orders->all(),10) ;
        }
        if(Auth::user()->role_id == 2){
            $orders = OrderDetail::where('order_id','<>',0)->where('vendor_id',Auth::user()->vendor_id)->with('orders')->get()->append('period')->where('period','>',0);
            $orders  = $this->paginate($orders->all(),10) ;
        }
    
        return view('dashborad.orders.warranty_disclosure', [
            'orders'=>$orders,
        ]);
    }

    public function change_status(Request $request)
    {
        
        $order = Order::find($request->order_id);
        $order->status = $request->status;
        if($request->status == 1){
            $order->final_price = $order->final_price - ($order->value_added_tax + $order->incomming_tax + $order->system_commission + $order->shipping_cost);
            
            //Wallet
            $wallet_vendor = WalletVendors::where('vendor_id',Auth::user()->vendor_id)->first();

            if($wallet_vendor){
                $wallet_vendor->balance +=  $order->final_price;
            }else{
                $wallet_vendor = New WalletVendors();
                $wallet_vendor->vendor_id = Auth::user()->vendor_id;
                $wallet_vendor->currency = 'doller';
                $wallet_vendor->icon_currency = '$';
                $wallet_vendor->balance = $order->final_price;
                $wallet_vendor->save();
            }
            
            $wallet_vendor->save(); 

            //Points Vendor
            $points_vendor = VendorPoints::where('vendor_id',Auth::user()->vendor_id)->first();
            $points_vendor->points_spent += $order->points;
            $points_vendor->save(); 

            //Points User
            $points_user = User::where('id',$order->user_id)->first();
            $points_user->points += $order->points;
            $points_user->save(); 
        }
        $order->save();  

        return response()->json(['success' => 'Status change successfully.']);
    } 
    public function calculate_taxs()
    {
        $orders = Order::whereIn('status', [1,2])->where('vat_payment',0)->get();

        if (count($orders) > 0) {
            foreach ($orders as $order) {
 
                $invoice = new Invoice();
                $invoice->vendor_id = $order->vendor_id;
                $invoice->admin_id = Auth::id();
                $invoice->price = $order->value_added_tax + $order->incomming_tax;
                $invoice->order_id = $order->id;
                $invoice->type = 2;
                $invoice->save();

                $order->vat_payment = 1;
                $order->save();
                
                // Send Email To Vendor
            }

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
            ], 200);

        }else{

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'warning',
            ], 200);
        }
    }

    public function collection_taxs()
    {
        $invoices = Invoice::where('status', 0)->where('type', 2)->get();
        if (count($invoices) > 0) {
            foreach ($invoices as $invoice) {

                $wallet_admin  = WalletAdmin::where('admin_id',Auth::id())->first();
                
                $wallet_vendor = WalletVendors::where('vendor_id',$invoice->vendor_id)->first();

                if($wallet_vendor->balance > $invoice->price){

                    $wallet_vendor->balance = $wallet_vendor->balance - $invoice->price;
                    $wallet_vendor->save();

                    $wallet_admin->balance = $wallet_admin->balance + $invoice->price;
                    $wallet_admin->save();

                    $payment = new PaymentsVendor();
                    $payment->invoice_id = $invoice->id;
                    $payment->admin_id = Auth::id();
                    $payment->vendor_id = $invoice->vendor_id;
                    $payment->amount = $invoice->price;
                    $payment->type = 2;
                    $payment->save(); 
    
                    $invoice->status = 1;
                    $invoice->save();
                }

                // Send Email To Vendor
            }

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
            ], 200);

        } else {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'warning',
            ], 200);
        }
    }
 
    public function search_warranty($order_no)
    {
        $order = Order::where('order_no',$order_no)->first();

        if(Auth::user()->role_id == 1){
            if($order){ 
                $orders = OrderDetail::where('order_id',$order->id)
                ->with('orders')
                ->with('products')
                ->with('users')
                ->with('vendors')
                ->get()->append('period')->where('period','>',0)->values()->all();
                
        
                if (count($orders) > 0) {
                    return response([
                        'code' => 200,
                        'status' => true,
                        'message' => 'Success',
                        'orders' => $orders,
                    ], 200);
                }
            }else{
                return response([
                    'code' => 200,
                    'status' => true,
                    'message' => 'fail',
                ], 200);
            }
        }
        if(Auth::user()->role_id == 2){
            if($order){
                $orders = OrderDetail::where('order_id',$order->id)
                ->where('vendor_id',Auth::user()->vendor_id)
                ->with('orders')
                ->with('products')
                ->with('users')
                ->with('vendors')
                ->get()->append('period')->where('period','>',0)->values()->all();
                
        
                if (count($orders) > 0) {
                    return response([
                        'code' => 200,
                        'status' => true,
                        'message' => 'Success',
                        'orders' => $orders,
                    ], 200);
                }
                }else{
                return response([
                    'code' => 200,
                    'status' => true,
                    'message' => 'fail',
                ], 200);
                }
        }
        
    }

    public function search_warranty_products($value)
    {
        if(Auth::user()->role_id == 1){
            $products = Product::where('status', 1)
            ->where('name_ar', 'like', '%' . $value . '%')
            ->get();

            $products_list = [];
            foreach($products as $product){
                $orders = OrderDetail::where('product_id',$product->id)
                ->with('orders')
                ->with('products')
                ->with('users')
                ->with('vendors')
                ->get()->append('period')->where('period','>',0)->values()->all();
                $products_list[]=$orders;
            }
        }
        if(Auth::user()->role_id == 2){
            $products = Product::where('status', 1)
            ->where('name_ar', 'like', '%' . $value . '%')
            ->get();

            $products_list = [];
            foreach($products as $product){
                $orders = OrderDetail::where('product_id',$product->id)
                ->where('vendor_id',Auth::user()->vendor_id)
                ->with('orders')
                ->with('products')
                ->with('users')
                ->with('vendors')
                ->get()->append('period')->where('period','>',0)->values()->all();
                $products_list[]=$orders;
            }
        }
        $results = json_decode(json_encode($products_list),true);

            
        if (count($results) > 0) {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'results' => $results,
            ], 200);
        }
        return "fail";
    }
    public function get_all_warrantly() 
    {
        if(Auth::user()->role_id == 1){
            $orders = OrderDetail::where('order_id','<>',0)->with('orders')->with('products')
            ->with('vendors')
            ->with('users')
            ->get()->append('period')->where('period','>',0)->values()->all();
        }
        if(Auth::user()->role_id == 2){
            $orders = OrderDetail::where('order_id','<>',0)->with('orders')->with('products')
            ->where('vendor_id',Auth::user()->vendor_id)
            ->with('vendors')
            ->with('users')
            ->get()->append('period')->where('period','>',0)->values()->all();
        }
        if (count($orders) > 0) {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'orders' => $orders,
            ], 200);
        }
        return "fail";
        
    }

    
}
