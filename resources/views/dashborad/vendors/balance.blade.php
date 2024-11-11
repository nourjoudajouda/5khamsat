@extends('layouts.dashborad')
@section('css')
    <style>
        .card-statistics .statistics-body .avatar .avatar-content .avatar-icon {
            width: 15px;
            height: 14px;
        }

        h4,
        .h4 {
            font-size: 15px;
        }

        .card-statistics .statistics-body .avatar .avatar-content {
            width: 35px;
            height: 35px;
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.Portfolio') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/portfolio') }}">
                                            {{ __('common.Portfolio') }}
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        {{ $vendor->name }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @can('roles.vendor')
                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn-outline-success btn-round btn-sm dropdown-toggle"
                                    data-toggle="modal" data-target="#withdraw_balance" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">{{ __('common.withdraw money') }}</button>
                            </div>
                        </div>
                    </div>
                @endcan
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
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Medal Card -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="card card-congratulation-medal">
                            <div class="card-body">
                                <h5>{{ __('common.current_balance') }}</h5>
                                <p class="card-text font-small-3">{{ __('common.current_balance') }} :
                                    {{ $current_balance->balance }} </p>
                                <h3 class="mb-75 mt-2 pt-50">
                                    <a href="javascript:void(0);">${{ $current_balance->balance }}</a>
                                </h3>
                                <a href="{{ url('orders') }}">
                                    <button type="button" class="btn btn-primary">{{ __('common.View Sales') }}</button>
                                </a>
                                <!-- <img src="{{ url('dashborad/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" /> -->
                            </div>
                        </div>
                    </div>
                    <!--/ Medal Card -->

                    <!-- Statistics Card -->
                    <div class="col-xl-9 col-md-6 col-12">
                        <div class="card card-statistics">
                            <div class="card-header">
                                <h4 class="card-title">{{ __('common.Statistics') }}</h4>

                            </div>
                            <div class="card-body statistics-body">
                                <div class="row">
                                    <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-primary mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="total_sales">
                                                    ${{ $total_sales->sum('total') }}</h4>
                                                <p class="card-text font-small-3 mb-0">{{ __('common.Total sales') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-info mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_users">
                                                    ${{ $collected_shipping_invoices->sum('price') }}</h4>
                                                <p class="card-text font-small-3 mb-0">
                                                    {{ __('common.Collected shipping invoices') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">
                                        <div class="media">
                                            <div class="avatar bg-light-info mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_users">
                                                    ${{ $un_collected_shipping_invoices->sum('price') }}</h4>
                                                <p class="card-text font-small-3 mb-0">
                                                    {{ __('common.Uncollected shipping invoices') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="media">
                                            <div class="avatar bg-light-danger mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_sales">
                                                    ${{ $collected_orders_invoices->sum('price') }}</h4>
                                                <p class="card-text font-small-3 mb-0">{{ __('common.Collected taxs') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-sm-0">
                                        <div class="media">
                                            <div class="avatar bg-light-danger mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="count_sales">
                                                    ${{ $un_collected_orders_invoices->sum('price') }}</h4>
                                                <p class="card-text font-small-3 mb-0">{{ __('common.Uncollected taxs') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-sm-6 col-12">
                                        <div class="media">
                                            <div class="avatar bg-light-success mr-1">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                </div>
                                            </div>
                                            <div class="media-body my-auto">
                                                <h4 class="font-weight-bolder mb-0" id="revenue">
                                                    ${{ $total_sales->sum('final_price') - ($collected_orders_invoices->sum('price') + $collected_shipping_invoices->sum('price')) }}
                                                </h4>
                                                <p class="card-text font-small-3 mb-0">{{ __('common.Total revenue') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Statistics Card -->
                </div>
            </section>
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('common.Commission_invoices') }}</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.created_at') }}</th>
                                        <!-- <th>{{ __('common.type_invoice') }}</th> -->
                                        <th>{{ __('common.status') }}</th>
                                        <th>{{ __('common.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach ($invoices_commission as $invoice)
                                        <tr id="tr-{{ $invoice->id }}">
                                            <td><span
                                                    class="badge badge-pill badge-light-warning mr-1">{{ $invoice->created_at }}</span>
                                            </td>
                                            <!-- <td>
                                            @if ($invoice->type == 1)
    <img src="{{ $invoice->stores->users->photo }}" style="height: 45px;border-radius: 50%;" alt=""/>

                                            <span class="badge badge-pill badge-light-info mr-1">{{ $invoice->stores->company_name }}</span>
@else
    <img src="{{ asset('/dashborad/app-assets/images/logo.png') }}" style="height: 45px;" alt=""/>

                                            <!-- <span class="badge badge-pill badge-light-info mr-1">{{ __('common.5khamsat') }}</span> -->

                                            <!--
    @endif
                                        </td> -->
                                            <td>
                                                @if ($invoice->status == 1)
                                                    <span
                                                        class="badge badge-pill badge-light-success mr-1">{{ __('common.paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.un_paid') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-light-secondary mr-1">${{ $invoice->price }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">{{ __('common.total') }}</th>
                                        <th>${{ $invoices_commission->sum('price') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('common.taxes_invoices') }}</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.created_at') }}</th>
                                        <!-- <th>{{ __('common.type_invoice') }}</th> -->
                                        <th>{{ __('common.status') }}</th>
                                        <th>{{ __('common.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach ($invoices_taxes as $invoice)
                                        <tr id="tr-{{ $invoice->id }}">
                                            <td><span
                                                    class="badge badge-pill badge-light-warning mr-1">{{ $invoice->created_at }}</span>
                                            </td>
                                            <!-- <td>
                                            @if ($invoice->type == 1)
    <img src="{{ $invoice->stores->users->photo }}" style="height: 45px;border-radius: 50%;" alt=""/>

                                            <span class="badge badge-pill badge-light-info mr-1">{{ $invoice->stores->company_name }}</span>
@else
    <img src="{{ asset('/dashborad/app-assets/images/logo.png') }}" style="height: 45px;" alt=""/>

                                            <!-- <span class="badge badge-pill badge-light-info mr-1">{{ __('common.5khamsat') }}</span> -->

                                            <!--
    @endif
                                        </td> -->
                                            <td>
                                                @if ($invoice->status == 1)
                                                    <span
                                                        class="badge badge-pill badge-light-success mr-1">{{ __('common.paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.un_paid') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-light-secondary mr-1">${{ $invoice->price }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">{{ __('common.total') }}</th>
                                        <th>${{ $invoices_taxes->sum('price') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('common.stores_invoices') }}</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.created_at') }}</th>
                                        <!-- <th>{{ __('common.type_invoice') }}</th> -->
                                        <th>{{ __('common.status') }}</th>
                                        <th>{{ __('common.amount') }}</th>
                                        <th>{{ __('common.notes') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach ($invoices_stores as $invoice)
                                        <tr id="tr-{{ $invoice->id }}">
                                            <td><span
                                                    class="badge badge-pill badge-light-warning mr-1">{{ $invoice->created_at }}</span>
                                            </td>
                                            <!-- <td>
                                            @if ($invoice->type == 1)
    <img src="{{ $invoice->stores->users->photo }}" style="height: 45px;border-radius: 50%;" alt=""/>

                                            <span class="badge badge-pill badge-light-info mr-1">{{ $invoice->stores->company_name }}</span>
@else
    <img src="{{ asset('/dashborad/app-assets/images/logo.png') }}" style="height: 45px;" alt=""/>

                                            <!-- <span class="badge badge-pill badge-light-info mr-1">{{ __('common.5khamsat') }}</span> -->

                                            <!--
    @endif
                                        </td> -->
                                            <td>
                                                @if ($invoice->status == 1)
                                                    <span
                                                        class="badge badge-pill badge-light-success mr-1">{{ __('common.paid') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-light-danger mr-1">{{ __('common.un_paid') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span
                                                    class="badge badge-pill badge-light-secondary mr-1">${{ $invoice->price }}</span>
                                            </td>
                                            <td>
                                                {{ __('common.The invoice has been calculated for a company') }}
                                                <strong>{{ $invoice->stores->company_name }}</strong>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">{{ __('common.total') }}</th>
                                        <th>${{ $invoices_stores->sum('price') }}</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->


            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('common.payments') }}</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.created_at') }}</th>
                                        <th>{{ __('common.type_payment') }}</th>
                                        <th>{{ __('common.amount') }}</th>
                                        <th>{{ __('common.notes') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach ($payments as $payment)
                                        <tr id="tr-{{ $payment->id }}">
                                            <td><span
                                                    class="badge badge-pill badge-light-warning mr-1">{{ $payment->created_at }}</span>
                                            </td>
                                            <td>

                                                @if ($payment->type == 1)
                                                    <img src="{{ $payment->stores->users->photo }}"
                                                        style="height: 45px;border-radius: 50%;" alt="" />
                                                    <span
                                                        class="badge badge-pill badge-light-info mr-1">{{ $payment->stores->company_name }}</span>
                                                @else
                                                    <img src="{{ asset('/dashborad/app-assets/images/logo.png') }}"
                                                        style="height: 45px;" alt="" />
                                                    <!-- <span class="badge badge-pill badge-light-info mr-1">{{ __('common.5khamsat') }}</span> -->
                                                @endif

                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-light-secondary mr-1">${{ $payment->amount }}</span>
                                            </td>
                                            <td>
                                                <strong>
                                                    @if ($payment->type == 3)
                                                        {{ __('common.5khamsat commission payment') }}
                                                    @elseif($payment->type == 2)
                                                        {{ __('common.tax payment') }}
                                                    @elseif($payment->type == 1)
                                                        {{ __('common.storage space payment') }}
                                                    @endif
                                                </strong>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">{{ __('common.total') }}</th>
                                        <th>${{ $payments->sum('amount') }}</th>
                                        <th></th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Tables end -->


            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('common.withdrawals') }}</h4>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{ __('common.created_at') }}</th>
                                        <th>{{ __('common.status') }}</th>
                                        <th>{{ __('common.amount') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach ($withdrawals as $amount)
                                        <tr id="tr-{{ $amount->id }}">
                                            <td><span
                                                    class="badge badge-pill badge-light-warning mr-1">{{ $amount->created_at }}</span>
                                            </td>
                                            <td>

                                                @if ($amount->status == 1)
                                                    <span
                                                        class="badge badge-pill badge-light-info mr-1">{{ __('common.finished') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-pill badge-light-info mr-1">{{ __('common.pending') }}</span>
                                                @endif

                                            </td>

                                            <td>
                                                <span
                                                    class="badge badge-pill badge-light-secondary mr-1">${{ $amount->amount }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">{{ __('common.total') }}</th>
                                        <th>${{ $withdrawals->sum('amount') }}</th>
                                    </tr>
                                </tfoot>
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
    <!--Withdrow-->
    <div class="modal fade text-left" id="withdraw_balance" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog" style="max-width:40%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('common.withdraw money') }}</h5>
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
                    <form method="post" action="{{ url(app()->getLocale() . '/withdraw_balance') }}"
                        enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                        {{ csrf_field() }}

                        <div style="margin-bottom: 20px;">
                            <label for="t-text" class="">{{ __('common.amount') }}</label>
                            <input id="t-text" type="number" value="{{ $current_balance->balance }}"
                                name="amount" placeholder="{{ __('common.amount') }}" class="form-control" />
                        </div>
                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i
                                    class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                            <button id="btn-bg" class="btn btn-primary">{{ __('common.send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Model Withdrow-->
@endsection
@section('js')
@endsection
