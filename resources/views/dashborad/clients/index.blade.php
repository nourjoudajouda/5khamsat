@extends('layouts.dashborad')
@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            font-family: 'Tajawal', sans-serif;
        }

        #sidebar {
            position: relative;
            top: -20px;
        }

        .switch input {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 100;
            opacity: 0;
            cursor: pointer;
        }

        .switch {
            border-radius: 40px;
            width: 60px;
            height: 25px;
            margin: 10px auto;
            position: relative;
        }

        .switch:after {
            content: "";
            position: absolute;
            z-index: -1;
            top: -8px;
            right: -8px;
            bottom: -8px;
            left: -8px;
            border-radius: inherit;
            background: #ccc;
            background: -webkit-linear-gradient(#f2f2f2, #ababab);
            box-shadow: 0 0 10px rgba(0, 0, 0, .3),
                0 1px 1px rgba(0, 0, 0, 0.25);
        }

        .switch:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: -18px;
            right: -18px;
            bottom: -18px;
            left: -18px;
            border-radius: inherit;
            background: #eee;
            background: linear-gradient(#e5e7e6, #eee);
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            -webkit-filter: blur(1px);
            filter: blur(1px);
        }

        .span-switch {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
            background: linear-gradient(90deg, #28c76f 50%, #a5a39d 50%);
            border-radius: 40px;
            box-shadow:
                inset 0 3px 8px 1px rgba(0, 0, 0, 0.2),
                0 1px 0 rgba(255, 255, 255, 0.5);
        }

        .span-switch:before {
            content: "off";
            position: absolute;
            top: 65%;
            right: 9%;
            margin-top: -12px;
            color: #666;
            color: rgba(0, 0, 0, 0.4);
            font-style: normal;
            font-weight: bold;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            text-shadow: 0 1px 0 #bcb8ae, 0 -1px 0 #97958e;
        }

        .span-switch:after {
            content: "on";
            color: #ffffff;
            font-style: normal;
            font-weight: bold;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 10px;
            text-transform: uppercase;
            margin-top: -12px;
            position: absolute;
            right: 68%;
            text-shadow: 0 1px 0 #ffffff, 0 -1px 0 #ffffff;
            top: 65%;
        }

        .label-switch {
            background: #b2ac9e;
            background: linear-gradient(#f7f2f6, #b2ac9e);
            border-radius: 40px;
            box-shadow:
                inset 0 1px 0 white,
                0 0 8px rgba(0, 0, 0, 0.3),
                0 5px 5px rgba(0, 0, 0, 0.2);
            display: block;
            height: 100%;
            position: absolute;
            right: 41%;
            top: 0;
            transition: all .5s;
            width: 60%;
            z-index: 2;
        }

        .label-switch:after {
            background: #d2cbc3;
            background: linear-gradient(#cbc7bc, #d2cbc3);
            border-radius: inherit;
            content: "";
            height: 50%;
            left: 15%;
            position: absolute;
            top: 25%;
            width: 70%;
        }

        input:checked+label {
            left: auto;
            right: -1%;
        }
    </style>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-7 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('common.clients') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/clients') }}">
                                            {{ __('common.clients') }}
                                        </a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                @can('clients.operations')
                    <div class="content-header-right text-md-right col-md-5 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">
                            <div class="dropdown">
                                <a href="{{ url(app()->getLocale() . '/export_pdf_users') }}"
                                    class="btn-icon btn btn-danger btn-round btn-sm dropdown-toggle">
                                    {{ __('common.export_as_pdf') }}
                                </a>
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal"
                                    data-target="#client_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">{{ __('common.add_new_client') }}</button>
                            </div>
                        </div>
                    </div>
                @endcan
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
                        <li style="color: #01b070; margin: 15px">{{ session('status') }}</li>
                    </ul>
                @endif
                @if (session('warning'))
                    <ul style="border: 1px solid orange; background-color: white; border-radius: 5px;">
                        <li style="color: orange; margin: 15px">{{ session('warning') }}</li>
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
                                            <th>{{ __('common.name') }}</th>
                                            <th>{{ __('common.image') }}</th>
                                            <th>{{ __('common.email') }}</th>
                                            <th>{{ __('common.mobile') }}</th>
                                            @can('clients.operations')
                                                <th>{{ __('common.status') }}</th>
                                            @endcan
                                            <th>{{ __('common.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody id="menu">
                                        @foreach ($clients as $client)
                                            <tr id="tr-{{ $client->id }}">
                                                <td>
                                                    <span class="font-weight-bold">
                                                        {{ $client->name }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <img src="{{ $client->photo }}" style="height: 50px;" alt="" />
                                                </td>
                                                <td>
                                                    {{ $client->email }}
                                                </td>
                                                <td>
                                                    {{ $client->mobile }}
                                                </td>
                                                @can('clients.operations')
                                                    <td>
                                                        <div class="d-flex justify-content-between" id="switch_activate"
                                                            style="margin-bottom: 10px;">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" id="paymentTerms{{ $client->id }}"
                                                                    class="custom-control-input toggle-class{{ $client->id }}"
                                                                    data-id="{{ $client->id }}"
                                                                    onclick="change_status({{ $client->id }})"
                                                                    type="checkbox" data-onstyle="success"
                                                                    data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                                                    data-off="InActive"
                                                                    {{ $client->status ? 'checked' : '' }} />
                                                                <label class="custom-control-label"
                                                                    for="paymentTerms{{ $client->id }}"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endcan
                                                <td>
                                                    @can('clients.operations')
                                                        <div class="badge badge-pill badge-light-danger mr-50"
                                                            href="#myModal{{ $client->id }}" role="button"
                                                            data-toggle="modal">
                                                            {{ __('common.delete') }}
                                                        </div>
                                                        <a
                                                            href="{{ url(app()->getLocale() . '/clients/' . $client->id . '/edit') }}">
                                                            <div class="badge badge-pill badge-light-primary mr-50">
                                                                {{ __('common.edit') }}
                                                            </div>
                                                        </a>
                                                    @endcan
                                                    <a href="{{ url(app()->getLocale() . '/clients/' . $client->id) }}">
                                                        <div class="badge badge-pill badge-light-warning mr-50">
                                                            {{ __('common.view') }}
                                                        </div>
                                                    </a>
                                                    @can('clients.operations')
                                                        <div class="badge badge-pill" data-toggle="modal"
                                                            data-target="#message_fadeupModal{{ $client->id }}">
                                                            <img src="{{ url('dashborad/app-assets/images/mail.svg') }}"
                                                                style="cursor: pointer;" alt />
                                                        </div>
                                                        <div class="badge badge-pill" data-toggle="modal"
                                                            data-target="#mobile_fadeupModal{{ $client->id }}">
                                                            <img src="{{ url('dashborad/app-assets/images/smartphone.svg') }}"
                                                                style="cursor: pointer;" alt />
                                                        </div>
                                                    @endcan
                                                </td>
                                            </tr>
                                            <!--Message-->
                                            <div id="message_fadeupModal{{ $client->id }}"
                                                class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">{{ __('common.send_message') }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                enctype="multipart/form-data" class="form-horizontal"
                                                                role="form" style="padding-top: 20px;">
                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-12 mx-auto">
                                                                        <div style="margin-bottom: 20px;">
                                                                            <label for="t-text"
                                                                                class="">{{ __('common.message') }}</label>
                                                                            <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer md-button">
                                                                    <button class="btn" data-dismiss="modal"><i
                                                                            class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                    <button onclick="store_domain()" id="btn-bg"
                                                                        class="btn btn-primary">{{ __('common.save') }}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Model Message-->

                                            <!--Mobile-->
                                            <div id="mobile_fadeupModal{{ $client->id }}"
                                                class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">{{ __('common.send_message') }}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-x">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post"
                                                                action="{{ url(app()->getLocale() . '/send_message') }}"
                                                                enctype="multipart/form-data" class="form-horizontal"
                                                                role="form" style="padding-top: 20px;">
                                                                {{ csrf_field() }}
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-12 mx-auto">
                                                                        <div style="margin-bottom: 20px;">
                                                                            <label for="t-text"
                                                                                class="">{{ __('common.message') }}</label>
                                                                            <textarea type="text" name="message" placeholder="{{ __('common.message') }}" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer md-button">
                                                                    <button class="btn" data-dismiss="modal"><i
                                                                            class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                                                                    <button onclick="store_domain()" id="btn-bg"
                                                                        class="btn btn-primary">{{ __('common.save') }}</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End Model Mobile-->

                                            <!--Form Delete -->
                                            <div id="myModal{{ $client->id }}" class="modal fade" tabindex="-1"
                                                role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-hidden="true"></button>
                                                            <h4 class="modal-title">
                                                                {{ __('common.delete') }}
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>{{ __('common.confirm') }} </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn default" data-dismiss="modal"
                                                                aria-hidden="true">{{ __('common.cancel') }}</button>
                                                            <button class="btn btn-danger"
                                                                onclick="delete_adv({{ $client->id }})">{{ __('common.delete') }}</button>
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


    <!--client-->
    <div id="client_fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog" style="max-width:65%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('common.add_new_client') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url(app()->getLocale() . '/clients') }}" enctype="multipart/form-data"
                        class="form-horizontal" role="form" style="padding-top: 20px;">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.name') }}</label>
                                    <input id="t-text" type="text" name="name"
                                        placeholder="{{ __('common.name') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.email') }}</label>
                                    <input id="t-text" type="email" name="email"
                                        placeholder="{{ __('common.email') }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.mobile') }}</label>
                                    <input id="t-text" type="text" name="mobile"
                                        placeholder="{{ __('common.mobile') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-6 mx-auto">
                                <div style="margin-bottom: 20px;">
                                    <label for="t-text" class="">{{ __('common.password') }}</label>
                                    <input id="t-text" type="password" name="password"
                                        placeholder="{{ __('common.password') }}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12 mx-auto">
                            <div class="form-group">
                                <label for="customFile"> {{ __('common.upload_image') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="customFile" />
                                    <label class="custom-file-label"
                                        for="customFile">{{ __('common.upload_image') }}</label>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer md-button">
                    <button class="btn" data-dismiss="modal"><i
                            class="flaticon-cancel-12"></i>{{ __('common.cancel') }}</button>
                    <button onclick="store_domain()" id="btn-bg"
                        class="btn btn-primary">{{ __('common.save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!--End Model client-->
@endsection
@section('js')
    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function change_status(id) {
            var status = $(".toggle-class" + id).prop('checked') == true ? 1 : 0;
            var client_id = $(".toggle-class" + id).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ url(app()->getLocale() . '/change_status_client') }}',
                data: {
                    'status': status,
                    'client_id': client_id
                },
                success: function(data) {
                    console.log(data.success)
                    setTimeout(function() {
                        $(".toast-basic").removeClass("hide");
                    }, 10);
                    setTimeout(function() {
                        $(".toast-basic").addClass("show");
                    }, 10);
                }
            });
        }

        $(function() {
            $('.close').click(function() {
                $(".toast-basic").removeClass("show");
                $(".toast-basic").addClass("hide");
            })
        })
    </script>
    <script>
        function delete_adv(id) {
            // alert(1);
            var url = '{{ url(app()->getLocale() . '/clients') }}/' + id;
            var csrf_token = '{{ csrf_token() }}';
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
