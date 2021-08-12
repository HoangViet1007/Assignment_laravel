<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jun 2021 11:29:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <!-- Title -->
        <title>Hoàng Việt | @yield('title')</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('public_clien/favicon.png') }}">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset('public_clien/vendor/font-awesome/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/css/font-electro.css')}}">

        <link rel="stylesheet" href="{{asset('public_clien/vendor/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/vendor/hs-megamenu/src/hs.megamenu.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/vendor/fancybox/jquery.fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/vendor/slick-carousel/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('public_clien/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="{{asset('public_clien/css/theme.css')}}">
        @yield('css')
    </head>

    <body>

  <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header-left-aligned-nav">
            <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <marquee behavior="" direction=""><a href="#" class=" font-size-13 hover-on-dark" style="color:#fed700;">Chào mừng bạn đến với hệ thống thương mại điện tử của chúng tôi</a></marquee>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="contact-v2.html" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>Địa chỉ</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                                            <i class="ec ec-user mr-1"></i>  <span class="text-gray-50"></span> Đăng nhập or Đăng ký
                                        </a>
                                        {{-- <a id="sidebarNavToggler2" href="javascript:;" role="button" class="u-header-topbar__nav-link" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent"
                                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">haha</a> --}}

                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo-Search-header-icons -->
                <div class="py-2 py-xl-5 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="index.html" aria-label="Electro">
                                        <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                </path>
                                            </svg>
                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu" type="button" class="navbar-toggler d-block btn u-hamburger mr-3 mr-xl-0" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1"
                                        data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                            <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                                <span class="u-hamburger__inner"></span>
                                            </span>
                                        </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                                <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left" aria-labelledby="sidebarHeaderInvoker">
                                    <div class="u-sidebar__scroller">
                                        <div class="u-sidebar__container">
                                            <div class="u-header-sidebar__footer-offset">
                                                <!-- Toggle Button -->
                                                <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">
                                                    <button type="button" class="close ml-auto" aria-controls="sidebarHeader" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarHeader1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                                                            <span aria-hidden="true"><i class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                                        </button>
                                                </div>
                                                <!-- End Toggle Button -->

                                                <!-- Content -->
                                                <div class="js-scrollbar u-sidebar__body">
                                                    <div id="headerSidebarContent" class="u-sidebar__content u-header-sidebar__content">
                                                        <!-- Logo -->
                                                        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3" href="index.html" aria-label="Electro">
                                                            <svg version="1.1" x="0px" y="0px" width="175.748px" height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52" style="margin-bottom: 0;">
                                                                    <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                                                        C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                                                        c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                                                        c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                                                        c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                                                        c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                                                        c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                                                        c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                                                        c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                                                        M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                                                        c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                                                        c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                                                        c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                                                        c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                                                        M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                                                        c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                                                        c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                                                        C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                                                        C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                                                        c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                                                        c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                                                        c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                                                        C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                                                        c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                                                        c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                                                        c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                                                        c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                                                        c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                                                        c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                                                        C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                                                        c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                                                        c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                                                        c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                                                        c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                                                        c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                                                    </path>
                                                                </svg>
                                                        </a>
                                                        <!-- End Logo -->

                                                        <!-- List -->
                                                        <ul id="headerSidebarList" class="u-header-collapse__nav">

                                                            <!-- Value of the Day -->
                                                            <li class="">
                                                                <a class="u-header-collapse__nav-link font-weight-bold" href="#">Đặc biệt ngày hôm nay</a>
                                                            </li>
                                                            <!-- End Value of the Day -->

                                                            <!-- Top 100 Offers -->
                                                            <li class="">
                                                                <a class="u-header-collapse__nav-link font-weight-bold" href="#">Top 100 sản phẩm đang sale</a>
                                                            </li>
                                                            <!-- End Top 100 Offers -->
                                                            <!-- End New Arrivals -->
                                                            @foreach($category_parent as $cate)
                                                                <li class="u-has-submenu u-header-collapse__submenu">
                                                                    <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer" href="javascipt:;" data-target="#{{$cate->slug}}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="{{$cate->slug}}">
                                                                            {{$cate->name}}
                                                                        </a>

                                                                    <div id="{{$cate->slug}}" class="collapse" data-parent="#headerSidebarContent">
                                                                        @include('master_layout.child_menu_top',['cate'=>$cate])
                                                                    </div>
                                                                </li>
                                                        @endforeach
                                                            <!-- End Accessories -->
                                                        </ul>
                                                        <!-- End List -->
                                                    </div>
                                                </div>
                                                <!-- End Content -->
                                            </div>
                                            <!-- Footer -->
                                            <footer id="SVGwaveWithDots" class="svg-preloader u-header-sidebar__footer">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Privacy</a>
                                                    </li>
                                                    <li class="list-inline-item pr-3">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">Terms</a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="u-header-sidebar__footer-link text-gray-90" href="#">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- SVG Background Shape -->
                                                <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">
                                                    <img class="js-svg-injector" src="https://transvelo.github.io/electro-html/2.0/assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description" data-parent="#SVGwaveWithDots">
                                                </div>
                                                <!-- End SVG Background Shape -->
                                            </footer>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Search Bar -->
                            <div class="col d-none d-xl-block">
                                <form class="js-focus-state">
                                    <label class="sr-only" for="searchproduct">Search</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="search_home" placeholder="Hôm nay bạn cần tìm gì ?" required>
                                        <div class="input-group-append">
                                            <!-- Select -->
                                            <select class="js-select selectpicker dropdown-select custom-search-categories-select" data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                                    <option value="one" selected>Danh mục</option>
                                                    @foreach($category_id_khac_o as $a)
                                                        <option value="{{$a->id}}">{{$a->name}}</option>
                                                    @endforeach
                                                </select>
                                            <!-- End Select -->
                                            <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1">
                                                    <span class="ec ec-search font-size-24"></span>
                                                </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Search Bar -->
                            <!-- Header Icons -->
                            <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        {{-- <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker" class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary" href="javascript:;" role="button" data-toggle="tooltip" data-placement="top" title="Search" aria-controls="searchClassic" aria-haspopup="true" aria-expanded="false"
                                                data-unfold-target="#searchClassic" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                                <span class="ec ec-search"></span>
                                            </a>

                                            <!-- Input -->
                                            <div id="searchClassic" class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2" aria-labelledby="searchClassicInvoker">
                                                <form class="js-focus-state input-group px-3">
                                                    <input class="form-control" type="search" placeholder="Search Product">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3" type="button"><i class="font-size-18 ec ec-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- End Input -->
                                        </li> --}}
                                        <!-- End Search -->
                                        <li class="col d-none d-xl-block"><a href="../shop/compare.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Compare"><i class="font-size-22 ec ec-compare"></i></a></li>
                                        <li class="col d-none d-xl-block"><a href="../shop/wishlist.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="Favorites"><i class="font-size-22 ec ec-favorites"></i></a></li>
                                        <li class="col d-xl-none px-2 px-sm-3"><a href="../shop/my-account.html" class="text-gray-90" data-toggle="tooltip" data-placement="top" title="My Account"><i class="font-size-22 ec ec-user"></i></a></li>

                                        {{-- <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">
                                            <a href="../shop/cart.html" class="text-gray-90 position-relative d-flex " data-toggle="tooltip" data-placement="top" title="Cart">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">2</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">$1785.00</span>
                                            </a>
                                        </li> --}}
                                        @php
                                          $number = 0 ;
                                          $total = 0 ;
                                          if(!empty(Session::get('cart'))){
                                              foreach (Session::get('cart') as $a){
                                                  $number += $a['quantity'];
                                                  $total += $a['price'] * $a['quantity'];
                                              }
                                          }

                                        @endphp
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
                                            <div id="basicDropdownHoverInvoker" class="text-gray-90 position-relative d-flex price_in_cart" data-toggle="tooltip" data-placement="top" title="Cart" aria-controls="basicDropdownHover" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-target="#basicDropdownHover" style="cursor:pointer;"
                                                data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                                <i class="font-size-22 ec ec-shopping-bag"></i>
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12" id="quantitys">{{$number}}</span>
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3" style="font-size:12px" id="totals">{{number_format($total) . "đ"}}</span>
                                            </div>

                                            {{-- sản phẩm có trong giỏ hàng  --}}
                                            <div id="basicDropdownHover" class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0" aria-labelledby="basicDropdownHoverInvoker">
                                                <ul class="list-unstyled px-3 pt-3 ul_list_cart">
                                                    @if(!empty(Session::get('cart')))
                                                        @foreach(Session::get('cart') as $a)
                                                        <li class="border-bottom pb-3 mb-3">
                                                            <div class="">
                                                                <ul class="list-unstyled row mx-n2">
                                                                    <li class="px-2 col-auto">
                                                                        <img class="img-fluid" src="{{url('')}}{{$a['image']}}" alt="Image Description" width="50">
                                                                    </li>
                                                                    <li class="px-2 col">
                                                                        <h5 class="text-blue font-size-14 font-weight-bold"><a href="{{route('product_detail',['slug'=>$a["slug"],'id'=>$a["id"]])}}">{{$a['name']}}</a></h5>
                                                                        <span class="font-size-14">{{$a['quantity']}} × {{number_format($a['price'])}}</span>
                                                                    </li>
                                                                    <li class="px-2 col-auto">
                                                                        <a href="#" class="text-gray-90"><i class="ec ec-close-remove"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    @endif
                                                    <li class="text-center">
                                                        <a href="javacript:;" class="text-center">Xem chi tiết hãy vào xem giỏ hàng</a>
                                                    </li>
                                                </ul>
                                                <div class="flex-center-between px-4 pt-2">
                                                    <a href="{{route('card')}}" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Xem giỏ</a>
                                                    <a href="{{ route('getcheckout') }}" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">Thanh toán</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo-Search-header-icons -->

                <!-- Vertical-and-secondary-menu -->
                <div class="d-none d-xl-block container">
                    <div class="row">
                        <!-- Vertical Menu -->
                        <div class="col-md-auto d-none d-xl-block">
                            <div class="max-width-270 min-width-270">
                                <!-- Basics Accordion -->
                                <div id="basicsAccordion">
                                    <!-- Card -->
                                    <div class="card border-0">
                                        <div class="card-header card-collapse border-0" id="basicsHeadingOne">
                                            <button type="button" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="true"
                                                aria-controls="basicsCollapseOne">
                                                    <span class="ml-0 text-gray-90 mr-2">
                                                        <span class="fa fa-list-ul"></span>
                                                    </span>
                                                    <span class="pl-1 text-gray-90">Tất cả danh mục</span>
                                                </button>
                                        </div>
                                        @if($routeName = Route::currentRouteName() == "home")
                                        <div id="basicsCollapseOne" class="collapse show vertical-menu" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                        <ul class="navbar-nav u-header__navbar-nav">
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">Value of the Day</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">Top 100 Offers</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">New Arrivals</a>
                                                            </li>
                                                            @foreach($category_parent as $cate)
                                                            <li class="nav-item hs-has-mega-menu u-header__nav-item"data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                                                <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">{{$cate->name}}</a>
                                                                <!-- Nav Item - Mega Menu -->
                                                                <div class="hs-mega-menu vmm-tfw u-header__sub-menu" style="border:2px solid #fed700;border-radius:5px;height:350px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" aria-labelledby="basicMegaMenu">
                                                                    <div class="vmm-bg">
                                                                        <img class="img-fluid" src="{{asset('public_clien/img/500X400/img1.png')}}" alt="Image Description">
                                                                    </div>
                                                                    <div class="row u-header__mega-menu-wrapper">
                                                                        <div class="col mb-3 mb-sm-0">
                                                                            <a href="javascript:;" style="text-decoration:none;"><span class="u-header__sub-menu-title">{{$cate->name}}</span></a>
                                                                            @include('master_layout.child_menu_sidebar',['cate'=>$cate])
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Nav Item - Mega Menu -->
                                                            </li>
                                                            @endforeach
                                                            <!-- End Nav Item -->
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                        @else
                                        <div id="basicsCollapseOne" class="collapse vertical-menu" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                                            <div class="card-body p-0">
                                                <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
                                                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                                        <ul class="navbar-nav u-header__navbar-nav">
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">Value of the Day</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">Top 100 Offers</a>
                                                            </li>
                                                            <li class="nav-item u-header__nav-item" data-event="hover" data-position="left">
                                                                <a href="#" class="nav-link u-header__nav-link font-weight-bold">New Arrivals</a>
                                                            </li>
                                                            @foreach($category_parent as $cate)
                                                                <li class="nav-item hs-has-mega-menu u-header__nav-item"data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                                                    <a id="basicMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('product_clien_cate',[$cate->slug,$cate->id])}}" aria-haspopup="true" aria-expanded="false">{{$cate->name}}</a>
                                                                    <!-- Nav Item - Mega Menu -->
                                                                    <div class="hs-mega-menu vmm-tfw u-header__sub-menu" style="border:2px solid #fed700;border-radius:5px;height:350px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;" aria-labelledby="basicMegaMenu">
                                                                        <div class="vmm-bg">
                                                                            <img class="img-fluid" src="{{asset('public_clien/img/500X400/img1.png')}}" alt="Image Description">
                                                                        </div>
                                                                        <div class="row u-header__mega-menu-wrapper">
                                                                            <div class="col mb-3 mb-sm-0">
                                                                                <span class="u-header__sub-menu-title">{{$cate->name}}</span>
                                                                               @include('master_layout.child_menu_sidebar',['cate'=>$cate])
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Nav Item - Mega Menu -->
                                                                </li>
                                                            @endforeach
                                                            <!-- End Nav Item -->
                                                        </ul>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Basics Accordion -->
                            </div>
                        </div>
                        <!-- End Vertical Menu -->
                        <!-- Secondary Menu -->
                        <div class="col">
                            <!-- Nav -->
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                                <!-- Navigation -->
                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- Home -->
                                        {{-- text-sale  --}}
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link @if($routeName = Route::currentRouteName() == "home") {{"text-sale"}} @endif" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Trang chủ</a>
                                        </li>
                                        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="change" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                            <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="{{route('product_clien')}}" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                                            <style>

                                            </style>
                                            <!-- Home - Mega Menu -->
                                            <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu" style="display:none;">
                                                <div class="row u-header__mega-menu-wrapper">
                                                    @foreach($category_parent as $a)
                                                    <?php $space = '' ?>
                                                    <div class="col-md-3">
                                                        <a href="javascript:;"><span class="u-header__sub-menu-title">{{$a->name}}</span></a>
                                                        @include('master_layout.child_menu',['a'=>$a,'space'=>$space])
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- End Home - Mega Menu -->
                                        </li>
                                        <!-- End Home -->

                                        <!-- Featured Brands -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link @if($routeName = Route::currentRouteName() == "blog" || $routeName = Route::currentRouteName() == "blogDetail") {{"text-sale"}} @endif" href="{{route('blog')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Tin tức</a>
                                        </li>
                                        <!-- End Featured Brands -->

                                        <!-- Trending Styles -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link @if($routeName = Route::currentRouteName() == "contact") {{"text-sale"}} @endif" href="{{route('contact')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Liên hệ</a>
                                        </li>
                                        <!-- End Trending Styles -->

                                        <!-- Gift Cards -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true" aria-expanded="false">Chỉnh sách bảo hành</a>
                                        </li>

                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true" aria-expanded="false">Sửa chữa</a>
                                        </li>
                                        <!-- End Gift Cards -->

                                        <!-- Button -->
                                        <li class="nav-item u-header__nav-last-item">
                                            <a class="text-gray-90" href="#" target="_blank">
                                                    Miễn phí giao cho đơn > 1 triệu
                                                </a>
                                        </li>
                                        <!-- End Button -->
                                    </ul>
                                </div>
                                <!-- End Navigation -->
                            </nav>
                            <!-- End Nav -->
                        </div>
                        <!-- End Secondary Menu -->
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
            </div>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">

            <div class="container">
                <!-- Slider Section -->

                @yield('content_clien')
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer style="margin-top:30px;">
            <!-- End Footer-top-widget -->
            <!-- Footer-newsletter -->
            <div class="bg-primary py-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 mb-md-3 mb-lg-0">
                            <div class="row align-items-center">
                                <div class="col-auto flex-horizontal-center">
                                    <i class="ec ec-newsletter font-size-40"></i>
                                    <h2 class="font-size-20 mb-0 ml-3">Đăng kí để nhận thông tin mới</h2>
                                </div>
                                <div class="col my-4 my-md-0">
                                    <h5 class="font-size-15 ml-4 mb-0"><strong>Giảm ngay 10% hoá đơn</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <!-- Subscribe Form -->
                            <form class="js-validate js-form-message">
                                <label class="sr-only" for="subscribeSrEmail">Email...</label>
                                <div class="input-group input-group-pill">
                                    <input type="email" class="form-control border-0 height-40" name="email" id="subscribeSrEmail" placeholder="Email..." aria-label="Email address" aria-describedby="subscribeButton" required
                                    data-msg="Please enter a valid email address.">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2" id="subscribeButton">Đăng ký</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Subscribe Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-newsletter -->
            <!-- Footer-bottom-widgets -->
            <div class="pt-8 pb-4 bg-gray-13">
                <div class="container mt-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-6">
                                <a href="#" class="d-inline-block">
                                    <svg version="1.1" x="0px" y="0px" width="156px" height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                        <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse>
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                            C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                            c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                            c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                            c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                            c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                            c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                            c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                            c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                            M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                            c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                            c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                            c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                            c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                            M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                            c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                            c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                            C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                            C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                            c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                            c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                            c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                            C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                            c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                            c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                            c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                            c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                            c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                            c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                            C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                            c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                            c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                            c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                            c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                            c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="mb-4">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <i class="ec ec-support text-primary font-size-56"></i>
                                    </div>
                                    <div class="col pl-3">
                                        <div class="font-size-13 font-weight-light">Phục vụ 24/7</div>
                                        <a href="tel:+80080018588" class="font-size-20 text-gray-90">{{$websetting->phone}} </a><a href="tel:+0600874548" class="font-size-20 text-gray-90">- 0827541636</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h6 class="mb-1 font-weight-bold">Liên hệ theo địa chỉ</h6>
                                <address class="">
                                    {{$websetting->address}}
                                </address>
                            </div>
                            <div class="my-4 my-md-4">
                                <ul class="list-inline mb-0 opacity-7">
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-facebook-f btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-google btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-twitter btn-icon__inner"></span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item mr-0">
                                        <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle" href="#">
                                            <span class="fab fa-github btn-icon__inner"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Hỗ trợ và dịch vụ</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Mua hàng & Trả góp</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Đặt hàng & Thanh toán</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Chính sách & Bảo mật</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Huỷ hàng & Đổi trả</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Điều khoản mua hàng</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Tra cứu đơn hàng</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Chính sách giải quyết khiếu nại</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Thông tin liên hệ</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Bán hàng online</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Chăm sóc khách hàng</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Hỗ trợ kĩ thuật</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Bảo hành và sửa chữa</a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/product-categories-5-column-sidebar.html">Liên hệ khối văn phòng</a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>

                                <div class="col-12 col-md mb-4 mb-md-0">
                                    <h6 class="mb-3 font-weight-bold">Chăm sóc khách hàng</h6>
                                    <!-- List Group -->
                                    <ul class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                        <li><a class="list-group-item list-group-item-action" href="../shop/my-account.html">Hot lile bán hàng : <span style="font-weight: bold;">0355.755.697</span></a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/track-your-order.html">Hỗ trợ bảo hành kĩ thuật : <span style="font-weight:bold;">1900.211.311</span></a></li>
                                        <li><a class="list-group-item list-group-item-action" href="../shop/wishlist.html">Hot line hỗ trợ phần mền : <span style="font-weight: bold;"> 082.754.1636</span></a></li>
                                        <li><a class="list-group-item list-group-item-action" href="terms-and-conditions.html">Hot line phản ảnh chất lượng phục vụ  : <span style="font-weight: bold;">1900.111.222</span> </a></li>
                                    </ul>
                                    <!-- End List Group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-bottom-widgets -->
            <!-- Footer-copy-right -->
            <div class="bg-gray-14 py-2">
                <div class="container">
                    <div class="flex-center-between d-block d-md-flex">
                        <div class="mb-3 mb-md-0">© <a href="#" class="font-weight-bold text-gray-90">Electro</a> - All rights Reserved</div>
                        <div class="text-md-right">
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="{{asset('public_clien/img/100X60/img1.jpg')}}" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="{{asset('public_clien/img/100X60/img2.jpg')}}" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="{{asset('public_clien/img/100X60/img3.jpg')}}" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="{{asset('public_clien/img/100X60/img4.jpg')}}" alt="Image Description">
                            </span>
                            <span class="d-inline-block bg-white border rounded p-1">
                                <img class="max-width-5" src="{{asset('public_clien/img/100X60/img5.jpg')}}" alt="Image Description">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer-copy-right -->
        </footer>
        <!-- ========== END FOOTER ========== -->


        <!-- Account Sidebar Navigation -->
        <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                {{-- form đăng nhập  --}}
                                <form class="js-validate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idFormLogin">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Xin chào trở lại !</h2>
                                        <p>Đăng nhập để quản lý tài khoản thôi nào</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="loginEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="loginEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="email_login" placeholder="Email" aria-label="Email" aria-describedby="LoginEmailLabel"
                                                    data-msg="Email không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                              <label class="sr-only" for="loginPassword">Mật khẩu</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="loginPasswordLabel">
                                                        <span class="fas fa-lock"></span>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" name="password" id="pasword_login" placeholder="Mật khẩu" aria-label="Password" aria-describedby="loginPasswordLabel"
                                                    data-msg="Mật khẩu không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success" required>
                                              </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->
                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="#"
                                               data-target="#forgotPassword"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Quên mật khẩu ?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Đăng nhập</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Bạn có tài khoản chưa ?</span>
                                            <a class="js-animation-link small text-dark" href="javascript:;"
                                               data-target="#signup"
                                               data-link-group="idForm"
                                               data-animation-in="slideInUp">Đăng ký
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                              <span class="fab fa-facebook-square mr-1"></span>
                                              Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                              <span class="fab fa-google mr-1"></span>
                                              Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                </form>

                                <!-- Signup -->
                                <form action="" class="js-validate mt-5">
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                        <h2 class="h4 mb-0">Chào mừng đến với Electro.</h2>
                                        <p>Điền đầy đủ thông tin để đăng kí tài khoản nha.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                    <label class="sr-only" for="signupEmail">Email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="signupEmailLabel">
                                                                <span class="fas fa-user"></span>
                                                            </span>
                                                        </div>
                                                        <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                                                        data-msg="Email không hợp lệ"
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                    <label class="sr-only" for="signupPassword">Mật khẩu</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="signupPasswordLabel">
                                                                <span class="fas fa-lock"></span>
                                                            </span>
                                                        </div>
                                                        <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Mật khẩu" aria-label="Password" aria-describedby="signupPasswordLabel" required
                                                        data-msg="Mật khẩu không hợp lệ"
                                                        data-error-class="u-has-error"
                                                        data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupConfirmPassword">Nhập lại mật khẩu</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupConfirmPasswordLabel">
                                                            <span class="fas fa-key"></span>
                                                        </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Nhập lại mật khẩu" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                                                    data-msg="Mật khẩu nhập lại không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="name">Họ và tên</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="name">
                                                            <span class="fas fa-dice-four"></span>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="name" id="name_register" placeholder="Họ và Tên" aria-label="" aria-describedby="name" required
                                                    data-msg="Họ và tên không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPhoneLabel">Số điện thoại</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="signupPhone">
                                                            <span class="fas fa-phone"></span>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="phone" id="signupPhone" placeholder="Số điện thoại" aria-label="Phone" aria-describedby="signupPhoneLabel" required
                                                    data-msg="Số điện thoại không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="address_register">Địa chỉ</label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="address">
                                                            <span class="fas fa-map-marker-alt"></span>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="address" id="address_register" placeholder="Địa chỉ" aria-label="Địa chỉ" aria-describedby="address" required
                                                    data-msg="Địa chỉ không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Input -->

                                            <div class="mb-2">
                                                <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Đăng ký</button>
                                            </div>

                                            <div class="text-center mb-4">
                                                <span class="small text-muted">Ban đã có tài khoản ?</span>
                                                <a class="js-animation-link small text-dark" href="javascript:;"
                                                    data-target="#login"
                                                    data-link-group="idForm"
                                                    data-animation-in="slideInUp">Đăng nhập
                                                </a>
                                            </div>

                                            <div class="text-center">
                                                <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                            </div>

                                            <!-- Login Buttons -->
                                            <div class="d-flex">
                                                <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                                                    <span class="fab fa-facebook-square mr-1"></span>
                                                    Facebook
                                                </a>
                                                <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                                                    <span class="fab fa-google mr-1"></span>
                                                    Google
                                                </a>
                                            </div>
                                        </form>
                                            <!-- End Login Buttons -->
                                    </div>
                                </form>

                                <!-- End Signup -->

                                <!-- Forgot Password -->
                                <form action="" class="js-validate mt-5">
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Lấy lại mật khẩu</h2>
                                            <p>Điền địa chỉ email trước đó đã tạo tài khoản.</p>

                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="recoverEmail">Your email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="recoverEmailLabel">
                                                            <span class="fas fa-user"></span>
                                                        </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                                                    data-msg="Email không hợp lệ"
                                                    data-error-class="u-has-error"
                                                    data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Gửi</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Hãy check email để lấy mật khẩu mới nha !</span>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Forgot Password -->
                            </div>
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside>
        {{-- <aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler2">
            <div class="u-sidebar__scroller">
                <div class="u-sidebar__container">
                    <div class="js-scrollbar u-header-sidebar__footer-offset pb-3">
                        <!-- Toggle Button -->
                        <div class="d-flex align-items-center pt-4 px-7">
                            <button type="button" class="close ml-auto"
                                aria-controls="sidebarContent"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-unfold-event="click"
                                data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent"
                                data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight"
                                data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <i class="ec ec-close-remove"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->

                        <!-- Content -->
                        <div class="js-scrollbar u-sidebar__body">
                            haha
                        </div>
                        <!-- End Content -->
                    </div>
                </div>
            </div>
        </aside> --}}
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <!-- JS Global Compulsory -->
        <script src="{{asset('public_clien/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/bootstrap/bootstrap.min.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{asset('public_clien/vendor/appear.js')}}"></script>
        <script src="{{asset('public_clien/vendor/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
        <script src="{{asset('public_clien/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/typed.js/lib/typed.min.js')}}"></script>
        <script src="{{asset('public_clien/vendor/slick-carousel/slick/slick.js')}}"></script>
        <script src="{{asset('public_clien/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

        <!-- JS Electro -->
        <script src="{{asset('public_clien/js/hs.core.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.countdown.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.header.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.hamburgers.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.unfold.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.focus-state.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.malihu-scrollbar.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.validation.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.fancybox.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.onscroll-animation.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.slick-carousel.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.show-animation.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.svg-injector.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.go-to.js')}}"></script>
        <script src="{{asset('public_clien/js/components/hs.selectpicker.js')}}"></script>

        @yield('js')


        <!-- JS Plugins Init. -->
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });

                // initialization of svg injector module
                $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
    </body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Jun 2021 11:29:31 GMT -->
</html>
