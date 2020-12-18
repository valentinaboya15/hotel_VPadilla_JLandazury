@extends('main')
@section('contenido')
<h1>LISTADO DE HABITACIONES</h1>
<div class="container">
    <div class ="row">
    @foreach($habitaciones as $p)
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img src='{{url("/img/$p->Foto")}}' class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> {{ $p->Tipo }} </h5>
                    <p class="card-text"> Numero Habitacion :  {{ $p->Numero }} </p>
                    <p class="card-text"> Descripcion :  {{ $p->Descripcion }} </p>
                    <p class="card-text"> Numero Camas :  {{ $p->Num_camas }} </p>
                    <p class="card-text"> Precio :  {{ $p->precio}} </p>
                    
                
                    <a href="#" class="btn btn-success"> Ver Detalles </a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection

