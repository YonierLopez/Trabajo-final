@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva en Hoteles y Restaurantes de Popayán</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding-top: 120px !important;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }


        .section h2 {
            text-align: center;
            color: #005a9c;
            font-size: 2rem;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card .content {
            padding: 15px;
        }

        .card .content h3 {
            font-size: 1.5rem;
            color: #005a9c;
        }

        .card .content p {
            font-size: 1rem;
        }

        .card .content .price {
            font-size: 1.2rem;
            color: #e67e22;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card .content button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #005a9c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .card .content button:hover {
            background: #003d6b;
        }


        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            width: 80%;
        }

        .modal-content input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .modal-content button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button:hover {
            background-color: #218838;
        }

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
    border-bottom: 2px solid red; /* Agrega el borde rojo */
    color: red; /* Cambia el color del texto */
    transition: border-bottom 0.3s ease, color 0.3s ease;
}

        /* Estilo para las secciones */
        .section {
            padding-top: 20px;
            text-align: center;
        }

        /* Modal de reservas */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1001;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 500px;
        }

      

        /* Caja principal que agrupa las cartas */
        .card-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        /* Ajuste del contenedor de las cartas */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        /* Cartas */
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            flex: 1 1 calc(100% - 40px);
            /* Toma todo el ancho disponible menos el gap */
            max-width: 300px;
            text-align: center;
        }

        /* Imagen dentro de la carta */
        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Estilos de contenido de las cartas */
        .card .content {
            padding: 15px;
        }

        .card .content h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .card .price {
            font-size: 1.2rem;
            color: #333;
        }

        .card button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            cursor: pointer;
            font-size: 1rem;
        }

        .card button:hover {
            background-color: #0056b3;
        }

        /* Responsividad */
        @media (min-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 40px);
                /* En tablets, se muestran 2 por fila */
            }
        }

        @media (min-width: 1024px) {
            .card {
                flex: 1 1 calc(33.33% - 40px);
                /* En pantallas grandes, se muestran 3 por fila */
            }
        }
    </style>


</head>

