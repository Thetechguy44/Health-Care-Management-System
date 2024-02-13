<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HealthProvider;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient = Auth::user()->patient;
        $appointments = Appointment::where('patient_id', $patient->id)->with('healthProvider.user')->get();
        return view('dashboards.patient.appointment.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.patient.appointment.book-appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view('dashboards.patient.appointment.edit-appointment', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
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
