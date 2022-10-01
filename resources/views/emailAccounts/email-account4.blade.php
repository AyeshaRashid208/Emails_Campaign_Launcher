@extends('layouts.dashboard')

@section('content')
@php
	 $email = request('reconnect');
@endphp
<div class="main-content">
	<div class="container em-cont">
		{{-- This is Alert Box  --}}

		<div class="col-md-12 col-lg-12">
			@if (Session::has('msg') and Session::has('type'))
				<div class="alert alert-{{Session('type')}} alert-dismissible fade show" role="alert">
					<strong>{!! Session('msg') !!}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
			@endif
			@if ($errors->any())
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your Email OR password.
				</div>
			@endif
		</div>


		<!--.................................................-->
		<div class="row mx-0">
			<div class="col-lg-6 col-md-10 col-sm-12 ema-col mx-auto">

				<div class="separator-breadcrumb border-top"></div>

				<div class="d-flex medi-div mb-4">
						<div class="flex-shrink-0">
							<img src="assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png"
								class="img-fluid" width="50px" height="50px" alt="...">
						</div>
						<div class="flex-grow-1 ms-3">
							<h3>Connect Your Google Account</h3>
							<span class="ml-1">Gmail / G-Suite</span>
						</div>

				</div>
				<form method="POST">
					@csrf
						<div class="form-row">
							<div class="col">
								<label for="inputName">First Name</label>
								<input type="text" name="id" hidden value="{{$email}} ">
								<input type="text" class="form-control" id="inputName" name="firstName">
							</div>
							<div class="col">
								<label for="inputName">Last Name</label>
								<input type="text" class="form-control" id="inputName" name="lastName">
								
							</div>
							<div class="col-12 mt-3">
								<label for="inputEmail4">Email <span class="star-sp" style="color: red;">*</span></label>
								
								@if (request('reconnect'))
								<input name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$email}}">

								@else
								<input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">

								@endif
								</div>
								<div class="col-12 mt-3">
								<label for="inputPassword4"> App Password <span class="star-sp" style="color: red;">*</span> <br>
										<small>Enter your 16 character app password</small> <br>
										<span class="space-sp" style="color: #006BFF;"><a href="#">without any spaces
										</a></span>
								</label>
								<input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
								</div>
								<div class="d-flex justify-content-center mt-5 w-100">
								<a href="{{url('/')}}/create-account-security"><button type="button" class="btn btn-outline-dark btn-lg mr-3 border-0"><span><i class="fa-solid fa-chevron-left"></i> Back  </button></a>
									
								<button type="submit"  class="btn btn-success btn-lg">Connect <span><i class="fa-solid fa-chevron-right"></i></span> </button>
								</div>
								<div class="text-center w-100 mt-4">
								<a href="{{url('/')}}/email-account-create">
									<button type="button" class="btn border-0 text-primary bg-transparent btn-lg">Cancel</button>
								</a>
								</div>
						</div>
				</form>
			</div>
		</div>
	</div>

</div><!-- end of main-content -->

    <!-- end of main-content -->
@endsection
