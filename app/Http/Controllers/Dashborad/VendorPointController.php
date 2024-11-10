<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorPoints;
use App\Models\OrderDetail;
use App\Models\Language;
use App\Models\Product;
use App\Models\HistoryPoints;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use Auth;

class VendorPointController extends Controller
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
        $points = VendorPoints::get();
        return view('dashborad.vendors_points.index', [
            'points' => $points,
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
        $vendor_points = VendorPoints::where('vendor_id',Auth::user()->vendor_id)->first();

        if($vendor_points){
            $points = New HistoryPoints();
            $points->vendor_id = Auth::user()->vendor_id;
            $points->amount = $request->amount;
            $points->points = $request->points;
            $points->type = $request->type;
            if ($request->hasfile('image') ) {
                $image_url_image = $request->file('image');
                $image_name = url('/') . '/public/uploads/points/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
                $image_url_image->move(public_path('/uploads/points/'), $image_name);
                $points->image = $image_name;
            } 
            $points->save();

            $vendor_points->points += $request->points;
            $vendor_points->save();

        }else{
            $vendor_points = New VendorPoints();
            $vendor_points->vendor_id = Auth::user()->vendor_id;
            $vendor_points->points = $request->points;
            $vendor_points->points_spent = 0;
            $vendor_points->save();

            if($vendor_points){
                $points = New HistoryPoints();
                $points->vendor_id = Auth::user()->vendor_id;
                $points->amount = $request->amount;
                $points->type = $request->type;
                $points->points = $request->points;
                if ($request->hasfile('image') ) {
                    $image_url_image = $request->file('image');
                    $image_name = url('/') . '/public/uploads/points/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_image->getClientOriginalExtension();
                    $image_url_image->move(public_path('/uploads/points/'), $image_name);
                    $points->image = $image_name;
                } 
                $points->save();
            }

        }
        
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
        $points = VendorPoints::where('vendor_id',$id)->first();
        $products = OrderDetail::where('vendor_id', $id)
            ->where('order_id','<>',0)
            ->with('products')
            ->with('users')
            ->get(); 

        $points_monthly = OrderDetail::where('vendor_id', $id)
        ->where('order_id','<>',0)
        ->whereMonth('created_at', date('m'))
        ->get();
        
        $points_yearly = OrderDetail::where('vendor_id', $id)
        ->where('order_id','<>',0)
        ->whereYear('created_at', date('Y'))
        ->get();


        return view('dashborad.vendors_points.consumption_record', [
            'products'=>$products,
            'points'=>$points,
            'points_monthly'=>$points_monthly,
            'points_yearly'=>$points_yearly,

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
        $item = VendorPoints::query()->findOrFail($id);
        if ($item) {
            VendorPoints::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
   
}
