@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desliza sobre las cartas</title>
  <style>
    /* Estilos generales */
    body {
      margin: 40px 0;
      font-family: "Raleway", sans-serif;
      font-size: 14px;
      font-weight: 500;
      background-color: #BCAAA4;
      -webkit-font-smoothing: antialiased;
    }

    /* Header más pasivo y subido un poco más */
    .header {
      background: linear-gradient(135deg, #8d6e63, #a1887f); /* Color más suave */
      color: white;
      padding: 30px 0; /* Aún más reducido el padding */
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
    }

    /* Card wrap estilo */
    .card-wrap {
      margin: 10px;
      transform: perspective(800px);
      transform-style: preserve-3d;
      cursor: pointer;
    }

    .card-wrap:hover .card-info {
      transform: translateY(0);
    }

    .card-wrap:hover .card-info p {
      opacity: 1;
    }

    .card-wrap:hover .card-info, .card-wrap:hover .card-info p {
      transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .card-wrap:hover .card-info:after {
      transition: 5s cubic-bezier(0.23, 1, 0.32, 1);
      opacity: 1;
      transform: translateY(0);
    }

    .card-wrap:hover .card-bg {
      transition: 0.6s cubic-bezier(0.23, 1, 0.32, 0.32), opacity 5s cubic-bezier(0.23, 1, 0.32, 0.32);
      opacity: 0.8;
    }

    .card-wrap:hover .card {
      transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 2s cubic-bezier(0.23, 1, 0.32, 1);
      box-shadow: rgba(white, 0.2) 0 0 40px 5px, rgba(white, 1) 0 0 0 1px, rgba(black, 0.66) 0 30px 60px 0,
        inset #333 0 0 0 5px, inset white 0 0 0 6px;
    }

    /* Estilo de la tarjeta */
    .card {
      position: relative;
      flex: 0 0 240px;
      width: 240px;
      height: 320px;
      background-color: #333;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: rgba(black, 0.66) 0 30px 60px 0, inset #333 0 0 0 5px, inset rgba(white, 0.5) 0 0 0 6px;
      transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    }

    /* Fondo de la tarjeta */
    .card-bg {
      opacity: 0.5;
      position: absolute;
      top: -20px;
      left: -20px;
      width: 100%;
      height: 100%;
      padding: 20px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      transition: 1s cubic-bezier(0.445, 0.05, 0.55, 0.95), opacity 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
      pointer-events: none;
    }

    /* Información sobre la tarjeta */
    .card-info {
      padding: 20px;
      position: absolute;
      bottom: 0;
      color: #fff;
      transform: translateY(40%);
      transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .card-info p {
      opacity: 0;
      text-shadow: rgba(black, 1) 0 2px 3px;
      transition: 0.6s 1.6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .card-info * {
      position: relative;
      z-index: 1;
    }

    .card-info:after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      z-index: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
      background-blend-mode: overlay;
      opacity: 0;
      transform: translateY(100%);
      transition: 5s 1s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    }

    .card-info h1 {
      font-family: "Playfair Display";
      font-size: 36px;
      font-weight: 700;
      text-shadow: rgba(black, 0.5) 0 10px 10px;
    }
  </style>
</head>
<body>

  <!-- Header más pasivo y subido un poco más -->
  <div class="header">
    <span>Explora la belleza de la naturaleza</span>
  </div>

  <h1 class="title">Desliza sobre las cartas</h1>

  <div id="app" class="container">
    <!-- Las cartas siguen igual -->
    <card data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
      <h1 slot="header">Cañones</h1>
      <p slot="content">Explora los majestuosos cañones esculpidos por siglos de fuerzas naturales.</p>
    </card>
    <card data-image="https://images.pexels.com/photos/22487909/pexels-photo-22487909/free-photo-of-deniz.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
      <h1 slot="header">Playas</h1>
      <p slot="content">Deja que el sonido de las olas te relaje mientras caminas por las arenas doradas.</p>
    </card>
    <card data-image="https://images.pexels.com/photos/1671325/pexels-photo-1671325.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
      <h1 slot="header">Bosques</h1>
      <p slot="content">Adéntrate en los frondosos bosques, llenos de vida y misterio.</p>
    </card>
    <card data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
      <h1 slot="header">Lagos</h1>
      <p slot="content">Reflexiona sobre las aguas tranquilas de los lagos prístinos.</p>
    </card>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <script>
    Vue.component("card", {
      props: ["dataImage"],
      template: `
        <div class="card-wrap">
          <div class="card">
            <div class="card-bg" :style="{ backgroundImage: 'url(' + dataImage + ')' }"></div>
            <div class="card-info">
              <slot name="header"></slot>
              <slot name="content"></slot>
            </div>
          </div>
        </div>
      `
    });

    new Vue({
      el: "#app"
    });
  </script>

</body>
</html>
@endsection