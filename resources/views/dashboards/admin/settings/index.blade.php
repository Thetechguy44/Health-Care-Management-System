@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Company Settings')
@section('content')
<div class="page-wrapper" style="min-height: 687px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <h3 class="page-title">Company Settings</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Company Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input class="form-control " value="3864 Quiet Valley Lane, Sherman Oaks, CA, 91403" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option>USA</option>
                                    <option>United Kingdom</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hflc-container"><span class="select2-selection__rendered" id="select2-hflc-container" title="USA">USA</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>City</label>
                                <input class="form-control" value="Sherman Oaks" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>State/Province</label>
                                <select class="form-control select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option>California</option>
                                    <option>Alaska</option>
                                    <option>Alabama</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-get5-container"><span class="select2-selection__rendered" id="select2-get5-container" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input class="form-control" value="91403" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" value="danielporter@example.com" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" value="818-978-7102" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" value="818-635-5579" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fax</label>
                                <input class="form-control" value="818-978-7102" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Website Url</label>
                                <input class="form-control" value="https://www.example.com" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center m-t-20">
                            <button type="button" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection