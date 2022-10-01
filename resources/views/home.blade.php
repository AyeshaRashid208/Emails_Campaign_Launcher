@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12 col-md-10 mx-auto">
        <div class="row ">
            <div class="col-12 col-md-7 mx-auto">
                <div class="contant-area resource">
                   <div class="head">
                       <img src="/assets/images/brain.png">
                       <h3>MY RESOURCES</h3>
                   </div>
                        <div class="row text-center mt-3 mb-5 pb-5">
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/video.png"></a>
                                <h6 class="text-white mt-1">Videos</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/notes.png"></a>
                                <h6 class="text-white mt-1">Articles</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/open-book.png"></a>
                                <h6 class="text-white mt-1">Books</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/school.png"></a>
                                <h6 class="text-white mt-1">Courses</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/podcast.png"></a>
                                <h6 class="text-white mt-1">Podcasts</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/guide-book.png"></a>
                                <h6 class="text-white mt-1">Guides</h6>
                            </div>
                             <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/handshake.png"></a>
                                <h6 class="text-white mt-1">External Recommendations</h6>
                            </div>
                             <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"><img src="/assets/images/video.png"></a>
                                <h6 class="text-white mt-1">Tips & Advice</h6>
                            </div>
                            <div class="col-4 mt-3">
                                <a href="#" class="inner-btn"></a>
                                <h6 class="text-white mt-1">.........</h6>
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