@extends('layouts.dashboard')

@section('content')

<div class="main-content">
	<div class="container">
			<!-- This is for Alert box-->
		<div class="col-md-12 col-lg-12">
			@if (Session::has('msg') and Session::has('type'))
				<div class="alert alert-{{Session('type')}} alert-dismissible fade show" role="alert">
					<strong>{!! Session('msg') !!}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
			@endif
			
		</div>

		 <div class="row mx-0">
			  <div class="col-lg-7 col-md-7 col-sm-12 e-col">
					<h1 class="pg-tite">Email Accounts</h1>
			  </div>
			  <div class="col-lg-5 col-md-5  d-flex  e1-col">
					<span class="check-icon">
						 <i class="fas fa-th-large mr-3"></i>
					</span>
					<div class="Add-btn">
						<a href="{{url('/')}}/create-account">
							<button class="btn btn-outline-primary btn-lg p-2">
								<i class="fa-solid fa-link"></i> 
								Add New
						 </button>
						</a>
					</div>
			  </div>
			  <div class="col-lg-4 col-md-6 col-sm-10 inpu-col mt-4">
					<div class="input-group">
						 <a href="#"><i class="fas fa-search" style="color:grey ;"></i></a>
						 <input type="text" class="form-control" placeholder="Search" name="" id="">
					</div>
					<div class="filter ml-2">
						 <div class="btn-group">
							  <span class="sub-sp"><i class=" fa-solid fa-filter" data-toggle="dropdown"
										 aria-haspopup="true" aria-expanded="false"><span
											  class="filtr-sp ml-1">Filter</span></i>
									<div class="dropdown-menu">
										 <a class="dropdown-item" href="#"><i
													class="fa-solid fa-pause pr-2 ml-1"></i><span class=" dp-ico" >Paused</span> </a>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-heart-crack pr-2" style="color: red;"></i><span class="dp-ico ">Has error
											  </span>
										 </a>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-bullseye bullz" style="color:#8492A6;" id="fa-bull"></i>
											  <span class=" dp-ico">No custom tracking domain</span>
										 </a>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-circle-check pr-2" style="color: #39CC91;"></i><span >Daily campaign
													limited reached</span class="dp-ico">
										 </a>
										 <div class="dropdown-divider"></div>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-fire-flame-curved pr-1" style="color: #39CC91;" id="fr-flame"></i>
											  <span class="dp-ico" >warmup active</span>
										 </a>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-fire-flame-curved pr-1" style="color:#737373;" id="fr-flame"></i>
											  <span class="dp-ico" >warmup paused</span>
										 </a>
										 <a class="dropdown-item" href="#">
											  <i class="fa-solid fa-fire-flame-curved pr-1" style="color:#FFAAB4" id="fr-flame"></i>
											  <span class="dp-ico" >warmup has error</span>
										 </a>

									</div>
						 </div>
						 <!-- <i class="fa-solid fa-filter"></i> <span class="ml-1" style="font-size: 16px;   ">
							  Filter</span> -->
					</div>
			  </div>
				@foreach ($emailac as $e)
					<div class="col-lg-12 col-md-12 mt-4 card card-0 mb-4">
						<div class="row mx-0">
							<div class="col-lg-4 col-md-4 col-sm-6 mine-creds  px-4 pt-3 pb-3">
								<div class="data">
										<h6>{{$e->email_name}}
										</h6>
								</div>
							</div>
							<div class="col-lg-5 col-md-5 five-div">
								<div class="all-data pt-2">
										<div class="first-div f-fiv">
											<i class="fa-solid fa-paper-plane"></i>
											<span class="last-sp" style="color:blue;">0</span>
										</div>
										<div class="sec-div">
											<i class="fa-solid fa-meteor"></i>
											<span class="last-sp">0</span>
										</div>
										<div class="first-div">
											<i class="fa-solid fa-circle-down"></i>

											<span class="last-sp">0</span>
										</div>
										<div class="first-div">
											<i class="fa-solid fa-shield-halved"></i>
											<span class="last-sp">0</span>
										</div>
										<div class="first-div">
											<i class="fa-solid fa-fire"></i>
											<span class="last-sp">0</span>
										</div>

								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 icon-col ">
								<span class="sub-sp">
										<a href="#"><i class="fa-solid fa-bullseye"></i></a>
								</span>
								<span class="sub-sp">
										<a href="#"><i class="fa-solid fa-fire-flame-curved" style="
											color: #39CC91 "></i></a>
								</span>
								<span class="sub-sp">
										<a href="{{url('/')}}/warmup-setting?warmup={{$e->id}}"><i class="fa-solid fa-gear"></i></a>
								</span>
								<!-- Example single danger button -->
								<div class="btn-group">
										<span class="sub-sp"><i class="fa-solid fa-ellipsis " data-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false"></i>
											<div class="dropdown-menu" id="drops-menu">
												<a class="dropdown-item" href="#"><i
															class="fa-solid fa-arrow-trend-up pr-2"></i> <span>Warmup
															Analytics</span> </a>
												<a class="dropdown-item" href="{{url('/')}}/warmup-setting?warmup={{$e->id}}"> <i class="fa-solid fa-gear gear-faa p-0"
															id="fa-gear"></i><span class="gee">Settings
														</span></a>
												<a class="dropdown-item" href="{{url('/')}}/create-account-imap?reconnect={{$e->email_name}}">
													<i	class="fa-solid fa-file-pen pr-0"></i><span class="gee">Reconnect
															account</span></a>
												<a class="dropdown-item" href="?delete={{$e->id}}" onclick="return deleletconfig()"><i
															class="fa-solid fa-trash pr-2"></i><span>Remove account</span></a>
											</div>
								</div>
								</span>
							</div>
						</div>
					</div>
				@endforeach
		 </div>
	</div>

</div><!-- end of main-content -->

@endsection


<script>
function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
// if (del==true){
//    alert ("record deleted")
// }
return del;
}
//add onclick event
// onclick="return deleletconfig()"
</script>