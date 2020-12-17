<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FacturacionController;
use App\Http\Controllers\ReservasController;


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
//seccion hotel
Route::get('/', [HotelController::class, 'getindex']);

Route::get('hotel/historia', [HotelController::class, 'showHistoria']);

Route::get('hotel/mision', [HotelController::class, 'showMision']);

Route::get('hotel/ubicacion', [HotelController::class, 'showUbicacion']);

Route::get('contactos', [HotelController::class, 'showContactos']);


//seccion Habitaciones

Route::get('servicios/habitaciones', [HabitacionesController::class, 'showHabitaciones']);

Route::get('servicios/eventos/{id}', [HabitacionesController::class, 'getEventos']);
//seccion clientes

Route::get('clientes/visualizar/cliente', [ClientesController::class, 'showClientes']);

//seccion facturacion

Route::get('facturacion/factura', [FacturacionController::class, 'getFactura']);

//seccion reservas

Route::get('reservas', [ReservasController::class, 'getReservas']);  