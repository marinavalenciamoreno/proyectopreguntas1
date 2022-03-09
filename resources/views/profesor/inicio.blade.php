@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
    <div class="col d-flex justify-content-between"><h2>Profesor: {{Auth::user()->name}} Curso: {{Auth::user()->getNivel()}} </h2></div>
    </div>


<form action="{{url('/pregunta')}}" meth="post">
    <div class="btn btn-primary">Crear preguntas</div>
</form>
<form action="{{url('/exanen')}}" meth="post">
    <div class="btn btn-primary">Crear examen</div>
</form>
<form action="{{url('/resultado')}}" meth="post">
    <div class="btn btn-primary">Resultado alumnos</div>
</form>
<form action="{{url('/exanen')}}" meth="post">
    <div class="btn btn-primary">Crear temas</div>
</form>
@endsection