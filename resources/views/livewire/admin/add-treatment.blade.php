<div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            @if (session()->has('treatment'))
            <div class="alert alert-success">
                {{session('treatment')}}
            </div>
            @endif
            <form wire:submit.prevent='submitTreatment()'>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="patient">
                                <option>Select</option>
                                @foreach($patients as $patient)
                                <option value="{{$patient->id}}">{{$patient->user->name}}</option>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Provider's Name</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="selectedProvider">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Diagnose</label>
                            <input type="text" class="form-control" wire:model="diagnose">
                        </div>
                        @error('diagnose')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Vaccination</label>
                            <input type="text" class="form-control" wire:model="vaccination" placeholder="Recommended Medication or Vaccination">
                        </div>
                        @error('vaccination')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Problem or Symptoms</label>
                            <textarea cols="30" rows="4" class="form-control" wire:model="problem" placeholder="Please type the problem or symptoms described to the Healthcare Provider"></textarea>
                        </div>
                        @error('problem')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Amount Paid</label>
                            <input type="text" class="form-control" wire:model="amount_paid" placeholder="Amount to the Healthcare Provider">
                        </div>
                        @error('amount')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mode of Payment</label>
                            <select class="form-control select select2-hidden-accessible" wire:model="mode_of_payment">
                                <option>-- Payment Method --</option>
                                <option value="wire">Online (Bank transfer, Credit cards, etc)</option>
                                <option value="wireless">Offline (Cash, Cheque, etc)</option>
                            </select>
                        </div>
                        @error('mode_of_payment')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of Treatment</label>
                            <input type="date" class="form-control" wire:model="date">
                        </div>
                        @error('date')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Time of Treatment</label>
                            <input class="form-control" type="time" wire:model="time">
                        </div>
                        @error('time')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address of Treatment</label>
                            <input type="text" class="form-control" wire:model="address">
                        </div>
                        @error('address')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" type="submit">Add Treatment</button>
                </div>
            </form>
        </div>
    </div>
</div>
