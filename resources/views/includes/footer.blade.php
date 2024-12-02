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

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh; /* Asegura que el body ocupe todo el alto de la pantalla */
            display: flex;
            flex-direction: column;
        }

        footer {
            background-color: #274c77; /* Azul oscuro consistente */
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-around;
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
            color: #80b3ff; /* Azul brillante */
        }

        .footer-section p,
        .footer-section a {
            margin-bottom: 5px;
            font-size: 0.95em;
            color: #ddd; /* Gris claro */
            text-decoration: none;
        }

        .footer-section a:hover {
            color: #80b3ff; /* Azul brillante */
            text-decoration: underline;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 15px;
            font-size: 1.5em;
            padding-top: 20px;
        }

        /* Estilo para el copywriting al final */
        .footer-copy {
            font-size: 0.9em;
            color: #ddd;
            background-color: #000; /* Negro sólido */
            width: 100%; /* Asegura que ocupe todo el ancho */
            text-align: center;
            padding: 10px 0;
        }

        /* Responsivo para pantallas pequeñas */
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
    </footer>

    <!-- Copywriting -->
    <div class="footer-copy">
        <p>&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
    </div>
</body>
</html>