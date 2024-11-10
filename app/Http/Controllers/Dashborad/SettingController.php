<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\Store;
use App\Models\VendorStore;
use Auth;


class SettingController extends Controller
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
        Gate::authorize('settings');

        return view('dashborad.settings.edit',[
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Gate::authorize('settings.update');
        $setting = User::find(Auth::id());
        $data= $request->input();
        if ($request->hasfile('logo') ) {
            $logo_url = $request->file('logo');
            $image_name = url('/') . '/public/uploads/settings/' . rand(1000000, 9999999) . "" . time() . '.' . $logo_url->getClientOriginalExtension();
            $logo_url->move(public_path('/uploads/settings/'), $image_name);
            $data['logo'] = $image_name;
        } 
        if ($request->hasfile('icon') ) {
            $icon_url = $request->file('icon');
            $icon_name = url('/') . '/public/uploads/settings/' . rand(1000000, 9999999) . "" . time() . '.' . $icon_url->getClientOriginalExtension();
            $icon_url->move(public_path('/uploads/settings/'), $icon_name);
            $data['icon'] = $icon_name;
        } 
        $setting->update($data);
        return redirect()->back()->with('status', __('common.updated_successfully'));

    }
    public function system_info(){
        Gate::authorize('settings');
        $setting = Setting::first();
        $store = Store::where('user_id',Auth::id())->first();
        if($store){
            $store = Store::where('user_id',Auth::id())->first();
        }else{
            $store = '';
        }
        return view('dashborad.settings.system_info',[
            "setting"=>$setting,
            'store'=>$store,

        ]);
    }
    public function store_system_info(Request $request){
        Gate::authorize('settings');
        $setting = Setting::first();
        $data= $request->input();
        $setting->update($data);

        return redirect()->back()->with('status', __('common.updated_successfully'));
    }

    public function store_system_info_stores(Request $request){
        Gate::authorize('settings');
        $store = Store::where('user_id',Auth::id())->first();
        $data= $request->input();
        $store->update($data);

        return redirect()->back()->with('status', __('common.updated_successfully'));
    }

}
