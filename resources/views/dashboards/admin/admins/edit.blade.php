@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Edit Admin')
@section('content')
<div class="page-wrapper" style="min-height: 617px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Admin</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{route('admin.admins.update',$admin->id)}}" method="Post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$admin->user->name}}">
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone <span class="text-danger">*</span></label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ $admin->user->phone }}">
                            </div>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ $admin->user->email }}">
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Role <span class="text-danger">*</span></label>
                                <select class="form-control select select2-hidden-accessible" name="roles[]" tabindex="-1" aria-hidden="true">
                                    <option>-- Select --</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->name }}" 
                                        @isset($admin) 
                                            @if($admin->roles->pluck('name')->contains($role->name)) 
                                                selected 
                                            @endif 
                                        @endisset>
                                        {{ $role->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="employee_active" value="option1" checked="">
                            <label class="form-check-label" for="employee_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="employee_inactive" value="option2">
                            <label class="form-check-label" for="employee_inactive">
                            Inactive
                            </label>
                        </div>
                    </div> -->
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Create Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection