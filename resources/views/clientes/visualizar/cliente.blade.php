@extends('main')
@section('contenido')
<h1>LISTADO DE CLIENTES</h1>
<div class="container">
    <div class ="row">
    @foreach($cliente as $c)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                <img src='{{url("/img/$c->foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> {{ $c->nombres }} </h5>
                    <p class="card-text"> DNI:  {{ $c->DNI }} </p>
                    <p class="card-text"> Genero :  {{ $c->genero }} </p>
                    <p class="card-text"> Domicilio :  {{ $c->Domicilio }} </p>
                    <p class="card-text"> Telefono :  {{ $c->telefono }} </p>
                    
                    
                
                    <a href="#" class="btn btn-success"> Ver Detalles </a>
                </div>
            </div>
        </div>
    @endforeach



@endsection