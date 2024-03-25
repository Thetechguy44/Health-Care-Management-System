@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Profile')
@section('content')
<section class="content profile-page">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Profile</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class=" card patient-profile">
                    <img src="{{$profile->picture}}" class="img-fluid" alt="" width="200px" height="200px">                              
                </div>
                <div class="card">
                    <div class="header">
                        <h2>About Patient</h2>
                    </div>
                    <div class="body">
                        <strong>Name</strong>
                        <p>{{$profile->name}}</p>
                        <strong>Occupation</strong>
                        <p>{{$profile->occupation}}</p>
                        <strong>Email ID</strong>
                        <p>{{$profile->email}}</p>
                        <strong>Phone</strong>
                        <p>{{$profile->phone}}</p>
                        <hr>
                        <strong>Address</strong>
                        <address>{{$profile->address}}</address>
                        <strong>L.G.A</strong>
                        <address>{{$profile->lga}}</address>
                        <strong>City</strong>
                        <address>{{$profile->city}}</address>
                        <strong>State</strong>
                        <address>{{$profile->state}}</address>
                    </div>
                </div>
            </div>
            @livewire('patient-edit-profile')
        </div>
    </div>
</section>
@endsection