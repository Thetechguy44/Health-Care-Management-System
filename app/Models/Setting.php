<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'email',
        'phone',
        'about_us',
        'address',
        'country',
        'city',
        'state',
        'postal_code',
        'footer',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url'
    ];
}