<body>

    <!-- Barra de navegación -->
    <div class="barra-navegacion">
        <a href="#debes-saber" id="link-debes-saber">Popayán</a>
        <a href="#que-hacer" id="link-que-hacer">Medellín</a>
        <a href="#destinos-relacionados" id="link-destinos">Bogotá</a>
        <a href="#hoteleria-restaurantes" id="link-servicios">Cartagena</a>
    </div>

    <!-- Sección 1: Debes saber -->
    <div id="debes-saber" class="section">
        <h2 class="titulo-rojo">Hoteles y Restaurantes en Popayán</h2>

        <!-- Hoteles -->
        <section class="section">
            <h2>Hoteles en Popayán</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://lh3.googleusercontent.com/proxy/0oks542u4elzOa0HDr9ffF-4aZlBX7ynW3-IgLnTqez864w9uUvUbgeZK5-eNbTXURZN9uOXCCl-gFw7XF78idk-xHjIYzIXXglCdD_qe3ZaGP2pESK48ysEaTW4EriK3OdoUfSggaoS9WnaSAxZiWqIrlSuIw=w287-h192-n-k-rw-no-v1" alt="Hotel Colonial">
                        <div class="content">
                            <h3>Hotel Colonial</h3>
                            <p>Un lugar con encanto histórico en el corazón de Popayán.</p>
                            <p class="price" id="price-hotel1">$120,000 por noche</p>
                            <button onclick="openHotelModal(120000, 'Hotel Colonial')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/0a/52/13/hotel-boutique-confort.jpg?w=300&h=300&s=1" alt="Hotel Boutique Real">
                        <div class="content">
                            <h3>Hotel Boutique Real</h3>
                            <p>Experiencia de lujo con vistas espectaculares de la ciudad.</p>
                            <p class="price" id="price-hotel2">$250,000 por noche</p>
                            <button onclick="openHotelModal(250000, 'Hotel Boutique Real')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Restaurantes -->
        <section class="section">
            <h2>Restaurantes en Popayán</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://lh5.googleusercontent.com/p/AF1QipPyCycW3sD_ABsXvDtc8PAemyaBt9Wp6uN2fwvR=w325-h218-n-k-no" alt="Restaurante La Casona">
                        <div class="content">
                            <h3>Restaurante La Casona</h3>
                            <p>Deléitate con platos típicos como la carantanta y empanadas de pipián.</p>
                            <p class="price" id="price1">$30,000 por persona</p>
                            <button onclick="openRestaurantModal(30000, 'Restaurante La Casona')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://lh3.googleusercontent.com/p/AF1QipN552bGjaSvR9v0kR4gmPcrWHrAeJ2EPcU-F_v1=s1360-w1360-h1020" alt="Restaurante Gourmet">
                        <div class="content">
                            <h3>Restaurante Gourmet</h3>
                            <p>Una fusión de sabores locales e internacionales.</p>
                            <p class="price" id="price2">$50,000 por persona</p>
                            <button onclick="openRestaurantModal(50000, 'Restaurante Gourmet')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal de Reserva de Hotel -->
    <div id="hotelReservationModal" class="modal">
        <div class="modal-content">
            <h3>Reserva tu estancia en <span id="hotel-name"></span></h3>
            <p>Ingresa tus datos para completar la reserva.</p>
            <input type="text" id="hotel-name-input" placeholder="Tu nombre" required>
            <input type="email" id="hotel-email" placeholder="Tu correo electrónico" required>
            <input type="number" id="hotel-phone" placeholder="Tu número de teléfono" required>
            <input type="number" id="hotel-people" placeholder="Número de personas" required>
            <input type="number" id="hotel-nights" placeholder="Número de noches" required>
            <p id="hotel-total-price">Precio Total: $0</p>
            <button onclick="submitHotelReservation()"><a href="{{ route('compra') }}">Confirmar Reserva</a></button>
            <button onclick="closeHotelModal()">Cerrar</button>
        </div>
    </div>

    <!-- Modal de Reserva de Restaurante -->
    <div id="restaurantReservationModal" class="modal">
        <div class="modal-content">
            <h3>Reserva tu mesa en <span id="restaurant-name"></span></h3>
            <p>Ingresa tus datos para completar la reserva.</p>
            <input type="text" id="restaurant-name-input" placeholder="Tu nombre" required>
            <input type="email" id="restaurant-email" placeholder="Tu correo electrónico" required>
            <input type="number" id="restaurant-phone" placeholder="Tu número de teléfono" required>
            <input type="number" id="restaurant-people" placeholder="Número de personas" required>
            <p id="restaurant-total-price">Precio Total: $0</p>
            <button onclick="submitHotelReservation()"><a href="{{ route('compra') }}">Confirmar Reserva</a></button>
            <button onclick="closeRestaurantModal()">Cerrar</button>
        </div>
    </div>

    <!-- Sección 2: Qué hacer -->
    <div id="que-hacer" class="section">
        <h2 class="titulo-rojo">Hoteles y Restaurantes en Medellín</h2>
        <!-- Sección de Hoteles -->
        <section class="section">
            <h2>Hoteles en Medellín</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS06uH4_0uX_1vBNLziJbCTsZdQGznxGh_X6Q&s" alt="Hotel Intercontinental Medellín">
                        <div class="content">
                            <h3>Hotel Intercontinental Medellín</h3>
                            <p>Un hotel de lujo con vistas espectaculares a la ciudad.</p>
                            <p class="price" id="price-hotel1">$280,000 por noche</p>
                            <button onclick="openHotelModal(280000, 'Hotel Intercontinental Medellín')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/322219619.jpg?k=daee703a040d0a1f399b7f270abe4b11bf16bb79f94d57eb4bc50bdd84ea30ae&o=&hp=1" alt="Hotel San Fernando Plaza">
                        <div class="content">
                            <h3>Hotel San Fernando Plaza</h3>
                            <p>Una opción elegante y cómoda en el corazón de Medellín.</p>
                            <p class="price" id="price-hotel2">$220,000 por noche</p>
                            <button onclick="openHotelModal(220000, 'Hotel San Fernando Plaza')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Restaurantes -->
        <section class="section">
            <h2>Restaurantes en Medellín</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/fb/e5/33/bar.jpg?w=900&h=500&s=1" alt="Restaurante Carmen">
                        <div class="content">
                            <h3>Restaurante Carmen</h3>
                            <p>Alta cocina colombiana con toques internacionales.</p>
                            <p class="price" id="price1">$90,000 por persona</p>
                            <button onclick="openRestaurantModal(90000, 'Restaurante Carmen')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://el-cielo-restaurant.medellin-hotels.com/data/Images/OriginalPhoto/13519/1351944/1351944670/image-medellin-el-cielo-hotel-restaurant-5.JPEG" alt="Restaurante El Cielo">
                        <div class="content">
                            <h3>Restaurante El Cielo</h3>
                            <p>Innovación gastronómica con un concepto único.</p>
                            <p class="price" id="price2">$150,000 por persona</p>
                            <button onclick="openRestaurantModal(150000, 'Restaurante El Cielo')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <!-- Modal de Reserva de Hotel -->
        <div id="hotelReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu estancia en <span id="hotel-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="hotel-name-input" placeholder="Tu nombre" required>
                <input type="email" id="hotel-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="hotel-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="hotel-people" placeholder="Número de personas" required>
                <input type="number" id="hotel-nights" placeholder="Número de noches" required>
                <p id="hotel-total-price">Precio Total: $0</p>
                <button onclick="submitHotelReservation()"><a href="{{ route('compra') }}">Confirmar Reserva</a></button>
                <button onclick="closeHotelModal()">Cerrar</button>
            </div>
        </div>

        <!-- Modal de Reserva de Restaurante -->
        <div id="restaurantReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu mesa en <span id="restaurant-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="restaurant-name-input" placeholder="Tu nombre" required>
                <input type="email" id="restaurant-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="restaurant-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="restaurant-people" placeholder="Número de personas" required>
                <p id="restaurant-total-price">Precio Total: $0</p>
                <button onclick="submitHotelReservation()"><a href="{{ route('compra') }}">Confirmar Reserva</a></button>
                <button onclick="closeRestaurantModal()">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Sección 3: Destinos relacionados -->
    <div id="destinos-relacionados" class="section">
        <h2>Hoteles y Restaurantes en Bogotá</h2>

        <!-- Sección de Hoteles -->
        <section class="section">
            <h2>Hoteles en Bogotá</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/112448450.jpg?k=5716e861da38e2a18b3390cc43691d122aceda7e8fdede7bbbc4fcb924436feb&o=&hp=1" alt="Hotel de la Opera">
                        <div class="content">
                            <h3>Hotel de la Opera</h3>
                            <p>Un hotel boutique en el centro histórico de Bogotá.</p>
                            <p class="price" id="price-hotel1">$180,000 epor noche</p>
                            <button onclick="openHotelModal(180000, 'Hotl de la Opera')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://www.kayak.com.co/rimg/kimg/ca/83/ce3b2bcb-5fe0d292-3.jpeg?width=1366&height=768&crop=true" alt="Hotel Tequendama">
                        <div class="content">
                            <h3>Hotel Tequendama</h3>
                            <p>Un clásico de Bogotá, con excelentes vistas a la ciudad.</p>
                            <p class="price" id="price-hotel2">$250,000 por noche</p>
                            <button onclick="openHotelModal(250000, 'Hotel Tequendama')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Restaurantes -->
        <section class="section">
            <h2>Restaurantes en Bogotá</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/6f/c8/98/andres-carne-de-res.jpg?w=900&h=500&s=1" alt="Restaurante Andrés Carne de Res">
                        <div class="content">
                            <h3>Restaurante Andrés Carne de Res</h3>
                            <p>Un ícono de la gastronomía bogotana, conocido por su ambiente festivo.</p>
                            <p class="price" id="price1">$70,000 por persona</p>
                            <button onclick="openRestaurantModal(70000, 'Restaurante Andrés Carne de Res')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://mandolina.co/wp-content/uploads/2021/04/restaurante-el-cielo-1200x675.png" alt="Restaurante El Cielo">
                        <div class="content">
                            <h3>Restaurante El Cielo</h3>
                            <p>Alta cocina de autor con un enfoque innovador.</p>
                            <p class="price" id="price2">$120,000 por persona</p>
                            <button onclick="openRestaurantModal(120000, 'Restaurante El Cielo')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <!-- Modal de Reserva de Hotel -->
        <div id="hotelReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu estancia en <span id="hotel-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="hotel-name-input" placeholder="Tu nombre" required>
                <input type="email" id="hotel-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="hotel-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="hotel-people" placeholder="Número de personas" required>
                <input type="number" id="hotel-nights" placeholder="Número de noches" required>
                <p id="hotel-total-price">Precio Total: $0</p>
                <button onclick="submitHotelReservation()">Confirmar Reserva</button>
                <button onclick="closeHotelModal()">Cerrar</button>
            </div>
        </div>

        <!-- Modal de Reserva de Restaurante -->
        <div id="restaurantReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu mesa en <span id="restaurant-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="restaurant-name-input" placeholder="Tu nombre" required>
                <input type="email" id="restaurant-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="restaurant-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="restaurant-people" placeholder="Número de personas" required>
                <p id="restaurant-total-price">Precio Total: $0</p>
                <button onclick="submitRestaurantReservation()">Confirmar Reserva</button>
                <button onclick="closeRestaurantModal()">Cerrar</button>
            </div>
        </div>
    </div>

    <!-- Sección 4: Hotelería y Restaurantes -->
    <div id="hoteleria-restaurantes" class="section">
        <h2>Hoteles y Restaurantes en Cartagena</h2>

        <!-- Sección de Hoteles -->
        <section class="section">
            <h2>Hoteles en Cartagena</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/180352400.jpg?k=39edf9bc7085436969bbf9df1428b2cc14ac45ac0ad8a837ae7ee63522586dab&o=&hp=1" alt="Hotel Santa Catalina">
                        <div class="content">
                            <h3>Hotel Santa Catalina</h3>
                            <p>Ubicado en el corazón histórico, una experiencia única.</p>
                            <p class="price" id="price-hotel1">$200,000 por noche</p>
                            <button onclick="openHotelModal(200000, 'Hotel Santa Catalina')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/264736841.jpg?k=60bd1f10d7c14a2b39259b4b0c6e4becf6a24f60135ce1ef188eb2e9d4943599&o=&hp=1" alt="Hotel Las Américas">
                        <div class="content">
                            <h3>Hotel Las Américas</h3>
                            <p>Un resort de lujo frente al mar Caribe.</p>
                            <p class="price" id="price-hotel2">$450,000 por noche</p>
                            <button onclick="openHotelModal(450000, 'Hotel Las Américas')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Restaurantes -->
        <section class="section">
            <h2>Restaurantes en Cartagena</h2>
            <div class="card-box">
                <div class="card-container">
                    <div class="card">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0e/4e/25/7d/la-cevicheria-in-cartagena.jpg" alt="Restaurante La Cevichería">
                        <div class="content">
                            <h3>Restaurante La Cevichería</h3>
                            <p>Deliciosos ceviches frescos y platos marinos.</p>
                            <p class="price" id="price1">$60,000 por persona</p>
                            <button onclick="openRestaurantModal(60000, 'Restaurante La Cevichería')">Reservar</button>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCVdLN8J3rNjUGvGGXGhok4i2_Z6LhpSKd9w&s" alt="Restaurante San Basilio">
                        <div class="content">
                            <h3>Restaurante San Basilio</h3>
                            <p>Comida típica cartagenera con un toque moderno.</p>
                            <p class="price" id="price2">$80,000 por persona</p>
                            <button onclick="openRestaurantModal(80000, 'Restaurante San Basilio')">Reservar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <!-- Modal de Reserva de Hotel -->
        <div id="hotelReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu estancia en <span id="hotel-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="hotel-name-input" placeholder="Tu nombre" required>
                <input type="email" id="hotel-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="hotel-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="hotel-people" placeholder="Número de personas" required>
                <input type="number" id="hotel-nights" placeholder="Número de noches" required>
                <p id="hotel-total-price">Precio Total: $0</p>
                <button onclick="submitHotelReservation()">Confirmar Reserva</button>
                <button onclick="closeHotelModal()">Cerrar</button>
            </div>
        </div>

        <!-- Modal de Reserva de Restaurante -->
        <div id="restaurantReservationModal" class="modal">
            <div class="modal-content">
                <h3>Reserva tu mesa en <span id="restaurant-name"></span></h3>
                <p>Ingresa tus datos para completar la reserva.</p>
                <input type="text" id="restaurant-name-input" placeholder="Tu nombre" required>
                <input type="email" id="restaurant-email" placeholder="Tu correo electrónico" required>
                <input type="number" id="restaurant-phone" placeholder="Tu número de teléfono" required>
                <input type="number" id="restaurant-people" placeholder="Número de personas" required>
                <p id="restaurant-total-price">Precio Total: $0</p>
                <button onclick="submitRestaurantReservation()">Confirmar Reserva</button>
                <button onclick="closeRestaurantModal()">Cerrar</button>
            </div>
        </div>

        <script>
            // Funciones de Hotel
            function openHotelModal(pricePerNight, hotelName) {
                document.getElementById("hotel-name").innerText = hotelName;
                document.getElementById("hotelReservationModal").style.display = "flex";

                window.pricePerNight = pricePerNight;
                window.hotelName = hotelName;
            }

            function closeHotelModal() {
                document.getElementById("hotelReservationModal").style.display = "none";
            }

            function updateHotelTotalPrice() {
                var people = document.getElementById("hotel-people").value;
                var nights = document.getElementById("hotel-nights").value;
                if (people && nights) {
                    var total = window.pricePerNight * people * nights;
                    document.getElementById("hotel-total-price").innerText = "Precio Total: $" + total;
                }
            }

            document.getElementById("hotel-people").addEventListener("input", updateHotelTotalPrice);
            document.getElementById("hotel-nights").addEventListener("input", updateHotelTotalPrice);

            function submitHotelReservation() {
                var name = document.getElementById("hotel-name-input").value;
                var email = document.getElementById("hotel-email").value;
                var phone = document.getElementById("hotel-phone").value;
                var people = document.getElementById("hotel-people").value;
                var nights = document.getElementById("hotel-nights").value;

                if (name && email && phone && people && nights) {
                    alert("Reserva confirmada para " + name + " en " + window.hotelName);
                    closeHotelModal();
                } else {
                    alert("Por favor, completa todos los campos.");
                }
            }

            // Funciones de Restaurante
            function openRestaurantModal(pricePerPerson, restaurantName) {
                document.getElementById("restaurant-name").innerText = restaurantName;
                document.getElementById("restaurantReservationModal").style.display = "flex";

                window.pricePerPerson = pricePerPerson;
                window.restaurantName = restaurantName;
            }

            function closeRestaurantModal() {
                document.getElementById("restaurantReservationModal").style.display = "none";
            }

            function updateRestaurantTotalPrice() {
                var people = document.getElementById("restaurant-people").value;
                if (people) {
                    var total = window.pricePerPerson * people;
                    document.getElementById("restaurant-total-price").innerText = "Precio Total: $" + total;
                }
            }

            document.getElementById("restaurant-people").addEventListener("input", updateRestaurantTotalPrice);

            function submitRestaurantReservation() {
                var name = document.getElementById("restaurant-name-input").value;
                var email = document.getElementById("restaurant-email").value;
                var phone = document.getElementById("restaurant-phone").value;
                var people = document.getElementById("restaurant-people").value;

                if (name && email && phone && people) {
                    alert("Reserva confirmada para " + name + " en " + window.restaurantName);
                    closeRestaurantModal();
                } else {
                    alert("Por favor, completa todos los campos.");
                }
            }

            // Funcionalidad para la barra de navegación
            window.onscroll = function() {
                highlightNavLink()
            };

            function highlightNavLink() {
                const sections = document.querySelectorAll(".section");
                const links = document.querySelectorAll(".barra-navegacion a");
                let currentSection = "";

                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;

                    if (window.scrollY >= sectionTop - 200 && window.scrollY < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute("id");
                    }
                });

                links.forEach((link) => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === "#" + currentSection) {
                        link.classList.add("active");
                    }
                });
            }

            /* pagos*/
            // Función para abrir el modal de hotel con precio y nombre específicos
