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
    function __construct()
    {
         $this->middleware('permission:treatment-list|treatment-create|treatment-edit|treatment-delete', ['only' => ['index','store']]);
         $this->middleware('permission:treatment-create', ['only' => ['create','store']]);
         $this->middleware('permission:treatment-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:treatment-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $treatments = Treatment::with('patient.user', 'healthProvider.user', 'speciality')->latest()->paginate(5);
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
