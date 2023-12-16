@extends('admin.layout.layout')
@section('content')
    @include('admin.layout.topnav')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('admin.layout.profilenav')

    <!-- main sidebar start -->
    @include('admin.layout.sidenav')
    <div class="main-content">
        <div class="">
            <div class="card">
                <div class="card-header">
                    Display Treatments
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-filter-option">
                            <table class="table table-striped table-hover digi-dataTable all-product-table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Treatments</th>
                                        <th>More Information</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nephrologist Care</td>
                                        <td>alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything</td>
                                        <td>
                                            <div class="btn-box">
                                                <button><i class="fa-light fa-eye"></i></button>
                                                <button><i class="fa-light fa-pen"></i></button>
                                                <button><i class="fa-light fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
@endsection