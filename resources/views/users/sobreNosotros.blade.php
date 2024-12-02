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
    body, h1, h2, h3, p {
      font-family: "Raleway", sans-serif;
    }

    .contenedor-sobre-nosotros {
      background-image: url('{{ asset('images/sobren.jpg') }}');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: white;
      padding-bottom: 40px;
    }
  
    body {
      margin: 0;
      padding: 0;
      background-color: #FFF4E1;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .hero {
      background-image: url('https://source.unsplash.com/1600x900/?tropical,beach');
      background-size: cover;
      background-position: center;
      color: white;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 0 20px;
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

    footer {
      background-color: #FF7043;
      color: white;
      text-align: center;
      padding: 30px;
      font-size: 16px;
      margin-top: auto;
    }

    footer p {
      margin: 0;
    }

    .mision-vision {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 20px;
      padding: 0 20px;
      flex-wrap: wrap;
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

    .introduccion-sobre-nosotros {
      text-align: center;
      padding: 40px 20px;
    }
    .introduccion-sobre-nosotros h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
      color: #274c77;
    }
    .introduccion-sobre-nosotros p {
      font-size: 1.2em;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
      color: #2f4f4f;
    }

    @media (max-width: 768px) {
      .mision-vision {
        flex-wrap: wrap;
        justify-content: center;
      }
      .mision, .vision {
        width: 80%;
      }
    }
  </style>
</head>
<body>
<div class="contenedor-sobre-nosotros">
    <section class="introduccion-sobre-nosotros">
        <div class="container">
            <h1>Sobre Nosotros</h1>
            <p>Bienvenido a Vacaciones_Top. Somos una organización dedicada a ofrecer los mejores servicios en el área de Turística. Nuestra misión es brindar soluciones innovadoras para satisfacer las necesidades de nuestros clientes.</p>
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

    <section class="explorar-seccion">
        <div class="container" style="text-align: center; margin-top: 40px;">
            <a href="{{ route('planesTuristicos') }}" class="boton-explorar">Descubre los destinos más exóticos y paradisíacos del mundo. Escápate a la aventura de tu vida</a>
        </div>
    </section>
</div>
</body>
</html>
@endsection
