<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthProvider;
use App\Models\Patient;

class HealthProviderController extends Controller
{
    public function index()
    {
        $providers = HealthProvider::with('user', 'speciality')->get();
        return view('dashboards.patient.healthprovider.index', compact('providers'));
    }

    public function profile($id)
    {
        $provider = HealthProvider::with('user', 'speciality')->find($id);
        return view('dashboards.patient.healthprovider.show', compact('provider'));
    }
}
