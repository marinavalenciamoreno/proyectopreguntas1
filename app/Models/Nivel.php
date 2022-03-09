<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function users(){//Alumno
        return $this->belongsToMany('App\Models\User');
    }
}
