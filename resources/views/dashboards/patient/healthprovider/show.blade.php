@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Health Provider Profile')
@section('content')
@include('dashboards.patient.layouts.nav')
@include('dashboards.patient.layouts.side')
<section class="content profile-page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            @if($provider->user->avatar)
                                <div class="profile-image"> <img src="{{asset('storage/users-avatar/'.$provider->user->avatar)}}" alt="" width="200px" height="200px"> </div>
                            @else
                                <div class="profile-image"> <img src="{{asset('default/users/img/default-avatar.png')}}" alt="" width="200px" height="200px"> </div>
                            @endif
                                @if ($provider->role === 'Doctor')
                                    <h4 class="mb-0"><strong>Dr. </strong>{{$provider->user->name}}</h4>
                                @elseif($provider->role === 'Nurse')
                                    <h4 class="mb-0"><strong>Nr. </strong>{{$provider->user->name}}</h4>
                                @elseif($provider->role === 'Community Health')
                                    <h4 class="mb-0"><strong>Ch. </strong>{{$provider->user->name}}</h4>
                                @endif
                                <span class="text-muted col-white">{{ $provider->role }}</span>
                                @if($provider->speciality)
                                (<span class="text-muted col-white">{{ $provider->speciality->name }}</span>) <br>
                                @endif
                                <a href="{{ url('chatify', $provider->user->id) }}" class="btn btn-raised btn-info btn-sm">Message</a>
                            <p class="social-icon py-2">
                                <a title="Twitter" href="{{$provider->user->twitter_url}}" target="blank"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Facebook" href="{{$provider->user->facebook_url}}" target="blank"><i class="zmdi zmdi-facebook"></i></a>
                                <a title="Instagram" href="{{$provider->user->instagram_url}}" target="blank"><i class="zmdi zmdi-instagram"></i></a>
                                <a title="Linkedin" href="{{$provider->user->linkedin_url}}" target="blank"><i class="zmdi zmdi-linkedin"></i></a>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row clearfix py-3">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>About Health Provider</h2>
                    </div>
                    <div class="body">
                        <strong>Name</strong>
                        <p>{{$provider->user->name}}</p>
                        <strong>Phone</strong>
                        <p>{{$provider->user->phone}}</p>
                        <strong>Email ID</strong>
                        <p>{{$provider->user->email}}</p>
                        <strong>Birthday</strong>
                        <p>{{$provider->user->dob}}</p>
                        <strong>Gender</strong>
                        <p>{{$provider->user->gender}}</p>
                        <hr>
                        <strong>State</strong>
                        <address>{{$provider->user->state}}</address>
                        <strong>City</strong>
                        <address>{{$provider->user->city}}</address>
                        <strong>Address</strong>
                        <address>{{$provider->user->address}}</address>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body"> 
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" >                               
                                <div class="wrap-reset">
                                    <div class="mypost-list">
                                        <h4>About</h4> 
                                        <div class="post-box">
                                            <p>{{$provider->user->about}}</p>
                                            <p>Always available on <b>{{$provider->available_days}}</b> from <b>{{$provider->available_times}}</b></p>
                                        </div>
                                        <hr>
                                        <h4>Education</h4>
                                        <ul class="dis">
                                            <li>Attended {{$provider->user->school_attended}}.</li>
                                            <li>Studied {{$provider->user->subject}}.</li>
                                            <li>Qualification {{$provider->user->qualification}}.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection