<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Speciality;
use App\Models\Appointment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HealthProvider extends Model
{
    use HasFactory;

    protected $table = 'healthcare_providers';

    protected $fillable = [
        'user_id',
        'speciality_id',
        'status',
        'role',
        'community_category',
        'nurse_category',
        'available_days',
        'available_times',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasmany(Appointment::class, 'healthcare_provider_id');
    }
}
