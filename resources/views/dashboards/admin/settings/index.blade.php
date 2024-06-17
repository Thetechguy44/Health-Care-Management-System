@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Company Settings')
@section('content')
<div class="page-wrapper" style="min-height: 687px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('admin.settings.update') }}" method="Post">
                    @csrf
                    @method('put')
                    <h3 class="page-title">Company Settings</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{$settings->company_name}}" name="company_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>About Us<span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" rows="12" name="about_us">{{$settings->about_us}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control " value="{{$settings->company_name}}" name="address">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Country</label>
                                <input class="form-control" value="{{$settings->country}}" name="country">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>State</label>
                                <input class="form-control" value="{{$settings->state}}" name="state" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" value="{{$settings->city}}" name="city" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input class="form-control" value="{{$settings->postal_code}}" name="postal_code" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="{{$settings->email}}" name="email" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" value="{{$settings->phone}}" name="phone" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Facebook Url</label>
                                <input class="form-control" value="{{$settings->facebook_url}}" name="facebook_url" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Instagram Url</label>
                                <input class="form-control" value="{{$settings->instagram_url}}" name="instagram_url" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Twitter Url</label>
                                <input class="form-control" value="{{$settings->twitter_url}}" name="twitter_url" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Linkedin Url</label>
                                <input class="form-control" value="{{$settings->linkedin_url}}" name="linkedin_url" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Footer <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="10" rows="12" name="footer">{{$settings->footer}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center m-t-20">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection