@extends('dashboards.healthcare-provider.layouts.app')
@section('title', isset($title) ? $title: 'Appointment')
@section('content')
@include('dashboards.healthcare-provider.layouts.nav')
@include('dashboards.healthcare-provider.layouts.side')
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointments</h2>
            <small class="text-muted">Welcome to HMS application</small>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-t-20">
                    <div class="card">
                        <div class="header">
                            <h2> New Appointment List</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Appointment ID</th>
                                        <th>Patient Name</th>
                                        <th>Phone no</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Problem</th>
                                        <th>Location</th>
                                        <th>Address</th>
                                        <th>Appointment Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1
                                    @endphp
                                    @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>APT00{{$appointment->id}}</td>
                                        <td>{{$appointment->patient->user->firstname}} {{$appointment->patient->user->lastname}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>{{$appointment->age}}</td>
                                        <td>{{$appointment->gender}}</td>
                                        <td>{{$appointment->problem}}</td>
                                        <td>{{$appointment->location}}</td>
                                        <td>
                                            @if($appointment->address)
                                                {{ $appointment->address }}
                                            @else
                                                No Address Needed
                                            @endif
                                        </td>
                                        <td>{{$appointment->date}}</td>
                                        <td>
                                            <a href="{{route('healthcare_provider.appointment_status',$appointment->id )}}" class="btn btn-sm btn-{{$appointment->status ? 'success' : 'danger'}}">
                                                {{$appointment->status ? 'Complete' : 'Not Complete'}}
                                            </a><br>
                                            <small class="text-muted">Click to update</small>
                                        </td>
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
    </div>
</section>
@endsection