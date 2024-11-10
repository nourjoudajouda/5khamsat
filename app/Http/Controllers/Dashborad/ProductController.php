<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use App\Models\Branche;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Product;
use App\Models\ProductsCategories;
use App\Models\Shippments;
use App\Models\VendorStore;
use App\Models\ShippmentDetails;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use Auth;
use Nette\Utils\Json;

class ProductController extends Controller
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
        Gate::authorize('products');
        if (Auth::user()->role_id == 1) {
            $new_products = Product::where('status_vendor', 1)->where('status', 0)->with('vendors')->with('activators')->orderByDesc('id')->get();
            $accepted_products = Product::where('status', 1)->with('vendors')->with('activators')->orderByDesc('id')->get();
            $canceled_products = Product::where('status', 2)->with('vendors')->with('activators')->orderByDesc('id')->get();
        }
        if (Auth::user()->role_id == 2) {
            $new_products = Product::where('vendor_id', Auth::user()->vendor_id)->with('vendors')->with('activators')->orderByDesc('id')->where('status', 0)->where('status_vendor', 1)->get();
            $accepted_products = Product::where('vendor_id', Auth::user()->vendor_id)->with('vendors')->where('status', 1)->where('status_vendor', 1)->with('activators')->orderByDesc('id')->get();
            $canceled_products = Product::where('vendor_id', Auth::user()->vendor_id)->with('vendors')->where('status', 2)->where('status_vendor', 1)->with('activators')->orderByDesc('id')->get();
        }
        $main_categories = Category::where('type',0)->get();
        $stores = VendorStore::where('user_id',Auth::user()->vendor_id)->with('stores')->get();
        return view('dashborad.products.index', [
            'new_products' => $new_products, 
            'accepted_products' => $accepted_products,
            'canceled_products' => $canceled_products,
            'main_categories'=>$main_categories,
            'stores'=>$stores,

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
        Gate::authorize('products.store');
        $data = $request->all();
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/products/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/products/'), $image_name);
            $data['image'] = $image_name;
        } 
        if(Auth::user()->role_id == 2){
            $data['vendor_id'] =Auth::user()->vendor_id;
        }
        $data['status_vendor'] =1;
        
        $data['store'] =0;
        $data['area'] = ($request->length * $request->width * $request->height);
        $product = Product::create($data);

        $data = $request->all();
        $data['product_id'] = $product->id;
        $product_category = ProductsCategories::create($data);

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

        $product = Product::find($id);
        $product_category = ProductsCategories::where('product_id', $id)->first();
        $products_related = ProductsCategories::where('category_id', $product_category->category_id)
            ->where('product_id', '<>', $id)
            ->get();
        return view('dashborad.products.view', [
            'product' => $product,
            'product_category' => $product_category,
            'products_related' => $products_related,

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
        Gate::authorize('products.edit');
        $product = Product::where('id',$id)->with('products_category')->first();
        $main_categories = Category::where('type',0)->get();
        $sub_categories = Category::where('type',1)->get();
        $sub_sub_categories = Category::where('type',2)->get();
        return view('dashborad.products.edit',[
            'product'=>$product,
            'main_categories'=>$main_categories,
            'sub_categories'=>$sub_categories,
            'sub_sub_categories'=>$sub_sub_categories,
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
        Gate::authorize('products.update');
        $product = Product::find($id);

        $data= $request->input();
        if ($request->hasfile('image') ) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/products/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/products/'), $image_name);
            $data['image'] = $image_name;
        } 
        $data['area'] = ($request->length * $request->width * $request->height);
        $product->update($data);

        $product_category = ProductsCategories::where('product_id',$id)->first();
        $data= $request->input();
        $data['product_id'] = $product->id;
        $product_category->update($data);

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
        Gate::authorize('products.delete');

        $item = Product::query()->findOrFail($id);
        if ($item) {
            Product::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }

    public function cancel_product(Request $request)
    {
        Gate::authorize('products.activetion');

        $item = Product::with('vendors')->where('id', $request->product_id)->first();
        if ($item) {
            $item->status = 2;
            $item->notes_canceled = $request->notes;
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
    public function return_product($id)
    {
        Gate::authorize('products.activetion');

        $item = Product::with('vendors')->with('activators')->where('id', $id)->first();
        if ($item) {
            $item->status = 0;
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
        Gate::authorize('products.activetion');

        $product = Product::find($request->product_id);
        $product->status = $request->status;
        $product->activator = Auth::id();
        $product->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function search_products($value)
    {
        $products = Product::where('status', 1)
            ->where('name_ar', 'like', '%' . $value . '%')
            ->orwhere('name_en', 'like', '%' . $value . '%')
            ->with('vendors')->with('activators')
            ->get();

 

        if (count($products) > 0) {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'products' => $products,
            ], 200);
        }
        return "fail";
    }
    public function create_product($id)
    {

        $product = Product::find($id);
        $product_category = ProductsCategories::where('product_id', $id)->first();
        $products_related = ProductsCategories::where('category_id', $product_category->category_id)
            ->where('product_id', '<>', $id)
            ->get();
        return view('dashborad.products.create_product', [
            'product' => $product,
            'product_category' => $product_category,
            'products_related' => $products_related,

        ]);
    }
    public function store_product(Request $request)
    {
        $item = Product::where('id', $request->product_id)->first();
        $product = new Product();
        $product->name_ar = $item->name_ar;
        $product->name_en = $item->name_en;
        $product->description_ar = $item->description_ar;
        $product->description_en = $item->description_en;
        $product->image = $item->image;
        $product->vendor_id = Auth::user()->vendor_id;
        $product->code = $request->code;
        $product->store = 1;
        $product->save(); 

        $item_category = ProductsCategories::where('product_id',$request->product_id)->first();
        $product_category = new ProductsCategories();
        $product_category->product_id = $product->id;
        $product_category->category_id = $item_category->category_id;
        $product_category->save();

        return view('dashborad.products.create_details_product', [
            'product' => $product,
        ]);
    }
    public function vendor_status_product(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->status_vendor = $request->status;
        $product->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function update_product_vendor(Request $request, $id)
    { 
        $product = Product::where('id', $id)->first();
        $product->name_ar = $request->name_ar;
        $product->name_en = $request->name_en;
        $product->description_ar = $request->description_ar;
        $product->description_en = $request->description_en;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->price_offer = $request->price_offer;
        $product->start_date = $request->start_date;
        $product->end_date = $request->end_date;
        $product->duration_received_ar = $request->duration_received_ar;
        $product->duration_received_en = $request->duration_received_en;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->length = $request->length;
        $product->area = ($request->length * $request->width * $request->height);

        if ($request->hasfile('image')) {
            $image_url_image = $request->file('image');
            $image_name = url('/') . '/public/uploads/products/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
            $image_url_image->move(public_path('/uploads/products/'), $image_name);
            $product->image = $image_name;
        }
        $product->save();

        

        return view('dashborad.products.created_successfully', [
           
        ]);
    }
    public function get_sub_category($category_id){

        $items=Category::where('main_parent',$category_id)->where('type',1)->get();
        return response()->json(['data'=>$items]);
    }
    public function get_sub_sub_category($category_id){

        $items=Category::where('sub_parent',$category_id)->where('type',2)->get();
        return response()->json(['data'=>$items]);
    }
    public function make_promotion_product($id)
    {
        $item = Product::with('vendors')->with('activators')->where('id', $id)->first();
        if ($item) {
            $item->promotion = 2;
            $item->save();

            return response([ 
                'code' => 200,
                'status' => true,
                'message' => 'Success',
            ], 200);
        }
        return "fail";
    }
    public function move_store(Request $request)
    {
        $product = Product::where('id',$request->product_id)->first();
        $product->store = 1;
        $product->save();


        $shippment = new Shippments();
        $shippment->user_id = Auth::user()->vendor_id;
        $shippment->store_id = $request->store_id;
        $shippment->branche_id = $request->branche_id;
        $shippment->vendor_notes = $request->vendor_notes;
        $shippment->invoice_code = random_int(00000001, 99999999);
        $shippment->total_volume = ($product->height * $product->length * $product->width) *  $request->product_qty;
        $shippment->save();

        $item = new ShippmentDetails();
        $item->user_id = Auth::user()->vendor_id;
        $item->store_id = $request->store_id;
        $item->branche_id = $request->branche_id;
        $item->product_qty = $request->product_qty;
        $item->product_id = $request->product_id;
        $item->total_volume = ($product->height * $product->length * $product->width)  *  $request->product_qty;
        $item->shippment_id = $shippment->id;
        $item->save();


        return response([
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'item' => $item,
        ], 200);
    }

    public function move_products_store($arr)
    {
        $products_list = Product::whereIn('id',explode(",",$arr))->get();
        return response([
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'products_list' => $products_list,
        ], 200);
    }
    public function move_products(Request $request)
    {
        foreach($request->products as $key => $value) {
            $product = Product::where('id',$key)->first();
            $product->store = 1;
            $product->save();

            $item = new ShippmentDetails();
            $item->user_id = Auth::user()->vendor_id;
            $item->store_id = $request->store_id;
            $item->branche_id = $request->branche_id;
            $item->product_qty = $value;
            $item->product_id = $key;
            $item->total_volume = ($product->height * $product->length * $product->width)  *  $value;
            $item->shippment_id = 0;
            $item->save();
        }

        

        $shippments_details = ShippmentDetails::where('shippment_id',0)->where('user_id',Auth::user()->vendor_id)->get();

        $shippment = new Shippments();
        $shippment->user_id = Auth::user()->vendor_id;
        $shippment->store_id = $request->store_id;
        $shippment->branche_id = $request->branche_id;
        $shippment->vendor_notes = $request->vendor_notes;
        $shippment->invoice_code = random_int(00000001, 99999999);
        $shippment->total_volume = $shippments_details->sum('total_volume');
        $shippment->save();


        foreach($shippments_details as $item){
            $item->shippment_id = $shippment->id;
            $item->save();
        }

        return redirect()->back()->with('status', __('common.moved_successfully'));
    }
    
}
