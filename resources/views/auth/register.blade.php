@extends('layouts.app')
@section('title', isset($title) ? $title: 'Register')
@section('content')
<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift Hospital</span>Register <span class="msg">Register a new membership</span></h1>
        <div class="body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="form-line">
                        <input type="text" id="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First name" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                        @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="form-line">
                        <input type="text" id="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last name" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="form-line">
                        <input type="text" id="othername" class="form-control @error('othername') is-invalid @enderror" name="othername" placeholder="Other name" value="{{ old('othername') }}" autocomplete="othername" autofocus>
                        @error('othername')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="form-line">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="name" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    <div class="form-line">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" minlength="6" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group icon before_span">
                    <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    <div class="form-line">
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" minlength="6" placeholder="Confirm Password" required autocomplete="new-password">
                    </div>
                </div>
                <div>
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-raised g-bg-cyan waves-effect">
                        {{ __('Register') }}
                    </button>
                    <!-- <a href="javascript:void(0);" class="btn btn-raised g-bg-cyan waves-effect">SIGN UP</a> -->
                </div>
                <div class="align-center">
                    <a href="{{ url('/login') }}">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>  
</div>
@endsection