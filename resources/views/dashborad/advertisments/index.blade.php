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
                <div class="content-header-left col-md-7 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.products') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/products') }}">
                                            {{ __('common.products') }}
                                        </a>
                                    </li>

                                </ol>
                            </div>
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
                @if (session('warning'))
                    <ul style="border: 1px solid orange; background-color: white; border-radius: 5px;">
                        <li style="color: orange; margin: 15px">{{ session('warning') }}</li>
                    </ul>
                @endif
            </div>
            <div class="content-body">
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
                                                aria-selected="true">{{ __('common.new_products') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                aria-controls="profile" role="tab"
                                                aria-selected="false">{{ __('common.acceptted_products') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order"
                                                aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.canceled_products') }}</a>
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
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu_new">
                                                                    @foreach ($new_products as $product)
                                                                        <tr id="tr_new-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->name_ar }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->image }}"
                                                                                    style="height: 50px;" alt="" />
                                                                            </td>
                                                                            @can('products.activetion')
                                                                                <td>
                                                                                    @if ($product->vendor_id == 0)
                                                                                        5khamsat
                                                                                    @else
                                                                                        {{ $product->vendors->name }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                            </td>
                                                                            @can('orders.activetion')
                                                                                <td>
                                                                                    <div class="switch">
                                                                                        <!-- <input type="checkbox"> -->
                                                                                        <input data-id="{{ $product->id }}"
                                                                                            class="toggle-class{{ $product->id }}"
                                                                                            onclick="change_status({{ $product->id }})"
                                                                                            type="checkbox"
                                                                                            data-onstyle="success"
                                                                                            data-offstyle="danger"
                                                                                            data-toggle="toggle"
                                                                                            data-on="Active" data-off="InActive"
                                                                                            @if ($product->promotion == 1) checked @endif>

                                                                                        <label class="label-switch"></label>
                                                                                        <span class="span-switch"></span>
                                                                                    </div>
                                                                                </td>
                                                                            @endcan
                                                                            <td style="display: flex;padding-top:23px;">
                                                                                @can('orders.activetion')
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $product->id }}"
                                                                                        role="button" data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>
                                                                                @endcan
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href ="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>

                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $product->id }}"
                                                                            class="modal fade" tabindex="-1" role="dialog"
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
                                                                                        <p>{{ __('common.confirm') }} </p>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button class="btn default"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                        <button class="btn btn-danger"
                                                                                            onclick="delete_adv({{ $product->id }})">{{ __('common.delete') }}</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Delete -->

                                                                        <!--Form cancel product -->
                                                                        <div id="cancel_product{{ $product->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                        <h4 class="modal-title">
                                                                                            {{ __('common.cancel_product') }}
                                                                                        </h4>
                                                                                    </div>
                                                                                    <form id="FormCancelProduct"
                                                                                        action="javascript:void(0)">
                                                                                        @csrf
                                                                                        <input name="product_id"
                                                                                            value="{{ $product->id }}"
                                                                                            type="hidden" />
                                                                                        <div class="modal-body">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    for="account-name">{{ __('common.notes') }}</label>
                                                                                                <textarea type="text" class="form-control" id="notes" placeholder="{{ __('common.notes') }}" name="notes"
                                                                                                    rows="3"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button class="btn default"
                                                                                                data-dismiss="modal"
                                                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                            <button
                                                                                                class="btn btn-secondary"
                                                                                                id="cancel_product_btn">{{ __('common.cancel_product') }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End cancel product -->
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
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.activator') }}</th>
                                                                        @endcan
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($accepted_products as $product)
                                                                        <tr id="tr-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $product->name_ar }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="" />
                                                                            </td>
                                                                            @can('products.activetion')
                                                                                <td>
                                                                                    @if ($product->vendor_id == 0)
                                                                                        5khamsat
                                                                                    @else
                                                                                        {{ $product->vendors->name }}
                                                                                    @endif

                                                                                </td>
                                                                            @endcan
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                            </td>
                                                                            @can('products.activetion')
                                                                                <td>
                                                                                    @if (isset($product->activators->name))
                                                                                        <span
                                                                                            class="badge badge-pill badge-light-info mr-1">{{ $product->activators->name }}</span>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge badge-pill badge-light-info mr-1">{{ __('common.not_active') }}</span>
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            @can('products.activetion')
                                                                                <td>
                                                                                    <div class="switch">
                                                                                        <!-- <input type="checkbox"> -->
                                                                                        <input data-id="{{ $product->id }}"
                                                                                            class="toggle-class{{ $product->id }}"
                                                                                            onclick="change_status({{ $product->id }})"
                                                                                            type="checkbox"
                                                                                            data-onstyle="success"
                                                                                            data-offstyle="danger"
                                                                                            data-toggle="toggle"
                                                                                            data-on="Active"
                                                                                            data-off="InActive"
                                                                                            {{ $product->promotion ? 'checked' : '' }}>

                                                                                        <label class="label-switch"></label>
                                                                                        <span class="span-switch"></span>
                                                                                    </div>
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                @can('products.activetion')
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $product->id }}"
                                                                                        role="button" data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>
                                                                                @endcan
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href ="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>
                                                                            </td>

                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $product->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
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
                                                                                        <p>{{ __('common.confirm') }} </p>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button class="btn default"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                        <button class="btn btn-danger"
                                                                                            onclick="delete_adv({{ $product->id }})">{{ __('common.delete') }}</button>
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
                                                                        <th>{{ __('common.name_product') }}</th>
                                                                        <th>{{ __('common.image') }}</th>
                                                                        @can('products.activetion')
                                                                            <th>{{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        <th>{{ __('common.notes') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu_canceled">
                                                                    @foreach ($canceled_products as $product)
                                                                        <tr id="tr_cancel-{{ $product->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    @if (app()->getLocale() == 'ar')
                                                                                        {{ $product->name_ar }}
                                                                                    @else
                                                                                        {{ $product->name_en }}
                                                                                    @endif
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                <img src="{{ $product->image }}"
                                                                                    style="height: 50px;"
                                                                                    alt="" />
                                                                            </td>
                                                                            @can('products.activetion')
                                                                                <td>
                                                                                    @if ($product->vendor_id == 0)
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @else
                                                                                        {{ $product->vendors->name }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $product->notes_canceled }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span>
                                                                            </td>


                                                                            <td>
                                                                                @can('products.activetion')
                                                                                    <div class="badge badge-pill badge-light-danger mr-50"
                                                                                        href="#myModal{{ $product->id }}"
                                                                                        role="button" data-toggle="modal">
                                                                                        {{ __('common.delete') }}
                                                                                    </div>
                                                                                @endcan
                                                                                <a
                                                                                    href ="{{ url(app()->getLocale() . '/products/' . $product->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/products/' . $product->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>


                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $product->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
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
                                                                                        <p>{{ __('common.confirm') }} </p>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button class="btn default"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                        <button class="btn btn-danger"
                                                                                            onclick="delete_adv({{ $product->id }})">{{ __('common.delete') }}</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Delete -->

                                                                        <!--Form return_product -->
                                                                        <div id="return_product{{ $product->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                        <h4 class="modal-title">
                                                                                            {{ __('common.return_product') }}
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <p>{{ __('common.confirm') }} </p>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button class="btn default"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                        <button class="btn btn-success"
                                                                                            onclick="return_product({{ $product->id }})">{{ __('common.return_product') }}</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form return_product -->
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

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
@section('js')
    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function change_status(id) {
            var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 2;
            var product_id = $(".toggle-class" + id).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_promotion_product') }}',
                data: {
                    'status': status,
                    'product_id': product_id
                },
                success: function(data) {
                    console.log(data.success)
                    setTimeout(function() {
                        $(".toast-basic").removeClass("hide");
                    }, 10);
                    setTimeout(function() {
                        $(".toast-basic").addClass("show");
                    }, 10);
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
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/products') }}/' + id;
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
            $(document).on("click", "#cancel_product_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('cancel_product') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormCancelProduct").reset();
                            $('#tr_new-' + response.item.id).hide(500);
                            $('#cancel_product' + response.item.id).modal('toggle');
                            $('#menu_canceled').prepend('<tr id="tr_cancel-' + response.item
                                .id + '"><td><span class="font-weight-bold">' + response
                                .item.name_ar + '</span></td><td><img src="' + response.item
                                .image +
                                '" style="height: 50px;" alt="" /> </td><td>@if ('+response.item.vendor_id == 0+') {{ __('common.5khamsat') }} @else' +
                                response.item.vendors.name +
                                ' @endif</td><td>' +
                                response.item.notes_canceled +
                                '</td><td><span class="badge badge-pill badge-light-success mr-1">' +
                                response.item.created_at +
                                '</span></td><td><div class="badge badge-pill badge-light-danger mr-50" href="#myModal' +
                                response.item.id +
                                '" role="button" data-toggle="modal">{{ __('common.delete') }}</div><div class="badge badge-pill badge-light-success mr-50" href="#return_product' +
                                response.item.id +
                                '" role="button" data-toggle="modal">{{ __('common.return_product') }}</div> <a href="{{ url(app()->getLocale() . '/products/') }}/' +
                                response.item.id +
                                '"><div class="badge badge-pill badge-light-warning mr-50">{{ __('common.view') }}</div></a><a href="{{ url(app()->getLocale() . '/products/') }}/' +
                                response.item.id +
                                '/edit"><div class="badge badge-pill badge-light-primary mr-50">{{ __('common.edit') }}</div></a></td></tr>'
                                )
                            $('#menu_canceled').prepend('<div id="return_product' + response
                                .item.id +
                                '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"> <div class="modal-header"><!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> --> <h4 class="modal-title"> {{ __('common.return_product') }} </h4></div> <div class="modal-body"> <p>{{ __('common.confirm') }} </p> </div> <div class="modal-footer"><button class="btn default" data-dismiss="modal" aria-hidden="true">{{ __('common.cancel') }}</button><button class="btn btn-success" onclick="return_product(' +
                                response.item.id +
                                ')">{{ __('common.return_product') }}</button></div></div></div></div>'
                                )
                            //swal("القضية حذفت!", {icon: "success"});
                        }
                    }

                });
            });
        });
    </script>
    <script>
        function return_product(id) {
            var url = '{{ url(app()->getLocale() . '/return_product') }}/' + id;
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
                        $('#tr_cancel-' + id).hide(500);
                        $('#return_product' + id).modal('toggle');
                        $('#menu_new').prepend('<tr id="tr_new-' + response.item.id +
                            '"><td><span class="font-weight-bold">' + response.item.name_ar +
                            '</span></td><td><img src="' + response.item.image +
                            '" style="height: 50px;" alt="" /> </td><td>@if ('+response.item.vendor_id == 0+') {{ __('common.5khamsat') }} @else' +
                            response.item.vendors.name +
                            ' @endif</td><td><span class="badge badge-pill badge-light-success mr-1">' +
                            response.item.created_at +
                            '</span></td><td><div class="switch"> <!-- <input type="checkbox"> --> <input data-id="' +
                            response.item.id + '" class="toggle-class' + response.item.id +
                            '" onclick="change_status(' + response.item.id +
                            ')" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ 0 ? 'checked' : '' }}><label class="label-switch"></label> <span class="span-switch"></span> </div></td><td><div class="badge badge-pill badge-light-danger mr-50" href="#myModal' +
                            response.item.id +
                            '" role="button" data-toggle="modal">{{ __('common.delete') }}</div><div class="badge badge-pill badge-light-secondary mr-50" href="#cancel_product' +
                            response.item.id +
                            '" role="button" data-toggle="modal">{{ __('common.cancel_product') }}</div><a href="{{ url(app()->getLocale() . '/products/') }}/' +
                            response.item.id +
                            '"><div class="badge badge-pill badge-light-warning mr-50">{{ __('common.view') }}</div></a><a href="{{ url(app()->getLocale() . '/products/') }}/' +
                            response.item.id +
                            '/edit"><div class="badge badge-pill badge-light-primary mr-50">{{ __('common.edit') }}</div></a></td></tr>'
                            )
                        $('#menu_new').prepend('<div id="cancel_product' + response.item.id +
                            '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"> <div class="modal-header"><!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> --> <h4 class="modal-title"> {{ __('common.cancel_product') }} </h4></div> <div class="modal-body"><form id="FormCancelProduct" action="javascript:void(0)">@csrf<input name="product_id" value="' +
                            response.item.id +
                            '" type="hidden"/> <div class=""><div class="form-group"> <label for="account-name">{{ __('common.notes') }}</label><textarea type="text" class="form-control" id="notes" placeholder="{{ __('common.notes') }}" name="notes" rows="3"></textarea></div> </div></div> <div class="modal-footer"><button class="btn default" data-dismiss="modal" aria-hidden="true">{{ __('common.cancel') }}</button> <button class="btn btn-secondary" id="cancel_product_btn">{{ __('common.cancel_product') }}</button></div></form></div></div></div>'
                            )
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
        function get_sub_category(e) {
            $.get("{{ url('/') }}/get_sub_category/" + e.value, function(data, status) {

                $('#sub_category').empty('')
                $('#sub_sub_category').empty('')
                $('#sub_category').append('<option disabled selected>{{ __('common.sub_category') }}</option>')
                $('#sub_sub_category').append(
                    '<option disabled selected>{{ __('common.sub_category') }}</option>')

                console.log(data.data)
                data.data.forEach(function(item) {
                    $('#sub_category').append('<option  value="' + item.id + '">' + item
                    .if( /*___directives_script_6___*/ ) {
                        name_ar
                    @else
                        name_en
                    @endif + '</option>')
                })
            });
        }

        function get_sub_sub_category(e) {
            $.get("{{ url('/') }}/get_sub_sub_category/" + e.value, function(data, status) {

                $('#sub_sub_category').empty('')
                $('#sub_sub_category').append(
                    '<option disabled selected>{{ __('common.sub_category') }}</option>')

                console.log(data.data)
                data.data.forEach(function(item) {
                    $('#sub_sub_category').append('<option  value="' + item.id + '">' + item
                    .if( /*___directives_script_7___*/ ) {
                        name_ar
                    @else
                        name_en
                    @endif + '</option>')
                })
            });
        }
    </script>
@endsection
