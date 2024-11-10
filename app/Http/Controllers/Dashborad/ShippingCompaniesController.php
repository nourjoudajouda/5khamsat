<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\ShippingCompanies;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use Auth;


class ShippingCompaniesController extends Controller
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
        Gate::authorize('shipping');
        $shipping_companies = ShippingCompanies::get();
        return view('dashborad.shipping_companies.index',[
            'shipping_companies'=>$shipping_companies,
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
        $data = $request->all();
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/shipping_companies/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/shipping_companies/'), $image_name);
            $data['image'] = $image_name;
        } 
        $shipping_company = ShippingCompanies::create($data);

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
        $shipping_company = ShippingCompanies::find($id);
        return view('dashborad.shipping_companies.edit',[
            'shipping_company'=>$shipping_company,
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
        $shipping_company = ShippingCompanies::find($id);
        $data= $request->input();
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/shipping_companies/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/shipping_companies/'), $image_name);
            $data['image'] = $image_name;
        } 
        $shipping_company->update($data);

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
        $item = ShippingCompanies::query()->findOrFail($id);
        if ($item) {
            ShippingCompanies::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
}
