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
                        <h2 class="content-header-title float-left mb-0">{{__('common.extra_space')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/extra_space')}}">
                                        {{__('common.extra_space')}}
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
                <li style="color: #01b070; margin: 15px">{{ session('status')  }}</li>
            </ul>
            @endif
            @if (session('warning'))
            <ul style="border: 1px solid orange; background-color: white; border-radius: 5px;">
                <li style="color: orange; margin: 15px">{{ session('warning')  }}</li>
            </ul>
            @endif
        </div>
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>{{__('common.name_vendor')}}</th>
                                        <th>{{__('common.status')}}</th>
                                        <th>{{__('common.space')}}</th>
                                        <th>{{__('common.created_at')}}</th>
                                        <th>{{__('common.actions')}}</th>
                                    </tr>
                                </thead> 
                                <tbody id="menu_new">
                                    @foreach($extraspaces as $order)
                                    <tr id="tr_new-{{$order->id}}">
                                        <td>
                                            <span class="font-weight-bold">
                                                {{ $order->vendors->name }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between" id="switch_activate" style="margin-bottom: 10px;">
                                                <div class="custom-control custom-switch"> 
                                                    <input type="checkbox" id="paymentTerms{{$order->id}}" class="custom-control-input toggle-class{{$order->id}}" data-id="{{$order->id}}" onclick="change_status({{$order->id}})" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $order->status ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="paymentTerms{{$order->id}}"></label> 
                                                </div>
                                            </div>
                                        </td>
                                     
                                        <td><span class="badge badge-pill badge-light-info mr-1">{{ $order->area }}</span></td>

                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $order->created_at }}</span></td>
                                     
                                        <td style="display: flex;padding-top:23px;">
                                          
                                            <div class="badge badge-pill badge-light-secondary mr-50" href="#cancel_extra_spaces{{$order->id}}" role="button" data-toggle="modal">
                                                {{__('common.cancel_extra_space')}}
                                            </div>
                                          
                                        </td>
                                    </tr>
                            

                                    <!--Form cancel product -->
                                    <div id="cancel_extra_spaces{{$order->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button> -->
                                                    <h4 class="modal-title">
                                                        {{__('common.cancel_extra_spaces')}}
                                                    </h4>
                                                </div>
                                                <form id="FormCancelExtraSpace" action="javascript:void(0)">
                                                    @csrf
                                                    <input name="order_id" value="{{$order->id}}" type="hidden" />
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="account-name">{{__('common.notes')}}</label>
                                                            <textarea type="text" class="form-control" id="notes" placeholder="{{__('common.notes')}}" name="notes" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('common.cancel')}}</button>
                                                        <button class="btn btn-secondary" id="cancel_extra_spaces_btn">{{__('common.cancel_booking_orders')}}</button>
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
    </div>
</div>

@endsection
@section('js')
<script src="{{url('public/dashborad/app-assets/js/scripts/components/components-bs-toast.js')}}"></script>
<!-- END: Page JS-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function change_status(id) {
        var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 0;
        var order_id = $(".toggle-class" + id).data('id');
        $.ajax({
            type: "GET", 
            dataType: "json",
            url: '{{url(app()->getLocale()."/change_status_extra_spaces")}}',
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
        $(document).on("click", "#cancel_extra_spaces_btn", function() {
            let form = $(this.form);
            console.log(form)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postData = new FormData(this.form);
            $.ajax({
                url: "{{ route('cancel_extra_space')}}",
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.message === 'Success') {
                        document.getElementById("FormCancelExtraSpace").reset();
                        $('#tr_new-' + response.item.id).hide(500);
                        $('#cancel_extra_spaces' + response.item.id).modal('toggle');

                        //swal("القضية حذفت!", {icon: "success"});
                    }
                }

            });
        });
    });
</script>
@endsection