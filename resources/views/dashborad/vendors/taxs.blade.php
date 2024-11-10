@extends('layouts.dashborad')
@section('css')
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<style>
    .toast-success div ,.toast-warning div{
        position: relative;
        left: -30px;
        top: 2px;
    }
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
                        <h2 class="content-header-title float-left mb-0">{{__('common.taxs')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/taxs')}}">
                                        {{__('common.taxs')}}
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
                        <button class="btn-icon btn btn-outline-success btn-round btn-sm dropdown-toggle" onclick="collection_taxs()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.collection_taxs')}}</button>
                        <button class="btn-icon btn btn-outline-info btn-round btn-sm dropdown-toggle" id="calculate_taxs" onclick="calculate_taxs()" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.calculating_taxs')}}</button>

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
                                        <th>{{__('common.order_date')}}</th>
                                        <th>{{__('common.order_no')}}</th>
                                        <th>{{__('common.price')}}</th>
                                        <th>{{__('common.value_added_tax')}}</th>
                                        <th>{{__('common.income_tax')}}</th> 
                                        <th>{{__('common.status')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach($orders as $order)
                                    <tr id="tr-{{$order->id}}">
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->order_no}}</td>
                                        <td>{{$order->final_price}}</td>
                                        <td>{{$order->value_added_tax}}</td>
                                        <td>{{$order->incomming_tax}}</td>
                                        <td>
                                            @if($order->vats) 
                                                @if($order->vats->status == 1)
                                                    <div class="badge badge-pill badge-light-success mr-50">
                                                        {{__('common.taken')}}
                                                    </div>
                                                    @else 
                                                    <div class="badge badge-pill badge-light-danger mr-50">
                                                        {{__('common.un_taken')}}
                                                    </div>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">{{__('common.total')}}</th>
                                        <th>{{$orders->sum('value_added_tax')}}</th>
                                        <th colspan="2">{{$orders->sum('incomming_tax')}}</th>
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
@endsection
@section('js')



<script>
    function collection_taxs(){
        var value_added_tax = {{$orders->sum('value_added_tax')}};
        var incomming_tax = {{$orders->sum('incomming_tax')}};
        var total = value_added_tax + incomming_tax;

        Swal.fire({
        title: '{{__('common.warning')}}!',
        text: "{{__('common.Do you want to calculate taxes?')}}",
        html:'<b>{{__('common.Do you want to calculate taxes?')}}</b><br><br>'+
                '<table class="table">'+
                    '<thead>'+
                        '<tr>'+
                            '<th>{{__('common.tax')}}</th>'+
                            '<th> {{__('common.amount')}}</th>'+
                        '</tr>'+
                    '</thead>'+
                    '<tbody>'+
                        '<tr>'+
                            '<td>{{__('common.value_added_tax')}}</td>'+
                            '<td>$'+value_added_tax+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td>{{__('common.income_tax')}}</td>'+
                            '<td>$'+incomming_tax+'</td>'+
                        '</tr>'+
                    '</tbody>'+
                    '<tfoot>'+
                        '<tr>'+
                            '<th>{{__('common.total')}}</th>'+
                            '<th>$'+ total +'</th>'+
                        '</tr>'+
                    '</tfoot>'+
                '</table>',
        icon: 'warning',
        
        // showCancelButton: true,
        confirmButtonText: '{{__('common.accept')}}',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ml-1'
        },
        buttonsStyling: false
        }).then(function (result) {
        if (result.value) {

            var url = '{{url(app()->getLocale()."/collection_taxs")}}/';
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
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('common.operation_accomplished_successfully')}}',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                        // toastr.success("{{__('common.operation_accomplished_successfully')}}");
                    }
                    if (response.message === 'warning') {
                        Swal.fire({
                            title: '{{__('common.warning')}}!',
                            text: "{{__('common.no_unaccounted_taxs')}}",
                            icon: 'warning',
                            customClass: {
                                confirmButton: 'btn btn-warning'
                            }
                        });
                        // toastr.warning("{{__('common.no_unaccounted_taxs')}}");
                    }
                },
                error: function(e) {
                    // swal('exception', {icon: "error"});
                }
            });
            
            } 
            
        });  
        
    }
</script>

<script>
    function calculate_taxs() {
        var value_added_tax = {{$orders->sum('value_added_tax')}};
        var incomming_tax = {{$orders->sum('incomming_tax')}};
        var total = value_added_tax + incomming_tax;
        Swal.fire({
        title: '{{__('common.warning')}}!',
        text: "{{__('common.Do you want to collect taxes?')}}",
        html:'<b>{{__('common.Do you want to collect taxes?')}}</b><br><br>'+
                '<table class="table">'+
                    '<thead>'+
                        '<tr>'+
                            '<th>{{__('common.tax')}}</th>'+
                            '<th> {{__('common.amount')}}</th>'+
                        '</tr>'+
                    '</thead>'+
                    '<tbody>'+
                        '<tr>'+
                            '<td>{{__('common.value_added_tax')}}</td>'+
                            '<td>$'+value_added_tax+'</td>'+
                        '</tr>'+
                        '<tr>'+
                            '<td>{{__('common.income_tax')}}</td>'+
                            '<td>$'+incomming_tax+'</td>'+
                        '</tr>'+
                    '</tbody>'+
                    '<tfoot>'+
                        '<tr>'+
                            '<th>{{__('common.total')}}</th>'+
                            '<th>$'+ total +'</th>'+
                        '</tr>'+
                    '</tfoot>'+
                '</table>',
        icon: 'warning',
        // showCancelButton: true,
        confirmButtonText: '{{__('common.accept')}}',
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-outline-danger ml-1'
        },
        buttonsStyling: false
        }).then(function (result) {
        if (result.value) {

            var url = '{{url(app()->getLocale()."/calculate_taxs")}}/';
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
                        Swal.fire({
                            icon: 'success',
                            title: '{{__('common.operation_accomplished_successfully')}}',
                            customClass: {
                                confirmButton: 'btn btn-success'
                            }
                        });
                        // toastr.success("{{__('common.operation_accomplished_successfully')}}");
                    }
                    if (response.message === 'warning') {
                        Swal.fire({
                            title: '{{__('common.warning')}}!',
                            text: "{{__('common.no_unaccounted_taxs')}}",
                            icon: 'warning',
                            customClass: {
                                confirmButton: 'btn btn-warning'
                            }
                        });
                        // toastr.warning("{{__('common.no_unaccounted_taxs')}}");
                    }
                },
                error: function(e) {
                    // swal('exception', {icon: "error"});
                }
            });
            
            } 
            
        });  
    }
</script>
@endsection