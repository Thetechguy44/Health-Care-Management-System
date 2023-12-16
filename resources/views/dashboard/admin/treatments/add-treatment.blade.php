@extends('admin.layout.layout')
@section('content')
    @include('admin.layout.topnav')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('admin.layout.profilenav')

    <!-- main sidebar start -->
    @include('admin.layout.sidenav')
        <div class="panel mb-25">
            <div class="panel-header">
                <h5>Add Treatment</h5> 
            </div>
            <div class="panel-body">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Treatment Name</label>
                        <input type="text" class="form-control" id="basicInput">
                    </div>
                    <div class="col-sm-6">
                        <label for="basicInput" class="form-label">Description</label>
                        <input type="text" class="form-control" id="basicInput">
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