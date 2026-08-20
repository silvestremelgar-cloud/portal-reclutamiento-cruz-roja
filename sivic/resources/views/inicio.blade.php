@extends('layouts.base')

@section('contenido')

<section class="hero">

    <h2>
        Sistema de Incorporación y Vinculación Institucional
    </h2>

    <p class="hero-texto">
        SIVIC es una propuesta de sistema web orientada a apoyar
        a la Cruz Roja Boliviana - Filial Guayaramerín en la
        organización y seguimiento del proceso de incorporación
        de nuevos aspirantes al voluntariado.
    </p>

    <a href="/aspirantes" class="boton-principal">
        Ver aspirantes
    </a>

</section>


<section class="seccion">

    <h2>
        ¿Qué problema busca resolver?
    </h2>

    <p>
        Los procesos de incorporación pueden depender de registros
        manuales, documentos, hojas de cálculo o información
        distribuida en diferentes medios.
    </p>

    <p>
        Esta situación puede dificultar la organización, el
        seguimiento y la consulta de la información de las personas
        que desean incorporarse al voluntariado.
    </p>

</section>


<section class="seccion">

    <h2>
        ¿Qué permite hacer actualmente?
    </h2>

    <div class="tarjetas">

        <article class="tarjeta">

            <h3>
                Registrar aspirantes
            </h3>

            <p>
                Permite registrar los datos básicos de personas
                que se encuentran en el proceso de incorporación.
            </p>

        </article>


        <article class="tarjeta">

            <h3>
                Consultar información
            </h3>

            <p>
                Los registros almacenados pueden ser consultados
                posteriormente desde una lista de aspirantes.
            </p>

        </article>


        <article class="tarjeta">

            <h3>
                Mantener información centralizada
            </h3>

            <p>
                La información registrada se almacena en una base
                de datos para evitar depender únicamente de registros
                manuales.
            </p>

        </article>

    </div>

</section>


<section class="seccion futuro">

    <h2>
        Proyección de SIVIC
    </h2>

    <p>
        Esta primera versión representa una base para continuar
        desarrollando el sistema y posteriormente incorporar otros
        procesos relacionados con el voluntariado.
    </p>

    <p>
        Entre las funcionalidades proyectadas se encuentran la
        gestión de voluntarios, capacitaciones, asistencia,
        certificados, actividades, participación, notificaciones
        y reportes.
    </p>

</section>

@endsection