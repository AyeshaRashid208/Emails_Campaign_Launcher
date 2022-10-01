@extends('layouts.dashboard')

@section('content')

<section class="profile">
    <div class="container-fluid">
        <div class="d-flex">
            <a href="" class="back-page"><i class="fa fa-long-arrow-left"></i></a>
            <h5 class="w-100 text-center font-weight-bold">Profile Setup</h5>
        </div>
        <form action="{{ route('profile.create') }}" method="post" enctype="multipart/form-data" >
            @csrf
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
            </div>
            @endif
            @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </div>
                        @endif
            <div class="row">
                <div class="col-12">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" name="image" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="
                      background-image: url(http://i.pravatar.cc/500?img=7);
                    ">
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="col-12 col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="First Name" name="first_name" />
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Last Name" name="last_name" />
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Email " name="email"  />
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-3 mx-auto mt-4">
                <button class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
</section>

@endsection