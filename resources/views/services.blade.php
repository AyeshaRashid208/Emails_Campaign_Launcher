@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10 mx-auto">
        <div class="row ">
            <div class="col-12 col-md-7 mx-auto">
                <div class="contant-area resource">
                   <div class="head">
                       <img src="/assets/images/brain.png">
                       <h3>MY SERVICES</h3>
                   </div>
                        <div class="row text-center mt-3 mb-5 pb-5">
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/young-man.png"></a>
                                <h6 class="text-white mt-1">Private Investigation</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/presentation.png"></a>
                                <h6 class="text-white mt-1">Master Class</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/process.png"></a>
                                <h6 class="text-white mt-1">One on One Consultation</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/criminal-fighting-with-a-person.png"></a>
                                <h6 class="text-white mt-1">Find My Self Defence Coach</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/magnifier.png"></a>
                                <h6 class="text-white mt-1">Forensic Background Check</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/bank.png"></a>
                                <h6 class="text-white mt-1">Public Record Links</h6>
                            </div>
                             <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/notebook.png"></a>
                                <h6 class="text-white mt-1">External Recommendations</h6>
                            </div>
                             <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/affiliate-marketing.png"></a>
                                <h6 class="text-white mt-1">My Community</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"> <img src="/assets/images/messenger.png"></a>
                                <h6 class="text-white mt-1">Chat w/ an Expert</h6>
                            </div>
                            <div class="col-4"></div>
                            <div class="col-4"></div>
                        </div>
                        <div class="foot">
                            <ul class="d-flex justify-content-between p-0">
                                <li>
                                    <a href="{{ route('resources') }}" class="active"><i class="fa fa-map"></i> <br>MY RESOURCES</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}"><i class="fa fa-plus-circle"></i> <br>MY SERVICES</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-book"></i> <br>MY LIBRARY</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user"></i> <br>MY ACCOUNT</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection