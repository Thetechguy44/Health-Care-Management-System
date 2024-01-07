<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
