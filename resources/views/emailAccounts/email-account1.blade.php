@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('/')}}/email-account-create">
                        <img src="assets/img/Left.svg" class="less-than" alt=""> <span class="back-sp">Back</span></a>
                </li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row ">
            <!-- ICON BG-->
            <div class="col-lg-4 col-md-6 col-sm-6 mx-auto">
                <div class="card mb-4 mine-card">
                    <div class="card-body" style="height: auto;">
                        <div class="card-title text-center">Connect a new email account</div>
                        <div class="separator-breadcrumb border-top"></div>
                        <a href="{{url('/')}}/create-account-imap">
									<div class="card-data px-2">
										<div class="g-icon">
											 <img src="assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png"
												  height="50px" width="50px" alt="">
										</div>
										<div class="f-dtaa">
											 <p class="google-p"> Google</p>
											 <p class="bold-cls"><b>Gmail / G-Suite</b></p>
										</div>
								  </div>
								</a>
                        <div class="card-data px-3">
                            <div class="g-icon">
                                <img src="assets/img/microsoft-office-2013-symbol-logo-png-6.png" height="40px"
                                    width="40px" alt="">
                            </div>
                            <div class="f-dtaa">
                                <p class="google-p"> Microsoft</p>
                                <p class="bold-cls"><b>Office 365 / outlook</b></p>
                            </div>
                        </div>
                        <div class="card-data px-3">
                            <div class="g-icon">
                                <img src="assets/img/envelope-clip-art-clkerm-vector-clip-art-online-25.png" height="40px"
                                    width="40px" alt="">
                            </div>
                            <div class="f-dtaa">
                                <p class="google-p">Any Provider</p>
                                <p class="bold-cls"><b>IMAP /SMTP</b></p>
                            </div>
                        </div>
                        <div id="js-sec" class="card-data px-3 d-none">
                            <div class="g-icon">
                                <img src="assets/img/envelope-clip-art-clkerm-vector-clip-art-online-25.png" height="40px"
                                    width="40px" alt="">
                            </div>
                            <div class="f-dtaa">
                                <p class="google-p">Any Provider</p>
                                <p><b>IMAP /SMTP</b></p>
                            </div>
                        </div>
                        <div class="login-bt-div">
                            <button id="btn-anas" class="btn btn-primary"> Show More</button>
                        </div>
                        <div class="cancel-but">
                            <a href="{{url('/')}}/email-account-create" class="mt-3"> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->
   </div>
    <!-- end of main-content -->
@endsection
