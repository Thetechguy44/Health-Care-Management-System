<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Appointment;
use App\Models\Treatment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $patient = auth()->user()->patient;

        $treatments = Treatment::where('patient_id', $patient->id)->with('healthProvider.user')->latest()->paginate(5);
        $appointments = Appointment::where('patient_id', $patient->id)->with('healthProvider.user')->latest()->paginate(5);
    
        $totalAppointmentCount = Appointment::where('patient_id', $patient->id)
            ->count();
    
        $totalTreatmentCount = Treatment::where('patient_id', $patient->id)
            ->count();

        return view('dashboards.patient.home', [
            'totalAppointmentCount' => $totalAppointmentCount,
            'totalTreatmentCount' => $totalTreatmentCount,
            'treatments' => $treatments,
            'appointments' => $appointments,
        ]);
    }

    public function viewProfile()
    {
        $profile = Auth::user();
        return view('dashboards.patient.profile.index', compact('profile'));
    }
}
