@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes - Paquetes Exóticos</title>
    <style>
        body {
            padding-top: 120px;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .fondos {
            background-image: url('{{ asset('images/paquetes.avif') }}');
            background-size: cover;
            background-position: center;
            height: 85vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .hero {
            text-align: center;
            padding: 30px 50px;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 15px 0;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
            font-weight: bold;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            background-color: #495057;
        }

        .card {
            width: 300px;
            height: 400px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            perspective: 2500px;
        }

        .wrapper {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.5s, box-shadow 0.5s;
        }

        .card:hover .wrapper {
            transform: perspective(900px) translateY(-5%) rotateX(15deg);
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3);
        }

        .cover-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .title {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            font-size: 1.5rem;
            font-weight: bold;
        }

        .character {
            width: 100%;
            opacity: 0;
            position: absolute;
            bottom: 0;
            transition: opacity 0.5s, transform 0.5s;
        }

        .card:hover .character {
            opacity: 1;
            transform: translateY(-20%);
        }

        .buttons-container {
            display: flex;
            background-color: #495057;
            justify-content: center;
            gap: 20px;
        }

        .comments-btn a {
            display: block;
            max-width: 200px;
            padding: 15px 30px;
            background-color: #14213d;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s;
        }

        .comments-btn a:hover {
            background-color: #403d39;
            transform: translateY(-3px);
        }

        /* Responsividad */
        @media (max-width: 1200px) {
            .cards-container {
                flex-wrap: wrap;
                gap: 15px;
            }

            .card {
                width: calc(50% - 20px);
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
                gap: 20px;
            }

            .card {
                width: 100%;
            }

            .comments-btn a {
                max-width: 90%;
                font-size: 1rem;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="fondos">
        <div class="hero">
            <h1>Comienza tu viaje con nosotros</h1>
            <p>Explora lugares increíbles y vive experiencias inolvidables.</p>
        </div>
    </div>

    <div class="cards-container">
          <!-- Card for Cartagena -->
          <a href="{{ route('cartagena') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.pexels.com/photos/12470921/pexels-photo-12470921.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="cover-image" />
                </div>
                <div class="title">Cartagena</div>
                <img src="https://images.unsplash.com/photo-1693969429268-a365dc5c86a1?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="character" />
            </div>
        </a>

        <!-- Card for Bogotá -->
        <a href="{{ route('bogota') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="https://plus.unsplash.com/premium_photo-1697730030651-3a7aa391b9d6?q=80&w=1888&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Bogotá</div>
                <img src="https://images.pexels.com/photos/10123094/pexels-photo-10123094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="character" />
            </div>
        </a>

        <!-- Card for Medellín -->
        <a href="{{ route('medellin') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.unsplash.com/photo-1551282643-392c82ebb909?q=80&w=1887&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Medellín</div>
                <img src="https://images.pexels.com/photos/12238759/pexels-photo-12238759.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="character" />
            </div>
        </a>

        <!-- Card for Popayán -->
        <a href="{{ route('popayan') }}">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.unsplash.com/photo-1581269875754-aea2a9b3970a?q=80&w=1887&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Popayán</div>
                <img src="https://images.unsplash.com/photo-1522086605197-deac1ce7566c?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="character" />
            </div>
        </a>
    </div>

    <div class="buttons-container">
        <div class="comments-btn">
            <a href="{{ route('comentarios.index') }}">Deja tus opiniones aquí</a>
        </div>
        <div class="comments-btn">
            <a href="{{ route('reserva') }}">Reservar ahora mismo</a>
        </div>
    </div>
</body>
</html>
@endsection
