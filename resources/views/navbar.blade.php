<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">
  <a class="navbar-brand" href="/">Hotel La Rivera</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">Historia</a>
          <a class="dropdown-item" href="{{url('/hotel/mision')}}">Mision y Vision</a>
          <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Servicios </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/servicios/eventos/{$id}')}}">Eventos</a>
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Clientes </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/clientes/visualizar/cliente')}}">Visualizar</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('/reservas')}}" tabindex="-1" aria-disabled="true">Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ url('/facturacion/factura')}}" tabindex="-1" aria-disabled="true">Facturacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contactos')}}" tabindex="-1" role="button" aria-disabled="true">Contactos</a>
      </li>
    </ul>
   
  </div>
</nav>