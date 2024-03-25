<?php

namespace App\Http\Controllers\Healthcare;

use App\Http\Controllers\Controller;
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $healthProvider = auth()->user()->healthProvider;
    
        $totalAppointmentCount = Appointment::where('healthcare_provider_id', $healthProvider->id)
            ->distinct('patient_id')
            ->count();
    
        $totalTreatmentCount = Treatment::where('healthcare_provider_id', $healthProvider->id)
            ->distinct('patient_id')
            ->count();

        $treated = Treatment::where('healthcare_provider_id', $healthProvider->id)
            ->with('patient.user')
            ->latest()->paginate(5);

        $appointed = Appointment::where('healthcare_provider_id', $healthProvider->id)
            ->with('patient.user')
            ->latest()->paginate(5);
        
        $currentDate = now()->toDateString();$currentDate = now()->toDateString();
        $dailyTreatmentsCount = Treatment::where('healthcare_provider_id', $healthProvider->id)
            ->whereDate('date', $currentDate)
            ->count();

        $dailyAppointmentsCount = Appointment::where('healthcare_provider_id', $healthProvider->id)
            ->whereDate('date', $currentDate)
            ->count();
    
        $appointPatients = $appointed->pluck('patient')->unique();
        $treatedPatients = $treated->pluck('patient')->unique();
        $treatments = Treatment::where('healthcare_provider_id', $healthProvider->id)->with('patient.user')->latest()->paginate(5);
        $appointments = Appointment::where('healthcare_provider_id', $healthProvider->id)->with('patient.user')->latest()->paginate(5);
    
        return view('dashboards.healthcare-provider.home', [
            'totalAppointmentCount' => $totalAppointmentCount,
            'totalTreatmentCount' => $totalTreatmentCount,
            'treatedPatients' => $treatedPatients,
            'treatments' => $treatments,
            'appointments' => $appointments,
            'appointPatients' => $appointPatients,
            'dailyTreatmentsCount' => $dailyTreatmentsCount,
            'dailyAppointmentsCount' => $dailyAppointmentsCount,
        ]);
    }
    

    public function viewProfile()
    {
        $profile = Auth::user();
        return view('dashboards.healthcare-provider.profile.index', compact('profile'));
    }
}
