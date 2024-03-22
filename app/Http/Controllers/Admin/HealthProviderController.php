<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HealthProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class HealthProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $providers = HealthProvider::with('user')->get();
        return view('dashboards.admin.healthprovider.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.admin.healthprovider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'role' => 'required',
            'gender' => 'required',
        ]);

        $provider = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'user_type' => 'healthcare_provider',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'gender' => $request['gender'],
        ]);

        HealthProvider::create([
            'user_id' => $provider->id,
            'role' => $request['role'],
        ]);

        return redirect()->route('admin.health_providers.index')->with('success', 'Healthcare Provider created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provider = HealthProvider::with('user')->find($id);
        return view('dashboards.admin.healthprovider.show', compact('provider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provider = HealthProvider::with('user')->find($id);
        return view('dashboards.admin.healthprovider.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id),
            ],
            'phone' => 'required|numeric',
            'role' => 'required',
            'gender' => 'required',
        ]);
    
        // Find the user by ID
        $provider = User::findOrFail($id);
    
        // Update the user's information
        $provider->update([
            'name' => $request['name'],
            'lastname' => $request['lastname'],
            'othername' => $request['othername'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'gender' => $request['gender'],
        ]);
    
        // Update the health provider's role
        $provider->healthProvider()->update([
            'role' => $request['role'],
        ]);

        return redirect()->route('admin.health_providers.index')->with('success', 'Healthcare Provider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findorFail($id)->delete();
        return redirect()->route('admin.health_providers.index')->with('success', 'Healthcare Provider Deleted Successfully.');
    }
}
