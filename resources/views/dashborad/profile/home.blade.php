@extends('layouts.dashborad')
@section('css')
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
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
                            <h2 class="content-header-title float-left mb-0">{{ __('common.profile') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('common.home') }}</a>
                                    </li>

                                    <li class="breadcrumb-item active">{{ __('common.Edit_profile') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-general" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('common.Edit_profile') }}</span>
                                    </a>
                                </li>
                                <!-- change password -->
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-password" data-toggle="pill"
                                        href="#account-vertical-password" aria-expanded="false">
                                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">{{ __('common.edit_password') }}</span>
                                    </a>
                                </li>
                                @can('roles.vendor')
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#chats"
                                            aria-expanded="false">
                                            <span class="iconify" class="font-medium-3 mr-1"
                                                style="font-size: 19px;margin-left: 15px;" data-icon="bxs:message"></span>
                                            <span class="font-weight-bold">{{ __('common.connect_with_admin') }}</span>
                                        </a>
                                    </li>
                                @endcan

                            </ul>
                        </div>
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                            aria-labelledby="account-pill-general" aria-expanded="true">
                                            <!-- form -->
                                            <form method="post"
                                                action="{{ url(app()->getLocale() . '/managers/' . $user->id) }}"
                                                enctype="multipart/form-data" class="validate-form mt-2" role="form">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-name">{{ __('common.name') }}</label>
                                                            <input type="name" class="form-control" id="name"
                                                                placeholder="name" name="name"
                                                                value="{{ old('name', $user->name) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">{{ __('common.email') }}</label>
                                                            <input type="email" class="form-control" id="account-e-mail"
                                                                name="email" placeholder="Email"
                                                                value="{{ old('email', $user->email) }}" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-company">{{ __('common.mobile') }}</label>
                                                            <input type="text" class="form-control" id="mobile"
                                                                placeholder="mobile" name="mobile"
                                                                value="{{ old('mobile', $user->mobile) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="customFile">
                                                                {{ __('common.upload_image') }}</label>
                                                            <div class="custom-file">
                                                                <input type="file" name="photo"
                                                                    class="custom-file-input" id="customFile" />
                                                                <label class="custom-file-label"
                                                                    for="customFile">{{ __('common.upload_image') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" id="btn-bg"
                                                            class="btn btn-primary mt-2 mr-1">{{ __('common.save') }}</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary mt-2">{{ __('common.cancel') }}</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ general tab -->

                                        <!-- change password -->
                                        <div class="tab-pane fade" id="account-vertical-password" role="tabpanel"
                                            aria-labelledby="account-pill-password" aria-expanded="false">
                                            <!-- form -->
                                            <form method="post"
                                                action="{{ url(app()->getLocale() . '/managers/' . $user->id . '/edit_password') }}"
                                                enctype="multipart/form-data" class="validate-form" role="form">
                                                {{ csrf_field() }}

                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="account-new-password">{{ __('common.password') }}</label>
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="account-new-password"
                                                                    name="password" class="form-control" value=""
                                                                    placeholder="{{ __('common.password') }}" required>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer">
                                                                        <i data-feather="eye"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label
                                                                for="account-retype-new-password">{{ __('common.confirm_password') }}</label>
                                                            <div
                                                                class="input-group form-password-toggle input-group-merge">
                                                                <input type="password" id="account-retype-new-password"
                                                                    class="form-control" name="confirm_password"
                                                                    value=""
                                                                    placeholder="{{ __('common.confirm_password') }}"
                                                                    required>
                                                                <div class="input-group-append">
                                                                    <div class="input-group-text cursor-pointer"><i
                                                                            data-feather="eye"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="submit" id="btn-bg"
                                                            class="btn btn-primary mr-1 mt-1">{{ __('common.save') }}</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-secondary mt-1">{{ __('common.cancel') }}</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ change password -->
                                        @can('roles.vendor')
                                            <!-- information -->
                                            <div class="tab-pane fade" id="chats" role="tabpanel"
                                                aria-labelledby="account-pill-info" aria-expanded="false">

                                                <!-- Dashboard Analytics Start -->
                                                <section id="dashboard-analytics">
                                                    <div class="row match-height">
                                                        <!-- Timeline Card -->
                                                        <div class="col-lg-12 col-12">
                                                            <div class="card card-user-timeline">
                                                                <div class="card-header">
                                                                    <div class="d-flex align-items-center">
                                                                        <i data-feather="list"
                                                                            class="user-timeline-title-icon"></i>
                                                                        <h4 class="card-title">{{ __('common.chats') }}</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <ul class="timeline ml-50" id="messages"
                                                                        style="overflow-y: scroll;height:400px;">
                                                                        @foreach ($contact->chats as $chat)
                                                                            @if ($chat->type == 1)
                                                                                <li class="timeline-item">
                                                                                    <span
                                                                                        class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                                                                    <div class="timeline-event">
                                                                                        <div class="media align-items-center">
                                                                                            <div class="avatar mr-50">
                                                                                                <img src="{{ $chat->users->photo }}"
                                                                                                    alt="Avatar"
                                                                                                    width="38"
                                                                                                    height="38" />
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h6 style="font-weight: bold;">
                                                                                                    {{ $chat->users->name }}
                                                                                                </h6>
                                                                                                <small>{{ $chat->period }}</small>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h6 class="mb-0"
                                                                                            style="margin: 10px;">
                                                                                            <span class="iconify"
                                                                                                style="color: #fec53a;"
                                                                                                data-icon="bxs:message"></span>
                                                                                            {{ $chat->message }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                            @if ($chat->type == 2)
                                                                                <li class="timeline-item">
                                                                                    <span
                                                                                        class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                                                    <div class="timeline-event">
                                                                                        <div class="media align-items-center">
                                                                                            <div class="avatar mr-50">
                                                                                                <img src="{{ $chat->vendors->data->ID_image }}"
                                                                                                    alt="Avatar"
                                                                                                    width="38"
                                                                                                    height="38" />
                                                                                            </div>
                                                                                            <div class="media-body">
                                                                                                <h6 style="font-weight: bold;">
                                                                                                    {{ $chat->vendors->name }}
                                                                                                </h6>
                                                                                                <small>{{ $chat->period }}</small>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h6 class="mb-0"
                                                                                            style="margin: 10px;">
                                                                                            <span class="iconify"
                                                                                                style="color: #fec53a;"
                                                                                                data-icon="bxs:message"></span>
                                                                                            {{ $chat->message }}
                                                                                        </h6>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                    <form id="FormSendMessage" action="javascript:void(0)">
                                                                        @csrf
                                                                        <section id="input-group-buttons">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-12 col-12 mb-1">
                                                                                                    <div class="input-group">
                                                                                                        <input type="hidden"
                                                                                                            value="{{ $contact->id }}"
                                                                                                            name="contact_id" />
                                                                                                        <input type="text"
                                                                                                            name="message"
                                                                                                            class="form-control"
                                                                                                            placeholder="{{ __('common.write_message') }}"
                                                                                                            aria-describedby="button-addon2" />
                                                                                                        <div class="input-group-append"
                                                                                                            id="button-addon2">
                                                                                                            <button
                                                                                                                class="btn btn-outline-primary"
                                                                                                                id="send_message_btn"
                                                                                                                type="button">{{ __('common.send') }}</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ Timeline Card -->
                                                    </div>
                                                </section>
                                                <!-- Dashboard Analytics end -->
                                            </div>
                                            <!--/ information -->
                                        @endcan


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ right content section -->
                    </div>
                </section>
                <!-- / account setting page -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')
    <script src="{{ url('dashborad/app-assets/js/scripts/components/components-bs-toast.js') }}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", "#send_message_btn", function() {
                alert(1);
                let form = $(this.form);
                console.log(form)
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var postData = new FormData(this.form);
                $.ajax({
                    url: "{{ route('send_message') }}",
                    type: "POST",
                    data: postData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.message === 'Success') {
                            document.getElementById("FormSendMessage").reset();
                            $('#messages').append(
                                '<span class="timeline-point timeline-point-warning timeline-point-indicator"></span>' +
                                '<div class="timeline-event">' +
                                '<div class="media align-items-center">' +
                                '<div class="avatar mr-50">' +
                                '<img src="' + response.image +
                                '" alt="Avatar" width="38" height="38" />' +
                                '</div>' +
                                '<div class="media-body">' +
                                '<h6 style="font-weight: bold;">' + response.name +
                                '</h6>' +
                                '<small>' + response.item.period + '</small>' +
                                '</div>' +
                                '</div>' +
                                '<h6 class="mb-0" style="margin: 10px;">' +
                                '<span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>' +
                                response.item.message + '</h6>' +
                                '</div>')
                        }
                    }

                });
            });
        });
    </script>
@endsection
