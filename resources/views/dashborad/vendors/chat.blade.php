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
                        <h2 class="content-header-title float-left mb-0">{{__('common.chats')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/chats')}}">
                                        {{__('common.chats')}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    {{ $vendor->name }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn badge badge-pill badge-light-success" type="button">{{__('common.current_balance')}} : 300 </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-body">
           
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
@section('js')

@endsection