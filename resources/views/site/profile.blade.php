@extends('layouts.site')
@section('style_sheet')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
@endsection
@section('css')
@endsection
@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="side_bar p-10">
                <img src="{{asset('public/site/assets/images/image 4.png')}}" alt="" />
                <h3 class="pb-3">Hello hend !</h3>
                <div id="accordion">
                    <ul class="nav nav-tabs tabs-left sideways">
                        <li class="active pb-3">
                            <a href="#home-v" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/Orders.png')}}" class="images-side-bar" alt="" />
                                Orders

                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#profile-v" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/Addresses.png')}}" class="images-side-bar" alt="" />
                                Addresses
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#balance" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/balance.png')}}" class="images-side-bar" alt="" />
                                Balance
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#return" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/return.png')}}" class="images-side-bar" alt="" />
                                Return Policy
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#gift" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/Vector.png')}}" class="images-side-bar" alt="" />
                                Gifts
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#coupons" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/Coupons.png')}}" class="mx-0 images-side-bar" alt="" />
                                Coupons
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#points" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/points.png')}}" class="images-side-bar" alt="" />
                                Points
                            </a>
                        </li>
                        <div class="c-line-center c-theme-bg mb-4"></div>
                        <li class="pb-3">
                            <a href="#Profile" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/image 7.png')}}" class="images-side-bar" alt="" />
                                Profile
                            </a>
                        </li>
                        <li class="pb-3">
                            <a href="#Logout" data-toggle="tab">
                                <img src="{{asset('public/site/assets/images/image 8.png')}}" class="images-side-bar" alt="" />
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-12">
            <div class="tab-content">
                <div class="tab-pane active" id="home-v">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h4>All Orders</h4>
                                </div>
                                <div class="col-lg-4">
                                    <select class="form-control">
                                        <option>Filter by:</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <input class="form-control" placeholder="Search" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-paginate-orders">
                            <!-- Pagination -->
                            <a>
                                <img src="{{asset('public/site/assets/images/download.png')}}" alt="" />
                            </a>
                        </div>
                    </div>
                    <table class="table table_orders table-striped mt-5 pt-3" id="all_orders">
                        <thead>
                            <tr>
                                <th>ID number</th>
                                <th>Time</th>
                                <th>Products</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" onclick="show_details_order()" alt="" />Underway</td>
                            </tr>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" alt="" />Underway</td>
                            </tr>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" alt="" />Underway</td>
                            </tr>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" alt="" />Underway</td>
                            </tr>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" alt="" />Underway</td>
                            </tr>
                            <tr>
                                <td>#025554</td>
                                <td>20/1/2022</td>
                                <td>
                                    <img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" />Flower
                                    Flanner
                                </td>
                                <td><img src="{{asset('public/site/assets/images/view.png')}}" alt="" />Underway</td>
                            </tr>
                        </tbody>
                    </table>
                    <div id="details_order">
                        <div class="row row_addresses_details mt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h5 class="heading_details p-3">Information
                                            Order:</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="heading_details p-3 text-secondary">Order No: 00025
                                        </h5>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5 class="heading_details p-3 text-secondary">Date: 25/1/2202 | PM 12:00</h5>
                                    </div>
                                    <div class="col-lg-2 text-end col-status">
                                        <h6>Complete</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row addresses_details   p-3 bg-white">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 col-address">
                                        <h5>Shipping Address</h5>
                                        <h6>Hend T Dreamly</h6>
                                        <h6>Jeddah-Saudi Arabia</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Mobile</label>
                                    <input type="text" class="form-control" disabled placeholder="+966 0259 66666">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row addresses_details   p-3 bg-white">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 col-address">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h5>Vendor ID</h5>
                                                <h6>Se13666616</h6>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>Seller Rating</h5>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center pt-3">
                                <button class="btn btn_site"><i class="fa-solid fa-comment-dots text-white"></i>Start A Chat With The Seller</button>
                            </div>
                        </div>


                        <div class="row row_addresses_details mt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h5 class="heading_details p-3">Details
                                            Order:</h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="heading_details p-3 text-secondary">Order No: 00025
                                        </h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h5 class="heading_details p-3 text-secondary">Date | 25/1/2202</h5>
                                    </div>
                                    <div class="col-lg-3 text-end col-status">
                                        <h6>Complete</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row addresses_details   p-3 bg-white">
                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="col-lg-12 col-invoice">
                                        <h5>Invoice Summary</h5>
                                    </div>
                                    <table class="table table_orders table-striped mt-2 pt-3" id="all_orders">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Order Details</th>
                                                <th>Qty</th>
                                                <th>Price</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{asset('public/site/assets/images/pro_order.png')}}" height="50px" width="50px" alt="" /></td>
                                                <td>Flower Flanner</td>
                                                <td>Flower Flanner Flower Flanner</td>

                                                <td style="color: #E02626;font-weight: bold;">
                                                    × 2
                                                </td>
                                                <td style="color: #E02626;font-weight: bold;">50.00 SAR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="row row_delivery">
                                        <div class="col-lg-6 col-12 pt-3">
                                            <img src="{{asset('public/site/assets/images/recived_time.png')}}" alt="" />
                                            <strong>Delivery time:</strong>
                                            <span>Delivered on Friday, Feb 12</span>
                                        </div>
                                        <div class="col-lg-6 col-12 text-end">
                                            <button class="btn btn-danger mt-2"><i class="fa-solid fa-comment-dots text-white"></i>Contact support</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row_addresses_details mt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="heading_details p-3">Payment method:</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row addresses_details   p-3 bg-white">
                            <div class="col-lg-2 col-4 pt-2">
                                <h5>Paid by:</h5>
                            </div>
                            <div class="col-lg-10 col-8">
                                <img src="{{asset('public/site/assets/images/Mada-01 1.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="row row_addresses_details mt-3">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5 class="heading_details p-3">Payment Summary:</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row addresses_details bg-white">
                            <div class="col-lg-12">
                                <table class="table table-borderless table_details">

                                    <tbody>
                                        <tr>
                                            <th scope="row">order value:</th>

                                            <td>250 SAR</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">value added tax:</th>

                                            <td>2.5 SAR</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">discount value:</th>

                                            <td>20 SAR</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Extra discount:</th>

                                            <td>30 SAR</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Shipping fee:</th>

                                            <td>Free</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="row" style="color:#369D0C ;">Total:</th>

                                            <td style="color:#369D0C ;">280 SAR</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <div class="col-lg-12 mt-3">
                            <button class="btn btn-light" onclick="details_back()">
                                Back
                            </button>
                        </div>
                    </div>
                </div>


                <div class="tab-pane" id="profile-v">
                    <div class="row">
                        <div class="col-lg-9">
                            <h4>Addresses</h4>
                        </div>
                        <div class="col-lg-3 col-paginate-orders">
                            <button class="btn btn_site">
                                Add New Address
                            </button>
                        </div>
                    </div>
                    <div class="row row_addresses_details mt-3">
                        <div class="col-lg-12">
                            <h5 class="heading_details p-3"><i class="fa-solid fa-location-dot"></i><span>Location
                                    information</span></h5>
                        </div>
                    </div>
                    <div class="row addresses_details p-3 bg-white">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h6 class="">Kingdom Saudi Arabia</h6>
                                    <h6>Postal code: 0226</h6>
                                    <span class="actions_address"><i class="fa-solid fa-pen m-2"></i><i class="fa-solid fa-trash m-2"></i></span>
                                </div>
                                <div class="col-lg-7">
                                    <div class="block_address">
                                        <div class="row">
                                            <div class="col-lg-5 col-5">
                                                <img src="{{asset('public/site/assets/images/addresses1.png')}}" alt="" />
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <h6 class="m-0">Saudi Arabia</h6>
                                                <small>Riyadh _ Arab mall</small>
                                                <p><i class="fa-solid fa-location-dot"></i><span>10 Mtr Left</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile">
                                <label>Mobile</label>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+ 966</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="+966 8754 968" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-4">
                                    <label>Address:</label>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Home
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Work
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-4">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="email" class="form-control" placeholder="Nour Jouda">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleInputEmail1">Second Name</label>
                                <input type="email" class="form-control" placeholder="Jouda Jouda">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-lg-12 text-end">
                            <button class="btn btn_site">Save</button>
                            <button type="button" class="btn btn-light">Back</button>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="balance">
                    <div class="row">
                        <div class="col-lg-3">
                            <h4>Balance</h4>
                        </div>
                        <div class="col-lg-7 col-balance">
                            <h5>Available Balance</h5>
                            <span>600 SAR</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="">
                            <ul class="nav bg-light">
                                <li class="nav-item active">
                                    <a class="nav-link link-black active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" href="#"><img src="{{asset('public/site/assets/images/wallet.png')}}" class="px-2" alt= />Balance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-black" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" href="#"><img src="{{asset('public/site/assets/images/credit-card.png')}}" class="px-2" alt= />Cards</a>
                                </li>

                            </ul>

                            <div class="tab-content" id="tabContent">
                                <div class="tab-pane  fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="">
                                            <ul class="nav bg-white text-center mt-3">
                                                <li class="nav-item">
                                                    <a class="nav-link link-secondary active" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments" href="#">Payments</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link link-secondary" id="deposit-tab" data-bs-toggle="tab" data-bs-target="#deposit" href="#">Returns</a>
                                                </li>

                                            </ul>

                                            <div class="tab-content" id="tabContent">
                                                <div class="tab-pane  fade show active" id="payments" role="tabpanel" aria-labelledby="payments-tab">
                                                    <table class="table table_orders table-striped mt-5 pt-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Order No.</th>
                                                                <th>Time Operation</th>
                                                                <th>Value Operation</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                                                    <table class="table table_orders table-striped mt-5 pt-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Order No.</th>
                                                                <th>Time Operation</th>
                                                                <th>Value Operation</th>
                                                                <th>Status</th>
                                                                <th>Return to</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                                <td>****</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                                <td>****</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                                <td>****</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                                <td>****</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15616525</td>
                                                                <td>20/1/2022</td>
                                                                <td>
                                                                    600 SAR
                                                                </td>
                                                                <td>Complete</td>
                                                                <td>****</td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-danger mt-4"><i class="fa-solid fa-comment-dots text-white"></i> Contact support</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    <div class="row mb-5 mt-3">
                                        <div class="col-lg-6  mt-3 ">
                                            <button class="btn btn_site" style="width:70%;height: 48px;" data-toggle="modal" data-target="#new_card"><i class="fa-solid fa-plus px-2"></i>Add New Card</button>
                                        </div>
                                        <div class="col-lg-6  mt-3 text-end col-ways-payments">
                                            <img src="{{asset('public/site/assets/images/Mada.png')}}" alt="" />
                                            <img src="{{asset('public/site/assets/images/ApplePay.png')}}" alt="" />
                                            <img src="{{asset('public/site/assets/images/Paypal.png')}}" alt="" />
                                            <img src="{{asset('public/site/assets/images/Mastercard.png')}}" alt="" />
                                            <img src="{{asset('public/site/assets/images/Stripe.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-lg-4  mt-2">
                                            <div class="block_card p-3">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <h6 class="fw-bold">Current Balance</h6>
                                                        <h5 class="fw-bold mb-3">500 SAR</h5>
                                                        <small class="">5282 3456 7890 1289</small>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-center">
                                                        <img src="{{asset('public/site/assets/images/Mastercard2.png')}}" class="d-block my-auto images_cards" alt="" />
                                                        <small>25/1</small>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4  mt-2">
                                            <div class="block_card p-3">
                                                <div class="row">
                                                    <div class="col-lg-7 col-8">
                                                        <h6 class="fw-bold">Current Balance</h6>
                                                        <h5 class="fw-bold mb-3">500 SAR</h5>
                                                        <small class="">5282 3456 7890 1289</small>
                                                    </div>
                                                    <div class="col-lg-5 col-4 text-center">
                                                        <img src="{{asset('public/site/assets/images/Visa.png')}}" class="d-block my-auto images_cards" alt="" />
                                                        <small>25/1</small>

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
                <div class="tab-pane" id="return">
                    <div class="row row_policy">
                        <div class="col-lg-12">
                            <h4>Return Policy</h4>
                        </div>
                        <div class="col-lg-7  col-12">
                            <p>This Return Policy policy has been compiled to better serve those who are concerned
                                with how their 'Personally identifiable information' (PII) is being used online.</p>
                        </div>
                        <div class="col-lg-5  col-12">
                            <img src="{{asset('public/site/assets/images/policy.png')}}" alt="" />
                        </div>
                        <div class="col-lg-12 col-12 mt-4">
                            <small>Updated Feb 7.2022</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row row_policy_para">
                        <div class="col-lg-12 col-12">
                            <p>This privacy policy has been compiled to better serve those who are concerned with
                                how their 'Personally identifiable information' (PII) is being used online. PII, as
                                used in US privacy law and information security, is information that can be used on
                                its own or with other information to identify, contact, or locate a single person,
                                or to identify an individual in context. Please read our privacy policy carefully to
                                get a clear understanding of how we collect, use, protect or otherwise handle your
                                Personally Identifiable Information in accordance with our website
                                This privacy policy has been compiled to better serve those who are concerned with
                                how their 'Personally identifiable information' (PII) is being used online. PII, as
                                used in US privacy law and information security, is information that can be used on
                                its own or with other information to identify, contact, or locate a single person,
                                or to identify an individual in context. Please read our privacy policy carefully to
                                get a clear understanding of how we collect, use, protect or otherwise handle your
                                Personally Identifiable Information in accordance with our website.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="gift">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h4>Gifts</h4>
                        </div>

                        <div class="col-lg-6  col-12" id="block-gift">
                            <div class="first_block_gift" onclick="show_first_block_gift()">
                                <img src="{{asset('public/site/assets/images/f_gift.png')}}" alt="">
                                <h4 class="fw-bold mt-2">Give</h4>
                                <h6>Love is accessible to all, but charity is a test of the heart</h6>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12" id="s-block-gift">
                            <div class="second_block_gift" onclick="show_second_block_gift()">
                                <img src="{{asset('public/site/assets/images/s_gift.png')}}" alt="">
                                <h4 class="fw-bold mt-2">Give to the one you love</h4>
                                <h6>Express your love with a gift</h6>
                            </div>
                        </div>

                        <div class="col-lg-12" id="block-gift-form">
                            <div class="block-form-gift text-center">
                                <img src="{{asset('public/site/assets/images/f_gift.png')}}" alt="">

                                <h4 class="fw-bold mt-2">Give</h4>
                                <h6>Love is accessible to all, but charity is a test of the heart</h6>
                            </div>

                            <form>
                                <div class="mb-4">
                                    <label for="" class="form-label">Coupon value</label>
                                    <input type="text" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Sender Name</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="check_gift" onclick="check_box_gift()">
                                    <label class="form-check-label" for="check_gift">Do you want us to send it for
                                        you?</label>
                                </div>
                                <div id="s-section-gift">
                                    <div class="mb-4">
                                        <label for="" class="form-label">Recive Name</label>
                                        <input type="text" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="" class="form-label">Recive Number</label>
                                        <input type="text" class="form-control" id="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn_site">Pay Now</button>
                                <a class="btn btn-light mx-2" onclick="back()">Back</a>

                            </form>
                        </div>

                        <div class="col-lg-12" id="s-block-gift-form">

                            <div class="block-form-gift text-center">
                                <img src="{{asset('public/site/assets/images/gift_form.png')}}" alt="" />
                                <h4 class="fw-bold mt-2">Give to the one you love</h4>
                                <h6>Express your love with a gift</h6>
                            </div>
                            <form>
                                <div class="mb-4">
                                    <label for="" class="form-label">Coupon value:</label>
                                    <input type="text" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">The name that will appear on the
                                        voucher:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="mb-4">
                                    <input type="file" class="custom-file-input">
                                </div>

                                <button type="submit" class="btn btn_site">Pay Now</button>
                                <a class="btn btn-light mx-2" onclick="back()">Back</a>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Profile">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h4>Profile</h4>
                        </div>
                        <div class="col-lg-12 mb-3 mt-3">
                            <h5>Personal information</h4>
                        </div>
                        <div class="col-lg-12 mb-3 mt-3">
                            <form>
                                <div class="mb-4">
                                    <label for="" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <button type="submit" class="btn btn_site">Update</button>
                            </form>
                        </div>
                        <div class="col-lg-12 mb-3 mt-3">
                            <h5>Privacy</h4>
                        </div>
                        <div class="col-lg-12 mb-3 mt-3">
                            <form>
                                <div class="mb-4">
                                    <label for="" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="" aria-describedby="">
                                </div>
                                <div class="mb-4">
                                    <label for="" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="">
                                    <small data-toggle="modal" data-target="#change_password">Change
                                        Password?</small>
                                </div>
                                <button type="submit" class="btn btn_site">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="coupons">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h4>Coupons</h4>
                        </div>
                        <div class="items_cart mb-3">
                            <div class="row">
                                <div class="col-lg-3 col-12 p-2">
                                    <img src="{{asset('public/site/assets/images/image_card_coupon.png')}}" class="image_item_cart" alt="" />
                                </div>
                                <div class="col-lg-6 col-12 p-3">
                                    <h4>Coupon Description :</h4>
                                    <p>Children's clothing only jackets, tops, shoes Children's clothing only
                                        jackets, tops, shoes</p>
                                </div>
                                <div class="col-lg-3 col-12 col-item-cart pt-3">
                                    <h2>%30 OFF</h2>
                                    <label>coupon code :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="2544414" aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mt-2" id="basic-addon1"><i class="fa-solid fa-copy"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="items_cart mb-3 ">
                            <div class="row">
                                <div class="col-lg-3 col-12 p-2">
                                    <img src="{{asset('public/site/assets/images/image_card_coupon.png')}}" class="image_item_cart" alt="" />
                                </div>
                                <div class="col-lg-6 col-12 p-3">
                                    <h4>Coupon Description :</h4>
                                    <p>Children's clothing only jackets, tops, shoes Children's clothing only
                                        jackets, tops, shoes</p>
                                </div>
                                <div class="col-lg-3 col-12 col-item-cart pt-3">
                                    <h2>%30 OFF</h2>
                                    <label>coupon code :</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="2544414" aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mt-2" id="basic-addon1"><i class="fa-solid fa-copy"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="points">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <h4>Points</h4>
                        </div>
                        <div class="row text-center">
                            <h4>Available Points Balance</h4>
                            <h6 data-toggle="modal" data-target="#know_more">Know More<i class="fa-solid fa-exclamation"></i></h6>

                            <div class="">
                                <ul class="nav bg-white text-center mt-3">
                                    <li class="nav-item">
                                        <a class="nav-link link-secondary active" id="added-tab" data-bs-toggle="tab" data-bs-target="#added" href="#">History Added
                                            Points</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link link-secondary" id="coming-tab" data-bs-toggle="tab" data-bs-target="#coming" href="#">History Coming Points</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="tabContent">
                                    <div class="tab-pane  fade show active" id="added" role="tabpanel" aria-labelledby="added-tab">
                                        <table class="table table_orders table-striped mt-5 pt-3">
                                            <thead>
                                                <tr>
                                                    <th>Operation No.</th>
                                                    <th>Order No.</th>
                                                    <th>Sender</th>
                                                    <th>Points Earned</th>
                                                    <th>Operation Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td>Buying Process</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="coming" role="tabpanel" aria-labelledby="coming-tab">
                                        <table class="table table_orders table-striped mt-5 pt-3">
                                            <thead>
                                                <tr>
                                                    <th>Operation No.</th>
                                                    <th>Order No.</th>
                                                    <th>Sender</th>
                                                    <th>Points Earned</th>
                                                    <th>Operation Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>
                                                <tr>
                                                    <td>15616525</td>
                                                    <td>35252</td>
                                                    <td>
                                                        ID21445
                                                    </td>
                                                    <td>150 Points</td>
                                                    <td><span class="fw-bold text-black">On hold</span> until order
                                                        complete</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row row_no_order">
                    <div class="col-lg-12">
                        <img src="{{asset('public/site/assets/images/image 6.png')}}" alt=""/>
                        <h6 class="mt-4">No section has been selected yet</h6>
                        <button class="btn mt-4">CONTINUE SHOPPING</button>
                    </div>
                </div> -->
        </div>
    </div>
