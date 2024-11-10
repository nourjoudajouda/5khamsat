@extends('layouts.dashborad')
@section('content')
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
                                    <a href="javascript:void(0);" id="all_spaces">{{$first_branche->area}}</a>
                                </h3>
                                <button type="button" class="btn btn-primary">
                                @if(app()->getLocale()=='ar')
                                    {{$first_branche->name_ar}}
                                @else
                                    {{$first_branche->name_en}}
                                @endif
                                </button>

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
                                <h4 >{{__('common.new_shippments')}}</h4>
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
                                            @foreach($new_shippments_orders as $order)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 40px;border-radius: 50%;" alt="Toolbar svg" />
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
                                <h4 >{{__('common.extra_space')}}</h4>
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
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 40px;border-radius: 50%;" alt="Toolbar svg" />
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
                                <h4 >{{__('common.booking_orders')}}</h4>
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
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 40px;border-radius: 50%;" alt="Toolbar svg" />
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
                                <h4 >{{__('common.return_orders')}}</h4>
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
                                                                <img src="{{$order->vendors->data->ID_image}}" style="height: 40px;border-radius: 50%;" alt="Toolbar svg" />
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
                                                    @endif</td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="{{$order->products->image}}" style="height: 40px;border-radius: 50%;" alt="Toolbar svg" />
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
                    $('#total_sales').html(response.total_sales)
                    $('#count_users').html(response.users)
                    $('#revenue').html(response.revenue)

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