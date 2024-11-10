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
                        <h2 class="content-header-title float-left mb-0">{{__('common.stores')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/stores')}}">
                                        {{__('common.stores')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @if($new_store != '')
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#store_vendor" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_store')}}</button>
                    </div>
                </div>
            </div>
            @endif
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
            @if($new_store == '')
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center" style="background-image: url({{asset('/public/dashborad/app-assets/images/banner/banner.png')}})">
                                <div class="card-body">
                                    <h2 class="text-primary">{{__('common.There are no stores in the system')}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->
            @else
                @if($stores == null)
                <!-- Knowledge base Jumbotron -->
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center" style="background-image: url({{asset('/public/dashborad/app-assets/images/banner/banner.png')}})">
                                <div class="card-body">
                                    <h2 class="text-primary">{{__('common.You have no free space in warehouses')}}</h2>
                                    <div class="input-group input-group-merge">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#store_vendor" type="button" data-toggle="dropdown" style="margin:auto">{{__('common.Reserve an empty space')}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Knowledge base Jumbotron -->
                @else
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
                                            <th>{{__('common.company_name')}}</th>
                                            <th>{{__('common.length')}}</th>
                                            <th>{{__('common.width')}}</th>
                                            <th>{{__('common.height')}}</th>
                                            <th>{{__('common.area')}}</th>
                                            <th>{{__('common.address')}}</th>
                                            <th>{{__('common.created_at')}}</th>
                                            <th>{{__('common.actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach($stores as $store)
                                        <tr id="tr-{{$store->id}}">
                                            <td>
                                                <span class="font-weight-bold">
                                                    {{ $store->stores->company_name }}
                                                </span>
                                            </td>
                                            <td>
                                                {{ $store->length }}
                                            </td>
                                            <td>
                                                {{ $store->width }}
                                            </td>
                                            <td>
                                                {{ $store->height }}
                                            </td>
                                            <td style="text-align: center;"><span class="badge badge-pill badge-light-success mr-1">{{ $store->area }}</span></td>
                                            <td>
                                                {{ $store->stores->address }}
                                            </td>

                                            <td style="text-align: center;"><span class="badge badge-pill badge-light-secondary mr-1">{{ $store->stores->created_at }}</span></td>

                                            <td>
                                                <a href="{{url(app()->getLocale().'/vendor_store/'.$store->store_id)}}">
                                                    <div class="badge badge-pill badge-light-warning mr-50">
                                                        {{__('common.view')}}
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
                @endif
                <!--store_vendor-->
                    <div id="store_vendor" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                        <div class="modal-dialog" style="max-width:65%;">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{__('common.Reserve an empty space')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button> 
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{url(app()->getLocale().'/store_stores_vendor')}}" enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <input type="hidden" value="{{$new_store->id}}" name="store_id"/>
                                            <div class="col-lg-12 col-12 mx-auto">
                                                <div style="margin-bottom: 20px;"> 
                                                    <label for="t-text" class="">{{__('common.branche')}}</label>
                                                    <select class="form-control" name="branche_id">
                                                    @if($branches != null)
                                                        @foreach($branches as $branche)
                                                            <option value="{{$branche->id}}">
                                                            @if(app()->getLocale()=='ar')
                                                                {{$branche->name_ar}}
                                                            @else
                                                                {{$branche->name_en}}
                                                            @endif
                                                            </option>
                                                        @endforeach
                                                        @else
                                                        <option>
                                                            {{__('common.no_branches')}}
                                                        </option>
                                                    @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-6 mx-auto">
                                                <div style="margin-bottom: 20px;">
                                                    <label for="t-text" class="">{{__('common.length')}}</label>
                                                    <input id="t-text" type="number" name="length" placeholder="{{__('common.length')}}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-6 mx-auto">
                                                <div style="margin-bottom: 20px;">
                                                    <label for="t-text" class="">{{__('common.height')}}</label>
                                                    <input id="t-text" type="number" name="height" placeholder="{{__('common.height')}}" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-6 mx-auto">
                                                <div style="margin-bottom: 20px;">
                                                    <label for="t-text" class="">{{__('common.width')}}</label>
                                                    <input id="t-text" type="number" name="width" placeholder="{{__('common.width')}}" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer md-button">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>{{__('common.cancel')}}</button>
                                            <button id="btn-bg" class="btn btn-primary">{{__('common.save')}}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--End Model store_vendor-->
            @endif
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection