<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\User;
use App\Models\Patient;
use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AddTreatment extends Component
{
    public $patientFName;
    public $patientLName;
    public $providerRole;
    public $selectedSpeciality;
    public $selectedProvider;
    public $selectedDoctor;
    public $problem;
    public $diagnose;
    public $vaccination;
    public $address;
    public $amount_paid;
    public $mode_of_payment;
    public $date;
    public $time;

    public function mount()
    {
        $patient = Auth::user();
        $this->patientFName = $patient->firstname;
        $this->patientLName = $patient->lastname;
    }

    public function render()
    {
        $providers = $this->getProviders();
        $specialities = Speciality::all();
        $doctors = [];
        $healthProviders = [];

        if ($this->providerRole === 'Nurse' || $this->providerRole === 'Community Health') {
            $healthProviders = HealthProvider::where('role', $this->providerRole)->get();
        }

        if ($this->selectedSpeciality) {
            $doctors = HealthProvider::where('role', 'Doctor')
            ->where('speciality_id', $this->selectedSpeciality)
            ->get();
        }

        return view('livewire.add-treatment', [
            'providers' => $providers,
            'specialities' => $specialities,
            'doctors' => $doctors,
            'healthProviders' => $healthProviders,
        ]);
    }

    public function getProviders()
    {
        return HealthProvider::where('role', $this->providerRole)->get();
    }

    public function submitTreatment()
    {
        $validatedData = $this->validate([
        'patientFName'=>'required',
        'patientLName'=>'required',
        'providerRole'=>'required|string|in:Doctor,Nurse,Community Health',
        'selectedSpeciality'=>'required_if:providerRole,Doctor',
        'selectedDoctor'=>'required_if:providerRole,Doctor',
        'selectedProvider'=>'required_if:providerRole,Nurse,Community Health',
        'problem'=>'required',
        'vaccination'=>'nullable',
        'diagnose'=>'required',
        'address'=>'required',
        'amount_paid'=>'nullable',
        'mode_of_payment'=>'nullable',
        'date'=>'required',
        'time'=>'required',
        ]);

        // dd($validatedData);

        $providerId = null;
        if ($this->providerRole === 'Doctor') {
            $providerId = $this->selectedDoctor;
        } elseif ($this->providerRole === 'Nurse' || $this->providerRole === 'Community Health') {
            $providerId = $this->selectedProvider;
        }

        $patientID = Auth::user()->patient->first()->id;

        Treatment::create([
            'patient_id' => $patientID,
            'provider' => $this->providerRole,
            'speciality_id' => $this->selectedSpeciality,
            'healthcare_provider_id' => $providerId,
            'problem' => $this->problem,
            'vaccination' => $this->vaccination,
            'diagnose' => $this->diagnose,
            'address' => $this->address,
            'amount_paid' => $this->amount_paid,
            'mode_of_payment' => $this->mode_of_payment,
            'date' => $this->date,
            'time' => $this->time,
        ]);
        session()->flash('treatment', 'Your treatment was added successfully.');
        return redirect()->route('treatments.index')->with('success', 'Your treatment was added successfully.');
    }
}
