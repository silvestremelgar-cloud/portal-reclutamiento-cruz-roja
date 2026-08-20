@extends('layouts.base')
@section('contenido')
<section class="seccion">
    <div class="encabezado-seccion">
        <div>
            <h2>Aspirantes SIVIC</h2>
            <p> Personas registradas en LA incorporación de la Cruz Roja Boliviana Filial Guayaramerín. </p>
        </div>
        <a href="/aspirantes/nuevo" class="boton-principal"> Registrar aspirante</a>
    </div>
</section>
<section class="seccion">
    <h2>Lista de aspirantes</h2>
    @if ($aspirantes->count() > 0)
        <p> Hay <strong>{{ $aspirantes->count() }}</strong> aspirante(s) registrado(s). </p>
        <div class="lista-aspirantes">
            @foreach ($aspirantes as $aspirante)
                <article class="tarjeta-aspirante">
                    <h3> {{ $aspirante->nombres }} {{ $aspirante->apellidos }} </h3>
                    <p> <strong>Correo:</strong> {{ $aspirante->correo }} </p>
                    <p> <strong>Teléfono:</strong> {{ $aspirante->telefono }}</p>
                </article>
            @endforeach
        </div>
    @else
        <div class="mensaje-vacio">
            <p> Todavía no hay aspirantes registrados. </p>
            <a href="/aspirantes/nuevo"> Registrar el primer aspirante </a>
        </div>
    @endif
</section>
@endsection