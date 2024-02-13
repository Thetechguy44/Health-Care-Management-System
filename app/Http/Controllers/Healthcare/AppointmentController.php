<?php

namespace App\Http\Controllers\Healthcare;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\HealthProvider;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function viewAppointment()
    {
        $provider = Auth::user()->healthProvider;
        $appointments = Appointment::where('healthcare_provider_id', $provider->id)->with('patient.user')->get();
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
}
