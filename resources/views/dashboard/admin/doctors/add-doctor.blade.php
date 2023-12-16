@extends('admin.layout.layout')
@section('content')
    @include('admin.layout.topnav')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('admin.layout.profilenav')

    <!-- main sidebar start -->
    @include('admin.layout.sidenav')
    <!-- main sidebar end -->
        <div class="panel mb-25">
            <div class="panel-header">
                <h5>Add Doctor</h5> 
            </div>
            <div class="panel-body">
                <div class="row g-3">
                    <div class="col-xl-5">
                        <label for="formFile" class="form-label">Doctor's Photo</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="basicInput">
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="basicInput">
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Hospital</label>
                        <select name=""  class="form-control" id="basicInput">
                            <option value="">Select Hospital</option>
                            <option value="">Amitech Hospital</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Speciality</label>
                        <select name=""  class="form-control" id="basicInput">
                            <option value="">Select Speciality</option>
                            <option value="">Vetinarian</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Contact</label>
                        <input type="number" class="form-control" id="basicInput">
                    </div>
                    <p class="panel-bg">Shift Period</p>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Shift Start</label>
                        <input type="time" class="form-control" id="basicInput">
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Shift End</label>
                        <input type="time" class="form-control" id="basicInput">
                    </div>
                    <center>
                        <div class="col-xl-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- main content end -->
        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
@endsection