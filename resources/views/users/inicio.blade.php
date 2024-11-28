@extends('layouts.app')

@section('content')

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Mejorado</title>

  <style>
    .colorr {
      background-image: url('{{ asset('images/fondoc.jpg') }}'); 
      background-size: cover; /* Hace que la imagen cubra toda la pantalla */
      background-position: center; /* Centra la imagen */
      background-attachment: fixed; /* Fija la imagen al fondo */
      padding-top: 40px; /* Para que el espacio entre el slider y el navbar se vea con color */
      padding-bottom: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Contenedor del slider y la descripción */
    .slider-container {
      display: flex;
      justify-content: space-between;
      width: 100%;
      max-width: 1200px;
      margin: 40px auto;
    }

    /* Estilo principal del slider */
    .slider {
      width: 70%;
      max-width: 800px;
      overflow: hidden;
      border: 4px double #63bb30;
      border-radius: 20px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5);
      position: relative;
    }

    .slider ul {
      display: flex;
      padding: 0;
      margin: 0;
      transition: transform 1s ease-in-out;
      width: 400%;
    }

    .slider li {
      width: 25%;
      list-style: none;
    }

    .slider img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #a88275;
      color: white;
      border: 2px solid #a88275;
      width: 50px;
      height: 50px;
      font-size: 30px;
      cursor: pointer;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }

    .prev:hover, .next:hover {
      background-color: white;
      color: #a88275;
      transform: translateY(-50%) scale(1.1);
    }

    /* Descripción del lado derecho */
    .description {
      width: 25%;
      padding: 20px;
      background: rgba(0, 0, 0, 0.6); /* Fondo con transparencia */
      color: white;
      border-radius: 15px;
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5);
    }

    .description h3 {
      font-size: 1.5em;
      margin-bottom: 20px;
    }

    .description p {
      font-size: 1em;
      line-height: 1.6;
    }

  </style>

</head>
<body>

<div class="colorr">

  <div class="slider-container">
    <div class="slider">
      <ul>
        <li><img src="https://cloudfront-us-east-1.images.arcpublishing.com/elespectador/SL3RJGIFWRCQDGAMA2XYX4QYRQ.jpg" alt="Imagen 1"></li>
        <li><img src="https://colombiaprivatetours.com/wp-content/uploads/2019/04/turismo-en-antioquia-colombia-tours-guia-bilingue-privado.jpg" alt="Imagen 2"></li>
        <li><img src="https://elextra.co/wp-content/uploads/2024/05/turismo.jpg" alt="Imagen 3"></li>
        <li><img src="https://pluralidadz.com/wp-content/uploads/2021/09/Turismo-Colombia.jpg" alt="Imagen 4"></li>
      </ul>
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <!-- Descripción de los paisajes colombianos -->
    <div class="description">
      <h3>Paisajes Colombianos</h3>
      <p>Colombia es un país lleno de contrastes y diversidad. Desde las playas del Caribe hasta las altas montañas de los Andes, pasando por la selva amazónica y los llanos de la Orinoquía, los paisajes colombianos ofrecen una gran variedad de escenarios naturales. En el Caribe, puedes disfrutar de playas paradisíacas; mientras que en el interior del país, las montañas y valles brindan una vista impresionante. Además, la biodiversidad de Colombia es reconocida mundialmente, siendo un destino perfecto para los amantes del ecoturismo.</p>
    </div>
  </div>

  <script>
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slider = document.querySelector('.slider ul');
    
    let currentIndex = 0;
    const totalImages = slider.children.length;

    function showPrev() {
      currentIndex = (currentIndex === 0) ? totalImages - 1 : currentIndex - 1;
      slider.style.transform = `translateX(-${currentIndex * 25}%)`;
    }

    function showNext() {
      currentIndex = (currentIndex === totalImages - 1) ? 0 : currentIndex + 1;
      slider.style.transform = `translateX(-${currentIndex * 25}%)`;
    }

    prevButton.addEventListener('click', showPrev);
    nextButton.addEventListener('click', showNext);
  </script>
</div>

</body>
</html>

@endsection
