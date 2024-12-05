@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombia - País de la Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    body {
        font-family: 'Poppins', Arial, sans-serif;
        margin: 0;
        padding: 0;
        padding-top: 68px;
        overflow-x: hidden;
        background-color: #f5f5f5;
    }

    .banner-principal {
        position: relative;
        width: calc(100% - 80px); /* Resta 20px a cada lado */
        height: 80vh; /* Esto asegura que la imagen ocupe toda la altura de la ventana */
        overflow: hidden;
        background: url('{{ asset("images/fonfopi.jpg") }}') no-repeat center center/cover;
        background-size: cover;
        background-position: center;
        margin: 0 auto; /* Centra el banner horizontalmente */
    }

    .texto-banner {
        position: absolute;
        top: 58%;
        left: 60%;
        background: rgba(0, 0, 0, 0.2);
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        font-size: 2.5rem;
        font-weight: 600;
        max-width: 80%;
        line-height: 1.2;
    }

    .texto-banner p {
        font-size: 1rem;
        font-weight: 400;
        margin-top: 10px;
    }

    .btn-banner {
        background-color: #e63946;
        color: white;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        margin-top: 20px;
        display: inline-block;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-banner:hover {
        background-color: #d62828;
    }

    .imagen-grid {
        display: grid;
        grid-template-columns: 600px 823px;
        grid-template-rows: 300px 400px; /* Dos columnas de igual tamaño */
        gap: 20px; /* Espacio entre las imágenes */
        width: 100%;
        max-width: 1200px;
        margin: 20px 37px;
    }

    .imagen-item {
        position: relative;
        overflow: hidden;
    }

    .imagen-item img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Asegura que la imagen se estire y cubra el espacio */
    }

    .texto-imagen {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .texto-imagen h3 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .texto-imagen p {
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .btn-imagen {
        background-color: #e63946;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-imagen:hover {
        background-color: #d62828;
    }

    /* Tercera imagen - ocupa dos columnas y se ajusta a 100vh */
    .imagen-item:last-child {
        grid-column: span 2; /* Ocupa el ancho completo */
    }
</style>

<body>
    <header class="banner-principal">
        <div class="texto-banner">
            CONECTA CON LA NATURALEZA
            <p>"Descubre el mundo, a tu manera"</p>
            <a href="{{ route('planesTuristicos') }}" class="btn-banner">Comienza tu viaje ahora</a>
        </div>
    </header>


    <section class="imagen-grid">
        <div class="imagen-item">
            <img src="{{ asset('images/choco.jpg') }}" alt="Prepara el frío">
            <div class="texto-imagen">
                <h3>CONOCE AHORA MISMO LOS:</h3>
                <p>3 lugares en Colombia en los que puedes ver a las ballenas jorobadas</p>
                <a href="Ballenas" class="btn-imagen">Conoce más aquí</a>
            </div>
        </div>
        <div class="imagen-item">
            <img src="{{ asset('images/cascada.jpg') }}" alt="Duerme bajo las estrellas">
            <div class="texto-imagen">
                <h3>ACAMPA BAJO LAS ESTRELLAS</h3>
                <p>Descubre las espectaculares montañas Colombianas</p>
                <a href="montañas" class="btn-imagen">Descubrelo aquí</a>
            </div>
        </div>
        <div class="imagen-item">
            <img src="{{ asset('images/cartagena3.jpg') }}" alt="Aventura">
            <div class="texto-imagen">
                <h3>PLANEA TU PRÓXIMA AVENTURA</h3>
                <p>Explora nuevos caminos y destinos increíbles</p>
                <a href="planes-turisticos" class="btn-imagen">Contáctanos</a>
            </div>
        </div>
    </section>

    <script>
        // Si necesitas mantener el cambio de imágenes y los indicadores, puedes agregar el código para ellos aquí.
    </script>

</body>
</html>

@endsection
