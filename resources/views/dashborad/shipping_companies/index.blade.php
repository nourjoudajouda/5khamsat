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
                            <h2 class="content-header-title float-left mb-0">{{__('common.shipping_companies')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{url('/shipping_companies')}}">
                                            {{__('common.shipping_companies')}}
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
                            <button  class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#shipping_company_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_shipping_company')}}</button>
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
                                        @foreach($shipping_companies as $shipping_company)
                                            <tr id="tr-{{$shipping_company->id}}">
                                                <td>
                                                    <span class="font-weight-bold">
                                                    @if(app()->getLocale() == 'en')
                                                        {{ $shipping_company->name_en }}
                                                        @else
                                                        {{ $shipping_company->name_ar }}
                                                    @endif
                                                    </span>
                                                </td>
                                                <td>
                                                    <img src="{{$shipping_company->image}}" style="height: 50px;" alt="Image shipping_company"/>
                                                </td>
                                        
                                                <td><span class="badge badge-pill badge-light-success mr-1">{{ $shipping_company->created_at }}</span></td>
                                                <td >
                                                    <div class="badge badge-pill badge-light-danger mr-50" href="#myModal{{$shipping_company->id}}" role="button"  data-toggle="modal">
                                                        {{__('common.delete')}}
                                                    </div>
                                                    <a href ="{{url(app()->getLocale().'/shipping_companies/'.$shipping_company->id.'/edit')}}">
                                                        <div class="badge badge-pill badge-light-primary mr-50">
                                                            {{__('common.edit')}}
                                                        </div>
                                                    </a>
                                                    <!-- <a href ="{{url(app()->getLocale().'/shipping_companies/'.$shipping_company->id)}}">
                                                        <div class="badge badge-pill badge-light-warning mr-50">
                                                            {{__('common.view_sub_shipping_companies')}}
                                                        </div>
                                                    </a> -->
                                                
                                                </td>
                                            </tr>

                                             <!--Form Delete -->
                                             <div id="myModal{{$shipping_company->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
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
                                                                <button class="btn btn-danger"  onclick="delete_adv({{$shipping_company->id}})">{{__('common.delete')}}</button>
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

    
        <!--shipping_company-->
        <div id="shipping_company_fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog" style="max-width:65%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('common.add_new_shipping_company')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{url(app()->getLocale().'/shipping_companies')}}" enctype="multipart/form-data" class="form-horizontal" role="form" style="padding-top: 20px;">
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
                            <div class="col-lg-12 col-12 mx-auto">
                                <div class="form-group">
                                    <label for="customFile"> {{__('common.upload_image')}}</label>
                                    <div class="custom-file">
                                        <input type="file" name="image"  class="custom-file-input" id="customFile" />
                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                    </div>
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
    <!--End Model shipping_company-->
@endsection
@section('js')
<script>
    function delete_adv(id) {
        // alert(1);
        var url = '{{url(app()->getLocale()."/shipping_companies")}}/' + id;
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
