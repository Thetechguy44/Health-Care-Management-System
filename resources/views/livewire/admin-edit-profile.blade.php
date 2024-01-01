<div>
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Edit Profile</h4>
            </div>
        </div>
        <form wire:submit.prevent='updateAvatar()'>
            <div class="card-box">
                <h3 class="card-title">Profile Picture</h3>
                @if (session()->has('avatar'))
                <div class="alert alert-success">
                    {{session('avatar')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <div wire:loading wire:target="avatar">Loading</div>
                                @if($avatar)
                                <img class="avatar" src="" alt="" id="adminPicture">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Avatar Image</label>
                            <div>
                                <input class="form-control" type="file" wire:model="avatar">
                                @error('avatar')
                                    <span class="alert text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small class="form-text text-muted">Max. file size: 2 MB. Allowed images: jpg, gif, png.</small>
                            </div>
                        </div>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary submit-btn" type="submit"><div wire:loading wire:target="updateAvatar()"></div>Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form wire:submit.prevent='updateAdminBasicInfo()'>
            <div class="card-box">
                <h3 class="card-title">Basic Informations</h3>
                @if (session()->has('basicinfo'))
                <div class="alert alert-success">
                    {{session('basicinfo')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Full Name</label>
                            <input type="text" class="form-control floating" wire:model="name">
                            @error('name')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Email</label>
                            <input type="text" class="form-control floating" wire:model="email">
                            @error('email')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Birth Date</label>
                                <input class="form-control floating" type="date" wire:model="dob">
                                @error('dob')
                                    <span class="alert text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus select-focus focused">
                            <label class="focus-label">Gender</label>
                            <select class="select form-control floating select2-hidden-accessible" tabindex="-1" aria-hidden="true" wire:model="selectedGender">
                            @foreach ($genderOptions as $option)
                                <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Address</label>
                            <input type="text" class="form-control floating" wire:model="address">
                            @error('address')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">City</label>
                            <input type="text" class="form-control floating" wire:model="city">
                            @error('city')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">LGA</label>
                            <input type="text" class="form-control floating" wire:model="lga">
                            @error('lga')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">State</label>
                            <input type="text" class="form-control floating" wire:model="state">
                            @error('state')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Phone Number</label>
                            <input type="text" class="form-control floating" wire:model="phone">
                            @error('phone')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Save</button>
                </div>
            </div>
        </form>
        <form wire:submit.prevent='updateAdminEducation()'>
            <div class="card-box">
                <h3 class="card-title">Education Informations</h3>
                @if (session()->has('eduinfo'))
                <div class="alert alert-success">
                    {{session('eduinfo')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Institution</label>
                            <input type="text" class="form-control floating" wire:model="school">
                            @error('school')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Subject</label>
                            <input type="text" class="form-control floating" wire:model="course">
                            @error('course')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Qualification</label>
                            <input type="text" class="form-control floating" wire:model="qualification">
                            @error('qualification')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Save</button>
                </div>
            </div>
        </form>
        <form wire:submit.prevent='updateSocialInfo()'>
            <div class="card-box">
                <h3 class="card-title">Social Media Information</h3>
                @if (session()->has('socialinfo'))
                <div class="alert alert-success">
                    {{session('socialinfo')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Facebook url</label>
                            <input type="text" class="form-control floating" wire:model="facebook_url">
                            @error('facebook_url')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Intagram url</label>
                            <input type="text" class="form-control floating" wire:model="instagram_url">
                            @error('instagram_url')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Twitter url</label>
                            <input type="text" class="form-control floating" wire:model="twitter_url">
                            @error('twitter_url')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">LinkedIn url</label>
                            <input type="text" class="form-control floating" wire:model="linkedin_url">
                            @error('linkedin_url')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Save</button>
                </div>
            </div>
        </form>
        <form wire:submit.prevent='updateAdminPassword()'>
            <div class="card-box">
                <h3 class="card-title">Change Password</h3>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Old Password</label>
                            <input type="password" class="form-control floating" wire:model.differ="current_password">
                            @error('current_password')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">New Password</label>
                            <input type="password" class="form-control floating" wire:model.differ="new_password">
                            @error('new_password')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-focus focused">
                            <label class="focus-label">Confirm new password</label>
                            <input type="password" class="form-control floating" wire:model.differ="new_password_confirmation">
                            @error('cpassword')
                                <span class="alert text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center m-t-20">
                    <button class="btn btn-primary submit-btn" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
