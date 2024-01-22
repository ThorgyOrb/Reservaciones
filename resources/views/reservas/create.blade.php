<!-- resources/views/reservas/create.blade.php -->

<html>
<head>
  <link href=https://cdn.syncfusion.com/ej2/material.css rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

 <!-- Agrega jQuery y jQuery UI -->
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

 <!-- Agrega jQuery Timepicker -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
  <style>
 

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  /*height: 80vh;*/

}

.reserva-form {
  width: 300px; /* ajusta el ancho según sea necesario */
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

#datepicker {
      width: 250px;
      margin: 50px auto;
    }

    #datepicker {
      width: 250px;
      margin: 20px auto;
    }

    #timepicker {
      width: 100px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <a class="logo" href="">
        <img src="../images/c.jpg" style="width:50px; height: 50px;">
      </a>
    <a href="/">Inicio</a>
    <a href="{{Route('aaa')}}">Servicios</a>
    <a href="{{Route('crear')}}" class="active">Reservar</a>
    <a href="#">Contacto</a>
</div>

      <br>
      
        <div class="row">
        <header>
          <h1>Crear Reserva</h1>
        </header>
        </div>
        <br>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
       
        @endif

        <div class="container">
          <div class="row">
    <form action="{{ url('/reservas') }}" method="post" class="reserva-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
        </div>
      
        <label for="Fecha">Fecha:</label>
        <div id="datepicker" style="margin-right: 40px"></div>
         
    
      <input type="hidden" name="fecha_inicio" class="form-control" required id="fechaSeleccionada" >   

      <div class="form-group">
        <label for="Hora">Hora:</label>  
        <select id="timepicker" name="fecha_fin"></select>
      </div>
        <br>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" required placeholder="Telefono" pattern="[0-9]{10}">
        </div>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="text" name="email" class="form-control" required placeholder="Correo">
        </div>

        <div class="from-group">
            <label for="servicio">Servicio:</label>
            <select name="servicio" class="form-control" required>
                <option selected="true" disabled="disabled">Seleccione el servicio</option>
                <option value="Corte de cabello">Corte de cabello</option>
                <option value="Afeitado de barba">Afeitado de barba</option>
                <option value="Corte de cabello y afeitado de barba">Corte de cabello y afeitado de barba</option>
            </select>
        </div>
        
  
        <button type="submit" class="btn btn-primary">Guardar Reserva</button>
    </form>
          </div>
        </div>

<script>
  $(document).ready(function () {
    // Configura el Datepicker
    $("#datepicker").datepicker({
      beforeShowDay: function (date) {
        // Bloquea los días específicos (formato: [año, mes - 1, día])
        var blockedDates = [
          [2024, 0, 10], // Año, mes (0-11), día
          [2024, 0, 15],
          [2024, 0, 20],
          [2, 18, 2024],
          [02, 18, 2024]
          // Agrega más fechas según sea necesario
        ];

        var stringDate = $.datepicker.formatDate('yy-mm-dd', date);

        // Convierte la fecha a un formato comparable
        var currentDate = new Date(stringDate);

        for (var i = 0; i < blockedDates.length; i++) {
          var blockedDate = new Date(blockedDates[i][0], blockedDates[i][1], blockedDates[i][2]);

          // Compara las fechas
          if (currentDate.getTime() === blockedDate.getTime()) {
            return [false, 'blocked-date', 'Día bloqueado'];
          }
        }

        // Permite todas las demás fechas
        return [true, '', ''];
      },
      onSelect: function (dateText, inst) {
      // Captura la fecha seleccionada y asigna al campo oculto
      $("#fechaSeleccionada").val(dateText);
    }
    });

    // Configura el selector de hora
    var select = $('#timepicker');
    for (var hour = 11; hour <= 20; hour++) {
      var displayHour = (hour % 12 === 0) ? 12 : hour % 12;
      var amPm = (hour < 12) ? 'AM' : 'PM';
      var optionText = displayHour + ':00 ' + amPm;
      select.append('<option value="' + hour + '">' + optionText + '</option>');
    }
  });
</script>
<br>
</body>

<div class="row">
  <br>
  <footer>
    <br>
  <!-- Puedes agregar información adicional o enlaces de contacto en el pie de página -->
  <p>Contacto: info@barberiaxyz.com</p>
</footer>
</div>

</html>
<!-- Agrega jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Agrega jQuery UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
