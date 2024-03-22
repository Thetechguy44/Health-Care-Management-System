<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboards.admin.home');
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
