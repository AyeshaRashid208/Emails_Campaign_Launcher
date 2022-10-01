@extends('layouts.dashboard')

@section('content')
@php
		$email= request('reconnect');
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
							  <div class="p-goo">
									<p class="first-p">First, let's <span class="sp-color">enable IMAP</span> access
										 for your Google account.</p>
							  </div>
						 </div>
						 <div class="separator-breadcrumb border-top"></div>
						 <div class="google-li">
							  <ol>
									<li>On your computer, open Gmail.</li>
									<li>Click All Settings</li>
									<li>Click the<span class="gea-span pl-1"><i class="fa-solid fa-gear" id="fa-gearz"></i></span> gear icon in the top right corner.</li>
									<li> Click the <a href="https://mail.google.com/mail/u/0/#settings/fwdandpop" class="sp-color">Forwarding and POP/IMAP</a> tab.</li>
									<li>In the "IMAP access" section, select <b> Enable IMAP.</b></li>
									<li>Click <b> Save Changes</b>.</li>
							  </ol>
						 </div>
						 <div class="login-bt-div mt-2 ">
							  <a href="https://help.instantly.ai/en/articles/6241817-how-to-connect-your-google-accounts">
									<span class="show-sp">Show Me How</span><img src="assets/img/Right.svg" alt="">
							  </a>
						 </div>
						 <div class="login-bt-div mt-3">
							@if (request('reconnect'))
							<a href="{{url('/')}}/create-account-security?reconnect={{$email}}"><button id="btn-anas" class="btn btn-primary pri">Yes, IMAP has been enable <img src="assets/img/Right.svg" alt=""></button></a>
							@else
							<a href="{{url('/')}}/create-account-security"><button id="btn-anas" class="btn btn-primary pri">Yes, IMAP has been enable <img src="assets/img/Right.svg" alt=""></button></a>
							@endif
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