<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Patient;

class PatientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user record
        $user = User::create([
            'name' => 'Patient User',
            'email' => 'patient@example.com',
            'password' => Hash::make(12345678),
            'user_type' => 'patient',
            'phone' => '12345678988',
            'gender' => 'male',
        ]);

        // Create an admin record associated with the user
        Patient::create([
            'user_id' => $user->id,
        ]);
    }
}
