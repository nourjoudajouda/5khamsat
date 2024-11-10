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
                        <h2 class="content-header-title float-left mb-0">{{__('common.points')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/points')}}">
                                        {{__('common.points')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button  class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#category_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_main_category')}}</button>
                        </div>
                    </div>
                </div> -->
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
        @if($points)
            <div class="row match-height">
                <!-- Medal Card -->
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <div class="card-body">
                            <h5>{{__('common.current_points')}}</h5>
                            <p class="card-text font-small-3"></p>
                            <h3 class="mb-75 mt-2 pt-50">
                                <a href="javascript:void(0);">{{ $points->points - $points->points_spent}} {{__('common.point')}}</a>
                            </h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Recharge_points">{{__('common.Recharge_points')}}</button>
                            <img src="{{url('public/dashborad/app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                        </div>
                    </div>
                </div>
                <!--/ Medal Card -->

                <!-- Statistics Card -->
                <div class="col-xl-8 col-md-6 col-12"> 
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">{{__('common.Statistics')}}</h4>
                            <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 mr-25 mb-0"></p>
                            </div>
                        </div>
                        <div class="card-body statistics-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-primary mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{$points->points_spent}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('common.spent_points')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="media">
                                        <div class="avatar bg-light-info mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{$points_monthly->sum('points')}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('common.monthly_spent')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="media">
                                        <div class="avatar bg-light-danger mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0">{{$points_yearly->sum('points')}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('common.yearly_spent')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="media">
                                        <div class="avatar bg-light-success mr-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="media-body my-auto">
                                            <h4 class="font-weight-bolder mb-0"> {{ date('d-m-Y', strtotime($points->date_shipping)) }}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('common.end_recharge_points')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Statistics Card --> 
            </div>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{__('common.consumption_record')}}</h2>
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
                                            <th>{{__('common.name_user')}}</th>
                                            <th>{{__('common.name_product')}}</th>
                                            <th>{{__('common.image')}}</th>
                                            <th>{{__('common.points')}}</th>
                                            <th>{{__('common.created_at')}}</th>
                                            <th>{{__('common.actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach($products as $product)
                                        <tr id="tr-{{$product->id}}">
                                            <td>
                                                <span class="font-weight-bold">
                                                    {{ $product->users->name }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="font-weight-bold">
                                                    {{ $product->products->name_ar }}
                                                </span>
                                            </td>
                                            <td>
                                                <img src="{{ $product->products->image }}" style="height: 50px;" alt="" />
                                            </td>
                                            <td><span class="badge badge-pill badge-light-primary mr-1">{{ $product->points }}</span></td>

                                            <td><span class="badge badge-pill badge-light-success mr-1">{{ $product->created_at }}</span></td>
                                            <td>
                                                <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$product->products->id}}" role="button" data-toggle="modal">
                                                    {{__('common.delete')}}
                                                </div> 
                                                <a href="{{url(app()->getLocale().'/orders/'.$product->order_id)}}">
                                                    <div class="badge badge-pill badge-light-warning mr-50">
                                                        {{__('common.view')}}
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                        <!--Form Delete -->
                                        <div id="myModal{{$product->products->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">
                                                            {{__('common.delete')}}
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{__('common.confirm')}} </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn default" data-dismiss="modal" aria-hidden="true">{{__('common.cancel')}}</button>
                                                        <button class="btn btn-danger" onclick="delete_adv({{$product->products->id}})">{{__('common.delete')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Delete -->
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <th colspan="3">{{__('common.spent_points')}}</th>

                                        <th colspan="3">{{$points->points_spent}}</th>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
            </div>
        @else
        <div style="text-align: center;height: 400px;padding-top: 100px;">
            <h4 class="text-center">{{__('common.Dear vendor // To do the point recharge process, click here')}}</h4>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Recharge_points">{{__('common.Recharge_points')}}</button>
        </div>
            
        @endif
    </div>
</div>
<!-- END: Content-->

<!--Recharge_points-->
<div class="modal fade text-left" id="Recharge_points" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">

    <div class="modal-dialog" style="max-width:50%;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('common.Recharge_points')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url(app()->getLocale().'/points')}}" enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                    {{ csrf_field() }}
                    
                   
                    <div style="margin-bottom: 20px;">
                        <label for="t-text" class="">{{__('common.type')}}</label>
                        <select class="form-control" onchange="Recharge_points()" name="type">
                            <option> {{__('common.type')}}</option>
                            <option value="Bank_transfer"> {{__('common.Bank_transfer')}}</option>
                        </select>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="t-text" class="">{{__('common.points')}}</label>
                        <input id="t-text" type="number" name="points" placeholder="{{__('common.points')}}" class="form-control">

                    </div>
                    <div style="display:none;" id="Recharge_points_section">    
                        <div style="margin-bottom: 20px;">
                            <label for="t-text" class="">{{__('common.amount')}}</label>
                            <input id="t-text" type="text" name="amount" placeholder="{{__('common.amount')}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="customFile"> {{__('common.upload_image')}}</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile" />
                                <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
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
<!--End Model Recharge_points-->

@endsection
@section('js')
<script>
    function delete_adv(id) {
        // alert(1);
        var url = '{{url(app()->getLocale()."/products")}}/' + id;
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'delete',
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            url: url,
            data: {
                _method: 'delete'
            },
            success: function(response) {
                console.log(response);
                if (response === 'success') {
                    $('#tr-' + id).hide(500);
                    $('#myModal' + id).modal('toggle');
                    //swal("القضية حذفت!", {icon: "success"});
                } else {
                    // swal('Error', {icon: "error"});
                }
            },
            error: function(e) {
                // swal('exception', {icon: "error"});
            }
        });

    }
</script>
<script>
    function Recharge_points(){
        $("#Recharge_points_section").css("display", "block");
    }
</script>
@endsection