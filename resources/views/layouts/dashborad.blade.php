<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="author" content="PIXINVENT">
    <title>{{__('common.5khamsat')}}</title>
    <link rel="apple-touch-icon" href="{{url('public/dashborad/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{Auth::user()->icon}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('public/dashborad/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/dashborad/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/dashborad/app-assets/vendors/css/extensions/toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/vendors/css/extensions/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/plugins/forms/form-number-input.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/page-knowledge-base.css')}}">

    <!-- END: Vendor CSS-->

    @if(app()->getLocale()=='ar')
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/pages/app-ecommerce-details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/forms/form-quill-editor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/pages/app-email.css')}}">

    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/plugins/forms/pickers/form-pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/pages/app-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/plugins/forms/form-number-input.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/plugins/forms/form-wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/pages/app-chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css-rtl/pages/app-chat-list.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/pages/app-email.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/forms/form-quill-editor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/pages/app-email.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/pages/app-invoice.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-sweet-alerts.css')}}">

    <!-- END: Custom CSS-->
    @endif

    @if(app()->getLocale()=='en')
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-ecommerce-details.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/pages/dashboard-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/plugins/charts/chart-apex.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css-rtl/plugins/extensions/ext-component-toastr.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-user.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/plugins/forms/pickers/form-pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-ecommerce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/plugins/forms/form-number-input.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/plugins/forms/form-wizard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/plugins/forms/form-number-input.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashborad/app-assets/css/pages/app-chat-list.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/public/dashborad/app-assets/css/pages/app-invoice.css')}}">

    @endif
    @yield('css')
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
        .toast-success div ,.toast-warning div ,.toast-error div{
            position: relative;
            left: -30px;
            top: 2px;
        }
        #loader {
            border: 12px solid #ececec;
            border-radius: 50%;
            border-top: 12px solid #FEC53A;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
            z-index: 1000;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
    @yield('css')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div id="loader" class="center"></div>

    <div id="dashboard" style="visibility:hidden">
        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                            <div class="bookmark-input search-input">
                                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                                <ul class="search-list search-list-bookmark"></ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav align-items-center ml-auto">
                    <li class="nav-item dropdown dropdown-language">
                        <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if(app()->getLocale() == 'en')

                            <span class="selected-language">English</span>
                            @else
                            <span class="selected-language">العربية</span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
                            <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" data-language="en">
                                English
                            </a>
                            <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" data-language="fr">
                                العربية
                            </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                    @can('products.store')
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                        <div class="search-input">
                            <div class="search-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" id="keyword_search" type="text" name="keyword" value="" placeholder="{{__('common.search')}}" onkeyup="search_products()">
                            <div class="search-input-close"><i data-feather="x"></i></div>
                            <ul class="search-list search-list-main">
                                <!-- User Invoice Starts-->
                                <div class="row invoice-list-wrapper" id="table-hover-animation">
                                    <div class="col-12">
                                        <div class="card" style="padding:50px;">
                                            <h3>{{__('common.products')}}</h3>
                                            <div class="card-datatable table-responsive">
                                                <table id="dtBasicExample" class="table  table-sm table-hover-animation" cellspacing="0" width="100%">
                                                    <thead style="height:50px;">
                                                        <tr>
                                                            <th>{{__('common.name_product')}}</th>
                                                            <th>{{__('common.image')}}</th>
                                                            <th>{{__('common.description')}}</th>
                                                            <th>{{__('common.price')}}</th>
                                                            <th>{{__('common.actions')}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="menu_products_search">


                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <!-- /User Invoice Ends-->
                            </ul>
                        </div>
                    </li>  
                    @endcan
                    <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link" href="javascript:void(0);" data-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge badge-pill badge-danger badge-up">{{count($orders)}}</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <div class="dropdown-header d-flex">
                                    <h4 class="notification-title mb-0 mr-auto">{{__('common.Notifications')}}</h4>
                                    <div class="badge badge-pill badge-light-primary">{{count($orders)}} {{__('common.new')}}</div>
                                </div>
                            </li>
                            <li class="scrollable-container media-list"> 
                                @foreach($orders as $order)
                                <a class="d-flex" href="{{url(app()->getLocale().'/orders/'.$order->id)}}"> 
                                    <div class="media d-flex align-items-start">
                                        <div class="media-left">
                                            <div class="avatar"><img src="{{$order->users->photo}}" alt="avatar" width="32" height="32"></div>
                                        </div>
                                        <div class="media-body">
                                            <p class="media-heading"><span class="font-weight-bolder">{{$order->users->name}}</p>
                                                <small class="notification-text"> {{ date('d-m-Y', strtotime($order->created_at)) }}</small>
                                        </div>
                                        <div class="badge badge-pill badge-light-success">{{$order->final_price}} $</div>
                                    </div>
                                </a>
                                @endforeach
                            </li>
                        </ul>
                    </li> 
                    <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{Auth::user()->name}}</span><span class="user-status">@if(app()->getLocale() == 'en') {{Auth::user()->role->name_en}} @else {{Auth::user()->role->name}}  @endif</span></div><span class="avatar"><img class="round" src="{{Auth::user()->photo}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                            <a class="dropdown-item" href="{{url('/managers/'.Auth::id().'/edit')}}" style="font-size: 12px;font-weight: bold;">
                                <i class="mr-50" data-feather="user"></i> {{__('common.profile')}}
                            </a> <a style="font-size: 12px;font-weight: bold;" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="mr-50" data-feather="power"></i> {{__('common.logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <ul class="main-search-list-defaultlist d-none">
            <li class="d-flex align-items-center"><a href="javascript:void(0);">
                    <h6 class="section-label mt-75 mb-0">Files</h6>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="mr-75"><img src="{{url('public/dashborad/app-assets/images/icons/xls.png')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                        </div>
                    </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="mr-75"><img src="{{url('public/dashborad/app-assets/images/icons/jpg.png')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                        </div>
                    </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="mr-75"><img src="{{url('public/dashborad/app-assets/images/icons/pdf.png')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                        </div>
                    </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                    <div class="d-flex">
                        <div class="mr-75"><img src="{{url('public/dashborad/app-assets/images/icons/doc.png')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                        </div>
                    </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
                </a></li>
            <li class="d-flex align-items-center"><a href="javascript:void(0);">
                    <h6 class="section-label mt-75 mb-0">Members</h6>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar mr-75"><img src="{{url('public/dashborad/app-assets/images/portrait/small/avatar-s-8.jpg')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                        </div>
                    </div>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar mr-75"><img src="{{url('public/dashborad/app-assets/images/portrait/small/avatar-s-1.jpg')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                        </div>
                    </div>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar mr-75"><img src="{{url('public/dashborad/app-assets/images/portrait/small/avatar-s-14.jpg')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                        </div>
                    </div>
                </a></li>
            <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view.html">
                    <div class="d-flex align-items-center">
                        <div class="avatar mr-75"><img src="{{url('public/dashborad/app-assets/images/portrait/small/avatar-s-6.jpg')}}" alt="png" height="32"></div>
                        <div class="search-data">
                            <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                        </div>
                    </div>
                </a></li>
        </ul>
        <ul class="main-search-list-defaultlist-other-list d-none">
            <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                    <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div>
                </a></li>
        </ul>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/home')}}"><span class="brand-logo" style="display: flex;">
                                <span><img src="{{Auth::user()->logo}}" alt="" /></span>
                                <h2 class="brand-text">{{__('common.5khamsat')}}</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('/home')}}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">{{__('common.home')}}</span></a>
                    @can('roles.admin')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('/follow_screen')}}"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Dashboards">{{__('common.follow_screen')}}</span></a>
                    </li>
                    @endcan
                    @can('categories')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.categories')}}">{{__('common.categories')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/categories')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.categories')}}">{{__('common.categories')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('vendors')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.vendors')}}">{{__('common.vendors')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/vendors')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.vendors')}}">{{__('common.vendors')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('stores')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.stores')}}">{{__('common.stores')}}</span></a>
                        <ul class="menu-content">
                            @can('roles.admin')
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/stores')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.stores')}}">{{__('common.stores')}}</span></a>
                            </li>
                            @endcan
                            @if(Auth::user()->role_id != 1)
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/stores_vendor')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.stores')}}">{{__('common.stores')}}</span></a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endcan
                    @can('clients')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.clients')}}">{{__('common.clients')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/clients')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.clients')}}">{{__('common.clients')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('products')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.products')}}">{{__('common.products')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/products')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.products')}}">{{__('common.products')}}</span></a>
                            </li>

                        </ul>
                    </li>
                    @endcan
                    @can('orders')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.orders')}}">{{__('common.orders')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/orders')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.orders')}}">{{__('common.orders')}}</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/warranty_disclosure')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.warranty_disclosure')}}">{{__('common.warranty_disclosure')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('shipping')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.shipping_companies')}}">{{__('common.shipping_companies')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/shipping_companies')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.shipping_companies')}}">{{__('common.shipping_companies')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('advertisments')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.advertisments')}}">{{__('common.advertisments')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/advertisments')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.advertisments')}}">{{__('common.advertisments')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('booking.orders')
                    @if(Auth::user()->role_id != 1)
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.booking_orders')}}">{{__('common.booking_orders')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/booking_orders')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.booking_orders')}}">{{__('common.booking_orders')}}</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/extra_space')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.extra_storage')}}">{{__('common.extra_storage')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.return_orders')}}">{{__('common.return_orders')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/return_order_store')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.return_orders')}}">{{__('common.return_orders')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endcan 
                    @can('storage.spaces')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.storage_spaces')}}">{{__('common.storage_spaces')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/storage_spaces')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.storage_spaces')}}">{{__('common.storage_spaces')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('branches')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.branches')}}">{{__('common.branches')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/branches')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.branches')}}">{{__('common.branches')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    
                    @can('points')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.points')}}">{{__('common.points')}}</span></a>
                        <ul class="menu-content">
                            @can('roles.admin')
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/points')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.points')}}">{{__('common.points')}}</span></a>
                            </li>
                            @endcan
                            @if(Auth::user()->role_id != 1)
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/points/'.Auth::user()->vendor_id)}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.points')}}">{{__('common.points')}}</span></a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endcan

                    @can('income')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.income list')}}">{{__('common.income list')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/income_list')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.income list')}}">{{__('common.income list')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan


                    @can('roles.vendor')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.portfolio')}}">{{__('common.Portfolio')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/portfolio/' .Auth::user()->vendor_id)}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.Portfolio')}}">{{__('common.Portfolio')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('roles')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.roles')}}">{{__('common.roles')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/roles')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.roles')}}">{{__('common.roles')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan
                    @can('sub_admins')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.add_sub_admins')}}">{{__('common.add_sub_admins')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/sub_admins')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.all_sub_admins')}}">{{__('common.all_sub_admins')}}</span></a>
                            </li>
                        </ul>
                    </li>
                    @endcan

                    @can('roles.vendor')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="{{url('/technical_support')}}"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Dashboards">{{__('common.Technical support')}}</span></a>
                    </li>
                    @endcan
                    
                    @can('settings')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="{{__('common.settings')}}">{{__('common.settings')}}</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/settings')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.settings')}}">{{__('common.settings')}}</span></a>
                            </li> 
                            @can('system.info')
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/system_info')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.system_info')}}">{{__('common.system_info')}}</span></a>
                            </li>
                            @endcan
                            @can('roles.admin')
                            <li><a class="d-flex align-items-center" href="{{url(app()->getLocale().'/vendors_categories')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="{{__('common.vendors_categories')}}">{{__('common.vendors_categories')}}</span></a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    <!-- Vendor -->

                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->


        @yield('content')

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">{{__('common.COPYRIGHT &copy; 2020')}}</span><span class="float-md-right d-none d-md-block">{{__('common.Hand-crafted & Made with')}}<i data-feather="heart"></i></span></p>
        </footer>

        <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
        <!-- END: Footer-->
    </div>

    @yield('js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{url('public/dashborad/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('public/dashborad/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('public/dashborad/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
    <!-- END: Page JS-->
    <script src="{{url('public/dashborad/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-email.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-user-view.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-user-view.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-ecommerce-details.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/forms/form-number-input.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-ecommerce-checkout.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-chat.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/page-knowledge-base.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/pages/app-invoice.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
    <script src="{{url('public/dashborad/app-assets/js/scripts/extensions/ext-component-sweet-alerts.js')}}"></script>
    @yield('sweet_alert')
    <script>
        $(document).ready(function() {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script type="module">
        $(window).on('load', function() {
            var $html = $('html');
            setTimeout(function() {
                if (localStorage.getItem('light-layout-current-skin') == 'dark-layout') {
                    $html.addClass("dark-layout");
                    $(".main-menu").addClass("menu-dark");
                    $(".header-navbar").addClass("navbar-dark");
                    console.log(localStorage.getItem('light-layout-current-skin'))
                    $html.removeClass("light-layout");
                    $('#logo_control_panel').html('<img src="{{url('/public/app-assets/images/logo/logo.png ')}}" style="max-width: 50px;" alt="logo">')

                }
            }, 1);
            setTimeout(function() {
                if (localStorage.getItem('light-layout-current-skin') == 'light-layout') {
                    $html.addClass("light-layout");
                    $(".main-menu").removeClass("menu-dark");
                    $(".main-menu").addClass("menu-light");
                    $(".header-navbar").addClass("navbar-light");
                    console.log(localStorage.getItem('light-layout-current-skin'))
                    $html.removeClass("dark-layout");
                    $('#logo_control_panel').html('<img src="{{url(' / public / app - assets / images / logo / logo.png ')}}" style="max-width: 50px;" alt="logo">')

                }
            }, 1);
        });
    </script>
    <script>
        $(document).ready(function() {

            document.querySelector("#dashboard").style.visibility = "hidden";
            setTimeout(function() {
                $("#loader").hide();
                document.querySelector("#dashboard").style.visibility = "visible";
            }, 1000);
        });
    </script>
    <script>
        function search_products() {
            var value = $("#keyword_search").val()
            $.ajax({
                url: '{{url(app()->getLocale()."/search_products")}}/' + value,
                method: "get",
                processData: false,
                contentType: false,
                context: document.body,
                success: function(response) {
                    console.log(response.message)
                    $('#menu_products_search').empty();
                    if (response.message === 'Success') {
                        // alert(response.products.name_ar)
                        response.products.forEach(function(item) {
                            $('#menu_products_search').prepend('<tr id="tr_new-' + item.id + '"><td><span class="font-weight-bold">' + item.name_ar + '</span></td><td><img src="' + item.image + '" style="height: 50px;" alt="" /> </td><td><p style="width: 385px;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">' + item.description_ar + '</p> </td><td><span class="badge badge-pill badge-light-success mr-1">' + item.price + ' $</span></td><td><a href="{{url(app()->getLocale().'/create_product/')}}/'+ item.id +'"><span class="badge badge-pill badge-light-warning mr-1">{{__('common.view')}}</span></a></td></tr>')
                        })
                    } else {
                        // swal('Error', {icon: "error"});
                    }
                }

            });

        }
    </script>
    @yield('chats')
</body>
<!-- END: Body-->

</html>