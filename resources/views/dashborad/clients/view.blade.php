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
            </div>
            <div class="content-body">
                <section class="app-user-view">
                    <!-- User Card & Plan Starts -->
                    <div class="row">
                        <!-- User Card starts-->
                        <div class="col-xl-12 col-lg-8 col-md-7">
                            <div class="card user-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div
                                            class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                            <div class="user-avatar-section">
                                                <div class="d-flex justify-content-start">
                                                    @if ($client->photo)
                                                        <img class="img-fluid rounded" src="{{ $client->photo }}"
                                                            height="104" width="104" alt="User avatar" />
                                                    @endif
                                                    <div class="d-flex flex-column ml-1">
                                                        <div class="user-info mb-1">
                                                            <h4 class="mb-0">{{ $client->name }}</h4>
                                                            <span class="card-text">{{ $client->email }}</span>
                                                        </div>
                                                        @can('roles.admin')
                                                            <div class="d-flex flex-wrap">
                                                                <a href="{{ url(app()->getLocale() . '/clients/' . $client->id . '/edit') }}"
                                                                    class="btn btn-primary">{{ __('common.edit') }}</a>
                                                                <a href="#myModal{{ $client->id }}" role="button"
                                                                    data-toggle="modal">
                                                                    <button
                                                                        class="btn btn-outline-danger ml-1">{{ __('common.delete') }}</button>
                                                                </a>
                                                            </div>
                                                        @endcan
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                            <div class="user-info-wrapper">
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="mr-1"></i>
                                                        <span
                                                            class="card-text user-info-title font-weight-bold mb-0">{{ __('common.name') }}</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $client->name }}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="check" class="mr-1"></i>
                                                        <span
                                                            class="card-text user-info-title font-weight-bold mb-0">{{ __('common.status') }}</span>
                                                    </div>
                                                    <p class="card-text mb-0">
                                                        @if ($client->status == 1)
                                                            <div class="badge badge-pill badge-light-success mr-50">
                                                                {{ __('common.active') }}
                                                            </div>
                                                        @else
                                                            <div class="badge badge-pill badge-light-danger mr-50">
                                                                {{ __('common.not_active') }}
                                                            </div>
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="star" class="mr-1"></i>
                                                        <span
                                                            class="card-text user-info-title font-weight-bold mb-0">{{ __('common.role') }}</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $client->type }}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span
                                                            class="card-text user-info-title font-weight-bold mb-0">{{ __('common.country') }}</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $client->country }}</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="phone" class="mr-1"></i>
                                                        <span
                                                            class="card-text user-info-title font-weight-bold mb-0">{{ __('common.mobile') }}</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{ $client->mobile }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center user-total-numbers">
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-primary">
                                                    <i data-feather="dollar-sign" class="text-primary"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">20k</h5>
                                                    <small>{{ __('common.Monthly Purchases') }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-success">
                                                    <i data-feather="trending-up" class="text-success"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$0K</h5>
                                                    <small>{{ __('common.Yearly Purchases') }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-warning">
                                                    <i data-feather="trending-up" class="text-warning"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$0K</h5>
                                                    <small>{{ __('common.discounts') }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-danger">
                                                    <i data-feather="trending-up" class="text-danger"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$0K</h5>
                                                    <small>{{ __('common.coupons') }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-success">
                                                    <i data-feather="trending-up" class="text-success"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$0K</h5>
                                                    <small>{{ __('common.current_points') }}</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mr-2">
                                                <div class="color-box bg-light-info">
                                                    <i data-feather="trending-up" class="text-info"></i>
                                                </div>
                                                <div class="ml-1">
                                                    <h5 class="mb-0">$0K</h5>
                                                    <small>{{ __('common.earned_points') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card Ends-->

                        <!-- Plan Card starts-->
                        <!-- <div class="col-xl-3 col-lg-4 col-md-5">
                            <div class="card plan-card border-primary">
                                <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
                                    <h5 class="mb-0">{{ __('common.Current Plan') }}</h5>
                                    <span class="badge badge-light-secondary" data-toggle="tooltip" data-placement="top" title="Expiry Date">July 22, <span class="nextYear"></span>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="badge badge-light-primary">Basic</div>
                                    <ul class="list-unstyled my-1">
                                        <li>
                                            <span class="align-middle">5 Users</span>
                                        </li>
                                        <li class="my-25">
                                            <span class="align-middle">10 GB storage</span>
                                        </li>
                                        <li>
                                            <span class="align-middle">Basic Support</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary text-center btn-block">Upgrade Plan</button>
                                </div>
                            </div>
                        </div> -->
                        <!-- /Plan CardEnds -->
                    </div>
                    <!-- User Card & Plan Ends -->


                    <!-- Basic Tabs starts -->
                    <div class="col-xl-12 col-lg-12" style="padding:0px">
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
                                                                    <!-- <th> {{ __('common.name_product') }}</th> -->
                                                                    @can('roles.admin')
                                                                        <th> {{ __('common.name_vendor') }}</th>
                                                                    @endcan
                                                                    <th> {{ __('common.final_price') }}</th>
                                                                    <th>{{ __('common.created_at') }}</th>
                                                                    <th>{{ __('common.action') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (count($new_orders) > 0)
                                                                    @foreach ($new_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <!-- <td>
                                                                        {{ $order->users->name }}
                                                                    </td> -->
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id == 0)
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @else
                                                                                        {{ $order->vendors->name }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>
                                                                            <td>
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
                                                                    @endforeach
                                                                @endif
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
                                                                    <!-- <th> {{ __('common.name_product') }}</th> -->
                                                                    @can('roles.admin')
                                                                        <th> {{ __('common.name_vendor') }}</th>
                                                                    @endcan
                                                                    <th> {{ __('common.final_price') }}</th>
                                                                    <th>{{ __('common.created_at') }}</th>
                                                                    <th>{{ __('common.action') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (count($current_orders) > 0)
                                                                    @foreach ($current_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <!-- <td>
                                                                        {{ $order->users->name }}
                                                                    </td> -->
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id == 0)
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @else
                                                                                        {{ $order->vendors->name }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>

                                                                            <td>

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
                                                                    @endforeach
                                                                @endif
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
                                                                    <!-- <th> {{ __('common.name_product') }}</th> -->
                                                                    @can('roles.admin')
                                                                        <th> {{ __('common.name_vendor') }}</th>
                                                                    @endcan
                                                                    <th> {{ __('common.final_price') }}</th>
                                                                    <th>{{ __('common.created_at') }}</th>
                                                                    <th>{{ __('common.action') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (count($finished_orders) > 0)
                                                                    @foreach ($finished_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <!-- <td>
                                                                        {{ $order->users->name }}
                                                                    </td> -->
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id == 0)
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @else
                                                                                        {{ $order->vendors->name }}
                                                                                    @endif
                                                                                </td>
                                                                            @endcan
                                                                            <td>
                                                                                {{ $order->final_price }}
                                                                            </td>
                                                                            <td><span
                                                                                    class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                                            </td>

                                                                            <td>

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
                                                                    @endforeach
                                                                @endif
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
                                                                    <!-- <th> {{ __('common.name_product') }}</th> -->
                                                                    @can('roles.admin')
                                                                        <th> {{ __('common.name_vendor') }}</th>
                                                                    @endcan
                                                                    <th> {{ __('common.final_price') }}</th>
                                                                    <th>{{ __('common.created_at') }}</th>
                                                                    <th>{{ __('common.action') }}</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if (count($canceled_orders) > 0)
                                                                    @foreach ($canceled_orders as $order)
                                                                        <tr id="tr-{{ $order->id }}">
                                                                            <!-- <td>
                                                                        {{ $order->users->name }}
                                                                    </td> -->
                                                                            @can('roles.admin')
                                                                                <td>
                                                                                    @if ($order->vendor_id == 0)
                                                                                        {{ __('common.5khamsat') }}
                                                                                    @else
                                                                                        {{ $order->vendors->name }}
                                                                                    @endif
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
                                                                                <div class="badge badge-pill badge-light-success mr-50"
                                                                                    href="#convert_fadeupModal{{ $order->id }}"
                                                                                    role="button" data-toggle="modal">
                                                                                    <img src="{{ url('dashborad/app-assets/images/convert.svg') }}"
                                                                                        height="20px;" />
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
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

                    <!-- Basic Tables start -->
                    <div class="row" id="basic-table">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ __('common.warranty_period') }}</h4>
                                </div>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('common.name_product') }}</th>
                                                <th>{{ __('common.image') }}</th>
                                                <th>{{ __('common.Qty') }}</th>
                                                <th>{{ __('common.warranty_period') }}</th>
                                                <th>{{ __('common.remaining_period') }}</th>
                                                <th>{{ __('common.created_at') }}</th>
                                                <th>{{ __('common.actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody id="menu">
                                            @foreach ($products_guarantee as $order)
                                                <tr id="tr-{{ $order->id }}">
                                                    <td>
                                                        <span class="font-weight-bold">
                                                            @if (app()->getLocale() == 'en')
                                                                {{ $order->products->name_en }}
                                                            @else
                                                                {{ $order->products->name_ar }}
                                                            @endif
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <img src="{{ $order->products->image }}" style="height: 50px;"
                                                            alt="Image Category" />
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-warning mr-1">{{ $order->quantity }}</span>
                                                    </td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ $order->products->warranty_period }}
                                                            {{ __('common.month') }}</span></td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-danger mr-1">{{ $order->period }}
                                                            {{ __('common.day') }}</span></td>
                                                    <td><span
                                                            class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span>
                                                    </td>
                                                    <td>

                                                        <a
                                                            href="{{ url(app()->getLocale() . '/orders/' . $order->order_id) }}">
                                                            <div class="badge badge-pill badge-light-primary mr-50">
                                                                {{ __('common.view') }}
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


                </section>

                @can('roles.admin')
                    <!-- Vertical Tabs start -->
                    <section id="vertical-tabs">
                        <div class="row match-height">
                            <!-- Vertical Left Tabs start -->
                            <div class="col-xl-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ __('common.chats') }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left flex-column" role="tablist">
                                                @foreach ($contacts as $contact)
                                                    <li class="nav-item" style="display:flex;margin-bottom:25px;">
                                                        <div class="avatar mr-50">
                                                            <img src="{{ $contact->vendors->data->ID_image }}"
                                                                alt="Avatar" width="38" height="38" />
                                                        </div>
                                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                            id="baseVerticalLeft-tab1" data-toggle="tab"
                                                            aria-controls="tabVerticalLeft1"
                                                            href="#tabVerticalLeft{{ $contact->id }}" role="tab"
                                                            aria-selected="true">{{ $contact->vendors->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                            <div class="tab-content">
                                                @foreach ($contacts as $contact)
                                                    <div class="tab-pane {{ $loop->first ? 'active' : '' }}"
                                                        style="overflow-y: scroll;height:500px;"
                                                        id="tabVerticalLeft{{ $contact->id }}" role="tabpanel"
                                                        aria-labelledby="baseVerticalLeft-tab1">
                                                        <!-- Dashboard Analytics Start -->
                                                        <section id="dashboard-analytics">
                                                            <div class="row match-height">
                                                                <!-- Timeline Card -->
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="card card-user-timeline">

                                                                        <div class="card-body">
                                                                            <ul class="timeline ml-50" id="messages">
                                                                                @forelse($contact->chats as $chat)
                                                                                    @if ($chat->type == 1)
                                                                                        <li class="timeline-item">
                                                                                            <span
                                                                                                class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                                                                            <div class="timeline-event">
                                                                                                <h6>{{ $chat->users->name }}
                                                                                                </h6>
                                                                                                <p>{{ $chat->created_at }}</p>
                                                                                                <div
                                                                                                    class="media align-items-center">
                                                                                                    <div class="avatar mr-50">
                                                                                                        <img src="{{ $chat->users->photo }}"
                                                                                                            alt="Avatar"
                                                                                                            width="38"
                                                                                                            height="38" />
                                                                                                    </div>
                                                                                                    <div class="media-body">
                                                                                                        <h6 class="mb-0">
                                                                                                            {{ $chat->message }}
                                                                                                        </h6>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endif
                                                                                    @if ($chat->type == 2)
                                                                                        <li class="timeline-item">
                                                                                            <span
                                                                                                class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                                                            <div class="timeline-event">
                                                                                                <h6>{{ $chat->vendors->name }}
                                                                                                </h6>
                                                                                                <p>{{ $chat->created_at }}</p>
                                                                                                <div
                                                                                                    class="media align-items-center">
                                                                                                    <div class="avatar mr-50">
                                                                                                        <img src="{{ $chat->vendors->data->ID_image }}"
                                                                                                            alt="Avatar"
                                                                                                            width="38"
                                                                                                            height="38" />
                                                                                                    </div>
                                                                                                    <div class="media-body">
                                                                                                        <h6 class="mb-0">
                                                                                                            {{ $chat->message }}
                                                                                                        </h6>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    @endif

                                                                                @empty
                                                                                    <p>{{ __('common.no_chats') }}</p>
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

                            <!-- Timeline Card -->
                            <div class="col-lg-6 col-6">
                                <div class="card card-user-timeline">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="list" class="user-timeline-title-icon"></i>
                                            <h4 class="card-title">{{ __('common.Communicate with the user') }}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="timeline ml-50" id="admin_messages"
                                            style="overflow-y: scroll;height:500px;">
                                            @foreach ($contact_admin->chats as $chat)
                                                @if ($chat->type == 1)
                                                    <li class="timeline-item">
                                                        <span
                                                            class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                                        <div class="timeline-event">
                                                            <div class="media align-items-center">
                                                                <div class="avatar mr-50">
                                                                    <img src="{{ $chat->users->photo }}" alt="Avatar"
                                                                        width="38" height="38" />
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 style="font-weight: bold;">{{ $chat->users->name }}
                                                                    </h6>
                                                                    <small>{{ $chat->period }}</small>
                                                                </div>
                                                            </div>
                                                            <h6 class="mb-0" style="margin: 10px;">
                                                                <span class="iconify" style="color: #fec53a;"
                                                                    data-icon="bxs:message"></span>
                                                                {{ $chat->message }}
                                                            </h6>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <form id="FormSendAdminMessage" action="javascript:void(0)">
                                            @csrf
                                            <section id="input-group-buttons">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-12 mb-1">
                                                                        <div class="input-group">
                                                                            <input type="hidden"
                                                                                value="{{ $contact_admin->id }}"
                                                                                name="contact_id" />
                                                                            <input type="text" name="message"
                                                                                class="form-control"
                                                                                placeholder="{{ __('common.write_message') }}"
                                                                                aria-describedby="button-addon2" />
                                                                            <div class="input-group-append"
                                                                                id="button-addon2">
                                                                                <button class="btn btn-outline-primary"
                                                                                    id="admin_message_btn"
                                                                                    type="button">{{ __('common.send') }}</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--/ Timeline Card -->
                        </div>
                    </section>
                    <!-- Vertical Tabs end -->
                @endcan

                @can('roles.vendor')
                    <!-- Dashboard Analytics Start -->
                    <section id="dashboard-analytics">
                        <div class="row match-height">
                            <!-- Timeline Card -->
                            <div class="col-lg-12 col-12">
                                <div class="card card-user-timeline">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="list" class="user-timeline-title-icon"></i>
                                            <h4 class="card-title">{{ __('common.chats') }}</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="timeline ml-50" id="messages" style="overflow-y: scroll;height:500px;">
                                            @foreach ($contact->chats as $chat)
                                                @if ($chat->type == 1)
                                                    <li class="timeline-item">
                                                        <span
                                                            class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                                        <div class="timeline-event">
                                                            <div class="media align-items-center">
                                                                <div class="avatar mr-50">
                                                                    <img src="{{ $chat->users->photo }}" alt="Avatar"
                                                                        width="38" height="38" />
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 style="font-weight: bold;">{{ $chat->users->name }}
                                                                    </h6>
                                                                    <small>{{ $chat->period }}</small>
                                                                </div>
                                                            </div>
                                                            <h6 class="mb-0" style="margin: 10px;">
                                                                <span class="iconify" style="color: #fec53a;"
                                                                    data-icon="bxs:message"></span>
                                                                {{ $chat->message }}
                                                            </h6>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if ($chat->type == 2)
                                                    <li class="timeline-item">
                                                        <span
                                                            class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                        <div class="timeline-event">
                                                            <div class="media align-items-center">
                                                                <div class="avatar mr-50">
                                                                    <img src="{{ $chat->vendors->data->ID_image }}"
                                                                        alt="Avatar" width="38" height="38" />
                                                                </div>
                                                                <div class="media-body">
                                                                    <h6 style="font-weight: bold;">{{ $chat->vendors->name }}
                                                                    </h6>
                                                                    <small>{{ $chat->period }}</small>
                                                                </div>
                                                            </div>
                                                            <h6 class="mb-0" style="margin: 10px;">
                                                                <span class="iconify" style="color: #fec53a;"
                                                                    data-icon="bxs:message"></span>
                                                                {{ $chat->message }}
                                                            </h6>
                                                        </div>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <form id="FormSendMessage" action="javascript:void(0)">
                                            @csrf
                                            <section id="input-group-buttons">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-12 mb-1">
                                                                        <div class="input-group">
                                                                            <input type="hidden"
                                                                                value="{{ $contact->id }}"
                                                                                name="contact_id" />
                                                                            <input type="text" name="message"
                                                                                class="form-control"
                                                                                placeholder="{{ __('common.write_message') }}"
                                                                                aria-describedby="button-addon2" />
                                                                            <div class="input-group-append"
                                                                                id="button-addon2">
                                                                                <button class="btn btn-outline-primary"
                                                                                    id="send_message_btn"
                                                                                    type="button">{{ __('common.send') }}</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--/ Timeline Card -->
                        </div>
                    </section>
                    <!-- Dashboard Analytics end -->
                @endcan
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!--Form Delete -->
    <div id="myModal{{ $client->id }}" class="modal fade" tabindex="-1" role="dialog"
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
                    <a href="{{ url(app()->getLocale() . '/delete_client/' . $client->id) }}">
                        <button class="btn btn-danger">{{ __('common.delete') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Delete -->
@endsection
@section('js')
    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/delete_client') }}/' + id;
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
        $(document).ready(function() {
            $(document).on("click", "#send_message_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('send_message') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormSendMessage").reset();
                            $('#messages').append(
                                '<span class="timeline-point timeline-point-warning timeline-point-indicator"></span>' +
                                '<div class="timeline-event">' +
                                '<div class="media align-items-center">' +
                                '<div class="avatar mr-50">' +
                                '<img src="' + response.image +
                                '" alt="Avatar" width="38" height="38" />' +
                                '</div>' +
                                '<div class="media-body">' +
                                '<h6 style="font-weight: bold;">' + response.name +
                                '</h6>' +
                                '<small>' + response.item.period + '</small>' +
                                '</div>' +
                                '</div>' +
                                '<h6 class="mb-0" style="margin: 10px;">' +
                                '<span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>' +
                                response.item.message + '</h6>' +
                                '</div>')
                        }
                    }

                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on("click", "#admin_message_btn", function() {
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('send_message') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormSendAdminMessage").reset();
                            $('#admin_messages').append(
                                '<span class="timeline-point timeline-point-warning timeline-point-indicator"></span>' +
                                '<div class="timeline-event">' +
                                '<div class="media align-items-center">' +
                                '<div class="avatar mr-50">' +
                                '<img src="' + response.image +
                                '" alt="Avatar" width="38" height="38" />' +
                                '</div>' +
                                '<div class="media-body">' +
                                '<h6 style="font-weight: bold;">' + response.name +
                                '</h6>' +
                                '<small>' + response.item.period + '</small>' +
                                '</div>' +
                                '</div>' +
                                '<h6 class="mb-0" style="margin: 10px;">' +
                                '<span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>' +
                                response.item.message + '</h6>' +
                                '</div>')
                        }
                    }

                });
            });
        });
    </script>
@endsection
