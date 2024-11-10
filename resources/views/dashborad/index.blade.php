@extends('layouts.dashborad')
@section('content')
@can('roles.admin')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>{{__('common.daily_sales')}}</h5>
                                <p class="card-text font-small-3">{{__('common.sales_number')}} : {{$daily_orders_admin->sum('order_details_count')}}</p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="javascript:void(0);">${{$daily_orders_admin->sum('final_price')}}</a>
                                </h3>
                                <a href="{{url('orders')}}">
                                    <button type="button" class="btn btn-primary">{{__('common.View Sales')}}</button>
                                </a>
                                <img src="{{url('public/dashborad/app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.Statistics')}}</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 mr-25 mb-0">
                                        <select class="form-control" id="select_duraiton" onchange="update_statistics('admin')">
                                            <option value="daily">{{__('common.last_date')}}</option>
                                            <option value="monthly">{{__('common.last_month')}}</option>
                                            <option value="yearly">{{__('common.last_year')}}</option>
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-primary mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="total_sales">${{$daily_orders_admin->sum('final_price')}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.Total sales')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-info mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="user" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_users">{{count($daily_users_admin)}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.number customers')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="media">
                                            <div class="avatar bg-light-danger mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_sales">{{$daily_orders_admin->sum('order_details_count')}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.number sales')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="media">
                                            <div class="avatar bg-light-success mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="revenue">${{$daily_orders_admin->sum('system_commission')}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.Total revenue')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>
                <div class="row match-height" style="margin-bottom: 20px;">
                    <!-- Card -->
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/vendors')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-success mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($vendors_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.vendors')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/clients')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-info mr-1">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($users_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.users')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/stores')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-secondary mr-1">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($stores_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.stores')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/sub_admins')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-warning mr-1">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($employess_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.employess')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/orders')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-danger mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($orders_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.orders')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-12">
                        <a href="{{url('/products')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-primary mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($products_admin)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.products')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--Card -->


                </div>

                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-4 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.vendors')}}</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('vendors')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>

                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr> 
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.Legal entity')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($last_vendors_admin as $vendor)

                                            <tr>
                                                <td>
                                                    <a href="{{url(app()->getLocale().'/vendors/'.$vendor->id)}}">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="{{$vendor->data->ID_image}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{$vendor->name}}</div>
                                                                <div class="font-small-2 text-muted">{{$vendor->email}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span>
                                                            @if($vendor->data->type == 'Commercial_Record')
                                                            {{__('common.Commercial_Record')}}
                                                            @elseif($vendor->data->type == 'freelance_work')
                                                            {{__('common.freelance_work')}}
                                                            @elseif($vendor->data->type == 'National_Identity')
                                                            {{__('common.National_Identity')}}
                                                            @endif
                                                        </span>
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
                    <!--/ Company Table Card -->

                    <!-- Company Table Card -->
                    <div class="col-lg-4 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.clients')}}</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('clients')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>

                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_client')}}</th>
                                                <th>{{__('common.mobile')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($last_users_admin as $client)

                                            <tr>
                                                <td>
                                                    <a href="{{url(app()->getLocale().'/clients/'.$client->id)}}">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="{{$client->photo}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{$client->name}}</div>
                                                                <div class="font-small-2 text-muted">{{$client->email}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <span>{{$client->mobile}}</span>
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
                    <!--/ Company Table Card -->
                    <!-- Company Table Card -->
                    <div class="col-lg-4 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.orders')}}</h4>
                            </div>

                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('orders')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>

                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_user')}}</th>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.price')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($last_orders_admin as $order)

                                            <tr>
                                                <td>
                                                    <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="{{$order->users->photo}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                                <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if($order->vendor_id == 0)
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{Auth::user()->photo}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{Auth::user()->name}}</div>
                                                            <div class="font-small-2 text-muted">{{Auth::user()->email}}</div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                            <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td>${{$order->final_price}}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->



                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-browser-states">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">{{__('common.top_countries')}}</h4>
                                </div>
                                <div class="dropdown chart-dropdown">
                                    <a href="{{url('/countries')}}"><small>{{__('common.all')}}</small></a>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($top_rated_countries as $country)
                                <div class="browser-states">
                                    <div class="media">
                                        <!-- <img src="{{url('public/dashborad/app-assets/images/icons/google-chrome.png')}}" class="rounded mr-1" height="30" alt="Google Chrome" /> -->
                                        <h6 class="align-self-center mb-0">
                                            @if(app()->getLocale()=='ar')
                                            {{$country->country_ar}}
                                            @else
                                            {{$country->Country}}
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">{{$country->orders_count}}</div>
                                        <!-- <div id="browser-state-chart-primary"></div> -->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-browser-states">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">{{__('common.top_users')}}</h4>
                                </div>
                                <div class="dropdown chart-dropdown">
                                    <a href="{{url('clients')}}">
                                        <small>{{__('common.all')}}</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($top_rated_users as $user)
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{$user->photo}}" class="rounded mr-1" height="30" alt="Google Chrome" />
                                        <h6 class="align-self-center mb-0">{{$user->name}}</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">${{$user->orders->sum('final_price')}}</div>
                                        <!-- <div id="browser-state-chart-primary"></div> -->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-browser-states">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">{{__('common.top_products')}}</h4>
                                </div>
                                <div class="dropdown chart-dropdown">
                                    <a href="{{url('products')}}">
                                        <small>{{__('common.all')}}</small>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($top_rated_products as $product)
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{$product->image}}" class="rounded mr-1" height="30" alt="Google Chrome" />
                                        <h6 class="align-self-center mb-0">
                                            @if(app()->getLocale()=='en')
                                            {{$product->name_en}}
                                            @else
                                            {{$product->name_ar}}
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">{{$product->orders->sum('quantity')}} {{__('common.unit')}}</div>
                                        <!-- <div id="browser-state-chart-primary"></div> -->
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->


                    <!-- Storage Spaces Table-->
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.storage_spaces')}}</h4>
                            </div>

                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('storage_spaces')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>

                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.company_name')}}</th>
                                                <th>{{__('common.space')}}</th>
                                                <th>{{__('common.price')}}</th>
                                                <th>{{__('common.created_at')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($accepted_bookings as $order)

                                            <tr id="tr_new-{{$order->id}}">
                                                <td>
                                                    <a href="{{url(app()->getLocale().'/vendors/'.$vendor->id)}}">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="{{$order->vendors->data->ID_image}}" style="height: 30px;border-radius: 50%;width:100%;" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                                <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <span class="font-weight-bold">
                                                        {{ $order->stores->company_name }}
                                                    </span>
                                                </td>

                                                <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->area }}</span></td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $order->price }}</span></td>

                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Storage Spaces Table -->

                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endcan
