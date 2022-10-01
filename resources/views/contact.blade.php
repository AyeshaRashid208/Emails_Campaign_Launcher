@extends('layouts.app')

@section('content')
<body>

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
                <a href="contact.html" class="sasup-border-btn d-block sasup-broder-btn-space-3 ms-0 text-center mb-2">login</a>
                <a href="contact.html" class="sasup-theme-btn text-center d-inline-block d-sm-none w-100"><span>Free
                        Trial</span></a>
            </div>
        </div>
    </div>
    <!-- responsive sidebar end -->

    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area pt-215 pb-140 mb-110 pb-130" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h3 class="breadcrumb-title">Contact</h3>
                    <div class="breadcrumb-trail">
                        <nav>
                            <ul class="trail-items">
                                <li class="trail-item"><a href="index.html"><span>Home</span></a></li>
                                <li class="trail-item"><span>Contact</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <!-- contact area start -->
        <div class="contact-area">
            <div class="container">
                <div class="row pb-140 justify-content-between">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 mb-40 mb-lg-0">
                        <div class="contact-left-info">
                            <div class="contact-info-left-top mb-30">
                                <h4 class="contact-info-title">Contact Information</h4>
                                <span class="contact-info-subtitle">Naff the little rotter have gutted mate baking
                                    legged.</span>
                            </div>
                            <div class="contact-left-list-wrapper">
                                <div class="single-contact-left-item mb-10">
                                    <div class="icon">
                                        <i class="fal fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="single-contact-left-label">Phone Number</h4>
                                        <span class="single-contact-left-info">+(536) 84 95 62 45</span>
                                    </div>
                                </div>
                                <div class="single-contact-left-item mb-10">
                                    <div class="icon">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="single-contact-left-label">Email Adress</h4>
                                        <span class="single-contact-left-info">sasup@gmail.com</span>
                                    </div>
                                </div>
                                <div class="single-contact-left-item mb-10">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="single-contact-left-label">Local Address</h4>
                                        <span class="single-contact-left-info">Dhaka-1506 Bangladesh</span>
                                    </div>
                                </div>
                                <div class="single-contact-left-item mb-10">
                                    <div class="icon">
                                        <i class="fal fa-share-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="single-contact-left-label contact-left-label-space">Share</h4>
                                        <div class="share-social">
                                            <a href="#" data-color="#1877f2"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" data-color="#1da1f2"><i class="fab fa-twitter"></i></a>
                                            <a href="#" data-color="#ed445e"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#" data-color="#1ab7ea"><i class="fab fa-vimeo-v"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="contact-form wow fadeInUp mb-50 mb-xl-0" data-wow-delay=".2s">
                            <form action="https://www.devsnews.com/template/sasup/sasup/mail.php" method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="post-input post-input-2">
                                            <label for="name" class="post-input-label-defualt">Name *</label>
                                            <input type="text" name="name" placeholder="Name" id="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <div class="post-input post-input-2">
                                            <label for="email" class="post-input-label-defualt">Email *</label>
                                            <input type="email" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="post-input post-input-2">
                                            <label for="name" class="post-input-label-defualt">Website
                                                *</label>
                                            <input type="text" name="website" placeholder="Website" id="website">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="comment" class="post-input-label-defualt">Comment *</label>
                                        <div class="post-input has-textarea">
                                            <textarea id="comment" name="message" placeholder="Type here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="post-check mb-30">
                                            <input type="checkbox">
                                            <span>By clicking this I have read and agree to the Terms &
                                                Conditions.</span>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="sasup-theme-btn sasup-theme-btn-2 transition-5">Submit
                                    Message</button>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14562.957063456197!2d90.69413688654156!3d24.145793130695765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375682765bb23567%3A0x7f5b0d890f8dffbd!2sMonohardi!5e0!3m2!1sen!2sbd!4v1629787582901!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- contact area end -->
    </main>
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- footer area start -->
    <footer class="footer-area pt-300 sasup-footer-4-space pb-45" data-bg-color="#110F2A">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="sasup-footer-widget-4 sasup-footer-widget-4-1 mb-40">
                        <div class="sasup-logo-4 mb-25">
                            <h5 class="text-white">Logo</h5>
                        </div>
                        <p class="mb-25">Build a better website for your technology business today.</p>
                        <div class="sasup-footer-widget-contact-4 mb-25">
                            <a href="#">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9745 14.8805C17.9745 15.1865 17.9065 15.501 17.762 15.807C17.6175 16.113 17.4305 16.402 17.184 16.674C16.7675 17.133 16.3085 17.4645 15.79 17.677C15.28 17.8895 14.7275 18 14.1325 18C13.2655 18 12.339 17.796 11.3615 17.3795C10.384 16.963 9.4065 16.402 8.4375 15.6965C7.46 14.9825 6.5335 14.192 5.6495 13.3165C4.774 12.4325 3.9835 11.506 3.278 10.537C2.581 9.568 2.02 8.599 1.612 7.6385C1.204 6.6695 1 5.743 1 4.859C1 4.281 1.102 3.7285 1.306 3.2185C1.51 2.7 1.833 2.224 2.2835 1.799C2.8275 1.2635 3.4225 1 4.0515 1C4.2895 1 4.5275 1.051 4.74 1.153C4.961 1.255 5.1565 1.408 5.3095 1.629L7.2815 4.4085C7.4345 4.621 7.545 4.8165 7.6215 5.0035C7.698 5.182 7.7405 5.3605 7.7405 5.522C7.7405 5.726 7.681 5.93 7.562 6.1255C7.4515 6.321 7.29 6.525 7.086 6.729L6.44 7.4005C6.3465 7.494 6.304 7.6045 6.304 7.7405C6.304 7.8085 6.3125 7.868 6.3295 7.936C6.355 8.004 6.3805 8.055 6.3975 8.106C6.5505 8.3865 6.814 8.752 7.188 9.194C7.5705 9.636 7.9785 10.0865 8.4205 10.537C8.8795 10.9875 9.3215 11.404 9.772 11.7865C10.214 12.1605 10.5795 12.4155 10.8685 12.5685C10.911 12.5855 10.962 12.611 11.0215 12.6365C11.0895 12.662 11.1575 12.6705 11.234 12.6705C11.3785 12.6705 11.489 12.6195 11.5825 12.526L12.2285 11.8885C12.441 11.676 12.645 11.5145 12.8405 11.4125C13.036 11.2935 13.2315 11.234 13.444 11.234C13.6055 11.234 13.7755 11.268 13.9625 11.3445C14.1495 11.421 14.345 11.5315 14.5575 11.676L17.371 13.6735C17.592 13.8265 17.745 14.005 17.8385 14.2175C17.9235 14.43 17.9745 14.6425 17.9745 14.8805Z" stroke="#FF785A" stroke-width="1.5" stroke-miterlimit="10" />
                                    <path d="M15.0253 6.95059C15.0253 6.44059 14.6258 5.65859 14.0308 5.02109C13.4868 4.43459 12.7643 3.97559 12.0503 3.97559" stroke="#FF785A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.0003 6.95C18.0003 3.6605 15.3398 1 12.0503 1" stroke="#FF785A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                +(264) 474 832 088
                            </a>
                            <a href="#">
                                <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 6C1 2.85 2.8 1.5 5.5 1.5H14.5C17.2 1.5 19 2.85 19 6V12.3C19 15.45 17.2 16.8 14.5 16.8H5.5" stroke="#FF785A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.5 6.44971L11.683 8.69971C10.756 9.43771 9.235 9.43771 8.308 8.69971L5.5 6.44971" stroke="#FF785A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 13.1997H6.4" stroke="#FF785A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1 9.6001H3.7" stroke="#FF785A" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> hello@lor3m.com
                            </a>
                        </div>
                        <div class="sasup-footer-widget-social-link-4">
                            <h5 class="title">Follow Us</h5>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="sasup-footer-widget-4 pl-100 sasup-footer-widget-4-2 mb-40">
                        <h5 class="sasup-footer-widget-title-4">Overview</h5>
                        <ul class="mt-35">
                            <li><a href="#!">Home</a></li>
                            <li><a href="#!">Product</a></li>
                            <li><a href="#!">Pricing</a></li>
                            <li><a href="#!">Integrations</a></li>
                            <li><a href="#!">Faq Details</a></li>
                            <li><a href="#!">Team</a></li>
                            <li><a href="#!">Contact US</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="sasup-footer-widget-4 pl-30 sasup-footer-widget-4-2 mb-40">
                        <h5 class="sasup-footer-widget-title-4">Company</h5>
                        <ul class="mt-35">
                            <li><a href="#!">Web Design</a></li>
                            <li><a href="#!">Our customers</a></li>
                            <li><a href="#!">Wordpress</a></li>
                            <li><a href="#!">Login</a></li>
                            <li><a href="#!">Password</a></li>
                            <li><a href="#!">Online Marketing</a></li>
                            <li><a href="#!">404 page</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6">
                    <div class="sasup-footer-widget-4 sasup-footer-widget-4-2 mb-40">
                        <h5 class="sasup-footer-widget-title-4">Newsletter</h5>
                        <div class="sasup-newspaper-form-4 mt-35">
                            <form action="#" class="mb-15">
                                <input type="email" placeholder="Email" name="email" id="email">
                                <button type="submit">Submit</button>
                            </form>
                            <p>By using this Website, you agreed to accept all terms and conditions written in here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->
    <!-- copyright area start -->
    <div class="copyright-area pt-30 pb-30" data-bg-color="#eeeff4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-7">
                    <p class="copyright-text">© 2022 Sasup - All Rights Reserved Made by <a href="about.html" data-color="#2f75ff">Lor3m</a>
                    </p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-5">
                    <div class="text-lg-end">
                        <div class="footer-social">
                            <a href="#" data-bg-color="#3b5998"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" data-bg-color="#1da1f2"><i class="fab fa-twitter"></i></a>
                            <a href="#" data-bg-color="#e60023"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" data-bg-color="#1ab7ea"><i class="fab fa-vimeo-v"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright area end -->

    <!-- JS here -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/swipper-bundle.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/mouse-wheel.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>
    <script src="/assets/js/appair.min.js"></script>
    <script src="/assets/js/parallex.js"></script>
    <script src="/assets/js/back-to-top.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
@endsection