@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes - Paquetes Exóticos</title>
    <style>
        body{
            padding-top: 68px;
        }

        .fondos {
            background-image: url('{{ asset('images/Paquetes.avif') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            padding: 20px; /* Añadido un pequeño margen alrededor */
        }

        :root {
            --card-height: 300px;
            --card-width: calc(var(--card-height) / 1.5);
        }

        * {
            box-sizing: border-box;
        }

        .hero {
            text-align: center;
            padding: 30px 50px;
            margin-bottom: 40px; /* Deja espacio debajo del hero */
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
            width: 100%;
            padding: 20px;
            margin-top: 20px; /* Deja un pequeño espacio entre el hero y las cartas */
        }

        .card {
            width: var(--card-width);
            height: var(--card-height);
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding: 0 36px;
            perspective: 2500px;
            margin: 0;
        }

        .wrapper {
            transition: all 0.5s;
            position: absolute;
            width: 100%;
            z-index: -1;
        }

        .card:hover .wrapper {
            transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
            box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
        }

        .wrapper::before,
        .wrapper::after {
            content: "";
            opacity: 0;
            width: 100%;
            height: 80px;
            transition: all 0.5s;
            position: absolute;
            left: 0;
        }
        .wrapper::before {
            top: 0;
            height: 100%;
            background-image: linear-gradient(
                to top,
                transparent 46%,
                rgba(12, 13, 19, 0.5) 68%,
                rgba(12, 13, 19) 97%
            );
        }
        .wrapper::after {
            bottom: 0;
            opacity: 1;
            background-image: linear-gradient(
                to bottom,
                transparent 46%,
                rgba(12, 13, 19, 0.5) 68%,
                rgba(12, 13, 19) 97%
            );
        }

        .card:hover .wrapper::before,
        .wrapper::after {
            opacity: 1;
        }

        .card:hover .wrapper::after {
            height: 120px;
        }

        .cover-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .title {
            width: 100%;
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            font-size: 1.5rem;
            transform: translate3d(0%, -50px, 100px);
            transition: transform 0.5s;
            font-weight: bold;
        }

        .card:hover .title {
            transform: translate3d(0%, 0, 0);
        }

        .character {
            width: 100%;
            opacity: 0;
            transition: all 0.5s;
            position: absolute;
            z-index: -1;
        }

        .card:hover .character {
            opacity: 1;
            transform: translate3d(0%, -30%, 100px);
        }

        .comments-btn a {
            display: block;
            margin: 30px auto 0;
            padding: 15px 30px;
            background-color: #ff6600; /* Naranja llamativo */
            color: #ffffff; /* Texto blanco */
            text-align: center;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .comments-btn:hover {
            background-color: #ff4500; /* Rojo más oscuro para el hover */
            transform: translateY(-3px);
        }

    </style>
</head>
<body>
  <div class="fondos">

    <div class="hero">
        <h1>Comienza tu viaje con nosotros</h1>
        <p>Explora lugares increíbles y vive experiencias inolvidables.</p>
    </div>

    <div class="cards-container">
        <!-- Card for Cartagena -->
        <a href="https://colombia.travel/es/cartagena" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.pexels.com/photos/12470921/pexels-photo-12470921.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="cover-image" />
                </div>
                <div class="title">Cartagena</div>
                <img src="https://images.unsplash.com/photo-1693969429268-a365dc5c86a1?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="character" />
            </div>
        </a>

        <!-- Card for Bogotá -->
        <a href="https://colombia.travel/es/bogota" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://plus.unsplash.com/premium_photo-1697730030651-3a7aa391b9d6?q=80&w=1888&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Bogotá</div>
                <img src="https://images.pexels.com/photos/10123094/pexels-photo-10123094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="character" />
            </div>
        </a>

        <!-- Card for Medellín -->
        <a href="https://colombia.travel/es/medellin" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.unsplash.com/photo-1551282643-392c82ebb909?q=80&w=1887&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Medellín</div>
                <img src="https://images.pexels.com/photos/14599331/pexels-photo-14599331.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="character" />
            </div>
        </a>

        <!-- Card for Cali -->
        <a href="https://colombia.travel/es/cali" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.pexels.com/photos/27661603/pexels-photo-27661603/free-photo-of-paisaje-naturaleza-punto-de-referencia-agua.jpeg?auto=compress&cs=tinysrgb&w=600" class="cover-image" />
                </div>
                <div class="title">Cali</div>
                <img src="https://images.pexels.com/photos/13708781/pexels-photo-13708781.png?auto=compress&cs=tinysrgb&w=600" class="character" />
            </div>
        </a>

        <!-- Card for Santa Marta -->
        <a href="https://colombia.travel/es/santa-marta" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.pexels.com/photos/2106245/pexels-photo-2106245.jpeg?auto=compress&cs=tinysrgb&w=600" class="cover-image" />
                </div>
                <div class="title">Santa Marta</div>
                <img src="https://images.pexels.com/photos/27375961/pexels-photo-27375961/free-photo-of-mar-vuelo-paisaje-playa.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="character" />
            </div>
        </a>

        <!-- Card for Popayán -->
        <a href="https://colombia.travel/es/popayan" target="_blank">
            <div class="card">
                <div class="wrapper">
                    <img src="https://images.unsplash.com/photo-1581269875754-aea2a9b3970a?q=80&w=1887&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="cover-image" />
                </div>
                <div class="title">Popayán</div>
                <img src="https://images.unsplash.com/photo-1522086605197-deac1ce7566c?q=80&w=1915&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="character" />
            </div>
        </a>
    </div>

    <!-- Botón de comentarios debajo de las cartas -->
    <div class="comments-btn">
        <a href="{{ route('comentarios.index') }}">Deja tu comentario</a>
    </div>
  </div>
</body>
</html>
@endsection
