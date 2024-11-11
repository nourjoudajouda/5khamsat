@extends('layouts.site')
@section('css')
@endsection
@section('content')
    <div class="slides mt-4">
        <div class="container">
            <div class="row mt-4">
                <div class="col-lg-5 col-md-5 text text-start ">
                    <div class="box">
                        <h1>New Jaket</h1>
                        <p class=" fw-bold">new models in many colors</p>
                    </div>
                    <a href="" class="browse d-block rounded-pill ">Browse now <i
                            class="ps-5 fa-solid fa-angle-right"></i></a>
                </div>
                <div class="col-lg-7 col-md-7 imge ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active ">
                                <div class="box  d-flex justify-content-center align-items-center pt-5 pb-5">
                                    <img src="{{ asset('site/assets/images/Jaket 1 x4.png') }}" class="  img-fluid "
                                        style="max-width: 400px ; " alt="...">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="box d-flex justify-content-center align-items-center pt-5 pb-5">
                                    <img src="{{ asset('site/assets/images/Jaket 2 x4.png') }}" class="  img-fluid "
                                        style="max-width: 400px ; " alt="...">
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="box d-flex justify-content-center align-items-center pt-5 pb-5">
                                    <img src="{{ asset('site/assets/images/Jaket 3 x4.png') }}" class="  img-fluid "
                                        style="max-width: 400px ; " alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicators">
                            <button type="" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active first" aria-current="true" aria-label="Slide 1">
                                <div class="price position-relative">
                                    <div class="position-relative"></div> <img class="d-block "
                                        src="{{ asset('site/assets/images/Jaket 1 1.png') }}"
                                        style="width:105px ; height: 105px;" alt="">
                                </div>
                            </button>
                            <button type="" class="second" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="1" aria-label="Slide 2">
                                <div><img class="d-block" src="{{ asset('site/assets/images/Jaket 2 1.png') }}"
                                        alt=""></div>
                            </button>
                            <button type="" class="third" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="2" aria-label="Slide 3">
                                <div><img class="d-block" src="{{ asset('site/assets/images/Jaket 3 1.png') }}"
                                        alt=""></div>
                            </button>
                        </div>
                        <button class="carousel-control-prev justify-content-start" type=""
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <i class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next justify-content-end" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <i class="carousel-control-next-icon fa fa-angle-right" aria-hidden="false"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="goods mt-5 ">
        <a href="">
            <p class="m-0 ">Categories of 5Khamast</p>
        </a>
        <div class="container ">
            <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="active" id="pills-sar-tab" data-bs-toggle="pill" data-bs-target="#pills-sar"
                        type="button" role="tab" aria-controls="pills-sar" aria-selected="true">SAR</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button"
                        role="tab" aria-controls="pills-5" aria-selected="false">5</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-10-tab" data-bs-toggle="pill" data-bs-target="#pills-10"
                        type="button" role="tab" aria-controls="pills-10" aria-selected="false">10</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-15-tab" data-bs-toggle="pill" data-bs-target="#pills-15"
                        type="button" role="tab" aria-controls="pills-15" aria-selected="false">15</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-20-tab" data-bs-toggle="pill" data-bs-target="#pills-20"
                        type="button" role="tab" aria-controls="pills-20" aria-selected="false">20</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-25-tab" data-bs-toggle="pill" data-bs-target="#pills-25"
                        type="button" role="tab" aria-controls="pills-25" aria-selected="false">25</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sar" role="tabpanel" aria-labelledby="pills-sar-tab">
                <div class="container">
                    <div id="carousel1" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">

                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">

                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <button class="btn btn-danger my-cart-btn" data-id="1"
                                                data-name="product 1" data-summary="summary 1" data-price="10"
                                                data-quantity="1" data-image="images/img_1.png')}}">Add to Cart <i
                                                    class="fa-solid fa-cart-shopping"></i></button>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                        <div class="front">
                                            <div class="text-end"><i class="fa-regular fa-heart"></i></div>
                                            <a href="">ADD TO CART <i class="fa-solid fa-cart-shopping"></i></a>
                                            <a href="">VIEW PRODUCT <i class="fa-regular fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                <div class="container">
                    <div id="carousel2" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-10" role="tabpanel" aria-labelledby="pills-10-tab">
                <div class="container">
                    <div id="carousel3" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-15" role="tabpanel" aria-labelledby="pills-15-tab">
                <div class="container">
                    <div id="carousel4" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-20" role="tabpanel" aria-labelledby="pills-20-tab">
                <div class="container">
                    <div id="carousel5" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-25" role="tabpanel" aria-labelledby="pills-25-tab">
                <div class="container">
                    <div id="carousel6" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 1.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 2.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 3.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 4.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 5.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 6.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 7.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 8.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 9.png') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 10.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 11.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 12.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 13.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 14.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 15.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 16.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 17.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 18.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 19.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 20.webp') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 21.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 22.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 23.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 24.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 25.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 26.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 27.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 28.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 29.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 30.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 31.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 32.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 33.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 34.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 35.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/goods 36.jpg') }}" class=" m-0"
                                            style="width:164px ;" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30 </p>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>>
            </div>
        </div>
    </div>
    <div class="free-shopping">
        <div class="title pt-5">
            <div class="box container ">
                <p class=""><i class="me-1 fa-solid fa-circle-check"></i>Free Shopping</p>
                <p class=""><i class="me-1 fa-solid fa-clock"></i>Expires in:</p>
                <div class="wrapper">
                    <div class="timer text-center">
                        <div class="">
                            <div class="clock">
                                <div class="well top-section">
                                    <div id="days" class="num">00</div>
                                </div>
                                <div class="well bottom-section">
                                    <div id="days-text" class="text">DAY</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="clock">
                                <div class="well top-section">
                                    <div id="hours" class="num">00</div>
                                </div>
                                <div class="well bottom-section">
                                    <div id="hours-text" class="text">HRS</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="clock">
                                <div class="well top-section">
                                    <div id="mins" class="num">00</div>
                                </div>
                                <div class="well bottom-section">
                                    <div id="mins-text" class="text">MI</div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="clock">
                                <div class="well top-section">
                                    <div id="secs" class="num">00</div>
                                </div>
                                <div class="well bottom-section">
                                    <div id="secs-text" class="text">S</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="" href="">All Products</a>
            </div>
        </div>
        <div class="container">
            <div id="free-shopping" class="owl-carousel owl-theme">
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper ">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price ">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item mt-5">
                    <div class=" product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0" alt="">
                            </div>
                            <div class="thumb-content ">
                                <a href="" class="type">Women</a>
                                <a href="">
                                    <h4>Flower Flanner Check Jacke</h4>
                                </a>
                                <div class="star-rating">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                        <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="item-price">$30</p> <strike> $50</strike>
                                    <a href="#" class=""><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ad overflow-hidden pt-5 mb-5">
            <div class="container  ">
                <div class="row d-flex align-items-center">
                    <div class="box col-lg-6 col-md-7">
                        <p class="p-0 text-white">Today's opportunity</p>
                        <h1 class="text-white">%50 Off Basic</h1>
                        <a href="" class="browse d-block rounded-pill ">Browse now <i
                                class="ps-5 fa-solid fa-angle-right"></i></a>
                    </div>
                    <div class="imge col-lg-6 position-relative">
                        <img class="" src="/images/offer.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="women-girls ">
        <a href="">
            <p class="">Women & Girls</p>
        </a>
        <div class="container ">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="active" id="pills-accessories-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-accessories" type="button" role="tab"
                        aria-controls="pills-accessories" aria-selected="true">Accessories</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-pajamas-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-pajamas" type="button" role="tab" aria-controls="pills-pajamas"
                        aria-selected="false">pajamas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-jewelry-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-jewelry" type="button" role="tab" aria-controls="pills-jewelry"
                        aria-selected="false">jewelry</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="" id="pills-tshirts-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-tshirts" type="button" role="tab" aria-controls="pills-tshirts"
                        aria-selected="false">T-shirts</button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-accessories" role="tabpanel"
                aria-labelledby="pills-accessories-tab">
                <div class="container">
                    <div id="accessories" class="owl-carousel owl-theme">
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-pajamas" role="tabpanel" aria-labelledby="pills-pajamas-tab">
                <div class="container">
                    <div id="pajamas" class="owl-carousel owl-theme">
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-jewelry" role="tabpanel" aria-labelledby="pills-jewelry-tab">
                <div class="container">
                    <div id="jewelry" class="owl-carousel owl-theme">
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tshirts" role="tabpanel" aria-labelledby="pills-tshirts-tab">
                <div class="container">
                    <div id="tshirts" class="owl-carousel owl-theme">
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class="product">
                                <div class="thumb-wrapper ">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price ">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mt-5">
                            <div class=" product">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                            alt="">
                                    </div>
                                    <div class="thumb-content ">
                                        <a href="" class="type">Women</a>
                                        <a href="">
                                            <h4>Flower Flanner Check Jacke</h4>
                                        </a>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i
                                                        class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <p class="item-price">$30</p> <strike> $50</strike>
                                            <a href="#" class=""><i
                                                    class="fa-solid fa-arrow-right"></i></a>
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
    <div class="what-is mb-5">
        <div class="">
            <div class="box container   d-flex justify-content-between">
                <div class="title ">
                    <h5>Whats in</h5>
                </div>
                <div class="links d-flex align-items-center ">
                    <a href="">Deal</a>
                    <a href="">New</a>
                    <a href="">Show All</a>
                </div>
            </div>
            <div class="container">
                <div id="whatis" class="owl-carousel owl-theme">
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t1.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t2.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t3.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class="product">
                            <div class="thumb-wrapper ">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t4.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price ">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item mt-5">
                        <div class=" product">
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="{{ asset('site/assets/images/t5.png') }}" class=" m-0"
                                        alt="">
                                </div>
                                <div class="thumb-content ">
                                    <a href="" class="type">Women</a>
                                    <a href="">
                                        <h4>Flower Flanner Check Jacke</h4>
                                    </a>
                                    <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="fa-regular fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price">
                                        <p class="item-price">$30</p> <strike> $50</strike>
                                        <a href="#" class=""><i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
