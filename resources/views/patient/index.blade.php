<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<!-- Mirrored from html.digiboard.codebasket.xyz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 00:19:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce Dashboard | Digiboard</title>
    
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>
<body class="body-padding body-p-top">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="index.html">
                            <img src="assets/images/logo-big.png" alt="Logo">
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="index.html">
                            <img src="assets/images/logo-small.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
                <a href="#" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i class="fa-light fa-globe me-1"></i> <span>View Website</span></a>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="assets/images/logo-big.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <form class="header-form">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                                <div class="lang-select">
                                    <span>Language:</span>
                                    <select>
                                        <option value="">EN</option>
                                        <option value="">BN</option>
                                        <option value="">FR</option>
                                    </select>
                                </div>
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i class="fa-light fa-expand"></i></button>
                                <button class="header-btn theme-color-btn"><i class="fa-light fa-sun-bright"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i class="fa-light fa-ellipsis-vertical"></i></button>
                    <button class="header-btn theme-settings-btn d-lg-none"><i class="fa-light fa-gear"></i></button>
                    <div class="header-btn-box profile-btn-box">
                        <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="" alt="" class="fa-regular fa-circle-user">
                        </button>
                        <ul class="dropdown-menu profile-dropdown-menu">
                            <li>
                                <div class="dropdown-txt text-center">
                                    <p class="mb-0">Patient</p>
                                    <div class="d-flex justify-content-center">
                                        <div class="form-check pt-3">
                                            <input class="form-check-input" type="checkbox" id="seeProfileAsSidebar">
                                            <label class="form-check-label" for="seeProfileAsSidebar">See as sidebar</label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a></li>
                            <li><a class="dropdown-item" href="edit-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-gear"></i></span> Settings</a></li>
                            <li><a class="dropdown-item" href="login.html"><span class="dropdown-icon"><i class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <div class="profile-right-sidebar">
        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
        <div class="top-panel">
            <div class="profile-content scrollable">
                <ul>
                    <li>
                        <div class="dropdown-txt text-center">
                            <p class="mb-0">Patient</p>
                            <div class="d-flex justify-content-center">
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="checkbox" id="seeProfileAsDropdown">
                                    <label class="form-check-label" for="seeProfileAsDropdown">See as dropdown</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i class="fa-regular fa-circle-user"></i></span> Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="edit-profile.html"><span class="dropdown-icon"><i class="fa-light fa-gear"></i></span> Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="login.html"><span class="dropdown-icon"><i class="fa-light fa-power-off"></i></span> Logout</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="dropdown-icon"><i class="fa-regular fa-circle-question"></i></span> Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- main sidebar start -->
    <div class="main-sidebar">
        <div class="main-menu">
            <ul class="sidebar-menu scrollable">
                <li class="sidebar-item open">
                    <a role="button" class="sidebar-link-group-title has-sub">Dashboard</a>
                    <ul class="sidebar-link-group">
                        <li class="sidebar-dropdown-item">
                            <a href="index.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-user-headset"></i></span> <span class="sidebar-txt">Home</span></a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">Appointments</a>
                    <ul class="sidebar-link-group">
                        <li class="sidebar-dropdown-item">
                            <a href="add-appointment.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-table"></i></span> <span class="sidebar-txt">Add Appointment</span></a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="view-appointments.html" class="sidebar-link"><span class="nav-icon"><i class="fa-light fa-layer-group"></i></span> <span class="sidebar-txt">View Appointments</span></a>
                        </li>
                    </ul>
                </li>
                <li class="help-center">
                    <h3>Help Center</h3>
                    <p>We're an award-winning, forward thinking</p>
                    <a href="#" class="btn btn-sm btn-light">Go to Help Center</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Patient Dashboard</h2>
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
                                    <th>Order ID</th>
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
    </div>
    <!-- main content end -->
    
    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/apexcharts.js"></script>
    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/js/moment.min.js"></script>
    <script src="assets/vendor/js/daterangepicker.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

<!-- Mirrored from html.digiboard.codebasket.xyz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2023 00:21:21 GMT -->
</html>