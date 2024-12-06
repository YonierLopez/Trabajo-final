@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explora Colombia</title>
    <style>
        

        /* Ajuste para el espacio debajo del navbar */
        .content-wrapper {
            margin-top: 120px;
        }

        /* Definir el estilo del header */
        .header-section {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('https://images.pexels.com/photos/142497/pexels-photo-142497.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center/cover;
            height: 90vh; /* Ajuste para que el header no ocupe toda la pantalla */
            position: relative;
        }

        .header-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .header-section .content {
            position: relative;
            z-index: 2;
        }

        .header-section h1 {
            font-size: 3.5em;
            margin: 0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .header-section p {
            font-size: 1.5em;
            margin: 10px 0;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .header-section .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            font-size: 1em;
            color: white;
            text-decoration: none;
            background-color: #283618;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .header-section .btn:hover {
            background-color: #606c38;
            transform: translateY(-3px);
        }

        .sections {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 40px 20px;
            background-color: #283618;
        }

        .card {
            background: #606c38;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            border-radius: 8px;
        }

        .card h3 {
            margin: 20px 0 10px;
            font-size: 1.5em;
        }

        .card p {
            font-size: 1em;
            margin: 0 0 10px;
        }

        .card .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            color: white;
            text-decoration: none;
            background-color: #84a98c;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
        }

        .card .btn:hover {
            background-color: #cad2c5;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <section class="header-section">
            <div class="overlay"></div>
            <div class="content">
                <h1>Explora Colombia</h1>
                <p>Un paraíso por descubrir</p>
                <a href="{{ route('planesTuristicos') }}" class="btn">Inicia tu aventura</a>
            </div>
        </section>

        <section id="explorar" class="sections">
            <div class="card">
                <img src="{{ asset('images/fonfopi.jpg') }}" alt="Acampa bajo las estrellas">
                <h3>Acampa Bajo las Estrellas</h3>
                <p>Vive noches mágicas bajo cielos despejados en los Andes colombianos.</p>
                <a href="{{ route('montañas') }}" class="btn">Descubre más</a>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/4666753/pexels-photo-4666753.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Ver ballenas jorobadas">
                <h3>Encuentra Ballenas Jorobadas</h3>
                <p>Descubre los tres lugares en los que puedes hallar ballenas jorobadas</p>
                <a href="{{ route('Ballenas') }}" class="btn">Descubre más</a>
            </div>
            <div class="card">
                <img src="https://images.pexels.com/photos/13833970/pexels-photo-13833970.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Planea tu aventura">
                <h3>Planea Tu Próxima Aventura</h3>
                <p>Recorre las playas del Caribe, las selvas del Amazonas y mucho más.</p>
                <a href="{{ route('planesTuristicos') }}" class="btn">Descubre lo que tenemos para ti</a>
            </div>
        </section>
    </div>
</body>
</html>

@endsection
