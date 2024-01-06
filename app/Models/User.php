<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Auth;
use App\Models\Admin;
use App\Models\HealthProvider;
use App\Models\Patient;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'about',
        'avatar',
        'user_type',
        'phone',
        'dob',
        'gender',
        'blood_group',
        'qualifiation',
        'nin_no',
        'license_no',
        'place_of_work',
        'reference',
        'price',
        'verified',
        'address',
        'lga',
        'city',
        'license_img',
        'qualification_img',
        'state',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function usertype($value)
    {
        $enumValues = ['admin', 'healthcare_provider', 'patient'];

        if (array_key_exists($value, $enumValues)) {
            return $enumValues[$value];
        }
        return 'unknown';
    }

    public function getPictureAttribute(){
        if( auth()->user()->avatar != null ){
            return asset('storage/avatars/'.auth()->user()->avatar);
        }else{
            return asset('default/users/img/default-avatar.png');
        }
    }

    public function admin()
    {
        return $this->hasmany(Admin::class, 'id');
    }

    public function healthcare_provider()
    {
        return $this->hasmany(HealthProvider::class, 'id');
    }

    public function patient()
    {
        return $this->hasmany(Patients::class, 'id');
    }
}
