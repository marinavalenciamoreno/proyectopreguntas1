<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $fillable=[
        'tema_id',
        'nivel',
        'numPreguntas',
        'fecha_inicio',
        'fecha_fin'
    ];

    public function tema(){
        return $this->belongsTo('App\Models\Tema');
    }

    // Usando la tabla pivot - tabla: examen_user

    public function users(){
        return $this->belongsToMany('App\Models\User')->withPivot('fecha_realizacion', 'num_respuestas_correctas');
    }

    
}
