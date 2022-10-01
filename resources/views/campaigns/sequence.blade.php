@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="breadcrumb">
        <h1>Write Mail</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/storemail" method="post" enctype="multipart/form-data">
                       

                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="row">
                        <input type="hidden" value="{{ request()->route('id') }}" name="campaign_id">
                            <div class="col-md-6 form-group mb-3">
                                <label for="subject">Subject</label>
                                <input class="form-control" id="subject" type="text" name= "subject" placeholder="Subject" />
                            </div>
                           
                            <div class="col-md-12 mb-3">
                                <label for="exampleFormControlTextarea1">Start Typing here </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success">Save</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection