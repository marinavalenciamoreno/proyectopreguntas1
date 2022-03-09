<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable=[
        'numero',
        'nombre'
    ];

    public function examens(){
        return $this->hasMany('App\Models\Examen');
    }


    public function materia(){
        return $this->belongsTo('App\Models\Materia');
    }

    public function preguntas(){
        return $this->hasMany('App\Models\Pregunta');
    }
}
