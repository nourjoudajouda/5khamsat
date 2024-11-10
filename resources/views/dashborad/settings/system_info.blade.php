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
                            <h2 class="content-header-title float-left mb-0">{{__('common.edit_sytem_info')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('common.edit_sytem_info')}}</a>
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
                                    @can('roles.admin')
                                        <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/system_info/')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                @foreach($locales as $locale)
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.name_'.$locale->lang)}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <input id="t-text" type="text" name="name_{{$locale->lang}}" placeholder="{{__('common.name_'.$locale->lang)}}" class="form-control"
                                                            value="@if($locale->lang == 'ar'){{$setting->name_ar}} @else {{ $setting->name_en }} @endif" required>               
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
                                                        <textarea id="t-text" type="text" name="description_{{$locale->lang}}" placeholder="{{__('common.description_'.$locale->lang)}}" class="form-control" required>@if($locale->lang == 'ar'){{$setting->description_ar}} @else {{ $setting->description_en }} @endif</textarea>     
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @foreach($locales as $locale)
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.address_'.$locale->lang)}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                        <textarea id="t-text" type="text" name="address_{{$locale->lang}}" placeholder="{{__('common.address_'.$locale->lang)}}" class="form-control" required>@if($locale->lang == 'ar'){{$setting->address_ar}} @else {{ $setting->address_en }} @endif</textarea>     
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.mobile')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="text" name="mobile" placeholder="{{__('common.mobile')}}" class="form-control" value="{{$setting->mobile}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.email')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="email" name="email" placeholder="{{__('common.email')}}" class="form-control" value="{{$setting->email}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.value_added_tax')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="text" name="value_added_tax" placeholder="{{__('common.value_added_tax')}}" class="form-control" value="{{$setting->value_added_tax}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.tax')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="text" name="tax" placeholder="{{__('common.tax')}}" class="form-control" value="{{$setting->tax}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.bank_name')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="text" name="bank_name" placeholder="{{__('common.bank_name')}}" class="form-control" value="{{$setting->bank_name}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.SWIFT code')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="number" name="transfer_number" placeholder="{{__('common.SWIFT code')}}" class="form-control" value="{{$setting->transfer_number}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.iban_number')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="number" name="iban_number" placeholder="{{__('common.iban_number')}}" class="form-control" value="{{$setting->iban_number}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 offset-sm-0">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary">{{__('common.reset')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endcan
                                    @can('roles.stores')
                                        <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/store_system_info_stores/')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-2 col-form-label">
                                                            <label for="first-name">{{__('common.square_meter_price')}}</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input id="t-text" type="text" name="square_meter_price" placeholder="{{__('common.square_meter_price')}}" class="form-control" value="{{$store->square_meter_price}}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 offset-sm-0">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary">{{__('common.reset')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                    @endcan
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
