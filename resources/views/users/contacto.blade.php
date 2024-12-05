<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación</title>
    <!-- Enlace a Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset básico */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .navbar {
            height: 120px; /* Altura de la barra */
            position: fixed; /* Fija la barra al hacer scroll */
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px; /* Espaciado horizontal */
            background-color: #1A1A1A80; /* Color de fondo predeterminado */
            color: white;
            width: 100%; /* Ocupar todo el ancho */
            box-sizing: border-box;
            z-index: 1000; /* Asegura que la barra esté por encima de otros elementos */
            transition: background-color 0.3s ease; /* Transición para el cambio de color */
        }

        .logo-section {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 70px; /* Tamaño del logo */
            width: 70px; /* Tamaño del logo */
            border-radius: 50%; /* Logo circular */
            margin-right: 10px;
        }

        /* Línea divisoria entre el logo y el nombre */
        .divider {
            width: 1px; /* Línea divisoria vertical */
            height: 50px; /* Altura de la línea */
            margin: 0 15px;
            background-color: white; /* Color de la línea */
        }

        .brand-text {
            font-weight: bold;
            font-size: 24px; /* Texto más grande */
            font-family: 'Arial', sans-serif; /* Fuente redondeada */
        }

        .highlight {
            color: #ffd700; /* Color dorado */
        }

        .nav-links {
            display: flex;
            gap: 30px; /* Más espacio entre enlaces */
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 18px; /* Texto más grande */
            position: relative;
            padding-bottom: 5px;
            font-family: 'Arial', sans-serif; /* Fuente redondeada */
            text-shadow: 0 0 5px black, 0 0 10px black; /* Contorno de las letras */
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            content: "";
            position: absolute;
            bottom: -5px; /* Separación del borde */
            left: 0;
            width: 100%;
            height: 3px;
            background-color: red; /* Línea roja debajo del enlace */
        }

        .iconos {
            display: flex;
            align-items: center;
            gap: 25px; /* Más espacio entre iconos */
        }

        .icono-perfil {
            font-size: 26px; /* Iconos más grandes */
            cursor: pointer;
        }

        .idioma {
            font-size: 18px; /* Texto más grande */
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
            font-size: 26px; /* Icono más grande */
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        /* Barra de colores inferior */
        .navbar::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%; /* Ocupar todo el ancho */
            height: 10px;
            background: linear-gradient(to right, #228B22, #FF1493, #FFC0CB, #0000FF, #FFD700);
        }
    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Vacaciones" class="logo">
            <div class="divider"></div> <!-- Línea divisoria -->
            <span class="brand-text">VACACIONES <span class="highlight">_TOP</span></span>
        </div>
        <nav class="nav-links">
        <a href="{{ route('inicio') }}">INICIO</a>
        <a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a>
        <a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a>
        <a href="{{ route('contacto') }}">CONTACTO</a>
        </nav>
        <div class="iconos">
            <span class="icono-perfil" onclick="window.location.href='{{ route('register') }}'">👤</span>
            <span class="idioma" onclick="cambiarIdioma()">ES ▼</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" title="Cerrar sesión">
                    <i class="fas fa-sign-out-alt"></i> <!-- Ícono de cerrar sesión -->
                </button>
            </form>
        </div>
    </header>

    <script>
        window.onscroll = function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 10) {
                navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.8)'; // Fondo negro transparente al hacer scroll
            } else {
                navbar.style.backgroundColor = '#1A1A1A80'; // Fondo original
            }
        };

        const translations = {};

        async function loadTranslations(lang) {
            // Cargar archivo de traducción dinámicamente
            const response = await fetch(`/translations/${lang}.json`);
            translations[lang] = await response.json();

            // Aplicar traducciones a los elementos del DOM
            document.querySelector("[data-translate='home']").textContent = translations[lang]["home"];
            document.querySelector("[data-translate='about']").textContent = translations[lang]["about"];
            document.querySelector("[data-translate='plans']").textContent = translations[lang]["plans"];
            document.querySelector("[data-translate='contact']").textContent = translations[lang]["contact"];
        }

        function cambiarIdioma() {
            const currentLang = document.querySelector('.idioma').textContent.trim().split(' ')[0];
            const newLang = prompt("Seleccione un idioma: ES (Español), EN (Inglés), FR (Francés), DE (Alemán), IT (Italiano), PT (Portugués)");
            if (newLang) {
                loadTranslations(newLang.toLowerCase());
                document.querySelector('.idioma').textContent = `${newLang.toUpperCase()} ▼`;
            }
        }
    </script>
</body>
</html>
