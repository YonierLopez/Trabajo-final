@extends('layouts.app')

@section('title', 'Sobre Nosotros')

@section('content')
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planes Turísticos</title>
  <style>
    /* Estilos generales */
    body {
      margin: 0;
      padding: 0;
      font-family: "Raleway", sans-serif;
      font-size: 14px;
      font-weight: 500;
      background-color: #274c77; /* Color azul */
      -webkit-font-smoothing: antialiased;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .colorr {
      background-color: #0096C7; /* Color azul */
      flex-grow: 1; /* Para que el contenedor crezca y ocupe toda la altura disponible */
    }

    .header {
      background: linear-gradient(135deg, #0077b6, #0077b6); /* Gradiente azul */
      color: white;
      padding: 40px 0;
      text-align: center;
      font-family: "Playfair Display", serif;
      font-size: 48px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 5px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      animation: slideIn 2s ease-out;
    }

    /* Animación de entrada */
    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .header span {
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    }

    .container {
      padding: 40px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center; /* Centra todo el contenido */
      gap: 0; /* Elimina el espacio entre las tarjetas */
      align-items: center;
      flex-grow: 1;
      max-width: 1200px; /* Limita el ancho máximo del contenedor */
      margin: 0 auto; /* Centra el contenedor */
    }

    /* Estilo de la tarjeta */
    .card-wrap {
      margin: 10px;
      perspective: 800px;
      cursor: pointer;
      transition: transform 0.3s ease;
      width: 240px; /* Ancho fijo para las tarjetas */
    }

    .card-wrap:hover {
      transform: scale(1.05);
    }

    .card {
      position: relative;
      width: 100%;
      height: 320px;
      background-color: #fff;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Sombra más fuerte */
      transition: 0.3s ease;
      border: 4px solid #1a3d66; /* Marco azul alrededor de la tarjeta */
    }

    .card-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      pointer-events: none;
      border-radius: 10px; /* Borde de la imagen */
    }

    .card-info {
      padding: 15px;
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: #1a3d66; /* Fondo azul oscuro del cuadro de información */
      color: #fff;
      border-top: 4px solid #274c77; /* Borde superior azul */
      transform: translateY(40%);
      transition: 0.3s ease;
      border-radius: 0 0 10px 10px; /* Bordes redondeados en la parte inferior */
    }

    .card-info h1 {
      font-family: "Playfair Display";
      font-size: 20px;
      font-weight: 700;
      text-shadow: rgba(0, 0, 0, 0.5) 0 2px 4px;
    }

    .card-info p {
      opacity: 0;
      text-shadow: rgba(0, 0, 0, 0.5) 0 2px 4px;
      transition: opacity 0.3s ease;
    }

    .card-wrap:hover .card-info p {
      opacity: 1;
    }

    .card-wrap:hover .card-bg {
      opacity: 1; /* Sin cambio de opacidad */
    }

    .card-wrap:hover .card-info {
      transform: translateY(0);
    }

    /* Efecto de borde de la tarjeta */
    .card-wrap:hover .card {
      border: 4px solid #1a3d66; /* Cambio de borde al pasar el ratón */
    }

    /* Efecto de movimiento de la imagen */
    .card-wrap:hover .card-bg {
      transform: scale(1.1);
      transition: transform 0.3s ease;
    }

    /* Footer */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 0;
    }

    .footer-copy {
      font-size: 0.9em;
      color: #ddd;
    }
  </style>
</head>

<body>
  <div class="colorr">
  <!-- Header -->
  <div class="header">
    <span>Explora la belleza de la naturaleza</span>
  </div>

  <!-- Contenedor de las tarjetas -->
  <div class="container">
    <!-- Tarjetas de contenido -->
    <div class="card-wrap">
      <div class="card">
        <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=');"></div>
        <div class="card-info">
          <h1>Cañones</h1>
          <p>Explora los majestuosos cañones esculpidos por siglos de fuerzas naturales.</p>
        </div>
      </div>
    </div>
    <div class="card-wrap">
      <div class="card">
        <div class="card-bg" style="background-image: url('https://images.pexels.com/photos/22487909/pexels-photo-22487909/free-photo-of-deniz.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div>
        <div class="card-info">
          <h1>Playas</h1>
          <p>Deja que el sonido de las olas te relaje mientras caminas por las arenas doradas.</p>
        </div>
      </div>
    </div>
    <div class="card-wrap">
      <div class="card">
        <div class="card-bg" style="background-image: url('https://images.pexels.com/photos/1671325/pexels-photo-1671325.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');"></div>
        <div class="card-info">
          <h1>Bosques</h1>
          <p>Adéntrate en los frondosos bosques, llenos de vida y misterio.</p>
        </div>
      </div>
    </div>
    <div class="card-wrap">
      <div class="card">
        <div class="card-bg" style="background-image: url('https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=');"></div>
        <div class="card-info">
          <h1>Lagos</h1>
          <p>Reflexiona sobre las aguas tranquilas de los lagos prístinos.</p>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>
</html>

@endsection
