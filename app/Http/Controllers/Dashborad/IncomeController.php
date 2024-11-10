<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\VendorStore;
use App\Models\Language;
use App\Models\Vendor;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\VendorExport;


class IncomeController extends Controller
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
        $national_identity = Vendor::where('type', 'National_Identity')
        // ->with('invoices')
        ->withCount('orders')
        ->withSum('orders','final_price')
        ->with('orders')
        ->with('orders.users')
        ->get();
        $freelance_work = Vendor::where('type', 'freelance_work')
        ->withCount('orders')
        ->withSum('orders','final_price')
        ->with('orders')
        ->with('orders.users')
        ->get();

        


        return view('dashborad.income_list.index', [
            'national_identity' => $national_identity,
            'freelance_work' => $freelance_work,

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
        //
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
    public function filter_invoices(Request $request)
    {
       $date_from = $request->date_from;
       $date_to = $request->date_to;
       

       $vendors = Vendor::whereIn('type', ['National_Identity', 'freelance_work'])
       ->withCount('orders')
       ->withSum('orders','final_price')
       ->with('orders.users')
       ->with(['orders' => function($query) use($date_from, $date_to)
       {
            $query->whereBetween('created_at', [$date_from, $date_to])->whereIn('status',[1,2]);
       }])->get();

       
        if (count($vendors) > 0) {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'vendors' => $vendors,
            ], 200);
        }else{
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'warning',
            ], 200);
        }
    }

    public function export_excel($id)
    {
        $vendor = Vendor::where('id',$id)
        ->withCount('sold_orders')
        ->withCount('cancel_orders')
        ->withCount('orders')
        ->withSum('orders','final_price')
        ->with('orders')
        ->with('sold_orders')
        ->with('cancel_orders')
        ->with('orders.users')
        ->first(); 

        $data[] = ['اسم التاجر', 'الكيان القانوني','عدد الطلبات المباعة','عدد الطلبات الملغية'];
        $data[] = [$vendor->name, $vendor->type,$vendor->orders_count,$vendor->cancel_orders_count,];
        $data[] = [''];

        $data[] = ['قائمة الطلبات المباعة:'];
        if(count($vendor->sold_orders)>0){
            foreach ($vendor->sold_orders as $order) {
                $data[] = ['رقم الطلب', 'قيمة الطلب','عمولة النظام','صريبة الدخل','ضريبة القيمة المضافة'];
                $data[] = [$order->order_no ,$order->final_price,$order->system_commission.''.'Exempt',$order->incomming_tax,$order->value_added_tax];
            }
        }else{
            $data[] = ['لا يوجد طلبات مباعة'];
        }
        $data[] = [''];

        $data[] = ['عدد الطلبات الملغية:'];
        if(count($vendor->cancel_orders)>0){
            foreach ($vendor->cancel_orders as $order) {
                $data[] = ['رقم الطلب', 'قيمة الطلب','عمولة النظام','صريبة الدخل','ضريبة القيمة المضافة'];
                $data[] = [$order->order_no ,$order->final_price,$order->system_commission.''.' معفى',$order->incomming_tax.''.' معفى',$order->value_added_tax.''.' معفى'];
            }
        }else{
            $data[] = ['لا يوجد طلبات ملغية'];
        }
        $data[] = [''];
        $data[] = [''];
        $data[] = [''];

        $data[] = ['هيئة الزكاة المحترمين نرفع لكم طلب السيد المواطن –هـ بخصوص قائمة الدخل والضريبة المحسوبه عليه وسيتم تحويله لحسابكم الجاري ولكم اعاله تفاصيل عمليات العميل '];
        $data[] = ['تقبلوا منى تحياتنا وتقديرنا '];
        $data[] = ['قسم الماليات / منصة خمسخمسات للتسوق اونالين'];
        $data[] = ['المملكة العربية السعودية مدينة الرياض'];
        $data[] = ['رقم السجل التجاري',$vendor->data->Commercial_Registration_No];

        return Excel::download(new VendorExport($data), $vendor->name.'.xlsx');

    }
}
