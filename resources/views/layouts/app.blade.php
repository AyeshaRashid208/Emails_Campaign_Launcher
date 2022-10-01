<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/elegantFont.css">
    <link rel="stylesheet" href="/assets/css/meanmenu.css">
    <link rel="stylesheet" href="/assets/css/swipper.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link href="/dash-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="/dash-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
    
    @yield('styles')
</head>

<body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!-- header_area_start -->
    <header class="header-transparent  header-sticky">
        <div>
            <div class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-9 col-xl-9 d-flex align-items-center col-lg-8 col-md-4 col-sm-4 col-6">
                            <div class="sasup-logo mr-35 d-inline-block">
                                <a href="#"><h4>LOGO</h4></a>
                            <!--     <a href="index.html" class="logo-1"><img src="assets/img/logo/logo.png" alt=""></a>
                                <a href="index.html" class="logo-2"><img src="assets/img/logo/logo.png" alt=""></a> -->
                            </div>
                            <div class="sasup-header sasup-header-2 d-inline-block">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a> </li>  
                                          <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-8 col-sm-8  col-6">
                            <div class="sasup-header-action-btn">
                            @auth
                            <a href="/dashboard"
                                    class="sasup-transparent-btn sasup-transparent-btn-2 d-none d-sm-block"><i
                                        class="fal fa-user"></i>Dashboard</a>
                            @else
                                <a href="/login"
                                    class="sasup-transparent-btn sasup-transparent-btn-2 d-none d-sm-block"><i
                                        class="fal fa-user"></i>Log in</a>
                                <a href="/register"
                                    class="sasup-border-btn sasup-broder-btn-space-3 ml-25 d-none d-sm-block">Join
                                    Signup</a>
                            @endauth        

                                <div class="mobile-bar-control d-inline-block d-lg-none">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header_area_start -->
    <!-- responsive sidebar start -->
    <div class="responsive-sidebar d-block d-lg-none">
        <div class="responsive-sidebar-inner">
            <div class="logo mb-30">
                <div class="row">
                    <div class="col-6">
                        <img src="/assets/img/logo/logo.png" alt="">
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <button class="responsive-sidebar-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="resposive-sidebar-menu mb-50">
                <div class="mobile-menu"></div>
            </div>
            <div class="responsive-sidebar-actions">
                <a href="contact.html"
                    class="sasup-border-btn d-block sasup-broder-btn-space-3 ms-0 text-center mb-2">Join
                    Signup</a>
                <a href="contact.html"
                    class="sasup-border-btn d-block sasup-broder-btn-space-3 ms-0 text-center">login</a>
            </div>
        </div>
    </div>
    <!-- responsive sidebar end -->
    @yield('content')

     <!-- footer area start -->
     <footer class="footer-area pt-90" data-bg-color="#eeeff4">
        <div class=" container pb-80 has-border-bottom">
            <div class="footer-1">
                <div class="row">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 order-last col-sm-12 order-lg-first">
                        <div class="footer-widget wow fadeInUp mb-30 mb-lg-0" data-wow-delay=".2s">
                            <div class="logo mb-20">
                               <!--  <a href="i"><img src="assets/img/logo/logo.png" alt=""></a> -->
                               <h5>Logo</h5>
                            </div>
                            <p class="widget-text">Me old mucker cheeky bugger is dont<br> want agro in my flat
                                little.
                            </p>
                            <a href="a" class="sasup-theme-btn sasup-theme-btn-2"><span>Get
                                    started</span></a>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="row mb-30 mb-lg-0">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                                <div class="footer-widget wow fadeInUp mb-30 mb-lg-0" data-wow-delay=".4s">
                                    <h5>Product</h5>
                                    <ul>
                                        <li><a href="se">Product Tour</a></li>
                                        <li><a href="a">Analytics</a></li>
                                        <li><a href="">Product Overview</a></li>
                                        <li><a href="">What’s New</a></li>
                                        <li><a href="">Templates</a></li>
                                        <li><a href="">Quotes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 wow fadeInUp"
                                data-wow-delay=".6s">
                                <div class="footer-widget mb-30 mb-lg-0">
                                    <h5>Resources</h5>
                                    <ul>
                                        <li><a href="">Documentation</a></li>
                                        <li><a href="">Solutions</a></li>
                                        <li><a href="">Road Map</a></li>
                                        <li><a href="">Brand Assets</a></li>
                                        <li><a href="">Feature List</a></li>
                                        <li><a href="">User Flow</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 wow fadeInUp"
                                data-wow-delay=".8s">
                                <div class="footer-widget">
                                    <h5>Solutions</h5>
                                    <ul>
                                        <li><a href="">Support</a></li>
                                        <li><a href="">Proposals</a></li>
                                        <li><a href="">Guides</a></li>
                                        <li><a href="">Contracts</a></li>
                                        <li><a href="">Signatures</a></li>
                                        <li><a href="">Payments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- copyright area start -->
       <!-- copyright area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- footer_area-start -->
    <footer>

    </footer>
    <!-- footer_area-end -->

    <!-- JS here -->
    <script src="/assets/js/jquery.min.js"></script>
	 <script src="https://kit.fontawesome.com/1103de08f5.js" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/swipper-bundle.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/mouse-wheel.min.js"></script>
    <script src="/assets/js/appair.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/back-to-top.min.js"></script>
    <script src="/assets/js/main.js"></script>
    @yield('scripts')
</body>


<!-- Mirrored from www.devsnews.com/template/sasup/sasup/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Aug 2022 17:19:44 GMT -->
</html>