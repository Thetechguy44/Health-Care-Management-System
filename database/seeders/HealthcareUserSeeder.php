<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HealthProvider;

class HealthcareUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Doctor User',
                'email' => 'doctor@example.com',
                'password' => Hash::make(12345678),
                'user_type' => 'healthcare_provider',
                'phone' => '1234567899',
                'gender' => 'male',
                'role' => 'Doctor', // Health provider role
            ],
            [
                'name' => 'Nurse User',
                'email' => 'nurse@example.com',
                'password' => Hash::make(12345678),
                'user_type' => 'healthcare_provider',
                'phone' => '12345678907',
                'gender' => 'male',
                'role' => 'Nurse', // Health provider role
            ],
            [
                'name' => 'Community Worker',
                'email' => 'cworker@example.com',
                'password' => Hash::make(12345678),
                'user_type' => 'healthcare_provider',
                'phone' => '12345678900',
                'gender' => 'female',
                'role' => 'Community Health', // Health provider role
            ],
            
        ];

        foreach ($users as $userData) {
            // Create a user record
            $user = User::firstOrCreate([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'user_type' => $userData['user_type'],
                'phone' => $userData['phone'],
                'gender' => $userData['gender'],
            ]);

            // Create a health provider record associated with the user
            HealthProvider::firstOrCreate([
                'user_id' => $user->id,
                'role' => $userData['role'],
            ]);
        }
    }
}
