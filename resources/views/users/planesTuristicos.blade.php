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
      background-color: #95604e;
      -webkit-font-smoothing: antialiased;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .colorr {
      background-color: #95604e;
    }

    .header {
      background: linear-gradient(135deg, #8d6e63, #a1887f);
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

    .title {
      font-family: "Raleway";
      font-size: 24px;
      font-weight: 700;
      color: #5D4037;
      text-align: center;
    }

    .container {
      padding: 40px 80px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      flex-grow: 1;
    }

    /* Estilo de la tarjeta */
    .card-wrap {
      margin: 10px;
      perspective: 800px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .card-wrap:hover {
      transform: scale(1.05);
    }

    .card {
      position: relative;
      flex: 0 0 240px;
      width: 240px;
      height: 320px;
      background-color: #fff;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: 0.3s ease;
    }

    /* Fondo de la tarjeta */
    .card-bg {
      opacity: 0.5;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }

    /* Información sobre la tarjeta */
    .card-info {
      padding: 20px;
      position: absolute;
      bottom: 0;
      color: #fff;
      transform: translateY(40%);
      transition: 0.3s ease;
    }

    .card-info h1 {
      font-family: "Playfair Display";
      font-size: 24px;
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
      opacity: 0.7;
    }

    .card-wrap:hover .card-info {
      transform: translateY(0);
    }

    .card-info:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
      opacity: 0;
      transform: translateY(100%);
      transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-wrap:hover .card-info:after {
      opacity: 1;
      transform: translateY(0);
    }

    /* Footer */
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 0; /* Agregado para mover el pie de página un poco más abajo */
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

  <!-- Footer -->
  <footer>
    <div class="footer-copy">
      <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </div>
  </footer>
  </div>
</body>
</html>

@endsection
