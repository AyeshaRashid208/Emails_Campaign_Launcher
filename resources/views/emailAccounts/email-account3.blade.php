@extends('layouts.dashboard')

@section('content')
@php
	 $email = request('reconnect');
@endphp
<div class="main-content">
	<div class="breadcrumb">
		 <ul>
			  <li>
					<a href="{{url('/')}}/email-account-create">
						 <img src="assets/img/Left.svg" class="less-than" alt=""> <span
							  class="back-sp">Back</span>
					</a>
			  </li>
		 </ul>
	</div>
	<div class="separator-breadcrumb border-top"></div>
	<div class="row ">
		 <!-- ICON BG-->
		 <div class="col-lg-5 col-md-6 col-sm-12 mx-auto">
			  <div class="card mb-4 mine-card">
					<div class="card-body" style="height: auto;">
						 <div class="card-title pt-3">
							  <a href="#">
									<i class="fa-solid fa-chevron-left less-one"></i>
									 <span class="back-sp"><small>Select another provider</small></span>
							  </a>
						 </div>
						 <div class="separator-breadcrumb border-top separato"></div>
						 <div class="card-title-1">
							  <div class="g-icon">
									<img src="assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png"
										 height="50px" width="50px" alt="">
							  </div>
							  <div class="f-dtaa">
									<p class="google-p paraa">Connect Your Google Account</p>
									<p class="bold-cls anoth"><b>Gmail / G-Suite</b></p>
							  </div>
						 </div>
						 <div class="google-data g-daa">
							  <div class="p-goo" style="max-width: 100%!important;">
									<p class="first-p">Enable 2 step varifaction and Genrate app password <span class="sp-color"></p>
							  </div>
						 </div>
						 <div><a href="https://youtu.be/J4CtP1MBtOE?t=10" target="blank"><h5 class="font-weight-bold text-primary text-center my-2"><i class="fa fa-video"></i> See Toturial Video</h5></a></div>
						 <div class="separator-breadcrumb border-top"></div>
						 <div class="google-li">
							  <ol>
									<li>Go to Your account ,<a href="https://myaccount.google.com/security" class="sp-color">Security Setting</a></li>
									<li>Enable <a href="https://myaccount.google.com/signinoptions/two-step-verification" class="sp-color">2 step varifaction</a></li>
									<li> Create An  <a href="https://myaccount.google.com/apppasswords" class="sp-color">App Password </a> </li>
							  </ol>
						 </div>
						<p class="text-light text-center my-2">Selct other For Both App and Device</p>
						 <div class="d-flex justify-content-center mt-5 w-100">
							<a href="{{url('/')}}/create-account-imap"><button type="button" class="btn btn-outline-dark btn-lg mr-3 border-0"><span><i class="fa-solid fa-chevron-left"></i> Back  </span></button> </a>
									
									@if (request('reconnect'))
									<a href="{{url('/')}}/connect-account?reconnect={{$email}}"><button type="button" class="btn btn-primary btn-lg">Next <span><i class="fa-solid fa-chevron-right"></i></span> </button></a>
										@else
										<a href="{{url('/')}}/connect-account"><button type="button" class="btn btn-primary btn-lg">Next <span><i class="fa-solid fa-chevron-right"></i></span> </button></a>
									@endif
								 </div>
						 <div class="cancel-but">
							  <a href="{{url('/')}}/email-account-create" class="mt-3"> Cancel</a>
						 </div>
					</div>
			  </div>
		 </div>
	</div><!-- end of main-content -->
    <!-- end of main-content -->
@endsection
