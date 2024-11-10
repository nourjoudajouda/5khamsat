@extends('layouts.dashborad')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.new_orders')}}</h4>
                                <a href="{{url('/orders')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_client')}}</th>
                                            <th>{{__('common.order_no')}}</th>
                                            <th>{{__('common.price')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($new_orders as $order)
                                        <tr>
                                            <td>
                                                @if($order->vendor_id != 0)
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded" style="background-color: #ffffff;">
                                                        <div class="avatar-content">
                                                            <img src="{{Auth::user()->logo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{__('common.5khamsat')}}</div>
                                                        <div class="font-small-2 text-muted">{{Auth::user()->email}}</div>
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->users->photo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->order_no}}
                                            </td>
                                            <td>
                                                {{$order->final_price}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->


                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.orders_in_progress')}}</h4>
                                <a href="{{url('/orders')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_client')}}</th>
                                            <th>{{__('common.order_no')}}</th>
                                            <th>{{__('common.price')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($in_process_orders as $order)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->users->photo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->order_no}}
                                            </td>
                                            <td>
                                                {{$order->final_price}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!--/ Browser States Card -->


                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.shipment_orders')}}</h4>
                                <a href="{{url('/orders')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_client')}}</th>
                                            <th>{{__('common.order_no')}}</th>
                                            <th>{{__('common.price')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($in_shipping_orders as $order)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->users->photo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->order_no}}
                                            </td>
                                            <td>
                                                {{$order->final_price}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!--/ Browser States Card -->


                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.return_orders')}}</h4>
                                <a href="{{url('/orders')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_client')}}</th>
                                            <th>{{__('common.order_no')}}</th>
                                            <th>{{__('common.price')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($return_orders as $order)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->users->photo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->order_no}}
                                            </td>
                                            <td>
                                                {{$order->final_price}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!--/ Browser States Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.inside_new_shippments')}}</h4>
                                <a href="{{url('/stores')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_store')}}</th>
                                            <th>{{__('common.name_branche')}}</th>
                                            <th>{{__('common.area')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($new_shippment as $order)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->stores->company_name}}
                                            </td>
                                            <td>
                                                {{$order->branches->name_ar}}
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


                    <!-- Browser States Card -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.outshide_shippments_ordres')}}</h4>
                                <a href="{{url('/stores')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_store')}}</th>
                                            <th>{{__('common.name_branche')}}</th>
                                            <th>{{__('common.area')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($return_shippment as $order)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->stores->company_name}}
                                            </td>
                                            <td>
                                                {{$order->branches->name_ar}}
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

                    <!-- Browser States Card -->
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('common.point_movement')}}</h4>
                                <a href="{{url('/points')}}"><small>{{__('common.all')}}</small></a>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.name_client')}}</th>
                                            <th>{{__('common.order_no')}}</th>
                                            <th>{{__('common.points_earned')}}</th>
                                            <th>{{__('common.status')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($point_movement as $order)
                                        <tr>
                                            <td>
                                            @if($order->vendor_id != 0)
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->vendors->data->ID_image}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->vendors->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->vendors->email}}</div>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded" style="background-color: #ffffff;">
                                                        <div class="avatar-content">
                                                            <img src="{{Auth::user()->logo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{__('common.5khamsat')}}</div>
                                                        <div class="font-small-2 text-muted">{{Auth::user()->email}}</div>
                                                    </div>
                                                </div>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded">
                                                        <div class="avatar-content">
                                                            <img src="{{$order->users->photo}}" style="height: 36px;border-radius: 10px;width: 100%;" alt="Toolbar svg" />
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center;">
                                                        <div class="font-weight-bolder">{{$order->users->name}}</div>
                                                        <div class="font-small-2 text-muted">{{$order->users->email}}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{$order->order_no}}
                                            </td>
                                            <td>
                                                {{$order->points}}
                                            </td>
                                            <td>
                                                @if($order->status == 1)
                                                    <div class="badge badge-pill badge-light-warning mr-50">
                                                        {{__('common.in process')}}
                                                    </div>
                                                @elseif($order->status == 2)
                                                    <div class="badge badge-pill badge-light-warning mr-50">
                                                        {{__('common.finished')}}
                                                    </div>
                                                @elseif($order->status == 3)
                                                    <div class="badge badge-pill badge-light-warning mr-50">
                                                        {{__('common.reverse')}}
                                                    </div>
                                                @endif
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
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
@endsection