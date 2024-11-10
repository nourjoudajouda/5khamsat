<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Rate;
use App\Models\Language;
use App\Models\Product;
use App\Models\User;
use App\Models\Shippments;
use App\Models\ShippmentDetails;
use App\Models\Role;
use App\Models\Contact;
use App\Models\VendorPoints;
use App\Models\VendorDataLegal;
use App\Models\WalletVendors;
use App\Models\PaymentsVendor;
use App\Models\Withdrawals;
use App\Models\VendorsCategory;
use App\Models\WalletAdmin;
use Illuminate\Support\Facades\Gate;
use Hash;
use App\Models\VendorStore;
use Auth;


class VendorController extends Controller
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
        Gate::authorize('vendors');

        $new_vendors = Vendor::with('activators')->where('status',0)->get();
        $active_vendors = Vendor::with('activators')->with('orders')->where('status',1)->get();
        $not_active_vendors = Vendor::with('activators')->where('status',2)->get();
        $rejected_vendors = Vendor::with('activators')->where('status',3)->get();
        $rejected_vendors_system = Vendor::with('activators')->where('status',4)->get();
        $orders_vendors = Order::whereIn('status', [1,2])->where('commission_payment',0)->get();
        $invoices = Invoice::where('status',0)->where('type',3)->get();

        return view('dashborad.vendors.index', [
            'new_vendors'=>$new_vendors,
            'active_vendors'=>$active_vendors,
            'not_active_vendors'=>$not_active_vendors,
            'rejected_vendors'=>$rejected_vendors,
            'rejected_vendors_system'=>$rejected_vendors_system,
            'orders_vendors'=>$orders_vendors,
            'invoices'=>$invoices,
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
        Gate::authorize('vendors.store');
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['type'] = $request->type_info;
        $vendor = Vendor::create($data);

        // Vendor Data Legal
        $data['vendor_id'] = $vendor->id;

        if ($request->hasfile('freelance_work_document_image')) {
            $image_url_freelance_work_document_image = $request->file('freelance_work_document_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_freelance_work_document_image->getClientOriginalExtension();
            $image_url_freelance_work_document_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['freelance_work_document_image'] = $image_name;
        }
        if ($request->hasfile('brand_store_image')) {
            $image_url_brand_store_image = $request->file('brand_store_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_brand_store_image->getClientOriginalExtension();
            $image_url_brand_store_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['brand_store_image'] = $image_name;
        }
        if ($request->hasfile('bank_account_image')) {
            $image_url_bank_account_image = $request->file('bank_account_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_bank_account_image->getClientOriginalExtension();
            $image_url_bank_account_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['bank_account_image'] = $image_name;
        }
        if ($request->hasfile('commissioner_image')) {
            $image_url_commissioner_image = $request->file('commissioner_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_commissioner_image->getClientOriginalExtension();
            $image_url_commissioner_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['commissioner_image'] = $image_name;
        }
        if ($request->hasfile('ID_image')) {
            $image_url_ID_image = $request->file('ID_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_ID_image->getClientOriginalExtension();
            $image_url_ID_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['ID_image'] = $image_name;
        }
        if ($request->hasfile('Commercial_Register_image')) {
            $image_url_Commercial_Register_image = $request->file('Commercial_Register_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_Commercial_Register_image->getClientOriginalExtension();
            $image_url_Commercial_Register_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['Commercial_Register_image'] = $image_name;
        }
        $data['type'] = $request->type_info;
        $vendor_data_legal = VendorDataLegal::create($data);

        $role =Role::where('role_type','vendor')->first();
        $data['vendor_id'] = $vendor->id;
        $data['type'] = 'vendor';
        $data['role_id'] = $role->id;
        $user = User::create($data);




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
        $vendor = Vendor::where('id', $id)
            ->with('users')
            ->with('data')
            ->first(); 

        $new_orders = Order::where('status', 1)
            ->where('vendor_id', $id)
            ->with('vendors', 'users', 'order_details')
            ->get();
        $current_orders = Order::where('status', 2)
            ->where('vendor_id', $id)
            ->with('vendors', 'users', 'order_details')
            ->get();
        $finished_orders = Order::where('status', 3)
            ->where('vendor_id', $id)
            ->with('vendors', 'users', 'order_details')
            ->get();
        $canceled_orders = Order::where('status', 4)
            ->where('vendor_id', $id)
            ->with('vendors', 'users', 'order_details')
            ->get();
        $products = Product::where('vendor_id', $id)
        ->where('status_vendor',1)
        ->where('status',1)
        ->get();
        $rates = Rate::where('vendor_id', $id)->where('type',1)->with('users')->get();
 

        $sales = Order::where('vendor_id',$id)->where('status',2)->count();
        $points = VendorPoints::where('vendor_id',$id)->first();
        $promotions_product = Product::where('promotion',1)->where('vendor_id',$id)->count();
        $contacts = Contact::where('vendor_id',$id)
        ->where('admin_id',0)
        ->with('chats')
        ->get();

        $contact = Contact::where('vendor_id',$id)
        ->where('admin_id',0)
        ->with('chats')
        ->first();

        $vendor_balance = WalletVendors::where('vendor_id',$id)->first(); 

        $new_shippment = Shippments::where('status',0)->where('user_id',$id)->with('details_shippment')->with('branches')->paginate(10);;
        $return_shippment = ShippmentDetails::where('status','<>', 0)->where('user_id',$id)->paginate(10);

        $level_vendor = VendorsCategory::orderBy('number_of_orders')->where('number_of_orders','>=',$sales)->first();

        
        return view('dashborad.vendors.view', [
            'vendor' => $vendor,
            'new_orders' => $new_orders,
            'current_orders' => $current_orders,
            'finished_orders' => $finished_orders,
            'canceled_orders' => $canceled_orders,
            'products' => $products,
            'rates'=>$rates,
            'sales'=>$sales,
            'promotions_product'=>$promotions_product,
            'points'=>$points,
            'contacts'=>$contacts,
            'contact'=>$contact,
            'vendor_balance'=>$vendor_balance,
            'new_shippment'=>$new_shippment,
            'return_shippment'=>$return_shippment,
            'level_vendor'=>$level_vendor,
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
        Gate::authorize('vendors.edit');

        $vendor = Vendor::find($id);
        $vendor_legal_data = VendorDataLegal::where('vendor_id', $id)->first();
        return view('dashborad.vendors.edit', [
            'vendor' => $vendor,
            'vendor_legal_data' => $vendor_legal_data,
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
        Gate::authorize('vendors.update');

        $data = $request->input();
        $vendor = Vendor::find($id);
        $vendor->update($data);



        // Vendor Data Legal
        $vendor_data_legal = VendorDataLegal::where('vendor_id', $id)->first();

        if ($request->hasfile('freelance_work_document_image')) {
            $image_url_freelance_work_document_image = $request->file('freelance_work_document_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_freelance_work_document_image->getClientOriginalExtension();
            $image_url_freelance_work_document_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['freelance_work_document_image'] = $image_name;
        }
        if ($request->hasfile('brand_store_image')) {
            $image_url_brand_store_image = $request->file('brand_store_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_brand_store_image->getClientOriginalExtension();
            $image_url_brand_store_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['brand_store_image'] = $image_name;
        }
        if ($request->hasfile('bank_account_image')) {
            $image_url_bank_account_image = $request->file('bank_account_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_bank_account_image->getClientOriginalExtension();
            $image_url_bank_account_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['bank_account_image'] = $image_name;
        }
        if ($request->hasfile('commissioner_image')) {
            $image_url_commissioner_image = $request->file('commissioner_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_commissioner_image->getClientOriginalExtension();
            $image_url_commissioner_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['commissioner_image'] = $image_name;
        }
        if ($request->hasfile('ID_image')) {
            $image_url_ID_image = $request->file('ID_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_ID_image->getClientOriginalExtension();
            $image_url_ID_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['ID_image'] = $image_name;
        }
        if ($request->hasfile('Commercial_Register_image')) {
            $image_url_Commercial_Register_image = $request->file('Commercial_Register_image');
            $image_name = url('/') . '/public/uploads/vendors/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_Commercial_Register_image->getClientOriginalExtension();
            $image_url_Commercial_Register_image->move(public_path('/uploads/vendors/'), $image_name);
            $data['Commercial_Register_image'] = $image_name;
        }
        $vendor_data_legal->update($data);

        $user = User::where('vendor_id', $id)->first();
        $user->update($data);


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
        Gate::authorize('vendors.delete');

        $item = Vendor::query()->findOrFail($id);
        if ($item) {
            Vendor::query()->where('id', $item->id)->delete();
            VendorDataLegal::query()->where('vendor_id', $item->id)->delete();
            User::query()->where('vendor_id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }
    public function change_status(Request $request)
    {
        $vendor = Vendor::find($request->vendor_id);
        $vendor->status = $request->status;
        if ($request->status == 1) {
            $vendor->activator = Auth::id();
        } else {
            $vendor->activator = 0;
        }
        $vendor->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function change_active_vendor_status(Request $request)
    {
        $vendor = Vendor::find($request->vendor_id);
        $vendor->status = $request->status;
        $vendor->notes = $request->notes;

        if ($request->status == 1) {
            $vendor->activator = Auth::id();
        } else {
            $vendor->disactive = Auth::id();
        }
        $vendor->save();
        return response([
            'code' => 200,
            'status' => true,
            'message' => 'Success',
            'vendor' => $vendor,
        ], 200);
    }
    public function delete_vendor($id){

        Gate::authorize('vendors.delete');

        $item = Vendor::query()->findOrFail($id);
        if ($item) {
            Vendor::query()->where('id', $item->id)->delete();
            VendorDataLegal::query()->where('vendor_id', $item->id)->delete();
            User::query()->where('vendor_id', $item->id)->delete();
            $vendors = Vendor::with('activators')->get();
            return view('dashborad.vendors.index')->with([
                'vendors'=>$vendors,
            ]);
        }
    }
    public function portfolio($id){
        $vendor = Vendor::where('id',$id)->first();
        $current_balance= WalletVendors::where('vendor_id',$id)->first();
        $total_sales = Order::whereIn('status',[1,2])->get();
        $collected_shipping_invoices = Invoice::where('vendor_id',$id)->where('type',1)->where('status',1)->get();
        $un_collected_shipping_invoices = Invoice::where('vendor_id',$id)->where('type',1)->where('status',0)->get();
        $collected_orders_invoices = Invoice::where('vendor_id',$id)->where('type',2)->where('status',1)->get();
        $un_collected_orders_invoices = Invoice::where('vendor_id',$id)->where('type',2)->where('status',0)->get();
        $invoices_stores = Invoice::where('vendor_id',$id)->where('type',1)->get();
        $invoices_taxes = Invoice::where('vendor_id',$id)->where('type',2)->get();
        $invoices_commission = Invoice::where('vendor_id',$id)->where('type',3)->get();

        $payments = PaymentsVendor::where('vendor_id',$id)->get();
        $withdrawals = Withdrawals::where('vendor_id',$id)->get();

        return view('dashborad.vendors.balance', [ 
            'vendor'=>$vendor,
            'invoices_stores'=>$invoices_stores,
            'invoices_taxes'=>$invoices_taxes,
            'invoices_commission'=>$invoices_commission,
            'current_balance'=>$current_balance,
            'total_sales'=>$total_sales,
            'collected_shipping_invoices'=>$collected_shipping_invoices,
            'un_collected_shipping_invoices'=>$un_collected_shipping_invoices,
            'collected_orders_invoices'=>$collected_orders_invoices,
            'un_collected_orders_invoices'=>$un_collected_orders_invoices,
            'payments'=>$payments,
            'withdrawals'=>$withdrawals,
        ]);
    }
    public function taxs($id){
        $orders = Order::where('vendor_id',$id)->whereIn('status',[1,2])
        ->with('vats')
        ->with('vendors')
        ->with('vendors.data')
        ->get();


        return view('dashborad.vendors.taxs', [
            'orders'=>$orders,
        ]);
    }

    public function withdraw_balance(Request $request)
    {
        $item = New Withdrawals();
        $item->vendor_id = Auth::user()->vendor_id;
        $item->amount = $request->amount;
        $item->save();

        // $wallet_vendor = WalletVendors::where('vendor_id',Auth::user()->vendor_id)->first();
        // $wallet_vendor->balance = $wallet_vendor->balance - $request->amount;
        // $wallet_vendor->save();

        return redirect()->back()->with('status', __('common.send_successfully'));

    }

    public function reject_vendor(Request $request)
    {
        $item = Vendor::where('id', $request->vendor_id)->first();
        if ($item) {
            $item->status = 3;
            $item->reason_refuse = $request->notes;
            $item->activator = Auth::id();
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
    public function calculate_system_commission()
    {
        $orders = Order::whereIn('status', [1,2])->where('commission_payment',0)->get();

        if (count($orders) > 0) {
            foreach ($orders as $order) {
 
                $invoice = new Invoice();
                $invoice->vendor_id = $order->vendor_id;
                $invoice->admin_id = Auth::id();
                $invoice->price = $order->system_commission;
                $invoice->order_id = $order->id;
                $invoice->type = 3;
                $invoice->save();

                $order->commission_payment = 1;
                $order->save();
                
                // Send Email To Vendor
            }

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
            ], 200);

        }else{

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'warning',
            ], 200);
        }
    }

    public function collection_system_commission()
    {
        $invoices = Invoice::where('status', 0)->where('type', 3)->get();
        if (count($invoices) > 0) {
            foreach ($invoices as $invoice) {

                $wallet_admin  = WalletAdmin::where('admin_id',Auth::id())->first();
                
                $wallet_vendor = WalletVendors::where('vendor_id',$invoice->vendor_id)->first();

                if($wallet_vendor->balance > $invoice->price){

                    $wallet_vendor->balance = $wallet_vendor->balance - $invoice->price;
                    $wallet_vendor->save();

                    $wallet_admin->balance = $wallet_admin->balance + $invoice->price;
                    $wallet_admin->save();

                    $payment = new PaymentsVendor();
                    $payment->invoice_id = $invoice->id;
                    $payment->admin_id = Auth::id();
                    $payment->vendor_id = $invoice->vendor_id;
                    $payment->amount = $invoice->price;
                    $payment->type = 3;
                    $payment->save(); 
    
                    $invoice->status = 1;
                    $invoice->save();
                }

                // Send Email To Vendor
            }

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
            ], 200);

        } else {
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'warning',
            ], 200);
        }
    }

    public function technical_support()
    {
        $contact = Contact::where('vendor_id',Auth::user()->vendor_id)
        ->where('user_id',0)
        ->with('chats') 
        ->first(); 
        if($contact){
            $contacts = Contact::where('vendor_id',Auth::user()->vendor_id)
            ->where('user_id',0)
            ->with('chats')
            ->get();
    
            $contact = Contact::where('vendor_id',Auth::user()->vendor_id)
            ->where('user_id',0)
            ->with('chats')
            ->first(); 
        }else{
            $contact = New Contact();
            $contact->vendor_id = $id;
            $contact->admin_id = 1;
            $contact->save();
            $contacts = [];
        }
        return view('dashborad.vendors.technical_support', [
            'contacts'=>$contacts,
            'contact'=>$contact,       
        ]);
    }

    public function documents($id)
    {
        $vendor = Vendor::where('id',$id)->with('data')->first();

        return view('dashborad.vendors.documents', [
            'vendor'=>$vendor,  
        ]);
    }
}

