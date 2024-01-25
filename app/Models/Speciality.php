<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HealthProvider;

class Speciality extends Model
{
    use HasFactory;

    protected $table = 'specialities';
    protected $primaryKey = 'id';

    protected $fillable = [
        'specialities'
    ];

    public function providerSpeciality()
    {
        return $this->hasmany(HealthProvider::class, 'id');
    }
}
