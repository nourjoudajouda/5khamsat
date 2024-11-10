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
                        <h2 class="content-header-title float-left mb-0">{{__('common.countries')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/countries')}}">
                                        {{__('common.countries')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">
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
                                        <th>{{__('common.name')}}</th>
                                        <th>{{__('common.capital')}}</th>
                                        <th>{{__('common.orders')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach($countries as $country)
                                    <tr id="tr-{{$country->id}}">
                                        <td>
                                            <span class="font-weight-bold">
                                                @if(app()->getLocale()=='ar')
                                                {{$country->country_ar}}
                                                @else
                                                {{$country->Country}}
                                                @endif
                                            </span>
                                        </td>
                                       
                                        <td>
                                            <span class="font-weight-bold">       
                                                {{$country->Capital}}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="font-weight-bold">       
                                                {{$country->orders_count}}
                                            </span>
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
            <div class="d-flex justify-content-center text-center">
                {{$countries->links()}}
            </div>
            
        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
@section('js')

@endsection