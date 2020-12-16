<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones() {
        
        return view('servicios.habitaciones');
    }

    public function getEventos($id) {
        
        
        return  "El Evento Nº: {$id}";
    }
}
