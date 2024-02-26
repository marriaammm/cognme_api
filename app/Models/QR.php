<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QR extends Model
{
    use HasFactory;
    protected $fillable = [
        'companion_num',
        'emergency_contact_number',
        'user_name', 
        'address_id',
        'medical_info'
    ];

    public function companion()
    {
        return $this->belongsTo(Companion::class, 'companion_num');
    }

    public function emergencyContact()
    {
        return $this->belongsTo(EmergencyContact::class, 'emergency_contact_number');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_name');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
