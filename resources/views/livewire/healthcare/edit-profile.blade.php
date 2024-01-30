<div>
    
    <div class="body"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li class="nav-item"><a wire:click.prevent='selectTab("my_info")' class="nav-link {{ $tab == 'my_info' ? 'active' : '' }}" data-toggle="tab" href="#my_info">My Info</a></li>
            <li class="nav-item"><a wire:click.prevent='selectTab("update_profile")' class="nav-link {{ $tab == 'update_profile' ? 'active' : '' }}" data-toggle="tab" href="#update_profile">Update Profile</a></li>
            <li class="nav-item"><a wire:click.prevent='selectTab("change_password")' class="nav-link {{ $tab == 'change_password' ? 'active' : '' }}" data-toggle="tab" href="#change_password">Change Password</a></li>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane {{ $tab == 'my_info' ? 'active in' : '' }}" id="my_info">
                <div class="wrap-reset">
                    <div class="mypost-list">
                        <div class="post-box">
                            <span class="text-muted text-small"><i class="zmdi zmdi-alarm"></i> 3 minutes ago</span>
                            <div class="post-img"><img src="" class="img-fluid" alt=""></div>
                            <div>
                                <h5>Lorem Ipsum is simply dummy text of the printing</h5>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                                <p> <a href="javascript:void(0);" class="btn btn-raised btn-info btn-sm"><i class="zmdi zmdi-favorite-outline"></i> Like (5) </a> <a href="javascript:void(0);" class="btn btn-raised bg-soundcloud btn-sm"><i class="zmdi zmdi-long-arrow-return"></i> Reply</a> </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane {{ $tab == 'update_profile' ? 'active in' : '' }}" id="update_profile">
                <div class="body">
                    <div class="card">
                        <h2 class="card-inside-title">Update Avatar</h2>
                        <div class="body">
                            <form wire:submit.prevent='updateAvatar()'>
                                @if (session()->has('avatar'))
                                <div class="alert alert-success">
                                    {{session('avatar')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="profile-image"> 
                                        @if( auth()->user()->avatar != null )
                                            <img class="avatar" src="{{asset('storage/avatars/'.auth()->user()->avatar)}}" alt="" width="100" height="100">
                                        @else
                                            <img class="avatar" src="{{asset('default/users/img/default-avatar.png')}}" alt="" width="100" height="100">
                                        @endif 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" wire:model="avatar">
                                            </div>
                                            @error('avatar')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button class="btn btn-raised btn-success btn-sm" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>     
                    <div class="card">
                        <h2 class="card-inside-title">Account Informations</h2>
                        <div class="body">
                            <form wire:submit.prevent='updateHealthproviderBasicInfo()'>
                                @if (session()->has('basicinfo'))
                                <div class="alert alert-success">
                                    {{session('basicinfo')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Name" wire:model="name">
                                            </div>
                                            @error('name')
                                                    <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" class="form-control" placeholder="Email" wire:model="email">
                                            </div>
                                            @error('email')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Phone" wire:model="phone">
                                            </div>
                                            @error('phone')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control" wire:model="selectedGender">
                                                <option selected>-- select --</option>
                                                @foreach ($genderOptions as $option)
                                                    <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            @error('selectedGender')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" class="form-control" placeholder="Date of Birth" wire:model="dob">
                                            </div>
                                            <small class="form-text text-muted">Add your date of birth.</small>
                                            @error('dob')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Write a short bio about yourself" wire:model="about">{{$about}}</textarea>
                                            </div>
                                            @error('about')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Address Line" wire:model="address">
                                            </div>
                                            @error('address')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="City" wire:model="city">
                                            </div>
                                            @error('city')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Local Gov't" wire:model="lga">
                                            </div>
                                            @error('lga')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="State" wire:model="state">
                                            </div>
                                            @error('state')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised btn-success" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                    <div class="card">
                        @auth
                            @if(auth()->user()->healthProvider)
                                @php
                                    $userRole = auth()->user()->healthProvider->role;
                                @endphp

                                @if($userRole === 'Doctor')
                                <h2 class="card-inside-title">Specialization and Workings Preference</h2>
                                <div class="body">
                                    <form wire:submit.prevent='updateSpeciality()'>
                                        @if (session()->has('category'))
                                        <div class="alert alert-success">
                                            {{session('category')}}
                                        </div>
                                        @endif
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Choose your Speciality.</small>
                                                    <div class="form-line">
                                                    <select class="form-control" wire:model="speciality">
                                                        <option value="" @if (!$speciality) selected @endif>-- Select Speciality --</option>
                                                        @foreach ($specialities as $s)
                                                            <option value="{{ $s->id }}" @if ($speciality == $s->id) selected @endif>{{ $s->specialities }}</option>
                                                        @endforeach
                                                    </select>
                                                    </div>
                                                    @error('speciality')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work Days" wire:model="available_days">
                                                    </div>
                                                    @error('available_days')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work time" wire:model="available_times">
                                                    </div>
                                                    @error('available_times')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-raised btn-success" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @elseif($userRole === 'Nurse')
                                <h2 class="card-inside-title">Category and Working Preference</h2>
                                <div class="body">
                                    <form wire:submit.prevent='updateNurseCategory()'>
                                        @if (session()->has('category'))
                                        <div class="alert alert-success">
                                            {{session('category')}}
                                        </div>
                                        @endif
                                        <div class="row clearfix">
                                            <div class="col">
                                                <div class="form-group">
                                                    <small class="form-text text-muted">Choose your Category.</small>
                                                    <div class="form-line">
                                                        <select class="form-control" wire:model="nurse_category" wire:click="$refresh">
                                                            <option selected>-- select --</option>
                                                            @foreach( $nurseOptions as $n )
                                                            <option value="{{$n}}">{{ ucfirst($n) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('nurse_category')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                @if($nurse_category == 'Speciality Nurse')
                                                    <div class="form-group">
                                                        <small class="form-text text-muted">Choose your Speciality.</small>
                                                        <div class="form-line">
                                                            <select class="form-control" wire:model="speciality" required>
                                                                <option value="" @if (!$speciality) selected @endif>-- Select Speciality --</option>
                                                                @foreach ($specialities as $s)
                                                                    <option value="{{ $s->id }}" @if ($speciality == $s->id) selected @endif>{{ $s->specialities }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('speciality')
                                                            <span class="alert text-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work Days" wire:model="available_days">
                                                    </div>
                                                    @error('available_days')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work time" wire:model="available_times">
                                                    </div>
                                                    @error('available_times')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-raised btn-success" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @elseif($userRole === 'Community Health')
                                <h2 class="card-inside-title">Update Working Preference</h2>
                                <div class="body">
                                    <form wire:submit.prevent='updateWorkingPreference()'>
                                        @if (session()->has('workings'))
                                        <div class="alert alert-success">
                                            {{session('workings')}}
                                        </div>
                                        @endif
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work Days" wire:model="available_days">
                                                    </div>
                                                    @error('available_days')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Work time" wire:model="available_times">
                                                    </div>
                                                    @error('available_times')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <button class="btn btn-raised btn-success" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @endif
                            @endif
                        @endauth
                        <hr>
                    </div>

                    <div class="card">
                        <h2 class="card-inside-title">Education Infomations</h2>
                        <div class="body">
                            <form wire:submit.prevent='updateHealthproviderEducation()'>
                                @if (session()->has('eduinfo'))
                                <div class="alert alert-success">
                                    {{session('eduinfo')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="School" wire:model="school">
                                            </div>
                                            @error('school')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Course of Study" wire:model="course">
                                            </div>
                                            @error('course')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Qualification" wire:model="qualification">
                                            </div>
                                            @error('qualification')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised btn-success" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>

                    <div class="card">
                        <h2 class="card-inside-title">Certification</h2>
                        <div class="body">
                            <form wire:submit.prevent='VerificationUpdate()'>
                                @if (session()->has('verification'))
                                <div class="alert alert-success">
                                    {{session('verification')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="License No." wire:model="license_no">
                                            </div>
                                            @error('license_no')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" class="form-control" wire:model="license_img">
                                            </div>
                                            <small class="form-text text-muted">Add a copy of your license. Max. file size: 2 MB. Allowed images: jpg, jpeg, png.</small>
                                            @error('license_img')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="NIN No." wire:model="nin_no">
                                            </div>
                                            @error('nin_no')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised btn-success" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>

                    <div class="card">
                        <h2 class="card-inside-title">Work Experience</h2>
                        <div class="body">
                            <form wire:submit.prevent='updateWorkExperience()'>
                                @if (session()->has('workexperience'))
                                <div class="alert alert-success">
                                    {{session('workexperience')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Employment status" wire:model="employment_status">
                                            </div>
                                            @error('employment_status')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Place of work" wire:model="place_of_work">
                                            </div>
                                            <small class="form-text text-muted">Add your work place if you are employed.</small>
                                            @error('place_of_work')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Job Position" wire:model="job_position">
                                            </div>
                                            <small class="form-text text-muted">Add your current position at your work place.</small>
                                            @error('job_position')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" placeholder="Reference Phone No." wire:model="reference">
                                            </div>
                                            <small class="form-text text-muted">Provide phone no. for any reference for contact and verification.</small>
                                            @error('reference')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised btn-success" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>

                    <div class="card">
                        <h2 class="card-inside-title">Social Madia Infomations</h2>
                        <div class="body">
                            <form wire:submit.prevent='updateSocialInfo()'>
                                @if (session()->has('socialinfo'))
                                <div class="alert alert-success">
                                    {{session('socialinfo')}}
                                </div>
                                @endif
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Facebook URL" wire:model="facebook_url">
                                            </div>
                                            @error('facebook_url')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Instagram URL" wire:model="instagram_url">
                                            </div>
                                            @error('instagram_url')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Twitter URL" wire:model="twitter_url">
                                            </div>
                                            @error('twitter_url')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Linkedin URL" wire:model="linkedin_url">
                                            </div>
                                            @error('linkedin_url')
                                                <span class="alert text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-raised btn-success" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div role="tabpanel" class="tab-pane {{ $tab == 'change_password' ? 'active in' : '' }}" id="change_password">
                <div class="timeline-body">
                    <div class="timeline m-border">
                        <h2 class="card-inside-title">Security Settings</h2>
                       
                        <form  wire:submit.prevent='updateHealthcarePassword()'>
                            @if (session()->has('passwordsuccess'))
                            <div class="alert alert-success">
                                {{session('passwordsuccess')}}
                            </div>
                            @endif
                            @if (session()->has('passworderror'))
                            <div class="alert alert-danger">
                                {{session('passworderror')}}
                            </div>
                            @endif
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Current Password" wire:model.differ="current_password">
                                        </div>
                                        @error('current_password')
                                            <span class="alert text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="New Password" wire:model.differ="new_password">
                                        </div>
                                        @error('new_password')
                                            <span class="alert text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control" placeholder="Confirm new Password" wire:model.differ="new_password_confirmation">
                                        </div>
                                        @error('password_confirmation')
                                            <span class="alert text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-raised btn-success btn-sm" type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
