@extends('dashboard.admin.layout.layout')
@section('content')
    @include('dashboard.admin.layout.topnav')
    <!-- header end -->

    <!-- profile right sidebar start -->
    @include('dashboard.admin.layout.profilenav')

    <!-- main sidebar start -->
    @include('dashboard.admin.layout.sidenav')
    <!-- main sidebar end -->
        <div class="dashboard-breadcrumb mb-25">
            <h2>Admin Dashboard</h2>
            <div class="input-group dashboard-filter">
                <input type="text" class="form-control" name="basic" id="dashboardFilter" readonly>
                <label for="dashboardFilter" class="input-group-text"><i class="fa-light fa-calendar-days"></i></label>
            </div>
        </div>
        <div class="row mb-25">
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>No of Doctors</h3>
                        <a href="#">see details</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">354</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>No of Patients</h3>
                        <a href="#">see details</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">1054</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>Treatments</h3>
                        <a href="#">see details</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">54</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>Treatments Success Rate</h3>
                        <a href="#">see details</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">89.24%</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-chart-simple"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            <div class="col-xxl-8">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Order Date</th>
                                    <th>Payment Method</th>
                                    <th>Delivery Date</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>855212</td>
                                    <td>Soward</td>
                                    <td>28/10/22</td>
                                    <td>Cash</td>
                                    <td>02/11/22</td>
                                    <td>$05.22</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855213</td>
                                    <td>Kian</td>
                                    <td>29/10/22</td>
                                    <td>Card</td>
                                    <td>03/11/22</td>
                                    <td>$17.00</td>
                                    <td><span class="badge bg-primary">Delivered</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855214</td>
                                    <td>Jennifer</td>
                                    <td>29/10/22</td>
                                    <td>Card</td>
                                    <td>03/11/22</td>
                                    <td>$15.22</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855215</td>
                                    <td>Benjamin</td>
                                    <td>30/10/22</td>
                                    <td>Cash</td>
                                    <td>03/11/22</td>
                                    <td>$12.15</td>
                                    <td><span class="badge bg-secondary">Unpaid</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855216</td>
                                    <td>Anna</td>
                                    <td>31/10/22</td>
                                    <td>Cheque</td>
                                    <td>04/11/22</td>
                                    <td>$05.35</td>
                                    <td><span class="badge bg-danger">Canceled</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855217</td>
                                    <td>Bradley</td>
                                    <td>01/11/22</td>
                                    <td>Cash</td>
                                    <td>05/11/22</td>
                                    <td>$25.28</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855218</td>
                                    <td>Parkinson</td>
                                    <td>03/11/22</td>
                                    <td>Cheque</td>
                                    <td>06/11/22</td>
                                    <td>$32.32</td>
                                    <td><span class="badge bg-info">Pending</span></td>
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
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
      

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
@endsection