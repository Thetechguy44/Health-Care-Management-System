<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speciality;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
            [
                'name' => 'Dentist',
            ],
            [
                'name' => 'Surgeon',
            ],
            [
                'name' => 'ENT',
            ],
            [
                'name' => 'Cardiologist',
            ],
        ];

        foreach ($specialties as $specialtyData) {
            // Create a specialty record
            Speciality::firstOrCreate([
                'name' => $specialtyData['name'],
            ]);
        }
    }
}
