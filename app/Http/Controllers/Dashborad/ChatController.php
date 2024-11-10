<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Chat;
use App\Models\Language;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;
use App\Models\VendorStore;
use Auth;

class ChatController extends Controller
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

        $item = new Chat();
        $item->message = $request->message;
        $item->contact_id = $request->contact_id;

        if (Auth::user()->role_id == 1) {
            $item->sender_id = Auth::id();
            $item->type = 1;
            $item->save();
            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'item' => $item,
                'name' => $item->users->name,
                'image' => $item->users->photo,
            ], 200);
        } else {
            $item->sender_id = Auth::user()->vendor_id;
            $item->type = 2;
            $item->save();

            return response([
                'code' => 200,
                'status' => true,
                'message' => 'Success',
                'item' => $item,
                'name' => $item->vendors->name,
                'image' => $item->vendors->data->ID_image,

            ], 200);
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
        $contact = Contact::where('vendor_id', $id)
            ->where('user_id', 0)
            ->with('chats')
            ->first();
        if ($contact) {
            $contacts = Contact::where('vendor_id', $id)
                ->where('user_id', 0)
                ->with('chats')
                ->get();

            $contact = Contact::where('vendor_id', $id)
                ->where('user_id', 0)
                ->with('chats')
                ->first();
        } else {
            $contact = new Contact();
            $contact->vendor_id = $id;
            $contact->admin_id = Auth::id();
            $contact->save();
            $contacts = [];
        }



        return view('dashborad.chats.index', [

            'contacts' => $contacts,
            'contact' => $contact,
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
        //
    }
}
