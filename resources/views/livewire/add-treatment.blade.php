<div>
    <div class="body">
        @if (session()->has('treatment'))
        <div class="alert alert-success">
            {{session('treatment')}}
        </div>
        @endif
        <form wire:submit.prevent='submitTreatment()'>
            <div class="row clearfix">
                <div class="col">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Name" wire:model="patientName" disabled>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="providerRole" wire:click="$refresh">
                            <option>-- Healthcare Providers --</option>
                            <option value="Doctor">Doctors</option>
                            <option value="Nurse">Nurses</option>
                            <option value="Community Health">Community Health</option>
                        </select>
                        @error('providerRole')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @if ($providerRole == 'Doctor')
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedSpeciality" wire:click="$refresh">
                            <option value="">-- Choose Category --</option>
                            @foreach ($specialities as $speciality)
                            <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedSpeciality')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @if ($selectedSpeciality)
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedDoctor">
                            <option value="">-- Select Doctor --</option>
                            @foreach ($doctors as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->user->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedDoctor')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @endif
                @elseif ($providerRole === 'Nurse' || $providerRole === 'Community Health')
                <div class="col ">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="selectedProvider">
                            <option value="">-- Select  {{ ucfirst($providerRole) }} --</option>
                            @foreach ($healthProviders as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->user->name }}</option>
                            @endforeach
                        </select>
                        @error('selectedProvider')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @endif
            </div>
            <div class="row clearfix">
                <div class="col ">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Diagnose" data-dtp="dtp_WyRdg" wire:model="diagnose">
                        </div>
                        @error('diagnose')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col ">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Vaccination or Medication recommended by the health provider" data-dtp="dtp_WyRdg" wire:model="vaccination">
                        </div>
                        @error('vaccination')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type your problem or symptoms" wire:model="problem"></textarea>
                        </div>
                        @error('problem')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>     
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datetimepicker form-control" placeholder="Please type the address where you are been treated" data-dtp="dtp_BmeRI" wire:model="address">
                        </div>
                        @error('address')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="datetimepicker form-control" placeholder="Amount Paid" data-dtp="dtp_BmeRI" wire:model="amount_paid">
                        </div>
                        @error('amount_paid')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group drop-custum">
                        <select class="form-control show-tick" wire:model="mode_of_payment" wire:click="$refresh">
                            <option>-- Mode of Payment --</option>
                            <option value="wire">Online (Bank transfer, etc)</option>
                            <option value="wireless">Offline (Cash, Cheque, etc)</option>
                        </select>
                        @error('location')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" class="form-control" placeholder="Date of treatment" wire:model="date">
                            <small class="form-text text-muted">Date of treatment</small>
                        </div>
                        @error('date')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="time" class="form-control" placeholder="Time of treatment" wire:model="time">
                            <small class="form-text text-muted">Time of treatment</small>
                        </div>
                        @error('time')
                            <span class="alert text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
