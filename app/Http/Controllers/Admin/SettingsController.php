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
    public function index()
    {
        $settings = Setting::first();
        return view('dashboards.admin.settings.index', compact('settings'));
    }

    //updating the settings 
    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric|min:11',
            'about_us' => 'required',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code' => 'required',
            'footer' => 'nullable',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
        ]);
    
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
