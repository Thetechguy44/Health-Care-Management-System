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

class EditTreatment extends Component
{
    public $patientName;
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
    public Treatment $treatment;

    public function mount(Treatment $treatment)
    {
        $this->treatment = $treatment;
        
        $patient = Auth::user();
        $this->patientName = $patient->name;
        
        $this->patient = $treatment->patient_id;
        $this->providerRole = $treatment->provider;
        $this->selectedSpeciality = $treatment->speciality_id;
        $this->selectedProvider = $treatment->healthcare_provider_id;
        $this->selectedDoctor = $treatment->healthcare_provider_id;
        $this->problem = $treatment->problem;
        $this->diagnose = $treatment->diagnose;
        $this->vaccination = $treatment->vaccination;
        $this->address = $treatment->address;
        $this->amount_paid = $treatment->amount_paid;
        $this->mode_of_payment = $treatment->mode_of_payment;
        $this->date = $treatment->date;
        $this->time = $treatment->time;
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

        return view('livewire.edit-treatment', [
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
        'patientName'=>'required',
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

        $this->treatment->update([
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
        session()->flash('treatment', 'Your treatment has been updated successfully.');
        return redirect()->route('treatments.index')->with('success', 'Your treatment has been updated successfully.');
    }
}
