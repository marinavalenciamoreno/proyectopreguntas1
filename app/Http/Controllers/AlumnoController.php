<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function inicio(){
        // $examen = Auth::user()->examen;

        return view('alumno.inicio');
    }
}
