@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Services')
@section('content')
<div class="page-wrapper" style="min-height: 687px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('admin.services.update') }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h3 class="page-title">Services Settings</h3>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Logo</label>
                        <div class="col-lg-7">
                            <input class="form-control" type="file">
                            <span class="form-text text-muted">Recommended image size is 40px x 40px</span>
                        </div>
                        <div class="col-lg-2">
                            <div class="img-thumbnail float-right"><img src="assets/img/logo-dark.png" alt="" width="40" height="40"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Favicon</label>
                        <div class="col-lg-7">
                            <input class="form-control" type="file">
                            <span class="form-text text-muted">Recommended image size is 16px x 16px</span>
                        </div>
                        <div class="col-lg-2">
                            <div class="img-thumbnail float-right"><img src="assets/img/logo-dark.png" alt="" width="16" height="16"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Services<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" rows="12" name="services"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection