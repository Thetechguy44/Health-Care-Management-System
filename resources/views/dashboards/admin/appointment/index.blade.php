@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Appointments')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Appointments</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.appointments.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Appointment</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Appointment ID</th>
                                <th>Patient Name</th>
                                <th>Age</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Healthcare Provider</th>
                                <th>Provider Name</th>
                                <th>Speciality</th>
                                <th>Location</th>
                                <th>Address</th>
                                <th>Appointment Date & Time</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>APT00{{$appointment->id}}</td>
                                <td>{{$appointment->patient->user->name}}</td>
                                <td>{{$appointment->age}}</td>
                                <td>{{$appointment->phone}}</td>
                                <td>{{$appointment->gender}}</td>
                                <td>{{$appointment->provider}}</td>
                                <td>{{$appointment->healthProvider->user->name}}</td>
                                <td>
                                    @if($appointment->speciality)    
                                    {{$appointment->speciality->name}}
                                    @else
                                    <p></p>
                                    @endif
                                </td>
                                <td>{{$appointment->location}}</td>
                                <td>{{$appointment->address}}</td>
                                <td>{{$appointment->date}}</td>
                                <td>
                                    <a href="{{route('admin.appointment_status',$appointment->id)}}" class="custom-badge status-{{$appointment->status ? 'green' : 'red'}}">{{$appointment->status ? 'Complete' : 'Not Complete'}}</a><br>
                                    <small class="text-muted">Click to update</small>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 27px, 0px);" x-out-of-boundaries="">
                                            <a class="dropdown-item" href="{{route('admin.appointments.edit',$appointment->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <form action="{{route('admin.appointments.destroy',$appointment->id )}}" method="Post">
                                                @csrf
                                                @method('Delete')
                                                <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
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
@endsection