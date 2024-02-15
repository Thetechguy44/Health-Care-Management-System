<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\HealthProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterHealthcareController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new Healthcare Providers as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HEALTHCARE;


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'othername' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'required|numeric',
            'role' => 'required',
            'gender' => 'required',
        ]);

        $user = User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'othername' => $request['othername'],
            'email' => $request['email'],
            'user_type' => 'healthcare_provider',
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'gender' => $request['gender'],
        ]);

        HealthProvider::create([
            'user_id' => $user->id,
            'role' => $request['role'],
        ]);

        Auth::login($user);

        return redirect('/healthcare_provider/dashboard'); 
    }
}
