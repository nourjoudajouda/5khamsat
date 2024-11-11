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
        dfn,
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
    <style>
        .toast-success div,
        .toast-warning div {
            position: relative;
            left: -30px;
            top: 2px;
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
                            <h2 class="content-header-title float-left mb-0">{{ __('common.vendors') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/vendors') }}">
                                            {{ __('common.vendors') }}
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
                            <!-- <button class="btn-icon btn btn-outline-info btn-round btn-sm dropdown-toggle" id="calculate_taxs" onclick="calculate_taxs()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('common.calculating_taxs') }}</button> -->
                            <button class="btn-icon btn btn-outline-success btn-round btn-sm dropdown-toggle"
                                onclick="collection_commission()" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ __('common.collection_commission') }}</button>
                            <button class="btn-icon btn btn-outline-info btn-round btn-sm dropdown-toggle"
                                id="calculate_taxs" onclick="calculating_commission()" type="button" data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">{{ __('common.calculating_commission') }}</button>
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal"
                                data-target="#vendor_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">{{ __('common.add_new_vendor') }}</button>

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




                <!-- Basic tabs start -->
                <section id="basic-tabs-components">
                    <div class="row match-height">
                        <!-- Basic Tabs starts -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">

                                <div class="card-body">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="new-tab" data-toggle="tab" href="#new"
                                                aria-controls="new" role="tab"
                                                aria-selected="true">{{ __('common.new_vendors') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="active-tab" data-toggle="tab" href="#active"
                                                aria-controls="active" role="tab"
                                                aria-selected="false">{{ __('common.active_vendors') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order"
                                                aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.not_active_vendors') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="rejected_vendors-tab" data-toggle="tab"
                                                href="#rejected_vendors" aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.rejected_vendors') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="rejected_vendors_system-tab" data-toggle="tab"
                                                href="#rejected_vendors_system" aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.rejected_vendors_system') }}</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="new" aria-labelledby="new-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <!-- <div class="card-header">
                                                            <h4 class="card-title">Table Basic</h4>
                                                        </div>
                                                        -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_store') }}</th>
                                                                        <th>{{ __('common.email') }}</th>
                                                                        <th>{{ __('common.kind_of_products') }}</th>
                                                                        <th>{{ __('common.status') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($new_vendors as $vendor)
                                                                        <tr id="tr-{{ $vendor->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $vendor->name_store }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->email }}
                                                                            </td>

                                                                            <td style="text-align: center;"><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $vendor->what_kind_products }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-flex justify-content-between"
                                                                                    id="switch_activate"
                                                                                    style="margin-bottom: 10px;">
                                                                                    <div
                                                                                        class="custom-control custom-switch">
                                                                                        <input type="checkbox"
                                                                                            id="paymentTerms{{ $vendor->id }}"
                                                                                            class="custom-control-input toggle-class{{ $vendor->id }}"
                                                                                            data-id="{{ $vendor->id }}"
                                                                                            onclick="change_status({{ $vendor->id }})"
                                                                                            type="checkbox"
                                                                                            data-onstyle="success"
                                                                                            data-offstyle="danger"
                                                                                            data-toggle="toggle"
                                                                                            data-on="Active"
                                                                                            data-off="InActive"
                                                                                            {{ $vendor->status ? 'checked' : '' }} />
                                                                                        <label class="custom-control-label"
                                                                                            for="paymentTerms{{ $vendor->id }}"></label>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $vendor->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>


                                                                                <div class="badge badge-pill badge-light-secondary mr-50"
                                                                                    href="#reject_vendor{{ $vendor->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.reject_vendor') }}
                                                                                </div>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#message_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/mail.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#mobile_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/smartphone.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Message-->
                                                                        <div id="message_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.send_message') }}
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Message-->

                                                                        <!--Mobile-->
                                                                        <div id="mobile_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.send_message') }}
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Mobile-->

                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $vendor->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true"></button>
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
                                                                                            onclick="delete_adv({{ $vendor->id }})">{{ __('common.delete') }}</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Delete -->


                                                                        <!--Form Reject -->
                                                                        <div id="reject_vendor{{ $vendor->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                                                        <h4 class="modal-title">
                                                                                            {{ __('common.reject_vendor') }}
                                                                                        </h4>
                                                                                    </div>
                                                                                    <form id="FormRejectVendor"
                                                                                        action="javascript:void(0)">
                                                                                        @csrf
                                                                                        <input name="vendor_id"
                                                                                            value="{{ $vendor->id }}"
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
                                                                                                id="reject_vendor_btn">{{ __('common.reject_vendor') }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Reject -->
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic Tables end -->
                                        </div>
                                        <div class="tab-pane" id="active" aria-labelledby="active-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <!-- <div class="card-header">
                                                            <h4 class="card-title">Table Basic</h4>
                                                        </div>
                                                        -->
                                                        <div class="table-responsive">
                                                            <table class="table"
                                                                style="overflow-x: auto;white-space: nowrap;">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_store') }}</th>
                                                                        <th>{{ __('common.email') }}</th>
                                                                        <th>{{ __('common.activator') }}</th>
                                                                        <th>{{ __('common.kind_of_products') }}</th>
                                                                        <th>{{ __('common.total_taxes_payable') }}</th>
                                                                        <th>{{ __('common.Total_commission_payable') }}
                                                                        </th>
                                                                        <th>{{ __('common.status') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($active_vendors as $vendor)
                                                                        <tr id="tr-{{ $vendor->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $vendor->name_store }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->email }}
                                                                            </td>
                                                                            <td>
                                                                                @if (isset($vendor->activators->name))
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $vendor->activators->name }}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.not_active') }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td style="text-align: center;"><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $vendor->what_kind_products }}</span>
                                                                            </td>
                                                                            <td>${{ $vendor->orders->sum('incomming_tax') + $vendor->orders->sum('value_added_tax') }}
                                                                            </td>
                                                                            <td>${{ $vendor->orders->sum('system_commission') }}
                                                                            </td>
                                                                            <td>

                                                                                <div class="d-flex justify-content-between"
                                                                                    id="switch_activate"
                                                                                    style="margin-bottom: 10px;">
                                                                                    <div
                                                                                        class="custom-control custom-switch">
                                                                                        <input type="checkbox"
                                                                                            id="paymentTerms{{ $vendor->id }}"
                                                                                            data-toggle="modal"
                                                                                            data-target="#status_fadeupModal{{ $vendor->id }}"
                                                                                            class="custom-control-input toggle-active-vendor-class{{ $vendor->id }}"
                                                                                            data-id="{{ $vendor->id }}"
                                                                                            type="checkbox"
                                                                                            data-onstyle="success"
                                                                                            data-offstyle="danger"
                                                                                            data-toggle="toggle"
                                                                                            data-on="Active"
                                                                                            data-off="InActive"
                                                                                            @if ($vendor->status == 1) checked @endif />
                                                                                        <label class="custom-control-label"
                                                                                            for="paymentTerms{{ $vendor->id }}"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $vendor->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#message_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/mail.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#mobile_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/smartphone.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Status-->
                                                                        <div id="status_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.notes') }}</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form id="FormCancelVendor"
                                                                                            action="javascript:void(0)">
                                                                                            @csrf
                                                                                            <input name="status"
                                                                                                value="2"
                                                                                                type="hidden" />
                                                                                            <input name="vendor_id"
                                                                                                value="{{ $vendor->id }}"
                                                                                                type="hidden" />
                                                                                            <div class="modal-body">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        for="account-name">{{ __('common.notes') }}</label>
                                                                                                    <textarea type="text" class="form-control" id="notes" placeholder="{{ __('common.notes') }}"
                                                                                                        name="notes" rows="3"></textarea>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button class="btn default"
                                                                                                    data-dismiss="modal"
                                                                                                    aria-hidden="true">{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    class="btn btn-secondary"
                                                                                                    data-id="{{ $vendor->id }}"
                                                                                                    id="cancel_vendor_btn">{{ __('common.disactive_vendor') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Status-->
                                                                        <!--Message-->
                                                                        <div id="message_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.notes') }}</h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Message-->

                                                                        <!--Mobile-->
                                                                        <div id="mobile_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.send_message') }}
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Mobile-->

                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $vendor->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true"></button>
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
                                                                                            onclick="delete_adv({{ $vendor->id }})">{{ __('common.delete') }}</button>
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
                                                        <!-- <div class="card-header">
                                                            <h4 class="card-title">Table Basic</h4>
                                                        </div>
                                                        -->
                                                        <div class="table-responsive">
                                                            <table class="table"
                                                                style="overflow-x: auto;white-space: nowrap;">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_store') }}</th>
                                                                        <th>{{ __('common.email') }}</th>
                                                                        <th>{{ __('common.disactive') }}</th>
                                                                        <th>{{ __('common.notes') }}</th>
                                                                        <th>{{ __('common.kind_of_products') }}</th>
                                                                        <th>{{ __('common.status') }}</th>
                                                                        <th>{{ __('common.actions') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($not_active_vendors as $vendor)
                                                                        <tr id="tr-{{ $vendor->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $vendor->name_store }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->email }}
                                                                            </td>

                                                                            <td>
                                                                                @if (isset($vendor->activators->name))
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $vendor->activators->name }}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.not_active') }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->notes }}
                                                                            </td>
                                                                            <td style="text-align: center;"><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $vendor->what_kind_products }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-flex justify-content-between"
                                                                                    id="switch_activate"
                                                                                    style="margin-bottom: 10px;">
                                                                                    <div
                                                                                        class="custom-control custom-switch">
                                                                                        <input type="checkbox"
                                                                                            id="paymentTerms{{ $vendor->id }}"
                                                                                            class="custom-control-input toggle-active-vendor-class{{ $vendor->id }}"
                                                                                            data-id="{{ $vendor->id }}"
                                                                                            onclick="change_active_vendor_status({{ $vendor->id }})"
                                                                                            type="checkbox"
                                                                                            data-onstyle="success"
                                                                                            data-offstyle="danger"
                                                                                            data-toggle="toggle"
                                                                                            data-on="Active"
                                                                                            data-off="InActive"
                                                                                            @if ($vendor->status == 1) checked @endif />
                                                                                        <label class="custom-control-label"
                                                                                            for="paymentTerms{{ $vendor->id }}"></label>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $vendor->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id . '/edit') }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-primary mr-50">
                                                                                        {{ __('common.edit') }}
                                                                                    </div>
                                                                                </a>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/vendors/' . $vendor->id) }}">
                                                                                    <div
                                                                                        class="badge badge-pill badge-light-warning mr-50">
                                                                                        {{ __('common.view') }}
                                                                                    </div>
                                                                                </a>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#message_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/mail.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                                <div class="badge badge-pill"
                                                                                    data-toggle="modal"
                                                                                    data-target="#mobile_fadeupModal{{ $vendor->id }}">
                                                                                    <img src="{{ url('dashborad/app-assets/images/smartphone.svg') }}"
                                                                                        style="cursor: pointer;" alt />
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Message-->
                                                                        <div id="message_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.send_message') }}
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Message-->

                                                                        <!--Mobile-->
                                                                        <div id="mobile_fadeupModal{{ $vendor->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.send_message') }}
                                                                                        </h5>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <svg aria-hidden="true"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-x">
                                                                                                <line x1="18"
                                                                                                    y1="6"
                                                                                                    x2="6"
                                                                                                    y2="18"></line>
                                                                                                <line x1="6"
                                                                                                    y1="6"
                                                                                                    x2="18"
                                                                                                    y2="18"></line>
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="post"
                                                                                            action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                                            enctype="multipart/form-data"
                                                                                            class="form-horizontal"
                                                                                            role="form"
                                                                                            style="padding-top: 20px;">
                                                                                            {{ csrf_field() }}
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12 mx-auto">
                                                                                                    <div
                                                                                                        style="margin-bottom: 20px;">
                                                                                                        <label
                                                                                                            for="t-text"
                                                                                                            class="">{{ __('common.message') }}</label>
                                                                                                        <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="modal-footer md-button">
                                                                                                <button class="btn"
                                                                                                    data-dismiss="modal"><i
                                                                                                        class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                                <button
                                                                                                    onclick="store_domain()"
                                                                                                    id="btn-bg"
                                                                                                    class="btn btn-primary">{{ __('common.save') }}</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--End Model Mobile-->

                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $vendor->id }}"
                                                                            class="modal fade" tabindex="-1"
                                                                            role="dialog" aria-labelledby="myModalLabel1"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true"></button>
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
                                                                                            onclick="delete_adv({{ $vendor->id }})">{{ __('common.delete') }}</button>
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
                                        <div class="tab-pane" id="rejected_vendors" aria-labelledby="disabled-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <!-- <div class="card-header">
                                                            <h4 class="card-title">Table Basic</h4>
                                                        </div>
                                                        -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_store') }}</th>
                                                                        <th>{{ __('common.email') }}</th>
                                                                        <th>{{ __('common.outmoded') }}</th>
                                                                        <th>{{ __('common.notes') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($rejected_vendors as $vendor)
                                                                        <tr id="tr-{{ $vendor->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $vendor->name_store }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->email }}
                                                                            </td>
                                                                            <td>
                                                                                @if (isset($vendor->activators->name))
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-info mr-1">{{ $vendor->activators->name }}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.not_active') }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->reason_refuse }}
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
                                        <div class="tab-pane" id="rejected_vendors_system" aria-labelledby="disabled-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <!-- <div class="card-header">
                                                            <h4 class="card-title">Table Basic</h4>
                                                        </div>
                                                        -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>{{ __('common.name_store') }}</th>
                                                                        <th>{{ __('common.email') }}</th>
                                                                        <th>{{ __('common.notes') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="menu">
                                                                    @foreach ($rejected_vendors_system as $vendor)
                                                                        <tr id="tr-{{ $vendor->id }}">
                                                                            <td>
                                                                                <span class="font-weight-bold">
                                                                                    {{ $vendor->name_store }}
                                                                                </span>
                                                                            </td>
                                                                            <td>
                                                                                {{ $vendor->email }}
                                                                            </td>

                                                                            <td>
                                                                                {{ $vendor->reason_refuse }}
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
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!--Vendor-->
    <div id="vendor_fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog" style="max-width:65%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('common.add_new_vendor') }}</h5>
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
                    <form method="post" action="{{ url(app()->getLocale() . '/vendors') }}"
                        enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                        {{ csrf_field() }}
                        <legend>{{ __('common.login') }}:</legend>
                        <div class="row">
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.name') }}</label>
                                    <input type="text" name="name" placeholder="{{ __('common.name') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.email') }}</label>
                                    <input type="email" name="email" placeholder="{{ __('common.email') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.password') }}</label>
                                    <input type="password" name="password" placeholder="{{ __('common.password') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <legend>{{ __('common.country') }}:</legend>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.country') }}</label>
                                    <select name="country" class="form-control">
                                        <option value="PS">Palestine</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <legend>{{ __('common.matgar') }}<small>{{ __('common.details_of_vendor') }}</small>:</legend>
                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.name_store') }}</label>
                                    <input type="text" name="name_store" placeholder="{{ __('common.name_store') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.mobile') }}</label>
                                    <input type="text" name="mobile" placeholder="{{ __('common.mobile') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.company_legal_name') }}</label>
                                    <input type="text" name="company_legal_name"
                                        placeholder="{{ __('common.company_legal_name') }}" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.what_kind_products') }}</label>
                                    <select name="what_kind_products" class="form-control">
                                        <option value="Electronic">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.full_address') }}</label>
                                    <textarea type="text" name="full_address" placeholder="{{ __('common.full_address') }}" class="form-control"></textarea>
                                </div>
                            </div>

                        </div>
                        <legend>{{ __('common.bank') }}:</legend>
                        <div class="row">
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.beneficiay_name') }}</label>
                                    <input type="text" name="beneficiay_name"
                                        placeholder="{{ __('common.beneficiay_name') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.bank_name') }}</label>
                                    <input type="text" name="bank_name" placeholder="{{ __('common.bank_name') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.branch_name') }}</label>
                                    <input type="text" name="branch_name"
                                        placeholder="{{ __('common.branch_name') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.account_number') }}</label>
                                    <input type="text" name="account_number"
                                        placeholder="{{ __('common.account_number') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.iban_number') }}</label>
                                    <input type="text" name="iban_number"
                                        placeholder="{{ __('common.iban_number') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.swift_code') }}</label>
                                    <input type="text" name="swift_code" placeholder="{{ __('common.swift_code') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.currency') }}</label>
                                    <input type="text" name="currency" placeholder="{{ __('common.currency') }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <legend>{{ __('common.vat') }}:</legend>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.vat_details') }}</label>
                                    <textarea type="text" name="vat_details" placeholder="{{ __('common.vat_details') }}" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row match-height">
                            <!-- Basic Tabs starts -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ __('common.Legal entity of the merchant') }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab"
                                                    data-info="Commercial_Record" href="#home" aria-controls="home"
                                                    role="tab"
                                                    aria-selected="true">{{ __('common.Commercial_Record') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                    data-info="freelance_work" aria-controls="profile" role="tab"
                                                    aria-selected="false">{{ __('common.freelance_work') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about"
                                                    data-info="National_Identity" aria-controls="about" role="tab"
                                                    aria-selected="false">{{ __('common.National_Identity') }}</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home" aria-labelledby="home-tab"
                                                role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Commercial Registration No') }}</label>
                                                            <input type="text" name="Commercial_Registration_No"
                                                                placeholder="{{ __('common.Commercial Registration No') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Trade Name') }}</label>
                                                            <input type="text" name="Trade_Name"
                                                                placeholder="{{ __('common.Trade Name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Brand name') }}</label>
                                                            <input type="text" name="Brand_name"
                                                                placeholder="{{ __('common.Brand name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Registry specialty') }}</label>
                                                            <input type="text" name="Registry_specialty"
                                                                placeholder="{{ __('common.Registry specialty') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Record owner name') }}</label>
                                                            <input type="text" name="Record_owner_name"
                                                                placeholder="{{ __('common.Record owner name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store name') }}</label>
                                                            <input type="text" name="store_name"
                                                                placeholder="{{ __('common.Store name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store Description') }}</label>
                                                            <textarea type="text" name="store_description" placeholder="{{ __('common.Store Description') }}"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Commissioner_name') }}</label>
                                                            <input type="text" name="Commissioner_name"
                                                                placeholder="{{ __('common.Commissioner_name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.No.civil_registry') }}</label>
                                                            <input type="text" name="owner_civil_registry_number"
                                                                placeholder="{{ __('common.No.civil_registry') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <legend>{{ __('common.attachments') }}:</legend>

                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.Commercial_Register_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="Commercial_Register_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_Commercial_Register_image" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.owner_national_ID_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="ID_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_Commissioner_Agency" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.Agency authorized to manage on behalf of the owner') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="commissioner_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_bank_account_picture" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.bank_account_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="bank_account_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_bank_account_picture" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile" aria-labelledby="profile-tab"
                                                role="tabpanel">
                                                <div class="row">
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Freelance_document_number') }}</label>
                                                            <input type="text" name="Freelance_document_number"
                                                                placeholder="{{ __('common.Freelance_document_number') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Document_Specialization') }}</label>
                                                            <input type="text" name="Document_Specialization"
                                                                placeholder="{{ __('common.Document_Specialization') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.The_owner_civil_registry_number') }}</label>
                                                            <input type="text" name="owner_civil_registry_number"
                                                                placeholder="{{ __('common.The_owner_civil_registry_number') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store name') }}</label>
                                                            <input type="text" name="store_name"
                                                                placeholder="{{ __('common.Store name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.authorized_civil_registry_number') }}</label>
                                                            <input type="text"
                                                                name="authorized_civil_registry_number"
                                                                placeholder="{{ __('common.authorized_civil_registry_number') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store Description') }}</label>
                                                            <textarea type="text" name="store_description" placeholder="{{ __('common.Store Description') }}"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="about" aria-labelledby="about-tab"
                                                role="tabpanel">
                                                <div class="row">

                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store name') }}</label>
                                                            <input type="text" name="store_name"
                                                                placeholder="{{ __('common.Store name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.The_owner_civil_registry_number') }}</label>
                                                            <input type="text" name="owner_civil_registry_number"
                                                                placeholder="{{ __('common.The_owner_civil_registry_number') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.authorized_name') }}</label>
                                                            <input type="text" name="authorized_name"
                                                                placeholder="{{ __('common.authorized_name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.owner_name') }}</label>
                                                            <input type="text" name="owner_name"
                                                                placeholder="{{ __('common.owner_name') }}"
                                                                class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-12 mx-auto">
                                                        <div style="margin-bottom: 20px;">
                                                            <label for="t-text"
                                                                class="">{{ __('common.Store Description') }}</label>
                                                            <textarea type="text" name="store_description" placeholder="{{ __('common.Store Description') }}"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <legend>{{ __('common.attachments') }}:</legend>

                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.brand_store_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="brand_store_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_brand_store_image" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.owner_national_ID_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="owner_national_ID_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_owner_national_ID_image" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.Agency authorized to manage on behalf of the owner') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="Commissioner_Agency"
                                                                    class="custom-file-input"
                                                                    id="customFile_Commissioner_Agency" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}({{ __('common.freelance_work_document_image') }})</label>
                                                            <div class="custom-file">
                                                                <input type="file"
                                                                    name="freelance_work_document_image"
                                                                    class="custom-file-input"
                                                                    id="customFile_freelance_work_document_image" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Tabs ends -->
                        </div>
                        <input type="hidden" value="Commercial_Record" name="type_info" id="type_info" />
                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i
                                    class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                            <button onclick="store_domain()" id="btn-bg"
                                class="btn btn-primary">{{ __('common.save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Model Vendor-->
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".nav-link").on("click", function() {
                var dataInfo = $(this).attr("data-info");
                document.getElementById('type_info').value = dataInfo
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function change_status(id) {
            var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 0;
            var vendor_id = $(".toggle-class" + id).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_status_vendor') }}',
                data: {
                    'status': status,
                    'vendor_id': vendor_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        }

        function change_active_vendor_status(id) {
            var status = $(".toggle-active-vendor-class" + id).prop('checked') == true ? 1 : 2;
            var vendor_id = $(".toggle-active-vendor-class" + id).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "post",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_active_vendor_status') }}',
                data: {
                    'status': status,
                    'vendor_id': vendor_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $(document).on("click", "#cancel_vendor_btn", function() {
                var vendor_id = $(this).attr("data-id");
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: '{{ url(app()->getLocale() . '/change_active_vendor_status') }}',
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormCancelVendor").reset();
                            $('#status_fadeupModal' + vendor_id).modal('toggle');
                            $('#tr-' + vendor_id).hide(500);

                        }
                    }

                });
            });
        });
    </script>
    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/vendors') }}/' + id;
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
            $(document).on("click", "#reject_vendor_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('reject_vendor') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormRejectVendor").reset();
                            $('#reject_vendor' + response.item.id).modal('toggle');

                            $('#tr-' + response.item.id).hide(500);
                            toastr.success("{{ __('common.rejected successfully') }}")

                            //swal("القضية حذفت!", {icon: "success"});
                        }
                    }

                });
            });
        });
    </script>
    <script>
        function collection_commission() {
            var system_commission = {{ $invoices->sum('price') }};

            if (system_commission > 0) {
                Swal.fire({
                    title: '{{ __('common.warning') }}!',
                    text: "{{ __('common.Do you want to calculate system commission?') }}",
                    html: '<b>{{ __('common.Do you want to collect system commission?') }}</b><br><br>' +
                        '<table class="table">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>{{ __('common.system_commission') }}</th>' +
                        '<th> {{ __('common.amount') }}</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                        '<tr>' +
                        '<td>{{ __('common.5khamsat_commission') }}</td>' +
                        '<td>$' + system_commission + '</td>' +
                        '</tr>' +

                        '</tbody>' +
                        '<tfoot>' +
                        '<tr>' +
                        '<th>{{ __('common.total') }}</th>' +
                        '<th>$' + system_commission + '</th>' +
                        '</tr>' +
                        '</tfoot>' +
                        '</table>',
                    icon: 'warning',

                    // showCancelButton: true,
                    confirmButtonText: '{{ __('common.accept') }}',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ml-1'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {

                        var url = '{{ url(app()->getLocale() . '/collection_system_commission') }}/';
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
                                    Swal.fire({
                                        icon: 'success',
                                        title: '{{ __('common.operation_accomplished_successfully') }}',
                                        customClass: {
                                            confirmButton: 'btn btn-success'
                                        }
                                    });
                                    // toastr.success("{{ __('common.operation_accomplished_successfully') }}");
                                }
                                if (response.message === 'warning') {
                                    Swal.fire({
                                        title: '{{ __('common.warning') }}!',
                                        text: "{{ __('common.There are no commissions to collect') }}",
                                        icon: 'warning',
                                        customClass: {
                                            confirmButton: 'btn btn-warning'
                                        }
                                    });
                                    // toastr.warning("{{ __('common.no_unaccounted_taxs') }}");
                                }
                            },
                            error: function(e) {
                                // swal('exception', {icon: "error"});
                            }
                        });

                    }

                });
            } else {
                toastr.warning("{{ __('common.There are no commissions to collect') }}");
            }


        }
    </script>
    <script>
        function calculating_commission() {
            var system_commission = {{ $orders_vendors->sum('system_commission') }};
            if (system_commission > 0) {
                Swal.fire({
                    title: '{{ __('common.warning') }}!',
                    text: "{{ __('common.Do you want to collect system commission?') }}",
                    html: '<b>{{ __('common.Do you want to collect system commission?') }}</b><br><br>' +
                        '<table class="table">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>{{ __('common.system_commission') }}</th>' +
                        '<th> {{ __('common.amount') }}</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>' +
                        '<tr>' +
                        '<td>{{ __('common.5khamsat_commission') }}</td>' +
                        '<td>$' + system_commission + '</td>' +
                        '</tr>' +
                        '</tbody>' +
                        '<tfoot>' +
                        '<tr>' +
                        '<th>{{ __('common.total') }}</th>' +
                        '<th>$' + system_commission + '</th>' +
                        '</tr>' +
                        '</tfoot>' +
                        '</table>',
                    icon: 'warning',
                    // showCancelButton: true,
                    confirmButtonText: '{{ __('common.accept') }}',
                    customClass: {
                        confirmButton: 'btn btn-primary',
                        cancelButton: 'btn btn-outline-danger ml-1'
                    },
                    buttonsStyling: false
                }).then(function(result) {
                    if (result.value) {

                        var url = '{{ url(app()->getLocale() . '/calculate_system_commission') }}/';
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
                                    Swal.fire({
                                        icon: 'success',
                                        title: '{{ __('common.operation_accomplished_successfully') }}',
                                        customClass: {
                                            confirmButton: 'btn btn-success'
                                        }
                                    });
                                    // toastr.success("{{ __('common.operation_accomplished_successfully') }}");
                                }
                                if (response.message === 'warning') {
                                    Swal.fire({
                                        title: '{{ __('common.warning') }}!',
                                        text: "{{ __('common.There are no commissions to collect') }}",
                                        icon: 'warning',
                                        customClass: {
                                            confirmButton: 'btn btn-warning'
                                        }
                                    });
                                    // toastr.warning("{{ __('common.no_unaccounted_taxs') }}");
                                }
                            },
                            error: function(e) {
                                // swal('exception', {icon: "error"});
                            }
                        });

                    }

                });
            } else {
                toastr.warning("{{ __('common.There are no commissions to calculate') }}");
            }

        }
    </script>
@endsection
