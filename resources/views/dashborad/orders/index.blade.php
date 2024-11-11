@extends('layouts.dashborad')
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.orders') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/orders') }}">
                                            {{ __('common.orders') }}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

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
                                                aria-selected="true">{{ __('common.new_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                                aria-controls="profile" role="tab"
                                                aria-selected="false">{{ __('common.current_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="order-tab" data-toggle="tab" href="#order"
                                                aria-controls="order" role="tab"
                                                aria-selected="false">{{ __('common.finished_orders') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about"
                                                aria-controls="about" role="tab"
                                                aria-selected="false">{{ __('common.cancel_orders') }}</a>
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
                                                                        <th> {{ __('common.name_user') }}</th>
                                                                        @can('roles.admin')
                                                                            <th> {{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        @can('roles.vendor')
                                                                            <th> {{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th> {{ __('common.final_price') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.action') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($new_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <td>
                                                                                {{ $order->users->name }}
                                                                            </td>
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id != 0)
                                                                                        {{ $order->vendors->name }}
                                                                                    @else
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            @can('roles.vendor')
                                                                                <td>
                                                                                    <!-- <div class="d-flex justify-content-between" id="switch_activate" style="margin-bottom: 10px;">
                                                                                    <div class="custom-control custom-switch">
                                                                                        <input type="checkbox" id="accept_order{{ $order->id }}" class="custom-control-input toggle-class{{ $order->id }}" data-id="{{ $order->id }}" onclick="change_status({{ $order->id }})" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $order->status ? 'checked' : '' }} />
                                                                                        <label class="custom-control-label" for="accept_order{{ $order->id }}"></label>
                                                                                    </div>
                                                                                </div> -->
                                                                                    <select
                                                                                        onchange="change_status({{ $order->id }})"
                                                                                        id="accept_order{{ $order->id }}"
                                                                                        name="accept_order"
                                                                                        data-price="{{ $order->final_price }}"
                                                                                        data-value_added_tax="{{ $order->value_added_tax }}"
                                                                                        data-system_commission="{{ $order->system_commission }}"
                                                                                        data-incomming_tax="{{ $order->incomming_tax }}"class="form-control">
                                                                                        <option value="0">
                                                                                            {{ __('common.status') }}</option>
                                                                                        <option value="1">
                                                                                            {{ __('common.accept') }}</option>
                                                                                        <option value="3">
                                                                                            {{ __('common.cancel') }}</option>
                                                                                    </select>
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>
                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/orders/' . $order->id) }}">
                                                                                    <div style="cursor:pointer"
                                                                                        class="badge badge-pill badge-light-primary mr-50"
                                                                                        data-toggle="modal"
                                                                                        data-target="#view_order_fadeupModal{{ $order->id }}">
                                                                                        {{ __('common.details') }}
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $order->id }}"
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
                                                                        <th> {{ __('common.name_user') }}</th>
                                                                        @can('roles.admin')
                                                                            <th> {{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        @can('roles.admin')
                                                                            <th> {{ __('common.status') }}</th>
                                                                        @endcan
                                                                        <th> {{ __('common.final_price') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.action') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($current_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <td>
                                                                                {{ $order->users->name }}
                                                                            </td>
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id != 0)
                                                                                        {{ $order->vendors->name }}
                                                                                    @else
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            @can('roles.admin')
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
                                                                                                onclick="change_accepted_status({{ $order->id }})"
                                                                                                type="checkbox"
                                                                                                data-onstyle="success"
                                                                                                data-offstyle="danger"
                                                                                                data-toggle="toggle"
                                                                                                data-on="Active"
                                                                                                data-off="InActive"
                                                                                                {{ $order->status ? 'checked' : '' }} />
                                                                                            <label class="custom-control-label"
                                                                                                for="paymentTerms{{ $order->id }}"></label>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/orders/' . $order->id) }}">
                                                                                    <div style="cursor:pointer"
                                                                                        class="badge badge-pill badge-light-primary mr-50"
                                                                                        data-toggle="modal"
                                                                                        data-target="#view_order_fadeupModal{{ $order->id }}">
                                                                                        {{ __('common.details') }}
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $order->id }}"
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
                                                                        <th> {{ __('common.name_user') }}</th>
                                                                        @can('roles.admin')
                                                                            <th> {{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        <th> {{ __('common.final_price') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.action') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($finished_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <td>
                                                                                {{ $order->users->name }}
                                                                            </td>
                                                                            @can('roles.admin')
                                                                                @if ($order->vendor_id != 0)
                                                                                    <td>
                                                                                        @if ($order->vendor_id != 0)
                                                                                            {{ $order->vendors->name }}
                                                                                        @else
                                                                                            {{ __('common.5khamsat') }}
                                                                                        @endif
                                                                                    </td>
                                                                                @endif
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <a
                                                                                    href="{{ url(app()->getLocale() . '/orders/' . $order->id) }}">
                                                                                    <div style="cursor:pointer"
                                                                                        class="badge badge-pill badge-light-primary mr-50"
                                                                                        data-toggle="modal"
                                                                                        data-target="#view_order_fadeupModal{{ $order->id }}">
                                                                                        {{ __('common.details') }}
                                                                                    </div>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $order->id }}"
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
                                        <div class="tab-pane" id="about" aria-labelledby="about-tab"
                                            role="tabpanel">
                                            <!-- Basic Tables start -->
                                            <div class="row" id="basic-table">
                                                <div class="col-12">
                                                    <div class="card">

                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th> {{ __('common.name_user') }}</th>
                                                                        @can('roles.admin')
                                                                            <th> {{ __('common.name_vendor') }}</th>
                                                                        @endcan
                                                                        <th> {{ __('common.final_price') }}</th>
                                                                        <th>{{ __('common.created_at') }}</th>
                                                                        <th>{{ __('common.action') }}</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($canceled_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <td>
                                                                                {{ $order->users->name }}
                                                                            </td>
                                                                            @can('roles.admin')
                                                                                @if ($order->vendor_id != 0)
                                                                                    <td>
                                                                                        @if ($order->vendor_id != 0)
                                                                                            {{ $order->vendors->name }}
                                                                                        @else
                                                                                            {{ __('common.5khamsat') }}
                                                                                        @endif
                                                                                    </td>
                                                                                @endif
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>

                                                                            <td>
                                                                                <div class="badge badge-pill badge-light-danger mr-50"
                                                                                    href="#myModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    {{ __('common.delete') }}
                                                                                </div>
                                                                                <!-- <a href="{{ url(app()->getLocale() . '/orders/' . $order->id) }}">
                                                                                <div style="cursor:pointer" class="badge badge-pill badge-light-primary mr-50" data-toggle="modal" data-target="#view_order_fadeupModal{{ $order->id }}">
                                                                                    {{ __('common.details') }}
                                                                                </div>
                                                                            </a> -->
                                                                                <div class="badge badge-pill badge-light-success mr-50"
                                                                                    href="#convert_fadeupModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    <img src="{{ url('dashborad/app-assets/images/convert.svg') }}"
                                                                                        height="20px;" />
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <!--Form Delete -->
                                                                        <div id="myModal{{ $order->id }}"
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
                                                                                            onclick="delete_adv({{ $order->id }})">{{ __('common.delete') }}</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Form Delete -->

                                                                        <!-- Convert Order -->
                                                                        <div id="convert_fadeupModal{{ $order->id }}"
                                                                            class="modal animated fadeInUp custo-fadeInUp"
                                                                            role="dialog">
                                                                            <div class="modal-dialog">
                                                                                <!-- Modal content-->
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">
                                                                                            {{ __('common.convert_order') }}
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
                                                                                        <div class="row">
                                                                                            <div
                                                                                                class="col-lg-12 col-12 mx-auto">
                                                                                                <div
                                                                                                    style="margin-bottom: 20px;">
                                                                                                    <label for="t-text"
                                                                                                        class="">{{ __('common.name_vendor') }}</label>
                                                                                                    <select
                                                                                                        name="vendor_id"
                                                                                                        class="form-control"
                                                                                                        id="vendor_id">
                                                                                                        @foreach ($vendors as $vendor)
                                                                                                            <option
                                                                                                                value="{{ $vendor->id }}">
                                                                                                                {{ $vendor->name }}
                                                                                                            </option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="modal-footer md-button">
                                                                                            <button class="btn"
                                                                                                data-dismiss="modal"><i
                                                                                                    class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                                            <button id="btn-bg"
                                                                                                class="btn btn-primary"
                                                                                                onclick="convert_order({{ $order->id }})">{{ __('common.save') }}</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End Convert Order -->
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
    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/order') }}/' + id;
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
        function convert_order(id) {
            var url = '{{ url(app()->getLocale() . '/convert_order') }}/' + id + '/' + $("#vendor_id").val();
            var csrf_token = '{{ csrf_token() }}';
            $.ajax({
                type: 'get',
                url: url,

                success: function(response) {
                    console.log(response);
                    if (response === 'success') {
                        $('#tr-' + id).hide(500);
                        $('#convert_fadeupModal' + id).modal('toggle');
                        // swal("القضية حذفت!", {icon: "success"});
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
        function change_status(id) {
            $(document).on("click", "#accept_order" + id, function() {

                var final_price = $("#accept_order" + id).data('price');
                var value_added_tax = $("#accept_order" + id).data('value_added_tax');
                var incomming_tax = $("#accept_order" + id).data('incomming_tax');
                var system_commission = $("#accept_order" + id).data('system_commission');
                var status = $(this).val();
                var costs = Number(incomming_tax) + Number(value_added_tax) + Number(system_commission);
                var profit = final_price - costs;
                if ($(this).val() == 1) {
                    $("select option").prop("selected", false);

                    Swal.fire({
                        title: '{{ __('common.warning') }}!',
                        text: "",
                        html: '{{ __('common.note_accept_order') }}<br/><br/>{{ __('common.final_order_price') }}: <b>' +
                            final_price + '</b><br/><br/>' +
                            '<table class="table">' +
                            '<thead>' +
                            '<tr>' +
                            '<th>{{ __('common.cost') }}</th>' +
                            '<th> {{ __('common.amount') }}</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>' +
                            '<tr>' +
                            '<td>{{ __('common.system_commission') }}</td>' +
                            '<td>' + system_commission + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>{{ __('common.value_added_tax') }}</td>' +
                            '<td>' + value_added_tax + '</td>' +
                            '</tr>' +
                            '<tr>' +
                            '<td>{{ __('common.income_tax') }}</td>' +
                            '<td>' + incomming_tax + '</td>' +
                            '</tr>' +
                            '</tbody>' +
                            '<tfoot>' +
                            '<tr>' +
                            '<th>{{ __('common.profit') }}</th>' +
                            '<th>' + profit + '</th>' +
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


                            var order_id = id;
                            $.ajax({
                                type: "GET",
                                dataType: "json",
                                url: '{{ url(app()->getLocale() . '/change_status_order') }}',
                                data: {
                                    'status': status,
                                    'order_id': order_id
                                },
                                success: function(data) {
                                    console.log(data.success)
                                }
                            });
                            Swal.fire({
                                icon: 'success',
                                title: '{{ __('common.order_accepted') }}',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                        }

                    });
                }
                if ($(this).val() == 3) {
                    $("select option").prop("selected", false);

                    Swal.fire({
                        title: '{{ __('common.warning') }}!',
                        text: "{{ __('common.Do you want to cancel the order') }}",
                        icon: 'warning',
                        // showCancelButton: true,
                        confirmButtonText: '{{ __('common.ok') }}',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-outline-danger ml-1'
                        },
                        buttonsStyling: false
                    }).then(function(result) {
                        if (result.value) {
                            var status = document.getElementById("accept_order" + id).value;
                            var order_id = id;
                            $.ajax({
                                type: "GET",
                                dataType: "json",
                                url: '{{ url(app()->getLocale() . '/change_status_order') }}',
                                data: {
                                    'status': status,
                                    'order_id': order_id
                                },
                                success: function(data) {
                                    console.log(data.success)
                                }
                            });
                            Swal.fire({
                                icon: 'success',
                                title: '{{ __('common.order_canceled') }}',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                        }

                    });
                }
            });
        }

        function change_accepted_status(id) {
            var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 3;
            var order_id = $(".toggle-class" + id).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_status_order') }}',
                data: {
                    'status': status,
                    'order_id': order_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        }
    </script>
@endsection
@section('sweet_alert')
    <!-- <script>
        $(window).on('load', function() {
            'use strict';

            var basicAlert = $('#basic-alert');
            var withTitle = $('#with-title');
            var withFooter = $('#footer-alert');
            var htmlAlert = $('#html-alert');

            var positionTopStart = $('#position-top-start');
            var positionTopEnd = $('#position-top-end');
            var positionBottomStart = $('#position-bottom-start');
            var positionBottomEnd = $('#position-bottom-end');

            var bounceIn = $('#bounce-in-animation');
            var fadeIn = $('#fade-in-animation');
            var flipX = $('#flip-x-animation');
            var tada = $('#tada-animation');
            var shake = $('#shake-animation');

            var success = $('#type-success');
            var error = $('#type-error');
            var warning = $('#type-warning');
            var info = $('#type-info');

            var customImage = $('#custom-image');
            var autoClose = $('#auto-close');
            var outsideClick = $('#outside-click');
            var question = $('#prompt-function');
            var ajax = $('#ajax-request');

            var confirmText = $('#confirm-text');
            var confirmColor = $('#confirm-color');

            var assetPath = '../../../app-assets/';
            if ($('body').attr('data-framework') === 'laravel') {
                assetPath = $('body').attr('data-asset-path');
            }

            // Confirm Color
            if (confirmColor.length) {
                confirmColor.on('click', function() {
                    Swal.fire({
                        title: '{{ __('common.warning') }}!',
                        text: "",
                        html: '{{ __('common.value_added_tax') }} : <b>{{ $settings->value_added_tax }}</b><br/><br/>' +
                            '{{ __('common.income_tax') }} : <b>{{ $settings->tax }}</b><br/><br/>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '{{ __('common.accept') }}',
                        customClass: {
                            confirmButton: 'btn btn-primary',
                            cancelButton: 'btn btn-outline-danger ml-1'
                        },
                        buttonsStyling: false
                    }).then(function(result) {
                        if (result.value) {
                            Swal.fire({
                                icon: 'success',
                                title: '{{ __('common.order_accepted') }}',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            Swal.fire({
                                title: '{{ __('common.order_canceled') }}',
                                icon: 'error',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            });
                        }
                    });
                });
            }

        });
    </script> -->
@endsection
