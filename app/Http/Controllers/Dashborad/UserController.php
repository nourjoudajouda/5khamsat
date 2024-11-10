<?php

namespace App\Http\Controllers\Dashborad;


use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Contact;
use App\Models\Order;
use App\Models\VendorStore;
use Illuminate\Support\Facades\Auth;
use DB;
use Hash;

class UserController extends Controller
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
    public function index(Request $request)
    {
        $items = User::query();
        $items = $items->where('id','<>',Auth::id())->orderBy('id', 'desc')->paginate(7);
        return view('dashborad.users.home', [
            'items' => $items,
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

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
            $contact->admin_id = Auth::id();
            $contact->save();
            $contacts = [];
        }
        return view('dashborad.profile.home', [
            'user'=>$user,
            'contacts'=>$contacts,
            'contact'=>$contact,
        ]);
    }


    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'name'=>'required|string|max:255',
        //     'email'=>'required|email|unique:users,id,'.$id,
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $user= User::findOrFail($id); 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        if ($request->hasfile('photo') ) {
            $image_url = $request->file('photo');
            $image_name = url('/') . '/public/uploads/admins/' . time() . '.' . $image_url->getClientOriginalExtension();
            $image_url->move(public_path('/uploads/admins/'), $image_name);
            $user->photo = $image_name;
        } 
        $user->save();
        return redirect()->back()->with('status', __('تمت عملية التعديل بنجاح'));
    }
    public function edit_password(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('dashborad.profile.edit_password',[
            'user'=>$user,
        ]);
    }

    public function update_password(Request $request, $id)
    {
        //dd($request->all());
        $users_rules=array(
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
        );
        $users_validation=Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect()->back()->with('status', __('تم تعديل كلمة المرور بنجاح'));
    }
    public function update_user(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'name'=>'required|string|max:255',
        //     'email'=>'required|email|unique:users,id,'.$id,
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $user= User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        return redirect()->back()->with('status', __('تمت عملية التعديل بنجاح'));
    }
    public function update_password_user(Request $request, $id)
    {
        //dd($request->all());
        $users_rules=array(
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
        );
        $users_validation=Validator::make($request->all(), $users_rules);

        if($users_validation->fails())
        {
            return redirect()->back()->withErrors($users_validation)->withInput();
        }
        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect()->back()->with('status', __('تم تعديل كلمة المرور بنجاح'));
    }
    public function destroy($id)
    {
        $item = User::query()->findOrFail($id);
        if ($item) {
            User::query()->where('id', $id)->delete();
            return "success";
        }
        return "fail";
    }
  
}
