<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Treatment;

class TreatmentController extends Controller
{
    public function index()
    {
        $treatments = Treatment::with('patient.user', 'healthProvider.user', 'speciality')->get();
        return view('dashboards.admin.treatment.index', compact('treatments'));
    }

    public function create()
    {
        return view('dashboards.admin.treatment.create');
    }

    public function edit(string $id)
    {
        $treatment = Treatment::find($id);
        return view('dashboards.admin.treatment.edit', compact('treatment'));
    }

    public function destroy(string $id)
    {
        Treatment::findorFail($id)->delete();
        return redirect()->route('admin.treatments.index')->with('success', 'Treatment deleted successfully.');
    }
}
