@extends('layouts.base')
@section('contenido')
    <p> Ferretería El Tornillo ofrece herramientas y productos para trabajos de construcción, reparación y mantenimiento del hogar. </p>
    <h2>Inventario de herramientas</h2>
    <p> Hay {{ count($herramientas) }} herramientas en el inventario. </p>
    @foreach ($herramientas as $herramienta)
        <div>
            <strong>{{ $herramienta->nombre }}</strong>
            - Bs {{ $herramienta->precio }}
        </div>
    @endforeach
    <p> Inventario atendido por Silvestre Mauricio Melgar Coimbra </p>
    <a href="/herramientas/nuevo"> Registrar nueva herramienta </a>
@endsection