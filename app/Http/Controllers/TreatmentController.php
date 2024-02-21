<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;

class TreatmentController extends Controller
{
    public function index()
    {
        $patient = Auth::user()->patient;
        $treatments = Treatment::where('patient_id', $patient->id)->with('healthProvider.user')->get();
        return view('dashboards.patient.treatment.index', compact('treatments'));
    }

    public function create()
    {
        return view('dashboards.patient.treatment.create');
    }

    public function edit(string $id)
    {
        $treatment = Treatment::find($id);
        return view('dashboards.patient.treatment.edit', compact('treatment'));
    }
}
