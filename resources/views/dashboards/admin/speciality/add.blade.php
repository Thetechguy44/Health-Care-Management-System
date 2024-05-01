@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Add Speciality')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Add Speciality</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.specialities.index')}}" class="btn btn btn-primary btn-rounded float-right">View Speciaities</a>
            </div>
        </div>
        <form action="{{route('admin.specialities.store')}}" method="POST">
            @csrf
            @method('post')
            <div class="card-box">
                <div class="form-group form-focus focused">
                    <label class="focus-label">Speciality</label>
                    <input type="text" class="form-control floating" name="speciality">
                    @error('speciality')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection