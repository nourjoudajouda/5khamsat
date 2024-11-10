@extends('layouts.dashborad')
@section('css')
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
        align-items: stretch;
        justify-content: center;
    }

    .card {
        flex: 0 0 200px;
        margin: 10px;
        border: 1px solid #ccc;
        box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .container img {
        max-width: 100%;
        height: 200px;
    }

    .texts {
        padding: 5px;
        margin-bottom: 10px;
    }

    .texts button {
        border: none;
        color: #fff;
        font-weight: 600;
        transition: all 0.3s ease-in;
        padding: 10px;
        margin-top: 0px;
    }

    .texts button:hover {
        background: #E0E3DA;
        color: #566270;
        cursor: pointer;
    }

    /* Popup Styling */
    .img-popup {
        position: fixed;
        top: 0; 
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, .5);
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    .img-popup img {
        max-width: 900px;
        width: 100%;
        height: 80%;
        opacity: 0;
        transform: translateY(-100px);
        -webkit-transform: translateY(-100px);
        -moz-transform: translateY(-100px);
        -ms-transform: translateY(-100px);
        -o-transform: translateY(-100px);
    }

    .close-btn {
        width: 35px;
        height: 30px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        position: absolute;
        top: 20px;
        right: 20px;
        cursor: pointer;
    }

    .close-btn .bar {
        height: 4px;
        background: #333;
    }

    .close-btn .bar:nth-child(1) {
        transform: rotate(45deg);
    }

    .close-btn .bar:nth-child(2) {
        transform: translateY(-4px) rotate(-45deg);
    }

    .opened {
        display: flex;
    }

    .opened img {
        animation: animatepopup 1s ease-in-out .8s;
        -webkit-animation: animatepopup .3s ease-in-out forwards;
    }
    .img-popup{
        z-index: 1000000;
    }
    @keyframes animatepopup {

        to {
            opacity: 1;
            transform: translateY(0);
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
        }

    }

    @media screen and (max-width: 880px) {

        .container .container__img-holder:nth-child(3n+1) {
            margin-left: 16px;
        }

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
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{$vendor->name}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{url('/documents')}}">
                                        {{__('common.documents')}}
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">

            </div>
        </div>
    </div>
    <div class="content-body">
        <main class="container">
            @if($vendor->data->Commercial_Register_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->Commercial_Register_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.Commercial_Record')}}</h6>
                </div>
            </section>
            @endif
            @if($vendor->data->ID_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->ID_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.ID_image')}}</h6>
                </div>
            </section>
            @endif
            @if($vendor->data->commissioner_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->commissioner_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.Agency authorized to manage on behalf of the owner')}}</h6>
                </div>
            </section>
            @endif
            @if($vendor->data->bank_account_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->bank_account_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.bank_account_image')}}</h6>
                </div>
            </section>
            @endif
            @if($vendor->data->brand_store_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->brand_store_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.brand_store_image')}}</h6>
                </div>
            </section>
            @endif
            @if($vendor->data->freelance_work_document_image)
            <section class="card container__img-holder">
                <img src="{{$vendor->data->freelance_work_document_image}}" alt="sample image">
                <div class="texts">
                    <h6 class="mt-2">{{__('common.freelance_work_document_image')}}</h6>
                </div>
            </section>
            @endif
            <div class="img-popup">
            <img src="" alt="Popup Image">
            <div class="close-btn">
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            </div>
        </main>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
    $(document).ready(function() {

        // required elements
        var imgPopup = $('.img-popup');
        var imgCont = $('.container__img-holder');
        var popupImage = $('.img-popup img');
        var closeBtn = $('.close-btn');

        // handle events
        imgCont.on('click', function() {
            var img_src = $(this).children('img').attr('src');
            imgPopup.children('img').attr('src', img_src);
            imgPopup.addClass('opened');
        });

        $(imgPopup, closeBtn).on('click', function() {
            imgPopup.removeClass('opened');
            imgPopup.children('img').attr('src', '');
        });

        popupImage.on('click', function(e) {
            e.stopPropagation();
        });

    });
</script>
@endsection