<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;



Route::get("/",[PizzaController::class,"Listar"]);

Route::get('/pizza', function () {
    return view('crearPizza');
});

Route::post('/pizza', [PizzaController::class, 'Crear']);

