<?php

namespace App\Http\Controllers\Healthcare;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Treatment;
use App\Models\HealthProvider;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function viewAppointment()
    {
        $provider = Auth::user()->healthProvider;
        $appointments = Appointment::where('healthcare_provider_id', $provider->id)->with('patient.user')
         ->latest()->paginate(5);
        return view('dashboards.healthcare-provider.appointment.index', compact('appointments'));
    }

    public function updateStatus($appointmentId)
    {
        $appointment = Appointment::find($appointmentId);
        if($appointment){
            if($appointment->status){
                $appointment->status = 0;
            }
            else{
                $appointment->status = 1;
            }
            $appointment->save();
        }
        return back();
    }

    public function viewTreatment()
    {
        $provider = Auth::user()->healthProvider;
        $treatments = Treatment::where('healthcare_provider_id', $provider->id)->with('patient.user')
         ->latest()->paginate(5);
        return view('dashboards.healthcare-provider.treatment.index', compact('treatments'));
    }
}
