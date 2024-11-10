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
                            <h2 class="content-header-title float-left mb-0">{{__('common.chats')}}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{url('/chats')}}">
                                            {{__('common.chats')}}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                    <div class="card card-user-timeline" style="width: 100%;">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <i data-feather="list" class="user-timeline-title-icon"></i>
                                    <h4 class="card-title">{{__('common.chats')}}</h4>
                                </div>
                            </div>
                            <div class="card-body"> 
                                <ul class="timeline ml-50" id="messages" style="overflow-y: scroll;height:500px;">
                                    @if(isset($contact))
                                        @foreach($contact->chats as $chat)
                                        @if($chat->type == 1)
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-primary timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="media align-items-center">
                                                    <div class="avatar mr-50">
                                                        <img src="{{$chat->users->photo}}" alt="Avatar" width="38" height="38" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 style="font-weight: bold;">{{$chat->users->name}}</h6>
                                                        <small>{{$chat->period}}</small>
                                                    </div>
                                                </div>
                                                <h6 class="mb-0" style="margin: 10px;">
                                                    <span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>                                                
                                                    {{$chat->message}}
                                                </h6>
                                            </div>
                                        </li>
                                        @endif
                                        @if($chat->type == 2)
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <div class="media align-items-center">
                                                    <div class="avatar mr-50">
                                                        <img src="{{$chat->vendors->data->ID_image}}" alt="Avatar" width="38" height="38" />
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 style="font-weight: bold;">{{$chat->vendors->name}}</h6>
                                                        <small>{{$chat->period}}</small>
                                                    </div>
                                                </div>
                                                <h6 class="mb-0" style="margin: 10px;">
                                                    <span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>                                                
                                                    {{$chat->message}}
                                                </h6>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    @endif
                                </ul>
                                <form id="FormSendMessage" action="javascript:void(0)">
                                    @csrf
                                    <section id="input-group-buttons">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-12 mb-1">
                                                                <div class="input-group"> 
                                                                    <input type="hidden" value="{{$contact->id}}" name="contact_id" />
                                                                    <input type="text" name="message" class="form-control" placeholder="{{__('common.write_message')}}" aria-describedby="button-addon2" />
                                                                    <div class="input-group-append" id="button-addon2">
                                                                        <button class="btn btn-outline-primary" id="send_message_btn" type="button">{{__('common.send')}}</button>
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

                    
                </section>
                <!-- Dashboard Analytics end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('js')

<script src="{{url('public/dashborad/app-assets/js/scripts/components/components-bs-toast.js')}}"></script>
<!-- END: Page JS-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function() {
        $(document).on("click", "#send_message_btn", function() {
            let form = $(this.form);
            console.log(form)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postData = new FormData(this.form);
            $.ajax({
                url: "{{ route('send_message')}}",
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.message === 'Success') {
                        
                        document.getElementById("FormSendMessage").reset();
                        $('#messages').append('<span class="timeline-point timeline-point-warning timeline-point-indicator"></span>'+
                                                '<div class="timeline-event">'+
                                                    '<div class="media align-items-center">'+
                                                        '<div class="avatar mr-50">'+
                                                            '<img src="' + response.image + '" alt="Avatar" width="38" height="38" />'+
                                                        '</div>'+
                                                        '<div class="media-body">'+
                                                            '<h6 style="font-weight: bold;">' + response.name + '</h6>'+
                                                            '<small>' + response.item.period + '</small>'+
                                                        '</div>'+
                                                    '</div>'+
                                                    '<h6 class="mb-0" style="margin: 10px;">'+
                                                        '<span class="iconify" style="color: #fec53a;" data-icon="bxs:message"></span>'+response.item.message+'</h6>'+
                                                '</div>')
                    }
                }

            });
        });
    });
</script>

@endsection