@extends('layouts.auth')

@section('content')
<div class="mine-form  login-page">
        <div class="container mx-auto">
            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 col-sm-8 s-col mx-auto mt-5">
                    <div class="leaf"></div>
                    <div class="colr-div"></div>
                    <div class="signup-form">
                        <h4 class="text-center pt-5 mt-5">Logo</h4>
                        <form action="{{ route('register') }}" method="POST" >
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
                            <h5 class="my-3">Sign Up</h5>
                              <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="sp-1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="first_name" class="form-control settings-input" value="" placeholder="Firt name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="sp-1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="last_name" class="form-control settings-input" value="" placeholder="Last name">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="sp-1"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control settings-input" value="" placeholder="Email">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="sp-1"><i class="fas fa-lock"></i></span>
                                </div>

                                <input type="password" name="password" class="form-control settings-input" value="" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="" class="form-a">Forget Password?</a>
                                 <a href="{{ route('login') }}" class="form-a">Login?</a>
                            </div>

                            <div class="d-flex justify-content-center  login_container">
                                <button type="submit" name="button" class="btn login_btn">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection