<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;

class EditAppointment extends Component
{
    public $patient;
    public $providerRole;
    public $selectedSpeciality;
    public $selectedProvider;
    public $selectedDoctor;
    public $age;
    public $gender;
    public $phone;
    public $address;
    public $location;
    public $problem;
    public $date;
    public $genderOptions;
    public Appointment $appointment;
    
    public function mount(Appointment $appointment)
    {
        $this->appointment = $appointment;
        $this->genderOptions = ['male', 'female', 'other'];

        $this->patient = $appointment->patient_id;
        $this->providerRole = $appointment->provider;
        $this->selectedSpeciality = $appointment->speciality_id;
        $this->selectedProvider = $appointment->healthcare_provider_id;
        $this->selectedDoctor = $appointment->healthcare_provider_id;
        $this->gender = $appointment->gender;
        $this->age = $appointment->age;
        $this->phone = $appointment->phone;
        $this->location = $appointment->location;
        $this->address = $appointment->address;
        $this->problem = $appointment->problem;
        $this->date = $appointment->date;
    }

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

        return view('livewire.admin.edit-appointment', [
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

    public function submitAppointment()
    {
        $validatedData = $this->validate([
        'patient'=>'required',
        'providerRole'=>'required|string|in:Doctor,Nurse,Community Health',
        'selectedSpeciality'=>'required_if:providerRole,Doctor',
        'selectedDoctor'=>'required_if:providerRole,Doctor',
        'selectedProvider'=>'required_if:providerRole,Nurse,Community Health',
        'gender'=>'required',
        'age'=>'required',
        'phone'=>'required',
        'location'=>'required',
        'address'=>'required_if:location,Patient Location',
        'problem'=>'required',
        'date'=>'required',
        ]);

        // dd($validatedData);

        $providerId = null;
        if ($this->providerRole === 'Doctor') {
            $providerId = $this->selectedDoctor;
        } elseif ($this->providerRole === 'Nurse' || $this->providerRole === 'Community Health') {
            $providerId = $this->selectedProvider;
        }

        $this->appointment->update([
            'patient_id' => $this->patient,
            'provider' => $this->providerRole,
            'speciality_id' => $this->selectedSpeciality,
            'healthcare_provider_id' => $providerId,
            'gender' => $this->gender,
            'age' => $this->age,
            'phone' => $this->phone,
            'location' => $this->location,
            'address' => $this->address,
            'problem' => $this->problem,
            'date' => $this->date,
        ]);
        session()->flash('appointment', 'Appointment has been updated successfully.');
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment has been updated successfully.');
    }
}
