<?php
namespace App\Http\Controllers;

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
}