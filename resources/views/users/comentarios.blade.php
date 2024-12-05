@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios - Agencia de Viajes</title>
    <style>
        /* Establecemos una altura mínima del 100vh para el cuerpo */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 68px;
            min-height: 100vh; /* Asegura que el body tenga al menos el 100% de la altura de la pantalla */
            display: flex;
            flex-direction: column;
            color: white;
        }
        
        /* Fondo con la imagen y configuración para que cubra la pantalla */
        .fondos {
            background-image: url('{{ asset('images/fondocom.png') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .hero {
            text-align: center;
            margin-bottom: 50px;
            opacity: 0;
            animation: fadeIn 2s forwards;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin: 0;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
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

        /* Ajustar el estilo para centrar y aumentar el tamaño del texto */
        .container h2 {
            font-size: 2.5rem; /* Aumentamos el tamaño */
            text-align: center;
            color: #fff; /* Color blanco para contraste */
            margin-bottom: 30px; /* Espacio debajo del título */
        }

        .container {
            background: rgba(0, 0, 0, 0.5); /* Fondo oscuro para que el texto sea legible */
            padding: 40px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
            
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .comments-btn a {
            display: inline-block;
            background-color: #ff6600; /* Color naranja más fuerte para mayor contraste */
            padding: 12px 25px;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            margin-top: 20px;
            text-align: center;
        }

        .comments-btn a:hover {
            background-color: #ff4500; /* Cambio de color al pasar el mouse */
            transform: translateY(-3px);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #fff;
            font-weight: bold;
        }

        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #fff;
            color: #333;
            font-size: 1rem;
        }

        .form-group textarea {
            height: 150px;
            resize: none;
        }

        .form-group button {
            background-color: #ff6600; /* Color del botón */
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .form-group button:hover {
            background-color: #ff4500; /* Cambio al pasar el mouse */
        }

        /* Se agrega el margen inferior para separar el botón del pie de página */
        .comments-btn {
            margin-bottom: 20px; /* Espacio entre el botón y el pie de página */
        }

    </style>
</head>
<body>

  <div class="fondos">

    <div class="hero">
        <h1>¡Comparte tu experiencia!</h1>
        <p>Queremos saber cómo fue tu viaje y qué te parece nuestro servicio. ¡Tu opinión es importante!</p>
    </div>

    <div class="container">
        <h2>Deja tu comentario y valoración</h2>

        <form action="{{ route('comentarios.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="comment">Comentario</label>
                <textarea name="comment" id="comment" placeholder="Escribe tu comentario aquí..." required></textarea>
            </div>

            <div class="form-group">
                <label for="rating">Valoración</label>
                <select name="rating" id="rating" required>
                    <option value="" disabled selected>Selecciona una valoración</option>
                    <option value="1">1 - Muy Malo</option>
                    <option value="2">2 - Malo</option>
                    <option value="3">3 - Regular</option>
                    <option value="4">4 - Bueno</option>
                    <option value="5">5 - Excelente</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit">Enviar Comentario</button>
            </div>
        </form>


    </div>

  </div>

</body>
</html>

@endsection
