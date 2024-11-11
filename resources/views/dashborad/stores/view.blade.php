@extends('layouts.dashborad')
@section('css')
    <style>
        .filled-star {
            fill: #FF9F43;
            stroke: #FF9F43;
            color: #FF9F43;
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
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.store_page') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            {{ $store->company_name }}
                                        </a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn badge badge-pill badge-light-success"
                                type="button">{{ __('common.date_booking') }} : {{ $store->created_at }} </button>
                            <button class="btn badge badge-pill badge-light-danger"
                                type="button">{{ __('common.Remaining amount') }} : {{ $invoices->sum('price') }}$
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="app-user-view">
                    <!-- User Card & Plan Starts -->
                    <!-- <div class="row"> -->
                    <!-- User Card starts-->
                    <!-- <div class="col-xl-12 col-lg-8 col-md-7">
                                    <div class="card user-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                                    <div class="user-avatar-section">
                                                        <div class="d-flex justify-content-start">

                                                            <div class="d-flex flex-column ml-1">
                                                                <div class="user-info mb-1">
                                                                    <h4 class="mb-0">{{ $store->users->name }}</h4>
                                                                    <span class="card-text">{{ $store->users->email }}</span>
                                                                </div>
                                                                <div class="d-flex flex-wrap">
                                                                    <a href="{{ url(app()->getLocale() . '/stores/' . $store->id . '/edit') }}" class="btn btn-primary">{{ __('common.edit') }}</a>
                                                                    <a href="#myModal{{ $store->id }}" role="button" data-toggle="modal">
                                                                        <button class="btn btn-outline-danger ml-1">{{ __('common.delete') }}</button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center user-total-numbers">
                                                        <div class="d-flex align-items-center mr-2">
                                                            <div class="color-box bg-light-primary">
                                                                <i data-feather="dollar-sign" class="text-primary"></i>
                                                            </div>
                                                            <div class="ml-1">
                                                                <h5 class="mb-0">23.3k</h5>
                                                                <small>{{ __('common.Monthly Sales') }}</small>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="color-box bg-light-success">
                                                                <i data-feather="trending-up" class="text-success"></i>
                                                            </div>
                                                            <div class="ml-1">
                                                                <h5 class="mb-0">$99.87K</h5>
                                                                <small>{{ __('common.Annual Profit') }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                                    <div class="user-info-wrapper">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="user-info-title">
                                                                <i data-feather="user" class="mr-1"></i>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">{{ __('common.name') }}</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $store->users->name }}</p>
                                                        </div>
                                                    
                                                        <div class="d-flex flex-wrap my-50">
                                                            <div class="user-info-title">
                                                                <i data-feather="star" class="mr-1"></i>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">{{ __('common.role') }}</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $store->users->type }}</p>
                                                        </div>

                                                        <div class="d-flex flex-wrap">
                                                            <div class="user-info-title">
                                                                <i data-feather="phone" class="mr-1"></i>
                                                                <span class="card-text user-info-title font-weight-bold mb-0">{{ __('common.mobile') }}</span>
                                                            </div>
                                                            <p class="card-text mb-0">{{ $store->users->mobile }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                    <!-- /User Card Ends-->
                    <!-- </div> -->
                    <!-- User Card & Plan Ends -->

                    <!-- <div class="row match-height">  -->
                    <!-- Medal Card -->
                    <!-- <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>{{ __('common.current_space') }}</h5>
                                    <p class="card-text font-small-3"></p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="javascript:void(0);">{{ $store->area - $stores_vendors->sum('area') }}</a>
                                    </h3>
                                    <img src="{{ url('dashborad/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div> -->
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <!-- <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('common.Statistics') }}</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 mr-25 mb-0"></p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">{{ $store->area }}</h4>
                                                    <p class="card-text font-small-3 mb-0">{{ __('common.all_spaces') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-info mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">{{ $store->area - $stores_vendors->sum('area') }}</h4>
                                                    <p class="card-text font-small-3 mb-0">{{ __('common.current_space') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="media">
                                                <div class="avatar bg-light-danger mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">{{ $stores_vendors->sum('area') }}</h4>
                                                    <p class="card-text font-small-3 mb-0">{{ __('common.spent_space') }}</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!--/ Statistics Card -->
                    <!-- </div> -->
                    <div class="row match-height">
                        <!-- Medal Card -->
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="card card-congratulation-medal">
                                <div class="card-body">
                                    <h5>{{ $store->company_name }}</h5>
                                    <p class="card-text font-small-3">{{ __('common.all_spaces') }}</p>
                                    <h3 class="mb-75 mt-2 pt-50">
                                        <a href="javascript:void(0);" id="all_spaces">{{ $first_branche->area }}</a>
                                    </h3>
                                    <select style="width:50%;" class="form-control" id="select_branches"
                                        onchange="update_branches_statistics()">
                                        @foreach ($branches as $branche)
                                            <option value="{{ $branche->id }}">
                                                {{ $branche->name_ar }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <img src="{{ url('dashborad/app-assets/images/illustration/badge.svg') }}"
                                        class="congratulation-medal" alt="Medal Pic" />
                                </div>
                            </div>
                        </div>
                        <!--/ Medal Card -->

                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('common.Statistics') }}</h4>
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
                                                    <h4 class="font-weight-bolder mb-0" id="new_shippments">
                                                        {{ $new_shippments_count }}</h4>
                                                    <p class="card-text font-small-3 mb-0">
                                                        {{ __('common.new_shippments') }}</p>
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
                                                    <h4 class="font-weight-bolder mb-0" id="extra_spaces">
                                                        {{ $extra_spaces_count }}</h4>
                                                    <p class="card-text font-small-3 mb-0">{{ __('common.extra_spaces') }}
                                                    </p>
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
                                                    <h4 class="font-weight-bolder mb-0" id="booking_orders">
                                                        {{ $booking_orders_count }}</h4>
                                                    <p class="card-text font-small-3 mb-0">
                                                        {{ __('common.booking_orders') }}</p>
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
                                                    <h4 class="font-weight-bolder mb-0" id="return_orders">
                                                        {{ $returns_orders_count }}</h4>
                                                    <p class="card-text font-small-3 mb-0">
                                                        {{ __('common.return_orders') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                    <!-- Basic Tables start -->
                    <div class="row" id="basic-table">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('common.invoices') }}</h4>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('common.date_invoice') }}</th>
                                                <th>{{ __('common.price') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $invoice)
                                                <tr>
                                                    <td>
                                                        {{ $invoice->created_at }}
                                                    </td>
                                                    <td>
                                                        {{ $invoice->price }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>{{ __('common.total') }}</th>
                                                <th>${{ $invoices->sum('price') }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('common.payments') }}</h4>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>{{ __('common.date_payment') }}</th>
                                                <th>{{ __('common.price') }}</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($payments as $payment)
                                                <tr>
                                                    <td>
                                                        {{ $payment->created_at }}
                                                    </td>
                                                    <td>
                                                        ${{ $payment->amount }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>{{ __('common.total') }}</th>
                                                <th>${{ $payments->sum('amount') }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Basic Tables start -->
                    <div class="row" id="basic-table">
                        <div class="col-12">
                            <div class="card">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('common.name_vendor') }}</th>
                                                <th>{{ __('common.all_spaces') }}</th>
                                                <th>{{ __('common.current_space') }}</th>
                                                <th>{{ __('common.spent_space') }}</th>
                                                <th>{{ __('common.created_at') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="menu_new">
                                            @foreach ($stores_vendors as $store)
                                                <tr id="tr_new-{{ $store->id }}">
                                                    <td>
                                                        <span class="font-weight-bold">
                                                            {{ $store->vendors->name }}
                                                        </span>
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-info mr-1">{{ $store->area }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-warning mr-1">{{ $store->area - $store->spent_space }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-danger mr-1">{{ $store->spent_space }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ $store->created_at }}</span>
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

                    <!-- Basic tabs start -->
                    <section id="basic-tabs-components">
                        <div class="row match-height">
                            <!-- Basic Tabs starts -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                    href="#home" aria-controls="home" role="tab"
                                                    aria-selected="true">{{ __('common.new_shippments') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    aria-controls="profile" role="tab"
                                                    aria-selected="false">{{ __('common.acceptted_shippments') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#inprocess"
                                                    aria-controls="inprocess" role="tab"
                                                    aria-selected="false">{{ __('common.inprocess_shippments') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="order-tab" data-toggle="tab" href="#order"
                                                    aria-controls="order" role="tab"
                                                    aria-selected="false">{{ __('common.stored_shippments') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="order-tab" data-toggle="tab"
                                                    href="#canceled_bookings" aria-controls="canceled_bookings"
                                                    role="tab"
                                                    aria-selected="false">{{ __('common.canceled_shippments') }}</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home" aria-labelledby="home-tab"
                                                role="tabpanel">
                                                <!-- Basic Tables start -->
                                                <div class="row" id="basic-table">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                            <th>{{ __('common.invoice_code') }}</th>
                                                                            <th>{{ __('common.space') }}</th>
                                                                            <th>{{ __('common.created_at') }}</th>
                                                                            <th>{{ __('common.actions') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="menu_new">
                                                                        @foreach ($new_bookings as $order)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->vendors->name }}
                                                                                    </span>
                                                                                </td>

                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->invoice_code }}
                                                                                    </span>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $order->total_volume }}</span>
                                                                                </td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                                </td>

                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $order->id }}"
                                                                                        role="button"
                                                                                        data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <!--Form Delete -->
                                                                            <div id="myModal{{ $order->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                role="dialog"
                                                                                aria-labelledby="myModalLabel1"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                            <h4 class="modal-title">
                                                                                                {{ __('common.delete') }}
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>{{ __('common.confirm') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button class="btn btn-danger"
                                                                                                onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Form Delete -->
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Tables end -->
                                            </div>
                                            <div class="tab-pane" id="profile" aria-labelledby="profile-tab"
                                                role="tabpanel">
                                                <!-- Basic Tables start -->
                                                <div class="row" id="basic-table">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                            <th>{{ __('common.invoice_code') }}</th>
                                                                            <th>{{ __('common.space') }}</th>
                                                                            <th>{{ __('common.created_at') }}</th>
                                                                            <th>{{ __('common.actions') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="menu_new">
                                                                        @foreach ($accepted_bookings as $order)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->vendors->name }}
                                                                                    </span>
                                                                                </td>

                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->invoice_code }}
                                                                                    </span>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $order->total_volume }}</span>
                                                                                </td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                                </td>

                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $order->id }}"
                                                                                        role="button"
                                                                                        data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/details_booking_orders/' . $order->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                            <!--Form Delete -->
                                                                            <div id="myModal{{ $order->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                role="dialog"
                                                                                aria-labelledby="myModalLabel1"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                            <h4 class="modal-title">
                                                                                                {{ __('common.delete') }}
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>{{ __('common.confirm') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button class="btn btn-danger"
                                                                                                onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Form Delete -->
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Tables end -->
                                            </div>
                                            <div class="tab-pane" id="inprocess" aria-labelledby="profile-tab"
                                                role="tabpanel">
                                                <!-- Basic Tables start -->
                                                <div class="row" id="basic-table">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                            <th>{{ __('common.invoice_code') }}</th>
                                                                            <th>{{ __('common.space') }}</th>
                                                                            <th>{{ __('common.created_at') }}</th>
                                                                            <th>{{ __('common.actions') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="menu_new">
                                                                        @foreach ($inprocess_bookings as $order)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->vendors->name }}
                                                                                    </span>
                                                                                </td>

                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->invoice_code }}
                                                                                    </span>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $order->total_volume }}</span>
                                                                                </td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                                </td>

                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $order->id }}"
                                                                                        role="button"
                                                                                        data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/details_booking_orders/' . $order->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                            <!--Form Delete -->
                                                                            <div id="myModal{{ $order->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                role="dialog"
                                                                                aria-labelledby="myModalLabel1"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                            <h4 class="modal-title">
                                                                                                {{ __('common.delete') }}
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>{{ __('common.confirm') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button class="btn btn-danger"
                                                                                                onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Form Delete -->
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Tables end -->
                                            </div>
                                            <div class="tab-pane" id="order" aria-labelledby="disabled-tab"
                                                role="tabpanel">
                                                <!-- Basic Tables start -->
                                                <div class="row" id="basic-table">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                            <th>{{ __('common.invoice_code') }}</th>
                                                                            <th>{{ __('common.space') }}</th>
                                                                            <th>{{ __('common.created_at') }}</th>
                                                                            <th>{{ __('common.actions') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="menu_new">
                                                                        @foreach ($stored_bookings as $order)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->vendors->name }}
                                                                                    </span>
                                                                                </td>

                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->invoice_code }}
                                                                                    </span>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $order->total_volume }}</span>
                                                                                </td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                                </td>

                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $order->id }}"
                                                                                        role="button"
                                                                                        data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/details_booking_orders/' . $order->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                            <!--Form Delete -->
                                                                            <div id="myModal{{ $order->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                role="dialog"
                                                                                aria-labelledby="myModalLabel1"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                            <h4 class="modal-title">
                                                                                                {{ __('common.delete') }}
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>{{ __('common.confirm') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button class="btn btn-danger"
                                                                                                onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Form Delete -->
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Basic Tables end -->
                                            </div>
                                            <div class="tab-pane" id="canceled_bookings" aria-labelledby="disabled-tab"
                                                role="tabpanel">
                                                <!-- Basic Tables start -->
                                                <div class="row" id="basic-table">
                                                    <div class="col-12">
                                                        <div class="card">

                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                            <th>{{ __('common.invoice_code') }}</th>
                                                                            <th>{{ __('common.notes') }}</th>
                                                                            <th>{{ __('common.space') }}</th>
                                                                            <th>{{ __('common.created_at') }}</th>
                                                                            <th>{{ __('common.actions') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="menu_new">
                                                                        @foreach ($canceled_bookings as $order)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->vendors->name }}
                                                                                    </span>
                                                                                </td>

                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->invoice_code }}
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        {{ $order->store_notes }}
                                                                                    </span>
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $order->total_volume }}</span>
                                                                                </td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                                </td>

                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $order->id }}"
                                                                                        role="button"
                                                                                        data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/details_booking_orders/' . $order->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>

                                                                                </td>
                                                                            </tr>
                                                                            <!--Form Delete -->
                                                                            <div id="myModal{{ $order->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                role="dialog"
                                                                                aria-labelledby="myModalLabel1"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                            <h4 class="modal-title">
                                                                                                {{ __('common.delete') }}
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>{{ __('common.confirm') }}
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button class="btn btn-danger"
                                                                                                onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Form Delete -->
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

                        </div>
                    </section>
                    <!-- Basic Tabs end -->
                </section>
            </div>
            <!-- User Card & Plan Ends -->
        </div>
    </div>
    </div>
    </div>
    <!-- END: Content-->

    <!--Form Delete -->
    <div id="myModal{{ $store->id }}" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">
                        {{ __('common.delete') }}
                    </h4>
                </div>
                <div class="modal-body">
                    <p>{{ __('common.confirm') }} </p>
                </div>
                <div class="modal-footer">
                    <button class="btn default" data-dismiss="modal"
                        aria-hidden="true">{{ __('common.cancel') }}</button>
                    <a href="{{ url(app()->getLocale() . '/delete_store/' . $store->id) }}">
                        <button class="btn btn-danger">{{ __('common.delete') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Delete -->
@endsection
@section('js')
    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/delete_store') }}/' + id;
            var csrf_token = '{{ csrf_token() }}';
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
    <script>
        function update_branches_statistics() {

            var branche = $("#select_branches").val();
            var url = '{{ url(app()->getLocale() . '/update_branches_statistics') }}/' + branche;
            var csrf_token = '{{ csrf_token() }}';
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

                        // toastr.success("{{ __('common.send_order') }}")
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
