@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Appointments')
@section('content')
@include('dashboards.patient.layouts.nav')
@include('dashboards.patient.layouts.side')
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3">
                <div class="card m-t-20">
                    <div class="body">
                        <button type="button" class="btn btn-raised btn-primary btn-sm m-t-0" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Events</button>                        
                        <div class="event-name b-greensea"> The Custom Event #1 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-lightred"> The Custom Event #2 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-amethyst"> The Custom Event #3 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-amethyst"> The Custom Event #4 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #5 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-lightred"> The Custom Event #6 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-greensea"> The Custom Event #7 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #8 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-success"> The Custom Event #9 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                        <div class="event-name b-primary"> The Custom Event #10 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
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
                                    <tr>
                                        <td>2</td>
                                        <td>Julie </td>
                                        <td>Gaylord</td>
                                        <td>@Julie </td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jacqueline </td>
                                        <td>Woods</td>
                                        <td>@Woods</td>
                                        <td><span class="label label-warning">Lakva</span> </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Jonathan </td>
                                        <td>Lewis</td>
                                        <td>@Jonathan </td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Margaret </td>
                                        <td>Griffin</td>
                                        <td>@Margaret </td>
                                        <td><span class="label label-info">Cancer</span> </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Joseph </td>
                                        <td>Hunter</td>
                                        <td>@Hunter</td>
                                        <td><span class="label label-success">Dental</span> </td>
                                    </tr>
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