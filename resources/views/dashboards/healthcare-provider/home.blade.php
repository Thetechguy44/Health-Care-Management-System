@extends('dashboards.healthcare-provider.layouts.app')
@section('title', isset($title) ? $title: 'Dashboard')
@section('content')
@include('dashboards.healthcare-provider.layouts.nav')
@include('dashboards.healthcare-provider.layouts.side')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to e-HMS application</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                    <div class="content">
                        <div class="text">New Patient</div>
                        <div class="number">27</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">OPD Patient</div>
                        <div class="number">12</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Today's Operations</div>
                        <div class="number">05</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                    <div class="content">
                        <div class="text">Hospital Earning</div>
                        <div class="number">$3,540</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Hospital Survey</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; inset: 0px;"></iframe>
                        <canvas id="line_chart" height="166" width="714" style="display: block; width: 714px; height: 166px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>New Patient <small>18% High then last month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-indigo">70.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-indigo">25.80%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-indigo">12.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-radius="3" data-highlight-spot-color="rgb(63, 81, 181)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(63, 81, 181)" data-spot-color="rgb(63, 81, 181, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-width="1" data-line-color="rgb(63, 81, 181, 0.7)" data-fill-color="rgba(63, 81, 181, 0.3)"><canvas width="284" height="100" style="display: inline-block; width: 284.656px; height: 100px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Heart Surgeries <small>18% High then last month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-blue-grey">80.40%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-blue-grey">13.00%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-blue-grey">9.50%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-radius="3" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(96, 125, 139)" data-spot-color="rgb(96, 125, 139, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-width="1" data-line-color="rgb(96, 125, 139, 0.7)" data-fill-color="rgba(96, 125, 139, 0.3)"><canvas width="284" height="100" style="display: inline-block; width: 284.656px; height: 100px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
            <div class=" col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Medical Treatment <small>18% High then last month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="stats-report">
                            <div class="stat-item">
                                <h5>Overall</h5>
                                <b class="col-green">84.60%</b></div>
                            <div class="stat-item">
                                <h5>Montly</h5>
                                <b class="col-green">15.40%</b></div>
                            <div class="stat-item">
                                <h5>Day</h5>
                                <b class="col-green">5.10%</b></div>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-radius="3" data-highlight-spot-color="rgb(233, 30, 99)" data-highlight-line-color="#222" data-min-spot-color="rgb(233, 30, 99)" data-max-spot-color="rgb(120, 184, 62)" data-spot-color="rgb(120, 184, 62, 0.7)" data-offset="90" data-width="100%" data-height="100px" data-line-width="1" data-line-color="rgb(120, 184, 62, 0.7)" data-fill-color="rgba(120, 184, 62, 0.3)"><canvas width="284" height="100" style="display: inline-block; width: 284.656px; height: 100px; vertical-align: top;"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> New Patient List <small>Description text here...</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Diseases</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Virginia </td>
                                    <td>Rose</td>
                                    <td>@Rose</td>
                                    <td><span class="label label-danger">Fever</span> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>PATIENT prograss</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="basic-list">
                            <li>Mark Otto <span class="label-danger label">21%</span></li>
                            <li>Jacob Thornton <span class="label-purple label">50%</span></li>
                            <li>Jacob Thornton<span class="label-success label">90%</span></li>
                            <li>M. Arthur <span class="label-info label">75%</span></li>
                            <li>Jacob Thornton <span class="label-warning label">60%</span></li>
                            <li>M. Arthur <span class="label-success label">91%</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card">
                    <div class="header">
                        <h2>PATIENT Reports</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Charts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dean Otto</td>
                                        <td>
                                            <span class="sparkbar"><canvas width="34" height="16" style="display: inline-block; width: 34px; height: 16px; vertical-align: top;"></canvas></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Visits from countries</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="country-state">
                            <li class="m-b-20">                                
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">6350</h5>
                                    <small>From India 58%</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:58%;"> <span class="sr-only">58% Complete</span></div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">3250</h5>
                                    <small>From UAE 90%</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">90% Complete</span></div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">1250</h5>
                                    <small>From Australia 70%</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">70% Complete</span></div>
                                </div>
                            </li>
                            <li class="m-b-20">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">1350</h5>
                                    <small>From USA 70%</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">70% Complete</span></div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h5 class="mb-0">1250</h5>
                                    <small>From UK 65%</small>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:65%;"> <span class="sr-only">65% Complete</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div>
	</div>
</section>
@endsection