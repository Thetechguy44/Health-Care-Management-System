@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Appointments')
@section('content')
@include('dashboards.patient.layouts.nav')
@include('dashboards.patient.layouts.side')
<section class="content page-calendar">
    <div class="container-fluid">
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
                                        <th>#</th>
                                        <th>Healthcare Provider</th>
                                        <th>Name</th>
                                        <th>Phone no</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Problem</th>
                                        <th>Location</th>
                                        <th>Address</th>
                                        <th>Appointment Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1
                                    @endphp
                                    @foreach($appointments as $appointment)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$appointment->provider}}</td>
                                        <td>{{$appointment->healthProvider->user->firstname}} {{$appointment->healthProvider->user->lastname}}</td>
                                        <td>{{$appointment->phone}}</td>
                                        <td>{{$appointment->age}}</td>
                                        <td>{{$appointment->gender}}</td>
                                        <td>{{$appointment->problem}}</td>
                                        <td>{{$appointment->location}}</td>
                                        <td>{{$appointment->address}}</td>
                                        <td>{{$appointment->date}}</td>
                                        <td><span class="label label-danger">{{$appointment->status}}</span> </td>
                                        <td>
                                            <a href="" class="btn btn-secondary">Edit</a>||<a href="" class="btn btn-primary">Delete</a>
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