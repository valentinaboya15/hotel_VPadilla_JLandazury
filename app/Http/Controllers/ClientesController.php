<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showClientes() {
        $cliente= DB::table('cliente')
        ->get();
        return view('clientes.visualizar.cliente',['cliente'=>$cliente]);
    }
}
