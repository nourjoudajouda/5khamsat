@extends('layouts.dashborad')
@section('css')

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
                        <h2 class="content-header-title float-left mb-0">{{__('common.edit_vendor')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('common.edit_vendor')}}</a>
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
            <!-- account setting page -->
            <section id="page-account-settings">
                <div class="row">
                    <!-- left menu section -->
                    <div class="col-md-3 mb-2 mb-md-0">
                        <ul class="nav nav-pills flex-column nav-left">
                            <!-- general -->
                            <li class="nav-item">
                                <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                    <i data-feather="user" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.edit_information_account')}}</span>
                                </a>
                            </li>
                            <!-- change password -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                    <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.edit_password')}}</span>
                                </a>
                            </li>
                            <!-- Bank -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                    <i data-feather="info" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.inforamation_matjar')}}</span>
                                </a>
                            </li>
                            <!-- social -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                    <i data-feather="link" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.bank')}}</span>
                                </a>
                            </li>
                            <!-- notification -->
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                    <i data-feather="bell" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.vat')}}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-pill-notifications" data-toggle="pill" href="#vendor_legal_data" aria-expanded="false">
                                    <i data-feather="bell" class="font-medium-3 mr-1"></i>
                                    <span class="font-weight-bold">{{__('common.vendor_legal_data')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ left menu section -->

                    <!-- right content section -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- general tab -->
                                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.email')}}</label>
                                                        <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="{{ old('email',$vendor->email) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">{{__('common.mobile')}}</label>
                                                        <input type="text" class="form-control" id="mobile" placeholder="mobile" name="mobile" value="{{ old('mobile',$vendor->mobile) }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-name">{{__('common.company_legal_name')}}</label>
                                                        <input type="text" class="form-control" placeholder="company_legal_name" name="company_legal_name" value="{{ old('company_legal_name',$vendor->company_legal_name) }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">{{__('common.country')}}</label>
                                                        <div style="margin-bottom: 20px;">
                                                            <select name="country" class="form-control">
                                                                <option value="PS">Palestine</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ general tab -->

                                    <!-- change password -->
                                    <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form" role="form">
                                            {{ csrf_field() }}

                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-new-password">{{__('common.password')}}</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="account-new-password" name="password" class="form-control" value="" placeholder="{{__('common.password')}}" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer">
                                                                    <i data-feather="eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-retype-new-password">{{__('common.confirm_password')}}</label>
                                                        <div class="input-group form-password-toggle input-group-merge">
                                                            <input type="password" id="account-retype-new-password" class="form-control" name="confirm_password" value="" placeholder="{{__('common.confirm_password')}}" required>
                                                            <div class="input-group-append">
                                                                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mr-1 mt-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-1">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ change password -->

                                    <!-- information -->
                                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.name_store')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="name_store" placeholder="Name Store" value="{{ old('name_store',$vendor->name_store) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">{{__('common.what_kind_products')}}</label>
                                                        <select name="what_kind_products" class="form-control">
                                                            <option value="Electronic">Electronic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="account-company">{{__('common.full_address')}}</label>
                                                        <textarea type="text" name="full_address" placeholder="{{__('common.full_address')}}" class="form-control">{{ old('full_address',$vendor->full_address) }}</textarea>
                                                    </div>
                                                </div>

                                              
                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ information -->

                                    <!-- social -->
                                    <div class="tab-pane fade" id="account-vertical-social" role="tabpanel" aria-labelledby="account-pill-social" aria-expanded="false">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.beneficiay_name')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="beneficiay_name" value="{{ old('beneficiay_name',$vendor->beneficiay_name) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.bank_name')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="bank_name" value="{{ old('bank_name',$vendor->bank_name) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.branch_name')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="branch_name" value="{{ old('branch_name',$vendor->branch_name) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.account_number')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="account_number" value="{{ old('account_number',$vendor->account_number) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.iban_number')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="iban_number" value="{{ old('iban_number',$vendor->iban_number) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.swift_code')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="swift_code" value="{{ old('swift_code',$vendor->swift_code) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.currency')}}</label>
                                                        <input type="text" class="form-control" id="account-e-mail" name="currency" value="{{ old('currency',$vendor->currency) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ social -->

                                    <!-- notifications -->
                                    <div class="tab-pane fade" id="account-vertical-notifications" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                            {{ csrf_field() }}
                                            <div class="row">

                                                <div class="col-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="account-e-mail">{{__('common.vat_details')}}</label>
                                                        <textarea type="text" class="form-control" id="account-e-mail" name="vat_details" value="">{{ old('vat_details',$vendor->vat_details) }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ notifications -->


                                    <!-- notifications -->
                                    <div class="tab-pane fade" id="vendor_legal_data" role="tabpanel" aria-labelledby="account-pill-notifications" aria-expanded="false">
                                        <!-- form -->
                                        <form method="post" action="{{url(app()->getLocale().'/vendor/'.$vendor->id)}}" enctype="multipart/form-data" class="validate-form" role="form">
                                            {{ csrf_field() }}
                                            <div class="card-body">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    @if($vendor_legal_data->type == 'Commercial_Record')
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">{{__('common.Commercial_Record')}}</a>
                                                    </li>
                                                    @endif

                                                    @if($vendor_legal_data->type == 'freelance_work')
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">{{__('common.freelance_work')}}</a>
                                                    </li>
                                                    @endif

                                                    @if($vendor_legal_data->type == 'National_Identity')
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">{{__('common.National_Identity')}}</a>
                                                    </li>
                                                    @endif

                                                </ul>
                                                <div class="tab-content">
                                                    @if($vendor_legal_data->type == 'Commercial_Record')
                                                    <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Commercial Registration No')}}</label>
                                                                    <input type="text" name="Commercial_Registration_No" value="{{ old('Commercial_Registration_No',$vendor_legal_data->Commercial_Registration_No) }}" placeholder="{{__('common.Commercial Registration No')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Trade Name')}}</label>
                                                                    <input type="text" name="Trade_Name" value="{{ old('Trade_Name',$vendor_legal_data->Trade_Name) }}"  placeholder="{{__('common.Trade Name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Brand name')}}</label>
                                                                    <input type="text" name="Brand_name" value="{{ old('Brand_name',$vendor_legal_data->Brand_name) }}" placeholder="{{__('common.Brand name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Registry specialty')}}</label>
                                                                    <input type="text" name="Registry_specialty" value="{{ old('Registry_specialty',$vendor_legal_data->Registry_specialty) }}" placeholder="{{__('common.Registry specialty')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Record owner name')}}</label>
                                                                    <input type="text" name="Record_owner_name" value="{{ old('Record_owner_name',$vendor_legal_data->Record_owner_name) }}" placeholder="{{__('common.Record owner name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store name')}}</label>
                                                                    <input type="text" name="store_name" value="{{ old('store_name',$vendor_legal_data->store_name) }}" placeholder="{{__('common.Store name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store Description')}}</label>
                                                                    <textarea type="text" name="store_description" placeholder="{{__('common.Store Description')}}" class="form-control">{{ old('store_description',$vendor_legal_data->store_description) }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Commissioner_name')}}</label>
                                                                    <input type="text" name="Commissioner_name" value="{{ old('Commissioner_name',$vendor_legal_data->Commissioner_name) }}" placeholder="{{__('common.Commissioner_name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.No.civil_registry')}}</label>
                                                                    <input type="text" name="owner_civil_registry_number" value="{{ old('owner_civil_registry_number',$vendor_legal_data->owner_civil_registry_number) }}" placeholder="{{__('common.No.civil_registry')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <legend>{{__('common.attachments')}}:</legend>

                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.Commercial_Register_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="Commercial_Register_image" class="custom-file-input" id="customFile_Commercial_Register_image" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.owner_national_ID_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="ID_image" class="custom-file-input" id="customFile_Commissioner_Agency" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.Agency authorized to manage on behalf of the owner')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="commissioner_image" class="custom-file-input" id="customFile_bank_account_picture" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.bank_account_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="bank_account_image" class="custom-file-input" id="customFile_bank_account_picture" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($vendor_legal_data->type == 'freelance_work')
                                                    <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Freelance_document_number')}}</label>
                                                                    <input type="text" name="Freelance_document_number" value="{{ old('Freelance_document_number',$vendor_legal_data->Freelance_document_number) }}" placeholder="{{__('common.Freelance_document_number')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Document_Specialization')}}</label>
                                                                    <input type="text" name="Document_Specialization" value="{{ old('Document_Specialization',$vendor_legal_data->Document_Specialization) }}" placeholder="{{__('common.Document_Specialization')}}" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.The_owner_civil_registry_number')}}</label>
                                                                    <input type="text" name="owner_civil_registry_number" value="{{ old('owner_civil_registry_number',$vendor_legal_data->owner_civil_registry_number) }}"  placeholder="{{__('common.The_owner_civil_registry_number')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store name')}}</label>
                                                                    <input type="text" name="store_name" value="{{ old('store_name',$vendor_legal_data->store_name) }}" placeholder="{{__('common.Store name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.authorized_civil_registry_number')}}</label>
                                                                    <input type="text" name="authorized_civil_registry_number" value="{{ old('authorized_civil_registry_number',$vendor_legal_data->authorized_civil_registry_number) }}" placeholder="{{__('common.authorized_civil_registry_number')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store Description')}}</label>
                                                                    <textarea type="text" name="store_description" placeholder="{{__('common.Store Description')}}" class="form-control">{{ old('store_description',$vendor_legal_data->store_description) }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if($vendor_legal_data->type == 'National_Identity')
                                                    <div class="tab-pane active" id="about" aria-labelledby="about-tab" role="tabpanel">
                                                        <div class="row">

                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store name')}}</label>
                                                                    <input type="text" name="store_name" value="{{ old('store_name',$vendor_legal_data->store_name) }}"  placeholder="{{__('common.Store name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.The_owner_civil_registry_number')}}</label>
                                                                    <input type="text" name="owner_civil_registry_number" value="{{ old('owner_civil_registry_number',$vendor_legal_data->owner_civil_registry_number) }}"  placeholder="{{__('common.The_owner_civil_registry_number')}}" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.authorized_name')}}</label>
                                                                    <input type="text" name="authorized_name" value="{{ old('authorized_name',$vendor_legal_data->authorized_name) }}" placeholder="{{__('common.authorized_name')}}" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.owner_name')}}</label>
                                                                    <input type="text" name="owner_name"  value="{{ old('owner_name',$vendor_legal_data->owner_name) }}" placeholder="{{__('common.owner_name')}}" class="form-control">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-12 mx-auto">
                                                                <div style="margin-bottom: 20px;">
                                                                    <label for="t-text" class="">{{__('common.Store Description')}}</label>
                                                                    <textarea type="text" name="store_description" placeholder="{{__('common.Store Description')}}" class="form-control">{{ old('store_description',$vendor_legal_data->store_description) }}</textarea>
                                                                </div>
                                                            </div>
                                                            <legend>{{__('common.attachments')}}:</legend>

                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.brand_store_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="brand_store_image" class="custom-file-input" id="customFile_brand_store_image" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.owner_national_ID_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="owner_national_ID_image" class="custom-file-input" id="customFile_owner_national_ID_image" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.Agency authorized to manage on behalf of the owner')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="Commissioner_Agency" class="custom-file-input" id="customFile_Commissioner_Agency" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-12 mx-auto">
                                                                <div class="form-group">
                                                                    <label for="customFile"> {{__('common.upload_image')}}({{__('common.freelance_work_document_image')}})</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="freelance_work_document_image" class="custom-file-input" id="customFile_freelance_work_document_image" />
                                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" id="btn-bg" class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
                                                    <button type="reset" class="btn btn-outline-secondary mt-2">{{__('common.cancel')}}</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/ form -->
                                    </div>
                                    <!--/ notifications -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ right content section -->
                </div>
            </section>
            <!-- / account setting page -->

        </div>

    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
@endsection