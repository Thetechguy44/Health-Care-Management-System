@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Edit Patient')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Patient</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{route('admin.patients.update',$patient->user->id)}}" method="Post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="firstname" type="text" value="{{$patient->user->firstname}}">
                            </div>
                            @error('firstname')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="lastname" type="text" value="{{$patient->user->lastname}}">
                            </div>
                            @error('lastname')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Other Name</label>
                                <input class="form-control" name="othername" type="text" value="{{$patient->user->othername}}">
                            </div>
                            @error('othername')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone" type="number" placeholder="eg. 08012345677" value="{{$patient->user->phone}}">
                            </div>
                            @error('phone')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" type="email" value="{{$patient->user->email}}">
                            </div>
                            @error('email')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender: <span class="text-danger">*</span></label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" value="male" class="form-check-input" {{ $patient->user->gender === 'male' ? 'checked' : '' }}>Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" value="female" class="form-check-input" {{ $patient->user->gender === 'female' ? 'checked' : '' }} >Female
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" name="gender" value="other" class="form-check-input" {{ $patient->user->gender === 'other' ? 'checked' : '' }} >Others
                                    </label>
                                </div>
                                @error('gender')
                                    <span class="alert text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection