@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Healthcare Provider Profile')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-7 col-6">
                <h4 class="page-title">Healthcare Provider Profile</h4>
            </div>
        </div>
        <div class="card-box profile-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                            @if($provider->user->avatar)
                                <img class="avatar" src="{{asset('storage/avatar/'.$provider->user->avatar)}}" alt="avatar">
                            @else
                            <img class="avatar" src="{{asset('default/users/img/default-avatar.png')}}">
                            @endif
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">{{$provider->user->firstname}} {{$provider->user->lastname}} {{$provider->user->othername}}</h3>
                                        <small class="text-muted">{{$provider->role}}</small>
                                        @if ($provider->speciality)
                                        <div class="staff-id">{{$provider->speciality->name}}</div>
                                        @else
                                            <p> </p>
                                        @endif
                                        <div class="staff-msg"><a href="" class="btn btn-primary">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
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
                </div>
            </div>
        </div>
        <div class="profile-tabs">
            <div class="tab-content">
                <div class="tab-pane show active" id="about-cont">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-box">
                                <h3 class="card-title">Education Informations</h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="#/" class="name">{{$provider->user->school_attended}}</a>
                                                    <div>{{$provider->user->qualification}}</div>
                                                    <span class="time">{{$provider->user->sublect}}</span>
                                                </div>
                                            </div>
                                        </li>
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
@endsection