<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function seller_page(){
        return view('site.index_seller');
    }
    public function contact(){
        return view('site.contact');
    }
    public function wishlist(){
        return view('site.wishlist');
    }
    public function notifications(){
        return view('site.notifications');
    }
    public function register_seller(){
        return view('site.auth.vendor.register');
    }
    public function steps_register_seller(){
        return view('site.auth.vendor.steps');
    }
    public function register_user(){
        return view('site.auth.user.register');
    }
    public function login_user(){
        return view('site.auth.user.login');
    }

}
