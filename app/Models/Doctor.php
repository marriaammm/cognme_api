<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'doctor_name',
        'specialization',
        'contact_num',
        'prescription',
        'address_id',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
