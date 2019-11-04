<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Google Fonts -->
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <script defer src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
</head>
<body>
<!-- ========== HEADER ========== -->
<header id="header" class="u-header">
    <div class="u-header__section">
        <!-- Topbar -->
        <div class="container u-header__hide-content pt-2">
            <div class="d-flex align-items-center">
                <!-- Language -->
                <div class="position-relative">
                    <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                        <img class="dropdown-item-icon" src="images/us.svg" alt="SVG">
                        <span class="d-inline-block d-sm-none">US</span>
                        <span class="d-none d-sm-inline-block">United States</span>
                    </a>

                    <div id="languageDropdown" class="dropdown-menu dropdown-unfold u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="languageDropdownInvoker" style="animation-duration: 300ms;">
                        <a class="dropdown-item active" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">English</a>
                        <a class="dropdown-item" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Deutsch</a>
                        <a class="dropdown-item" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Español‎</a>
                    </div>
                </div>
                <!-- End Language -->

                <div class="ml-auto">
                    <!-- Jump To -->
                    <div class="d-inline-block d-sm-none position-relative mr-2">
                        <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#jumpToDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                            Jump to
                        </a>

                        <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="jumpToDropdownInvoker" style="animation-duration: 300ms;">
                            <a class="dropdown-item" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/faq.html">Help</a>
                            <a class="dropdown-item" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/contacts-agency.html">Contacts</a>
                        </div>
                    </div>
                    <!-- End Jump To -->

                    <!-- Links -->
                    <div class="d-none d-sm-inline-block ml-sm-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0">
                                <a class="u-header__navbar-link" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/faq.html">Help</a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="u-header__navbar-link" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/contacts-agency.html">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Links -->
                </div>
            </div>
        </div>
        <!-- End Topbar -->

        <div id="logoAndNav" class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space hs-menu-initialized hs-menu-horizontal">
                <!-- Logo -->
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="https://htmlstream.com/preview/front-v2.9.2/html/home/index.html" aria-label="Front">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"></path>
                        <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"></path>
                        <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"></path>
                        <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"></path>
            </svg>
                    <span class="u-header__navbar-brand-text">Front</span>
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                    <ul class="navbar-nav u-header__navbar-nav">
                        <!-- Home -->
                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="/">Home</a>
                        </li>
                        <!-- End Home -->

                        <!-- Shop to categories -->
                        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="440px" data-position="right">
                            <a id="shopMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                            <!-- Shop - Mega Menu -->
                            <div class="hs-mega-menu u-header__sub-menu u-header__mega-menu-position-right-fix--md" aria-labelledby="shopMegaMenu" style="display: none;">
                                <div class="u-header__mega-menu-wrapper">
                                    <span class="u-header__sub-menu-title">Shop Elements</span>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <ul class="u-header__sub-menu-nav-group">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/classic.html">Classic</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/categories.html">Categories</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/categories-sidebar.html">Categories Sidebar</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/products-grid.html">Products Grid</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/products-list.html">Products List</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <ul class="u-header__sub-menu-nav-group">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/single-product.html">Single Product</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/empty-cart.html">Empty Cart</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/cart.html">Cart</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/checkout.html">Checkout</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="https://htmlstream.com/preview/front-v2.9.2/html/shop/order-completed.html">Order Completed</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Shop - Mega Menu -->
                        </li>
                        <!-- End Shop to categories -->

                        <li class="nav-item u-header__nav-item">
                            <a class="nav-link u-header__nav-link" href="/">About Us</a>
                        </li>

                        <!-- Docs -->
                        <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="260px" data-position="right">
                            <a id="docsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Authors</a>

                            <!-- Docs - Submenu -->
                            <div class="hs-mega-menu u-header__sub-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px; display: none;">
                                <!-- Promo Item -->
                                <div class="u-header__promo-item">
                                    <a class="u-header__promo-link" href="https://htmlstream.com/preview/front-v2.9.2/documentation/index.html">
                                        <div class="media align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve" class="injected-svg js-svg-injector u-header__promo-icon"><style type="text/css"> .icon-2-0{fill:none;stroke:#377DFF;}  .icon-2-1{fill:none;stroke:#BDC5D1;}  .icon-2-2{fill:#377DFF;}  .icon-2-3{fill:#BDC5D1;}  .icon-2-4{fill:#FFFFFF;}</style><path class="icon-2-0 fill-none stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M99.1,113.3"></path><path class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15.1,75.6V11l4.4-4.3l4.3,4.3l4.3-4.3l4.3,4.3l4.3-4.3l4.3,4.3l4.3-4.3l4.3,4.3l4.3-4.3l4.3,4.3l4.3-4.3  l4.3,4.3l4.3-4.3l4.3,4.3l4.3-4.3l4.3,4.3L89,6.7l4.4,4.3v96.5c0,3.2,2.6,5.8,5.8,5.8l0,0c3.2,0,5.8-2.6,5.8-5.8V13.2h-5.8v93.1"></path><line class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="99.1" y1="113.3" x2="26.1" y2="113.3"></line><g opacity=".5"><path class="icon-2-3 fill-gray-400" d="M78.1,44.5H39.2c-4.1,0-7.3-3.3-7.3-7.3v0c0-4.1,3.3-7.3,7.3-7.3h38.9c4.1,0,7.3,3.3,7.3,7.3v0   C85.5,41.2,82.2,44.5,78.1,44.5z"></path></g><g><path class="icon-2-2 fill-primary" d="M73.1,38H34.2c-4.1,0-7.3-3.3-7.3-7.3v0c0-4.1,3.3-7.3,7.3-7.3h38.9c4.1,0,7.3,3.3,7.3,7.3v0   C80.5,34.7,77.2,38,73.1,38z"></path></g><g><path class="icon-2-4 fill-white" d="M65.4,32.3H41.9c-0.9,0-1.6-0.7-1.6-1.6v0c0-0.9,0.7-1.6,1.6-1.6h23.5c0.9,0,1.6,0.7,1.6,1.6v0   C67,31.5,66.3,32.3,65.4,32.3z"></path></g><g opacity=".5"><line class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3.8" y1="86" x2="33.1" y2="86"></line><line class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3.8" y1="93.5" x2="33.1" y2="93.5"></line><line class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3.8" y1="101.1" x2="18.3" y2="101.1"></line><line class="icon-2-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="27.3" y1="101.1" x2="33.1" y2="101.1"></line></g><line class="icon-2-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="54.4" y1="90.6" x2="54.4" y2="102.8"></line><line class="icon-2-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="62.3" y1="87.1" x2="62.3" y2="102.8"></line><line class="icon-2-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="70.3" y1="89.7" x2="70.3" y2="102.8"></line><line class="icon-2-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="78.3" y1="81.8" x2="78.3" y2="102.8"></line><polyline class="icon-2-0 fill-none stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="50.6,86 64.2,75.6 69,81.3 80.9,71.2 "></polyline></svg>
                                            <div class="media-body">
                          <span class="u-header__promo-title">
                            Documentation
                            <span class="badge badge-primary badge-pill ml-1">v2.9</span>
                          </span>
                                                <small class="u-header__promo-text">Development guides</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Promo Item -->

                                <!-- Promo Item -->
                                <div class="u-header__promo-item">
                                    <a class="u-header__promo-link" href="https://htmlstream.com/preview/front-v2.9.2/starter/index.html">
                                        <div class="media align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" style="enable-background:new 0 0 120 120;" xml:space="preserve" class="injected-svg js-svg-injector u-header__promo-icon"><style type="text/css"> .icon-1-0{fill:#BDC5D1;}  .icon-1-1{fill:none;stroke:#BDC5D1;}  .icon-1-2{fill:#377DFF;}  .icon-1-3{fill:none;stroke:#FFFFFF;}  .icon-1-4{fill:none;stroke:#377DFF;}</style><circle class="icon-1-0 fill-gray-400" opacity=".5" cx="72" cy="49.3" r="31.4"></circle><line class="icon-1-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="87.2" y1="88.7" x2="77.9" y2="79.5"></line><circle class="icon-1-2 fill-primary" cx="58.5" cy="54.7" r="31.4"></circle><path class="icon-1-3 fill-none stroke-white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M80.3,41.6c2.5,4.2,3.7,9.1,3.5,13.9c-0.2,6.2-2.7,12.3-7.5,17c-9.9,9.9-26,9.9-36,0c-9.9-9.9-9.9-26,0-36  c9.9-9.9,26-9.9,36,0"></path><line class="icon-1-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="86" y1="77.6" x2="92.2" y2="83.8"></line><path class="icon-1-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M115.9,112.5L115.9,112.5c-2.6,2.6-6.9,2.6-9.5,0L84.9,91.1l9.5-9.5l21.5,21.5  C118.5,105.6,118.5,109.9,115.9,112.5z"></path><path class="icon-1-3 fill-none stroke-white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M54.5,37.9c0,0-10.6,0.6-12.6,11.4"></path><path class="icon-1-1 fill-none stroke-gray-400" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M36.6,83H7c-2.6,0-4.8-2.1-4.8-4.8V10.8c0-2.6,2.1-4.8,4.8-4.8h103.2c2.6,0,4.8,2.1,4.8,4.8v67.4  c0,2.6-2.1,4.8-4.8,4.8h-8.2"></path><ellipse class="icon-1-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="35.2" cy="16" rx="3.1" ry="3.1"></ellipse><circle class="icon-1-1 fill-none stroke-gray-400" opacity=".5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="23.6" cy="16" r="3.1"></circle><circle class="icon-1-4 fill-none stroke-primary" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="12" cy="16" r="3.1"></circle></svg>
                                            <div class="media-body">
                                                <span class="u-header__promo-title">Get started</span>
                                                <small class="u-header__promo-text">Components and snippets</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- End Promo Item -->
                            </div>
                            <!-- End Docs - Submenu -->
                        </li>
                        <!-- End Docs -->

                        <!-- Button -->
                        <li class="nav-item u-header__nav-last-item">
                            <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
                                Login
                            </a>
                        </li>
                        <!-- End Button -->
                    </ul>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN ========== -->
<main id="content" role="main">
    @yield('content')
</main>
<!-- ========== END MAIN ========== -->

<!-- ========== FOOTER ========== -->
<footer>
    <!-- Lists -->
    <div class="border-bottom">
        <div class="container space-2">
            <div class="row justify-content-md-between">
                <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                    <h4 class="h6 font-weight-semi-bold">About</h4>

                    <!-- List Group -->
                    <ul class="list-group list-group-flush list-group-borderless mb-0">
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/about-agency.html">About</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/services-agency.html">Services</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/careers.html">Careers</a></li>
                    </ul>
                    <!-- End List Group -->
                </div>

                <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                    <h4 class="h6 font-weight-semi-bold">Account</h4>

                    <!-- List Group -->
                    <ul class="list-group list-group-flush list-group-borderless mb-0">
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/account/dashboard.html">Account</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/account/my-tasks.html">My tasks</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/account/projects.html">Projects</a></li>
                    </ul>
                    <!-- End List Group -->
                </div>

                <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                    <h4 class="h6 font-weight-semi-bold">Resources</h4>

                    <!-- List Group -->
                    <ul class="list-group list-group-flush list-group-borderless mb-0">
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/faq.html">Help</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/terms.html">Terms</a></li>
                        <li><a class="list-group-item list-group-item-action" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/privacy.html">Privacy</a></li>
                    </ul>
                    <!-- End List Group -->
                </div>

                <div class="col-md-6 col-lg-4">
                    <h4 class="h6 font-weight-semi-bold mb-4">We are driven to deliver results for all your businesses.</h4>

                    <!-- Button -->
                    <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2 mr-1">
              <span class="media align-items-center">
                <span class="fab fa-apple fa-2x mr-3"></span>
                <span class="media-body">
                  <span class="d-block">Download on the</span>
                  <strong class="font-size-1">App Store</strong>
                </span>
              </span>
                    </button>
                    <!-- End Button -->

                    <!-- Button -->
                    <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2">
              <span class="media align-items-center">
                <span class="fab fa-google-play fa-2x mr-3"></span>
                <span class="media-body">
                  <span class="d-block">Get it on</span>
                  <strong class="font-size-1">Google Play</strong>
                </span>
              </span>
                    </button>
                    <!-- End Button -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Lists -->

    <!-- Copyright -->
    <div class="container text-center space-1">
        <!-- Logo -->
        <a class="d-inline-flex align-items-center mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/home/index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
          <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"></path>
                <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"></path>
                <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"></path>
                <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"></path>
        </svg>
            <span class="brand brand-primary">Front</span>
        </a>
        <!-- End Logo -->
        <p class="small text-muted">© Front. 2019 Htmlstream. All rights reserved.</p>
    </div>
    <!-- End Copyright -->
</footer>
<!-- ========== END FOOTER ========== -->

<!-- ========== SECONDARY CONTENTS ========== -->
<!-- Account Sidebar Navigation -->
<aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler" style="animation-duration: 500ms; right: 0px;">
    <div class="u-sidebar__scroller">
        <div class="u-sidebar__container">
            <div class="u-header-sidebar__footer-offset">
                <!-- Toggle Button -->
                <div class="d-flex align-items-center pt-4 px-7">
                    <button type="button" class="close ml-auto target-of-invoker-has-unfolds" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Toggle Button -->

                <!-- Content -->
                <div class="js-scrollbar u-sidebar__body mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="u-sidebar__content u-header-sidebar__content">
                                <form class="js-validate" novalidate="novalidate">
                                    <!-- Login -->
                                    <div id="login" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Welcome Back!</h2>
                                            <p>Login to manage your account.</p>
                                        </header>
                                        <!-- End Title -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinEmail">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                          <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                                                    </div>
                                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signinPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                          <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="d-flex justify-content-end mb-4">
                                            <a class="js-animation-link small link-muted" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="slideInUp">Forgot Password?</a>
                                        </div>

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Do not have an account?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="slideInUp">Signup
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>

                                    <!-- Signup -->
                                    <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Welcome to Front.</h2>
                                            <p>Fill out the form to get started.</p>
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
                                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupPassword">Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                          <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <!-- Form Group -->
                                        <div class="form-group">
                                            <div class="js-form-message js-focus-state">
                                                <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                          <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                          </span>
                                                    </div>
                                                    <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required="" data-msg="Password does not match the confirm password." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Input -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Already have an account?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
                                            </a>
                                        </div>

                                        <div class="text-center">
                                            <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                                        </div>

                                        <!-- Login Buttons -->
                                        <div class="d-flex">
                                            <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">
                                                <span class="fab fa-facebook-square mr-1"></span>
                                                Facebook
                                            </a>
                                            <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">
                                                <span class="fab fa-google mr-1"></span>
                                                Google
                                            </a>
                                        </div>
                                        <!-- End Login Buttons -->
                                    </div>
                                    <!-- End Signup -->

                                    <!-- Forgot Password -->
                                    <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                                        <!-- Title -->
                                        <header class="text-center mb-7">
                                            <h2 class="h4 mb-0">Recover Password.</h2>
                                            <p>Enter your email address and an email with instructions will be sent to you.</p>
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
                                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="mb-2">
                                            <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                                        </div>

                                        <div class="text-center mb-4">
                                            <span class="small text-muted">Remember your password?</span>
                                            <a class="js-animation-link small" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="slideInUp">Login
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Forgot Password -->
                                </form>
                            </div>
                        </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                <!-- End Content -->
            </div>

            <!-- Footer -->
            <footer id="SVGwaveWithDots" class="u-sidebar__footer u-sidebar__footer--account" style="">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item pr-3">
                        <a class="u-sidebar__footer--account__text" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/privacy.html">Privacy</a>
                    </li>
                    <li class="list-inline-item pr-3">
                        <a class="u-sidebar__footer--account__text" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/terms.html">Terms</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="u-sidebar__footer--account__text" href="https://htmlstream.com/preview/front-v2.9.2/html/pages/help.html">
                            <i class="fas fa-info-circle"></i>
                        </a>
                    </li>
                </ul>

                <!-- SVG Background Shape -->
                <div class="position-absolute right-0 bottom-0 left-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 126.5" style="margin-bottom: -5px; enable-background:new 0 0 300 126.5;" xml:space="preserve" class="injected-svg js-svg-injector" data-parent="#SVGwaveWithDots">
<style type="text/css">
    .wave-bottom-with-dots-0{fill:#377DFF;}
    .wave-bottom-with-dots-1{fill:#377DFF;}
    .wave-bottom-with-dots-2{fill:#DE4437;}
    .wave-bottom-with-dots-3{fill:#00C9A7;}
    .wave-bottom-with-dots-4{fill:#FFC107;}
</style>
                        <path class="wave-bottom-with-dots-0 fill-primary" opacity=".6" d="M0,58.9c0-0.9,5.1-2,5.8-2.2c6-0.8,11.8,2.2,17.2,4.6c4.5,2.1,8.6,5.3,13.3,7.1C48.2,73.3,61,73.8,73,69  c43-16.9,40-7.9,84-2.2c44,5.7,83-31.5,143-10.1v69.8H0C0,126.5,0,59,0,58.9z"></path>
                        <path class="wave-bottom-with-dots-1 fill-primary" d="M300,68.5v58H0v-58c0,0,43-16.7,82,5.6c12.4,7.1,26.5,9.6,40.2,5.9c7.5-2.1,14.5-6.1,20.9-11  c6.2-4.7,12-10.4,18.8-13.8c7.3-3.8,15.6-5.2,23.6-5.2c16.1,0.1,30.7,8.2,45,16.1c13.4,7.4,28.1,12.2,43.3,11.2  C282.5,76.7,292.7,74.4,300,68.5z"></path>
                        <g>
                            <circle class="wave-bottom-with-dots-2 fill-danger" cx="259.5" cy="17" r="13"></circle>
                            <circle class="wave-bottom-with-dots-1 fill-primary" cx="290" cy="35.5" r="8.5"></circle>
                            <circle class="wave-bottom-with-dots-3 fill-success" cx="288" cy="5.5" r="5.5"></circle>
                            <circle class="wave-bottom-with-dots-4 fill-warning" cx="232.5" cy="34" r="2"></circle>
                        </g>
</svg>
                </div>
                <!-- End SVG Background Shape -->
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</aside>
<!-- End Account Sidebar Navigation -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Go to Top -->
<a class="js-go-to u-go-to animated" href="#" data-position="{&quot;bottom&quot;: 15, &quot;right&quot;: 15 }" data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown" style="display: inline-block; position: fixed; opacity: 0; bottom: 15px; right: 15px;">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Plugins -->
<script src="{{ asset('js/hs.megamenu.js') }}"></script>
<script src="{{ asset('js/svg-injector.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>

<!-- JS Front -->
<script src="{{ asset('js/hs.core.js') }}"></script>
<script src="{{ asset('js/hs.header.js') }}"></script>
<script src="{{ asset('js/hs.unfold.js') }}"></script>
<script src="{{ asset('js/hs.malihu-scrollbar.js') }}"></script>
<script src="{{ asset('js/hs.validation.js') }}"></script>
<script src="{{ asset('js/hs.focus-state.js') }}"></script>
<script src="{{ asset('js/hs.show-animation.js') }}"></script>
<script src="{{ asset('js/hs.svg-injector.js') }}"></script>
<script src="{{ asset('js/hs.go-to.js') }}"></script>

<!-- JS Plugins Init. -->
<script>
    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
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

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#signupPassword'
                }
            }
        });

        // initialization of forms
        $.HSCore.components.HSFocusState.init();

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>

</body>
</html>
