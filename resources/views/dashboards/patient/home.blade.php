@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Dashboard')
@section('content')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dashboard</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                    <div class="content">
                        <div class="text">Total Appointments</div>
                        <div class="number">{{$totalAppointmentCount}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="info-box-4 hover-zoom-effect">
                    <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                    <div class="content">
                        <div class="text">Total Treatments</div>
                        <div class="number">{{$totalTreatmentCount}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Latest Treatments</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Problem</th>
                                    <th>Diseases</th>
                                    <th>Recommendation</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i=1
                                @endphp    
                                @foreach($treatments as $treatment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$treatment->healthProvider->user->name}}</td>
                                    <td>{{$treatment->problem}}</td>
                                    <td><span class="label label-danger">{{$treatment->diagnose}}</span> </td>
                                    <td>{{$treatment->vaccination}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> Latest Appointments</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Problem</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                $i=1
                                @endphp    
                                @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$appointment->healthProvider->user->name}}</td>
                                    <td>{{$appointment->age}}</td>
                                    <td>{{$appointment->problem}}</td>
                                    <td>{{$appointment->date}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
@endsection