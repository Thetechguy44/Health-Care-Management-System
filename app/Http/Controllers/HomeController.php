<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Patient;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboards.patient.home');
    }

    public function viewProfile()
    {
        $profile = Auth::user();
        return view('dashboards.patient.profile.index', compact('profile'));
    }
}
