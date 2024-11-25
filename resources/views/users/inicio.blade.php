@extends('layouts.app')


@section('content')

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    /* Estilo principal del slider */
    .slider {
      width: 70%; /* Ancho más pequeño */
      margin: auto;
      overflow: hidden;
      border: 8px solid #e1c16e; /* Borde dorado brillante */
      border-radius: 20px; /* Bordes redondeados */
      box-shadow: 0 4px 25px rgba(0, 0, 0, 0.5); /* Sombra suave con más profundidad */
      background: linear-gradient(135deg, #ff6ec7, #ff9a8b, #e1c16e); /* Degradado de colores vibrantes */
      padding: 10px; /* Espaciado dentro del cuadro */
      position: relative;
    }

    /* Estilos para la lista de imágenes */
    .slider ul {
      display: flex;
      padding: 0;
      margin: 0;
      width: 400%; /* Aumenta el ancho total para que los elementos se alineen uno al lado del otro */
      animation: cambio 8s infinite alternate linear; /* Animación más rápida de 8 segundos */
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

    /* Definición de la animación que moverá las imágenes */
    @keyframes cambio {
      0% { margin-left: 0; }          /* Inicio en la primera imagen */
      20% { margin-left: 0; }         /* Muestra la primera imagen durante este tiempo */
      
      25% { margin-left: -100%; }     /* Mueve hacia la segunda imagen */
      45% { margin-left: -100%; }     /* Muestra la segunda imagen durante este tiempo */
      
      50% { margin-left: -200%; }     /* Mueve hacia la tercera imagen */
      70% { margin-left: -200%; }     /* Muestra la tercera imagen durante este tiempo */
      
      75% { margin-left: -300%; }     /* Mueve hacia la cuarta imagen */
      100% { margin-left: -300%; }    /* Muestra la cuarta imagen durante este tiempo */
    }

    /* Estilo de las flechas de navegación */
    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(255, 255, 255, 0.3); /* Fondo semi-transparente */
      color: #e1c16e; /* Color dorado de las flechas */
      border: 2px solid #e1c16e; /* Borde dorado alrededor */
      padding: 15px 30px; /* Tamaño grande para las flechas */
      font-size: 40px; /* Flechas grandes */
      cursor: pointer;
      border-radius: 50%;
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
      background-color: #e1c16e; /* Fondo dorado cuando pasa el mouse */
      color: white; /* Cambio de color a blanco */
      transform: translateY(-50%) scale(1.1); /* Aumenta el tamaño de la flecha */
    }

  </style>

</head>
<body>

 <!-- Contenedor del slider con bordes exóticos -->
  <div class="slider">
    <ul>
      <!-- Primer elemento con imagen -->
      <li>
        <img src="http://dominicushoeve.com/wp-content/uploads/ktz/latest-high-resolution-wallpaper-1920x1080-70558-pictures-high-resolution-wallpaper-30whtvl34j4r12m8b0c1sa.jpg" alt="Imagen 1">
      </li>
      <!-- Segundo elemento con imagen -->
      <li>
        <img src="http://youghaltennisclub.ie/wp-content/uploads/2014/06/Tennis-Wallpaper-High-Definition-700x300.jpg" alt="Imagen 2">
      </li>
      <!-- Tercer elemento con imagen -->
      <li>
        <img src="http://welltechnically.com/wp-content/uploads/2013/08/android-wallpapers-700x300.jpg" alt="Imagen 3">
      </li>
      <!-- Cuarto elemento con imagen -->
      <li>
        <img src="http://welltechnically.com/wp-content/uploads/2013/09/android-widescreen-wallpaper-14165-hd-wallpapers-700x300.jpg" alt="Imagen 4">
      </li>
    </ul>

    <!-- Flechas de navegación -->
    <button class="prev">&#10094;</button> <!-- Flecha izquierda -->
    <button class="next">&#10095;</button> <!-- Flecha derecha -->
  </div>

  <script>
    // Variables de los botones de flechas
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slider = document.querySelector('.slider ul');
    
    let currentIndex = 0;
    const totalImages = slider.children.length;

    // Función para mostrar la imagen previa
    function showPrev() {
      currentIndex = (currentIndex === 0) ? totalImages - 1 : currentIndex - 1;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Función para mostrar la siguiente imagen
    function showNext() {
      currentIndex = (currentIndex === totalImages - 1) ? 0 : currentIndex + 1;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Asignación de los eventos a los botones
    prevButton.addEventListener('click', showPrev);
    nextButton.addEventListener('click', showNext);
  </script>

</body>
</html>

@endsection