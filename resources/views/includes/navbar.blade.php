<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #8d6e63; /* Fondo de color solicitado */
            padding: 10px 20px;
            position: relative;
        }

        /* Contenedor para logo y título */
        .logo-title {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 80px;
            width: 80px;
            border-radius: 50%; /* Hace que el logo sea redondo */
            object-fit: cover; /* Asegura que el logo se recorte bien si tiene otra relación de aspecto */
        }

        .title {
            display: flex;
            align-items: center;
            color: white;
            margin-left: 10px;
        }

        .title span {
            font-weight: bold;
            font-size: 1.5em;
            margin-left: 10px;
        }

        .title small {
            display: block;
            font-size: 0.8em;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            list-style: none;
            padding-left: 0;
            justify-content: center; /* Centra los enlaces */
            flex-grow: 1; /* Permite que los enlaces ocupen el espacio disponible */
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            background-color: #a1887f; /* Fondo diferente para los enlaces */
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-links li a:hover {
            background-color: #7d5d4f; /* Cambio de color en hover */
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: auto; /* Alinea los íconos a la derecha */
        }

        .profile-icon, .language, .hamburger-icon {
            font-size: 1.2em;
            color: white;
            cursor: pointer;
        }

        /* Estilos para el checkbox y el ícono de hamburguesa */
        #menu-toggle {
            display: none;
        }

        .hamburger-icon {
            display: none;
            font-size: 1.5em;
        }

        /* Responsivo: mostrar el ícono de hamburguesa en pantallas pequeñas */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                right: 20px;
                background-color: #8d6e63;
                flex-direction: column;
                gap: 10px;
                padding: 10px;
                border-radius: 5px;
                z-index: 10;
            }

            .hamburger-icon {
                display: block;
            }

            /* Mostrar el menú cuando el checkbox está activado */
            #menu-toggle:checked + .hamburger-icon + .nav-links {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <!-- Contenedor para logo y nombre -->
            <div class="logo-title">
                <div class="logo">
                    <!-- Logo redondo -->
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>
                
                <div class="title">
                    <!-- Título junto al logo -->
                    <span>Vacaciones_Top</span>
                </div>
            </div>

            <!-- Checkbox para controlar el menú -->
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger-icon">☰</label>

            <!-- Enlaces centrados -->
            <ul class="nav-links">
                <li><a href="{{ route('inicio') }}">INICIO</a></li>
                <li><a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a></li>
                <li><a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a></li>
                <li><a href="{{ route('contacto') }}">CONTACTO</a></li>
            </ul>

            <!-- Botones de registro, idioma y logout alineados a la derecha -->
            <div class="icons">
                <!-- Icono de registro, redirige a la página de registro -->
                <span class="profile-icon" onclick="window.location.href='{{ route('register') }}'">👤</span>
                
                <!-- Icono de idioma, cambia entre Español e Inglés -->
                <span class="language" onclick="cambiarIdioma()">ES ▼</span>

                <!-- Formulario de cierre de sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-white flex items-center space-x-2">
                        <!-- Ícono de cerrar sesión -->
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <script>
        // Función para cambiar el idioma, puedes adaptarlo según tus necesidades
        function cambiarIdioma() {
            let currentLanguage = document.querySelector('.language').textContent.trim();
            if (currentLanguage === "ES ▼") {
                document.querySelector('.language').textContent = "EN ▼";
                // Aquí puedes agregar lógica para cambiar el idioma de la página
                // Por ejemplo, haciendo una llamada AJAX o recargando la página con el idioma cambiado
            } else {
                document.querySelector('.language').textContent = "ES ▼";
                // Lógica para cambiar el idioma a español
            }
        }
    </script>
</body>
</html>
