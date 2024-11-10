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
                        <h2 class="content-header-title float-left mb-0">{{__('common.edit_role')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('common.edit_role')}}</a>
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
                                <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/role/'.$role->id)}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-12 col-form-label">
                                                    <label for="name">{{__('common.name')}}</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    <input id="t-text" type="text" name="name" placeholder="{{__('common.name')}}" class="form-control" value="{{$role->name}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-12 col-form-label">
                                                    <label for="roles">{{__('common.roles')}}</label>
                                                </div>
                                                <div class="col-sm-12">
                                                    @if(Auth::user()->role_id == 1)

                                                    @foreach(config('permissions') as $code => $label)
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-success">
                                                            <input name="permissions[]" type="checkbox" class="new-control-input" value="{{ $code }}" @if(in_array($code, $role_permissions)) checked @endif>
                                                            <span class="new-control-indicator"></span>
                                                            {{ $label }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    @if(Auth::user()->role_id == 2)
                                                    @foreach(config('permissions_vendor') as $code => $label)
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-success">
                                                            <input name="permissions[]" type="checkbox" class="new-control-input" value="{{ $code }}" @if(in_array($code, $role_permissions)) checked @endif>
                                                            <span class="new-control-indicator"></span>
                                                            {{ $label }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                    @endif
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