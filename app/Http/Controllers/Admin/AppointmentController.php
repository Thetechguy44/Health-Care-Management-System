<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('patient.user', 'healthProvider.user', 'speciality')->latest()->paginate(5);
        return view('dashboards.admin.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admin.appointment.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $appointment = Appointment::find($id);
        return view('dashboards.admin.appointment.edit', compact('appointment'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Appointment::findorFail($id)->delete();
        return redirect()->route('admin.appointments.index')->with('success', 'Appointment deleted successfully.');
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
