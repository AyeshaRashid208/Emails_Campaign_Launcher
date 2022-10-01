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
                                    <a href="index.html"><!-- <img src="dash-assets/images/logo.png" height="30" alt="logo"> --> <h4>Logo</h4></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Welcome Back !</h4>
                                <p class="text-muted text-center">Sign in to continue to Admiria.</p>

                              <form class="mt-4" action="{{ route('login') }}" method="POST">
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
                                    <label class="form-label" for="username">Email</label>
                                    <input type="email" class="form-control" name="email" id="username" placeholder="Enter username">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                                </div>
    
                                <div class="mb-3 row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="" id="customControlInline">
                                            <label class="form-check-label" for="customControlInline">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                    </div>
                                </div>

                                <div class="mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="pages-recoverpw-2.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                    </div>
                                </div>
                            </form>


                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
 @endsection       