function openHotelModal(pricePerNight, hotelName) {
    const modal = document.getElementById("hotelReservationModal");
    document.getElementById("hotel-name").textContent = hotelName;

    const totalPriceElement = document.getElementById("hotel-total-price");
    const nightsInput = document.getElementById("hotel-nights");
    const peopleInput = document.getElementById("hotel-people");

    // Escuchar cambios para recalcular el precio total
    function calculateHotelPrice() {
        const nights = parseInt(nightsInput.value) || 0;
        const people = parseInt(peopleInput.value) || 0;
        const totalPrice = pricePerNight * nights * people;
        totalPriceElement.textContent = `Precio Total: $${totalPrice.toLocaleString()}`;
    }

    nightsInput.addEventListener("input", calculateHotelPrice);
    peopleInput.addEventListener("input", calculateHotelPrice);

    modal.style.display = "block"; // Mostrar el modal
}

// Función para cerrar el modal de hotel
function closeHotelModal() {
    const modal = document.getElementById("hotelReservationModal");
    modal.style.display = "none";
}

// Confirmar la reserva de hotel y guardar el precio en Session Storage
function submitHotelReservation() {
    const priceText = document.getElementById("hotel-total-price").textContent;
    const price = parseInt(priceText.replace("Precio Total: $", "").replace(/,/g, ""));
    sessionStorage.setItem("reservationPrice", price); // Guardar el precio total en Session Storage
    window.location.href = "{{ route('compra') }}"; // Redirigir a la vista de pagos
}

// Función para abrir el modal de restaurante con precio y nombre específicos
function openRestaurantModal(pricePerPerson, restaurantName) {
    const modal = document.getElementById("restaurantReservationModal");
    document.getElementById("restaurant-name").textContent = restaurantName;

    const totalPriceElement = document.getElementById("restaurant-total-price");
    const peopleInput = document.getElementById("restaurant-people");

    // Escuchar cambios para recalcular el precio total
    function calculateRestaurantPrice() {
        const people = parseInt(peopleInput.value) || 0;
        const totalPrice = pricePerPerson * people;
        totalPriceElement.textContent = `Precio Total: $${totalPrice.toLocaleString()}`;
    }

    peopleInput.addEventListener("input", calculateRestaurantPrice);

    modal.style.display = "block"; // Mostrar el modal
}

// Función para cerrar el modal de restaurante
function closeRestaurantModal() {
    const modal = document.getElementById("restaurantReservationModal");
    modal.style.display = "none";
}

// Confirmar la reserva de restaurante y guardar el precio en Session Storage
function submitRestaurantReservation() {
    const priceText = document.getElementById("restaurant-total-price").textContent;
    const price = parseInt(priceText.replace("Precio Total: $", "").replace(/,/g, ""));
    sessionStorage.setItem("reservationPrice", price); // Guardar el precio total en Session Storage
    window.location.href = "{{ route('compra') }}"; // Redirigir a la vista de pagos
}

        </script>

</body>

</html>


@endsection