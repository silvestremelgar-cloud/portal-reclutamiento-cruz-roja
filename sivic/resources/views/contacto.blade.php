@extends('layouts.base')

@section('contenido')

<section class="seccion">

    <h2>Contacto</h2>

    <p>
        Para obtener información sobre el proceso de incorporación
        al voluntariado, puede comunicarse con la Cruz Roja
        Boliviana - Filial Guayaramerín.
    </p>

</section>


<section class="seccion">

    <h2>Información institucional</h2>

    <div class="tarjetas">

        <article class="tarjeta">

            <h3>
                Institución
            </h3>

            <p>
                Cruz Roja Boliviana
            </p>

            <p>
                Filial Guayaramerín
            </p>

        </article>


        <article class="tarjeta">

            <h3>
                Área relacionada
            </h3>

            <p>
                Coordinación de Voluntariado
            </p>

            <p>
                Área encargada de apoyar los procesos relacionados
                con la incorporación y participación de voluntarios.
            </p>

        </article>

    </div>

</section>


<section class="seccion">

    <h2>Proceso de incorporación</h2>

    <p>
        Las personas interesadas pueden iniciar su proceso
        proporcionando sus datos básicos como aspirantes.
    </p>

    <a href="/aspirantes/nuevo">
        Registrar aspirante
    </a>

</section>

@endsection