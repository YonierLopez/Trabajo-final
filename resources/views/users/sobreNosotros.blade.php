@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | Vacaciones_Top</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 120px;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 80vh;
            background: url('{{ asset('images/fondoss.png') }}') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 200px 20px;
            box-shadow: inset 0 0 100px rgba(0, 0, 0, 0.6);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.5rem;
            line-height: 1.6;
            font-weight: 300;
            margin-bottom: 30px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.6);
        }

        .btn {
            padding: 15px 30px;
            background-color: #0078d4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #005fa3;
            transform: translateY(-5px);
        }

        /* About Us Section */
        .about-us {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 50px 20px;
            background-color: #ffffff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .about-us .image {
            flex: 1;
            max-width: 500px;
            margin: 60px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            height: 300px; /* Ajusta la altura de la imagen */
        }

        .about-us .image img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Hace que la imagen se ajuste al tamaño del contenedor */
            transition: transform 0.5s ease;
        }

        .about-us .image img:hover {
            transform: scale(1.05);
        }

        .about-us .text {
            flex: 2;
            margin: 20px;
            padding: 20px;
            text-align: left;
        }

        .about-us h2 {
            font-size: 2.8rem;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .about-us p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .about-us .quote {
            font-style: italic;
            margin-top: 30px;
            color: #0078d4;
            font-size: 1.3rem;
        }

        /* Misión y Visión (Misión a la derecha y Visión abajo a la izquierda) */
        .mission-vision {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            padding: 50px 20px;
            background-color: #f0f0f0;
        }

        /* Misión */
        .mission-vision .mission {
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            width: 50%;
            align-self: flex-end; /* Misión alineada a la derecha */
        }

        /* Visión */
        .mission-vision .vision {
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 50%;
        }

        .mission-vision h2 {
            font-size: 2.8rem;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .mission-vision p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-us {
                flex-direction: column;
                text-align: center;
            }

            .about-us .text {
                flex: 1;
                margin-top: 20px;
            }

            .mission-vision {
                padding: 20px;
            }

            .mission-vision .mission,
            .mission-vision .vision {
                margin-bottom: 20px;
                width: 100%;
            }

            .mission-vision .mission {
                align-self: center; /* Misión centrada en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Sobre Nosotros</h1>
        <p>"Descubre el mundo, a tu modo"</p>
        <a href="#contact" class="btn">Contáctanos</a>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="image">
            <img src= '{{ asset('images/fondocom.png')}}' alt="Vacaciones Top - Hoteles">
        </div>
        <div class="text">
            <h2>Quiénes somos</h2>
            <p>En **Vacaciones_Top**, estamos comprometidos con ofrecer experiencias únicas a nuestros huéspedes. Nuestros destinos exclusivos, servicios personalizados y atención al detalle nos convierten en una opción ideal para aquellos que buscan lujo, comodidad y autenticidad en cada momento. Desde playas paradisíacas hasta el corazón de las ciudades más vibrantes, cada hotel que gestionamos está pensado para que vivas una experiencia a medida.</p>
            <p>Te invitamos a formar parte de nuestra familia y disfrutar de nuestras instalaciones, que combinan lo mejor del confort moderno con la belleza natural y cultural de cada lugar. En **Vacaciones_Top**, cada estancia es un sueño hecho realidad.</p>
            <p class="quote">"Tu descanso es nuestra misión. Cada detalle importa, porque tú eres lo más importante para nosotros."</p>
        </div>
    </section>

    <!-- Misión y Visión (Misión a la derecha y Visión abajo a la izquierda) -->
    <section class="mission-vision">
        <div class="mission">
            <h2>Misión</h2>
            <p>En **Vacaciones_Top**, nuestra misión es crear experiencias excepcionales para cada uno de nuestros huéspedes. Buscamos ofrecer un servicio de calidad, atención personalizada y destinos únicos que conviertan cada viaje en una aventura inolvidable. Nos esforzamos por ofrecer la mejor relación calidad-precio y garantizar el bienestar y la satisfacción de quienes confían en nosotros para sus vacaciones.</p>
        </div>
        <div class="vision">
            <h2>Visión</h2>
            <p>Ser la cadena hotelera más reconocida a nivel global, destacándonos por nuestra excelencia en el servicio y por ofrecer experiencias únicas en cada destino. Nuestra visión es crecer de manera sostenible, innovando constantemente en nuestros servicios y manteniendo siempre un enfoque centrado en el cliente. Queremos ser la primera opción de los viajeros que buscan calidad, confort y experiencias inolvidables en cualquier lugar del mundo.</p>
        </div>
    </section>

</body>
</html>
@endsection
