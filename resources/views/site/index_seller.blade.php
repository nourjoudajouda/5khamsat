@extends('layouts.site_seller')
@section('style_sheet')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xs-12 px-0">
                <div class="cover_page" style="background-image: url('{{ asset('site/assets/images/cover_page.png') }}');">
                    <div class="rgba_cover">
                        <h3>Start selling on fives and keep your products in every home !</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xs-12 text-center">
                <button class="btn btn_site start-now">Start Now</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="featurers">
            <div class="title pt-5">
                <h3>Why 5Khamsat?</h3>
                <div class="c-line-center-featurers c-theme-bg mb-4"></div>
                <h6>It is a specialized platform for retail and wholesale traders in the Kingdom of Saudi Arabia to sell
                    their products through it without the need to build and manage their own stores</h6>
            </div>
            <div class="container">
                <div id="featurers" class="owl-carousel owl-theme">
                    <div class="item m-3 p-3">
                        <div class="featurer">
                            <h1>1</h1>
                            <h3>More Sales !</h3>
                            <h5>Be the best seller, sell your products both retail and single</h5>
                        </div>
                    </div>
                    <div class="item m-3 p-3">
                        <div class="featurer">
                            <h1>2</h1>
                            <h3>Motivate customers for your choice!</h3>
                            <h5>Be the best seller, sell your products both retail and single</h5>
                        </div>
                    </div>
                    <div class="item m-3 p-3">
                        <div class="featurer">
                            <h1>3</h1>
                            <h3>What is difficult !</h3>
                            <h5>Be the best seller, sell your products both retail and single</h5>
                        </div>
                    </div>
                    <div class="item m-3 p-3">
                        <div class="featurer">
                            <h1>4</h1>
                            <h3>More Sales</h3>
                            <h5>Be the best seller, sell your products both retail and single</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xs-12 text-center">
                        <button class="btn btn_site start-now mt-5">Start Sell Now</button>
                        <p>what are you waiting ?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="th-section mt-5">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-be-special">
                    <h3>Be <span>Special</span> !</h3>
                    <h6>Be a real competitor, distinguish your points now from others and enter the competition</h6>
                    <small class="text-end">Know More</small>
                </div>
                <div class="col-lg-6 col-xs-6 text-center d_media">
                    <img src="{{ asset('site/assets/images/img-th-section.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="featurers">
            <div class="title pt-5 mt-5">
                <h3>Create Powerful Experiences</h3>
                <div class="c-line-center-featurers c-theme-bg mb-4"></div>
                <h6>Watch the reviews of your customers' experience of your products in 5Khamsat</h6>
            </div>
            <div class="container">
                <div class="clients_slider mb-5 mt-4">
                    <div class="">
                        <div class="container">
                            <div id="clients" class="owl-carousel owl-theme">
                                <div class="item mt-5 pt-5">
                                    <div class="client_opinion">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <i class="fa-solid fa-quote-left"></i>

                                            </div>
                                            <div class="col-lg-8 pt-4">
                                                <h3>5Khamsat always works for the success of sellers and represents a
                                                    large number for store sales</h3>
                                            </div>
                                            <div class="col-lg-2 pt-5">
                                                <i class="fa-solid fa-quote-right pt-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 pt-5">
                                    <div class="client_opinion">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <i class="fa-solid fa-quote-left"></i>

                                            </div>
                                            <div class="col-lg-8 pt-4">
                                                <h3>5Khamsat always works for the success of sellers and represents a
                                                    large number for store sales</h3>
                                            </div>
                                            <div class="col-lg-2 pt-5">
                                                <i class="fa-solid fa-quote-right pt-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 pt-5">
                                    <div class="client_opinion">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <i class="fa-solid fa-quote-left"></i>

                                            </div>
                                            <div class="col-lg-8 pt-4">
                                                <h3>5Khamsat always works for the success of sellers and represents a
                                                    large number for store sales</h3>
                                            </div>
                                            <div class="col-lg-2 pt-5">
                                                <i class="fa-solid fa-quote-right pt-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item mt-5 pt-5">
                                    <div class="client_opinion">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <i class="fa-solid fa-quote-left"></i>

                                            </div>
                                            <div class="col-lg-8 pt-4">
                                                <h3>5Khamsat always works for the success of sellers and represents a
                                                    large number for store sales</h3>
                                            </div>
                                            <div class="col-lg-2 pt-5">
                                                <i class="fa-solid fa-quote-right pt-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="th-section mt-5">
            <div class="row">
                <div class="col-lg-6 col-xs-6 col-be-subscripe text-center">
                    <h3>Market your products and offers through free marketing courses</h3>
                    <button class="btn btn_site">Subscribe now</button>
                </div>
                <div class="col-lg-6 col-xs-6 text-center d_media">
                    <img src="{{ asset('site/assets/images/sub.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid s-section text-center pt-5">
        <img src="{{ asset('site/assets/images/image10.png') }}" class="img10_media" alt="" />
        <div class="row p-0 m-0" style="width:100%">
            <div class="bg_nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link link-secondary active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                            href="#">System Point</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-secondary " id="album-tab" data-bs-toggle="tab" data-bs-target="#album"
                            href="#">Shipping & Returns</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="tabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card border-0">

                        <div class="card-body mb-3">
                            <div class="flex flex-column mb-5 mt-4 faq-section">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="accordion">
                                            <div class="card mb-4">
                                                <div class="card-header" id="heading-1">
                                                    <h5 class="mb-0">
                                                        <a role="button" data-toggle="collapse" href="#collapse-1"
                                                            aria-expanded="true" aria-controls="collapse-1">
                                                            Registered what should he do ?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-1" class="collapse show" style="background: #f7f7f7;"
                                                    data-parent="#accordion" aria-labelledby="heading-1">
                                                    <div class="card-body px-3">
                                                        Your account will be activated for a training course in the course
                                                        and focus within 24 hours.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header" id="heading-2">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            href="#collapse-2" aria-expanded="false"
                                                            aria-controls="collapse-2">
                                                            What documents are required to register as a seller ?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-2" class="collapse" style="background: #f7f7f7;"
                                                    data-parent="#accordion" aria-labelledby="heading-2">
                                                    <div class="card-body px-3">
                                                        Your account will be activated for a training course in the course
                                                        and focus within 24 hours.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header" id="heading-3">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            href="#collapse-3" aria-expanded="false"
                                                            aria-controls="collapse-3">
                                                            How will my profits be transferred?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-3" class="collapse" style="background: #f7f7f7;"
                                                    data-parent="#accordion" aria-labelledby="heading-3">
                                                    <div class="card-body px-3">
                                                        Your account will be activated for a training course in the course
                                                        and focus within 24 hours.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header" id="heading-4">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            href="#collapse-4" aria-expanded="false"
                                                            aria-controls="collapse-2">
                                                            Do I need to send my shipments to the warehouse 5Khamsat?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-4" class="collapse" style="background: #f7f7f7;"
                                                    data-parent="#accordion" aria-labelledby="heading-4">
                                                    <div class="card-body px-3">
                                                        Your account will be activated for a training course in the course
                                                        and focus within 24 hours.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-header" id="heading-5">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            href="#collapse-5" aria-expanded="false"
                                                            aria-controls="collapse-5">
                                                            Do I need to send my shipments to the warehouse 5Khamsat?
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-5" class="collapse" style="background: #f7f7f7;"
                                                    data-parent="#accordion" aria-labelledby="heading-5">
                                                    <div class="card-body px-3">
                                                        Your account will be activated for a training course in the course
                                                        and focus within 24 hours.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                    2
                </div>
                <div class="tab-pane fade" id="album" role="tabpanel" aria-labelledby="album-tab">
                    3
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
