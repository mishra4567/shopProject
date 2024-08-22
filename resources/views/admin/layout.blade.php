<!DOCTYPE php>
<php lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title Page-->
        {{-- 16.0.2024 || 21.58 --}}
        <title>@yield('page_title')</title>
        {{-- 16.0.2024 || 21.58 --}}
        <!-- Fontfaces CSS-->
        <link href="{{ asset('admin_assets/css/font-face.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
            media="all">
        <link href="{{ asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
            media="all">
        <link href="{{ asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}"
            rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="{{ asset('admin_assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('admin_assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet"
            media="all">
        <!-- Main CSS-->
        <link href="{{ asset('admin_assets/css/theme.css') }}" rel="stylesheet" media="all">
        {{-- Custom css --}}
        <link href="{{ asset('admin_assets/css/custom.css') }}" rel="stylesheet" media="all">
    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="#">
                                <img src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="{{ url('admin/dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ url('admin/category') }}">
                                    <i class="fas fa-chart-bar"></i>Caregory</a>
                            </li>
                            {{-- 16.0.2024 || 21.58 --}}
                            <li>
                                <a href="{{ url('admin/coupon') }}">
                                    <i class="fas fa-ticket-alt"></i>Coupon</a>
                            </li>
                            {{-- 17.8.2024 --}}
                            <li>
                                <a href="{{ url('admin/size') }}">
                                    <i class="fas fa-expand-alt"></i>Size</a>
                            </li>
                            {{-- 17.8.2024 --}}
                            {{-- 16.0.2024 || 21.58 --}}
                            {{-- 18.08.2024  ||  21.00 --}}
                            <li">
                                <a href="{{ url('admin/color') }}">
                                    <i class="fas fa-paintbrush"></i>color</a>
                                </li>
                                {{-- 18.08.2024  ||  21.00 --}}
                                {{-- 18.08.2024  ||  22.40 --}}
                                <li">
                                    <a href="{{ url('admin/product') }}">
                                        <i class="fas fa-shopping-cart"></i>Product</a>
                                    </li>
                                    {{-- 18.08.2024  ||  22.40 --}}
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->
            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('admin_assets/images/icon/logo.png') }}" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    {{-- <span id="category_insert_messege" style="">{{ session('message') }}</span> --}}
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                            {{-- 17.8.2024 --}}
                            {{-- <li class="active"> --}}
                            <li class="@yield('dashboard_select')">
                                <a href="{{ url('admin/dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                            {{-- 17.8.2024 --}}
                            <li class="@yield('category_select')">
                                <a href="{{ url('admin/category') }}">
                                    <i class="fas fa-list"></i>Category</a>
                            </li>
                            {{-- 16.8.2024 || 21.58 --}}
                            {{-- 17.8.2024 --}}
                            <li class="@yield('coupon_select')">
                                <a href="{{ url('admin/coupon') }}">
                                    <i class="fas fa-ticket-alt"></i>Coupon</a>
                            </li>
                            <li class="@yield('size_select')">
                                <a href="{{ url('admin/size') }}">
                                    <i class="fas fa-expand"></i>Size</a>
                            </li>
                            {{-- 17.8.2024 --}}
                            {{-- 16.8.2024 || 21.58 --}}
                            {{-- 18.08.2024  ||  21.00 --}}
                            <li class="@yield('color_select')">
                                <a href="{{ url('admin/color') }}">
                                    <i class="fas fa-paintbrush"></i>color</a>
                            </li>
                            {{-- 18.08.2024  ||  21.00 --}}
                            {{-- 18.08.2024  ||  22.40 --}}
                            <li class="@yield('product_select')">
                                <a href="{{ url('admin/product') }}">
                                    <i class="fas fa-shopping-cart"></i>Product</a>
                            </li>
                            {{-- 18.08.2024  ||  22.40 --}}
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search"
                                        placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-comment-more"></i>
                                            <span class="quantity">1</span>
                                            <div class="mess-dropdown js-dropdown">
                                                <div class="mess__title">
                                                    <p>You have 2 news message</p>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{ asset('admin_assets/images/icon/avatar-06.jpg') }}"
                                                            alt="Michelle Moreno" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Michelle Moreno</h6>
                                                        <p>Have sent a photo</p>
                                                        <span class="time">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{ asset('admin_assets/images/icon/avatar-04.jpg') }}"
                                                            alt="Diane Myers" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Diane Myers</h6>
                                                        <p>You are now connected on message</p>
                                                        <span class="time">Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="mess__footer">
                                                    <a href="#">View all messages</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">1</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>You have 3 New Emails</p>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{ asset('admin_assets/images/icon/avatar-06.jpg') }}"
                                                            alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, 3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{ asset('admin_assets/images/icon/avatar-05.jpg') }}"
                                                            alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="{{ asset('admin_assets/images/icon/avatar-04.jpg') }}"
                                                            alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, April 12,,2018</span>
                                                    </div>
                                                </div>
                                                <div class="email__footer">
                                                    <a href="#">See all emails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="{{ asset('admin_assets/images/icon/avatar-01.jpg') }}"
                                                    alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">john doe</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="{{ asset('admin_assets/images/icon/avatar-01.jpg') }}"
                                                                alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">john doe</a>
                                                        </h5>
                                                        <span class="email">johndoe@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="{{ url('admin/logout') }}">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            {{-- 18.08.2024  || 23.40 --}}
                            {{-- <div class="card">
                                <div class="card-header">
                                    <div class="row ">
                                        <div class="col-md-2 ">
                                            Notifications :
                                        </div>
                                        <div class="col-md-10">
                                            <span id="notification_messege"
                                                style="">{{ session('message') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            @if (session('message'))
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row ">
                                            <div class="col-md-2 ">
                                                Notifications :
                                            </div>
                                            <div class="col-md-10" id="messege">
                                                <div id="notification_messeges"
                                                    class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-success">Success</span>
                                                    <span id="notification_content">{{ session('message') }}</span>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- 18.08.2024  || 23.40 --}}
                            @section('container')
                            @show
                        </div>
                    </div>
                    <!-- END MAIN CONTENT-->
                </div>
            </div>
            <!-- Jquery JS-->
            <script src="{{ asset('admin_assets/vendor/jquery-3.2.1.min.js') }}"></script>
            <script src="{{ asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
            <!-- Vendor JS       -->
            <script src="{{ asset('admin_assets/vendor/slick/slick.min.js') }}"></script>
            <script src="{{ asset('admin_assets/vendor/animsition/animsition.min.js') }}"></script>
            <script src="{{ asset('admin_assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
            <script src="{{ asset('admin_assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
            <!-- Main JS-->
            <script src="{{ asset('admin_assets/js/main.js') }}"></script>
            <script src="{{ asset('admin_assets/js/custome.js') }}"></script>

    </body>
</php>
<!-- end document-->
