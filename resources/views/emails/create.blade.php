@extends('layouts.dashboard')

@section('content')

<div class="main-content">
    <div class="breadcrumb">
        <h1>Add Account</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="/savemail" method="post" enctype="multipart/form-data">
                       

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
                                <label for="firstname">First Name</label>
                                <input class="form-control" id="firstname" type="text" name= "name" placeholder="First Name" />
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" type="email" name= "email" placeholder="Email" />
                            </div>
                           
                            <div class="col-md-6 form-group mb-3">
                                <label for="firstname">App Password</label>
                                <input class="form-control" id="password" type="text" name= "password" placeholder="Password" />
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