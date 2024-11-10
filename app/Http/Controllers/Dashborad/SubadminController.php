<?php

namespace App\Http\Controllers\Dashborad;

use App\Models\Language;
use App\Models\Permission;
use Hash;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;

use App\Http\Controllers\Controller;


class SubadminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->roles = Auth::user()->roles;
            $locales = Language::all();
            if (Auth::user()->role_id == 1) {
                $roles = Role::where('type', 1)->get();
            } else {
                $roles = Role::where('type', 2)->get();
            }
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
                'locales' => $locales,
                'roles' => $roles,
            ]);
            return $next($request);
        });
    }
   

    public function index(Request $request)
    {
        Gate::authorize('sub_admins');
        if (Auth::user()->role_id == 1) { 
            $items = Permission::query();
            $items = $items->orderBy('id', 'desc')
                ->where('role_id', '!=', '0')
                ->where('type', '!=', 'vendor')
                ->where('type', '!=', 'employee')
                ->where('id', '<>', Auth::id())
                ->with('roles')
                ->get();
        } else {
            $items = Permission::query();
            $items = $items->orderBy('id', 'desc')
                ->where('role_id', '!=', '0')
                ->where('vendor_id', Auth::user()->vendor_id)
                ->where('id', '<>', Auth::id())
                ->with('roles')
                ->get();
        }
        return view('dashborad.sub_admins.home', [
            'items' => $items,
        ]);
    }

    public function store(Request $request)
    {
        Gate::authorize('sub_admins.store');

        $name_role = Role::where('id', $request->role_id)->first()->name_en;
        $sub_admin = new Permission();
        $sub_admin->name = $request->name;
        $sub_admin->email = $request->email;
        $sub_admin->mobile = $request->mobile;
        $sub_admin->role_id = $request->role_id;
        $sub_admin->type = 'employee';
        $sub_admin->password = Hash::make($request->password);
        if (Auth::user()->role_id == 1) {
            $sub_admin->vendor_id = 0;
        }
        else{
            $sub_admin->vendor_id = Auth::user()->vendor_id;
        }
        $sub_admin->save();

        if ($sub_admin) {
            return redirect()->back()->with('status', __('تمت الإضافة بنجاح'));
        }
        return redirect()->back()->with('error', __('حدث خطأ'));
    }

    public function edit($id)
    {
        Gate::authorize('sub_admins.edit');

        $admin = Permission::findOrFail($id);
        return view('dashborad.sub_admins.edit', [
            'admin' => $admin,
        ]);
    }

    public function update(Request $request, $id)
    {
        Gate::authorize('sub_admins.update');

        $sub_admin = Permission::findOrFail($id);
        $sub_admin->name = $request->name;
        $sub_admin->email = $request->email;
        $sub_admin->mobile = $request->mobile;
        $sub_admin->type = $request->type;
        $sub_admin->password = Hash::make($request->password);
        $sub_admin->save();

        if ($sub_admin) {
            return redirect()->back()->with('status', __('تمت عملية التعديل بنجاح'));
        }
        return redirect()->back()->with('error', __('حدث خطأ'));
    }
    public function destroy($id)
    {
        Gate::authorize('sub_admins.delete');

        $item = Permission::query()->findOrFail($id);
        if ($item) {
            Permission::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
