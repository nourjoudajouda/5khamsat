<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\User;
use App\Models\Order;
use App\Models\VendorStore;
use App\Models\Vendor;
use App\Models\Store;
use App\Models\Product;
use App\Models\ExtraSpaces;
use App\Models\VendorPoints;
use App\Models\Branche;
use App\Models\Country;
use App\Models\Shippments;
use App\Models\ShippmentDetails;
use Auth;
use Carbon\Carbon;


class HomeController extends Controller 
{
    public function __construct()
    {
        if($this->middleware('auth')){
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
     
      
    }

    public function index(){
        
        // Admin
        $daily_orders_admin = Order::whereIn('status',[1,2])
        ->whereDate('created_at',Carbon::today())
        ->withCount('order_details')
        ->get();

        $daily_users_admin = User::where('type','client')
        ->whereDate('created_at',Carbon::today())
        ->get();

        $vendors_admin = Vendor::where('status',1)->get();
        $users_admin = User::where('type','client')->get();
        $stores_admin = Store::get();
        $employess_admin = User::where('type','employee')->where('vendor_id',0)->get();
        $orders_admin = Order::whereIn('status',[1,2])->get();
        $products_admin = Product::where('status',1)->get();

        $last_vendors_admin = Vendor::orderByDesc('id')->paginate(5);
        $last_users_admin = User::orderByDesc('id')->where('type','client')->paginate(5);
        $last_orders_admin = Order::orderByDesc('id')->where('status',0)->with('vendors')->with('users')->paginate(5);

        $top_rated_users = User::where('type','client')->with('orders')->withCount('orders')->orderByDesc('orders_count')->paginate(5);
        $top_rated_products = Product::where('status',1)->with('orders')->withCount('orders')->orderByDesc('orders_count')->paginate(5);
        $top_rated_countries = Country::withCount('orders')->orderByDesc('orders_count')->paginate(5);
         
        $accepted_bookings = VendorStore::where('status',1)->get();

        //vendor
        $vendor = Auth::user()->vendor_id;
        if($vendor){

            $daily_orders_vendors = Order::whereIn('status',[1,2])
            ->where('vendor_id',$vendor)
            ->whereDate('created_at',Carbon::today())
            ->withCount('order_details')
            ->get(); 

            $vendor_orders = Order::where('vendor_id',$vendor)
            ->whereIn('status',[1,2])
            ->with('users')
            ->with('vendors')
            ->withCount('order_details')
            ->paginate(5);
    
            $points_vendor = VendorPoints::where('vendor_id',$vendor)->first();
            $orders_vendor = Order::whereIn('status',[1,2])->where('vendor_id',$vendor)->get();
            $products_vendor = Product::where('vendor_id',$vendor)->where('status', 1)->where('status_vendor', 1)->get();
        }else{
            $vendor_orders = [];
            $points_vendor = null;
            $orders_vendor = [];
            $products_vendor = [];
            $daily_orders_vendors = [];

        }
        

        //Store  
        
       

        $store = Store::where('user_id',Auth::id())->first();
        if($store){

            $bookings_orders = VendorStore::where('store_id',$store->id)->where('status',0)->orderByDesc('id')->paginate(5);
            
            $extra_spaces_orders = ExtraSpaces::where('store_id',$store->id)->where('status',0)->orderByDesc('id')->with('vendors')->with('vendors.data')->get();

            $new_shippments_orders = Shippments::where('store_id',$store->id)
            ->where('status',0)
            ->orderByDesc('id')
            ->with('details_shippment')
            ->with('details_shippment.products')
            ->paginate(5);

            $new_return_orders = ShippmentDetails::where('status','<>', 0)
            ->where('store_id',$store->id)
            ->get(); 

            $branches = Branche::where('store_id',$store->id)->get();
 
            $first_branche = Branche::where('store_id',$store->id)->first(); 
            if($first_branche){ 
                $new_shippments_count = Shippments::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
                $extra_spaces_count = ExtraSpaces::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
                $booking_orders_count = VendorStore::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status',0)->count();
                $returns_orders_count = ShippmentDetails::where('branche_id',$first_branche->id)->where('store_id',$store->id)->where('status','<>', 0)->count();    
            }else{
                $first_branche = '';
                $new_shippments_count = 0;
                $extra_spaces_count = 0;
                $booking_orders_count = 0;
                $returns_orders_count = 0;
            }
            
        }else{
            $bookings_orders = [];
            $extra_spaces_orders = [];
            $new_shippments_orders = null;
            $new_return_orders = [];
            $branches = [];
            $first_branche = '';
            $new_shippments_count = 0;
            $extra_spaces_count = 0;
            $booking_orders_count = 0;
            $returns_orders_count = 0;
        }
        

        return view('dashborad.index',[
            'vendor_orders'=>$vendor_orders,
            'daily_orders_admin'=>$daily_orders_admin,
            'daily_users_admin'=>$daily_users_admin,
            'vendors_admin'=>$vendors_admin,
            'users_admin'=>$users_admin,
            'stores_admin'=>$stores_admin,
            'employess_admin'=>$employess_admin,
            'orders_admin'=>$orders_admin,
            'products_admin'=>$products_admin,
            'last_vendors_admin'=>$last_vendors_admin,
            'last_users_admin'=>$last_users_admin,
            'last_orders_admin'=>$last_orders_admin,
            'top_rated_users'=>$top_rated_users,
            'top_rated_products'=>$top_rated_products,
            'top_rated_countries'=>$top_rated_countries,
            'bookings_orders'=>$bookings_orders,
            'extra_spaces_orders'=>$extra_spaces_orders,
            'new_shippments_orders'=>$new_shippments_orders,
            'new_return_orders'=>$new_return_orders,
            'branches'=>$branches,
            'store'=>$store,
            'points_vendor'=>$points_vendor,
            'orders_vendor'=>$orders_vendor,
            'products_vendor'=>$products_vendor,
            'first_branche'=>$first_branche,
            'new_shippments_count'=>$new_shippments_count,
            'extra_spaces_count'=>$extra_spaces_count,
            'booking_orders_count'=>$booking_orders_count,
            'returns_orders_count'=>$returns_orders_count,
            'daily_orders_vendors'=>$daily_orders_vendors,
            'accepted_bookings'=>$accepted_bookings,

        ]);
    }

    public function update_statistics($type,$duration)
    {
        if($type == 'admin'){
            if($duration == "daily"){ 
                $orders = Order::whereIn('status',[1,2])
                ->whereDate('created_at',Carbon::today())
                ->withCount('order_details')
                ->get();
                $users = User::where('type','client')
                ->whereDate('created_at',Carbon::today())
                ->get();
            }elseif($duration == "monthly"){
                $orders = Order::whereIn('status',[1,2])
                ->whereMonth('created_at', date('m'))
                ->withCount('order_details')
                ->get();
                $users = User::where('type','client')
                ->whereMonth('created_at', date('m'))
                ->get();
            }elseif($duration == "yearly"){
                $orders = Order::whereIn('status',[1,2])
                ->whereYear('created_at', date('Y'))
                ->withCount('order_details')
                ->get();
                $users = User::where('type','client')
                ->whereYear('created_at', date('Y'))
                ->get();
            }
            return response([ 
                'code' => 200,
                'status' => true, 
                'message' => 'Success',
                'orders'=>$orders->sum('order_details_count'),
                'users'=>count($users),
                'total_sales'=>$orders->sum('final_price'),
                'revenue'=>$orders->sum('system_commission'),
            ], 200);
        }

        elseif($type == 'vendor'){
            if($duration == "daily"){
                $orders = Order::whereIn('status',[1,2])
                ->whereDate('created_at',Carbon::today())
                ->where('vendor_id',Auth::user()->vendor_id)
                ->get();
                $users = Order::whereIn('status',[1,2])
                ->whereDate('created_at',Carbon::today())
                ->withCount('users')
                ->get();

            }elseif($duration == "monthly"){
                $orders = Order::whereIn('status',[1,2])
                ->whereMonth('created_at', date('m'))
                ->where('vendor_id',Auth::user()->vendor_id)
                ->get();
                $users = Order::whereIn('status',[1,2])
                ->whereMonth('created_at', date('m'))
                ->withCount('users')
                ->get();
            }elseif($duration == "yearly"){
                $orders = Order::whereIn('status',[1,2])
                ->whereYear('created_at', date('Y'))
                ->where('vendor_id',Auth::user()->vendor_id)
                ->get();
                $users = Order::whereIn('status',[1,2])
                ->whereYear('created_at', date('Y'))
                ->withCount('users') 
                ->get();
            }
            return response([ 
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'orders'=>count($orders),
                'users'=>$users->sum('users_count'),
                'total_sales'=>$orders->sum('final_price'),
            ], 200);
        }
      
    }
    public function update_branches_statistics($branche)
    {
        $branche = Branche::where('id',$branche)->first();

        $store = Store::where('id',$branche->store_id)->first();

        $new_shippments_count = Shippments::where('branche_id',$branche->id)->where('status',0)->count();
        $extra_spaces_count = ExtraSpaces::where('branche_id',$branche->id)->where('store_id',$store->id)->where('status',0)->count();
        $booking_orders_count = VendorStore::where('branche_id',$branche->id)->where('store_id',$store->id)->where('status',0)->count();
        $returns_orders_count = ShippmentDetails::where('branche_id',$branche->id)->where('store_id',$store->id)->where('status','<>', 0)->count();

        return response([ 
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'branche'=>$branche,
            'new_shippments_count'=>$new_shippments_count,
            'extra_spaces_count'=>$extra_spaces_count,
            'booking_orders_count'=>$booking_orders_count,
            'returns_orders_count'=>$returns_orders_count,
        ], 200);
    }

    public function follow_screen(){

        $new_orders = Order::where('status',0)->paginate(10);
        $in_process_orders = Order::where('status',1)->paginate(10);
        $in_shipping_orders = Order::where('status',2)->paginate(10);
        $return_orders = Order::where('status',3)->paginate(10);

        $new_shippment = Shippments::where('status',0)->with('details_shippment')->with('branches')->paginate(10);;
        $return_shippment = ShippmentDetails::where('status','<>', 0)->paginate(10);
        $point_movement = Order::where('status','<>',0)->paginate(10);

        return view('dashborad.follow_screen.index',[

            'new_orders'=>$new_orders,
            'in_process_orders'=>$in_process_orders,
            'in_shipping_orders'=>$in_shipping_orders,
            'return_orders'=>$return_orders,
            'new_shippment'=>$new_shippment,
            'return_shippment'=>$return_shippment,
            'point_movement'=>$point_movement,
        ]);
    }

}
