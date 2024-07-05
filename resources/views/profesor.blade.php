@extends('layouts.app')
@section('content')
  <h1>Crear Profesor</h1>
    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

@endsection