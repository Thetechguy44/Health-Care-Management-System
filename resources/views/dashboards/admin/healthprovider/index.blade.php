@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Healthcare Providers')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Doctors</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.health_providers.create')}}" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Healthcare Provider</a>
            </div>
        </div>
        <div class="row doctor-grid">
            @foreach($providers as $provider)
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        @if($provider->user->avatar)
                        <a href="{{route('admin.health_providers.show',$provider->id)}}" class="avatar"><img alt="" src="{{asset('storage/users-avatar/'.$provider->user->avatar)}}"></a>
                        @else
                        <a href="{{route('admin.health_providers.show',$provider->id)}}" class="avatar"><img class="avatar" alt="" src="{{asset('default/users/img/default-avatar.png')}}"></a>
                        @endif
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('admin.health_providers.edit',$provider->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <form action="{{route('admin.health_providers.destroy',$provider->user->id)}}" method="post">
                                @csrf
                                @method('Delete')
                                <button class="dropdown-item" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{route('admin.health_providers.show',$provider->id)}}">{{$provider->user->name}}</a></h4>
                    <h6 class="doctor-name text-ellipsis">{{$provider->user->email}}</h6>
                    <br>
                    <div class="doc-prof">{{$provider->role}}</div>
                    <div class="doc-prof">{{$provider->user->phone}}</div>
                    <div class="doc-prof">{{$provider->user->gender}}</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i>{{$provider->user->state}}, {{$provider->user->city}}, {{$provider->user->address}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection