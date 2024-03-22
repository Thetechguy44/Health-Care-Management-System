<?php

namespace App\Http\Controllers\Healthcare;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\HealthProvider;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboards.healthcare-provider.home');
    }

    public function viewProfile()
    {
        $profile = Auth::user();
        return view('dashboards.healthcare-provider.profile.index', compact('profile'));
    }
}
