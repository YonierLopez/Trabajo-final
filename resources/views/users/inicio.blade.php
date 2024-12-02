@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colombia - País de la Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Poppins', Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        background-color: #f5f5f5;
    }

    .banner-principal {
        position: relative;
        width: 100%;
        height: 60vh;
        overflow: hidden;
    }

    .imagen-banner {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .imagen-banner.activa {
        opacity: 1;
    }

    .texto-banner {
        position: absolute;
        top: 15%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        text-align: center;
        font-size: 1.8rem;
        font-weight: 600;
        max-width: 80%;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .texto-banner.activa {
        opacity: 1;
    }

    .indicadores {
        position: absolute;
        bottom: 5%;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
    }

    .indicador {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: gray;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .indicador.activo {
        background-color: blue;
    }

    .carousel-textos {
        position: relative;
        max-width: 80%;
        margin: 0 auto;
        overflow: hidden;
        text-align: center;
        padding: 50px 20px;
    }

    .carousel-textos .diapositiva {
        display: none;
        animation: fadeIn 1s ease;
    }

    .carousel-textos .diapositiva.activa {
        display: block;
    }

    .carousel-textos h2 {
        font-size: 2rem;
        color: #023047;
        margin-bottom: 20px;
        position: relative;
    }

    .carousel-textos h2::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        height: 3px;
        background-color: #00aaff;
    }

    .carousel-textos p {
        font-size: 1.2rem;
        color: #555;
        line-height: 1.6;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .carousel-textos {
        background-color: #a3d1d6;
        max-width: 100%;
    }

    .botones-carousel-textos {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    .indicador-carousel-textos {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background-color: gray;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .indicador-carousel-textos.activo {
        background-color: blue;
    }
</style>

<body>
    <header class="banner-principal">
        <img class="imagen-banner activa" src="{{ asset('images/fondoc2.jpg') }}" alt="Imagen 1">
        <img class="imagen-banner" src="{{ asset('images/amazonas.jpg') }}" alt="Imagen 2">
        <img class="imagen-banner" src="{{ asset('images/bogota.jpg') }}" alt="Imagen 3">
        <img class="imagen-banner" src="{{ asset('images/cartagena.jpg') }}" alt="Imagen 4">

        <div class="texto-banner activa">Colombia, donde miles de especies regresan cada año.</div>
        <div class="texto-banner">Amazonas: el pulmón verde y corazón de biodiversidad.</div>
        <div class="texto-banner">Bogotá: el corazón cultural y político del país.</div>
        <div class="texto-banner">Cartagena: historia, mar y cultura en un solo lugar.</div>

        <div class="indicadores">
            <div class="indicador activa" onclick="mostrarImagen(0)"></div>
            <div class="indicador" onclick="mostrarImagen(1)"></div>
            <div class="indicador" onclick="mostrarImagen(2)"></div>
            <div class="indicador" onclick="mostrarImagen(3)"></div>
        </div>
    </header>

    <section class="carousel-textos">
        <div class="diapositiva activa">
            <h2>¿Por qué viajar a Colombia?</h2>
            <p>Colombia es un país que se destaca por su diversidad natural y cultural. Desde las playas del Caribe hasta las montañas de los Andes, ofrece una experiencia única para cada tipo de viajero. Aquí encontrarás la calidez de su gente, una rica historia, y la oportunidad de explorar paisajes que parecen salidos de un sueño.</p>
            <h2>La cultura colombiana</h2>
            <p>La cultura colombiana es un mosaico de tradiciones, sabores y ritmos. Desde la cumbia en la costa hasta la salsa en el Valle del Cauca, cada región vibra al ritmo de su propia música. Los festivales como el Carnaval de Barranquilla son eventos que te conectan con el alma del país.</p>
        </div>

        <div class="diapositiva">
            <h2>Destinos únicos</h2>
            <p>Desde la vibrante Bogotá, pasando por la histórica Cartagena, hasta el verde Amazonas, Colombia tiene un sinfín de destinos únicos que te cautivarán. Cada rincón tiene una historia que contar y una belleza natural que te dejará sin aliento.</p>
            <h2>Gastronomía deliciosa</h2>
            <p>La comida colombiana es una fiesta para los sentidos. Platos como la bandeja paisa, el arequipe o las empanadas, te ofrecen un viaje de sabores que reflejan la diversidad de la región. Además, no te puedes perder un buen café colombiano, considerado uno de los mejores del mundo.</p>
        </div>

        <div class="diapositiva">
            <h2>Gente cálida y acogedora</h2>
            <p>Los colombianos son conocidos por su amabilidad, calidez y hospitalidad. No importa en qué región estés, siempre serás recibido con una sonrisa y un gesto amable. La gente aquí es una de las razones principales por las que viajar a Colombia es una experiencia inolvidable.</p>
            <h2>Aventura y ecoturismo</h2>
            <p>Si eres un amante de la aventura y el ecoturismo, Colombia es el destino ideal. Puedes hacer senderismo por los Andes, explorar la selva amazónica o disfrutar de actividades acuáticas en el Caribe. La biodiversidad de Colombia ofrece experiencias únicas para los turistas más aventureros.</p>
        </div>

        <div class="diapositiva">
            <h2>¿Por qué viajar con nosotros?</h2>
            <p>Viajar con nosotros significa elegir una experiencia única y personalizada. Nos especializamos en ofrecerte un servicio excepcional, adaptado a tus gustos y necesidades, para que disfrutes de cada momento al máximo. Cada destino ha sido cuidadosamente seleccionado para brindarte lo mejor de la cultura, la naturaleza y la aventura que Colombia tiene para ofrecer. Nos enorgullece garantizarte un viaje cómodo, seguro y lleno de momentos inolvidables. Nuestro equipo de expertos está siempre disponible para asistirte, brindarte recomendaciones y asegurarse de que tu experiencia sea sin estrés. Además, contamos con opciones flexibles de reservas y pagos, para que puedas planificar tu viaje con total confianza. Viaja con nosotros y descubre el verdadero espíritu de Colombia, rodeado de paisajes impresionantes, cultura vibrante y la calidez de nuestra gente. ¡Te esperamos para hacer de tu viaje una aventura memorable!</p>
        </div>

        <div class="botones-carousel-textos">
            <div class="indicador-carousel-textos activa" onclick="mostrarDiapositivaTexto(0)"></div>
            <div class="indicador-carousel-textos" onclick="mostrarDiapositivaTexto(1)"></div>
            <div class="indicador-carousel-textos" onclick="mostrarDiapositivaTexto(2)"></div>
            <div class="indicador-carousel-textos" onclick="mostrarDiapositivaTexto(3)"></div>
        </div>
    </section>

    <script>
        let indiceImagen = 0;
        let indiceTexto = 0;
        const imagenes = document.querySelectorAll('.imagen-banner');
        const textos = document.querySelectorAll('.diapositiva');
        const indicadores = document.querySelectorAll('.indicador');
        const indicadoresTexto = document.querySelectorAll('.indicador-carousel-textos');

        function mostrarImagen(indice) {
            imagenes[indiceImagen].classList.remove('activa');
            indicadores[indiceImagen].classList.remove('activo');
            imagenes[indice].classList.add('activa');
            indicadores[indice].classList.add('activo');
            indiceImagen = indice;
        }

        function mostrarDiapositivaTexto(indice) {
            textos[indiceTexto].classList.remove('activa');
            indicadoresTexto[indiceTexto].classList.remove('activo');
            textos[indice].classList.add('activa');
            indicadoresTexto[indice].classList.add('activo');
            indiceTexto = indice;
        }

        setInterval(() => {
            const siguiente = (indiceImagen + 1) % imagenes.length;
            mostrarImagen(siguiente);
            const siguienteTexto = (indiceTexto + 1) % textos.length;
            mostrarDiapositivaTexto(siguienteTexto);
        }, 5000);
    </script>
</body>
</html>

@endsection
