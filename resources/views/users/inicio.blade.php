@extends('layouts.app')

@section('content')

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Mejorado</title>

  <style>
    /* Fondo del body fuera del slider */
    body {
      background-color: #2f2f2f; /* Gris oscuro para el fondo */
      font-family: Arial, sans-serif; /* Fuente para el cuerpo */
      color: #ddd; /* Texto en color claro para resaltar sobre el fondo oscuro */
      margin: 0;
      padding: 0;
    }

    /* Estilo principal del slider */
    .slider {
      width: 100%; /* 100% del ancho */
      max-width: 1200px; /* Máximo ancho de 900px */
      margin: 40px auto 40px; /* Separar 40px del navbar y del footer */
      overflow: hidden;
      border: 4px double #a88275; /* Borde color acorde */
      border-radius: 20px; /* Bordes redondeados */
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5); /* Sombra suave con más profundidad */
      background: linear-gradient(135deg, #1f1f1f, #3a3a3a); /* Fondo oscuro */
      padding: 10px; /* Espaciado dentro del cuadro */
      position: relative;
    }

    /* Estilos para la lista de imágenes */
    .slider ul {
      display: flex;
      padding: 0;
      margin: 0;
      width: 400%; /* Aumenta el ancho total para que los elementos se alineen uno al lado del otro */
      animation: cambio 15s infinite alternate linear; /* Animación más rápida de 8 segundos */
    }

    /* Estilo para cada elemento de la lista (cada imagen) */
    .slider li {
      width: 100%; /* Cada imagen ocupa el 100% del contenedor */
      list-style: none;
    }

    /* Estilo para las imágenes */
    .slider img {
      width: 100%; /* Asegura que las imágenes llenen el contenedor */
      height: auto; /* Mantiene la proporción original */
      border-radius: 15px; /* Bordes redondeados para las imágenes */
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); /* Sombra en las imágenes */
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Efectos de transformación y sombra */
    }

    /* Efecto cuando el mouse pasa por encima de la imagen */
    .slider img:hover {
      transform: scale(1.1); /* Aumenta el tamaño de la imagen */
      box-shadow: 0 0 40px rgba(255, 255, 255, 0.7); /* Resalta con brillo */
    }

    /* Animación para cambiar entre imágenes */
    @keyframes cambio {
      0% { margin-left: 0; }
      25% { margin-left: -100%; }
      50% { margin-left: -200%; }
      75% { margin-left: -300%; }
      100% { margin-left: -400%; }
    }

    /* Estilo de las flechas de navegación */
    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #a88275; /* Color de fondo acorde al borde */
      color: white; /* Color blanco para el texto de las flechas */
      border: 2px solid #a88275; /* Borde del mismo color que el fondo */
      width: 50px; /* Ancho del botón */
      height: 50px; /* Alto del botón (igual que el ancho para hacerlo redondo) */
      font-size: 30px; /* Flechas más pequeñas */
      cursor: pointer;
      border-radius: 50%; /* Hace que el botón sea redondo */
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease; /* Transición suave al pasar el mouse */
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra con más profundidad */
    }

    .prev {
      left: 10px;
    }

    .next {
      right: 10px;
    }

    /* Efecto hover para las flechas */
    .prev:hover, .next:hover {
      background-color: white; /* Fondo blanco cuando pasa el mouse */
      color: #a88275; /* Cambiar color del texto a acorde al borde */
      transform: translateY(-50%) scale(1.1); /* Aumenta el tamaño de la flecha */
    }

  </style>

</head>
<body>

  <!-- Contenedor del slider con bordes exóticos -->
  <div class="slider">
    <ul>
      <li><img src="https://cloudfront-us-east-1.images.arcpublishing.com/elespectador/SL3RJGIFWRCQDGAMA2XYX4QYRQ.jpg" alt="Imagen 1"></li>
      <li><img src="https://colombiaprivatetours.com/wp-content/uploads/2019/04/turismo-en-antioquia-colombia-tours-guia-bilingue-privado.jpg" alt="Imagen 2"></li>
      <li><img src="https://elextra.co/wp-content/uploads/2024/05/turismo.jpg" alt="Imagen 3"></li>
      <li><img src="https://pluralidadz.com/wp-content/uploads/2021/09/Turismo-Colombia.jpg" alt="Imagen 4"></li>
    </ul>

    <!-- Flechas de navegación -->
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>

  <script>
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slider = document.querySelector('.slider ul');
    
    let currentIndex = 0;
    const totalImages = slider.children.length;

    function showPrev() {
      currentIndex = (currentIndex === 0) ? totalImages - 1 : currentIndex - 1;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function showNext() {
      currentIndex = (currentIndex === totalImages - 1) ? 0 : currentIndex + 1;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevButton.addEventListener('click', showPrev);
    nextButton.addEventListener('click', showNext);

    // Avanzar automáticamente cada 3 segundos
    setInterval(showNext, 3000);
  </script>

</body>
</html>

@endsection
