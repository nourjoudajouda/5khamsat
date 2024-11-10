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
                        <li style="color: #01b070; margin: 15px">{{  session('status')  }}</li>
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
                                            <th>{{__('common.name_vendor')}}</th>
                                            <th>{{__('common.all_points')}}</th>
                                            <th>{{__('common.spent_points')}}</th>
                                            <th>{{__('common.current_points')}}</th>
                                            <th>{{__('common.actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach($points as $point)
                                            <tr id="tr-{{$point->id}}">
                                                <td>
                                                    <span class="font-weight-bold">
                                                        {{ $point->vendors->name }}
                                                    </span> 
                                                </td>
                                                <td><span class="badge badge-pill badge-light-primary mr-1">{{ $point->points }}</span></td>

                                                <td><span class="badge badge-pill badge-light-warning mr-1">{{ $point->points_spent }}</span></td>

                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $point->points - $point->points_spent }}</span></td>
                                                <td >
                                                    <!-- <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$point->id}}" role="button"  data-toggle="modal">
                                                        {{__('common.delete')}}
                                                    </div> -->
                                                  
                                                    <a href ="{{url(app()->getLocale().'/points/'.$point->vendor_id)}}">
                                                        <div class="badge badge-pill badge-light-warning mr-50">
                                                            {{__('common.consumption_record')}}
                                                        </div>
                                                    </a>
                                                    <a href ="#">
                                                        <div class="badge badge-pill badge-light-info mr-50">
                                                            {{__('common.Recharge_points')}}
                                                        </div>
                                                    </a>
                                                
                                                </td>
                                            </tr>

                                             <!--Form Delete -->
                                             <div id="myModal{{$point->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                <button class="btn btn-danger"  onclick="delete_adv({{$point->id}})">{{__('common.delete')}}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Delete -->
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
<script>
    function delete_adv(id) {
        // alert(1);
        var url = '{{url(app()->getLocale()."/points")}}/' + id;
        var csrf_token = '{{csrf_token()}}';
        $.ajax({
            type: 'delete',
            headers: {'X-CSRF-TOKEN': csrf_token},
            url: url,
            data: {_method:'delete'},
            success: function (response) {
                console.log(response);
                if (response === 'success') {
                    $('#tr-' + id).hide(500);
                    $('#myModal' + id).modal('toggle');
                    //swal("القضية حذفت!", {icon: "success"});
                } else {
                    // swal('Error', {icon: "error"});
                }
            },
            error: function (e) {
                // swal('exception', {icon: "error"});
            }
        });

    }
</script>
@endsection
