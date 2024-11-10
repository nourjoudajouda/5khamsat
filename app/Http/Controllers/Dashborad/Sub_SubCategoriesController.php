<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use Auth;

class Sub_SubCategoriesController extends Controller
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
        //
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
        Gate::authorize('sub_sub_categories.store');

        $data = $request->all();
        $data['type'] = 2;
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/categories/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/categories/'), $image_name);
            $data['image'] = $image_name;
        } 
        $category = Category::create($data);

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

        $sub_category = Category::where('id',$id)->first();
        $categories = Category::where('main_parent',$id)->where('sub_parent',0)->get();
        return view('dashborad.categories.view_sub_subCategories',[
            'categories'=>$categories,
            'sub_category'=>$sub_category,
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
        Gate::authorize('sub_sub_categories.edit');

        $main_categories = Category::where('type',0)->get();
        $sub_categories = Category::where('type',1)->get();
        $category = Category::find($id);
        return view('dashborad.categories.edit_sub_subCategories',[
            'category'=>$category,
            'main_categories'=>$main_categories,
            'sub_categories'=>$sub_categories,
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
        Gate::authorize('sub_sub_categories.update');

        $category = Category::find($id);
        $data= $request->input();
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['image'] = $image_name;
        } 
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
        Gate::authorize('sub_sub_categories.delete');
        $item = Category::query()->findOrFail($id);
        if ($item) {
            Category::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
}
