<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Interactivo</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5; /* Fondo suave */
            margin: 0; /* Asegura que no haya márgenes */
            padding: 0; /* Asegura que no haya relleno */
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #274c77; /* Color azul sólido */
            padding: 10px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Sombra sutil */
            border-radius: 10px;
            position: relative;
            animation: slideIn 0.5s ease-out; /* Animación de entrada */
            margin: 0; /* Asegura que no haya margen extra */
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo img {
            height: 80px;
            width: 80px;
            border-radius: 50%; /* Logo redondo */
            object-fit: cover;
            border: 4px solid #ffffff; /* Borde blanco alrededor del logo */
        }

        .title {
            display: flex;
            align-items: center;
            color: white;
            margin-left: 10px;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .title span {
            font-size: 2em;
            color: #ADE8F4; /* Color dorado para el título */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .title small {
            display: block;
            font-size: 0.9em;
            color: #f39c12; /* Color más claro */
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            padding-left: 0;
            justify-content: center;
            flex-grow: 1;
        }

        .nav-links li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            background-color: #274c77; /* Fondo de botón */
            padding: 10px 15px;
            border-radius: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s; /* Efecto de transición */
        }

        .nav-links li a:hover {
            background-color: #274c77; /* Cambio de color al pasar el cursor */
            transform: translateY(-3px); /* Efecto de elevación */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); /* Efecto de sombra al pasar el cursor */
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: auto;
        }

        .profile-icon, .language, .hamburger-icon {
            font-size: 1.5em;
            color: #f1c40f; /* Color dorado */
            cursor: pointer;
            transition: transform 0.3s, color 0.3s; /* Efecto de transición */
        }

        .profile-icon:hover, .language:hover, .hamburger-icon:hover {
            transform: rotate(15deg); /* Efecto de rotación al pasar el cursor */
            color: #f39c12; /* Cambio de color de los íconos */
        }

        /* Estilos para el checkbox y el ícono de hamburguesa */
        #menu-toggle {
            display: none;
        }

        .hamburger-icon {
            display: none;
            font-size: 2em;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                right: 20px;
                background: rgba(40, 76, 119, 0.9); /* Fondo semitransparente */
                flex-direction: column;
                gap: 10px;
                padding: 10px;
                border-radius: 10px;
                z-index: 10;
            }

            .hamburger-icon {
                display: block;
            }

            #menu-toggle:checked + .hamburger-icon + .nav-links {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="title">
                <span>Vacaciones_Top</span>
            </div>

            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger-icon">☰</label>

            <ul class="nav-links">
                <li><a href="{{ route('inicio') }}">INICIO</a></li>
                <li><a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a></li>
                <li><a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a></li>
                <li><a href="{{ route('contacto') }}">CONTACTO</a></li>
            </ul>

            <div class="icons">
                <span class="profile-icon" onclick="window.location.href='{{ route('register') }}'">👤</span>
                <span class="language" onclick="cambiarIdioma()">ES ▼</span>
                <form method="POST" action="{{ route('logout') }}">
                    <button type="submit" class="text-white flex items-center space-x-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <script>
        function cambiarIdioma() {
            let currentLanguage = document.querySelector('.language').textContent.trim();
            if (currentLanguage === "ES ▼") {
                document.querySelector('.language').textContent = "EN ▼";
            } else {
                document.querySelector('.language').textContent = "ES ▼";
            }
        }
    </script>
</body>
</html>
