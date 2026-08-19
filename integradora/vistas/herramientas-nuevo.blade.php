@extends('layouts.base')
@section('contenido')
    <h2>Registrar herramienta</h2>
    @if ($errors->any())
        <div>
            <strong>Hay errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/herramientas/nuevo" method="POST">
        @csrf
        <div>
            <label for="nombre">
                Nombre de la herramienta
            </label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="precio"> Precio en Bs </label>
            <input type="number" id="precio" name="precio">
        </div>
        <button type="submit"> Registrar herramienta</button>
    </form>
@endsection