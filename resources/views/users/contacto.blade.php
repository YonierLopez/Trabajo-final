@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombia - País de la Belleza</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<style>
    /* Estilos generales */
    body {
        font-family: 'Poppins', Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    /* Contenedor del banner */
    .header-banner {
        position: relative;
        width: 100%;
        height: 60vh; /* Altura fija */
        overflow: hidden;
    }

    /* Imagen del banner */
    .banner-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%; /* Tamaño fijo para todas las imágenes */
        object-fit: cover; /* Asegura que la imagen se adapte sin deformarse */
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .banner-image.active {
        opacity: 1; /* Solo la imagen activa es visible */
    }

    /* Escudo del Amazonas */
    .shield {
        position: absolute;
        bottom: 15%; /* Ajusta la posición vertical del escudo */
        left: 10%;
        width: 160px; /* Tamaño ampliado */
        height: 160px; /* Tamaño ampliado */
        background: url('{{ asset('images/escudo.jpg') }}') no-repeat center center;
        background-size: contain;
        z-index: 3;
        display: none; /* Oculto por defecto */
    }

    .shield.active {
        display: block; /* Se muestra solo en la imagen activa */
    }

    /* Texto encima de la imagen */
    .banner-text {
        position: absolute;
        top: 15%; /* Ajusta según el diseño */
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.6); /* Fondo semitransparente */
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
        font-size: 1.8rem;
        font-weight: 600;
        z-index: 2;
        line-height: 1.5;
        max-width: 80%; /* Limita el ancho del texto */
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .banner-text.active {
        opacity: 1; /* Solo el texto activo es visible */
    }

    /* Indicadores de cambio (botones redondos) */
    .indicators {
        position: absolute;
        bottom: 5%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 3;
    }

    .indicator {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: gray;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .indicator.active {
        background-color: red; /* Indicador activo en rojo */
    }
</style>

<body>
    <header class="header-banner">
        <!-- Imágenes -->
        <img class="banner-image active" src="{{ asset('images/fondoc.jpg') }}" alt="Imagen 1">
        <img class="banner-image" src="{{ asset('images/amazonas.jpg') }}" alt="Imagen 2">
        <img class="banner-image" src="{{ asset('images/imagen3.jpg') }}" alt="Imagen 3">
        <img class="banner-image" src="{{ asset('images/imagen4.jpg') }}" alt="Imagen 4">

        <!-- Escudo -->
        <div class="shield"></div>

        <!-- Textos -->
        <div class="banner-text active" id="text-1">Colombia, donde miles de especies regresan cada año.</div>
        <div class="banner-text" id="text-2">Amazonas: el pulmón verde y corazón de biodiversidad.</div>
        <div class="banner-text" id="text-3">Bogotá: el corazón cultural y político del país.</div>
        <div class="banner-text" id="text-4">Cartagena: historia, mar y cultura en un solo lugar.</div>

        <!-- Indicadores -->
        <div class="indicators">
            <div class="indicator active" onclick="showImage(0)"></div>
            <div class="indicator" onclick="showImage(1)"></div>
            <div class="indicator" onclick="showImage(2)"></div>
            <div class="indicator" onclick="showImage(3)"></div>
        </div>
    </header>

    <script>
        const images = document.querySelectorAll('.banner-image');
        const indicators = document.querySelectorAll('.indicator');
        const texts = document.querySelectorAll('.banner-text');
        const shield = document.querySelector('.shield');
        let currentIndex = 0;

        function showImage(index) {
            // Quitar la clase 'active' de todas las imágenes, indicadores y textos
            images.forEach((img) => img.classList.remove('active'));
            indicators.forEach((ind) => ind.classList.remove('active'));
            texts.forEach((text) => text.classList.remove('active'));

            // Activar la imagen, indicador y texto correspondiente
            images[index].classList.add('active');
            indicators[index].classList.add('active');
            texts[index].classList.add('active');

            // Mostrar el escudo solo en la segunda imagen
            shield.classList.toggle('active', index === 1);

            // Actualizar el índice actual
            currentIndex = index;
        }

        function autoSlide() {
            const nextIndex = (currentIndex + 1) % images.length;
            showImage(nextIndex);
        }

        // Desplazamiento automático cada 5 segundos
        setInterval(autoSlide, 5000);
    </script>
</body>

</html>

@endsection
