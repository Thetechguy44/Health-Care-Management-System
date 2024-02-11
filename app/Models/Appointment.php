<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\HealthProvider;
use App\Models\Speciality;

class Appointment extends Model
{
    use HasFactory;

protected $fillable = ['patient_id', 'healthcare_provider_id', 'speciality_id', 'provider', 'phone', 'age', 'gender', 'problem', 'location', 'address', 'status', 'date',];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function healthProvider()
    {
        return $this->belongsTo(HealthProvider::class, 'healthcare_provider_id');
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }
}
