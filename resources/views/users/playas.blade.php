@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacaciones_Top - Hoteles en el Mar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            text-align: center;
            padding: 2rem;
            background-color: #0078d4;
            color: white;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.2rem;
        }

        .hotels {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            padding: 2rem;
        }

        .hotel {
            width: 300px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hotel:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .hotel img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .hotel-content {
            padding: 1.5rem;
            text-align: center;
        }

        .hotel-content h2 {
            font-size: 1.5rem;
            color: #0078d4;
            margin-bottom: 1rem;
        }

        .hotel-content p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1rem;
        }

        .hotel-content a {
            text-decoration: none;
            color: white;
            background-color: #28a745; /* Color verde para el botón "Comprar" */
            padding: 0.7rem 1.5rem;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .hotel-content a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hoteles en el Mar</h1>
        <p>Hospédate en los mejores hoteles frente al mar en Colombia. Relájate con vistas espectaculares y servicios de lujo.</p>
    </header>

    <section class="hotels">
        <!-- Hotel en Cartagena -->
        <div class="hotel">
            <img src="https://images.pexels.com/photos/5849096/pexels-photo-5849096.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hotel en Cartagena">
            <div class="hotel-content">
                <h2>Hotel Caribe - Cartagena</h2>
                <p>Ubicado en la heroica, este hotel ofrece vistas al Caribe, piscinas infinitas y la mejor gastronomía.</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <!-- Hotel en San Andrés -->
        <div class="hotel">
            <img src="https://images.pexels.com/photos/3468855/pexels-photo-3468855.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hotel en San Andrés">
            <div class="hotel-content">
                <h2>Hotel Decameron - San Andrés</h2>
                <p>Disfruta de playas de arena blanca y el mar de los siete colores con todo incluido.</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <!-- Hotel en Santa Marta -->
        <div class="hotel">
            <img src="https://images.pexels.com/photos/3471426/pexels-photo-3471426.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hotel en Santa Marta">
            <div class="hotel-content">
                <h2>Hotel Irotama - Santa Marta</h2>
                <p>Ubicado frente al Parque Tayrona, ideal para quienes buscan naturaleza y playa en un solo lugar.</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <!-- Hotel en La Guajira -->
        <div class="hotel">
            <img src="https://images.pexels.com/photos/3471403/pexels-photo-3471403.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hotel en La Guajira">
            <div class="hotel-content">
                <h2>Cabo de la Vela Resort</h2>
                <p>Un refugio en el desierto con vistas espectaculares al mar y experiencias culturales Wayúu.</p>
                <a href="#">Comprar</a>
            </div>
        </div>

        <!-- Hotel en Nuquí -->
        <div class="hotel">
            <img src="https://images.pexels.com/photos/5728971/pexels-photo-5728971.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Hotel en Nuquí">
            <div class="hotel-content">
                <h2>Ecohotel Playa Huina - Nuquí</h2>
                <p>Un paraíso ecológico en el Chocó, rodeado de selva y el impresionante océano Pacífico.</p>
                <a href="#">Comprar</a>
            </div>
        </div>
    </section>
</body>
</html>


@endsection
