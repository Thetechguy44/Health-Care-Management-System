<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Setting;
use Auth;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view ('dashboards.admin.settings.index');
    }

    public function update()
    {

    }
}
