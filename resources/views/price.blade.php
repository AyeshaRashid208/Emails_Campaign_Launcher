
@extends('layouts.app')

@section('content')



<body>
   
    <!-- responsive sidebar start -->
    <div class="responsive-sidebar d-block d-lg-none">
        <div class="responsive-sidebar-inner">
            <div class="logo mb-30">
                <div class="row">
                    <div class="col-6">
                        <img src="assets/img/logo/logo.png" alt="">
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
                <a href="contact.html" class="sasup-border-btn d-block sasup-broder-btn-space-3 ms-0 text-center mb-2">Join
                    Sasup</a>
                <a href="contact.html" class="sasup-border-btn d-block sasup-broder-btn-space-3 ms-0 text-center">login</a>
            </div>
        </div>
    </div>
    <!-- responsive sidebar end -->
    <main>
        <section class="pricing-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mx-auto text-center">
                        <h3>Pricing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex e </p>
                    </div>
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Annually</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Monthly</button>
                    </li>
                </ul>
                <div class="tab-content pricce-area" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row ">
                            <div class="col-12 col-md-4 ">
                                <div class="card" style="border-right: 1px solid #f2f2f2;">
                                    <h4>Free</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>25</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 " style="position:relative;">
                                <div class="special-card">
                                    <div class="tag-bage">For advanced collaboration</div>
                                    <div class="bottom-card"></div>
                                </div>
                                <div class="card ">
                                    <h4>Basic</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>25</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card">
                                    <h4>Stander</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>25</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row ">
                            <div class="col-12 col-md-4 ">
                                <div class="card" style="border-right: 1px solid #f2f2f2;">
                                    <h4>Free</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>75</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 " style="position:relative;">
                                <div class="special-card">
                                    <div class="tag-bage">For advanced collaboration</div>
                                    <div class="bottom-card"></div>
                                </div>
                                <div class="card ">
                                    <h4>Basic</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>250</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 ">
                                <div class="card">
                                    <h4>Stander</h4>
                                    <p>Includes unlimited members for anyone getting started with Miro</p>
                                    <h1><sup>$</sup>500</h1>
                                    <p>Unlimited team members </p>
                                    <button class="btn btn-primary w-00 btn-lg">Get Started</button>
                                    <h5>What’s included</h5>
                                    <ul>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                        <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="text-center mt-5 mb-4">See full feature</h3>
                <div class="table-responsive mt-5">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col">Key features</th>
                                <th scope="col">Free</th>
                                <th scope="col">Basic</th>
                                <th scope="col">Standerd</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td>Unlimited</td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td>Unlimited</td>
                                <td>Unlimited</td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td>125</td>
                                <td>Unlimited</td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td>125</td>
                                <td><i class="fa fa-check"></td>
                                <td>Unlimited</td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td>lorem plusam Dolor</td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                                <td><i class="fa fa-check"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-primary rounded-pill px-5">Buy Now</button></td>
                                <td><button class="btn btn-primary rounded-pill px-5">Buy Now</button></td>
                                <td><button class="btn btn-primary rounded-pill px-5">Buy Now</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>


    </main>
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
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
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
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
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

    <!-- footer_area-end -->

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/mouse-wheel.min.js"></script>
    <script src="assets/js/appair.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/back-to-top.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


@endsection