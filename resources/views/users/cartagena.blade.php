@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartagena de Indias</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> <!-- Usando tipografía Roboto -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlace al archivo CSS -->
    <style>
        /* Reset general */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Fuentes */
body {
  font-family: 'Roboto', sans-serif;
}

/* Fondo de la página */
.fondo {
  position: relative;
  width: 100%;
  height: 100vh;
  background: url('{{ asset("images/fondocar.jpg") }}') no-repeat center center/cover;
}

/* Estilos para el texto sobre el fondo */
.texto-fondo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
}

.texto-fondo h1 {
  font-size: 5rem; /* Aumenté el tamaño del título */
  margin: 0;
}

.texto-fondo p {
  font-size: 2rem; /* Aumenté el tamaño del texto */
}

/* Barra de navegación */
.barra-navegacion {
  position: sticky;
  top: 120px;
  background-color: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.barra-navegacion a {
  text-decoration: none;
  color: black;
  font-size: 1.2rem;
  font-weight: 500;
  transition: color 0.3s, border-bottom 0.3s;
}

.barra-navegacion a:hover {
  color: red;
}

.barra-navegacion a.active {
  border-bottom: 2px solid red;
}

/* Estilo para las imágenes */
.imagen-seccion {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
  border-radius: 10px;
}

/* Descripción de las imágenes */
.descripcion-imagen {
  color: gray;
  font-size: 1.2rem;
  text-align: center;
  margin-top: 10px;
}

/* Títulos destacados */
.titulo-rojo {
  color: red;
  font-size: 2.1rem;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Contenedor principal */
.contenido {
  width: 60%;
  margin: 0 auto;
  padding: 20px;
  font-size: 1.4rem;
  font-weight: bold;
}

/* Estilo de los párrafos */
#debes-saber p,
#que-hacer p,
#destinos-relacionados p,
#hoteleria-restaurantes p {
  text-align: justify;
}

/* Media Queries para Responsividad */

/* Para pantallas grandes (desktops) */
@media (max-width: 1024px) {
  /* Ajuste de la barra de navegación */
  .barra-navegacion a {
    font-size: 1rem;
  }

  /* Ajuste de la imagen y texto */
  .texto-fondo h1 {
    font-size: 3rem;
  }

  .texto-fondo p {
    font-size: 1.5rem;
  }

  .contenido {
    width: 70%;
  }
}

/* Para pantallas medianas (tablets) */
@media (max-width: 768px) {
  .barra-navegacion {
    flex-direction: column;
    padding: 15px 0;
  }

  .barra-navegacion a {
    padding: 10px 15px;
    font-size: 1.1rem;
  }

  /* Ajustes del fondo */
  .texto-fondo h1 {
    font-size: 2.5rem;
  }

  .texto-fondo p {
    font-size: 1.2rem;
  }

  .contenido {
    width: 80%;
  }

  .imagen-seccion {
    width: 100%;
  }

  /* Sección de contenido */
  #debes-saber h2 {
    font-size: 1.8rem;
  }
}

/* Para pantallas pequeñas (móviles) */
@media (max-width: 480px) {
  /* Ajustes generales */
  body {
    font-size: 1rem;
  }

  .barra-navegacion a {
    font-size: 0.9rem;
    padding: 8px;
  }

  .texto-fondo h1 {
    font-size: 2rem;
  }

  .texto-fondo p {
    font-size: 1rem;
  }

  .contenido {
    width: 90%;
  }

  .imagen-seccion {
    width: 100%;
  }

  #debes-saber h2 {
    font-size: 1.5rem;
  }

  .descripcion-imagen {
    font-size: 1rem;
  }

}

/* Sección de contenedores con títulos */
#que-hacer h2,
#destinos-relacionados h2,
#hoteleria-restaurantes h2 {
    color: red; /* Títulos en rojo */
    font-size: 2em; /* Tamaño de fuente del título */
    text-align: center;
    margin-bottom: 30px;
}

/* Contenedor de la cuadrícula */
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

/* Cada ítem de la cuadrícula */
.grid-item {
    position: relative;
    overflow: hidden;
}

/* Estilos de la imagen */
.grid-item img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 10px; /* Bordes redondeados */
}

