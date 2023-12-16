@extends('admin.layout.layout')
@section('content')
    @include('admin.layout.topnav')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('admin.layout.profilenav')

    <!-- main sidebar start -->
    @include('admin.layout.sidenav')
        <div class="">
            <div class="card">
                <div class="card-header">
                    Display Patients
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-filter-option">
                            <table class="table table-striped table-hover digi-dataTable all-product-table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Hospital Name</th>
                                        <th>Appointment Doctor</th>
                                        <th>Symptoms</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment TIme</th>
                                        <th>Appointment Code</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Yahaya Gana</td>
                                        <td>Amitech Hospital</td>
                                        <td>Abdullahi Bello</td>
                                        <td>Madness</td>
                                        <td>27/09/2023</td>
                                        <td>11:00</td>
                                        <td>ABCD1234</td>
                                        <td>08123456789</td>
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
@endsection