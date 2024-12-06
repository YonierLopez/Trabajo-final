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
            background-color: #023047;
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

        /* Mission and Vision Section */
        .mission-vision {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #f0f0f0;
        }

        .mission-vision .mission, 
        .mission-vision .vision {
            display: flex;
            width: 100%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            justify-content: space-between;
            align-items: stretch;
        }

        .mission-vision .mission .image, 
        .mission-vision .vision .image {
            flex: 1;
            padding-top: 30px;
            margin-right: 20px;
            height: 100%;
            display: flex;
            border-radius: 8px;
            overflow: hidden;
        }

        .mission-vision .mission .image img,
        .mission-vision .vision .image img {
          width: 100%;
          height: auto;  /* Mantener la proporción */
          max-height: 250px; /* Ajusta este valor según tus necesidades */
          object-fit: cover; /* Asegura que la imagen cubra el área sin distorsionarse */
        }  

        .mission-vision .mission .text,
        .mission-vision .vision .text {
            flex: 1;
            text-align: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
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

        /* Invert the layout for the Vision section */
        .mission-vision .vision {
            flex-direction: row-reverse; /* Invert the order of the image and text */
        }

        /* About Us Section */
        .about-us {
            padding: 40px 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 10px;
        }

        .about-us .text {
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-us h2 {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .mission-vision .mission,
            .mission-vision .vision {
                flex-direction: column;
            }

            .mission-vision .mission .image,
            .mission-vision .mission .text,
            .mission-vision .vision .image,
            .mission-vision .vision .text {
                width: 100%;
                margin: 10px 0;
            }

            .mission-vision .mission .image img,
            .mission-vision .vision .image img {
                height: auto;
                width: 100%;
            }

            .mission-vision .mission .text,
            .mission-vision .vision .text {
                padding: 10px;
            }

            .about-us .text {
                padding: 0 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>VACACIONES_TOP</h1>
        <p>"Descubre el mundo, a tu modo"</p>
        <a href="{{ route('planesTuristicos') }}" class="btn">Contáctanos</a>
    </section>

    <!-- Mission Section -->
    <section class="mission-vision">
        <!-- Misión -->
        <div class="mission">
            <div class="image">
                <img src="images/mision.png" alt="Misión">
            </div>
            <div class="text">
                <h2>Misión</h2>
                <p>Brindar a los viajeros experiencias seguras y enriquecedoras mediante el acceso en tiempo real a información útil y confiable sobre los lugares que visitan. Nos comprometemos a ofrecer servicios turísticos de calidad, transparentes y accesibles, garantizando la satisfacción y la seguridad de nuestros clientes en cada paso de su viaje.</p>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="mission-vision">
        <!-- Visión -->
        <div class="vision">
            <div class="image">
                <img src="images/vision.jpg" alt="Visión">
            </div>
            <div class="text">
                <h2>Visión</h2>
                <p>Ser la plataforma de turismo más confiable y segura para los viajeros, destacándonos por nuestra innovación en la oferta de información en tiempo real sobre destinos turísticos. Nos proyectamos como líderes en ofrecer servicios turísticos personalizados, con un enfoque en la seguridad, el bienestar y la satisfacción total de nuestros clientes.</p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="text">
            <h2>Nuestra Historia</h2>
            <p>Nuestro proyecto nació en un espacio de colaboración entre un grupo de compañeros visionarios que compartían una preocupación común: la seguridad y bienestar de los viajeros en destinos desconocidos. Durante varias reuniones, debatimos sobre las crecientes preocupaciones de los turistas respecto a la seguridad en zonas con alto riesgo, tanto por desastres naturales como por inseguridad social. A partir de esa reflexión, surgió la idea de crear un sistema innovador que brindara a los viajeros acceso en tiempo real a información sobre los lugares más peligrosos de la zona en la que se encuentren, permitiéndoles tomar decisiones más informadas y seguras durante su travesía.</p>
            <p>Además, para mejorar aún más la experiencia del viajero, decidimos incorporar un sistema adicional que permitiría a los turistas conocer los precios aproximados de productos y servicios en su destino, evitando estafas o precios excesivos. Aunque este sistema aún no está disponible debido a limitaciones de tiempo y personal, está planeado para ser implementado en el futuro próximo. Así, trabajamos para ofrecer una experiencia más segura y auténtica a todos los viajeros, brindándoles no solo una excelente oferta turística, sino también la tranquilidad de viajar con confianza.</p>
        </div>
    </section>

</body>
</html>

@endsection
