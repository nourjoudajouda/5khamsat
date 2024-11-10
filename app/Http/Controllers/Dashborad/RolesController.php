<?php

namespace App\Http\Controllers\Dashborad;


use App\Models\Role;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\VendorStore;


class RolesController extends Controller
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

        Gate::authorize('roles');
        if(Auth::user()->role_id == 1){
            $roles = Role::where('type',1)->get();
        }else{
            $roles = Role::where('type',2)->get();
        }
        return view('dashborad.roles.home',[
            'roles'=>$roles,
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
        Gate::authorize('roles.store');
        
        $role= New Role;
        $role->name = $request->name_ar;
        $role->name_en = $request->name_en;
        if(Auth::user()->role_id == 1){
            $role->type = 1;
        }else{
            $role->type = 2;
        }
        $role->save();
        foreach($request->post('permissions' , []) as $permission){
            $role->permissions()->create([
                'permission'=>$permission
            ]);
        }

        if($role){
            return redirect()->back()->with('status', __('تمت عملية الإضافة بنجاح'));
        }
        return redirect()->back()->with('error', __('حدث خطأ'));
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
        Gate::authorize('roles.edit');
        $role = Role::where('id',$id)->first();
        $role_permissions = $role->permissions()->pluck('permission')->toArray();

        return view('dashborad.roles.edit',[
            'role'=>$role,
            'role_permissions'=>$role_permissions,
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
        Gate::authorize('roles.update');
        $role= Role::findOrfail($id);
        $role->name = $request->name_ar;
        $role->name_en = $request->name_en;
        $role->save();
        $role->update($request->all());
        if($id != 1){
            $role->permissions()->delete();
        }
        foreach($request->post('permissions' , []) as $permission){
            $role->permissions()->create([
                'permission'=>$permission
            ]);
        }


        if($role){
            return redirect()->back()->with('status', __('تمت عملية التعديل بنجاح'));
        }
        return redirect()->back()->with('error', __('حدث خطأ'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('roles.delete');
        $item = Role::query()->findOrFail($id);
        if ($item) {
            Role::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
}
