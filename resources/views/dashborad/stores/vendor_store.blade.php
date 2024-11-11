@extends('layouts.dashborad')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        fn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            font-family: 'Tajawal', sans-serif;
        }

        #sidebar {
            position: relative;
            top: -20px;
        }

        .switch input {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 100;
            opacity: 0;
            cursor: pointer;
        }

        .switch {
            border-radius: 40px;
            width: 60px;
            height: 25px;
            margin: 10px auto;
            position: relative;
        }

        .switch:after {
            content: "";
            position: absolute;
            z-index: -1;
            top: -8px;
            right: -8px;
            bottom: -8px;
            left: -8px;
            border-radius: inherit;
            background: #ccc;
            background: -webkit-linear-gradient(#f2f2f2, #ababab);
            box-shadow: 0 0 10px rgba(0, 0, 0, .3),
                0 1px 1px rgba(0, 0, 0, 0.25);
        }

        .switch:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -18px;
            right: -18px;
            bottom: -18px;
            left: -18px;
            border-radius: inherit;
            background: #eee;
            background: linear-gradient(#e5e7e6, #eee);
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            -webkit-filter: blur(1px);
            filter: blur(1px);
        }

        .span-switch {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
            background: linear-gradient(90deg, #28c76f 50%, #a5a39d 50%);
            border-radius: 40px;
            box-shadow:
                inset 0 3px 8px 1px rgba(0, 0, 0, 0.2),
                0 1px 0 rgba(255, 255, 255, 0.5);
        }

        .span-switch:before {
            content: "off";
            position: absolute;
            top: 65%;
            right: 9%;
            margin-top: -12px;
            color: #666;
            color: rgba(0, 0, 0, 0.4);
            font-style: normal;
            font-weight: bold;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            text-shadow: 0 1px 0 #bcb8ae, 0 -1px 0 #97958e;
        }

        .span-switch:after {
            content: "on";
            color: #ffffff;
            font-style: normal;
            font-weight: bold;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            margin-top: -12px;
            position: absolute;
            right: 68%;
            text-shadow: 0 1px 0 #ffffff, 0 -1px 0 #ffffff;
            top: 65%;
        }

        .label-switch {
            background: #b2ac9e;
            background: linear-gradient(#f7f2f6, #b2ac9e);
            border-radius: 40px;
            box-shadow:
                inset 0 1px 0 white,
                0 0 8px rgba(0, 0, 0, 0.3),
                0 5px 5px rgba(0, 0, 0, 0.2);
            display: block;
            height: 100%;
            position: absolute;
            right: 41%;
            top: 0;
            transition: all .5s;
            width: 60%;
            z-index: 2;
        }

        .label-switch:after {
            background: #d2cbc3;
            background: linear-gradient(#cbc7bc, #d2cbc3);
            border-radius: inherit;
            content: "";
            height: 50%;
            left: 15%;
            position: absolute;
            top: 25%;
            width: 70%;
        }

        input:checked+label {
            left: auto;
            right: -1%;
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
                            <h2 class="content-header-title float-left mb-0">{{ __('common.stores') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/stores') }}">
                                            {{ __('common.stores') }}
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
            <div class="container">
                @if (count($errors) > 0)
                    <ul style="border: 1px solid #e02222; background-color: white">
                        @foreach ($errors->all() as $error)
                            <li style="color: #e02222; margin: 15px">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                @if (session('error'))
                    <ul style="border: 1px solid #e02222; background-color: white">
                        <li style="color: #e02222; margin: 15px">{{ $error }}</li>
                    </ul>
                @endif
                @if (session('status'))
                    <ul style="border: 1px solid #01b070; background-color: white; border-radius: 5px;">
                        <li style="color: #01b070; margin: 15px">{{ session('status') }}</li>
                    </ul>
                @endif
            </div>


            <div class="content-body">

                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>{{ __('common.current_space') }}</h5>
                                <p class="card-text font-small-3"></p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="javascript:void(0);">{{ $store->area - $store->spent_space }}</a>
                                </h3>
                                @if (Auth::user()->role_id != 3)
                                    <button type="button" data-toggle="modal" data-target="#extra_space"
                                        class="btn btn-primary">{{ __('common.extra_spaces') }}</button>
                                @endif
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
                                                <h4 class="font-weight-bolder mb-0">
                                                    {{ $store->area - $store->spent_space }}</h4>
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
                                                <h4 class="font-weight-bolder mb-0">{{ $store->spent_space }}</h4>
                                                <p class="card-text font-small-3 mb-0">{{ __('common.spent_space') }}</p>
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


                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.products') }}</h2>

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
                                        <tr>
                                            <th>{{ __('common.name_product') }}</th>
                                            <th>{{ __('common.image') }}</th>
                                            <th>{{ __('common.Qty') }}</th>
                                            <th>{{ __('common.all_spaces') }}</th>
                                            <th>{{ __('common.current_space') }}</th>
                                            <th>{{ __('common.spent_space') }}</th>
                                            <th>{{ __('common.created_at') }}</th>
                                            <th>{{ __('common.actions') }}</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach ($stored_bookings as $order)
                                            @foreach ($order->details_shippment as $product)
                                                <tr id="tr-{{ $product->id }}">
                                                    <td>
                                                        <span class="font-weight-bold">
                                                            @if (app()->getLocale() == 'en')
                                                                {{ $product->products->name_en }}
                                                            @else
                                                                {{ $product->products->name_ar }}
                                                            @endif
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <img src="{{ $product->products->image }}" style="height: 50px;"
                                                            alt="Image Product" />
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                    </td>

                                                    <td>{{ $product->total_volume }}</td>
                                                    <td></td>
                                                    <td></td>

                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                    </td>
                                                    <td style="display: flex;padding-top:23px;">

                                                        <a
                                                            href="{{ url(app()->getLocale() . '/products/' . $product->products->id) }}">
                                                            <div class="badge badge-pill badge-light-warning mr-50">
                                                                {{ __('common.view') }}
                                                            </div>
                                                        </a>
                                                        @can('products.edit')
                                                            <a
                                                                href="{{ url(app()->getLocale() . '/products/' . $product->products->id . '/edit') }}">
                                                                <div class="badge badge-pill badge-light-primary mr-50">
                                                                    {{ __('common.edit') }}
                                                                </div>
                                                            </a>
                                                        @endcan
                                                        @can('return.orders')
                                                            @if ($product->products->store == 1)
                                                                <div id="return_from_store{{ $product->products->id }}"
                                                                    class="badge badge-pill badge-light-info mr-50"
                                                                    style="cursor: pointer;" data-toggle="modal"
                                                                    data-target="#return_product{{ $product->products->id }}">
                                                                    {{ __('common.return') }}
                                                                </div>
                                                            @else
                                                                <div class="badge badge-pill badge-light-info mr-50"
                                                                    style="cursor: pointer;">
                                                                    {{ __('common.Return_request_sent') }}
                                                                </div>
                                                            @endif
                                                        @endcan
                                                    </td>
                                                </tr>
                                                <!--Return Store-->
                                                <div id="return_product{{ $product->products->id }}"
                                                    class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">
                                                                    {{ __('common.return_from_store') }}</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <svg aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-x">
                                                                        <line x1="18" y1="6"
                                                                            x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6"
                                                                            x2="18" y2="18"></line>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="FormReturnProduct" action="javascript:void(0)">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id"
                                                                        value="{{ $product->products->id }}" />
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div style="text-align: center;">
                                                                                <img src="{{ $product->products->image }}"
                                                                                    width="100%" height="350"
                                                                                    alt="" />
                                                                                <h6
                                                                                    style="margin-top: 16px;font-weight: bold;font-size: 20px;">
                                                                                    {{ $product->products->name_ar }}
                                                                                </h6>
                                                                            </div>
                                                                            <div style="margin-bottom: 20px;">
                                                                                <label for="t-text"
                                                                                    class="">{{ __('common.Qty') }}</label>
                                                                                <input id="t-text" type="number"
                                                                                    name="return_qty"
                                                                                    placeholder="{{ __('common.Qty') }}"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer md-button">
                                                                        <button class="btn" data-dismiss="modal"><i
                                                                                class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                        <button id="btn_return_to_trader"
                                                                            class="btn btn-primary">{{ __('common.save') }}</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Model Return Store-->
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.shippments') }}</h2>
                        </div>
                    </div>
                </div>
                <!-- Basic tabs start -->
                <section id="basic-tabs-components">
                    <div class="row match-height">
                        <!-- Basic Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                aria-controls="home" role="tab"
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
                                            <a class="nav-link" id="canceled_bookings-tab" data-toggle="tab"
                                                href="#canceled_bookings" aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.canceled_shippments') }}</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home" aria-labelledby="profile-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        @can('booking.orders.operations')
                                                                            <th>{{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($new_bookings as $order)
                                                                        @foreach ($order->details_shippment as $product)
                                                                            <tr id="tr_new-{{ $order->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        @if (app()->getLocale() == 'en')
                                                                                            {{ $product->products->name_en }}
                                                                                        @else
                                                                                            {{ $product->products->name_ar }}
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <img src="{{ $product->products->image }}"
                                                                                        style="height: 50px;"
                                                                                        alt="Image Product" />
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                                                </td>

                                                                                @can('booking.orders.operations')
                                                                                    <td>

                                                                                        <div class="d-flex justify-content-between"
                                                                                            id="switch_activate"
                                                                                            style="margin-bottom: 10px;">
                                                                                            <div
                                                                                                class="custom-control custom-switch">
                                                                                                <input type="checkbox"
                                                                                                    id="paymentTerms{{ $order->id }}"
                                                                                                    class="custom-control-input toggle-class{{ $order->id }}"
                                                                                                    data-id="{{ $order->id }}"
                                                                                                    onclick="change_status({{ $order->id }})"
                                                                                                    type="checkbox"
                                                                                                    data-onstyle="success"
                                                                                                    data-offstyle="danger"
                                                                                                    data-toggle="toggle"
                                                                                                    data-on="Active"
                                                                                                    data-off="InActive"
                                                                                                    {{ $order->status ? 'checked' : '' }} />
                                                                                                <label
                                                                                                    class="custom-control-label"
                                                                                                    for="paymentTerms{{ $order->id }}"></label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                @endcan
                                                                                <td>{{ $product->total_volume }}</td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                                </td>
                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>
                                                                                    @can('booking.orders.operations')
                                                                                        <div class="badge badge-pill badge-light-secondary mr-50"
                                                                                            href="#cancel_booking_orders{{ $order->id }}"
                                                                                            role="button"
                                                                                            data-toggle="modal">
                                                                                            {{ __('common.cancel_booking_orders') }}
                                                                                        </div>
                                                                                    @endcan
                                                                                    @can('products.edit')
                                                                                        <a
                                                                                            href="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                            <div
                                                                                                class="badge badge-pill badge-light-primary mr-50">
                                                                                                {{ __('common.edit') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    @endcan
                                                                                </td>
                                                                                <!--Form cancel product -->
                                                                                <div id="cancel_booking_orders{{ $order->id }}"
                                                                                    class="modal fade" tabindex="-1"
                                                                                    role="dialog"
                                                                                    aria-labelledby="myModalLabel1"
                                                                                    aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                                <h4 class="modal-title">
                                                                                                    {{ __('common.cancel_booking_orders') }}
                                                                                                </h4>
                                                                                            </div>
                                                                                            <form id="FormCancelBooking"
                                                                                                action="javascript:void(0)">
                                                                                                @csrf
                                                                                                <input name="order_id"
                                                                                                    value="{{ $order->id }}"
                                                                                                    type="hidden" />
                                                                                                <div class="modal-body">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="account-name">{{ __('common.notes') }}</label>
                                                                                                        <textarea type="text" class="form-control" id="notes" placeholder="{{ __('common.notes') }}"
                                                                                                            name="store_notes" rows="3"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button
                                                                                                        class="btn default"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                                    <button
                                                                                                        class="btn btn-secondary"
                                                                                                        id="cancel_booking_orders_btn">{{ __('common.cancel_booking_orders') }}</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- End cancel product -->
                                                                            </tr>
                                                                        @endforeach
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
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        @can('booking.orders.operations')
                                                                            <th>{{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($accepted_bookings as $order)
                                                                        @foreach ($order->details_shippment as $product)
                                                                            <tr id="tr-{{ $product->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        @if (app()->getLocale() == 'en')
                                                                                            {{ $product->products->name_en }}
                                                                                        @else
                                                                                            {{ $product->products->name_ar }}
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <img src="{{ $product->products->image }}"
                                                                                        style="height: 50px;"
                                                                                        alt="Image Product" />
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                                                </td>

                                                                                @can('booking.orders.operations')
                                                                                    <td>
                                                                                        <div class="d-flex justify-content-between"
                                                                                            id="switch_activate"
                                                                                            style="margin-bottom: 10px;">
                                                                                            <div
                                                                                                class="custom-control custom-switch">
                                                                                                <input type="checkbox"
                                                                                                    id="paymentTerms{{ $order->id }}"
                                                                                                    class="custom-control-input toggle-class{{ $order->id }}"
                                                                                                    data-id="{{ $order->id }}"
                                                                                                    onclick="change_status({{ $order->id }})"
                                                                                                    type="checkbox"
                                                                                                    data-onstyle="success"
                                                                                                    data-offstyle="danger"
                                                                                                    data-toggle="toggle"
                                                                                                    data-on="Active"
                                                                                                    data-off="InActive"
                                                                                                    {{ $order->status ? 'checked' : '' }} />
                                                                                                <label
                                                                                                    class="custom-control-label"
                                                                                                    for="paymentTerms{{ $order->id }}"></label>
                                                                                            </div>
                                                                                        </div>

                                                                                    </td>
                                                                                @endcan
                                                                                <td>{{ $product->total_volume }}</td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                                </td>
                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>
                                                                                    @can('products.edit')
                                                                                        <a
                                                                                            href="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                            <div
                                                                                                class="badge badge-pill badge-light-primary mr-50">
                                                                                                {{ __('common.edit') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    @endcan
                                                                                    <div class="badge badge-pill badge-light-info mr-50"
                                                                                        style="cursor: pointer;">
                                                                                        {{ __('common.order_accpetted') }}
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
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
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($inprocess_bookings as $order)
                                                                        @foreach ($order->details_shippment as $product)
                                                                            <tr id="tr-{{ $product->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        @if (app()->getLocale() == 'en')
                                                                                            {{ $product->products->name_en }}
                                                                                        @else
                                                                                            {{ $product->products->name_ar }}
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <img src="{{ $product->products->image }}"
                                                                                        style="height: 50px;"
                                                                                        alt="Image Product" />
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                                                </td>

                                                                                <td>{{ $product->total_volume }}</td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                                </td>
                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>
                                                                                    @can('products.edit')
                                                                                        <a
                                                                                            href="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                            <div
                                                                                                class="badge badge-pill badge-light-primary mr-50">
                                                                                                {{ __('common.edit') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    @endcan
                                                                                    <div class="badge badge-pill badge-light-info mr-50"
                                                                                        style="cursor: pointer;">
                                                                                        {{ __('common.inprocess') }}
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
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
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.all_spaces') }}</th>
                                                                        <th>{{ __('common.current_space') }}</th>
                                                                        <th>{{ __('common.spent_space') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($stored_bookings as $order)
                                                                        @foreach ($order->details_shippment as $product)
                                                                            <tr id="tr-{{ $product->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        @if (app()->getLocale() == 'en')
                                                                                            {{ $product->products->name_en }}
                                                                                        @else
                                                                                            {{ $product->products->name_ar }}
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <img src="{{ $product->products->image }}"
                                                                                        style="height: 50px;"
                                                                                        alt="Image Product" />
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                                                </td>

                                                                                <td>{{ $product->total_volume }}</td>
                                                                                <td></td>
                                                                                <td></td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                                </td>
                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>
                                                                                    @can('products.edit')
                                                                                        <a
                                                                                            href="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                            <div
                                                                                                class="badge badge-pill badge-light-primary mr-50">
                                                                                                {{ __('common.edit') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    @endcan
                                                                                    <div class="badge badge-pill badge-light-info mr-50"
                                                                                        style="cursor: pointer;">
                                                                                        {{ __('common.stored') }}
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
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
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.notes') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($canceled_bookings as $order)
                                                                        @foreach ($order->details_shippment as $product)
                                                                            <tr id="tr-{{ $product->id }}">
                                                                                <td>
                                                                                    <span class="font-weight-bold">
                                                                                        @if (app()->getLocale() == 'en')
                                                                                            {{ $product->products->name_en }}
                                                                                        @else
                                                                                            {{ $product->products->name_ar }}
                                                                                        @endif
                                                                                    </span>
                                                                                </td>
                                                                                <td>
                                                                                    <img src="{{ $product->products->image }}"
                                                                                        style="height: 50px;"
                                                                                        alt="Image Product" />
                                                                                </td>
                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->product_qty }}</span>
                                                                                </td>

                                                                                <td>{{ $product->total_volume }}</td>
                                                                                <td>{{ $order->store_notes }}</td>

                                                                                <td><span
                                                                                        class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                                </td>
                                                                                <td
                                                                                    style="display: flex;padding-top:23px;">

                                                                                    <a
                                                                                        href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                        <div
                                                                                            class="badge badge-pill badge-light-warning mr-50">
                                                                                            {{ __('common.view') }}
                                                                                        </div>
                                                                                    </a>
                                                                                    @can('products.edit')
                                                                                        <a
                                                                                            href="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                            <div
                                                                                                class="badge badge-pill badge-light-primary mr-50">
                                                                                                {{ __('common.edit') }}
                                                                                            </div>
                                                                                        </a>
                                                                                    @endcan
                                                                                    <div class="badge badge-pill badge-light-info mr-50"
                                                                                        style="cursor: pointer;">
                                                                                        {{ __('common.canceled') }}
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.return_orders') }}</h2>
                        </div>
                    </div>
                </div>
                <!-- Basic tabs start -->
                <section id="basic-tabs-components">
                    <div class="row match-height">
                        <!-- Basic Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="profile-tab" data-toggle="tab"
                                                href="#new_return_product" aria-controls="profile" role="tab"
                                                aria-selected="false">{{ __('common.new_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="accepted-tab" data-toggle="tab"
                                                href="#accepted_return_product" aria-controls="profile" role="tab"
                                                aria-selected="false">{{ __('common.acceptted_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab"
                                                href="#inprocess_return_product" aria-controls="inprocess" role="tab"
                                                aria-selected="false">{{ __('common.inprocess_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="order-tab" data-toggle="tab"
                                                href="#order_return_product" aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.finished_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="canceled_bookings-tab" data-toggle="tab"
                                                href="#canceled__return_product" aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.canceled_orders') }}</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="new_return_product"
                                            aria-labelledby="profile-tab" role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($new_orders as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'en')
                                                                                        {{ $product->products->name_en }}
                                                                                    @else
                                                                                        {{ $product->products->name_ar }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->products->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="Image Product" />
                                                                            </td>
                                                                            <td>{{ $product->products->area }}</td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->return_qty }}
                                                                                </span>
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
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
                                        <div class="tab-pane" id="accepted_return_product" aria-labelledby="profile-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($accepted_orders as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'en')
                                                                                        {{ $product->products->name_en }}
                                                                                    @else
                                                                                        {{ $product->products->name_ar }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->products->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="Image Product" />
                                                                            </td>
                                                                            <td>{{ $product->products->area }}</td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->return_qty }}
                                                                                </span>
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
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
                                        <div class="tab-pane" id="inprocess_return_product" aria-labelledby="profile-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($inprocess_orders as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'en')
                                                                                        {{ $product->products->name_en }}
                                                                                    @else
                                                                                        {{ $product->products->name_ar }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->products->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="Image Product" />
                                                                            </td>
                                                                            <td>{{ $product->products->area }}</td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->return_qty }}
                                                                                </span>
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
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
                                        <div class="tab-pane" id="order_return_product" aria-labelledby="disabled-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($finished_orders as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'en')
                                                                                        {{ $product->products->name_en }}
                                                                                    @else
                                                                                        {{ $product->products->name_ar }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->products->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="Image Product" />
                                                                            </td>
                                                                            <td>{{ $product->products->area }}</td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->return_qty }}
                                                                                </span>
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
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
                                        <div class="tab-pane" id="canceled__return_product"
                                            aria-labelledby="disabled-tab" role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        <th>{{ __('common.space') }}</th>
                                                                        <th>{{ __('common.Qty') }}</th>
                                                                        <th>{{ __('common.notes') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($canceled_orders as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'en')
                                                                                        {{ $product->products->name_en }}
                                                                                    @else
                                                                                        {{ $product->products->name_ar }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->products->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="Image Product" />
                                                                            </td>
                                                                            <td>{{ $product->products->area }}</td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->return_qty }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->notes }}
                                                                                </span>
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
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
                    </div>
                </section>
                <!-- Basic Tabs end -->

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.extra_space') }}</h2>
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
                                            <th>{{ __('common.name_store') }}</th>
                                            <th>{{ __('common.height') }}</th>
                                            <th>{{ __('common.width') }}</th>
                                            <th>{{ __('common.length') }}</th>
                                            <th>{{ __('common.status') }}</th>
                                            <th>{{ __('common.created_at') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach ($exstra_spaces as $item)
                                            <tr id="tr-{{ $item->id }}">
                                                <td>
                                                    <span class="font-weight-bold">
                                                        {{ $item->stores->company_name }}
                                                    </span>
                                                </td>

                                                <td>{{ $item->height }}</td>
                                                <td>{{ $item->width }}</td>
                                                <td>{{ $item->length }}</td>
                                                @if ($item->status == 0)
                                                    <td><span
                                                            class="badge badge-pill badge-light-danger mr-1">{{ __('common.not_active') }}</span>
                                                    </td>
                                                @else
                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ __('common.active') }}</span>
                                                    </td>
                                                @endif
                                                <td><span
                                                        class="badge badge-pill badge-light-success mr-1">{{ $item->created_at }}</span>
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
    <!-- END: Content-->





    <!--extra_space-->
    <div id="extra_space" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog" style="max-width:65%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('common.Reserve an empty space') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url(app()->getLocale() . '/extra_space') }}"
                        enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $store->store_id }}" name="store_id" />
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.branche') }}</label>
                                    <select class="form-control" name="branche_id">
                                        @foreach ($branches as $branche)
                                            <option value="{{ $branche->id }}">
                                                @if (app()->getLocale() == 'ar')
                                                    {{ $branche->name_ar }}
                                                @else
                                                    {{ $branche->name_en }}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.length') }}</label>
                                    <input id="t-text" type="number" name="length"
                                        placeholder="{{ __('common.length') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.height') }}</label>
                                    <input id="t-text" type="number" name="height"
                                        placeholder="{{ __('common.height') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.width') }}</label>
                                    <input id="t-text" type="number" name="width"
                                        placeholder="{{ __('common.width') }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i
                                    class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                            <button id="btn-bg" class="btn btn-primary">{{ __('common.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Model extra_space-->
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(document).ready(function() {
            $(document).on("click", "#btn_return_to_trader", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('return_trader') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormReturnProduct").reset();
                            $('#return_product' + response.item.product_id).modal('toggle');
                            $('#return_from_store' + response.item.product_id).html(
                                '{{ __('common.Return_request_sent') }}')
                            toastr.success("{{ __('common.Return_request_sent') }}")

                        }
                    }
                });
            });
        });
    </script>

    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/stores') }}/' + id;
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
                        $('#tr-' + id).hide(500);
                        $('#myModal' + id).modal('toggle');
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
        $(document).ready(function() {
            $(document).on("click", "#show_many_to_store", function() {
                let form = $(('#ListProductsForm').form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(('#ListProductsForm').form);
                $.ajax({
                    url: "{{ route('show_many_to_store') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            response.data.forEach(function(item) {
                                alert(1);
                                $('#list_products').prepend('')
                            })
                        }
                    }

                });
            });
        });
    </script>



    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function change_status(id) {
            var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 0;
            var order_id = $(".toggle-class" + id).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_status_booking_order') }}',
                data: {
                    'status': status,
                    'order_id': order_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        }

        $(function() {
            $('.close').click(function() {
                $(".toast-basic").removeClass("show");
                $(".toast-basic").addClass("hide");
            })
        })
    </script>


    <script>
        $(document).ready(function() {
            $(document).on("click", "#cancel_booking_orders_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('cancel_booking_order_form_store') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormCancelBooking").reset();
                            $('#tr_new-' + response.item.id).hide(500);
                            $('#cancel_booking_orders' + response.item.id).modal('toggle');

                            //swal("القضية حذفت!", {icon: "success"});
                        }
                    }

                });
            });
        });
    </script>
@endsection
