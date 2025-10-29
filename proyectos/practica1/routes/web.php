<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// RUTA DE LAS NUEVAS VISTAS desde views 
Route::get('/perfil', function () {
    return view('pages.perfil');
});

//Agrupacion de rutas

//Todas las rutas bajo ese controller pertenecen al HomeController
Route::controller(HomeController::class)->group(function(){

    Route::get('/inicio', 'index')->name('home');
    Route::get('/msg/{nombre}', 'msg')->name('msg');
    Route::get('/form', 'mostrarForm')->name('form');
    //El name('') es el action que recibe el form
    Route::post('/form-recibir', 'recibirForm')->name('datos');

});