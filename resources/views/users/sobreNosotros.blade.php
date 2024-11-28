@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nosotros</title>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <style>
    /* Estilos generales */
    .about-us-container {
        background-color: #95604e;
        padding-bottom: 40px; /* Asegura que haya suficiente espacio debajo de la sección */
    }
  
    body {
      margin: 0;
      padding: 0;
      font-family: "Raleway", sans-serif;
      background-color: #FFF4E1; /* Color de fondo cálido */
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Asegura que el pie de página se quede abajo */
    }
    /* Sección Hero (principal) */
    .hero {
      background-image: url('https://source.unsplash.com/1600x900/?tropical,beach'); /* Imagen tropical */
      background-size: cover;
      background-position: center;
      color: white;
      height: 100vh; /* Ocupa toda la pantalla */
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
    }
    .hero h1 {
      font-size: 60px;
      font-family: 'Playfair Display', serif;
      font-weight: bold;
      letter-spacing: 5px;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
      margin: 0;
    }
    .hero p {
      font-size: 20px;
      font-weight: 400;
      margin-top: 20px;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    /* Botón para explorar */
    .explore-btn {
      background-color: #FF7043; /* Naranja exótico */
      color: white;
      padding: 15px 30px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 30px;
      transition: background-color 0.3s ease;
    }
    .explore-btn:hover {
      background-color: #FF5722; /* Efecto hover */
    }
    /* Footer */
    footer {
      background-color: #FF7043;
      color: white;
      text-align: center;
      padding: 30px;
      font-size: 16px;
      margin-top: auto; /* Asegura que el pie de página quede pegado al final */
    }
    footer p {
      margin: 0;
    }
    /* Estilos para Misión y Visión */
    .mission-vision {
      display: flex;
      justify-content: center; /* Centra las dos secciones */
      align-items: flex-start; /* Alinea las secciones al principio */
      margin-top: 40px;
      gap: 20px; /* Espacio entre las dos secciones */
      padding: 0 20px;
    }
    .mission, .vision {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 48%; /* Asegura que las secciones ocupen el 48% del contenedor */
      min-width: 300px; /* Asegura que las secciones tengan un ancho mínimo */
      box-sizing: border-box;
    }
    .mission h2, .vision h2 {
      font-size: 1.5em;
      color: #333;
      margin-bottom: 10px;
    }
    .mission p, .vision p {
      font-size: 1.1em;
      color: #555;
    }
    .mission {
      background-color: #f9f3ec; /* Fondo de color crema para la misión */
      border-left: 6px solid #b38a7a; /* Borde izquierdo con color acorde */
    }
    .vision {
      background-color: #e1f2f4; /* Fondo de color azul claro para la visión */
      border-left: 6px solid #00796b; /* Borde izquierdo con un tono verde */
    }
    /* Estilos para el texto introductorio */
    .about-us-intro {
      text-align: center; /* Centra el texto */
      padding: 40px 20px;
    }
    .about-us-intro h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }
    .about-us-intro p {
      font-size: 1.2em;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      color: #555;
    }
    /* Responsividad */
    @media (max-width: 768px) {
      .mission-vision {
        flex-direction: column;
        gap: 30px; /* Más espacio en pantallas pequeñas */
        align-items: center;
      }
      .mission, .vision {
        width: 80%; /* Más ancho en pantallas pequeñas */
      }
    }
  </style>
</head>
<body>
<div class="about-us-container">
    <section class="about-us-intro">
        <div class="container">
            <h1>Sobre Nosotros</h1>
            <p>Bienvenido a [Nombre de la Empresa]. Somos una organización dedicada a ofrecer los mejores servicios en el área de [tu sector o especialización]. Nuestra misión es brindar soluciones innovadoras para satisfacer las necesidades de nuestros clientes.</p>
        </div>
    </section>

    <section class="mission-vision">
        <div class="container">
            <div class="mission">
                <h2>Misión</h2>
                <p>En [Nombre de la Empresa], nuestra misión es proporcionar servicios de alta calidad en [sector de la empresa], siempre enfocados en la satisfacción del cliente, la innovación y la mejora continua.</p>
            </div>
            <div class="vision">
                <h2>Visión</h2>
                <p>Aspiramos a ser la empresa líder en [sector de la empresa], destacándonos por nuestra calidad, compromiso social y el impacto positivo que generamos en la comunidad y el medio ambiente.</p>
            </div>
        </div>
    </section>

    <!-- Botón para explorar destinos (nuevo) -->
    <section class="explore-section">
        <div class="container" style="text-align: center; margin-top: 40px;">
            <a href="{{ route('planesTuristicos') }}" class="explore-btn">Descubre los destinos más exóticos y paradisíacos del mundo. Escápate a la aventura de tu vida</a>
        </div>
    </section>

</div>

</body>
</html>

@endsection
