<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorsCategory;
use App\Models\VendorStore;
use Auth;

class VendorsCategoryController extends Controller
{
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Gate::authorize('vendors_categories');
        $vendors_categories = VendorsCategory::get();
        return view('dashborad.vendors_categories.index',[
            'vendors_categories'=>$vendors_categories,
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
        // Gate::authorize('categories.store');
        $data = $request->all();       
        $category = VendorsCategory::create($data);
 
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
        // Gate::authorize('categories.edit');

        $category = VendorsCategory::find($id);
        return view('dashborad.vendors_categories.edit',[
            'category'=>$category,
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
        // Gate::authorize('categories.update');
        $category = VendorsCategory::find($id);
        $data= $request->input();
        $category->update($data);

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
        // Gate::authorize('categories.delete');
        $item = VendorsCategory::query()->findOrFail($id);
        if ($item) {
            VendorsCategory::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
}
