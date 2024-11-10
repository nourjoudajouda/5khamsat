@extends('layouts.site')
@section('style_sheet')
@endsection
@section('css')
@endsection
@section('content')
<div class="container-fluid">
        <h1 class="heading_cart">Wishlist</h1>

    </div>
    <div class="container">
        <div class="cart pt-5">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="block_wishlist">
                        <div class="row">
                            <div class="col-lg-2 col-xs-12">
                                <img src="{{asset('public/site/assets/images/wishlist1.png')}}" alt="" width="100%" height="auto" />
                            </div>
                            <div class="col-lg-7 col-xs-12">
                                <h6 class="mt-1">Home</h6>
                                <h4>Jacke Check Flanner Flower</h4>
                                <h6 class="mt-3">Seller : 02222220515</h6>
                                <h3 class="mt-4">$30</h3>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-btn-wishlist">
                                <i class="fa-solid fa-trash"></i>
                                <br>
                                <button class="btn btn_site btn_wishlist">Buy now</button>
                            </div>
                        </div>
                
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="block_wishlist">
                        <div class="row">
                            <div class="col-lg-2 col-xs-12">
                                <img src="{{asset('public/site/assets/images/wishlist2.png')}}" alt="" width="100%" height="auto" />
                            </div>
                            <div class="col-lg-7 col-xs-12">
                                <h6 class="mt-1">Home</h6>
                                <h4>Jacke Check Flanner Flower</h4>
                                <h6 class="mt-3">Seller : 02222220515</h6>
                                <h3 class="mt-4">$30</h3>
                            </div>
                            <div class="col-lg-3 col-xs-12 col-btn-wishlist">
                                <i class="fa-solid fa-trash"></i>
                                <br>
                                <button class="btn btn_site btn_wishlist">Buy now</button>
                            </div>
                        </div>
                
                    </div>
                </div>

                <div class="col-lg-12 mt-3 text-center">
                    <button class="btn btn_site continue_wishlist">Continue Shopping</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
