<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::get('/hola-mundo', function () {
    return view('hola');
});

// Al principio de routes/web.php (si no está ya)
use App\Http\Controllers\ContactoController;

// ... tus otras rutas ...

// Rutas del Commit 3
Route::get('/formulario-contacto', [ContactoController::class, 'formularioContacto']);
Route::post('/recibe-formulario', [ContactoController::class, 'recibeFormulario']);