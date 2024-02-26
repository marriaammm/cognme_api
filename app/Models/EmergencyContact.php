<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EmergencyContact extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'contact_name',
        'emergency_contact_number',
        'relation',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function qr()
    {
        return $this->hasOne(Qr::class, 'emergency_contact_number');
    }
}
