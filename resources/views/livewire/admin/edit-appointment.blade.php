<div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            @if (session()->has('appointment'))
            <div class="alert alert-success">
                {{session('appointment')}}
            </div>
            @endif
            <form wire:submit.prevent='submitAppointment()'>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="patient">
                                <option>Select</option>
                                @foreach($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->user->firstname}} {{$patient->user->lastname}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('patient')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Healthcare Providers</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="providerRole" wire:click="$refresh">
                                <option>-- Healthcare Providers --</option>
                                <option value="Doctor">Doctors</option>
                                <option value="Nurse">Nurses</option>
                                <option value="Community Health">Community Health</option>
                            </select>
                        </div>
                        @error('providerRole')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if ($providerRole == 'Doctor')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Speciality</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="selectedSpeciality" wire:click="$refresh">
                                <option value="">-- Choose Category --</option>
                                @foreach ($specialities as $speciality)
                                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('selectedSpeciality')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if ($selectedSpeciality)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Provider's Name</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="selectedDoctor">
                                <option value="">-- Select Doctor --</option>
                                @foreach ($doctors as $provider)
                                <option value="{{ $provider->id }}">{{ $provider->user->firstname }} {{ $provider->user->lastname }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('selectedDoctor')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @endif
                    @elseif ($providerRole === 'Nurse' || $providerRole === 'Community Health')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Provider's Name</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="selectedProvider">
                                <option value="">-- Select  {{ ucfirst($providerRole) }} --</option>
                                @foreach ($healthProviders as $provider)
                                <option value="{{ $provider->id }}">{{ $provider->user->firstname }} {{ $provider->user->lastname }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('selectedProvider')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @endif
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" wire:model="age">
                        </div>
                        @error('age')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="gender">
                                <option>-- Gender --</option>
                                @foreach ($genderOptions as $option)
                                    <option value="{{ $option }}">{{ ucfirst($option) }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('gender')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date and Time</label>
                            <input type="text" class="form-control" wire:model="date">
                        </div>
                        @error('date')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Phone Number</label>
                            <input class="form-control" type="number" wire:model="phone" placeholder="eg. 08011233098">
                        </div>
                        @error('phone')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Problem or Symptoms</label>
                            <textarea cols="30" rows="4" class="form-control" wire:model="problem" placeholder="Please type your problem or symptoms"></textarea>
                        </div>
                        @error('problem')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="location" wire:click="$refresh">
                                <option>Select</option>
                                <option value="Healthcare Provider Location">Healthcare Provider's Address</option>
                                <option value="Patient Location">Patient Address</option>
                            </select>
                        </div>
                        @error('location')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @if($location == 'Patient Location')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Address</label>
                            <input type="text" class="form-control" wire:model="address">
                        </div>
                        @error('address')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @endif
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" type="submit">Update Appointment</button>
                </div>
            </form>
        </div>
    </div>
</div>
