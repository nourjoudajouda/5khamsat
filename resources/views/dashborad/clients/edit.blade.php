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
                            <h2 class="content-header-title float-left mb-0">{{__('common.edit_client')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{__('common.edit_client')}}</a>
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
                                            <form method="post" action="{{url(app()->getLocale().'/client/'.$client->id)}}"
                                            enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                            {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-name">{{__('common.name')}}</label>
                                                            <input type="text" class="form-control"  placeholder="name" name="name" value="{{ old('name',$client->name) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">{{__('common.email')}}</label>
                                                            <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="{{ old('email',$client->email) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-company">{{__('common.mobile')}}</label>
                                                            <input type="text" class="form-control" id="mobile" placeholder="mobile" name="mobile" value="{{ old('mobile',$client->mobile) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mx-auto">
                                                        <div class="form-group">
                                                            <label for="customFile"> {{__('common.upload_image')}}</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="photo" class="custom-file-input" id="customFile" />
                                                                <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    <div class="col-12">
                                                        <button type="submit" id="btn-bg"  class="btn btn-primary mt-2 mr-1">{{__('common.save')}}</button>
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
                                            <form method="post" action="{{url(app()->getLocale().'/client/'.$client->id)}}"
                                                enctype="multipart/form-data" class="validate-form" role="form">
                                                {{ csrf_field() }}
                                              
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-new-password">{{__('common.password')}}</label>
                                                            <div class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="account-new-password" name="password" class="form-control"  value=""
                                                                 placeholder="{{__('common.password')}}"  required>
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
                                                                <input type="password" id="account-retype-new-password" class="form-control" name="confirm_password" value=""
                                                                placeholder="{{__('common.confirm_password')}}" required>
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
