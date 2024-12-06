<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Wild+Trails&display=swap" rel="stylesheet">

    <style>
        /* Reset básico */
        body {
            margin: 0;
            font-family: 'Wild Trails', cursive;
            background-color: #ffffff;
        }

        .navbar {
            height: 120px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            background-color: #000000; /* Fondo inicial */
            color: white;
            width: 100%;
            box-sizing: border-box;
            z-index: 1000;
            transition: background-color 0.3s ease, opacity 0.3s ease;
        }

        /* Cuando la barra se vuelve transparente al hacer scroll */
        .navbar.transparent {
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro con opacidad */
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 70px;
            width: 70px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .divider {
            width: 1px;
            height: 30px;
            margin: 0 15px;
            background-color: white;
        }

        .brand-text {
            font-weight: bold;
            font-size: 24px;
            font-family: 'Wild Trails', cursive;
        }

        .highlight-yellow {
            color: #ffd700;
        }

        .highlight-blue {
            color: #003af1;
        }

        .highlight-red {
            color: #f11200;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 18px;
            position: relative;
            font-family: 'Wild Trails', cursive;
            padding-bottom: 5px;
        }

        .nav-links a:first-child {
            text-shadow: 1px 1px 2px #ffd700; /* Sombra amarilla */
        }

        .nav-links a:nth-child(2) {
            text-shadow: 1px 1px 2px #ffd700; /* Sombra amarilla */
        }

        .nav-links a:nth-child(3) {
            text-shadow: 1px 1px 2px #003af1; /* Sombra azul */
        }

        .nav-links a:nth-child(4) {
            text-shadow: 1px 1px 2px #f11200; /* Sombra roja */
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
        }

        .nav-links a:first-child:hover::after,
        .nav-links a:first-child.active::after {
            background-color: #ffd700; /* Línea amarilla */
        }

        .nav-links a:nth-child(2):hover::after,
        .nav-links a:nth-child(2).active::after {
            background-color: #ffd700; /* Línea amarilla */
        }

        .nav-links a:nth-child(3):hover::after,
        .nav-links a:nth-child(3).active::after {
            background-color: #003af1; /* Línea azul */
        }

        .nav-links a:nth-child(4):hover::after,
        .nav-links a:nth-child(4).active::after {
            background-color: #f11200; /* Línea roja */
        }

        .iconos {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .icono-perfil {
            font-size: 26px;
            cursor: pointer;
        }

        .idioma {
            font-size: 18px;
            cursor: pointer;
        }

        form {
            margin: 0;
            display: flex;
            align-items: center;
        }

        form button {
            background: none;
            border: none;
            color: white;
            font-size: 26px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .navbar::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, #ffcf2b, #003af1, #f11200);
        }

        /* Estilos para el menú hamburguesa */
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
        }

        .hamburger div {
            width: 30px;
            height: 3px;
            background-color: white;
        }

        .menu-hamburguesa {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 100px;
            left: 0;
            background-color: #041814;
            width: 100%;
            padding: 20px;
            gap: 20px;
        }

        .menu-hamburguesa a {
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 0;
            display: block;
            text-align: center;
        }

        .menu-hamburguesa .icono-perfil, .menu-hamburguesa .idioma, .menu-hamburguesa form button {
            color: white;
            font-size: 26px;
        }

        /* Mostrar el menú hamburguesa cuando se activa */
        .hamburger.active + .menu-hamburguesa {
            display: flex;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .iconos {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .logo-section {
                justify-content: center;
                width: 100%;
            }

            .brand-text {
                font-size: 20px;
            }

            /* Cambio en el borde activo para pantallas pequeñas */
            .nav-links a:hover::after,
            .nav-links a.active::after {
                left: unset;
                right: 0;
            }
        }

        @media (max-width: 480px) {
            .brand-text {
                font-size: 18px;
            }

            .iconos {
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Vacaciones" class="logo">
            <div class="divider"></div>
            <span class="brand-text">
                <span class="highlight-yellow">VACACI</span><span class="highlight-blue">ONES_</span><span class="highlight-red">TOP</span>
            </span>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <!-- Menú desplegable -->
        <div class="menu-hamburguesa">
            <a href="{{ route('inicio') }}">INICIO</a>
            <a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a>
            <a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a>
            <a href="{{ route('contacto') }}">CONTACTO</a>
            <!-- Iconos en el menú desplegable -->
            <div class="icono-perfil" onclick="window.location.href='{{ route('register') }}'"><i class="fas fa-user-circle"></i></div>
            <div class="idioma">ES ▼</div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i></button>
            </form>
        </div>

        <!-- Barra de navegación en pantallas grandes -->
        <div class="nav-links">
            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">INICIO</a>
            <a href="{{ route('sobreNosotros') }}" class="{{ request()->routeIs('sobreNosotros') ? 'active' : '' }}">SOBRE NOSOTROS</a>
            <a href="{{ route('planesTuristicos') }}" class="{{ request()->routeIs('planesTuristicos') ? 'active' : '' }}">PLANES TURISTICOS</a>
            <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">CONTACTO</a>
        </div>

        <!-- Iconos en pantallas grandes -->
        <div class="iconos">
            <div class="icono-perfil" onclick="window.location.href='{{ route('register') }}'"><i class="fas fa-user-circle"></i></div>
            <div class="idioma">ES ▼</div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i></button>
            </form>
        </div>
    </header>

    <script>
        // Función para agregar/quitar la clase 'transparent' al hacer scroll
        window.onscroll = function() {
            var navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('transparent');
            } else {
                navbar.classList.remove('transparent');
            }
        };

        // Función para alternar el menú hamburguesa
        function toggleMenu() {
            document.querySelector('.hamburger').classList.toggle('active');
        }
    </script>
</body>
</html>
