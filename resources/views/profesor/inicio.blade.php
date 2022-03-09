@extends('layouts.master')

@section('content')
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