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
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .barra-navegacion {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #274c77;
            padding: 10px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            position: relative;
            animation: deslizamiento 0.5s ease-out;
            margin: 0;
        }

        @keyframes deslizamiento {
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
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ffffff;
        }

        .titulo {
            display: flex;
            align-items: center;
            color: white;
            margin-left: 10px;
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .titulo span {
            font-size: 2em;
            color: #ADE8F4;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .titulo small {
            display: block;
            font-size: 0.9em;
            color: #f39c12;
        }

        .enlaces-nav {
            display: flex;
            gap: 20px;
            list-style: none;
            padding-left: 0;
            justify-content: center;
            flex-grow: 1;
        }

        .enlaces-nav li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            background-color: #274c77;
            padding: 10px 15px;
            border-radius: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        .enlaces-nav li a:hover {
            background-color: #274c77;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
        }

        .iconos {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-left: auto;
        }

        .icono-perfil, .idioma, .icono-hamburguesa {
            font-size: 1.5em;
            color: #f1c40f;
            cursor: pointer;
            transition: transform 0.3s, color 0.3s;
        }

        .icono-perfil:hover, .idioma:hover, .icono-hamburguesa:hover {
            transform: rotate(15deg);
            color: #f39c12;
        }

        #menu-toggle {
            display: none;
        }

        .icono-hamburguesa {
            display: none;
            font-size: 2em;
        }

        /* Estilo cuando el menú es responsive */
        @media (max-width: 768px) {
            .enlaces-nav {
                display: none;
                position: absolute;
                top: 70px;
                right: 20px;
                background: rgba(40, 76, 119, 0.9);
                flex-direction: column;
                gap: 10px;
                padding: 10px;
                border-radius: 10px;
                z-index: 10;
            }

            .iconos {
                display: none; /* Se ocultan los íconos de perfil, idioma y cerrar sesión */
            }

            .icono-hamburguesa {
                display: block; /* Se muestra el ícono hamburguesa */
            }

            #menu-toggle:checked + .icono-hamburguesa + .enlaces-nav {
                display: flex; /* El menú se despliega */
            }

            /* Cuando el menú está abierto, los íconos se muestran debajo de los enlaces del menú */
            #menu-toggle:checked + .icono-hamburguesa + .enlaces-nav + .iconos {
                display: flex;
                flex-direction: column; /* Los íconos se apilan debajo */
                gap: 10px;
                margin-top: 10px; /* Separación entre el menú y los íconos */
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="barra-navegacion">
            <div class="titulo">
                <span>Vacaciones_Top</span>
            </div>

            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="icono-hamburguesa">☰</label>

            <ul class="enlaces-nav">
                <li><a href="{{ route('inicio') }}">INICIO</a></li>
                <li><a href="{{ route('sobreNosotros') }}">SOBRE NOSOTROS</a></li>
                <li><a href="{{ route('planesTuristicos') }}">PLANES TURISTICOS</a></li>
                <li><a href="{{ route('contacto') }}">CONTACTO</a></li>
            </ul>

            <div class="iconos">
                <span class="icono-perfil" onclick="window.location.href='{{ route('register') }}'">👤</span>
                <span class="idioma" onclick="cambiarIdioma()">ES ▼</span>
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <button type="submit" class="text-white flex items-center space-x-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <script>
        function cambiarIdioma() {
            let currentLanguage = document.querySelector('.idioma').textContent.trim();
            if (currentLanguage === "ES ▼") {
                document.querySelector('.idioma').textContent = "EN ▼";
            } else {
                document.querySelector('.idioma').textContent = "ES ▼";
            }
        }
    </script>
</body>
</html>
