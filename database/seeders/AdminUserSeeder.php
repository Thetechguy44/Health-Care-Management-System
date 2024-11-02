<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the user already exists
        $user = User::where('email', 'admin@example.com')->first();

        if (!$user) {
            // Create a user record if it does not exist
            $user = User::create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'user_type' => 'admin',
                'phone' => '1234567890',
                'gender' => 'male',
            ]);

            // Create an admin record associated with the user
            Admin::create([
                'user_id' => $user->id,
            ]);
        }

        // Assign the "Admin" role
        $role = Role::where('name', 'Admin')->first(); // Ensure the role exists
        $user->assignRole($role); // Assign the role to the user
    }
}
