<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'birthdate',
        'gender',
        'email',
        'password',
        'address_id',
        'medical_info',
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
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function emergencyContacts()
    {
        return $this->hasMany(EmergencyContact::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function companion()
    {
        return $this->hasOne(Companion::class);
    }
    public function qr()
    {
        return $this->hasOne(Qr::class, 'user_name');
    }
}
