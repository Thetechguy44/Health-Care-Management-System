@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Profile')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>
                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="{{route('admin.profile.edit',$profile->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <!-- <a href="javascript:;" onclick="event.preventDefault();document.getElementById('adminPictureFile').click();"> -->
                                            <img class="avatar" src="{{$profile->picture}}" alt="" id="adminPicture">
                                        <!-- </a> -->
                                        <!-- <div class="fileupload btn">
                                            <span class="btn-text">edit</span>
                                            <input type="file" class="upload" name="adminPictureFile" id="adminPictureFile">
                                        </div> -->
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$profile->name}}</h3>
                                                <small class="text-muted">{{$profile->user_type}}</small>
                                                <!-- <div class="staff-id">Employee ID : DR-0001</div> -->
                                                <!-- <div class="staff-msg"><a href="" class="btn btn-primary">Send Message</a></div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text">{{$profile->phone}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text">{{$profile->email}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Birthday:</span>
                                                    <span class="text">{{$profile->dob}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">{{$profile->address}}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text">{{$profile->gender}}</span>
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
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Social Media</a></li>
					</ul>

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
                                                            <a href="#/" class="name">{{$profile->school}}</a>
                                                            <div>{{$profile->course}}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="card-box mb-0">
                                        <h3 class="card-title">Experience</h3>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Consultant Gynecologist</a>
                                                            <span class="time">Jan 2014 - Present (4 years 8 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
						</div>
						<div class="tab-pane" id="bottom-tab2">
                            <div class="card-box">
                                <h3 class="card-title">About Me</h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <p class="name">{{$profile->about}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
						<div class="tab-pane" id="bottom-tab3">
                            <div class="card-box">
                                <h3 class="card-title">Social Media Informations</h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="{{$profile->facebook_url}}" class="name">{{$profile->facebook_url}}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="{{$profile->instagram_url}}" class="name">{{$profile->instagram_url}}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="{{$profile->twitter_url}}" class="name">{{$profile->twitter_url}}</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a href="{{$profile->linkedin_url}}" class="name">{{$profile->linkedin_url}}</a>
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
@endsection