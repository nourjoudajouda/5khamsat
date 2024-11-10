@extends('layouts.dashborad')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-7 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('common.details_product')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{url('/products')}}">{{__('common.products')}}</a>
                                </li>

                                <li class="breadcrumb-item active">{{__('common.details_product')}}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="content-body">
            <!-- app e-commerce details start -->
            <section class="app-ecommerce-details">
                <div class="card">
                    <!-- Product Details starts -->
                    <div class="card-body">
                        <div class="row my-2">
                            <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{$product->image}}" class="img-fluid product-img" alt="product image" />
                                </div>
                            </div>
                            <div class="col-12 col-md-7">
                                <h4>
                                    @if(app()->getLocale()=='ar')
                                    {{$product->name_ar}}
                                    @else
                                    {{$product->name_en}}
                                    @endif
                                </h4>
                                <span class="card-text item-company">
                                    <a href="javascript:void(0)" class="company-name">
                                    @if(app()->getLocale()=='ar')    
                                        {{$product_category->categories->name_ar}}
                                    @else
                                        {{$product_category->categories->name_en}}
                                    @endif
                                    </a>
                                </span>
                                <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4 class="item-price mr-1">${{$product->price}}</h4>
                                    <ul class="unstyled-list list-inline pl-1 border-left">
                                        @for ($i=1; $i <=$product->rate; $i++)
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            @endfor
                                            @if($product->rate < 5) @for ($i=1; $i <=(5 - $product->rate); $i++)
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                            @endfor
                                            @endif
                                    </ul>
                                </div>
                                <p class="card-text">Available - <span class="text-success">In stock</span></p>
                                <p class="card-text">
                                    @if(app()->getLocale()=='ar')
                                    {!!$product->description_ar!!}
                                    @else
                                    {!!$product->description_en!!}
                                    @endif
                                </p>
                                <ul class="product-features list-unstyled">
                                    <li> <span>{{__('common.Qty')}} : {{$product->qty}} {{__('common.unit')}}</span></li>
                                    <li>
                                        <i data-feather="dollar-sign"></i>
                                        <span>EMI options available</span>
                                    </li>
                                </ul>
                                <hr />
                             
                                <hr />
                                <small class="text-success">* {{__('common.duration_received')}}</small>
                                <!-- <div class="d-flex flex-column flex-sm-row pt-1">
                                    <a href="javascript:void(0)" class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="shopping-cart" class="mr-50"></i>
                                        <span class="add-to-cart">Add to cart</span>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-outline-secondary btn-wishlist mr-0 mr-sm-1 mb-1 mb-sm-0">
                                        <i data-feather="heart" class="mr-50"></i>
                                        <span>Wishlist</span>
                                    </a>
                                    <div class="btn-group dropdown-icon-wrapper btn-share">
                                        <button type="button" class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="share-2"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="facebook"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="twitter"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="youtube"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="dropdown-item">
                                                <i data-feather="instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Product Details ends -->

                    

                    <!-- Related Products starts -->
                    <!-- <div class="card-body">
                        <div class="mt-4 mb-2 text-center">
                            <h4>{{__('common.Related Products')}}</h4>
                            <p class="card-text">{{__('common.People also search for this items')}}</p>
                        </div>
                        <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                            <div class="swiper-wrapper">
                                @foreach($products_related as $product)
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)">
                                        <div class="item-heading">
                                            <h5 class="text-truncate mb-0">
                                                @if(app()->getLocale()=='ar')
                                                {{$product->products->name_ar}}
                                                @else
                                                {{$product->products->name_en}}
                                                @endif
                                            </h5>
                                            <small class="text-body">by Apple</small>
                                        </div>
                                        <div class="img-container w-50 mx-auto py-75">
                                            <img src="{{$product->products->image}}" class="img-fluid" alt="image" />
                                        </div>
                                        <div class="item-meta">
                                            <ul class="unstyled-list list-inline mb-25">
                                                @for ($i=1; $i <=$product->products->rate; $i++)
                                                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                    @endfor
                                                    @if($product->products->rate < 5) @for ($i=1; $i <=(5 - $product->products->rate); $i++)
                                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                        @endfor
                                                        @endif
                                            </ul>
                                            <p class="card-text text-primary mb-0">${{$product->products->price}}</p>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div> -->
                    <!-- Related Products ends -->
                </div>
            </section>
            <!-- app e-commerce details end -->

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
@section('js')

@endsection