@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Health Providers')
@section('content')
<section class="content page-calendar">
    <div class="container-fluid">
        <div class="block-header">
            <h2>All Doctors</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            @foreach($providers as $provider)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">                            
                            <div class="thumb-xl member-thumb">
                            @if($provider->user->avatar)
                                <img src="{{asset('storage/users-avatar/'.$provider->user->avatar)}}" class="img-thumbnail rounded-circle" alt="profile-image" width="100px" height="100px">
                            @else
                                <img src="{{asset('default/users/img/default-avatar.png')}}" class="img-thumbnail rounded-circle" alt="profile-image" width="100px" height="100px">
                            @endif                              
                            </div>

                            <div class="">
                                @if ($provider->role === 'Doctor')
                                <h4 class="m-b-5 m-t-20">Dr. {{$provider->user->name}}</h4>
                                @elseif($provider->role === 'Nurse')
                                <h4 class="m-b-5 m-t-20">Nr. {{$provider->user->name}}</h4>
                                @elseif($provider->role === 'Community Health')
                                <h4 class="m-b-5 m-t-20">Ch. {{$provider->user->name}}</h4>
                                @endif    
                                <p class="text-muted">{{$provider->role}}<span></span></p>
                            </div>

                            <p class="text-muted">{{$provider->user->address}}</p>                           
                            <a href="{{route('health_providers.profile',$provider)}}" class="btn btn-raised btn-sm">View Profile</a>
                            <ul class="social-links list-inline m-t-10">
                                <li><a title="facebook" href="{{$provider->user->facebook_url}}"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a title="twitter" href="{{$provider->user->twitter_url}}"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a title="instagram" href="{{$provider->user->instagram_url}}"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a title="linkedin" href="{{$provider->user->linkedin_url}}"><i class="zmdi zmdi-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection