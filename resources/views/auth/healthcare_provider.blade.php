@extends('layouts.provider-app')
@section('title', isset($title) ? $title: 'Healthcare Providers Registration')
@section('content')
    <div class="account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="{{ route('healthcare_provider.create') }}" class="form-signin" method="POST">
                        @csrf
                        @method('POST')
						<div class="account-logo">
                            <a href=""><img src="{{asset('admin/assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="firstname" class="form-control">
                            @error('firstname')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastname" class="form-control">
                            @error('lastname')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Other Name</label>
                            <input type="text" name="othername" class="form-control">
                            @error('othername')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="number" name="phone" class="form-control">
                            @error('phone')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Professionality:</label>
                            <select class="form-control" name="role">
                                <option>-- Select --</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Community Health">Community Health</option>
                            </select>
                            @error('role')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Gender:</label>
                            <div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="male"> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="female"> Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="other"> Other
                                    </label>
                                </div>
                            </div>
                            @error('gender')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            @error('password')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @error('password_confirmation')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="{{ url('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection