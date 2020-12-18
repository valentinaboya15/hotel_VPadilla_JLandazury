@extends('main')
@section('contenido')

<h1>CONSULTA D. NUMERO DE CAMAS POR TIPO DE HABITACION</h1>
<table class="table">
    <thead>
        <tr>
           
            <th scope="col">NUMERO DE CAMAS</th>
            <th scope="col">TIPO DE HABITACION </th>
        </tr>
    </thead>
    <tbody>
    @foreach($consulta2 as $c)
      
            <tr>
           
            <td> {{ $c->Num_camas }} </td>
            <td> {{ $c->Tipo }}</td>
            </tr>
        
    @endforeach
    </tbody>
    
</table>

  @stop