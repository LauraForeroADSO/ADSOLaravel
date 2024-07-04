@extends('layouts.app')

@section('title', 'Crear registro')

@section('content')

<br>
    <h3>Crear un nuevo registro</h3>
    <form action="/registros" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del visitante</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido del visitante</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
          <div class="mb-3">
            <label for="documento" class="form-label">Documento de identidad</label>
            <input type="text" class="form-control" id="documento" name="documento">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numero de identidad</label>
            <input type="number" class="form-control" id="numero" name="numero">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
