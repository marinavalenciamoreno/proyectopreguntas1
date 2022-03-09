@extends('layouts.master')

@section('content')

<form action="" method="POST">
    @csrf
  <div class="form-group row" >
    <input type="hidden" name="materia_id" value="{{$materia->id}}">
    <label for="staticEmail" class="col-sm-2 col-form-label">Materia:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" value="{{$materia->nombre}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Número de tema:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="numero" value="{{old('numero')}}">
    @if($errors->get('numero'))
    <div class="alet alert-danger">{{$errors->first('numero')}}</div>
    @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre de tema:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
      @if($errors->get('nombre'))
         <div class="alet alert-danger">{{$errors->first('nombre')}}</div>
     @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Crear tema</button>
</form>


@endsection