</div>

 <!-- New Card -->
 <div class="modal fade" id="new_card">
        <div class="modal-dialog modal_new_card">
            <div class="modal-content  p-5">

                <div class="row mb-5 mt-3">
                    <div class="col-lg-12  mt-3 text-center">
                        <img src="{{asset('public/site/assets/images/Mada.png')}}" alt="" />
                        <img src="{{asset('public/site/assets/images/ApplePay.png')}}" alt="" />
                        <img src="{{asset('public/site/assets/images/Paypal.png')}}" alt="" />
                        <img src="{{asset('public/site/assets/images/Mastercard.png')}}" alt="" />
                        <img src="{{asset('public/site/assets/images/Stripe.png')}}" alt="" />
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-center mt-4">Add New Card</h3>
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="">Name on card</label>
                                    <input type="text" class="form-control" placeholder="HHHH HHHHHH">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="">Card number</label>
                                    <input type="text" class="form-control" placeholder="0000  0000  0000000  000">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="form-group mb-4">
                                    <label for="">Expiry date</label>
                                    <input type="date" class="form-control" placeholder="02/4">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="form-group mb-4">
                                    <label for=""></label>CVV</label>
                                    <input type="password" class="form-control" placeholder="02/4">
                                    <small id="" class="form-text text-muted"></small>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12 text-center">
                                <button class="btn btn_site add_card">Add Card</button>
                            </div>
                            <div class="form-group form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Do you want to save the card for
                                    purchases ?</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Change Password -->
