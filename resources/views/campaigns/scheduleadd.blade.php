@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="breadcrumb">
        <h1>Edit Mail</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/save" method="post" enctype="multipart/form-data">

                    
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
                        <input type="hidden" value="{{ request()->route('id') }}" name="id">
                            <div class="col-md-6 form-group mb-3">
                                <label for="starttime">Start time</label>
                                <input class="form-control" id="starttime" type="time" name="start_time" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="endtime">End time</label>
                                <input class="form-control" id="endtime" type="time" name="end_time" />
                            </div>
                            
                            <div class="col-md-6 form-group mb-3">
                                <div>
                                <label for="endtime">Select Days</label>
                                </div>
                            <br>
                            
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  checked="checked"  name="monday" /><span>Monday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  checked="checked"  name="tuesday" /><span>Tuesday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  checked="checked" name="wednesday" /><span>Wednesday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  checked="checked"  name="thursday" /><span>Thursday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  checked="checked" name="friday" /><span>Friday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox"  name="saturday"  /><span>Saturday</span><span class="checkmark"></span>
                                </label>
                                <label class="checkbox checkbox-primary">
                                    <input type="checkbox" name="sunday"  /><span>Sunday</span><span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-success">Submit</button>


                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection