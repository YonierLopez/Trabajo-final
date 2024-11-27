@extends('layouts.app')

@section('content')

<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Mejorado</title>

  <style>

    .colorr {
      background-color: #95604e;
      padding-top: 40px; /* Para que el espacio entre el slider y el navbar se vea con color */
      padding-bottom: 40px; 
    }
    /* Fondo del body fuera del slider */
    body {
      font-family: Arial, sans-serif; /* Fuente para el cuerpo */
      margin: 0;
      padding: 0;
    }

    /* Estilo principal del slider */
    .slider {
      width: 100%; /* 100% del ancho */
      max-width: 1200px; /* Máximo ancho de 1200px */
      margin: 40px auto; /* Separar 40px del navbar y del footer */
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
      transition: transform 1s ease-in-out; /* Transición suave al mover las imágenes */
      width: 400%; /* El ancho total es el 400% del contenedor para 4 imágenes */
    }

    /* Estilo para cada elemento de la lista (cada imagen) */
    .slider li {
      width: 25%; /* Cada imagen ocupa el 25% del contenedor (para mostrar 1 imagen a la vez) */
      list-style: none;
    }

    /* Estilo para las imágenes */
    .slider img {
      width: 100%; /* Asegura que las imágenes llenen el contenedor */
      height: 500px; /* Altura fija para que todas las imágenes tengan el mismo tamaño */
      object-fit: cover; /* Mantiene la proporción y llena el contenedor sin distorsionar */
      border-radius: 15px; /* Bordes redondeados para las imágenes */
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); /* Sombra en las imágenes */
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Efectos de transformación y sombra */
    }

    /* Efecto cuando el mouse pasa por encima de la imagen */
    .slider img:hover {
      transform: scale(1.1); /* Aumenta el tamaño de la imagen */
      box-shadow: 0 0 40px rgba(255, 255, 255, 0.7); /* Resalta con brillo */
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

<div class="colorr">

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

    // Función para mostrar la imagen anterior
    function showPrev() {
      currentIndex = (currentIndex === 0) ? totalImages - 1 : currentIndex - 1;
      slider.style.transform = `translateX(-${currentIndex * 25}%)`; /* 25% porque hay 4 imágenes */
    }

    // Función para mostrar la siguiente imagen
    function showNext() {
      currentIndex = (currentIndex === totalImages - 1) ? 0 : currentIndex + 1;
      slider.style.transform = `translateX(-${currentIndex * 25}%)`; /* 25% porque hay 4 imágenes */
    }

    // Asignación de eventos para las flechas
    prevButton.addEventListener('click', showPrev);
    nextButton.addEventListener('click', showNext);
  </script>
</div>
</body>
</html>

@endsection
