<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herramienta;
use App\Models\Aspirante;
use App\Http\Controllers\AuthController;


// INICIO

Route::get('/', function () {
    return view('inicio');
});


// CONTACTO

Route::get('/contacto', function () {
    return view('contacto');
});


// HERRAMIENTAS

Route::get('/herramientas', function () {

    $herramientas = Herramienta::all();

    return view('herramientas', compact('herramientas'));
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas-nuevo');
});

Route::post('/herramientas/nuevo', function () {

    request()->validate(
        [
            'nombre' => 'required',
            'precio' => 'required|integer'
        ],
        [
            'nombre.required' => 'Escribí el nombre de la herramienta.',
            'precio.required' => 'Escribí el precio de la herramienta.',
            'precio.integer' => 'El precio se anota solo con cifras.'
        ]
    );

    Herramienta::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio')
    ]);

    return redirect('/herramientas');
});


// LOGIN

Route::get('/login', [AuthController::class, 'mostrarLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);


// ASPIRANTES PROTEGIDOS

Route::middleware('auth')->group(function () {

    Route::get('/aspirantes', function () {

        $aspirantes = Aspirante::all();

        return view('aspirantes', compact('aspirantes'));

    });

    Route::get('/aspirantes/nuevo', function () {

        return view('aspirantes-nuevo');

    });

    Route::post('/aspirantes/nuevo', function () {

    $cuposTotales = 50;
    $inscritos = Aspirante::count();
    $cuposDisponibles = $cuposTotales - $inscritos;

    if ($cuposDisponibles <= 0) {
        return back()->withErrors([
            'stock' => 'La temporada de inscripción ya no tiene cupos disponibles.'
        ])->withInput();
    }

    request()->validate(
        [
            'nombres' => 'required',
            'apellidos' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required'
        ],
        [
            'nombres.required' => 'Escribí los nombres del aspirante.',
            'apellidos.required' => 'Escribí los apellidos del aspirante.',
            'correo.required' => 'Escribí el correo electrónico.',
            'correo.email' => 'El correo electrónico no tiene un formato válido.',
            'telefono.required' => 'Escribí el número de teléfono.'
        ]
    );

    Aspirante::create([
        'nombres' => request()->input('nombres'),
        'apellidos' => request()->input('apellidos'),
        'correo' => request()->input('correo'),
        'telefono' => request()->input('telefono'),
        'stock' => $cuposDisponibles - 1
    ]);

    return redirect('/aspirantes');
});

});