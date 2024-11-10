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
                        <h2 class="content-header-title float-left mb-0">{{__('common.edit_main_category')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('common.edit_main_category')}}</a>
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
                                <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/product/'.$product->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="t-text" class="">{{__('common.main_category')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="category_id" onchange="get_sub_category(this)">
                                                        @foreach($main_categories as $category)
                                                        <option value="{{$category->id}}" @if($category->id == $product->products_category->category_id) selected @endif>
                                                            @if(app()->getLocale()=='ar')
                                                            {{$category->name_ar}}
                                                            @else
                                                            {{$category->name_en}}
                                                            @endif
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="t-text" class="">{{__('common.sub_category')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="sub_category_id" id="sub_category" onchange="get_sub_sub_category(this)">
                                                        @foreach($sub_categories as $category)
                                                            <option value="{{$category->id}}" @if($category->id == $product->products_category->sub_category_id) selected @endif>
                                                                @if(app()->getLocale()=='ar')
                                                                {{$category->name_ar}}
                                                                @else
                                                                {{$category->name_en}}
                                                                @endif
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="t-text" class="">{{__('common.sub_category')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="sub_sub_category_id" id="sub_sub_category">
                                                        @foreach($sub_sub_categories as $category)
                                                            <option value="{{$category->id}}" @if($category->id == $product->products_category->sub_sub_category_id) selected @endif>
                                                                @if(app()->getLocale()=='ar')
                                                                {{$category->name_ar}}
                                                                @else
                                                                {{$category->name_en}}
                                                                @endif
                                                            </option>
                                                        @endforeach           
                                                    </select>
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
                                                    <label for="first-name">{{__('common.duration_received_'.$locale->lang)}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="text" name="duration_received_{{$locale->lang}}" placeholder="{{__('common.duration_received_'.$locale->lang)}}" class="form-control" value="@if($locale->lang == 'ar'){{$product->duration_received_ar}} @else {{ $product->duration_received_en }} @endif" required>
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
                                                    <textarea id="t-text" type="text" name="description_{{$locale->lang}}" placeholder="{{__('common.description_'.$locale->lang)}}" class="form-control" value="" required>@if($locale->lang == 'ar'){{$product->description_ar}} @else {{ $product->description_en }} @endif</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.code')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="text" name="code" placeholder="{{__('common.code')}}" class="form-control" value="{{$product->code}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.Qty')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="qty" placeholder="{{__('common.Qty')}}" class="form-control" value="{{$product->qty}}" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.price')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="price" placeholder="{{__('common.price')}}" class="form-control" value="{{$product->price}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.width')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="width" placeholder="{{__('common.width')}}" class="form-control" value="{{$product->width}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.height')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="height" placeholder="{{__('common.height')}}" class="form-control" value="{{$product->height}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.length')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="length" placeholder="{{__('common.length')}}" class="form-control" value="{{$product->length}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.price_offer')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="number" name="price_offer" placeholder="{{__('common.price_offer')}}" class="form-control" value="{{$product->price_offer}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.start_date')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="date" name="start_date" placeholder="{{__('common.start_date')}}" class="form-control" value="{{$product->start_date}}" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="first-name">{{__('common.end_date')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input id="t-text" type="date" name="end_date" placeholder="{{__('common.end_date')}}" class="form-control" value="{{$product->end_date}}" required />
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
    function get_sub_category(e) {
        $.get("{{url('/')}}/get_sub_category/" + e.value, function(data, status) {

            $('#sub_category').empty('')
            $('#sub_sub_category').empty('')
            $('#sub_category').append('<option disabled selected>{{__('common.sub_category')}}</option>')
            $('#sub_sub_category').append('<option disabled selected>{{__('common.sub_category')}}</option>')

            console.log(data.data)
            var sub_category = {{$product->products_category->sub_category_id}};
            data.data.forEach(function(item) {
                $('#sub_category').append('<option   value="'+ item.id +'">' + item.@if(app() -> getLocale() == 'ar') name_ar @else name_en @endif + '</option>')
            })
        });
    }

    function get_sub_sub_category(e) {
        $.get("{{url('/')}}/get_sub_sub_category/" + e.value, function(data, status) {

            $('#sub_sub_category').empty('')
            $('#sub_sub_category').append('<option disabled selected>{{__('common.sub_category')}}</option>')

            console.log(data.data)
            data.data.forEach(function(item) {
                $('#sub_sub_category').append('<option  value="' + item.id + '">' + item.@if(app() -> getLocale() == 'ar') name_ar @else name_en @endif + '</option>')
            })
        });
    }
</script>
@endsection