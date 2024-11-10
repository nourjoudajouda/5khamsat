<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductsCategories;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use Auth;


class AdvertismentController extends Controller
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
        Gate::authorize('advertisments');

        if (Auth::user()->role->type == 1) {
            $new_products = Product::where('status_vendor', 1)->where('status', 1)->where('promotion', 2)->with('vendors')->with('activators')->orderByDesc('id')->get();
            $accepted_products = Product::where('status', 1)->where('promotion', 1)->with('vendors')->with('activators')->orderByDesc('id')->get();
            $canceled_products = Product::where('status', 2)->where('promotion', 3)->with('vendors')->with('activators')->orderByDesc('id')->get();
        }
        if (Auth::user()->role->type == 2) {
            $new_products = Product::where('vendor_id', Auth::user()->vendor_id)->where('promotion', 2)->with('vendors')->with('activators')->orderByDesc('id')->where('status', 1)->where('status_vendor', 1)->get();
            $accepted_products = Product::where('vendor_id', Auth::user()->vendor_id)->where('promotion', 1)->with('vendors')->where('status', 1)->where('status_vendor', 1)->with('activators')->orderByDesc('id')->get();
            $canceled_products = Product::where('vendor_id', Auth::user()->vendor_id)->where('promotion', 3)->with('vendors')->where('status', 2)->where('status_vendor', 1)->with('activators')->orderByDesc('id')->get();
        }
        $main_categories = Category::where('type', 0)->get();
        return view('dashborad.advertisments.index', [
            'new_products' => $new_products,
            'accepted_products' => $accepted_products,
            'canceled_products' => $canceled_products,
            'main_categories' => $main_categories,

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
        Gate::authorize('advertisments.store');

        $data = $request->all();
        if ($request->hasfile('image')) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/advertisments/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/advertisments/'), $image_name);
            $data['image'] = $image_name;
        }
        $advertisment = Advertisment::create($data);

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
        Gate::authorize('advertisments.edit');

        $advertisment = Advertisment::find($id);
        return view('dashborad.advertisments.edit', [
            'advertisment' => $advertisment,
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
        Gate::authorize('advertisments.update');

        $advertisment = Advertisment::find($id);
        $data = $request->input();
        if ($request->hasfile('image')) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/advertisments/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/advertisments/'), $image_name);
            $data['image'] = $image_name;
        }
        $advertisment->update($data);

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
        Gate::authorize('advertisments.delete');
        $item = Advertisment::query()->findOrFail($id);
        if ($item) {
            Advertisment::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }

    public function change_promotion_product(Request $request)
    {
        Gate::authorize('products.activetion');
        $product = Product::find($request->product_id);
        $product->promotion = $request->status;
        $product->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
}
