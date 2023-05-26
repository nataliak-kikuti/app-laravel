<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uc extends Model
{
    protected $fillable = ['name', 'code'];

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }
}

class Professor extends Model
{
    protected $fillable = ['name', 'email', 'password', 'uc_id'];

    public function uc()
    {
        return $this->belongsTo(Uc::class);
    }
}

