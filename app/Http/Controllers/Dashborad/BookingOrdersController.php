<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorStore;
use App\Models\Store;
use App\Models\Product;
use App\Models\ShippmentDetails;
use App\Models\Shippments;
use App\Models\PaymentsVendor;
use App\Models\Invoice;
use App\Models\ExtraSpaces;
use App\Models\Branche;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\Language;
use Auth;

class BookingOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        if ($this->middleware('auth')) {
            $this->middleware(function ($request, $next) {
                $this->settings = Auth::user();
                $locales = Language::all();
                if (Auth::user()->type == 'admin') {
                    $orders = Order::orderBy('id', 'ASC')
                        ->with('users')
                        ->with('vendors')
                        ->paginate(5);
                } elseif (Auth::user()->type == 'vendor') {
                    $orders = Order::where('vendor_id', Auth::user()->vendor_id)
                        ->orderBy('id', 'ASC')
                        ->with('users')
                        ->with('vendors')
                        ->paginate(5);
                } elseif (Auth::user()->type == 'store') {
                    $orders = VendorStore::where('status', 0)
                        ->orderBy('id', 'ASC')
                        ->with('users')
                        ->paginate(5);
                }
                view()->share([
                    'orders' => $orders,
                    'locales' => $locales,
                ]);
                return $next($request);
            });
        }
    }
    public function index()
    {
        Gate::authorize('booking.orders');

        // $vendor_store = VendorStore::where('user_id',Auth::user()->vendor_id)->first();
        // if (Auth::user()->role->type == 1) {
        //     $new_bookings = Shippments::where('status',0)->get();
        // }
        // if (Auth::user()->role->type == 3) {
        //     $new_bookings = Shippments::where('status',0)->where('user_id',$vendor_store->store_id)->get();
        // }

        $store = Store::where('user_id', Auth::id())->first();
        $new_bookings = VendorStore::where('status', 0)->where('store_id', $store->id)->get();
        return view('dashborad.booking_orders.index', [
            'new_bookings' => $new_bookings,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $item = VendorStore::query()->findOrFail($id);
        if ($item) {
            VendorStore::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
    public function cancel_booking_orders(Request $request)
    {
        $item = VendorStore::with('vendors')->where('id', $request->order_id)->first();
        if ($item) {
            $item->status = 2;
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
    public function change_status_booking_order(Request $request)
    {

        $order = Shippments::find($request->order_id);
        $order->status = $request->status;
        if ($request->status == 1) {
            $vendor_store = VendorStore::where('user_id', $order->user_id)
                ->where('branche_id', $order->branche_id)
                ->where('store_id', $order->store_id)
                ->first();
            $vendor_store->spent_space += $order->total_volume;
            $vendor_store->save();
        }
        $order->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function cancel_booking_order_form_store(Request $request)
    {
        $item = Shippments::with('vendors')->where('id', $request->order_id)->first();
        if ($item) {
            $item->status = 4;
            $item->store_notes = $request->store_notes;
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
    public function change_status(Request $request)
    {
        $order = VendorStore::find($request->order_id);
        $order->status = $request->status;

        if ($request->status == 1) {
            $store = Store::where('id', $order->store_id)->first();
            $store->spent_space += $order->area;
            $store->save();

            $store = Branche::where('id', $order->branche_id)->first();
            $store->spent_space += $order->area;
            $store->save();
        }
        $order->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function storage_spaces()
    {
        Gate::authorize('storage.spaces');

        if (Auth::user()->role_id == 1) {
            $accepted_bookings = VendorStore::where('status', 1)->get();
        } else {
            $store = Store::where('user_id', Auth::id())->first();
            $accepted_bookings = VendorStore::where('status', 1)->where('store_id', $store->id)->get();
        }
        return view('dashborad.booking_orders.storage_spaces', [
            'accepted_bookings' => $accepted_bookings,
        ]);
    }
    public function details_booking_orders($id)
    {
        // $shippment = Shippments::where('id',$id)->first();
        // $products = ShippmentDetails::where('shippment_id',$id)->with('products')->get();

        $store = VendorStore::where('user_id', $id)->first();


        $new_bookings = Shippments::where('user_id', $id)
            ->where('status', 0)
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->get();

        $accepted_bookings = Shippments::where('user_id', $id)
            ->where('status', 1)
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->get();

        $inprocess_bookings = Shippments::where('user_id', $id)
            ->where('status', 2)
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->get();

        $stored_bookings = Shippments::where('user_id', $id)
            ->where('status', 3)
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->get();

        $canceled_bookings = Shippments::where('user_id', $id)
            ->where('status', 4)
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->get();

        $new_orders = ShippmentDetails::where('user_id', $id)
            ->where('status', 1)
            ->where('store_id', $store->store_id)
            ->get();

        $accepted_orders = ShippmentDetails::where('user_id', $id)
            ->where('status', 2)
            ->where('store_id', $store->store_id)
            ->get();

        $inprocess_orders = ShippmentDetails::where('user_id', $id)
            ->where('status', 3)
            ->where('store_id', $store->store_id)
            ->get();

        $finished_orders = ShippmentDetails::where('user_id', $id)
            ->where('status', 4)
            ->where('store_id', $store->store_id)
            ->get();

        $canceled_orders = ShippmentDetails::where('user_id', $id)
            ->where('status', 5)
            ->where('store_id', $store->store_id)
            ->get();

        $exstra_spaces = ExtraSpaces::where('store_id', $store->store_id)
            ->with('stores')
            ->get();

        $branches = Branche::where('store_id', $id)->get();


        $invoices = Invoice::where('status', 0)->where('type', 1)->where('vendor_id', $id)->orderByDesc('id')->get();
        $payments = PaymentsVendor::where('vendor_id', $id)->where('type', 1)->orderByDesc('id')->get();

        return view('dashborad.stores.vendor_store', [
            'store' => $store,
            'new_bookings' => $new_bookings,
            'accepted_bookings' => $accepted_bookings,
            'inprocess_bookings' => $inprocess_bookings,
            'stored_bookings' => $stored_bookings,
            'canceled_bookings' => $canceled_bookings,
            'new_orders' => $new_orders,
            'accepted_orders' => $accepted_orders,
            'inprocess_orders' => $inprocess_orders,
            'finished_orders' => $finished_orders,
            'canceled_orders' => $canceled_orders,
            'exstra_spaces' => $exstra_spaces,
            'branches' => $branches,
            'invoices' => $invoices,
            'payments' => $payments,
        ]);
    }
    public function show_many_to_store(Request $request)
    {

        $data = $request->chkBox;

        return response([
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'data' => $data,
        ], 200);
    }
    public function return_order_store()
    {
        $new_orders = ShippmentDetails::where('status', 1)
            ->get();

        $accepted_orders = ShippmentDetails::where('status', 2)
            ->get();

        $inprocess_orders = ShippmentDetails::where('status', 3)
            ->get();

        $finished_orders = ShippmentDetails::where('status', 4)
            ->get();

        $canceled_orders = ShippmentDetails::where('status', 5)
            ->get();
        return view('dashborad.booking_orders.return_orders', [
            'new_orders' => $new_orders,
            'accepted_orders' => $accepted_orders,
            'inprocess_orders' => $inprocess_orders,
            'finished_orders' => $finished_orders,
            'canceled_orders' => $canceled_orders,
        ]);
    }
    public function change_status_return_order(Request $request)
    {

        $order = ShippmentDetails::find($request->Shippment_id);
        $product = Product::where('id', $order->product_id)->first();
        $order->status = $request->status;
        $order->product_qty = $order->product_qty - $order->return_qty;
        $order->total_volume = $order->product_qty * $product->area;
        $order->save();

        $product->store = 1;
        $product->save();

        $shippment = Shippments::where('id', $order->shippment_id)->first();
        $shippment->total_volume = $shippment->total_volume - ($order->return_qty * $product->area);
        $shippment->save();

        $vendor_store = VendorStore::where('user_id', $order->user_id)
            ->where('branche_id', $order->branche_id)
            ->where('store_id', $order->store_id)
            ->first();

        $vendor_store->spent_space = $vendor_store->spent_space - ($order->return_qty * $product->area);
        $vendor_store->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function cancel_return_orders(Request $request)
    {
        $item = ShippmentDetails::with('vendors')->where('id', $request->shippment_id)->first();
        if ($item) {
            $item->status = 5;
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
    public function extra_space()
    {
        $store = Store::where('user_id', Auth::id())->first();
        $extraspaces = ExtraSpaces::where('status', 0)->where('store_id', $store->id)->get();
        return view('dashborad.booking_orders.extra_spaces', [
            'extraspaces' => $extraspaces,
        ]);
    }
    public function change_status_extra_spaces(Request $request)
    {
        $order = ExtraSpaces::find($request->order_id);
        $order->status = $request->status;
        $order->save();
        if ($request->status == 1) {

            $vendor_store = VendorStore::where('user_id', $order->user_id)->first();
            $store = Store::where('id', $vendor_store->store_id)->first();
            $vendor_store->height +=  $order->height;
            $vendor_store->width +=  $order->width;
            $vendor_store->length += $order->length;
            $vendor_store->area += $order->area;
            $vendor_store->price += $order->area * $store->square_meter_price;
            $vendor_store->save();
        }


        return response()->json(['success' => 'Status change successfully.']);
    }
    public function cancel_extra_space(Request $request)
    {
        $item = ExtraSpaces::with('vendors')->where('id', $request->order_id)->first();
        if ($item) {
            $item->status = 2;
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
}
