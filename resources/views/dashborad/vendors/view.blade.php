@extends('layouts.dashborad')
@section('css')
<style>
    .filled-star {
        fill: #FF9F43;
        stroke: #FF9F43;
        color: #FF9F43;
    }
</style>
<style>
    .block_item{
        background: #f8f8f8;
        width: 100%;
        height: 50px;
        display: flex;
        border-radius: 5px;
        gap: 65px;
        padding: 10px;
    }
</style>
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-view">
                <!-- User Card & Plan Starts -->
                <div class="row">
                    <!-- User Card starts-->
                    <div class="col-xl-9 col-lg-8 col-md-7">
                        <div class="card user-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                        <div class="user-avatar-section">
                                            <div class="d-flex justify-content-start">
                                                @if($vendor->data->ID_image)
                                                <img class="img-fluid rounded" src="{{$vendor->data->ID_image}}" height="104" width="104" alt="User avatar" />
                                                @endif
                                                <div class="d-flex flex-column ml-1">
                                                    <div class="user-info mb-1">
                                                        <h4 class="mb-0">{{$vendor->name}}</h4>
                                                        <span class="card-text">{{$vendor->email}}</span>

                                                    </div>
                                                    <div class="d-flex flex-wrap">
                                                        <a href="{{url(app()->getLocale().'/vendors/'.$vendor->id.'/edit')}}" class="btn btn-primary">{{__('common.edit')}}</a>
                                                        <a href="#myModal{{$vendor->id}}" role="button" data-toggle="modal">
                                                            <button class="btn btn-outline-danger ml-1">{{__('common.delete')}}</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap mt-3 text-center">
                                                <label>{{__('common.level')}}</label>
                                                <p class="card-text">

                                                <div class="badge badge-pill badge-light-secondary" style="width: 83%;height: 25px;padding: 7px;">
                                                    @if(app()->getLocale() == 'en')
                                                    {{ $level_vendor->name_en }}
                                                    @else
                                                    {{ $level_vendor->name_ar }}
                                                    @endif
                                                </div>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center user-total-numbers">
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-primary">
                                                    <i data-feather="dollar-sign" class="text-primary"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">23.3k</h5>
                                                    <small>{{__('common.Monthly Sales')}}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="color-box bg-light-success">
                                                    <i data-feather="trending-up" class="text-success"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$99.87K</h5>
                                                    <small>{{__('common.Annual Profit')}}</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                        <div class="user-info-wrapper">
                                            <div class="d-flex flex-wrap">
                                                <div class="user-info-title">
                                                    <i data-feather="user" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.vendor_legal_data')}}</span>
                                                </div>
                                                <p class="card-text mb-0">
                                                    @if($vendor->data->type == 'Commercial_Record')
                                                <div class="badge badge-pill badge-light-info mr-50">
                                                    {{__('common.Commercial_Record')}}
                                                </div>
                                                @elseif($vendor->data->type == 'freelance_work')
                                                <div class="badge badge-pill badge-light-info mr-50">
                                                    {{__('common.freelance_work')}}
                                                </div>
                                                @elseif($vendor->data->type == 'National_Identity')
                                                <div class="badge badge-pill badge-light-info mr-50">
                                                    {{__('common.National_Identity')}}
                                                </div>
                                                @endif
                                                </p>
                                            </div>

                                            <div class="d-flex flex-wrap my-50">
                                                <div class="user-info-title">
                                                    <i data-feather="check" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.status')}}</span>
                                                </div>
                                                <p class="card-text mb-0">
                                                    @if($vendor->status == 1)
                                                <div class="badge badge-pill badge-light-success mr-50">
                                                    {{__('common.active')}}
                                                </div>
                                                @else
                                                <div class="badge badge-pill badge-light-danger mr-50">
                                                    {{__('common.not_active')}}
                                                </div>

                                                @endif
                                                </p>
                                            </div>


                                            <div class="d-flex flex-wrap my-50">
                                                <div class="user-info-title">
                                                    <i data-feather="star" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.role')}}</span>
                                                </div>
                                                <p class="card-text mb-0">
                                                <div class="item-rating">
                                                    <ul class="unstyled-list list-inline">
                                                        @for ($i=1; $i <= $vendor->users->rate; $i++)
                                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                            @endfor
                                                            @if($vendor->users->rate < 5) @for ($i=1; $i <=(5 - $vendor->users->rate); $i++)
                                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                                @endfor
                                                                @endif
                                                    </ul>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="d-flex flex-wrap my-50">
                                                <div class="user-info-title">
                                                    <i data-feather="user" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.role')}}</span>
                                                </div>
                                                <p class="card-text mb-0">{{$vendor->users->type}}</p>
                                            </div>
                                            <div class="d-flex flex-wrap my-50">
                                                <div class="user-info-title">
                                                    <i data-feather="flag" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.country')}}</span>
                                                </div>
                                                <p class="card-text mb-0">{{$vendor->country}}</p>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div class="user-info-title">
                                                    <i data-feather="phone" class="mr-1"></i>
                                                    <span class="card-text user-info-title font-weight-bold mb-0">{{__('common.mobile')}}</span>
                                                </div>
                                                <p class="card-text mb-0">{{$vendor->mobile}}</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center user-total-numbers">
                                            <div class="d-flex align-items-center" style="width: 100%;">
                                                <div class="d-flex align-items-center mr-2" style="width: 100%;">
                                                    <a href="{{url(app()->getLocale().'/chats/'.$vendor->id)}}" class="btn btn-outline-warning btn-block mb-75" style="position: relative;top: 9px;">
                                                        {{__('common.connect_with_trader')}}
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center mr-2" style="width: 100%;">
                                                    <a href="{{url(app()->getLocale().'/documents/'.$vendor->id)}}" class="btn btn-outline-success btn-block mb-75" style="position: relative;top: 9px;">
                                                        {{__('common.view_documents')}}
                                                    </a>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card Ends-->

                    <!-- Plan Card starts-->
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <div class="card plan-card border-primary">
                            <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1" style="border-bottom: 1px solid #f4f4f5;margin-bottom:15px;">
                                <h5 class="mb-0">{{__('common.Portfolio')}}</h5>
                                @if($vendor_balance)
                                <span class="badge badge-light-secondary" data-toggle="tooltip" data-placement="top" title="Expiry Date">{{$vendor_balance->balance}}
                                </span>
                                @endif
                            </div>
                            @if($vendor_balance)
                            <div class="card-body">
                                <div class="badge badge-light-success">{{__('common.amount')}}</div>
                                <div class="badge badge-light-warning" style="float: left;">{{__('common.currency')}}</div>

                                <div class="row pt-75 pb-1">
                                    <div class="col-lg-6">
                                        <div class="badge badge-light-secondary">{{$vendor_balance->balance}}</div>
                                    </div>
                                    <div class="col-lg-6" style="text-align:end;">
                                        <div class="badge badge-light-secondary">{{$vendor_balance->icon_currency}}</div>
                                    </div>
                                </div>
                                <a href="{{url('/portfolio/' . $vendor->id)}}">
                                    <button class="btn btn-primary text-center btn-block">{{__('common.details')}}</button>
                                </a>
                                <a href="{{url('/taxs/' . $vendor->id)}}">
                                    <button class="btn btn-outline-primary text-center btn-block" style="margin-top: 5px;">{{__('common.taxs')}}</button>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- /Plan CardEnds -->
                </div>
                <!-- User Card & Plan Ends -->


                <!-- User Card & Plan Starts -->
                <div class="row" style="margin:0px;">
                    <div class="card user-card">
                        <div class="card-body">
                            <!-- User Card starts-->
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="d-flex align-items-center user-total-numbers">
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-primary">
                                            <i data-feather="dollar-sign" class="text-primary"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">23.3k</h5>
                                            <small>{{__('common.number_discounts')}}</small>
                                        </div>
                                    </div>
                                    @if(isset($sales))
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-success">
                                            <i data-feather="trending-up" class="text-success"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">{{$sales}}</h5>
                                            <small>{{__('common.number_sales')}}</small>
                                        </div>
                                    </div>
                                    @endif
                                    @if(isset($promotions_product))
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-warning">
                                            <i data-feather="trending-up" class="text-warning"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">{{$promotions_product}}</h5>
                                            <small>{{__('common.number_promotions')}}</small>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-danger">
                                            <i data-feather="trending-up" class="text-danger"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">$99.87K</h5>
                                            <small>{{__('common.number_coupons')}}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-info">
                                            <i data-feather="dollar-sign" class="text-info"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">23.3k</h5>
                                            <small>{{__('common.tax')}}</small>
                                        </div>
                                    </div>
                                    @if($points)
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-secondary">
                                            <i data-feather="trending-up" class="text-secondary"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">{{$points->points}}</h5>
                                            <small>{{__('common.number_points')}}</small>
                                        </div>
                                    </div>
                                    @endif
                                    @if($points)
                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-primary">
                                            <i data-feather="trending-up" class="text-primary"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">{{$points->points - $points->points_spent}}</h5>
                                            <small>{{__('common.current_number_points')}}</small>
                                        </div>
                                    </div>
                                    @endif

                                    <div class="d-flex align-items-center mr-2">
                                        <div class="color-box bg-light-success">
                                            <i data-feather="dollar-sign" class="text-success"></i>
                                        </div>
                                        <div class="ml-1">
                                            <h5 class="mb-0">23.3k</h5>
                                            <small>{{__('common.debts')}}</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card Ends-->
        </div>
        <!-- User Card & Plan Ends -->

        <!-- User Timeline & Permissions Starts -->
        <div class="row">
            <!-- information starts -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-2">{{__('common.products')}}</h4>
                    </div>
                    <div class="card-body">
                        <!-- Basic Tables start -->
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> {{__('common.name_product')}}</th>
                                                    <th> {{__('common.image')}}</th>
                                                    <th>{{__('common.created_at')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($products as $product)
                                                <tr id="tr-{{$product->id}}">
                                                    <td>
                                                        <a href="{{url(app()->getLocale().'/products/'.$product->id)}}">

                                                            @if(app()->getLocale()=='ar')
                                                            {{$product->name_ar}}
                                                            @else
                                                            {{$product->name_en}}
                                                            @endif
                                                        </a>
                                                    </td>
                                                    <td style="padding:10px;text-align :center;">
                                                        <img src="{{$product->image}}" height="50px" width="60%" style="border-radius:50%;" alt="Image Product" />
                                                    </td>

                                                    <td><span class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Tables end -->
                    </div>
                </div>
            </div>
            <!-- information Ends -->

            <!-- User Permissions Starts -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-2">{{__('common.rates')}}</h4>
                    </div>
                    <div class="card-body">
                        <!-- Basic Tables start -->
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> {{__('common.name_user')}}</th>
                                                    <th> {{__('common.rate')}}</th>
                                                    <th>{{__('common.created_at')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rates as $rate)
                                                <tr id="tr-{{$rate->id}}">
                                                    <td style="padding: 0.72rem;">
                                                        {{$rate->users->name}}
                                                    </td>
                                                    <td style="padding: 0.72rem;">
                                                        <div class="item-rating">
                                                            <ul class="unstyled-list list-inline pl-1 border-left">
                                                                @for ($i=1; $i <= $rate->rate; $i++)
                                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                                    @endfor
                                                                    @if($rate->rate < 5) @for ($i=1; $i <=(5 - $rate->rate); $i++)
                                                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                                    @endfor
                                                                    @endif
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    <td style="padding: 0.72rem;">
                                                        <span class="badge badge-pill badge-light-success mr-1">{{ $rate->created_at }}</span>
                                                        <span class="badge badge-pill badge-light-warning mr-1" data-toggle="modal" data-target="#default{{$rate->id}}"><i data-feather="message-circle"></i></span>
                                                    </td>

                                                    <div class="basic-modal">
                                                        <!-- Modal -->
                                                        <div class="modal fade text-left" id="default{{$rate->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel1">{{__('common.notes')}}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <p>
                                                                            {{$rate->review}}
                                                                        </p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('common.cancel')}}</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Basic Tables end -->
                    </div>
                </div>
            </div>
            <!-- User Permissions Ends -->
        </div>
        <!-- User Timeline & Permissions Ends -->

        <!-- Basic Tabs starts -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">{{__('common.new_orders')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">{{__('common.current_orders')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" aria-controls="order" role="tab" aria-selected="false">{{__('common.finished_orders')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">{{__('common.cancel_orders')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> {{__('common.name_user')}}</th>
                                                        <th> {{__('common.name_vendor')}}</th>
                                                        <th> {{__('common.final_price')}}</th>
                                                        <th>{{__('common.created_at')}}</th>
                                                        <th>{{__('common.action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($new_orders as $order)
                                                    <tr id="tr-{{$order->id}}">
                                                        <td>
                                                            {{ $order->users->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->vendors->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->final_price}}
                                                        </td>
                                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>
                                                        <td>
                                                            <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                                <div style="cursor:pointer" class="badge badge-pill badge-light-primary mr-50" data-toggle="modal" data-target="#view_order_fadeupModal{{$order->id}}">
                                                                    {{__('common.details')}}
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tables end -->
                        </div>
                        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> {{__('common.name_user')}}</th>
                                                        <th> {{__('common.name_vendor')}}</th>
                                                        <th> {{__('common.final_price')}}</th>
                                                        <th>{{__('common.created_at')}}</th>
                                                        <th>{{__('common.action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($current_orders as $order)
                                                    <tr id="tr-{{$order->id}}">
                                                        <td>
                                                            {{ $order->users->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->vendors->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->final_price}}
                                                        </td>
                                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>

                                                        <td>

                                                            <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                                <div style="cursor:pointer" class="badge badge-pill badge-light-primary mr-50" data-toggle="modal" data-target="#view_order_fadeupModal{{$order->id}}">
                                                                    {{__('common.details')}}
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tables end -->
                        </div>
                        <div class="tab-pane" id="order" aria-labelledby="disabled-tab" role="tabpanel">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> {{__('common.name_user')}}</th>
                                                        <th> {{__('common.name_vendor')}}</th>
                                                        <th> {{__('common.final_price')}}</th>
                                                        <th>{{__('common.created_at')}}</th>
                                                        <th>{{__('common.action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($finished_orders as $order)
                                                    <tr id="tr-{{$order->id}}">
                                                        <td>
                                                            {{ $order->users->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->vendors->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->final_price}}
                                                        </td>
                                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>

                                                        <td>

                                                            <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                                <div style="cursor:pointer" class="badge badge-pill badge-light-primary mr-50" data-toggle="modal" data-target="#view_order_fadeupModal{{$order->id}}">
                                                                    {{__('common.details')}}
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tables end -->
                        </div>
                        <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                            <!-- Basic Tables start -->
                            <div class="row" id="basic-table">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> {{__('common.name_user')}}</th>
                                                        <th> {{__('common.name_vendor')}}</th>
                                                        <th> {{__('common.final_price')}}</th>
                                                        <th>{{__('common.created_at')}}</th>
                                                        <th>{{__('common.action')}}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($canceled_orders as $order)
                                                    <tr id="tr-{{$order->id}}">
                                                        <td>
                                                            {{ $order->users->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->vendors->name}}
                                                        </td>
                                                        <td>
                                                            {{ $order->final_price}}
                                                        </td>
                                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>

                                                        <td>
                                                            <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$order->id}}" role="button" data-toggle="modal">
                                                                {{__('common.delete')}}
                                                            </div>
                                                            <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                                <div style="cursor:pointer" class="badge badge-pill badge-light-primary mr-50" data-toggle="modal" data-target="#view_order_fadeupModal{{$order->id}}">
                                                                    {{__('common.details')}}
                                                                </div>
                                                            </a>
                                                            <div class="badge badge-pill badge-light-success mr-50" href="#convert_fadeupModal{{$order->id}}" role="button" data-toggle="modal">
                                                                <img src="{{url('public/dashborad/app-assets/images/convert.svg')}}" height="20px;" />
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tables end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Tabs ends -->

        <div class="row">
            <!-- Browser States Card -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('common.inside_new_shippments')}}</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{__('common.name_store')}}</th>
                                    <th>{{__('common.name_branche')}}</th>
                                    <th>{{__('common.area')}}</th>
                                    <th>{{__('common.details')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($new_shippment as $order)
                                <tr>

                                    <td>
                                        {{$order->stores->company_name}}
                                    </td>
                                    <td>
                                        {{$order->branches->name_ar}}
                                    </td> 
                                    <td>
                                        {{$order->total_volume}}
                                    </td>
                                    <td class="text-center">
                                        <span class="iconify" data-toggle="modal" data-target="#new_shippment{{$rate->id}}" style="font-size:20px;color:#fec53a" id="new_shippment{{$order->id}}" data-icon="fluent:more-circle-32-filled"></span>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="new_shippment{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog" role="document" style="max-width: 70%;">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel1">{{__('common.details')}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row" style="overflow-y: scroll;height: 250px;">
                                                        <div class="col-12">
                                                            @foreach($order->details_shippment as $item)
                                                            <div class="block_item pt-1">
                                                                <h6>#: {{$loop->iteration}}</h6>
                                                                <h6>{{__('common.name_store')}}: {{$item->stores->company_name}}</h6>
                                                                <h6>{{__('common.name_branche')}}: {{$item->branches->name_ar}}</h6>
                                                                <h6>{{__('common.name_product')}}: {{$item->products->name_ar}}</h6>
                                                                <h6>{{__('common.Qty')}}: {{$item->product_qty}}</h6>
                                                                <h6>{{__('common.area')}}: {{$item->total_volume}}</h6>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            <!--/ Browser States Card -->


            <!-- Browser States Card -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('common.outshide_shippments_ordres')}}</h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{__('common.name_store')}}</th>
                                    <th>{{__('common.name_branche')}}</th>
                                    <th>{{__('common.name_product')}}</th>
                                    <th>{{__('common.Qty')}}</th>
                                    <th>{{__('common.area')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($return_shippment as $order)
                                <tr>

                                    <td>
                                        {{$order->stores->company_name}}
                                    </td>
                                    <td>
                                        {{$order->branches->name_ar}}
                                    </td>
                                    <td>
                                        {{$order->products->name_ar}}
                                    </td>
                                    <td>
                                        {{$order->product_qty}}
                                    </td>
                                    <td>
                                        {{$order->total_volume}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            <!--/ Browser States Card -->
        </div>
        </section>

        @can('roles.admin')
        <!-- Vertical Tabs start -->
        <section id="vertical-tabs">
            <div class="row match-height">
                <!-- Vertical Left Tabs start -->
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{__('common.chats')}}</h4>
                        </div>
                        <div class="card-body">
                            <div class="nav-vertical">
                                <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                                    @foreach($contacts as $contact)
                                    <li class="nav-item" style="display:flex;margin-bottom:25px;">
                                        <div class="avatar mr-50">
                                            <img src="{{$contact->users->photo}}" alt="Avatar" width="38" height="38" />
                                        </div>
                                        <a class="nav-link {{ $loop->first ?  'active' : '' }}" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1" href="#tabVerticalLeft{{$contact->id}}" role="tab" aria-selected="true">{{$contact->users->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content">
                                    @foreach($contacts as $contact)
                                    <div class="tab-pane {{ $loop->first ?  'active' : '' }}" id="tabVerticalLeft{{$contact->id}}" style="overflow-y: scroll;height:500px;" role="tabpanel" aria-labelledby="baseVerticalLeft-tab1">
                                        <!-- Dashboard Analytics Start -->
                                        <section id="dashboard-analytics">
                                            <div class="row match-height">
                                                <!-- Timeline Card -->
                                                <div class="col-lg-12 col-12">
                                                    <div class="card card-user-timeline">

                                                        <div class="card-body">
                                                            <ul class="timeline ml-50" id="messages">
                                                                @forelse($contact->chats as $chat)
                                                                @if($chat->type == 1)
                                                                <li class="timeline-item">
                                                                    <span class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                                                    <div class="timeline-event">
                                                                        <div class="media align-items-center">
                                                                            <div class="avatar mr-50">
                                                                                <img src="{{$chat->users->photo}}" alt="Avatar" width="38" height="38" />
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 style="font-weight: bold;">{{$chat->users->name}}</h6>
                                                                                <small>{{$chat->period}}</small>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="mb-0" style="margin: 10px;">
                                                                            <span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>
                                                                            {{$chat->message}}
                                                                        </h6>
                                                                    </div>
                                                                </li>
                                                                @endif
                                                                @if($chat->type == 2)
                                                                <li class="timeline-item">
                                                                    <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                                    <div class="timeline-event">
                                                                        <div class="media align-items-center">
                                                                            <div class="avatar mr-50">
                                                                                <img src="{{$chat->vendors->data->ID_image}}" alt="Avatar" width="38" height="38" />
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h6 style="font-weight: bold;">{{$chat->vendors->name}}</h6>
                                                                                <small>{{$chat->period}}</small>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="mb-0" style="margin: 10px;">
                                                                            <span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>
                                                                            {{$chat->message}}
                                                                        </h6>
                                                                    </div>
                                                                </li>
                                                                @endif

                                                                @empty
                                                                <p>{{__('common.no_chats')}}</p>
                                                                @endforelse
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/ Timeline Card -->
                                            </div>
                                        </section>
                                        <!-- Dashboard Analytics end -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vertical Left Tabs ends -->
            </div>
        </section>
        <!-- Vertical Tabs end -->
        @endcan
    </div>
</div>
</div>
<!-- END: Content-->
@if($vendor->users->whatsapp != null)
<a href="https://api.whatsapp.com/send?phone={{$vendor->users->whatsapp}}" target="blank">
    <img src="{{url('public/dashborad/app-assets/images/whatsapp.gif')}}" style="z-index: 1000;height: 55px;position: fixed;bottom: 70px;left: 20px;" />
</a>
@endif

<!--Form Delete -->
<div id="myModal{{$vendor->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">
                    {{__('common.delete')}}
                </h4>
            </div>
            <div class="modal-body">
                <p>{{__('common.confirm')}} </p>
            </div>
            <div class="modal-footer">
                <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('common.cancel')}}</button>
                <a href="{{url(app()->getLocale().'/delete_vendor/'.$vendor->id)}}">
                    <button class="btn btn-danger">{{__('common.delete')}}</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Form Delete -->
@endsection
@section('js')
<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

<script>
    function delete_adv(id) {
        // alert(1);
        var url = '{{url(app()->getLocale()."/delete_vendor")}}/' + id;
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'delete',
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            url: url,
            data: {
                _method: 'delete'
            },
            success: function(response) {
                console.log(response);
                if (response === 'success') {

                    //swal("القضية حذفت!", {icon: "success"});
                } else {
                    // swal('Error', {icon: "error"});
                }
            },
            error: function(e) {
                // swal('exception', {icon: "error"});
            }
        });

    }
</script>
@endsection