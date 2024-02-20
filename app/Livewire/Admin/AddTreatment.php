<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\User;
use App\Models\Patient;
use App\Models\Treatment;

class AddTreatment extends Component
{
    public $patient;
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

    public function render()
    {
        $providers = $this->getProviders();
        $specialities = Speciality::all();
        $patients = Patient::with('user')->get();
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

        return view('livewire.admin.add-treatment', [
            'providers' => $providers,
            'specialities' => $specialities,
            'doctors' => $doctors,
            'healthProviders' => $healthProviders,
            'patients' => $patients,
        ]);
    }

    public function getProviders()
    {
        return HealthProvider::where('role', $this->providerRole)->get();
    }

    public function submitTreatment()
    {
        $validatedData = $this->validate([
        'patient'=>'required',
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

        Treatment::create([
            'patient_id' => $this->patient,
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
        session()->flash('treatment', 'Treatment added successfully.');
        return redirect()->route('admin.treatments.index')->with('success', 'Treatment added successfully.');
    }
}