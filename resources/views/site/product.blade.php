@extends('layouts.site')
@section('css')
@endsection
@section('content')
<div class="container">
        <div class="row breadcrumbs-top mt-5">
            <div class="col-12">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Women & Girls</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                Accessories
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                Women
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row details-product mt-3">
            <div class="col-lg-4 col-12">
                <img src="{{asset('public/site/assets/images/girl.png')}}" class="img-product" alt="" />
                <div class="row mt-4">
                    <div class="col-lg-6 col-6">
                        <img src="{{asset('public/site/assets/images/img-p.png')}}" class="imgs-product" alt="" />
                    </div>
                    <div class="col-lg-6 col-6">
                        <img src="{{asset('public/site/assets/images/img-p-2.png')}}" class="imgs-product" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12 details_product_media">
                <h1>Flower Accessories</h1>
                <div class="row mt-4">
                    <div class="col-lg-7 col-12">
                        <div class="price-product">
                            <h4>$20.00</h4>
                            <strike> $30.00</strike>
                            <h6>%10 OFF</h6>

                        </div>
                    </div>
                    <div class="col-lg-5 col-12 text-center">
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                <li class="list-inline-item">4.5</li>
                            </ul>
                        </div>
                        <a>write your review</a>
                    </div>
                </div>
                <label>Quantity:</label>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="number" class="form-control" placeholder="1" />
                    </div>
                    <div class="col-lg-7">
                        <button>Add To Cart</button>
                    </div>
                    <div class="col-lg-2">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
                <div class="row mt-4 mb-5">
                    <div class="col-lg-2">
                        <img src="{{asset('public/site/assets/images/image_3.png')}}" alt="" />
                    </div>
                    <div class="col-lg-8">
                        <h5>Make 3 interest-free payments. Available
                            for orders above $20. </h5>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card-body">
                                <div class="flex flex-column mb-5 mt-4 faq-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="accordion">
                                                <div class="mb-3">
                                                    <div class="" id="heading-1">
                                                        <h5 class="mb-0">
                                                            <a role="button" data-toggle="collapse" href="#collapse-1"
                                                                aria-expanded="true" aria-controls="collapse-1">
                                                                DESCRIPTION
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse-1" class="collapse show" data-parent="#accordion"
                                                        aria-labelledby="heading-1">
                                                        <div class="card-body">
                                                            Show your bestie how much you appreciate them with our Flower Friendship Bracelet. It features a gold-tone flower charm, symbolising the beauty of friendship.
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="mb-3">
                                                    <div class="" id="heading-2">
                                                        <h5 class="mb-0">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                href="#collapse-2" aria-expanded="false"
                                                                aria-controls="collapse-2">
                                                                DETAILS
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse-2" class="collapse" data-parent="#accordion"
                                                        aria-labelledby="heading-2">
                                                        <div class="card-body">
                                                            Outer: 50% Zinc, 30% Cotton, 20% Plastic
                                                            L 11 cm
                                                            avoid contact with liquids
                                                            Plain
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-6 d-flex justify-content-star">
                                    <i class="fa-solid fa-share-nodes"></i><h5 class="">Share</h5>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <ul class="ul_social_media">
                                        <li><i class="fa-brands fa-facebook-f"></i></li>
                                        <li><i class="fa-brands fa-twitter"></i></li>
                                        <li><i class="fa-brands fa-instagram"></i></li>
                                        <li><i class="fa-brands fa-linkedin"></i></li>
                                        <li><i class="fa-brands fa-snapchat"></i></li>
                                        <li><i class="fa-solid fa-link"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-12 col-info border-left">
                <div class="row">
                    <div class="col-lg-2 col-2">
                        <img src="{{asset('public/site/assets/images/icon.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-2">
                       <h5>Purchase to <span>get 100</span> points</h5>
                    </div>
                    <div class="col-lg-2 col-2 mt-3">
                        <img src="{{asset('public/site/assets/images/icon2.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-2">  
                       <h5>Enjoy hassle free returns with this offer.<span>Learn more</span></h5>
                    </div>
                    <div class="col-lg-2 col-2 mt-3">
                        <img src="{{asset('public/site/assets/images/warranty 1.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-4">  
                       <h5>No warranty</h5>
                    </div>
                    <div class="col-lg-2 col-2 mt-3">
                         <img src="{{asset('public/site/assets/images/seller 1.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-4">
                        <h5>Sold by:<span>Hend Talal</span></h5>
                    </div>
                    <div class="col-lg-2 col-2 mt-3">
                        <img src="{{asset('public/site/assets/images/icon4.png')}}" alt="">
                   </div>
                   <div class="col-lg-10 col-10 mt-4">
                       <h5>Our Shopping code : <span>9216132</span></h5>
                   </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-5 col-5">
                        <p>Seller Reviews</p>
                    </div>
                    <div class="col-lg-7 col-7" style="text-align: end;">
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row progress-row">
                    <div class="col-lg-4 ">
                        <span>Always In Stock</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <p class="progress-number">%90</p>
                    </div>
                </div>
                <div class="row progress-row">
                    <div class="col-lg-4">
                        <span>Ships On Time</span>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress mt-2">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <p class="progress-number">%95</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-2 col-2">
                        <img src="{{asset('public/site/assets/images/secure_usp 1.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-0">
                       <h5>SECURE SHOPPING</h5>
                       <p>Your data is always protected</p>
                    </div>

                    <div class="col-lg-2 col-2 mt-1">
                        <img src="{{asset('public/site/assets/images/free_returns_usp 1.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-2">  
                        <h5>FREE RETURNS</h5>
                        <p>Get free returns on eligible items</p>
                    </div>

                    <div class="col-lg-2 col-2 mt-1">
                        <img src="{{asset('public/site/assets/images/trusted_shipping_usp_v2 1.png')}}" alt="">
                    </div>
                    <div class="col-lg-10 col-10 mt-2">  
                        <h5>TRUSTED SHIPPING</h5>
                        <p>Free shipping on express items</p>
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <button><i class="fa-solid fa-comment-dots "></i>Start a Conversation</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-tab-products mt-5">
            <div class="col-lg-12">
                <div class="tab">
                    <ul class="tabs-btn">
                    <li class="tab-btn">DELIVERY & RETURNS</li>
                    <li class="tab-btn">REVIEWS</li>
                    <li class="tab-btn">Bulk purchase</li>
                    </ul>
                    <div class="tabs-content">
                    <div class="tab-content">
                        1
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eveniet aut dolor cumque. Eligendi rerum enim sunt repudiandae, odio at nulla deserunt laudantium sapiente distinctio voluptate aspernatur illum fugit iusto.
                    </div>
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12 text-center pt-5 col-rating">
                                        <h4>Overall Rating</h4>
                                        <h2>4.4</h2>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa-solid fa-star-half-stroke"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p>Based On 2000 Ratings</p>
                                    </div>
                                    <div class="col-lg-6 col-12 col-progress-rating">
                                        <div class="row progress-row mt-2 mb-3">
                                            <div class="col-lg-3 col-3">
                                                <span>5</span><i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-2">
                                                <p class="progress-number">(1K)</p>
                                            </div>
                                        </div>

                                        <div class="row progress-row mb-3">
                                            <div class="col-lg-3 col-3">
                                                <span>4</span><i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-2">
                                                <p class="progress-number">(152)</p>
                                            </div>
                                        </div>

                                        <div class="row progress-row mb-3">
                                            <div class="col-lg-3 col-3">
                                                <span>3</span><i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-2">
                                                <p class="progress-number">(54)</p>
                                            </div>
                                        </div>


                                        <div class="row progress-row mb-3">
                                            <div class="col-lg-3 col-3">
                                                <span>2</span><i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-2">
                                                <p class="progress-number">(30)</p>
                                            </div>
                                        </div>


                                        <div class="row progress-row mb-3">
                                            <div class="col-lg-3 col-3">
                                                <span>1</span><i class="fa fa-star"></i>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="progress mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 5%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-2">
                                                <p class="progress-number">(2)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="row">
                                    <div class="col-lg-6 col-12 col-rating-des p-2">
                                        <i class="fa fa-star"></i>
                                        <span>How do I review this product ?</span>
                                        <p>If you recently purchased this product from noon, you can go to your Orders page and click on the Submit Review button</p>
                                    </div>
                                    <div class="col-lg-6 col-12 col-rating-des p-2">
                                        <i class="fa fa-star"></i>
                                        <span>Where do the reviews come from ?</span>
                                        <p>Our reviews are from 5KHAMSAT customers who purchased the product and submitted a review                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-customer-reviews">
                            <div class="col-lg-12">
                                <h3>352 Customer Reviews</h3>
                            </div>
                            <div class="row row-customer-reviews">
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="block-rating">
                                        <div class="row p-4">
                                            <div class="col-lg-7">
                                                <span>A</span>
                                                <p class="mt-10 mb-0">Arwa Ahmed</p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-info-customer">
                                                <i class="fa-solid fa-check"></i>
                                                <p>Verified Purchase</p>
                                            </div>
                                        </div>
                                        <h6>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </h6>
                                        <h5>25-1-2022</h5>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-final">
                        <h5>Shop in bulk according to your need</h5>
                        <table class="table tabel-products mt-4 mb-5">
                            <thead>
                              <tr>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td scope="row">10 - 100</td>
                                <td>245 SAR</td>
                              </tr>
                              <tr>
                                <td scope="row">10 - 100</td>
                                <td>245 SAR</td>
                              </tr>
                              <tr>
                                <td scope="row">10 - 100</td>
                                <td>245 SAR</td>
                              </tr>
                            </tbody>
                        </table>
                        <i class="fa-solid fa-bell"></i><p>Please contact the merchant before ordering the quantity to ensure availability.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="free-shopping">
        <div class="pt-5">
            <div class="box container ">
                <h5 class=""><i class="me-1"></i>More From Wommen & Girls</h5>
                <!-- <a class="" href="">All Products</a> -->
            </div>
        </div>
        <div class="container">
            <div id="free-shopping" class="owl-carousel owl-theme">
                <div class="item mt-5">
                    <div class="product">
                        <div class="thumb-wrapper">
                            <div class="img-box">
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t1.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t2.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t3.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t4.png')}}" class=" m-0" alt="">
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
                                <img src="{{asset('public/site/assets/images/t5.png')}}" class=" m-0" alt="">
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


    </div>
@endsection
