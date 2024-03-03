@extends('dashboards.healthcare-provider.layouts.app')
@section('title', isset($title) ? $title: 'Profile')
@section('content')
@include('dashboards.healthcare-provider.layouts.nav')
@include('dashboards.healthcare-provider.layouts.side')
<section class="content profile-page">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12 p-l-0 p-r-0">
                <section class="boxs-simple">
                    <div class="profile-header">
                        <div class="profile_info">
                            <div class="profile-image"> <img src="{{$profile->picture}}" alt="" width="200px" height="200px"> </div>
                            @if(auth()->user()->healthProvider)
                                @if(auth()->user()->healthProvider->role === 'Doctor')
                                    <h4 class="mb-0"><strong>Dr. </strong>{{$profile->firstname}} {{$profile->lastname}} {{$profile->othername}}</h4>
                                @elseif(auth()->user()->healthProvider->role === 'Nurse')
                                    <h4 class="mb-0"><strong>Nr. </strong>{{$profile->firstname}} {{$profile->lastname}} {{$profile->othername}}</h4>
                                @elseif(auth()->user()->healthProvider->role === 'Community Health')
                                    <h4 class="mb-0"><strong>Ch. </strong>{{$profile->firstname}} {{$profile->lastname}} {{$profile->othername}}</h4>
                                @endif
                            @else
                                <h4 class="mb-0">{{$profile->firstname}} {{$profile->lastname}} {{$profile->othername}}</h4>
                            @endif
                    
                            @auth
                              @if(auth()->user()->healthProvider)
                                <span class="text-muted col-white">{{ auth()->user()->healthProvider->role }}</span>
                              @endif
                            @endauth
                            <p class="social-icon">
                                <a title="Twitter" href="{{$profile->twitter_url}}" target="blank"><i class="zmdi zmdi-twitter"></i></a>
                                <a title="Facebook" href="{{$profile->facebook_url}}" target="blank"><i class="zmdi zmdi-facebook"></i></a>
                                <a title="Instagram" href="{{$profile->instagram_url}}" target="blank"><i class="zmdi zmdi-instagram"></i></a>
                                <a title="Linkedin" href="{{$profile->linkedin_url}}" target="blank"><i class="zmdi zmdi-linkedin"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="profile-sub-header">
                        <div class="box-list">
                            <ul class="text-center">
                                <li> <a href="" class=""><i class="zmdi zmdi-email"></i>
                                    <p>My Inbox</p>
                                    </a> 
                                </li>
                                <li> <a href="javascript:void(0);"><i class="zmdi zmdi-format-subject"></i>
                                    <p>Tasks</p>
                                    </a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>About Me</h2>
                    </div>
                    <div class="body">
                        <p class="text-default">{{$profile->about}}</p>
                        <blockquote>
                         <small>By <cite title="Source Title">{{$profile->firstname}} {{$profile->lastname}} {{$profile->othername}}</cite></small> 
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    @livewire('healthcare.edit-profile')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection