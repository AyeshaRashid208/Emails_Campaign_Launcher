@extends('layouts.dashboard')

@section('content')

<div class="main-content ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 card cardu p-5">
                <div class="row">
                    <div class="col-lg-7 abo-col">
                        <div class="media">
                            <img class="mr-3 rounded-circle" src="dash-assets/images/faces/2.jpg" height="200px" width="200px" alt="Generic placeholder image">
                            <div class="media-body mt-5">
                                <h2 class="mt-0"><b>{{$info['first_name']}} {{$info['last_name']}}</b></h2>
                                <p class="pb-0">{{$info['email']}}</p>
                                <a href="/edit_profile"> <button class="btn btn-primary btn-sm mb-2" style="color: white;">Edit Profile</button></a>


                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-5  col-md-12 col-sm-12 mt-5 ">
                                    <div class="about-data">
                                        <h5>{{$info['phone']}}</h5>
                                       

                                    </div>
                                    <div class="about-data">
                                        <h5>{{$info['designation']}}</h5>
                                       

                                    </div>
                                    <div class="about-data">
                                        <h5>{{$info['country']}}</h5>
                                       

                                    </div>
                                   
                                </div>
                

                </div>




            </div>
        </div>
        
    </div>
    @endsection