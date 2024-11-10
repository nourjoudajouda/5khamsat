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
            <div class="content-header-right text-md-right col-md-5 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">
                    <div class="dropdown">
                        <!-- <a href="{{url(app()->getLocale().'/export_pdf_users')}}" class="btn-icon btn btn-danger btn-round btn-sm dropdown-toggle">
                            {{__('common.export_as_pdf')}}
                        </a> -->
                        <!-- @can('products.store')
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" data-toggle="modal" data-target="#product_fadeupModal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('common.add_new_product')}}</button>
                        @endcan -->
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
                                    <!-- <h4 class="item-price mr-1">${{$product->price}}</h4> -->
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
                                <!-- <p class="card-text">Available - <span class="text-success">In stock</span></p> -->
                                <p class="card-text">
                                    @if(app()->getLocale()=='ar')
                                    {!!$product->description_ar!!}
                                    @else
                                    {!!$product->description_en!!}
                                    @endif
                                </p>
                                <ul class="product-features list-unstyled">
                                    <!-- <li> <span>{{__('common.Qty')}} : {{$product->qty}} {{__('common.unit')}}</span></li>
                                    <li>
                                        <i data-feather="dollar-sign"></i>
                                        <span>EMI options available</span>
                                    </li> -->
                                </ul>
                                <hr />
                                <div class="product-color-options">
                                    <!-- <h6>Colors</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block selected">
                                            <div class="color-option b-primary">
                                                <div class="filloption bg-primary"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-success">
                                                <div class="filloption bg-success"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-danger">
                                                <div class="filloption bg-danger"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-warning">
                                                <div class="filloption bg-warning"></div>
                                            </div>
                                        </li>
                                        <li class="d-inline-block">
                                            <div class="color-option b-info">
                                                <div class="filloption bg-info"></div>
                                            </div>
                                        </li>
                                    </ul> -->
                                    <ul class="product-features list-unstyled">
                                        <li> <span>{{__('common.code')}} : {{$product->code}}</span></li>
                                        <li>
                                    </ul>
                                </div>
                                <hr />
                                <small class="text-success">*
                                    @if(app()->getLocale()=='ar')
                                    {{ $product->duration_received_ar }}
                                    @else
                                    {{ $product->duration_received_ar }}
                                    @endif
                                </small>
                                <div class="d-flex flex-column flex-sm-row pt-1">
                                    <form id="FormCreateProduct" action="{{ route('store_product')}}" method="post" style="width:100%;">
                                        @csrf
                                        <input name="product_id" value="{{$product->id}}" type="hidden" />
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-6">
                                                <div class="form-group">
                                                    <label for="account-name">{{__('common.code')}}</label>
                                                    <input class="form-control" id="code" placeholder="{{__('common.code')}}" name="code" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-xs-6">
                                                <button class="btn btn-primary btn-cart mr-0 mr-sm-1 mb-1 mb-sm-0" type="submit" style="margin-top: 23px;" id="create_product_btn">
                                                    <i data-feather="shopping-cart" class="mr-50"></i>
                                                    <span class="">{{__('common.add_new_product')}}</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- app e-commerce details end -->

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
<!-- <script>
    $(document).ready(function() {
        $(document).on("click", "#create_product_btn", function() {
            let form = $(this.form);
            console.log(form)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var postData = new FormData(this.form);
            $.ajax({
                url: "{{ route('store_product')}}",
                type: "POST",
                data: postData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.message === 'Success') {
                        document.getElementById("FormCreateProduct").reset();
                    }
                }

            });
        });
    });
</script> -->
@endsection