<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TemaRequest;
use App\Http\Requests\PreguntaRequest;
use App\Models\Tema;
use App\Models\Pregunta;

class ProfesorController extends Controller
{
    
    public function inicio(){
        return view('profesor.inicio');
    }

    public function resultado(){
        $alumnos = User::all();
        return view('profesor.inicio');
    }

    public function creartema(){
        $materia = Auth::user()->materia;

        return view('profesor.tema', compact('materia'));
    }

    public function generartema(TemaRequest $request){
        $tema= Tema::create(
            $request->all()
        );
        $tema->save();
        // $temas = Auth::user()->

        return redirect('profesor')-> with('success', 'Tema creado con éxito');
    }

    public function pregunta(){
        $temas = Auth::user()->materia->tema;

        return view('profesor.pregunta', compact('temas'));
    }

    public function crearpregunta(PreguntaRequest $request){
        
        $request['correcta']=$request->respuesta4;
        
        $pregunta = Pregunta::create($request->all());

        return redirect('profesor')-> with('success', 'Pregunta creada con éxito');
    }

}
