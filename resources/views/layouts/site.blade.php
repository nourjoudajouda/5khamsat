<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5Khamsat</title>

    @if (app()->getLocale() == 'en')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/assets/images/logo.png') }}">
        @yield('style_sheet')

        <link rel="stylesheet" href="{{ asset('site/assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/owl.theme.default.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/media.css') }}">
    @endif

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/assets/images/logo.png') }}">
        @yield('style_sheet')

        <link rel="stylesheet" href="{{ asset('site/assets/css/all.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('site/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/owl.theme.default.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('site/assets/css/media.css') }}">
    @endif
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    @yield('css')
</head>

<body>
    <div class="mobile-menu">
        <div class="menu-mobile">
            <div class="mmenu">
                <ul>
                    <li>
                        <a href="index.html"><img src="{{ asset('site/assets/images/logo.png') }}" class=""
                                alt="" /></a>
                    </li>
                    <li>
                        <a href="#">Shop</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Earn extra income</a>
                    </li>
                    <li>
                        <a href="#">Open your store now</a>
                    </li>
                    <li>

                    </li>
                </ul>
                <div class="icon_mobile">
                    <a class="" href=""><i class="fa-solid fa-user"></i></a>
                    <a class="" href=""><i class="fa-regular fa-heart"></i></a>
                    <a class="" href=""><i class="fa-solid fa-cart-shopping"></i><span
                            class="badge badge-notify my-cart-badge"></span></a>
                </div>
            </div>
        </div>
        <div class="m-overlay"></div>
    </div>
    <header>
        <div class="container">
            <div class="head row d-flex justify-content-between align-items-center pt-3">
                <div class="icon col-lg-2 col-md-6 col-sm-12">
                    <a href="" class="text-white"><i class=" fa-brands fa-facebook-f"></i></a>
                    <a href="" class="text-white"><i class=" fa-brands fa-instagram"></i></a>
                    <a href="" class="text-white"><i class=" fa-brands fa-twitter"></i></a>
                    <a href="" class="text-white"><i class=" fa-brands fa-linkedin-in"></i></a>
                    <a href="" class="text-white"><i class="fa-solid fa-paper-plane"></i></a>
                </div>
                <div class="title col-lg-5">
                    <p class="m-0 text-white">FREE SHIPPING world wide for all orders over $50</p>
                </div>
                <div class="box d-flex col-lg-4 col-md-6 col-sm-12 top_nav">
                    <div class="location ">
                        <i class="text-white fa-solid fa-location-dot"></i>
                        <a href="" class="text-white">Store Location</a>
                    </div>
                    <div class="dropdown me-3">
                        <a class=" dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">USD ($) <i
                                class="ms-1 fa-solid fa-angle-down"></i></a>
                        <ul class="dropdown-menu bg-black p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item " href="#">EUR (€)</a></li>
                            <li><a class="dropdown-item " href="#">ILS (₪)</a></li>
                            <li><a class="dropdown-item " href="#">EGP (£)</a></li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a class=" dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (app()->getLocale() == 'en')
                                EN
                            @else
                                AR
                            @endif
                            <i class="ms-1 fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu bg-black p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item"
                                    href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">AR</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">En</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <nav class="mt-3">
        <div class="container pt-4">
            <div class="row ">
                <div class=" logo-search col-lg-6 col-md-12 ">
                    <div class="logo col-lg-2">
                        <img src="{{ asset('site/assets/images/logo.png') }}" alt="">
                    </div>
                    <div class="search col-lg-10">
                        <select class="">
                            <option class="" selected>All Categories</option>
                            <option class="" value="1">One</option>
                            <option class="" value="2">Two</option>
                            <option class="" value="3">Three</option>
                        </select>
                        <form class="">
                            <input class=" ps-xl-5 pe-xl-5 " type="" placeholder="Search Products">
                            <button class="" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>
                <div class=" box col-lg-6 col-md-12">
                    <button class="earn rounded d_media" type="submit">Earn extra income</button>
                    <button class="store rounded d_media" type="submit">Open your store now</button>
                    <div class="icon ">
                        <a class="" href=""><i class="fa-solid fa-user d_media"></i></a>
                        <a class="" href=""><i class="fa-regular fa-heart d_media"></i></a>
                        <a class="" href=""><i class="fa-solid fa-cart-shopping d_media"></i><span
                                class="badge badge-notify my-cart-badge d_media"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-4">
            <div class="box row">
                <div class="all col-lg-4 col-md-6">
                    <div class='menu  animated bounceInDown bg-dark'>
                        <ul>
                            <li class='sub-menu'><a href='#message'><i class="fa-solid fa-align-justify"></i> All
                                    Department<div class='fa-solid fa-angle-right right'></div>
                                    <ul class="drob position-absolute p-0">
                                        <li class="first"><a class="" href='#profile'>Profile</a></li>
                                        <li><a class="" href='#message'>Messages</a></li>
                                        <li class='sub-menu'><a href='#settings'>Settings<div
                                                    class='fa-solid fa-angle-right right'></div></a>
                                            <ul>
                                                <li><a href='#settings'>Account</a></li>
                                                <li><a href='#settings'>Profile</a></li>
                                                <li><a href='#settings'>Secruity &amp; Privacy</a></li>
                                                <li><a href='#settings'>Password</a></li>
                                                <li><a href='#settings'>Notification</a></li>
                                            </ul>
                                        </li>
                                        <li class='sub-menu'><a href='#message'>Help<div
                                                    class='fa-solid fa-angle-right right'></div>
                                            </a>
                                            <ul>
                                                <li><a href='#settings'>FAQ's</a></li>
                                                <li><a href='#settings'>Submit a Ticket</a></li>
                                                <li><a href='#settings'>Network Status</a></li>
                                            </ul>
                                        </li>
                                        <li><a href='#message'>Logout</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="nav col-lg-5 col-md-6 main_menu">
                    <li class="nav-item d_media">
                        <a class="nav-link active" aria-current="page" href="#">Home </a>
                    </li>
                    <li class="nav-item d_media">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item d_media">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item d_media">
                        <a class="nav-link ">Contact</a>
                    </li>
                </ul>
                <button type="button" class="hamburger is-closed">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
                <div class="call-us col-lg-3">
                    <i class="me-3 fa-solid fa-phone d_media"></i>
                    <p class="m-0 d_media">Call Us : +1 000 000 000</p>
                </div>

            </div>
        </div>
    </nav>

    @yield('content')


    <footer class=" pt-5 mt-5">
        <div class="container">
            <div class="row row_footer">
                <div class="col-xs-12 col-lg-2  col-md-5  logo">
                    <img class="d-block mb-3 text-muted logo_footer"
                        src="{{ asset('site/assets/images/logo1.png') }}" alt="">
                </div>
                <div class="col-xs-6 col-lg-4 col-md-7 col-sm-7   products">
                    <h5>Product</h5>
                    <ul class="product list-unstyled text-small d-flex">
                        <li><a class="" href="#">T-Shirts</a></li>
                        <li><a class="" href="#">Dresses</a></li>
                        <li><a class="" href="#">Best Seller</a></li>
                        <li><a class="" href="#">Women</a></li>
                        <li><a class="" href="#">Shirts</a></li>
                        <li><a class="" href="#">Jeans</a></li>
                        <li><a class="" href="#">Clothing</a></li>
                        <li><a class="" href="#">Baby Girl</a></li>
                        <li><a class="" href="#">Bags</a></li>
                        <li><a class="" href="#">Shorts</a></li>
                        <li><a class="" href="#">Men</a></li>
                        <li><a class="" href="#">Baby Boys</a></li>
                        <li><a class="" href="#">Blazers</a></li>
                        <li><a class="" href="#">Blouses & Shirt</a></li>
                        <li><a class="" href="#">Shoes</a></li>
                        <li><a class="" href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-lg-3 col-md-6 col-sm-5  links ">
                    <h5>USEFUL LINKS</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#">My Account</a></li>
                        <li><a class="" href="#">My Wishlish</a></li>
                        <li><a class="" href="#">Term & Conditions</a></li>
                        <li><a class="" href="#">Privacy Policy</a></li>
                        <li><a class="" href="#">Track Order</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 follow">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#"><i class="fa-brands fa-facebook-f"></i>
                                <p>Facebook</p>
                            </a></li>
                        <li><a class="" href="#"><i class="fa-brands fa-youtube"></i>
                                <p>Youtube</p>
                            </a></li>
                        <li><a class="" href="#"><i class="fa-brands fa-instagram"></i>
                                <p>Instagram</p>
                            </a></li>
                        <li><a class="" href="#"><i class="fa-brands fa-linkedin-in"></i>
                                <p>Linkedin</p>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box pt-4 pb-4">
            <div class="shop">
                <a href=""><img src="{{ asset('site/assets/images/app-store 1.png') }}" alt=""></a>
                <a href=""><img src="{{ asset('site/assets/images/google-play 1.png') }}" alt=""></a>
            </div>
            <div class="payment">
                <a href=""><img src="{{ asset('site/assets/images/ApplePay.jpg') }}" alt=""></a>
                <a href=""><img src="{{ asset('site/assets/images/Paypal.jpg') }}" alt=""></a>
                <a href=""><img src="{{ asset('site/assets/images/Mastercard.jpg') }}" alt=""></a>
                <a href=""><img src="{{ asset('site/assets/images/Stripe.jpg') }}" alt=""></a>
            </div>
        </div>
        <div class="foot text-center pt-4 pb-2">© 2022 All Rights Reserved</div>
    </footer>



    <Script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></Script>
    <Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></Script>

    <Script src="https://code.jquery.com/jquery-3.6.0.min.js"></Script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('site/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/jquery.mycart.js') }}"></script>
    <script src="{{ asset('site/assets/js/all.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/5KHAMSAT.js') }}"></script>
    <script>
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function() {
            $(this).parent(".sub-menu").children("ul").slideToggle("100");
            $(this).find(".right").toggleClass("fa-angle-right fa-angle-down");
        });
    </script>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>


    <script>
        $(".hamburger").click(function() {
            $("body,html").addClass('menu-toggle');
            $(".hamburger").addClass('active');
        });
        $(".m-overlay").click(function() {
            $("body,html").removeClass('menu-toggle');
            $(".hamburger").removeClass('active');
        });
    </script>
    @yield('js')
</body>

</html>
