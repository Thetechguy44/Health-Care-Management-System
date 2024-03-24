<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Appointment;
use App\Models\Treatment;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboards.admin.home', [
            'providerCount' => HealthProvider::exists() ? HealthProvider::count() : 0,
            'patientCount' => Patient::exists() ? Patient::count() : 0,
            'appointmentCount' => Appointment::exists() ? Appointment::count() : 0,
            'treatmentCount' => Treatment::exists() ? Treatment::count() : 0,
            'appointments' => Appointment::with('patient.user', 'healthProvider.user')->latest()->paginate(5),
            'healthProviders' => HealthProvider::with('user')->latest()->paginate(5),
            'patients' => Patient::with('user')->latest()->paginate(5),
            'treatments' => Treatment::with('patient.user')->latest()->paginate(5),
        ]);
    }

    public function ViewProfile()
    {
        $profile = Auth::user();
        return view('dashboards.admin.profile.index', compact('profile'));
    }

    public function editProfile($id)
    {
        $profile = Auth::user();
        return view('dashboards.admin.profile.edit', compact('profile'));
    }

}
