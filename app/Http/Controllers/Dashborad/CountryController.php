<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Order;
use App\Models\VendorStore;
use App\Models\Language;
use Auth;


class CountryController extends Controller
{
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
        $countries = Country::withCount('orders')->orderByDesc('orders_count')->paginate(10);
        return view('dashborad.countries.index', [
            'countries' => $countries,
        ]);
    }
}
