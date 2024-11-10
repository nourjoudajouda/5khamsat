@extends('layouts.dashborad')
@section('css')
<style>
    .toast-success div ,.toast-warning div{
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
            <div class="content-header-left col-md-7 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('common.warranty_disclosure')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/warranty_disclosure')}}">
                                        {{__('common.warranty_disclosure')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-5 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group" style="margin-bottom: 0px;text-align: right;">
                                    <input class="form-control input" id="order_no" type="text" name="order_no" value="" placeholder="{{__('common.order_no')}}" onkeyup="search_warranty()">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="margin-bottom: 0px;
                                text-align: right;">
                                    <input type="text" name="name_product" id="name_product" style="margin-bottom: 0px;" class="form-control radius" placeholder="{{__('common.name_product')}}" onkeyup="search_warranty_products()">
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        
        <div class="content-body">
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
                                        <th>{{__('common.order_no')}}</th>
                                        <th>{{__('common.name_product')}}</th>
                                        <th>{{__('common.image')}}</th>
                                        <th>{{__('common.name_client')}}</th>
                                        <th>{{__('common.name_vendor')}}</th>
                                        <th>{{__('common.Qty')}}</th>
                                        <th>{{__('common.warranty_period')}}</th>                                        
                                        <th>{{__('common.remaining_period')}}</th>
                                        <th>{{__('common.created_at')}}</th>
                                        <th>{{__('common.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="search_warranty">
                                    @foreach($orders as $order)
                             
                                    <tr id="tr-{{$order->id}}">
                                        <td><span class="badge badge-pill badge-light-secondary mr-1">{{ $order->orders->order_no }}</span></td>
                                        <td>
                                            <span class="font-weight-bold">
                                                @if(app()->getLocale() == 'en')
                                                {{ $order->products->name_en }}
                                                @else
                                                {{ $order->products->name_ar }}
                                                @endif
                                            </span> 
                                        </td> 
                                        <td>
                                            <img src="{{$order->products->image}}" style="height: 50px;" alt="Image Category" />
                                        </td>
                                        <td>{{$order->users->name}}</td>
                                        <td>{{$order->vendors->name}}</td>
                                        <td><span class="badge badge-pill badge-light-warning mr-1">{{ $order->quantity }}</span></td>
                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->products->warranty_period }} {{__('common.month')}}</span></td>
                                        <td><span class="badge badge-pill badge-light-danger mr-1">{{ $order->period}} {{__('common.day')}}</span></td>
                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>
                                        <td>
                                            
                                            <a href="{{url(app()->getLocale().'/orders/'.$order->order_id)}}">
                                                <div class="badge badge-pill badge-light-primary mr-50">
                                                    {{__('common.view')}}
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
            <div class="d-flex justify-content-center text-center">
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
@section('js')
<script>
    function search_warranty(){
        var order_no = $("#order_no").val();
        $.ajax({
                url: '{{url(app()->getLocale()."/search_warranty")}}/'+order_no,
                method: "get",
                processData: false,
                contentType: false,
                context: document.body,
                success: function(response) {
                    $('#search_warranty').empty();
                    if (response.message === 'Success') {
                        console.log(response.orders)
                        response.orders.forEach(function(item) {
                            $('#search_warranty').append('<tr id="tr-'+ item.id + '"><td><span class="badge badge-pill badge-light-secondary mr-1">'+item.orders.order_no+'</span></td><td><span class="font-weight-bold">@if(app()->getLocale() == "en")'+item.products.name_en+'@else'+item.products.name_ar+'@endif</span> </td><td><img src="' + item.products.image + '" style="height: 50px;" alt="" /> </td><td>'+item.users.name+'</td><td>'+item.vendors.name+'</td><td><span class="badge badge-pill badge-light-warning mr-1">'+ item.quantity +'</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.products.warranty_period+' {{__('common.month')}}</span></td><td><span class="badge badge-pill badge-light-danger mr-1">'+item.period_ajax+' {{__('common.day')}}</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.created_at+'</span></td><td><a href="{{url(app()->getLocale().'/orders/')}}/'+ item.order_id +'"><span class="badge badge-pill badge-light-warning mr-1">{{__('common.view')}}</span></a></td></tr>')
                        })
                    } 
                    if (response.message === 'fail') {
                        console.log(response.message)
                        toastr.warning("{{__('common.no_products')}}")
                    }
                }

            });
    }
</script>
<script>
    function search_warranty_products(){
        var value = $("#name_product").val();
        $.ajax({
                url: '{{url(app()->getLocale()."/nour")}}/'+value,
                method: "get",
                processData: false,
                contentType: false,
                context: document.body,
                success: function(response) {
                    $('#search_warranty').empty();
                    if (response.message === 'Success') {
                        response.results.forEach(function(products) {
                            console.log(products)

                            products.forEach(function(item) {
                                $('#search_warranty').append('<tr id="tr-'+ item.id + '"><td><span class="badge badge-pill badge-light-secondary mr-1">'+item.orders.order_no+'</span></td><td><span class="font-weight-bold">@if(app()->getLocale() == "en")'+item.products.name_en+'@else'+item.products.name_ar+'@endif</span> </td><td><img src="' + item.products.image + '" style="height: 50px;" alt="" /> </td><td>'+item.users.name+'</td><td>'+item.vendors.name+'</td><td><span class="badge badge-pill badge-light-warning mr-1">'+ item.quantity +'</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.products.warranty_period+' {{__('common.month')}}</span></td><td><span class="badge badge-pill badge-light-danger mr-1">'+item.period_ajax+' {{__('common.day')}}</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.created_at+'</span></td><td><a href="{{url(app()->getLocale().'/orders/')}}/'+ item.order_id +'"><span class="badge badge-pill badge-light-warning mr-1">{{__('common.view')}}</span></a></td></tr>')
                            })
                        })
                    } else {
                        // swal('Error', {icon: "error"});
                    }
                }

            });
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#order_no").keydown(function(){
            $.ajax({
                url: '{{url(app()->getLocale()."/get_all_warrantly")}}',
                method: "get",
                processData: false,
                contentType: false,
                context: document.body,
                success: function(response) {
                    $('#search_warranty').empty();
                    if (response.message === 'Success') {
                        console.log(response.orders)
                        response.orders.forEach(function(item) {
                            $('#search_warranty').append('<tr id="tr-'+ item.id + '"><td><span class="badge badge-pill badge-light-secondary mr-1">'+item.orders.order_no+'</span></td><td><span class="font-weight-bold">@if(app()->getLocale() == "en")'+item.products.name_en+'@else'+item.products.name_ar+'@endif</span> </td><td><img src="' + item.products.image + '" style="height: 50px;" alt="" /> </td><td>'+item.users.name+'</td><td>'+item.vendors.name+'</td><td><span class="badge badge-pill badge-light-warning mr-1">'+ item.quantity +'</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.products.warranty_period+' {{__('common.month')}}</span></td><td><span class="badge badge-pill badge-light-danger mr-1">'+item.period_ajax+' {{__('common.day')}}</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.created_at+'</span></td><td><a href="{{url(app()->getLocale().'/orders/')}}/'+ item.order_id +'"><span class="badge badge-pill badge-light-warning mr-1">{{__('common.view')}}</span></a></td></tr>')
                        })
                    } 
                   
                }

            });
        });
        $("#name_product").keydown(function(){
            $.ajax({
                url: '{{url(app()->getLocale()."/get_all_warrantly")}}',
                method: "get",
                processData: false,
                contentType: false,
                context: document.body,
                success: function(response) {
                    $('#search_warranty').empty();
                    if (response.message === 'Success') {
                        console.log(response.orders)
                        response.orders.forEach(function(item) {
                            $('#search_warranty').append('<tr id="tr-'+ item.id + '"><td><span class="badge badge-pill badge-light-secondary mr-1">'+item.orders.order_no+'</span></td><td><span class="font-weight-bold">@if(app()->getLocale() == "en")'+item.products.name_en+'@else'+item.products.name_ar+'@endif</span> </td><td><img src="' + item.products.image + '" style="height: 50px;" alt="" /> </td><td>'+item.users.name+'</td><td>'+item.vendors.name+'</td><td><span class="badge badge-pill badge-light-warning mr-1">'+ item.quantity +'</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.products.warranty_period+' {{__('common.month')}}</span></td><td><span class="badge badge-pill badge-light-danger mr-1">'+item.period_ajax+' {{__('common.day')}}</span></td><td><span class="badge badge-pill badge-light-success mr-1">'+item.created_at+'</span></td><td><a href="{{url(app()->getLocale().'/orders/')}}/'+ item.order_id +'"><span class="badge badge-pill badge-light-warning mr-1">{{__('common.view')}}</span></a></td></tr>')
                        })
                    } else {
                        // swal('Error', {icon: "error"});
                    }
                }

            });
        });
    });
</script>
@endsection