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
                            <h2 class="content-header-title float-left mb-0">{{__('common.edit_sub_category')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('common.edit_sub_category')}}</a>
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
                        <li style="color: #01b070; margin: 15px">{{  session('status')  }}</li>
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
                                    <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/sub_category/'.$category->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-2 col-form-label">
                                                        <label for="first-name">{{__('common.main_category_name')}}</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <select name="main_parent" class="form-control">
                                                            @foreach($main_categories as $main_category)
                                                                <option value="{{$main_category->id}}" @if($main_category->id == $category->main_parent) selected @endif>
                                                                    @if(app()->getLocale() == 'en')
                                                                        {{ $main_category->name_en }}
                                                                        @else
                                                                        {{ $main_category->name_ar }}
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
                                                    <input id="t-text" type="text" name="name_{{$locale->lang}}" placeholder="{{__('common.name_'.$locale->lang)}}" class="form-control"
                                                        value="@if($locale->lang == 'ar'){{$category->name_ar}} @else {{ $category->name_en }} @endif" required>               
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-sm-2 col-form-label">
                                                        <label for="customFile"> {{__('common.upload_image')}}</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="custom-file">
                                                            <input type="file" name="image"  class="custom-file-input" id="customFile" />
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

@endsection
