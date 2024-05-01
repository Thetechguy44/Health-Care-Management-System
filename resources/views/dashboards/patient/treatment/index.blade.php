@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Treatments')
@section('content')
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Treatments</h2>
            <small class="text-muted">Welcome to HMS application</small>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card m-t-20">
                    <div class="card">
                        <div class="header">
                            <h2>Treatment Lists</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                    <th>S/N</th>
                                    <th>Problem</th>
                                    <th>Diagnose</th>
                                    <th>Vaccination</th>
                                    <th>Healthcare Provider</th>
                                    <th>Provider Name</th>
                                    <th>Speciality</th>
                                    <th>Address</th>
                                    <th>Ammont Paid</th>
                                    <th>Mode of Payment</th>
                                    <th>Treatment Date</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i=1
                                    @endphp
                                    @foreach($treatments as $treatment)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$treatment->problem}}</td>
                                        <td>{{$treatment->diagnose}}</td>
                                        <td>{{$treatment->vaccination}}</td>
                                        <td>{{$treatment->provider}}</td>
                                        <td>{{$treatment->healthProvider->user->name}}</td>
                                        <td>
                                            @if($treatment->speciality)    
                                            {{$treatment->speciality->name}}
                                            @else
                                            <p></p>
                                            @endif
                                        </td>
                                        <td>{{$treatment->address}}</td>
                                        <td>{{$treatment->amount_paid}}</td>
                                        <td>{{$treatment->mode_of_payment}}</td>
                                        <td>{{$treatment->date}}</td>
                                        <td>{{$treatment->time}}</td>
                                        <td>
                                            <a href="{{route('treatments.edit',$treatment->id )}}" class="btn btn-sm btn-primary"><i class="material-icons">create</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$treatments->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection