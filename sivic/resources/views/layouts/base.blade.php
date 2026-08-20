<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIVIC - Cruz Roja Boliviana Filial Guayaramerín</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <header>
        <div class="encabezado">
            <h1>SIVIC</h1>
            <p> Sistema de Incorporación y Vinculación Institucional</p>
            <p> Cruz Roja Boliviana - Filial Guayaramerín</p>
        </div>
    </header>
    <nav>
        <div class="navegacion">
            <a href="/">Inicio</a>
            <a href="/aspirantes">Aspirantes</a>
            <a href="/contacto">Contacto</a>
                    @auth
            <form action="/logout" method="POST" style="display:inline;">
                @csrf
                <button type="submit">
                    Cerrar sesión
                </button>
            </form>
        @else
            <a href="/login">
                Iniciar sesión
            </a>
        @endauth
        </div>
    </nav>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <p> SIVIC - Sistema de Incorporación y Vinculación Institucional</p>
        <p> Cruz Roja Boliviana - Filial Guayaramerín</p>
        <p> Desarrollado por Silvestre Mauricio Melgar Coimbra</p>
    </footer>
</body>
</html>