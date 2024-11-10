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
                        <h2 class="content-header-title float-left mb-0">{{__('common.products')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/categories')}}">
                                        {{__('common.products')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#category_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_main_category')}}</button>
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
                                        <th>{{__('common.image')}}</th>
                                        <th>{{__('common.created_at')}}</th>
                                        <th>{{__('common.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach($products_list as $product)
                                    <tr id="tr-{{$product->id}}">
                                        <td>
                                            <span class="font-weight-bold">
                                                @if(app()->getLocale() == 'en')
                                                {{ $product->name_en }}
                                                @else
                                                {{ $product->name_ar }}
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <img src="{{$product->image}}" style="height: 50px;" alt="Image Category" />
                                        </td>

                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span></td>
                                        <td>
                                           
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
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
@section('js')

@endsection