<div class="modal fade" id="change_password">
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">

            <div class="row mt-3">
                <div class="col-lg-12  mt-3 text-center">
                    <img src="{{asset('public/site/assets/images/change_password.png')}}" alt="" />
                </div>
                <div class="col-lg-12 text-center">
                    <h3 class="text-center mt-4">Change Password</h3>
                    <small>Enter the old password and the new password</small>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="form-group mb-4 mx-5">
                                <label for="">Old Password</label>
                                <input type="password" class="form-control" placeholder="">
                                <small id="" class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12 ">
                            <div class="form-group mb-5 mx-5">
                                <label for="">New Password</label>
                                <input type="password" class="form-control" placeholder="">
                                <small id="" class="form-text text-muted"></small>
                            </div>
                        </div>


                        <div class="col-lg-6 col-12 text-center" style="padding-right: 0px;">
                            <button class="btn btn_site change_password_btn">save</button>
                        </div>
                        <div class="col-lg-6 col-12 text-center" style="padding-left: 0px;">
                            <button class="close btn btn-light change_password_btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Know More -->
<div class="modal fade" id="know_more">
    <div class="modal-dialog" style="max-width: 50%;">
        <div class="modal-content">

            <div class="row mt-3">
                <div class="col-lg-12  mt-3 text-center">
                    <img src="{{asset('public/site/assets/images/s-points.png')}}" alt="" />
                </div>
                <div class="col-lg-12 text-center">
                    <h3 class="text-center mt-4">What are 5Khamsat points?</h3>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 col-12 mx-5">
                            <ol class="fw-bold my-3">
                                <li>You can take advantage of the points in the purchase of 5Khamsat</li>
                                <li>You cannot request to transfer points to balance and transfer to a bank account
                                </li>
                                <li>Points are limited to the 5Khamsat shopping site</li>
                            </ol>
                        </div>
                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>To find out the calculation of points in five fives, please <span>"click
                                    here"</span> or enter the help page and enter the system</h6>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- JS -->
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></Script>
<Script src="    https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></Script>
<!-- End JS -->
<script>
    function show_first_block_gift() {
        $('#block-gift').hide(500);
        $('#s-block-gift').hide(500);
        $("#block-gift-form").css("display", "block");
        if ($("#check_gift").is(':checked')) {
            $("#s-section-gift").css("display", "block");
        }
    }

    $('#check_gift').click(function() {

        if ($("#check_gift").is(':checked')) {
            $("#s-section-gift").css("display", "block");
        } else {
            $("#s-section-gift").css("display", "none");
        }
    });

    function back() {
        $('#block-gift').show();
        $('#s-block-gift').show();
        $("#block-gift-form").css("display", "none");
        $("#s-block-gift-form").css("display", "none");

    }



    function show_second_block_gift() {
        $('#block-gift').hide(500);
        $('#s-block-gift').hide(500);
        $("#s-block-gift-form").css("display", "block");

    }

    function show_details_order() {
        $('#all_orders').hide();
        $("#details_order").fadeIn();
    }

    function details_back() {
        $('#all_orders').fadeIn();
        $("#details_order").hide();

    }
</script>
@endsection