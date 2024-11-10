<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Setting;
use App\Models\OrderDetail;
use App\Models\ProductsCategories;
use App\Models\Product;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $user_id = 19;
        $settings = Setting::first();

        $order_details = OrderDetail::where('user_id',$user_id)
        ->with('vendors')
        ->with('users')
        ->where('order_id',0)
        ->get()->groupBy('vendor_id');


        if(count($order_details) > 0){

            foreach($order_details as $array){
                $order_vendor = Order::orderBy('order_no', 'desc')->first();

                $details =  $array->first();
                $total = $array->sum('total');
                $system_commission = $array->sum('commission');
                $points = $array->sum('points');

                $order = New Order();
                $order->user_id = $user_id;
                $order->invoice_no =  random_int(100000, 999999);
                $order->status = 0;
                $order->vendor_id = $details->vendor_id;
                $order->country_id = 1;
                $order->final_price = $total;
                $order->total = $total;
                $order->system_commission = $system_commission;
                $order->points = $points;
                $order->incomming_tax = $settings->tax;
                $order->notes = $request->notes;
                if($details->vendor_id != 0){
                    if($details->vendors->data->type == 'Commercial_Record'){
                        $order->value_added_tax = 0;
                    }
                    if($details->vendors->data->type == 'freelance_work' || $order->vendors->data->type == 'National_Identity'){
                        $order->value_added_tax = $settings->value_added_tax;
                    }
                }
                if($order_vendor){
                    $index = $order_vendor->order_no;
                    $index++;
                    $order_no = str_pad($index, 6, "0", STR_PAD_LEFT);
                }else{
                    $order_no = "000001";
                }
                $order->order_no =  $order_no;
    
                // foreach($array as $product){
    
                //     $order->final_price += $product->total;
                //     $order->vendor_id = $product->vendor_id;
                // }
               $order->save();
                
                foreach($array as $item)
                {
                    $item ->order_id = $order->id;
                    $item -> save();
                }
            }
            
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'New Order',
                'data' => $order
            ]);
        }else{
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'No Products In Cart',
            ]);
        }
        
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
        //
    }

    public function addCart(Request $request)
    {
        $user_id = 3;

        $settings = Setting::first();

        $product = Product::where('id',$request->product_id)->first();
        $product_category = ProductsCategories::where('product_id',$request->product_id)
        ->with('categories')
        ->first();

        $order = New OrderDetail();
        $order->user_id = $user_id;
        $order->product_id = $request->product_id;
        $order->vendor_id = $product->vendor_id;
        $order->quantity = $request->quantity;
        $order->price = $product->price;
        $order->points = $product->points * $order->quantity;
        $order->total = $product->price * $order->quantity;
        $order->commission = $product_category->categories->persent; 
        if($product->warranty_period > 0){
            $order->end_warranty = $product->created_at->addMonths($product->warranty_period);
        }
        $order->save();
         
        return response([
            'code' => 200,
            'status' => true,
            'message' => 'New Order',
            'data' => $order
        ]);
    }


}
