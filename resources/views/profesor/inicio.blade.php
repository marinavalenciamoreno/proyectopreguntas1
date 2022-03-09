@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row">
    <div class="col d-flex justify-content-between"><h2>Profesor: {{Auth::user()->name}} Curso: {{Auth::user()->getNivel()}} </h2></div>
    </div>
    @if(session()->get('success'))
        <div class="row">
            <div class="col alert alert-success">
                {{session()->get('success')}}
            </div>
        </div>
    @endif
<form action="{{url('/pregunta')}}" meth="post">
    <button class="btn btn-primary" type="submit">Crear pregunta</button>
</form>
<form action="{{url('/resultado')}}" meth="post">
    <div class="btn btn-primary">Resultado alumnos</div>
</form>
@endsection