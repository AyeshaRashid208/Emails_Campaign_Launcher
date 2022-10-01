@extends('layouts.dashboard')

@section('content')
@php
	$id =request('warmup');
	$e = App\models\emailAccounts::where('id',$id)->first();
	$w = App\models\warmup::where('email_account_id',$id)->first();
	// dd($w);
	// dd($email);
@endphp
   <!-- ============ Body content start ============= -->

	<div class="main-content ">
		<div class="breadcrumb">
			 <ul>
				  <li><a href="{{url('/')}}/email-account-create">
							 <img src="assets/img/Left.svg" class="less-than" alt=""> <span
								  class="back-sp">Back</span></a></li>
			 </ul>
		</div>
		<div class="separator-breadcrumb border-top"></div>
		<div class="col-md-10 mx-auto mt-5">
			 <div class="card mb-4">
				  <div class="card-body p-5">
						<h5 class="card-title mb-3 p-3 ">{{$e->email_name}}</h5>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							 <li class="nav-item" role="presentation">
								  <button class="nav-link active" id="pills-home-tab" data-toggle="pill"
										data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
										aria-selected="true">Warmup</button>
							 </li>
							 <li class="nav-item" role="presentation">
								  <button class="nav-link" id="pills-profile-tab" data-toggle="pill"
										data-target="#pills-profile" type="button" role="tab"
										aria-controls="pills-profile" aria-selected="false">Setting</button>
							 </li>
						</ul>
						<div class="separator-breadcrumb border-top ml-5 mr-5"></div>
						<div class="tab-content" id="pills-tabContent mb-5">
							 <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
								  aria-labelledby="pills-home-tab">
								  <div class="row">
										<div class="col-lg-12 col-sm-12 ">
											 <div class="nav nav-pills" id="v-pills-tab" role="tablist"
												  aria-orientation="vertical">
												  <div class="btn-group btn-group-toggle" data-toggle="buttons">
														<label class="btn btn-secondary active " id="btn-tog">
															 <input type="radio" name="options" id="option1"
																  autocomplete="off" checked> Enable
														</label>
														<label class="btn btn-secondary" id="btn-tog">
															 <input type="radio" name="options" id="option2"
																  autocomplete="off"> Disable
														</label>
												  </div>
											 </div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											 <div class="tab-content" id="v-pills-tabContent">
												  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
														aria-labelledby="v-pills-home-tab">
														<div class="row">
															 <div class="col-lg-6  col-sm-12">
																  <div class="card tab-card p-3  mb-3">
																		<div class="card-body cardu-bodies">
																			 <h5 class="card-title" style="color: #A4AFBD;">
																				  Deliverability - last 7 days</h5>
																			 <h6 class="card-subtitle mb-2 text-center"
																				  style="font-size: 40px;"><i
																						class="fa-solid fa-face-smile-beam"></i>
																			 </h6>
																			 <h6 class="card-subtitle mb-2 text-center"
																				  style="font-size: 20px;">Superb!</h6>
																			 <p class="card-text text-center"
																				  style="font-size: 17px;">100% of your warmup
																				  emails landed in inbox</p>
																		</div>
																  </div>
															 </div>
															 <div class="col-lg-6  col-sm-12">
																  <div class="card tab-card  p-3">
																		<div class="card-body cardu-bodies">
																			 <h5 class="card-title" style="color: #A4AFBD;">
																				  Summary - last 7 days</h5>
																			 <ul
																				  style="list-style: none; margin: 0px !important; padding-left: 5px;">
																				  <li>
																						<i class="fa-solid fa-meteor"></i><b
																							 class="pl-2">0</b>
																						warmup emails sent
																				  </li>
																				  <li>
																						<i class="fa-solid fa-meteor"></i> <b
																							 class="pl-1">0</b>
																						warmup emails sent
																				  </li>
																				  <li>
																						<i class="fa-solid fa-meteor"></i> <b
																							 class="pl-1">0</b>
																						warmup emails sent
																				  </li>
																				  <li>
																						<i class="fa-solid fa-meteor"></i><b
																							 class="pl-2">0</b>
																						warmup emails sent
																				  </li>

																			 </ul>
																		</div>
																  </div>
															 </div>
														</div>
												  </div>
											 </div>
										</div>
								  </div>
							 </div>
							 <div class="tab-pane fade" id="pills-profile" role="tabpanel"
								  aria-labelledby="pills-profile-tab">
								  <div class="setting-butt">
										<i class="fa-solid fa-pause mr-3" style="color: #737373;"></i>
										<button class="btn btn-primary btn-lg"> <span><i class="fa-solid fa-file"
														style="color:whitesmoke;"></i></span> SAVE</button>
								  </div>
								  <div class="row">
										<div class="media  ml-3">
											 <a href="#"><i class="fa-solid fa-circle-user pr-2"
														style="color:palegreen; font-size: 20px;"></i></a>
											 <div class="media-body">
												  <h5 class="mt-0">Sender name</h5>
											 </div>
										</div>
										<div class="col-lg-12  col-sm-12 mt-2">
												<form method="POST">
												@csrf
													<div class="row mb-5">
													<input type="text" name="email_account_id" hidden value="{{$id}}">
														<div class="col-lg-6 col-sm-12">
																<label>First Name</label>
																<input type="text" class="form-control" name="firstName" value="{{$w->sender_first_name}}">
														</div>
														<div class="col-lg-6 col-sm-12">
																<label>Last Name</label>
																<input type="text" class="form-control" name="lastName" value="{{$w->sender_last_name}}">
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>
													<div class="media mb-3">
														<a href="#"><i class="fa-solid fa-arrow-up pr-2"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Daily campaign limit</h5>
														</div>
													</div>
													<div class="row mb-5">
														<div class="col-lg-6 col-sm-12">
																<label>Maximum campaign emails to send per day</label>
																<input type="tel" class="form-control" name="daily_compaign_limit" value="{{$w->daily_compaign_limit}}">
														</div>
													</div>
													<div class="media mb-3">
														<a href="#"><i class="fa-solid fa-bullseye mr-2 bulla p-0"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Custom Tracking Domain</h5>
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>

													<div class="card caradz p-4" style="height:85px; cursor: pointer;">
														<div class="form-group">
																<div class="form-check pt-2">
																<input type="number" class="customtrackingdomain" name="custom_tracking_domain" hidden value=" ">
																@if ($w->custom_tracking_domain == 1)
																	<input class="form-check-input custom-tracking-domain" checked type="checkbox" id="gridCheck">
																@else
																	<input class="form-check-input custom-tracking-domain" type="checkbox" id="gridCheck">
																@endif
																
																	<label class="form-check-label" for="gridCheck">
																		Check me out
																	</label>
																</div>
														</div>
													</div>
													<div class="card mt-3 p-4">
														<p>
																<b>
																	Add a new CNAME record for your tracking domain or
																	subdomain.
																</b>
														</p>
														<div class="row">
																<div class="col">
																	<div class="card p-3"
																		style="background-color: #fffefe;box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
																		<div class="hide-sect d-flex">
																				<p><b> Host:</b></p>
																				<p class="ml-2"><b>Your tracking domain or
																						subdomain.</b></p>
																		</div>
																		<div class="hide-sect d-flex">
																				<p><b>Type:</b></p>
																				<p class="ml-2"><b>CNAME</b></p>
																		</div>
																		<div class="hide-sect d-flex">
																				<p><b>Value:</b></p>
																				<p class="ml-2"><b>prox.itrackly.com</b></p>
																		</div>
																		<div class="btn-hidden">
																				<button class="btn btn-secondary btn-sm"
																					style="background-color: #3C3C3C !important; color: white !important;">Copy</button>
																		</div>
																		<div class="hide-p mt-3">
																				<p>
																					<b>
																						Your tracking domain or subdomain:.
																					</b>
																				</p>
																		</div>
																		<input type="text" class="form-control"
																				placeholder="inst.Yourdomain.com">
																		<div class="btn-hidden mt-4">
																				<button class="btn btn-secondary btn-sm">Check
																					Status</button>
																		</div>
																	</div>
																</div>

														</div>

													</div>

													<div class="media mt-5 mb-3">
														<a href="#"><i class="fa-solid fa-fire-flame-curved flamo mr-2 p-0"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Warmup Settings | Basics</h5>
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>
													<div class="card p-5">
														<div class="row mb-5">
																<div class="col">
																	<label>Increase per day</label>
																	<input type="text" class="form-control" name="increase_per_limit" value="{{$w->w_basic_setting_increase_per_day}}">
																</div>
																<div class="col-lg-6 col-sm-12">
																	<label>Daily warmup limit</label>
																	<input type="text" class="form-control" name="daily_limit" value="{{$w->w_basic_setting_daily_limit}}">
																</div>
														</div>
														<div class="form-group">
																<div class="form-check">
																<input type="number" class="disableslowwarmup" name="disable_slow_warmup" hidden value="">
																@if ($w->w_basic_setting_disable_slow_warmup ==1)
																<input class="form-check-input disable-slow-warmup" type="checkbox" checked id="gridCheck" name="disable_slow_warmup">
																@else
																	 <input class="form-check-input disable-slow-warmup" type="checkbox" id="gridCheck" name="disable_slow_warmup">
																@endif
																
																	<label class="form-check-label pt-1" for="gridCheck">
																		Disable slow warmup
																	</label>
																</div>
														</div>
														<div class="row mb-5">
																<div class="col-lg-6 col-sm-12">
																	<label>Reply rate %</label>
																	<input type="text" class="form-control" name="reply_rates" {{$w->w_basic_setting_reply_rate}}>
																</div>
																<div class="col">
																	<label>Monitor Blacklists</label>
																	<br>
																	<div class="btn-group btn-group-toggle"
																		data-toggle="buttons">
																		@if ($w->w_basic_setting_monitor_blacklists == 1)
																		<label class="btn btn-secondary active " id="btn-tog">
																				<input type="radio" name="blacklist" id="option1" value="1"
																					autocomplete="off" checked> Enable
																		</label>
																		@else
																		<label class="btn btn-secondary " id="btn-tog">
																			<input type="radio" name="blacklist" id="option1" value="1"
																				autocomplete="off" checked> Enable
																		</label>
																		@endif
																		@if ($w->w_basic_setting_monitor_blacklists == 0)
																		<label class="btn btn-secondary active" id="btn-tog">
																			<input type="radio" name="blacklist" id="option2" value="0"
																				autocomplete="off"> Disable
																		</label>
																		@else
																		<label class="btn btn-secondary" id="btn-tog">
																		<input type="radio" name="blacklist" id="option2" value="0"
																			autocomplete="off"> Disable
																		</label>
																		@endif
																	
																	</div>
																</div>
																<div class="col-12">
																	<div class="media mt-5 ">
																		<a href="#"><i
																					class="fa-solid fa-fire-flame-curved flamo mr-2 p-0"
																					style="color:palegreen; font-size: 20px;"></i></a>
																		<div class="media-body">
																				<h5 class="mt-0">Warmup Settings | Advanced</h5>
																				<p class="media-text">Advanced settings to make
																					warmup behavior more human-like
																				</p>
																		</div>
																	</div>
																	<div class="separator-breadcrumb border-top"></div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Read
																					emulation

																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																					adipisicing elit. Maxime incidunt esse eos
																					asperiores voluptatum temporibus quos?
																					Recusandae laborum tempore consectetur.
																				</p>
																		</div>
																		<div class="col-lg-6 col-sm-12 heid-col">
																				<div class="btn-group btn-group-toggle"
																					data-toggle="buttons">
																					@if ($w->w_advance_read_emulation == 1)
																					<script type="text/javascript">
																						function myFunc(variable){
																							 var s = document.getElementById(variable);
																							 s.value = 0;
																						}   
																						myFunc("option2");
																				  </script>
																					<label class="btn btn-secondary active "
																						id="btn-tog">
																						<input type="radio" name="advance_read_emulation" value="1"
																								id="option1" autocomplete="off" checked>
																						Enable
																					</label>
																					@else
																					<label class="btn btn-secondary "
																						id="btn-tog">
																						<input type="radio" name="advance_read_emulation" value="1"
																								id="option2" autocomplete="off" checked>
																						Enable
																					</label>
																					@endif
																					@if ($w->w_advance_read_emulation == 0)
																					<label class="btn btn-secondary active" id="btn-tog">
																						<input type="radio" name="advance_read_emulation" value="0"
																								id="option2" autocomplete="off"> Disable
																					</label>
																					@else
																					<label class="btn btn-secondary" id="btn-tog">
																						<input type="radio" name="advance_read_emulation" value="0"
																								id="option2" autocomplete="off"> Disable
																					</label>
																					@endif
																				</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Warm custom tracking domain

																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																					adipisicing elit. Maxime incidunt esse eos
																					asperiores voluptatum temporibus quos?
																					Recusandae laborum tempore consectetur.
																				</p>
																		</div>
																		<div class="col-lg-6 col-sm-12 mb-4 heid-col">
																				<div class="btn-group btn-group-toggle"
																					data-toggle="buttons">
																					@if ($w->w_advance_custom_tracking_domain == 1)
																					<label class="btn btn-secondary active "
																						id="btn-tog">
																						<input type="radio" name="advance_custom_tracking_domain" value="1"
																								id="option1" autocomplete="off" checked>
																						Enable
																					</label>
																					@else
																					<label class="btn btn-secondary "
																						id="btn-tog">
																						<input type="radio" name="advance_custom_tracking_domain" value="1"
																								id="option1" autocomplete="off" checked>
																						Enable
																					</label>
																					@endif
																					@if ($w->w_advance_custom_tracking_domain == 0)
																					<label class="btn btn-secondary active" id="btn-tog">
																						<input type="radio" name="advance_custom_tracking_domain" value="0"
																								id="option2" autocomplete="off"> Disable
																					</label>
																					@else
																					<label class="btn btn-secondary" id="btn-tog">
																						<input type="radio" name="advance_custom_tracking_domain" value="0"
																								id="option2" autocomplete="off"> Disable
																					</label>
																					@endif
																				</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Random Email range
																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																					adipisicing elit. Maxime incidunt esse eos
																					asperiores voluptatum temporibus quos?
																					Recusandae laborum tempore consectetur.
																				</p>
																				
																				<span class="badge badge-primary mb-4 pl-1">Coming soon</span>
																		</div>
																		<div class="col-lg-6 col-sm-12 ">
																				{{-- <form> --}}
																					<div class="form-group">
																						<label for="formControlRange">Example Range input</label>
																						<input type="range" class="form-control-range" id="formControlRange" name="random_email_range" value="{{$w->w_advance_rendom_email_range_from}}">
																					</div>
																				{{-- </form>  --}}                                                             
																			 </div> 
																		<button class="btn btn-light btn-sm mb-4 ml-3" style="color: white;">show more</button>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Open rate
																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																				</p>
																		</div>
																		<div class="col-lg-6 col-sm-12 ">
																			{{-- <form> --}}
																				<div class="form-group">
																					<label for="formControlRange">Example Range input</label>
																					<input type="range" class="form-control-range" id="formControlRange" name="open_rate" value="{{$w->show_more_open_rate}}">
																				</div>
																			{{-- </form>--}}  
																		</div> 
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Spam Protection
																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																				</p>
																		</div>
																		<div class="col-lg-6 col-sm-12 ">
																			{{-- <form> --}}
																					<div class="form-group">
																						<label for="formControlRange">Example Range input</label>
																						<input type="range" class="form-control-range" id="formControlRange" name="spam_protection" value="{{$w->show_more_spam_protection}}">
																					</div>
																			{{-- </form>         --}}                                                      
																			</div> 
																	</div>
																	<div class="row">
																		<div class="col-lg-6 col-sm-12 heid-one">
																				<div class="hied-data">
																					<i
																						class="fa-solid fa-lines-leaning pr-2"></i>Mark Important
																				</div>
																				<p>
																					Lorem ipsum dolor sit amet consectetur
																				</p>
																		</div>
																		<div class="col-lg-6 col-sm-12 ">
																			{{-- <form> --}}
																				<div class="form-group">
																					<label for="formControlRange">Example Range input</label>
																					<input type="range" class="form-control-range" id="formControlRange" name="mark_important" value="{{$w->show_more_mark_important}}">
																				</div>
																			{{-- </form>  --}}
																		</div>
																	</div>
																</div>
																<div class="last-butt">
																	<button class="btn btn-primary btn-lg"> <span><i
																					class="fa-solid fa-file"
																					style="color:whitesmoke;"></i></span>
																		SAVE</button>
																</div>
														</div>
													</div>
												</form>
										</div>
								  </div>
							 </div>
						</div>
				  </div>
			 </div>
		</div>
  </div><!-- end of main-content -->


	{{-- <div class="main-content ">
		<div class="col-md-10 mx-auto mt-5">
				<div class="card mb-4">
					<div class="card-body p-5">
						<h5 class="card-title mb-3 p-3 ">{{$e->email_name}}</h5>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="pills-home-tab" data-toggle="pill"
										data-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
										aria-selected="true">Warmup</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="pills-profile-tab" data-toggle="pill"
										data-target="#pills-profile" type="button" role="tab"
										aria-controls="pills-profile" aria-selected="false">Setting</button>
								</li>
						</ul>
						<div class="separator-breadcrumb border-top ml-5 mr-5"></div>
						<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
									aria-labelledby="pills-home-tab">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
												<div class="nav nav-pills" id="v-pills-tab" role="tablist"
													aria-orientation="vertical">
													<button class="nav-link active mine-tablink" id="v-pills-home-tab"
														data-toggle="pill" data-target="#v-pills-home" type="button"
														role="tab" aria-controls="v-pills-home"
														aria-selected="true">Disable</button>
													<button class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
														data-target="#v-pills-profile" type="button" role="tab"
														aria-controls="v-pills-profile"
														aria-selected="false">Enable</button>
												</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
														aria-labelledby="v-pills-home-tab">
														<div class="row">
																<div class="col-lg-6  col-sm-12">
																	<div class="card tab-card p-3  mb-3">
																		<div class="card-body">
																				<h5 class="card-title" style="color: #A4AFBD;">
																					Deliverability - last 7 days</h5>
																				<h6 class="card-subtitle mb-2 text-center"
																					style="font-size: 40px;"><i class="fa-solid fa-face-smile-beam"></i></h6>
																				<h6 class="card-subtitle mb-2 text-center"
																					style="font-size: 20px;">Superb!</h6>
																				<p class="card-text text-center"    
																					style="font-size: 17px;">100% of your warmup emails landed in inbox</p>
																		</div>
																	</div>
																</div>
																<div class="col-lg-6  col-sm-12">
																	<div class="card tab-card  p-3">
																		<div class="card-body">
																				<h5 class="card-title" style="color: #A4AFBD;">
																					Summary - last 7 days</h5>
																				<ul
																					style="list-style: none; margin: 0px !important; padding-left: 5px;">
																					<li>
																						<i class="fa-solid fa-meteor"></i> <b>0</b> warmup emails sent
																					</li>
																					<li>
																						<i class="fa-solid fa-meteor"></i>  <b>0</b> warmup emails sent
																					</li>
																					<li>
																						<i class="fa-solid fa-meteor"></i> <b>0</b> warmup emails sent
																					</li>
																					<li>
																						<i class="fa-solid fa-meteor"></i><b>0</b> warmup emails sent
																					</li>

																				</ul>
																		</div>
																	</div>
																</div>
														</div>
													</div>
												</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel"
									aria-labelledby="pills-profile-tab">
									<div class="setting-butt">
										<i class="fa-solid fa-pause mr-3" style="color: #737373;"></i>
										<button class="btn btn-primary btn-lg"> <span><i class="fa-solid fa-file"
														style="color:whitesmoke;"></i></span> SAVE</button>
									</div>
									<div class="row">
										<div class="media  ml-3">
												<a href="#"><i class="fa-solid fa-circle-user pr-2"
														style="color:palegreen; font-size: 20px;"></i></a>
												<div class="media-body">
													<h5 class="mt-0">Sender name</h5>
												</div>
										</div>
										<div class="col-lg-12  col-sm-12 mt-2">
												<form method="POST">
													@csrf
													<div class="row mb-5">
														<input type="text" name="email_account_id" hidden value="{{$id}}">
														<div class="col-lg-6 col-sm-12">
																<label>First Name</label>
																<input type="text" class="form-control" name="firstName">
														</div>
														<div class="col-lg-6 col-sm-12">
																<label>Last Name</label>
																<input type="text" class="form-control" name="lastName">
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>
													<div class="media mb-3">
														<a href="#"><i class="fa-solid fa-arrow-up pr-2"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Daily campaign limit</h5>
														</div>
													</div>
													<div class="row mb-5">
														<div class="col-lg-6 col-sm-12">
																<label>Maximum campaign emails to send per day</label>
																<input type="tel" class="form-control" name="daily_compaign_limit">
														</div>
													</div>
													<div class="media mb-3">
														<a href="#"><i class="fa-solid fa-bullseye mr-2 bulla p-0"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Custom Tracking Domain</h5>
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>
													<div class="card caradz p-3" style="height:70px; cursor: pointer;">
														<div class="form-group">
																<div class="form-check pt-2">
																	<input type="number" class="customtrackingdomain" name="custom_tracking_domain" hidden value="">
																	<input class="form-check-input custom-tracking-domain" type="checkbox" id="gridCheck">
																	<label class="form-check-label" for="gridCheck">
																		Check me out
																	</label>
																</div>
														</div>
													</div>
													<div class="media mt-5 mb-3">
														<a href="#"><i class="fa-solid fa-fire-flame-curved flamo mr-2 p-0"
																	style="color:palegreen; font-size: 20px;"></i></a>
														<div class="media-body">
																<h5 class="mt-0">Warmup Settings | Basics</h5>
														</div>
													</div>
													<div class="separator-breadcrumb border-top"></div>
													<div class="card p-5">
														<div class="row mb-5">
																<div class="col">
																	<label>Increase per day</label>
																	<input type="text" class="form-control" name="increase_per_limit">
																</div>
																<div class="col-lg-6 col-sm-12">
																	<label>Daily warmup limit</label>
																	<input type="text" class="form-control" name="daily_limit">
																</div>
														</div>
														<div class="form-group">
																<div class="form-check">
																	<input type="number" class="disableslowwarmup" name="disable_slow_warmup" hidden value="">
																	<input class="form-check-input disable-slow-warmup" type="checkbox" id="gridCheck" name="disable_slow_warmup">
																	<label class="form-check-label pt-1" for="gridCheck">
																		Disable slow warmup
																	</label>
																</div>
														</div>
														<div class="row mb-5">
																<div class="col-lg-6 col-sm-12">
																	<label>Reply rate %</label>
																	<input type="text" class="form-control" name="reply_rates">
																</div>
																<div class="col">
																	<label>Monitor Blacklists</label>
																	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
																		<li class="nav-item">
																				<a class="nav-link blacklist" id="pills-contact-tab" style="background-color: #465571; color: whitesmoke;"
																					data-toggle="pill" href="#pills-contact" role="tab"
																					aria-controls="pills-contact"
																					aria-selected="false">Enabled</a>
																		</li>
																		<li class="nav-item">
																				<a class="nav-link blacklist" id="pills-contact-tab"  style="background-color:#25A06E; color: whitesmoke;"
																					data-toggle="pill" href="#pills-contact" role="tab"
																					aria-controls="pills-contact"
																					aria-selected="false">Disabled</a>
																		</li>
																	</ul>
																</div>
																<div class="col-12">
																	<div class="media mt-5 ">
																		<a href="#"><i class="fa-solid fa-fire-flame-curved flamo mr-2 p-0"
																					style="color:palegreen; font-size: 20px;"></i></a>
																		<div class="media-body">
																				<h5 class="mt-0">Warmup Settings | Advanced</h5>
																				<p class="media-text">Advanced settings to make warmup behavior more human-like
																				</p>
																		</div>
																	</div>
																	<div class="separator-breadcrumb border-top"></div>
																</div>
																<div class="last-butt">
																	<button type="submit" class="btn btn-primary btn-lg"> <span><i class="fa-solid fa-file"
																					style="color:whitesmoke;"></i></span> SAVE</button>
																</div>
														</div>
													</div>
												</form>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
		</div>
	</div><!-- end of main-content --> --}}

    <!-- end of main-content -->
@endsection


