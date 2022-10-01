@extends('layouts.auth')

@section('content')

<!-- ==== login section start ==== -->
<section class="registration clear__top">
    <div class="container">
        <div class="registration__area">
            <h4 class="neutral-top">Reset Password</h4>
            <form action="{{ route('password.email') }}" method="POST" name="login__form" class="form__login">
                @csrf
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="form-group col-12 alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="input input--secondary">
                    <label for="loginMail">Email*</label>
                    <input type="email" name="email" id="loginMail" placeholder="Enter your email" value="{{ old('email') }}" required="required" />
                </div>
                <div class="input__button">
                    <button type="submit" class="button button--effect">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ==== #login section end ==== -->

@endsection
