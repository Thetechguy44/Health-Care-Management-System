<div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="body"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a wire:click.prevent='selectTab("my_info")' class="nav-link {{ $tab == 'my_info' ? 'active' : '' }}" data-toggle="tab" href="#my_info">My Info</a></li>
                    <li class="nav-item"><a wire:click.prevent='selectTab("update_profile")' class="nav-link {{ $tab == 'update_profile' ? 'active' : '' }}" data-toggle="tab" href="#update_profile">Update Profile</a></li>
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane {{ $tab == 'my_info' ? 'active in' : '' }}" id="my_info">                               
                        <div class="wrap-reset">
                            <div class="mypost-list">
                                <div class="post-box">
                                    <p>{{$about}}</p>
                                </div>
                                <hr>
                                <div class="post-box">
                                    <h4>General Report</h4>                                        
                                    <div class="body p-l-0 p-r-0">
                                        
                                    </div>
                                </div>
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
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Blood group" wire:model="blood_group">
                                                    </div>
                                                    @error('blood_group')
                                                        <span class="alert text-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Occupation" wire:model="occupation">
                                                    </div>
                                                    @error('occupation')
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
                                <h2 class="card-inside-title">Security Settings</h2>
                                <div class="body">
                                    <form  wire:submit.prevent='updatePatientPassword()'>
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
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>