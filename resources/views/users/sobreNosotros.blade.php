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

    body{
      padding-top: 68px;
    }

    .hero {
      background-image: url('{{ asset('images/sobren.jpg') }}');
      background-size: cover;
      background-position: center;
      height: 80vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      color: #333;
    }

    .hero div {
      padding-left: 700px;
    }

    .hero h1 {
      font-size: 60px;
      font-weight: bold;
      letter-spacing: 5px;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
      margin: 0;
    }

    .hero p {
      font-size: 20px;
      font-weight: 400;
      margin-top: 20px;
      margin-bottom: 20px;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .boton-explorar {
      background-color: #274c77;
      color: white;
      padding: 15px 30px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 30px;
      transition: background-color 0.3s ease;
    }

    .boton-explorar:hover {
      background-color: #1a375d;
    }

    .mision-vision {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
      padding: 0 20px;
      flex-wrap: wrap;
      margin-bottom: 20px; 
    }

    .mision, .vision {
      flex: 1;
      max-width: 48%;
      box-sizing: border-box;
      min-width: 300px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .mision h2, .vision h2 {
      font-size: 1.5em;
      color: #333;
      margin-bottom: 10px;
    }

    .mision p, .vision p {
      font-size: 1.1em;
      color: #555;
    }

    .mision {
      background-color: #e1f2f4;
      border-left: 6px solid #00796b;
    }

    .vision {
      background-color: #e1f2f4;
      border-left: 6px solid #00796b;
    }

    .historia-container {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      margin: 20px;
      gap: 20px;
      flex-wrap: wrap;
    }

    .historia-texto {
      flex: 1;
      max-width: 60%;
      padding: 20px;
      background-color: #e1f2f4;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .historia-texto h3 {
      font-size: 1.8em;
      color: #333;
      margin-bottom: 15px;
    }

    .historia-texto p {
      font-size: 1.1em;
      color: #333;
    }

    .historia-imagen {
      flex: 1;
      max-width: 60%;
    }

    .historia-imagen img {
      width: 100%;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 1);
    }

    @media (max-width: 768px) {
      .historia-container {
        flex-direction: column;
        text-align: center;
      }
      .historia-texto, .historia-imagen {
        max-width: 90%;
      }
    }
  </style>
</head>
<body>

  <section class="hero">
    <div>
      <h1>Sobre Nosotros</h1>
      <p>Redefinimos las vacaciones, ofreciéndote destinos exclusivos con experiencias únicas.</p>
      <a href="{{ route('planesTuristicos') }}" class="boton-explorar">Descubre Nuestros Paquetes</a>
    </div>
  </section>

  <section class="historia-container">
    <div class="historia-texto">
      <h3>Historia</h3>
      <p>Nuestro proyecto comenzó cuando un par de compañeros y yo nos reunimos y surgió la idea de crear un sistema que identificara las zonas más peligrosas de Colombia, o incluso de nuestra ciudad, para que los viajeros pudieran tomar precauciones y evitar áreas de riesgo, como las propensas a robos u otros peligros. A medida que avanzábamos, también pensamos en agregar una función que estimara los precios aproximados de productos y servicios, con el fin de evitar que los turistas cayeran en estafas o fueran engañados por vendedores sin escrúpulos.  
      Aunque por el momento no podemos desarrollar todos los aspectos del proyecto debido a limitaciones de tiempo, tenemos la intención de llevar a cabo cada uno de estos puntos en el futuro. Planeamos implementar estas funciones y expandir el alcance del sistema, con el objetivo de ofrecer una herramienta más completa y útil para los viajeros.</p>
    </div>
    <div class="historia-imagen">
      <img src="{{ asset('images/fondoss.png') }}" alt="Imagen de ejemplo">
    </div>
  </section>

  <section class="mision-vision">
    <div class="mision">
      <h2>Misión</h2>
      <p>En Vacaciones_Top, nuestra misión es proporcionar servicios de alta calidad en el sector turístico, siempre enfocados en la satisfacción del cliente, la innovación y la mejora continua.</p>
    </div>
    <div class="vision">
      <h2>Visión</h2>
      <p>Aspiramos a ser la empresa líder en el sector turístico, destacándonos por nuestra calidad, compromiso social y el impacto positivo que generamos en la comunidad y el medio ambiente.</p>
    </div>
  </section>

</body>
</html>

@endsection
