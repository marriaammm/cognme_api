<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'companion_num', 'companion_name', 'relationship'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function qr()
    {
        return $this->hasOne(Qr::class, 'companion_num');
    }
}
