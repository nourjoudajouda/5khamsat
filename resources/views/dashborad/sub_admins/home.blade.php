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
                            <h2 class="content-header-title float-left mb-0">{{__('common.all_sub_admins')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{__('common.all_sub_admins')}}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button id="btn-bg" class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#sub_admins_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_sub_admins')}}</button>
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
                                            <th>{{__('common.email')}}</th>
                                            <th>{{__('common.mobile')}}</th>
                                            <th>{{__('common.type_manage')}}</th>
                                            <th>{{__('common.created_at')}}</th>
                                            <th>{{__('common.action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $admin)
                                            <tr id="tr-{{$admin->id}}">
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>{{ $admin->mobile }}</td>
                                              
                                                <td>
                                                    <span class="badge badge-pill badge-light-warning mr-1">{{ $admin->roles->name }}</span>
                                                    <!-- @if($admin->type == 1)
                                                    <span class="badge badge-pill badge-light-warning mr-1">Super Admin</span>
                                                    @else
                                                    <span class="badge badge-pill badge-light-primary mr-1">Admin</span>
                                                    @endif -->
                                                </td>

                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $admin->created_at }}</span></td>
                                                <td>
                                                    <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$admin->id}}" role="button"  data-toggle="modal">
                                                        {{__('common.delete')}}
                                                    </div>
                                                    <a href ="{{url(app()->getLocale().'/sub_admin/'.$admin->id.'/edit')}}">
                                                        <div class="badge badge-pill badge-light-primary mr-50">
                                                            {{__('common.edit')}}
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>

                                             <!--Form Delete -->
                                             <div id="myModal{{$admin->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                <button class="btn btn-danger"  onclick="delete_adv({{$admin->id}})">{{__('common.delete')}}</button>
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
     <!--Add_sub_admins-->
     <div id="sub_admins_fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog" style="max-width:65%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('common.add_sub_admins')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url(app()->getLocale().'/sub_admins')}}" enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{__('common.name')}}</label>
                                    <input id="t-text" type="text" name="name" placeholder="{{__('common.name')}}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{__('common.email')}}</label>
                                    <input id="t-text" type="email" name="email" placeholder="{{__('common.email')}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{__('common.mobile')}}</label>
                                    <input id="t-text" type="text" name="mobile" placeholder="{{__('common.mobile')}}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{__('common.password')}}</label>
                                    <input id="t-text" type="password" name="password" placeholder="{{__('common.password')}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{__('common.type_manager')}}</label>
                                    <select class="form-control" name="role_id">
                                        <option>{{__('common.type_manager')}}</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer md-button">
                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>{{__('common.cancel')}}</button>
                            <button id="btn-bg" type="submit" class="btn btn-primary">{{__('common.save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Model add_sub_admins-->
@endsection
@section('js')

<script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{url(app()->getLocale()."/sub_admin")}}/' + id;
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
