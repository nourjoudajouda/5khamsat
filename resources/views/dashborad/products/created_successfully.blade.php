@extends('layouts.dashborad')
@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
 

    h1 {
        color: #88B04B;
        font-weight: 900;
        font-size: 25px;
        margin-bottom: 10px;
    }

    p {
        color: #404F5E;
        font-size: 17px;
        margin: 0;
    }

    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left: -15px;
    }

    .card {
        background: white;
        padding: 90px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
        text-align: center;
    }
</style>
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
      
        <div class="content-body" style="text-align:center">
            <div class="card">
                <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                    <i class="checkmark">✓</i>
                </div>
                <h1>{{__('common.create_product_successfully')}}</h1>
                <a href="{{url('/products')}}">
                    <p>{{__('common.go_to_your_products')}}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')

@endsection