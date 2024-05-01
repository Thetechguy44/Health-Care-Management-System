<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthProvider;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appointment;
use App\Models\Treatment;

class Speciality extends Model
{
    use HasFactory;

    protected $table = 'specialities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function providerSpeciality()
    {
        return $this->hasmany(HealthProvider::class, 'id');
    }

    public function appointments(): HasMany
    {
        return $this->hasmany(Appointment::class, 'speciality_id');
    }

    public function treatments(): HasMany
    {
        return $this->hasmany(Treatment::class, 'speciality_id');
    }
}
