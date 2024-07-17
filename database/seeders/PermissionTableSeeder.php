<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'admin-list',
            'admin-create',
            'admin-edit',
            'admin-delete',
            'patient-list',
            'patient-create',
            'patient-edit',
            'patient-delete',
            'healthprovider-list',
            'healthprovider-create',
            'healthprovider-edit',
            'healthprovider-delete',
            'appointment-list',
            'appointment-create',
            'appointment-edit',
            'appointment-delete',
            'treatment-list',
            'treatment-create',
            'treatment-edit',
            'treatment-delete',
            'speciality-list',
            'speciality-create',
            'speciality-edit',
            'speciality-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'setting-view',
            'service-view',
            'theme-view'
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
