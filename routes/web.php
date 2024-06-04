<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;



Route::get("/",[PizzaController::class,"Listar"]);

Route::get('/pizza', function () {
    return view('crearPizza');
});

Route::post('/pizza', [PizzaController::class, 'Crear']);

Route::get('/eliminar/{d}', [PizzaController::class, 'Eliminar']);

Route::get('/modificar/{d}', [PizzaController::class, 'MostrarFormularioDeModificar']);
Route::post('/modificar', [PizzaController::class, 'Modificar']);
