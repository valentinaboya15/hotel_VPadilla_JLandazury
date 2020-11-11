<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //ruta que dirije pantalla principal
    return view('main');
});


Route::get('hotel/historia', function () {
    
    return view('hotel.historia');
});


Route::get('hotel/mision-vision', function () {
    
    return view('hotel.mision-vision');
});


Route::get('hotel/ubicacion', function () {
    
    return view('hotel.ubicacion');
});

Route::get('servicios/habitaciones', function () {
    
    return view('servicios.habitaciones');
});


Route::get('servicios/eventos/{id}', function ($id) {
    
    
    return  "El Evento Nº: {$id}";
});

Route::get('reservas', function () {
    
    return view('reservas');
});

Route::get('contactos', function () {
    
    return view('contactos');
});

