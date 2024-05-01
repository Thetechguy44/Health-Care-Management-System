<div>
    <div class="body">
        @if (session()->has('appointment'))
        <div class="alert alert-success">
            {{session('appointment')}}
        </div>
        @endif
        <form wire:submit.prevent='updateAppointment()'>
            <div class="row clearfix">
                <div class="col">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Name" wire:model="patientFName" disabled>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="providerRole" wire:click="$refresh" required>
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
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedSpeciality" wire:click="$refresh" required>
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
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedDoctor" required>
                            <option value="">-- Select Doctor --</option>
                            @foreach ($doctors as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->user->name }}</option>
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
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedProvider" required>
                            <option value="">-- Select  {{ ucfirst($providerRole) }} --</option>
                            @foreach ($healthProviders as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->user->name }}</option>
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
            </div>
            <div class="row clearfix">
                <div class="col ">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datepicker form-control" placeholder="Age" data-dtp="dtp_WyRdg" wire:model="age" required>
                        </div>
                    </div>
                    @error('age')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="gender" required>
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
                <div class="col ">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" placeholder="Phone no. eg 08012346790" wire:model="phone" required>
                        </div>
                    </div>
                    @error('phone')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col ">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datetimepicker form-control" placeholder="Please choose date &amp; time..." data-dtp="dtp_BmeRI" wire:model="date" required>
                        </div>
                    </div>
                    @error('date')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type your problem or symptoms" wire:model="problem" required></textarea>
                        </div>
                    </div>
                    @error('problem')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="location" wire:click="$refresh" required>
                            <option>-- Choose Location --</option>
                            <option value="Healthcare Provider Location">Healthcare Provider's Address</option>
                            <option value="Patient Location">My Address</option>
                        </select>
                    </div>
                    @error('location')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @if($location == 'Patient Location')
                <div class="col">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datetimepicker form-control" placeholder="Please type your address" data-dtp="dtp_BmeRI" wire:model="address" required>
                        </div>
                    </div>
                    @error('address')
                        <span class="alert text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                @endif
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
