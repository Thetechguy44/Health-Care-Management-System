@extends('layouts.app')
@section('title', isset($title) ? $title: 'Login')
@section('content')
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift Hospital</span>Login <span class="msg">Sign in to start your session</span></h1>
        <div class="body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="remember" id="rememberme" {{ old('remember') ? 'checked' : '' }} class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="text-center">
                        @if (Route::has('password.request')) 
                            <a  href="{{ route('password.request') }}">Forgot Password?</a>
                        @endif
                    </div>
                    <div class="align-center">
                        <p class="mt-15 mb-0">Don't have an account? <a href="{{ url('/register') }}" class="text-warning ms-5">Sign Up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>    
@endsection
