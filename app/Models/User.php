<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'email',
        'nivel_id',
        'password',
        'tipo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function nivel(){//Alumno
        return $this->belongsTo('App\Models\Nivel');
    }

    // Usando la tabla pivot - tabla: examen_user
    public function examenes(){
        return $this->belongsToMany('App\Models\Examen')->withPivot('fecha_realizacion', 'num_respuestas_correctas');
    }

    public function materia(){ //Profesor
        return $this->hasOne('App\Models\Materia');
    }

    public function getNivel(){
        if($this->nivel_id)
            return $this->nivel->nombre;

        return "Sin curso asignado";
    }

    // public function getMateria(){
    //     if($this->)
    // }
   
}
