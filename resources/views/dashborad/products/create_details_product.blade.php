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
        width: 145px;
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
        content: "{{__('common.not_active')}}";
        position: absolute;
        top: 65%;
        right: 9%;
        margin-top: -12px;
        color: #666;
        color: rgba(0, 0, 0, 0.4);
        font-style: normal;
        font-weight: bold;
        font-family: 'Tajawal', sans-serif;
        font-size: 10px;
        text-transform: uppercase;
        text-shadow: 0 1px 0 #bcb8ae, 0 -1px 0 #97958e;
    }

    .span-switch:after {
        content: "{{__('common.active')}}";
        color: #ffffff;
        font-style: normal;
        font-weight: bold;
        font-family: 'Tajawal', sans-serif;
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
        right: 45%;
        top: 0;
        transition: all .5s;
        width: 55%;
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
                        <h2 class="content-header-title float-left mb-0">{{__('common.details_product')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('common.details_product')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="switch">
                <!-- <input type="checkbox"> -->
                <input data-id="{{$product->id}}" class="toggle-class{{$product->id}}" onclick="change_status({{$product->id}})" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $product->status ? 'checked' : '' }}>

                <label class="label-switch"></label>
                <span class="span-switch"></span>
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
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div> -->
                            <div class="card-body">
                                <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/update_product_vendor/'.$product->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.code')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="text" name="code" placeholder="{{__('common.code')}}" class="form-control" value="{{$product->code}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($locales as $locale)
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.name_'.$locale->lang)}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="text" name="name_{{$locale->lang}}" placeholder="{{__('common.name_'.$locale->lang)}}" class="form-control" value="@if($locale->lang == 'ar'){{$product->name_ar}} @else {{ $product->name_en }} @endif" required>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @foreach($locales as $locale)
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.description_'.$locale->lang)}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea id="t-text" rows="4" type="text" name="description_{{$locale->lang}}" placeholder="{{__('common.description_'.$locale->lang)}}" class="form-control" required> @if($locale->lang == 'ar'){{$product->description_ar}} @else {{ $product->description_en }} @endif</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.points')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="points" placeholder="{{__('common.points')}}" class="form-control" value="{{$product->points}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.Qty')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="qty" placeholder="{{__('common.Qty')}}" class="form-control" value="{{$product->qty}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.price')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="price" placeholder="{{__('common.price')}}" class="form-control" value="{{$product->price}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.price_offer')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="price_offer" placeholder="{{__('common.price_offer')}}" class="form-control" value="{{$product->price_offer}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.start_date')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="date" name="start_date" placeholder="{{__('common.start_date')}}" class="form-control" value="{{$product->start_date}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.end_date')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="date" name="end_date" placeholder="{{__('common.end_date')}}" class="form-control" value="{{$product->end_date}}">
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($locales as $locale)
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.duration_received_'.$locale->lang)}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="text" name="duration_received_{{$locale->lang}}" placeholder="{{__('common.duration_received_'.$locale->lang)}}" class="form-control" value="@if($locale->lang == 'ar'){{$product->duration_received_ar}} @else {{ $product->duration_received_en }} @endif" required>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.width')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="width" placeholder="{{__('common.width')}}" class="form-control" value="{{$product->width}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.height')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="height" placeholder="{{__('common.height')}}" class="form-control" value="{{$product->height}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.length')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="length" placeholder="{{__('common.length')}}" class="form-control" value="{{$product->length}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="customFile"> {{__('common.upload_image')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 offset-sm-0">
                                            <button type="submit" id="btn-bg" class="btn btn-primary mr-1">{{__('common.save')}}</button>
                                            <button type="reset" class="btn btn-outline-secondary">{{__('common.reset')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Horizontal form layout section end -->

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
<script>
    function change_status(id) {
        var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 0;
        var product_id = $(".toggle-class" + id).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "{{ route('vendor_status_product')}}",
            data: {
                'status': status,
                'product_id': product_id
            },
     
        });
    }

  
</script>
@endsection