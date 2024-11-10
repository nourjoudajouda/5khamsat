<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\VendorStore;
use App\Models\WalletStores;
use App\Models\WalletVendors;
use App\Models\Language;
use App\Models\PaymentsVendor;
use Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {
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

    public function calculate_monthly_invoice()
    {
        $vendors_stores = VendorStore::where('status', 1)->where('invoice',0)->get();

        if (count($vendors_stores) > 0) {
            foreach ($vendors_stores as $vendor) {

                $invoice = new Invoice();
                $invoice->vendor_id = $vendor->user_id;
                $invoice->store_id = $vendor->store_id;
                $invoice->branche_id = $vendor->branche_id;
                $invoice->price = $vendor->price; 
                $invoice->type = 1;
                $invoice->save();

                $vendor->invoice = 1;
                $vendor->save();
                
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

    public function collection_monthly_invoice()
    {
        $invoices = Invoice::where('status', 0)->where('type', 1)->get();
        if (count($invoices) > 0) {
            foreach ($invoices as $invoice) {

                $wallet_store  = WalletStores::where('store_id',$invoice->store_id)->first();
                if($wallet_store){
                    $wallet_store  = WalletStores::where('store_id',$invoice->store_id)->first();
                }else{
                    $wallet_store  = New WalletStores();
                    $wallet_store->store_id = $invoice->store_id;
                    $wallet_store->currency = 'doller';
                    $wallet_store->icon_currency = '$';
                    $wallet_store->balance = $invoice->price;
                    $wallet_store->save();

                }
                
                $wallet_vendor = WalletVendors::where('vendor_id',$invoice->vendor_id)->first();
                if($wallet_store){
                    $wallet_vendor = WalletVendors::where('vendor_id',$invoice->vendor_id)->first();
                }else{
                    $wallet_vendor  = New WalletVendors();
                    $wallet_vendor->store_id = $invoice->vendor_id;
                    $wallet_vendor->currency = 'doller';
                    $wallet_vendor->icon_currency = '$';
                    $wallet_vendor->balance = $invoice->price;
                    $wallet_vendor->save();

                }

                if($wallet_vendor->balance > $invoice->price){

                    $wallet_vendor->balance = $wallet_vendor->balance - $invoice->price;
                    $wallet_vendor->save();

                    $wallet_store->balance = $wallet_store->balance + $invoice->price;
                    $wallet_store->save();

                    $payment = new PaymentsVendor();
                    $payment->invoice_id = $invoice->id;
                    $payment->vendor_id = $invoice->vendor_id;
                    $payment->store_id = $invoice->store_id;
                    $payment->branche_id = $invoice->branche_id;
                    $payment->type = 1;
                    $payment->amount = $invoice->price;
                    $payment->save(); 
    
                    $invoice->status = 1;
                    $invoice->save();
                }else{
                    return response([
                        'code' => 200,
                        'status' => true,
                        'message' => 'fail',
                    ], 200);
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
}
