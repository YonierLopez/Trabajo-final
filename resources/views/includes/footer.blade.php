<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Mejorado</title>
    <link href="{{ asset('resources-css-footer.css') }}" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%; /* Asegura que el cuerpo ocupe toda la altura */
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh; /* Esto asegura que el body ocupe al menos la altura total de la ventana */
        }

        main {
            flex-grow: 1; /* Esto permite que el contenido ocupe todo el espacio disponible */
        }

        footer {
            background-color: #000000; 
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: auto; /* Esto hace que el footer se fije en la parte inferior */
            width: 100%;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px 10px;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
        }

        .footer-section h4 {
            font-size: 1.2em;
            margin-bottom: 15px;
            color: #ffd700; 
        }

        .footer-section p,
        .footer-section a {
            margin-bottom: 5px;
            font-size: 0.95em;
            color: #ddd; 
            text-decoration: none;
        }

        .footer-section a:hover {
            color: #f39c12;
            text-decoration: underline;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 15px;
            font-size: 1.5em;
            padding-top: 20px;
        }

        .footer-social a {
            color: #fff;
            transition: color 0.3s ease;
        }

        .footer-social a:hover {
            color: #ffd700; 
        }

        .footer-copy {
            font-size: 0.9em;
            color: #ddd;
            background-color: #03045e;
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }

        @media (max-width: 768px) {
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-section {
                text-align: center;
            }

            .footer-social {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <main>
        <!-- Aquí va el contenido de tu página -->
    </main>

    <footer>
        <div class="footer-bottom">
            <div class="footer-section">
                <h4>LÍNEAS DE ATENCIÓN</h4>
                <p>Calle No #-# Piso #-#<br>Popayán - Colombia</p>
                <p>+57 347776049</p>
                <p>Fax: +57 601 5600104</p>
                <p>Lun - Vi 8:30 A.M. - 5:30 P.M</p>
            </div>
            <div class="footer-section">
                <h4>NUESTROS EJES</h4>
                <p>Morro</p>
                <p>Parque Caldas</p>
                <p>Esmeralda</p>
                <p>Turismo</p>
                <p>Marca País</p>
            </div>
            <div class="footer-section">
                <h4>ENLACES DE INTERÉS</h4>
                <p><a href="{{ route('inicio') }}">INICIO</a></p>
                <p><a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a></p>
                <p><a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a></p>
                <p><a href="{{ route('contacto') }}">CONTACTO</a></p>
            </div>
        </div>

        <!-- Redes sociales (iconos) -->
        <div class="footer-social">
            <a href="#" class="fab fa-facebook-f" target="_blank"></a>
            <a href="#" class="fab fa-twitter" target="_blank"></a>
            <a href="#" class="fab fa-instagram" target="_blank"></a>
        </div>
    </footer>

    <!-- Copywriting -->
    <div class="footer-copy">
        <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </div>
    
    <!-- Font Awesome (para íconos de redes sociales) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
