<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\User;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BookAppointment extends Component
{
    public $patientName;
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

    public function mount()
    {
        $patient = Auth::user();
        $this->patientName = $patient->name;
        $this->gender = $patient->gender;
        $this->address = $patient->address;
        $this->genderOptions = ['male', 'female', 'other'];
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
        
        
        return view('livewire.book-appointment', [
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

    public function submitAppointment()
    {
        $validatedData = $this->validate([
        'patientName'=>'required|string|max:255',
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

        $patientID = Auth::user()->patient->id;

        Appointment::create([
            'patient_id' => $patientID,
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
            'status' => 0,
        ]);
        session()->flash('appointment', 'Your Appointment has been booked successfully.');
        return redirect()->route('appointments.index')->with('success', 'Your Appointment has been booked successfully.');
    }
}
