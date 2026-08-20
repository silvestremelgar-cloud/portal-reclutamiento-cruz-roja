@extends('layouts.base')
@section('contenido')
<section class="seccion">
    <h2>Iniciar sesión</h2>
    <p> Ingresa tus datos para acceder al sistema SIVIC. </p>
    @if ($errors->any())
        <div class="mensaje-error">
            {{ $errors->first() }}
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Correo electrónico</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="correo@sivic.com"
            >
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Contraseña"
            >
        </div>
        <button type="submit" class="boton-principal">
            Ingresar
        </button>
    </form>
</section>
@endsection