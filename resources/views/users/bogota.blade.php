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
  background: url('{{ asset("images/b8.webp") }}') no-repeat center center/cover;
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
            <h1>Bogotá</h1>
            <p>"Corazón de Colombia, donde la tradición y la modernidad se encuentran en cada esquina."</p>
        </div>
    </div>

    <!-- Barra de navegación -->
    <div class="barra-navegacion">
        <a href="#debes-saber" id="link-debes-saber">Debes Saber</a>
        <a href="#que-hacer" id="link-que-hacer">Qué Hacer en Bogotá</a>
        <a href="#destinos-relacionados" id="link-destinos">Destinos Relacionados</a>
        <a href="#hoteleria-restaurantes" id="link-servicios">Hotelería y Restaurantes</a>
    </div>

    <!-- Contenido -->
    <div class="contenido">
        <!-- Sección "Debes Saber" -->
        <div id="debes-saber" style="padding: 50px 20px; text-align: center;">
            <h2 class="titulo-rojo">Historia y modernidad en un solo lugar</h2>

            <p>Bogotá es la capital y la ciudad más grande de Colombia. Es punto de convergencia de personas de todo el país, así que es diversa y multicultural, y en ella se combinan lo antiguo y lo moderno.</p><br>

            <p>Si quieres viajar a Colombia, seguro te estás preguntando ¿dónde está ubicada Bogotá? Pues bien, la capital del país tiene una ubicación privilegiada, se encuentra en medio de una abundante vegetación que logra uno de los paisajes verdes más hermosos del continente. Está en el centro del territorio colombiano, en el altiplano cundiboyacense y sobre la sabana que lleva su mismo nombre. La ciudad hace parte de la región Andina, una de las seis regiones del país.</p><br>

            <p>Bogotá es verde gracias a sus parques y a los cerros orientales que dominan los santuarios de Monserrate y Guadalupe. Pocas urbes tienen un paisaje como el que los bogotanos disfrutan a diario, cuando su mirada se pierde en esa especie de mar verde que forma la Cordillera de los Andes, en las montañas que se elevan sobre el oriente.</p><br>

            <p>El clima o temperatura que puedes encontrar en Bogotá tiene mucho que ver con la ubicación estratégica de la ciudad. Al tener una altura de 2.600 metros y estar rodeada de montañas, su clima o temperatura durante el día es templado con un promedio es de 19 °C, bajando un poco en las noches. Por esta razón, la ropa de otoño es perfecta para disfrutar del tiempo de Bogotá.</p><br>

            <p>A la hora de visitar la ciudad, podrás maravillarte con el encanto de su arquitectura. En Bogotá encontrarás como se mezclan diferentes estilos, desde edificios modernos, hasta las fachadas de casas antiguas que son auténticos tesoros coloniales.</p><br>

            <p>Gracias a esta fusión entre pasado y presente, en la capital encontrarás un destino ideal con historia, diversión, gastronomía, cultura, negocios y mucho más.</p><br>

            <p>Aquí, todas las culturas de todas las regiones tienen cabida, desde la gastronomía de la zona cafetera hasta la alegría de la región Caribe, pasando por el legado artesanal de Boyacá y la fiesta del Valle del Cauca. La capital es la unión de todo lo mejor de Colombia y por ello es un lugar que debes conocer.</p><br>

            <!-- Imagen de la antigua plaza de toros -->
            <img class="imagen-seccion" src='{{ asset("images/bb.jpg") }}' alt="Antigua plaza de toros de Cartagena">
            <div class="descripcion-imagen">Conoce Monserrate, uno de los referentes turísticos más importantes de la ciudad.</div>
        </div>

        <div id="que-hacer" style="padding: 50px 20px; text-align: center;">
        <h2>¿Qué hacer en Bogotá?</h2>

        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/b1.jpeg') }}" alt="El arroyo de Matute">
                <div class="overlay">
                    <h3>El arroyo de Matute</h3>
                    <p>El arroyo de Matute, en el municipio de Turbaco, nace de corrientes de agua subterránea alimentadas por las lluvias...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/b3.jpeg') }}" alt="Ciénaga de la Virgen">
                <div class="overlay">
                    <h3>Ciénaga de la Virgen</h3>
                    <p>La ciénaga es un espacio natural con fauna y flora representativa, perfecto para la observación y el ecoturismo...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/b3.jpeg') }}" alt="Recorre la Casa de Rafael Núñez">
                <div class="overlay">
                    <h3>Recorre la Casa de Rafael Núñez</h3>
                    <p>La casa del expresidente colombiano Rafael Núñez es una excelente opción para conocer su historia...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/b6.jpeg') }}" alt="La isla de Tierra Bomba">
                <div class="overlay">
                    <h3>La isla de Tierra Bomba</h3>
                    <p>Una hermosa isla cercana a Cartagena, ideal para relajarse y disfrutar de su naturaleza y playas...</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/b6.jpeg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>El aviario nacional</p>
                </div>
            </div>

            <div class="grid-item">
                <img src="{{ asset('images/b6.jpeg') }}" alt="Iglesia de Santo Toribio de Mogrovejo">
                <div class="overlay">
                    <h3>Conoce</h3>
                    <p>La playa de Barú</p>
                </div>
            </div>
        </div>
    </div>

    <div id="destinos-relacionados" style="padding: 50px 20px; text-align: center;">
        <h2>Destinos Relacionados</h2>

        <div class="grid-container">
            <div class="grid-item">
                <img src="{{ asset('images/m1.jpeg') }}" alt="Leticia">
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
