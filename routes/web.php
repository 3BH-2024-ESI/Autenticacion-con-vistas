<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;

Route::get('/login', function () { return view('login'); });
Route::post('/login',[UserController::class,"Login"]);

Route::middleware(Autenticacion::class ) -> group(function(){
    Route::get('/logout',[UserController::class,"Logout"]);
    Route::get("/",[PizzaController::class,"Listar"]);
    Route::get('/pizza', function () { return view('crearPizza'); });
    Route::post('/pizza', [PizzaController::class, 'Crear']);
    Route::get('/eliminar/{d}', [PizzaController::class, 'Eliminar']);
    Route::get('/modificar/{d}', [PizzaController::class, 'MostrarFormularioDeModificar']);
    Route::post('/modificar', [PizzaController::class, 'Modificar']);
});