@can('roles.vendor')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>{{__('common.daily_sales')}}</h5>
                                <p class="card-text font-small-3">{{__('common.sales_number')}} : {{count($daily_orders_vendors)}}</p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="javascript:void(0);">${{$daily_orders_vendors->sum('final_price')}}</a>
                                </h3>
                                <a href="{{url('orders')}}">
                                    <button type="button" class="btn btn-primary">{{__('common.View Sales')}}</button>
                                </a>
                                <img src="{{url('public/dashborad/app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.Statistics')}}</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 mr-25 mb-0">
                                        <select class="form-control" id="select_duraiton" onchange="update_statistics('vendor')">
                                            <option value="daily">{{__('common.last_date')}}</option>
                                            <option value="monthly">{{__('common.last_month')}}</option>
                                            <option value="yearly">{{__('common.last_year')}}</option>
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-primary mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="total_sales">${{$daily_orders_vendors->sum('final_price')}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.Total sales')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-info mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="user" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_users">{{count($daily_users_admin)}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.number customers')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="media">
                                            <div class="avatar bg-light-danger mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_sales">{{count($daily_orders_vendors)}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.number sales')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="media">
                                            <div class="avatar bg-light-success mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="revenue">$0</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.Total revenue')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>

                <div class="row match-height" style="margin-bottom: 20px;">
                    <!-- Card -->
                    <div class="col-xl-4 col-md-4 col-12">
                        <a href="{{url('products')}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-primary mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($products_vendor)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.products')}}</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    @if($points_vendor != null)
                    <div class="col-xl-4 col-md-4 col-12">
                        <a href="{{url(app()->getLocale().'/points/'.Auth::user()->vendor_id)}}">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-info mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{ $points_vendor->points - $points_vendor->points_spent }}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.points')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    <div class="col-xl-4 col-md-4 col-12">
                        <a href="orders">
                            <div class="bg-statstice" style="background: #fff;padding: 15px;border-radius: 0.428rem;display:flex">
                                <div class="avatar bg-light-success mr-2">
                                    <div class="avatar-content" style="width: 40px;height: 40px;">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">{{count($orders_vendor)}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('common.orders')}}</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!--Card -->
                </div>

                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.orders')}}</h4>
                            </div>

                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('orders')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_client')}}</th>
                                                <th>{{__('common.status')}}</th>
                                                <th>{{__('common.price')}}</th>
                                                <th>{{__('common.number_products')}}</th>
                                                <th>{{__('common.created_at')}}</th>
                                                <th>{{__('common.actions')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vendor_orders as $order)

                                            <tr>
                                                <td>
                                                    <a href="{{url(app()->getLocale().'/orders/'.$order->id)}}">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="{{$order->users->photo}}" height="35px" style="border-radius: 50%;" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                                <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if($order->status == 0)
                                                    <span class="badge badge-pill badge-light-info mr-1">
                                                        {{__('common.new')}}
                                                    </span>
                                                    @elseif($order->status == 1)
                                                    <span class="badge badge-pill badge-light-success mr-1">
                                                        {{__('common.accepted')}}
                                                    </span>
                                                    @elseif($order->status == 2)
                                                    <span class="badge badge-pill badge-light-secondary mr-1">
                                                        {{__('common.finished')}}
                                                    </span>
                                                    @elseif($order->status == 3)
                                                    <span class="badge badge-pill badge-light-danger mr-1">
                                                        {{__('common.canceled')}}
                                                    </span>
                                                    @endif
                                                </td>

                                                <td class="text-nowrap">
                                                    <div class="d-flex flex-column">
                                                        <span class="font-weight-bolder mb-25">{{$order->final_price}} $</span>
                                                    </div>
                                                </td>

                                                <td style="text-align: center;">
                                                    <span class="badge badge-pill badge-light-primary mr-1">
                                                        {{$order->order_details_count}}
                                                    </span>
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
                    <!--/ Company Table Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endcan
@can('roles.stores')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>{{$store->company_name}}</h5>
                                <p class="card-text font-small-3">{{__('common.all_spaces')}}</p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    @if($first_branche != null)
                                    <a href="javascript:void(0);" id="all_spaces">{{$first_branche->area}}</a>
                                    @else
                                    <a href="javascript:void(0);">0</a>
                                    @endif
                                </h3>
                                <select style="width:50%;" class="form-control" id="select_branches" onchange="update_branches_statistics()">
                                    @if($branches != null)
                                    @foreach($branches as $branche)
                                    <option value="{{$branche->id}}">
                                        {{$branche->name_ar}}
                                    </option>
                                    @endforeach
                                    @else
                                    <option>
                                        {{__('common.no_branches')}}
                                    </option>
                                    @endif
                                </select>
                                <img src="{{url('public/dashborad/app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-8 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.Statistics')}}</h4>
                                <div class="d-flex align-items-center">
                                    <p class="card-text font-small-2 mr-25 mb-0">

                                    </p>
                                </div>
                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-primary mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="new_shippments">{{$new_shippments_count}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.new_shippments')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-info mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="extra_spaces">{{$extra_spaces_count}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.extra_spaces')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="media">
                                            <div class="avatar bg-light-danger mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="booking_orders">{{$booking_orders_count}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.booking_orders')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-6 col-12">
                                        <div class="media">
                                            <div class="avatar bg-light-success mr-2">
                                                <div class="avatar-content">
                                                    <i data-feather="box" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="return_orders">{{$returns_orders_count}}</h4>
                                                <p class="card-text font-small-3 mb-0">{{__('common.return_orders')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>
                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <h4>{{__('common.new_shippments')}}</h4>
                            </div>

                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.name_branch')}}</th>
                                                <th>{{__('common.area')}}</th>
                                                <th>{{__('common.status')}}</th>
                                                <th>{{__('common.created_at')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($new_shippments_orders != null)
                                            @foreach($new_shippments_orders as $order)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                            <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">

                                                        <span>
                                                            @if(app()->getLocale()=='ar')
                                                            {{$order->branches->name_ar}}
                                                            @else
                                                            {{$order->branches->name_en}}
                                                            @endif
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>{{$order->total_volume}}</td>
                                                @if($order->status == 0)
                                                <td><span class="badge badge-pill badge-light-info mr-1">{{ __('common.new') }}</span></td>
                                                @elseif($order->status == 1)
                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ __('common.stored') }}</span></td>
                                                @elseif($order->status == 2)
                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ __('common.inprocess') }}</span></td>
                                                @elseif($order->status == 3)
                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ __('common.finished') }}</span></td>
                                                @elseif($order->status == 4)
                                                <td><span class="badge badge-pill badge-light-secondary mr-1">{{ __('common.inprocess') }}</span></td>
                                                @endif
                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->
                </div>

                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.extra_space')}}</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('extra_space')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.name_branche')}}</th>
                                                <th>{{__('common.area')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($extra_spaces_orders as $order)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                            <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if(app()->getLocale()=='ar')
                                                    {{$order->branches->name_ar}}
                                                    @else
                                                    {{$order->branches->name_en}}
                                                    @endif
                                                </td>
                                                <td>{{$order->area}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->
                    <!-- Company Table Card -->
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.booking_orders')}}</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('booking_orders')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.name_branche')}}</th>
                                                <th>{{__('common.area')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bookings_orders as $order)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                            <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if(app()->getLocale()=='ar')
                                                    {{$order->branches->name_ar}}
                                                    @else
                                                    {{$order->branches->name_en}}
                                                    @endif
                                                </td>
                                                <td>
                                                <td>
                                                    {{$order->area}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->
                </div>

                <div class="row match-height">
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-xs-6">
                                <h4>{{__('common.return_orders')}}</h4>
                            </div>
                            <div class="col-lg-6 col-xs-6" style="text-align: end;">
                                <a href="{{url('return_order_store')}}">
                                    <small>{{__('common.view_all')}}</small>
                                </a>
                            </div>
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>{{__('common.name_vendor')}}</th>
                                                <th>{{__('common.name_branche')}}</th>
                                                <th>{{__('common.name_product')}}</th>
                                                <th>{{__('common.area')}}</th>
                                                <th>{{__('common.Qty')}}</th>
                                                <th>{{__('common.created_at')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($new_return_orders as $order)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                            <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    @if(app()->getLocale()=='ar')
                                                    {{$order->branches->name_ar}}
                                                    @else
                                                    {{$order->branches->name_en}}
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->products->image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="font-weight-bolder">
                                                                @if(app()->getLocale()=='ar')
                                                                {{$order->products->name_ar}}
                                                                @else
                                                                {{$order->products->name_en}}
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>{{$order->total_volume}}</td>
                                                <td>{{$order->product_qty}}</td>

                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Company Table Card -->
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endcan
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function update_statistics(type) {

        var duration = $("#select_duraiton").val();
        var url = '{{url(app()->getLocale()."/update_statistics")}}/' + type + '/' + duration;
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'get',
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            url: url,
            data: {
                _method: 'get'
            },
            success: function(response) {
                console.log(response.message);
                if (response.message === 'Success') {
                    $('#count_sales').html(response.orders)
                    $('#total_sales').html('$' + response.total_sales)
                    $('#count_users').html(response.users)
                    $('#revenue').html('$' + response.revenue)

                    // toastr.success("{{__('common.send_order')}}")
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

<script>
    function update_branches_statistics() {
        var branche = $("#select_branches").val();
        var url = '{{url(app()->getLocale()."/update_branches_statistics")}}/' + branche;
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'get',
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            url: url,
            data: {
                _method: 'get'
            },
            success: function(response) {
                console.log(response.message);
                if (response.message === 'Success') {
                    $('#all_spaces').html(response.branche.area)
                    $('#new_shippments').html(response.new_shippments_count)
                    $('#extra_spaces').html(response.extra_spaces_count)
                    $('#booking_orders').html(response.booking_orders_count)
                    $('#return_orders').html(response.returns_orders_count)


                    // toastr.success("{{__('common.send_order')}}")
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