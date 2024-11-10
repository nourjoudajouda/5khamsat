<?php

namespace App\Http\Controllers\Dashborad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use App\Models\Language;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;
use PDF;
use Hash;
use App\Models\VendorStore;
use Auth;

class ClientController extends Controller
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
        Gate::authorize('clients');
        $clients = Client::where('type', 'client')->get();
        return view('dashborad.clients.index', [
            'clients' => $clients,
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
        Gate::authorize('clients.store');
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('warning', __('common.unique_email'))->withInput();
        }
        if ($validator->passes()) {
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $data['type'] = 'client';
            if ($request->hasfile('photo')) {
                $image_url_photo = $request->file('photo');
                $image_name = url('/') . '/public/uploads/clients/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_photo->getClientOriginalExtension();
                $image_url_photo->move(public_path('/uploads/clients/'), $image_name);
                $data['photo'] = $image_name;
            }
            $client = Client::create($data);


            return redirect()->back()->with('status', __('common.created_successfully'));
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
        $client = Client::where('id', $id)
            // ->with('data')
            ->first();

        $new_orders = Order::where('status', 0)
            ->where('user_id', $id)
            ->with('vendors', 'order_details')
            ->get();
        $current_orders = Order::whereIn('status', [1, 2])
            ->where('user_id', $id)
            ->with('vendors', 'order_details')
            ->get();
        $finished_orders = Order::where('status', 3)
            ->where('user_id', $id)
            ->with('vendors', 'order_details')
            ->get();
        $canceled_orders = Order::where('status', 4)
            ->where('user_id', $id)
            ->with('vendors', 'order_details')
            ->get();
        // $products = Product::where('vendor_id', $id)->get();

        $products_guarantee = OrderDetail::where('user_id', $id)->with('products')->get()->where('period_ajax', '>', 0)->all();

        $contact = Contact::where('user_id', $id)
            ->where('admin_id', 0)
            ->with('chats')
            ->first();

        if ($contact) {
            $contacts = Contact::where('user_id', $id)
                ->where('admin_id', 0)
                ->with('chats')
                ->get();

            $contact = Contact::where('user_id', $id)
                ->where('admin_id', 0)
                ->with('chats')
                ->first();
        } else {
            $contact = new Contact();
            $contact->vendor_id = Auth::user()->vendor_id;
            $contact->user_id = $id;
            $contact->save();
            $contacts = [];
        }

        $contact_admin = Contact::where('user_id', $id)
            ->where('admin_id', Auth::id())
            ->where('vendor_id', 0)
            ->with('chats')
            ->first();
        if ($contact_admin) {
            $contacts_admin = Contact::where('user_id', $id)
                ->where('admin_id', Auth::id())
                ->where('vendor_id', 0)
                ->with('chats')
                ->get();

            $contact_admin = Contact::where('user_id', $id)
                ->where('admin_id', Auth::id())
                ->where('vendor_id', 0)
                ->with('chats')
                ->first();
        } else {
            $contact_admin = new Contact();
            $contact_admin->admin_id = Auth::id();
            $contact_admin->user_id = $id;
            $contact_admin->save();
            $contacts_admin = [];
        }


        return view('dashborad.clients.view', [
            'client' => $client,
            'new_orders' => $new_orders,
            'current_orders' => $current_orders,
            'finished_orders' => $finished_orders,
            'canceled_orders' => $canceled_orders,
            'contacts' => $contacts,
            'contact' => $contact,
            'contact_admin' => $contact_admin,
            'contacts_admin' => $contacts_admin,
            'products_guarantee' => $products_guarantee,
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
        Gate::authorize('clients.edit');

        $client = Client::find($id);
        return view('dashborad.clients.edit', [
            'client' => $client,
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
        Gate::authorize('clients.update');

        $client = Client::find($id);
        $data = $request->input();
        if ($request->hasfile('photo')) {
            $image_url_photo = $request->file('photo');
            $image_name = url('/') . '/public/uploads/clients/' . rand(1000000, 9999999) . "" . time() . '.' . $image_url_photo->getClientOriginalExtension();
            $image_url_photo->move(public_path('/uploads/clients/'), $image_name);
            $data['photo'] = $image_name;
        }
        $client->update($data);

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
        Gate::authorize('clients.delete');

        $item = Client::query()->findOrFail($id);
        if ($item) {
            Client::query()->where('id', $item->id)->delete();
            return "success";
        }
        return "fail";
    }

    public function export_pdf_users()
    {
        $data = Client::where('type', 'client')->get();

        $pdf = PDF::loadView('dashborad.clients.pdf_users', ['data' => $data]);
        return $pdf->stream('users.pdf');
        return view('dashborad.clients.pdf_users', compact('data'));
        // return $pdf->download('users.pdf');
    }
    public function change_status(Request $request)
    {
        $client = Client::find($request->client_id);
        $client->status = $request->status;
        $client->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    public function delete_user($id)
    {
        Gate::authorize('clients.delete');
        $item = Client::query()->findOrFail($id);
        if ($item) {
            Client::query()->where('id', $item->id)->delete();
            $clients = Client::get();
            return view('dashborad.users.index')->with([
                'clients' => $clients,
            ]);
        }
    }
}
