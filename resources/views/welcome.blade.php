<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>     
       
       <style>
    
        </style>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>
   
    
    <body>
   
        <div class="navbar">
          <a class="logo" href="">
            <img src="images/c.jpg" style="width:50px; height: 50px;">
          </a>
            <a href="#" class="active">Inicio</a>
            <a href="{{Route('aaa')}}">Servicios</a>
            <a href="{{Route('crear')}}">Reservar</a>
            <a href="#">Contacto</a>
        
      </div>
          <br>
          <header>
            <h1>Barbería XYZ</h1>
          </header>
        
         

          
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/a.jpg" alt="Los Angeles" style="width:1900px; height: 400px;">
      </div>

      <div class="item">
        <img src="images/b.jpg" alt="Chicago" style="width:1900px; height: 400px;">
      </div>
    
      <div class="item">
        <img src="images/c.jpg" alt="New york" style="width:1900px; height: 400px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



    <!-- Contenido de la página -->
    <div class="container mt-4">
        <h2>Bienvenido a Barbería XYZ</h2>
        <p>Ofrecemos servicios de calidad para un estilo de vida moderno.</p>
        <!-- Agregar más contenido según sea necesario -->
    </div>

    <!-- Enlace al archivo JavaScript de Bootstrap (asegúrate de tenerlo instalado) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        
          <footer>
            <!-- Puedes agregar información adicional o enlaces de contacto en el pie de página -->
            <p>Contacto: info@barberiaxyz.com</p>
          </footer>
        
          
     
     
    </body>
</html>
