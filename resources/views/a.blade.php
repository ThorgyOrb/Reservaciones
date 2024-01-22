<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 20px;
    }

    .service {
      width: 600px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1);
      margin: 20px;
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
      background: linear-gradient(45deg, #ff5e00, #eba165, #e27a03);
      background-size: 400% 400%;
      animation: gradientAnimation 2s infinite;
    }
  @keyframes gradientAnimation {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
  .navbar {
    overflow: hidden;
    background-color: #333;
  }




    .service:hover {
      transform: scale(1.05);
    }


    .service-content {
      padding: 20px;
    }

    .service h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #ffffff;
      text-align: center;
    }

    .service p {
      font-size: 14px;
      color: #fffcfc;
    }
  </style>
</head>
<body>
    <div class="navbar">
      <a class="logo" href="">
        <img src="images/c.jpg" style="width:50px; height: 50px;">
      </a>
        <a href="/">Inicio</a>
        <a href="{{Route('aaa')}}" class="active">Servicios</a>
        <a href="{{Route('crear')}}" >Reservar</a>
        <a href="#">Contacto</a>
    </div>
    <br>
  <header>
    <h1>Nuestros Servicios</h1>
  </header>
  
  <body>

    <div class="container">
      <div class="service">
        <img src="/images/a.jpg" alt="Servicio 1" style="max-width: 50%; margin: auto; display: block;" class="img-round"  width="300" height="230">
        <div class="service-content">
          <h3>Servicio 1</h3>
          <p>Descripción del servicio 1. bkjasdb kjasb dkjsabdkjasbdk jasdb kajsbdkjabsdkjabsdoe  ioahdoiashdo  oishdoaisdhlasd goigeshfldf sdokaihsdo d oiashdoisa dosahid</p>
        </div>
      </div>
  
      <div class="service">
        <img src="/images/b.jpg" alt="Servicio 2" style="max-width: 50%; margin: auto; display: block;" width="300" height="230">
        <div class="service-content">
          <h3>Servicio 2</h3>
          <p>Descripción del servicio 2.</p>
        </div>
      </div>

      <div class="service">
        <img src="/images/c.jpg" alt="Servicio 3" style="max-width: 50%; margin: auto; display: block;"  width="300" height="230">
        <div class="service-content">
          <h3>Servicio 3</h3>
          <p>Descripción del servicio 3.</p>
        </div>
      </div>
  
  
      <!-- Agrega más bloques de servicio según sea necesario -->
  
    </div>
  
  </body>

  <footer>
    <!-- Puedes agregar información adicional o enlaces de contacto en el pie de página -->
    <p>Contacto: info@barberiaxyz.com</p>
  </footer>
  </html>