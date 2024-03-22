<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Auth;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;
use App\Models\Appointment;
use App\Models\Treatment;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function departments()
    {
        return view('frontend.department');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
