@extends('layouts.site')
@section('style_sheet')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection
@section('css')
    <style>
        .form-wizard .form-wizard-steps li {
            width: 33%;
            float: left;
            position: relative;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="heading_cart">Cart Shopping</h1>
    </div>
    <div class="container">
        <div class="cart pt-5">
            <h2>Your Cart items</h2>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="items_cart p-3">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <img src="{{ asset('site/assets/images/item.png') }}" class="image_item_cart"
                                    alt="" />
                            </div>
                            <div class="col-lg-6 col-7">
                                <h3>Flower Flanner Check Jacke</h3>
                                <small>Order within 10 hours</small>
                                <div class="row pt-1 row_cart_items">
                                    <div class="col-lg-1 col-3">
                                        <img src="{{ asset('site/assets/images/shipping.png') }}" alt="" />
                                    </div>
                                    <div class="col-lg-11 col-9">
                                        <p class="m-0 free">Free Shopping</p>
                                    </div>
                                    <div class="col-lg-1 col-3">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="col-lg-11 col-9">
                                        <p class="m-0">Sold by: <span>Hend Talal</span></p>
                                    </div>
                                    <div class="col-lg-1 col-3">
                                        <img src="{{ asset('site/assets/images/cart.png') }}" alt="" />
                                    </div>
                                    <div class="col-lg-11 col-9">
                                        <p class="m-0">1 year warranty</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-5 col-item-cart">
                                <h2>$30 SAR</h2>
                                <input type="number" placeholder="1" name="quantity" class="form-control mt-3 mb-4">
                                <span>Remove </span><i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="items_cart p-3">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <h4>Order Summary</h4>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Your Code"
                                        aria-label="Your Code" aria-describedby="basic-addon1">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Apply</span>
                                    </div>
                                </div>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Total products</th>
                                            <td>$90</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Shopping</th>
                                            <td>$0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Total ( value added tax )</th>
                                            <td>$90</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-2 col-2">
                                        <img src="{{ asset('site/assets/images/image_3.png') }}" alt="" />
                                    </div>
                                    <div class="col-lg-10 col-10">
                                        <h6>Make 3 interest-free payments. Available
                                            for orders above $20. </h6>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <h5></h5>
                                        <div class="block-cart pt-2 mt-3">
                                            <span>Available Points Balance</span>
                                            <div class="row pt-3">
                                                <div class="col-lg-6 col-6">
                                                    <h6>3000 Points</h6>
                                                    <p class="m-1">Your available</p>
                                                    <p class="m-1">200 points </p>
                                                </div>
                                                <div class="col-lg-6 col-6 col-points">
                                                    <h6>2000 SAR</h6>
                                                    <button class="btn">Apply</button>
                                                </div>
                                            </div>
                                            <button class="btn checkout_btn" type="button" data-toggle="modal"
                                                data-target="#myModal">Checkout</button>

                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal_checkout">
                                                    <div class="modal-content">
                                                        <section class="wizard-section">
                                                            <div class="row no-gutters">

                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-wizard cart_steps">
                                                                        <form action="" method="post" role="form">
                                                                            <div class="form-wizard-header">
                                                                                <ul
                                                                                    class="list-unstyled form-wizard-steps clearfix">
                                                                                    <li class="active"><span>1</span>
                                                                                        <h6>Shipping Address</h6>
                                                                                    </li>
                                                                                    <li><span>2</span>
                                                                                        <h6>Paying</h6>
                                                                                    </li>
                                                                                    <li><span>3</span>
                                                                                        <h6>Order completed</h6>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                            <fieldset class="wizard-fieldset show">

                                                                                <div
                                                                                    class="row row_addresses_details bg-white">
                                                                                    <div class="col-lg-12">
                                                                                        <h5 class="heading_details p-3"><i
                                                                                                class="fa-solid fa-location-dot"></i><span>Location
                                                                                                information</span></h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="row addresses_details mb-3 p-3 bg-white">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-5">
                                                                                                <h6 class="">Kingdom
                                                                                                    Saudi Arabia</h6>
                                                                                                <h6>Postal code: 0226</h6>
                                                                                                <span
                                                                                                    class="actions_address"><i
                                                                                                        class="fa-solid fa-pen m-2"></i><i
                                                                                                        class="fa-solid fa-trash m-2"></i></span>
                                                                                            </div>
                                                                                            <div class="col-lg-7">
                                                                                                <div class="block_address">
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-5">
                                                                                                            <img src="{{ asset('site/assets/images/addresses1.png') }}"
                                                                                                                alt="" />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-7">
                                                                                                            <h6
                                                                                                                class="m-0">
                                                                                                                Saudi Arabia
                                                                                                            </h6>
                                                                                                            <small>Riyadh _
                                                                                                                Arab
                                                                                                                mall</small>
                                                                                                            <p><i
                                                                                                                    class="fa-solid fa-location-dot"></i><span>10
                                                                                                                    Mtr
                                                                                                                    Left</span>
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mobile">
                                                                                            <label>Mobile</label>
                                                                                            <div
                                                                                                class="input-group mb-3 mt-3">
                                                                                                <div
                                                                                                    class="input-group-prepend">
                                                                                                    <span
                                                                                                        class="input-group-text cart_f_step"
                                                                                                        id="basic-addon1">+
                                                                                                        966</span>
                                                                                                </div>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    placeholder="+966 8754 968"
                                                                                                    aria-label="Username"
                                                                                                    aria-describedby="basic-addon1">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            Address:
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio1"
                                                                                                    type="radio">
                                                                                                <label
                                                                                                    for="radio1">Home</label>
                                                                                            </div>
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio2"
                                                                                                    type="radio">
                                                                                                <label
                                                                                                    for="radio2">Work</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group mb-4">
                                                                                            <label
                                                                                                for="exampleInputEmail1">First
                                                                                                Name</label>
                                                                                            <input type="email"
                                                                                                class="form-control"
                                                                                                placeholder="Nour Jouda">
                                                                                            <small id="emailHelp"
                                                                                                class="form-text text-muted"></small>
                                                                                        </div>
                                                                                        <div class="form-group mb-4">
                                                                                            <label
                                                                                                for="exampleInputEmail1">Second
                                                                                                Name</label>
                                                                                            <input type="email"
                                                                                                class="form-control"
                                                                                                placeholder="Jouda Jouda">
                                                                                            <small id="emailHelp"
                                                                                                class="form-text text-muted"></small>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="form-group clearfix">
                                                                                    <a href="javascript:;"
                                                                                        class="form-wizard-next-btn float-right">Next</a>
                                                                                </div>
                                                                            </fieldset>
                                                                            <fieldset class="wizard-fieldset s_step_cart">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group">
                                                                                            <h6
                                                                                                class="mb-3 mx-3 text-dark">
                                                                                                Choose Card:</h6>
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio1"
                                                                                                    type="radio">

                                                                                                <label for="radio1">
                                                                                                    <div class="row pt-2">
                                                                                                        <div
                                                                                                            class="col-lg-5 col-6 pt-2">
                                                                                                            <h6>***** ****
                                                                                                                **** 1289
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-3 col-3">
                                                                                                            <img
                                                                                                                src="{{ asset('site/assets/images/s_step_Mastercard.png') }}" />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-4 col-3 pt-2">
                                                                                                            <h6>25/1</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio2"
                                                                                                    type="radio">
                                                                                                <label for="radio2">
                                                                                                    <div class="row pt-2">
                                                                                                        <div
                                                                                                            class="col-lg-5 col-6 pt-2">
                                                                                                            <h6>***** ****
                                                                                                                **** 1289
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-3 col-3">
                                                                                                            <img
                                                                                                                src="{{ asset('site/assets/images/s_card_mada.png') }}" />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-4 col-3 pt-2">
                                                                                                            <h6>25/1</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio3"
                                                                                                    type="radio">
                                                                                                <label for="radio3">
                                                                                                    <div class="row pt-2">
                                                                                                        <div
                                                                                                            class="col-lg-5 col-6 pt-2">
                                                                                                            <h6>***** ****
                                                                                                                **** 1289
                                                                                                            </h6>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-3 col-3">
                                                                                                            <img
                                                                                                                src="{{ asset('site/assets/images/visa 1.png') }}" />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-4 col-3 pt-2">
                                                                                                            <h6>25/1</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <div class="wizard-form-radio">
                                                                                                <input name="radio-name"
                                                                                                    id="radio4"
                                                                                                    type="radio">

                                                                                                <label for="radio4"
                                                                                                    class="px-2">
                                                                                                    <div class="row pt-2">
                                                                                                        <div
                                                                                                            class="col-lg-2 col-2">
                                                                                                            <img src="{{ asset('site/assets/images/invoice.png') }}"
                                                                                                                alt="" />
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="col-lg-10  col-10 pt-1">
                                                                                                            <h6>Voucher</h6>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h6
                                                                                            class="mb-3 mx-3 mt-4 text-dark">
                                                                                            Enter the voucher number:</h6>
                                                                                        <div
                                                                                            class="form-group inputs_voucher">
                                                                                            <input class="form-control"
                                                                                                placeholder="0">
                                                                                            <input class="form-control"
                                                                                                placeholder="0">
                                                                                            <input class="form-control"
                                                                                                placeholder="0">
                                                                                            <input class="form-control"
                                                                                                placeholder="0">
                                                                                            <input class="form-control"
                                                                                                placeholder="0">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="items_cart p-3">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 col-12">
                                                                                                    <h4>Order Summary</h4>

                                                                                                    <table
                                                                                                        class="table table-borderless">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Discount
                                                                                                                </th>
                                                                                                                <td>$90</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Extra
                                                                                                                    Discount
                                                                                                                </th>
                                                                                                                <td>$90</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Total
                                                                                                                    products
                                                                                                                </th>
                                                                                                                <td>$90</td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Shopping
                                                                                                                </th>
                                                                                                                <td>$0</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <hr>
                                                                                                    <table
                                                                                                        class="table table-borderless">
                                                                                                        <tbody>
                                                                                                            <tr>
                                                                                                                <th
                                                                                                                    scope="col">
                                                                                                                    Total (
                                                                                                                    value
                                                                                                                    added
                                                                                                                    tax )
                                                                                                                </th>
                                                                                                                <td>$90</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>

                                                                                                    <div
                                                                                                        class="input-group mb-3">
                                                                                                        <input
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            disabled
                                                                                                            placeholder="Ship To"
                                                                                                            aria-label="Username"
                                                                                                            aria-describedby="basic-addon1">
                                                                                                        <div
                                                                                                            class="input-group-prepend">
                                                                                                            <span
                                                                                                                class="input-group-text text-white"
                                                                                                                id="basic-addon1">Edit</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div
                                                                                                            class="col-lg-12">
                                                                                                            <h6>Hend Dreamly
                                                                                                            </h6>
                                                                                                            <h6>4847 _
                                                                                                                Riyadh,Saudi
                                                                                                                Arabia </h6>
                                                                                                            <h6>+966 222222
                                                                                                                00000</h6>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div
                                                                                            class="form-group fg-s-step-card mt-5">
                                                                                            <div class="custom_radio">
                                                                                                <input type="radio"
                                                                                                    id="featured-2"
                                                                                                    name="featured"><label
                                                                                                    for="featured-2"><img
                                                                                                        src="{{ asset('site/assets/images/img-11.png') }}"
                                                                                                        alt="" />Leave
                                                                                                    At My Door</label>
                                                                                                <h6>Your delivery will be
                                                                                                    left at your door and a
                                                                                                    photo will be sent to
                                                                                                    you as confirmation.
                                                                                                    Valid on prepaid orders
                                                                                                    only</h6>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group clearfix">
                                                                                    <a href="javascript:;"
                                                                                        class="form-wizard-previous-btn float-left">Previous</a>
                                                                                    <a href="javascript:;"
                                                                                        class="form-wizard-next-btn float-right">Next</a>
                                                                                </div>
                                                                            </fieldset>
                                                                            <fieldset class="wizard-fieldset">
                                                                                <div class="items_cart p-3 mb-5">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-3 col-12">
                                                                                            <img src="{{ asset('site/assets/images/item.png') }}"
                                                                                                class="image_item_cart"
                                                                                                alt="" />
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-8">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-6">
                                                                                                    <span>Order No:
                                                                                                        +026949494984</span>
                                                                                                </div>
                                                                                                <div class="col-lg-6">
                                                                                                    <span>Complete Order:
                                                                                                        2022/2/5 | 12:00 PM
                                                                                                </div>
                                                                                            </div>
                                                                                            <h3>Flower Flanner Check Jacke
                                                                                            </h3>
                                                                                            <small>Order within 10
                                                                                                hours</small>
                                                                                            <div
                                                                                                class="row pt-1 row_cart_items">
                                                                                                <div
                                                                                                    class="col-lg-1 col-3">
                                                                                                    <img src="{{ asset('site/assets/images/shipping.png') }}"
                                                                                                        alt="" />
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-11 col-9">
                                                                                                    <p class="m-0 free">
                                                                                                        Free Shopping</p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-1 col-3">
                                                                                                    <i
                                                                                                        class="fa-solid fa-user"></i>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-11 col-9">
                                                                                                    <p class="m-0">Sold
                                                                                                        by: <span>Hend
                                                                                                            Talal</span></p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-1 col-3">
                                                                                                    <img src="{{ asset('site/assets/images/cart.png') }}"
                                                                                                        alt="" />
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-lg-11 col-9">
                                                                                                    <p class="m-0">1
                                                                                                        year warranty</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-lg-3 col-4 col-item-cart">
                                                                                            <h2>$30 SAR</h2>
                                                                                            <h2>× 2</h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <h6>Ship To: Hend Dreamly 4847 _
                                                                                                Riyadh,Saudi Arabia +966
                                                                                                222222 00000</h6>
                                                                                            <table
                                                                                                class="table table-borderless">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="col">
                                                                                                            Code</th>
                                                                                                        <td>02155</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="col">
                                                                                                            Total products
                                                                                                        </th>
                                                                                                        <td>$90</td>
                                                                                                    </tr>

                                                                                                    <tr>
                                                                                                        <th scope="col">
                                                                                                            Shopping</th>
                                                                                                        <td>$0</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <hr>
                                                                                            <table
                                                                                                class="table table-borderless">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="col">
                                                                                                            Total ( value
                                                                                                            added tax )</th>
                                                                                                        <td>$90</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <div
                                                                                                class="block_card_final_step">
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-lg-7 col-7">
                                                                                                        <h6
                                                                                                            class="text-dark">
                                                                                                            <strong>Current
                                                                                                                Balance</strong>
                                                                                                        </h6>
                                                                                                        <h4
                                                                                                            class="text-dark">
                                                                                                            <strong>500
                                                                                                                SAR</strong>
                                                                                                        </h4>
                                                                                                        <h6
                                                                                                            class="text-dark mt-5">
                                                                                                            5282 3456 7890
                                                                                                            1289</h6>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-5 col-5">
                                                                                                        <img src="{{ asset('site/assets/images/Visafinal.png') }}"
                                                                                                            alt="" />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>




                                                                                <div class="form-group clearfix">
                                                                                    <a href="javascript:;"
                                                                                        class="form-wizard-previous-btn float-left">Previous</a>
                                                                                    <a href="javascript:;"
                                                                                        class="form-wizard-next-btn float-right">Done</a>
                                                                                </div>
                                                                            </fieldset>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
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
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Steps -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('site/assets/js/steps.js') }}"></script>
@endsection
