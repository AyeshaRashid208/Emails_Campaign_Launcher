@extends('layouts.auth')

@section('content')

 <!-- Begin page -->
 <div class="accountbg" style="background: url('dash-assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

<div class="wrapper-page account-page-full">

    <div class="card shadow-none">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box shadow-none p-4">
                    <div class="p-2">
                        <div class="text-center mt-4">
                            <a href="index.html">
                                <!-- <img src="dash-assets/images/logo.png" height="30" alt="logo"> -->
                                <h4>Logo </h4>
                            </a>
                        </div>

                        <h4 class="font-size-18 mt-5 text-center">Free Register</h4>
                        <p class="text-muted text-center">Get your free Admiria account now.</p>

                      <form class="mt-4" action="{{ route('register') }}" method="POST" >
                      @csrf
                                @if ($errors->any())
                                    <div class="form-group col-12 alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                        <div class="mb-3">
                            <label class="form-label" for="useremail">Email</label>
                            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="username">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="username" placeholder="Enter username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="username">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="username" placeholder="Enter username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="userpassword">Password</label>
                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                        </div>

                        <div class="mb-3">
                            <div class="text-end">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="mt-2 mb-0 row">
                            <div class="col-12 mt-3">
                                <p class="font-size-14 text-muted mb-0">By registering you agree to the  <a href="#">Terms of Use</a></p>
                            </div>
                        </div>
                    </form>

                    <div class="mt-5 pt-4 text-center position-relative">
                        <p>Already have an account ? <a href="/login" class="fw-medium text-primary"> Login </a> </p>
                       
                    </div>

                </div>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection