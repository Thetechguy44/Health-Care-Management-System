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
                                <div class="profile-image"> <img src="{{asset('storage/avatar/'.$provider->user->avatar)}}" alt="" width="200px" height="200px"> </div>
                            @else
                                <div class="profile-image"> <img src="{{asset('default/users/img/default-avatar.png')}}" alt="" width="200px" height="200px"> </div>
                            @endif
                                @if ($provider->role === 'Doctor')
                                    <h4 class="mb-0"><strong>Dr. </strong>{{$provider->user->firstname}} {{$provider->user->lastname}} {{$provider->user->othername}}</h4>
                                @elseif($provider->role === 'Nurse')
                                    <h4 class="mb-0"><strong>Nr. </strong>{{$provider->user->firstname}} {{$provider->user->lastname}} {{$provider->user->othername}}</h4>
                                @elseif($provider->role === 'Community Health')
                                    <h4 class="mb-0"><strong>Ch. </strong>{{$provider->user->firstname}} {{$provider->user->lastname}} {{$provider->user->othername}}</h4>
                                @endif
                                <span class="text-muted col-white">{{ $provider->role }}</span>
                                @if($provider->speciality)
                                (<span class="text-muted col-white">{{ $provider->speciality->name }}</span>) <br>
                                @endif
                                <a href="javascript:void(0);" class="btn btn-raised btn-info btn-sm">Message</a>
                            <p class="social-icon">
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
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>About Health Provider</h2>
                    </div>
                    <div class="body">
                        <p class="text-default">{{$provider->user->about}}</p>
                        <blockquote>
                         <small>By <cite title="Source Title">{{$provider->user->firstname}} {{$provider->user->lastname}} {{$provider->user->othername}}</cite></small> 
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <ul class="personal-info">
                        <li>
                            <span class="title">Phone:</span>
                            <span class="text"><a href="#">{{$provider->user->phone}}</a></span>
                        </li>
                        <li>
                            <span class="title">Email:</span>
                            <span class="text"><a href="#">{{$provider->user->email}}</a></span>
                        </li>
                        <li>
                            <span class="title">Birthday:</span>
                            <span class="text">{{$provider->user->dob}}</span>
                        </li>
                        <li>
                            <span class="title">State:</span>
                            <span class="text">{{$provider->user->state}}</span>
                        </li>
                        <li>
                            <span class="title">City:</span>
                            <span class="text">{{$provider->user->city}}</span>
                        </li>
                        <li>
                            <span class="title">Address:</span>
                            <span class="text">{{$provider->user->address}}</span>
                        </li>
                        <li>
                            <span class="title">Gender:</span>
                            <span class="text">{{$provider->user->gender}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection