<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['name', 'email', 'password', 'uc_id'];

    public function uc()
    {
        return $this->belongsTo(Uc::class);
    }

    public function availability()
    {
        return $this->hasMany(Availability::class);
    }
}
