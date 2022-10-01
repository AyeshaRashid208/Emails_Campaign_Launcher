@extends('layouts.auth')

@section('content')

<!-- ==== login section start ==== -->
<section class="registration clear__top">
    <div class="container">
        <div class="registration__area">
            <h4 class="neutral-top">Set New Password</h4>
            <form action="{{ route('password.update') }}" method="POST" name="login__form" class="form__login">
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
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="input input--secondary">
                    <label for="loginMail">Email*</label>
                    <input type="email" name="email" id="loginMail" placeholder="Enter your email" value="{{ $email ?? old('email') }}" required="required" />
                </div>
                <div class="input input--secondary">
                    <label for="loginPass">Password*</label>
                    <input type="password" name="password" id="loginPass" placeholder="Password" required="required" />
                </div>
                <div class="input input--secondary">
                    <label for="loginPass">Confirm Password*</label>
                    <input type="password" name="password_confirmation" id="loginPass" placeholder="Confirm Password" required="required" />
                </div>
                <div class="input__button">
                    <button type="submit" class="button button--effect">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ==== #login section end ==== -->

@endsection
