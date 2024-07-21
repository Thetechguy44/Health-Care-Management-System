<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Services;
use Auth;

class SettingsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:setting-view', ['only' => ['index','update']]);
         $this->middleware('permission:service-view', ['only' => ['services','update']]);
         $this->middleware('permission:theme-view', ['only' => ['theme','update']]);
    }

    public function index()
    {
        $settings = Setting::first();
        return view('dashboards.admin.settings.index', compact('settings'));
    }

    //updating the settings 
    public function update(Request $request)
    {
        // $request->validate([
        //     'company_name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone' => 'required|numeric|digits_between:10,15',
        //     'about_us' => 'required|string',
        //     'address' => 'required|string|max:255',
        //     'country' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'state' => 'required|string|max:255',
        //     'postal_code' => 'required|string|max:20',
        //     'footer' => 'nullable|string|max:255',
        //     'facebook_url' => 'nullable|url|max:255',
        //     'instagram_url' => 'nullable|url|max:255',
        //     'twitter_url' => 'nullable|url|max:255',
        //     'linkedin_url' => 'nullable|url|max:255',
        // ]);        
    
        $setting = Setting::first();
    
        if ($setting) {
            $setting->update([
                'company_name' => $request->company_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'about_us' => $request->about_us,
                'address' => $request->address,
                'country' => $request->country,
                'city' => $request->city,
                'state' => $request->state,
                'postal_code' => $request->postal_code,
                'footer' => $request->footer,
                'facebook_url' => $request->facebook_url,
                'instagram_url' => $request->instagram_url,
                'twitter_url' => $request->twitter_url,
                'linkedin_url' => $request->linkedin_url,
            ]);
    
            return redirect()->back()->with('success', 'Companies Information updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Setting not found.');
        }
    }

    public function services()
    {
        return view('dashboards.admin.settings.services');
    }
    
}
