<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function showHabitaciones() {
        $habitaciones= DB::table('habitacion as hab')
        ->join('precios as pre', 'hab.precio_id', '=', 'pre.id')
        ->select('hab.Foto','pre.Tipo','hab.Numero','hab.Descripcion','hab.Num_camas','pre.precio')
        ->get();

        return view('servicios.habitaciones',['habitaciones'=>$habitaciones]);
    }

    public function getEventos($id) {
        
        
        return  "El Evento Nº: {$id}";
    }
}
