<html>
<head>
  <link href=https://cdn.syncfusion.com/ej2/material.css rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
 
</head>
<div class="navbar">
    <a class="logo" href="">
        <img src="../images/c.jpg" style="width:50px; height: 50px;">
      </a>
    <a href="/">Inicio</a>
    <a href="{{Route('aaa')}}">Servicios</a>
    <a href="{{Route('crear')}}" class="active">Reservar</a>
    <a href="#">Contacto</a>
</div>
    <div class="container">
        <br>
        <header>
            <h1>Lista de Reservas</h1>
          </header>
        <br>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Servicio</th>
                    <th>Prueba</th>
                    <!-- Agregar más columnas según sea necesario -->
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->nombre }}</td>
                        <td>{{ $reserva->fecha_inicio }}</td>
                        <td>{{ $reserva->fecha_fin }}</td>
                        <td>{{ $reserva->telefono }}</td>
                        <td>{{ $reserva->email }}</td>
                        <td>{{ $reserva->servicio }}</td>
                        @if($reserva->servicio == 'Corte de cabello')
                <td>{{ $reserva->servicio }}</td>
            @endif
                        <!-- Agregar más columnas según sea necesario -->
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <footer>
        <br>
        <!-- Puedes agregar información adicional o enlaces de contacto en el pie de página -->
        <p>Contacto: info@barberiaxyz.com</p>
      </footer>