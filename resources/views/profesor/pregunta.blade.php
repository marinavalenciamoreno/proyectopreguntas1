@extends('layouts.master')

@section('content')

<h2>Materia: {{Auth::user()->materia->nombre}}</h2>

<form action="" method="post">
    @csrf
<div class="form-group">
    <label for="exampleFormControlSelect1">Seleccione tema</label>
    <select class="form-control" name="tema_id">
        @foreach($temas as $tema)
            <option value='{{$tema->id}}'>{{$tema->numero}} - {{$tema->nombre}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccione dificultad</label>
    <select class="form-control" name="nivel">
        <option value="">...</option>
        <option value="basico">Básico</option>
        <option value='medio'>Medio</option>
        <option value='avanzado'>Avanzado</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enunciado</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" name="enunciado" value="{{old('enunciado')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Respuesta 1</label>
    <input type="text" class="form-control" name="respuesta1" value="{{old('respuesta1')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Respuesta 2</label>
    <input type="text" class="form-control" name="respuesta2" value="{{old('respuesta2')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Respuesta 3</label>
    <input type="text" class="form-control" name="respuesta3" value="{{old('respuesta3')}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Respuesta 4 (correcta)</label>
    <input type="text" class="form-control" name="respuesta4" value="{{old('respuesta4')}}">
  </div>
  @if ($errors->any())
  <ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
  <button type="submit" class="btn btn-primary">crear</button>
</form>

@endsection