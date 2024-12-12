<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the admin role
        $role = Role::firstOrCreate(['name' => 'Admin']);

        // Fetch all permissions
        $permissions = Permission::all();

        // Assign all permissions to the admin role
        $role->syncPermissions($permissions);
    }
}
