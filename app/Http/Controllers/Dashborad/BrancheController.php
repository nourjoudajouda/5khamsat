<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branche;
use App\Models\Store;
use App\Models\Language;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\ExtraSpaces;
use App\Models\VendorPoints;
use App\Models\Country;
use App\Models\Shippments;
use App\Models\ShippmentDetails;
use Auth;

class BrancheController extends Controller
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
        $store = Store::where('user_id', Auth::id())->first();
        $branches = Branche::where('store_id', $store->id)->get();
        return view('dashborad.branches.index', [
            "branches" => $branches,
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
        Gate::authorize('branches.store');
        $store = Store::where('user_id', Auth::id())->first();
        $data = $request->all();
        $data['store_id'] = $store->id;
        $data['area'] = ($request->length * $request->width * $request->height);
        $branche = Branche::create($data);

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
        $store = Store::where('user_id', Auth::id())->first();
        if ($store) {

            $bookings_orders = VendorStore::where('branche_id', $id)->where('store_id', $store->id)->where('status', 0)->orderByDesc('id')->paginate(5);

            $extra_spaces_orders = ExtraSpaces::where('branche_id', $id)->where('store_id', $store->id)->where('status', 0)->orderByDesc('id')->with('vendors')->with('vendors.data')->get();

            $new_shippments_orders = Shippments::where('branche_id', $id)->where('store_id', $store->id)
                ->where('status', 0)
                ->orderByDesc('id')
                ->with('details_shippment')
                ->with('details_shippment.products')
                ->paginate(5);

            $new_return_orders = ShippmentDetails::where('branche_id', $id)->where('status', '<>', 0)
                ->where('store_id', $store->id)
                ->get();

            $branches = Branche::where('store_id', $store->id)->get();

            $first_branche = Branche::where('id', $id)->where('store_id', $store->id)->first();

            $new_shippments_count = Shippments::where('branche_id', $id)->where('store_id', $store->id)->where('status', 0)->count();
            $extra_spaces_count = ExtraSpaces::where('branche_id', $id)->where('store_id', $store->id)->where('status', 0)->count();
            $booking_orders_count = VendorStore::where('branche_id', $id)->where('store_id', $store->id)->where('status', 0)->count();
            $returns_orders_count = ShippmentDetails::where('branche_id', $id)->where('store_id', $store->id)->where('status', '<>', 0)->count();
            return view('dashborad.branches.view', [

                'bookings_orders' => $bookings_orders,
                'extra_spaces_orders' => $extra_spaces_orders,
                'new_shippments_orders' => $new_shippments_orders,
                'new_return_orders' => $new_return_orders,
                'branches' => $branches,
                'store' => $store,
                'first_branche' => $first_branche,
                'new_shippments_count' => $new_shippments_count,
                'extra_spaces_count' => $extra_spaces_count,
                'booking_orders_count' => $booking_orders_count,
                'returns_orders_count' => $returns_orders_count,

            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('branches.edit');
        $branche = Branche::find($id);
        return view('dashborad.branches.edit', [
            'branche' => $branche,
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
        Gate::authorize('branches.update');
        $branche = Branche::find($id);
        $data = $request->input();
        $data['area'] = ($request->length * $request->width * $request->height);
        $branche->update($data);
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
        Gate::authorize('branches.delete');
        $item = Branche::query()->findOrFail($id);
        if ($item) {
            Branche::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
    public function get_branches($store_id)
    {
        $items = Branche::where('store_id', $store_id)->get();
        return response()->json(['data' => $items]);
    }
}
