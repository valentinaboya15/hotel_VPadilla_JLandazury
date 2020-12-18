<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function getindex() {
        
        return view('home');
    }
    
    public function showHistoria() { 
        
        return view('hotel.historia');
    }
    
    public function showMision() {
        
        return view('hotel.mision-vision');
    }
    
    public function showUbicacion() {
        
        return view('hotel.ubicacion');
    }
    
  public function showContactos() {
        
        return view('contactos');
    }

    public function getConsulta() {
        $consulta= DB::table('cliente as cli')
        ->join('factura as fac', 'cli.id', '=', 'fac.clientes')
        ->select('cli.nombres','fac.Numero')
        ->where('cli.id','=','1')
        ->orwhere('cli.id','=','2')
        
        ->get();
        return view('resultado.consulta',['consulta' => $consulta] );

        $consulta2= DB::table('Habitaciones as hab')
        ->join('precio as pre', 'hab.precio_id', '=', 'pre.id')
        ->select('hab.Num_camas','pre.Tipo')
        
        ->get();
        return view('resultado.consulta2',['consulta2' => $consulta2] );

        
    }

    public function getConsulta2() {
  

        $consulta2= DB::table('Habitacion as hab')
        ->join('precios as pre', 'hab.precio_id', '=', 'pre.id')
        ->select('hab.Num_camas','pre.Tipo')
        
        ->get();
        return view('resultado.consulta2',['consulta2' => $consulta2] );

    }
    
   
}