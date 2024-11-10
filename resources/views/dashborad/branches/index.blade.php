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
                        <h2 class="content-header-title float-left mb-0">{{__('common.branches')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/branches')}}">
                                        {{__('common.branches')}}
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
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#branche_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_branche')}}</button>
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
                                        <th>{{__('common.name_branch')}}</th>
                                        <th>{{__('common.all_spaces')}}</th>
                                        <th>{{__('common.spent_space')}}</th>
                                        <th>{{__('common.address')}}</th>
                                        <th>{{__('common.created_at')}}</th>
                                        <th>{{__('common.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="menu">
                                    @foreach($branches as $branche)
                                    <tr id="tr-{{$branche->id}}">
                                        <td>
                                            <span class="font-weight-bold">
                                                @if(app()->getLocale() == 'en')
                                                {{ $branche->name_en }}
                                                @else
                                                {{ $branche->name_ar }}
                                                @endif
                                            </span>
                                        </td>
                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $branche->area }}</span></td>
                                        <td><span class="badge badge-pill badge-light-danger mr-1">{{ $branche->spent_space }}</span></td>

                                        <td>
                                            <span class="font-weight-bold">
                                                {{ $branche->address }}
                                            </span>
                                        </td>
                                        <td><span class="badge badge-pill badge-light-success mr-1">{{ $branche->created_at }}</span></td>
                                        <td>
                                            <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$branche->id}}" role="button" data-toggle="modal">
                                                {{__('common.delete')}}
                                            </div>
                                            <a href="{{url(app()->getLocale().'/branches/'.$branche->id.'/edit')}}">
                                                <div class="badge badge-pill badge-light-primary mr-50">
                                                    {{__('common.edit')}}
                                                </div>
                                            </a>
                                            <a href="{{url(app()->getLocale().'/branches/'.$branche->id)}}">
                                                <div class="badge badge-pill badge-light-info mr-50">
                                                    {{__('common.view')}}
                                                </div>
                                            </a>
                                        </td>
                                    </tr>

                                    <!--Form Delete -->
                                    <div id="myModal{{$branche->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                    <button class="btn btn-danger" onclick="delete_adv({{$branche->id}})">{{__('common.delete')}}</button>
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


<!--branche-->
<div id="branche_fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
    <div class="modal-dialog" style="max-width:65%;">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('common.add_new_branche')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url(app()->getLocale().'/branches')}}" enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
                    {{ csrf_field() }}

                    <div class="row">
                        @foreach($locales as $locale)
                        <div class="col-lg-6 col-6 mx-auto">
                            <div style="margin-bottom: 20px;">
                                <label for="t-text" class="">{{__('common.name_'.$locale->lang)}}</label>
                                <input id="t-text" type="text" name="name_{{$locale->lang}}" placeholder="{{__('common.name_'.$locale->lang)}}" class="form-control" required>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-4 col-4 mx-auto">
                            <div style="margin-bottom: 20px;">
                                <label for="t-text" class="">{{__('common.width')}}</label>
                                <input id="t-text" type="text" name="width" placeholder="{{__('common.width')}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mx-auto">
                            <div style="margin-bottom: 20px;">
                                <label for="t-text" class="">{{__('common.height')}}</label>
                                <input id="t-text" type="text" name="height" placeholder="{{__('common.height')}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mx-auto">
                            <div style="margin-bottom: 20px;">
                                <label for="t-text" class="">{{__('common.length')}}</label>
                                <input id="t-text" type="text" name="length" placeholder="{{__('common.length')}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6 mx-auto">
                            <div style="margin-bottom: 20px;">
                                <label for="t-text" class="">{{__('common.address')}}</label>
                                <input id="t-text" type="text" name="address" placeholder="{{__('common.address')}}" class="form-control" required>
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
<!--End Model branche-->
@endsection
@section('js')
<script>
    function delete_adv(id) {
        // alert(1);
        var url = '{{url(app()->getLocale()."/branches")}}/' + id;
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
@endsection