/* Superposición que aparecerá cuando el cursor pase sobre la imagen */
.overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    width: 80%;
    opacity: 0; /* Inicialmente invisible */
    transition: opacity 0.3s ease; /* Transición suave */
}

/* Estilo para los títulos y párrafos dentro de la superposición */
.overlay h3 {
    margin: 5px 0;
    font-size: 1em; /* Título más pequeño */
    color: red; /* Título en rojo */
}

.overlay p {
    font-size: 0.8em; /* Texto más pequeño */
    margin: 3px 0;
}

/* Mostrar la superposición cuando el cursor pasa por encima */
.grid-item:hover .overlay {
    opacity: 1; /* Hace visible la superposición cuando se pasa el cursor */
}




    </style>
</head>
<body>
    <!-- Imagen de fondo -->
    <div class="fondo">
        <div class="texto-fondo">
            <h1>Cartagena de Indias</h1>
            <p>“La Ciudad Heroica, un lugar mágico junto al mar”</p>
        </div>
    </div>

    <!-- Barra de navegación -->
    <div class="barra-navegacion">
        <a href="#debes-saber" id="link-debes-saber">Debes Saber</a>
        <a href="#que-hacer" id="link-que-hacer">Qué Hacer en Cartagena</a>
        <a href="#destinos-relacionados" id="link-destinos">Destinos Relacionados</a>
        <a href="#hoteleria-restaurantes" id="link-servicios">Hotelería y Restaurantes</a>
    </div>

    <!-- Contenido -->
    <div class="contenido">
        <!-- Sección "Debes Saber" -->
        <div id="debes-saber" style="padding: 50px 20px; text-align: center;">
            <h2 class="titulo-rojo">Descubre Cartagena de Indias, una joya del patrimonio universal</h2>

            <p>Cartagena es una ciudad que está ubicada a orillas del Mar Caribe. Sus calles coloridas llenas de encanto la hacen la puerta de entrada a Suramérica. En Colombia, se encuentra al norte del país, y es la capital de la región de Bolívar. ‘La Heroica’, como la llaman, contempla a su alrededor varios archipiélagos e islas que son paraísos para un verdadero descanso.</p><br>

            <p>Cartagena, suma a sus encantos los atractivos de una intensa vida nocturna, festivales culturales y paisajes exuberantes. Las playas de la ciudad te invitan a hacer turismo, descansar y divertirte con la refrescante brisa y las tibias aguas del mar.</p><br>

            <p>El tiempo en Cartagena de Indias es muy agradable, pues su clima tropical te permitirá gozar de sus playas y otros encantos. La temperatura en Cartagena durante todo el año es de 27°C en promedio. Un clima ideal para conocer la ciudad amurallada, los restaurantes, entre otros lugares emblemáticos de ‘La Heroica’.</p><br>

            <p>Además, Cartagena cuenta con una excelente oferta gastronómica y una importante infraestructura hotelera y turística.</p><br>

            <p>Este fantástico destino guarda los secretos de la historia en su ciudad amurallada, en sus balcones y en sus angostos caminos de piedra que sirvieron de inspiración a <strong><span style="color: red;">Gabriel García Márquez</span></strong>, ganador del premio Nobel de Literatura en 1982.</p><br>

            <p>Enmarcada por una hermosa bahía, Cartagena de Indias es una de las ciudades más bellas y mejor conservadas de América; un tesoro que, hoy en día, es uno de los destinos turísticos más visitados de Colombia.</p><br>

            <!-- Imagen de la antigua plaza de toros -->
            <img class="imagen-seccion" src='{{ asset("images/plazaa.jpg") }}' alt="Antigua plaza de toros de Cartagena">
            <div class="descripcion-imagen">La antigua plaza de toros de Cartagena es ahora el centro comercial La Serrezuela.</div>
        </div>

        <div id="que-hacer" style="padding: 50px 20px; text-align: center;">
        <h2>Qué Hacer en Cartagena</h2>

        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/arroyo.jpg') }}" alt="El arroyo de Matute">
                <div class="overlay">
                    <h3>El arroyo de Matute</h3>
                    <p>El arroyo de Matute, en el municipio de Turbaco, nace de corrientes de agua subterránea alimentadas por las lluvias...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/cienega.jpg') }}" alt="Ciénaga de la Virgen">
                <div class="overlay">
                    <h3>Ciénaga de la Virgen</h3>
                    <p>La ciénaga es un espacio natural con fauna y flora representativa, perfecto para la observación y el ecoturismo...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/rnuñes.jpg') }}" alt="Recorre la Casa de Rafael Núñez">
                <div class="overlay">
                    <h3>Recorre la Casa de Rafael Núñez</h3>
                    <p>La casa del expresidente colombiano Rafael Núñez es una excelente opción para conocer su historia...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/tierra.webp') }}" alt="La isla de Tierra Bomba">
                <div class="overlay">
                    <h3>La isla de Tierra Bomba</h3>
                    <p>Una hermosa isla cercana a Cartagena, ideal para relajarse y disfrutar de su naturaleza y playas...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/nacional.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>El aviario nacional</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/baru.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>La playa de Barú</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/mnd.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>Mindful Diving, el sentido de tu mente</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/crucero.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>Cháter de yates y mega yates</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/ross.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <p>Playas e islas el Rosario</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/Hay-Festival.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Hay Festival</h3>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/solyp.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Sol y playa</h3>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/puerto.jpg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Puerto Velero</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="destinos-relacionados" style="padding: 50px 20px; text-align: center;">
        <h2>Destinos Relacionados</h2>

        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/leticia.jpg') }}" alt="Leticia">
                <div class="overlay">
                    <h3>Leticia</h3>
                    <p>Conoce su riqueza natural y cultural. Desde la ventanilla del avión, a pocos minutos de aterrizar, se ve cómo se extiende una...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/barraanca.jpg') }}" alt="Barranquilla">
                <div class="overlay">
                    <h3>Barranquilla</h3>
                    <p>La ciudad del Carnaval, con su vibrante cultura, playas y una arquitectura moderna que la hace única...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/amazonas.jpg') }}" alt="Amazonas">
                <div class="overlay">
                    <h3>Amazonas</h3>
                    <p>La región selvática del Amazonas te invita a explorar su biodiversidad y comunidades indígenas...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/Bogota2.jpg') }}" alt="Bogotá">
                <div class="overlay">
                    <h3>Bogotá</h3>
                    <p>La capital de Colombia ofrece una mezcla perfecta entre historia, cultura y modernidad...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/sanandres.jpg') }}" alt="San Andrés Isla">
                <div class="overlay">
                    <h3>San Andrés Isla</h3>
                    <p>Un paraíso tropical con playas de arena blanca y aguas cristalinas ideales para el ecoturismo...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/stajpg.jpg') }}" alt="San Andrés Isla">
                <div class="overlay">
                    <h3>Santa Marta</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="hoteleria-restaurantes" style="padding: 50px 20px; text-align: center;">
    <h2>Hoteles y Restaurantes</h2>
    <div class="grid-container">
        <div class="grid-item">
            <img src="{{ asset('images/htojpg.jpg') }}" alt="Hotel Sostenible">
            <div class="overlay">
                <h3>Hoteles sostenibles para tu escapada perfecta</h3>
                <p>Descubre opciones ecológicas que combinan lujo y sostenibilidad.</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="{{ asset('images/hot2jpg.jpg') }}" alt="Hotel Boutique">
            <div class="overlay">
                <h3>Hoteles boutique con experiencias únicas</h3>
                <p>Vive momentos inolvidables en destinos exclusivos.</p>
            </div>
        </div>
        <div class="grid-item">
            <img src="{{ asset('images/gas1.jpg') }}" alt="Cafés Especiales">
            <div class="overlay">
                <h3>Cafés y restaurantes de especialidad</h3>
                <p>Saborea lo mejor de la cultura del café en Colombia.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>


    <script>
        // Marcar el enlace activo
        const links = document.querySelectorAll('.barra-navegacion a');
        window.addEventListener('scroll', () => {
            let current = '';
            links.forEach(link => {
                const section = document.querySelector(link.getAttribute('href'));
                if (section.offsetTop <= window.scrollY + 140 && 
                    section.offsetTop + section.offsetHeight > window.scrollY + 140) {
                    current = link.getAttribute('href');
                }
            });
            links.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>

@endsection
