@extends('layouts.login-layout')

@section('content')

<div class="container">
    <a href="{{ route('welcome') }}">
        <img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
    </a>
    <div class="card">
        <div class="card-header">
            <h3>{{ __('Login') }}</h3>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div>
                    <label for="email" class="email-label form-label">
                        {{ __('Email Address') }}
                    </label>

                    <div class="email-wrapper">
                        <input type="email" id="email" name="email"
                            class="email-input form-input @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="password-label form-label">
                        {{ __('Password') }}
                    </label>

                    <div class="password-wrapper">
                        <input id="password" type="password" name="password" 
                            class="password-input form-input @error('password') is-invalid @enderror"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                
                <div>
                    <div class="remember-me form-check">
                        <input class="form-check-input" type="checkbox"
                            name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="remember-me-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                
                <div class="submit-wrapper">
                    <div class="submit-button-wrapper">
                        <button type="submit"
                            class="submit-button btn">
                            {{ __('Login') }}
                        </button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="forget-password" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <div class="register-redirect" style="font-size:12px;">
        <p style="margin:6px 0px 0px 0px; text-align: center;">New to e-commerce?</p>
        <p style="margin:0px; text-align: center;">
            <a href="{{ route('register') }}"
            style="text-decoration: none;">
                create account
            </a>
        </p>
    </div>
</div>
@endsection
