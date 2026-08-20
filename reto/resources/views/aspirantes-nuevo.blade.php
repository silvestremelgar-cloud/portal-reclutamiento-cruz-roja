@extends('layouts.base')
@section('contenido')
<section class="seccion">
    <div class="encabezado-seccion">
        <div>
            <h2>Registrar aspirante</h2>
            <p> Registra los datos de una persona que desea iniciar el proceso de incorporación a la Cruz Roja Boliviana Filial Guayaramerín. </p>
        </div>
        <a href="/aspirantes" class="boton-secundario"> Volver a aspirantes </a>
    </div>
</section>
<section class="seccion">
    @if ($errors->any())
        <div class="mensaje-error">
            <strong> No se pudo registrar el aspirante. </strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/aspirantes/nuevo" method="POST">
        @csrf
        <div>
            <label for="nombres"> Nombres </label>
            <input
                type="text"
                id="nombres"
                name="nombres"
                value="{{ old('nombres') }}"
                placeholder="Ejemplo: Mauro"
            >
        </div>
        <div>
            <label for="apellidos">
                Apellidos
            </label>
            <input
                type="text"
                id="apellidos"
                name="apellidos"
                value="{{ old('apellidos') }}"
                placeholder="Ejemplo: Melgar Coimbra"
            >
        </div>
        <div>
            <label for="correo">
                Correo electrónico
            </label>
            <input
                type="email"
                id="correo"
                name="correo"
                value="{{ old('correo') }}"
                placeholder="Ejemplo: correo@gmail.com"
            >
        </div>
        <div>
            <label for="telefono">
                Teléfono
            </label>
            <input
                type="text"
                id="telefono"
                name="telefono"
                value="{{ old('telefono') }}"
                placeholder="Ejemplo: 73951366"
            >
        </div>
        <div>
        <label>
            Temporada de inscripción
        </label>
        <p>
            Cupos disponibles: {{ 50 - \App\Models\Aspirante::count() }}
        </p>
        </div>
        <button type="submit" class="boton-principal">
            Registrar aspirante
        </button>
        <a href="/aspirantes" class="boton-secundario">
            Cancelar
        </a>
    </form>
</section>
@endsection