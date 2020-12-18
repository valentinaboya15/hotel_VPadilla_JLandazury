@extends('main')
@section('contenido')
<h1>CONSULTA C. CLIENTES HABITACION 1 Y 2</h1>
<table class="table">
    <thead>
        <tr>
           
            <th scope="col">NOMBRES DEL CLIENTE</th>
            <th scope="col">NUMERO DE HABITACION </th>
        </tr>
    </thead>
    <tbody>
    @foreach($consulta as $c)
      
            <tr>
           
            <td> {{ $c->nombres }} </td>
            <td> {{ $c->Numero }}</td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>


  @stop