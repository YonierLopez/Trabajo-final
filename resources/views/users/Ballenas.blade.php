@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avistamiento de Ballenas en Colombia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    body {
        font-family: 'Poppins', Arial, sans-serif;
        margin: 0;
        padding: 0;
        padding-top: 68px;
        background-color: #f5f5f5;
    }

    .imagen-ballenas {
        position: relative;
        width: 100%;
        height: 80vh;
        background: url('{{ asset("images/ballenas.jpg") }}') no-repeat center center/cover;
        background-size: cover;
        background-position: center;
    }

    .texto-imagen-principal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        font-size: 2rem;
        font-weight: 600;
        background: rgba(0, 0, 0, 0.4);
        padding: 20px;
        border-radius: 10px;
        width: 80%;
        max-width: 800px;
    }

    .descripcion {
        text-align: justify;
        font-size: 1.1rem;
        padding: 20px 200px;
        margin-top: 20px;
        color: #333;
        line-height: 1.8;
    }

    .descripcion p {
        margin-bottom: 20px;
    }

    .titulo-rojo {
        color: red;
        font-size: 2.5rem;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .imagen-section {
        width: 100%;
        height: auto;
        margin-top: 20px;
    }

    .botones {
        text-align: center;
    }

    .boton {
        padding: 10px 30px;
        font-size: 1.1rem;
        color: white;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        margin: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .boton:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="imagen-ballenas">
        <div class="texto-imagen-principal">
            <h2>3 Lugares en Colombia en los que puedes ver a las ballenas jorobadas</h2>
        </div>
    </div>

    <div class="descripcion">
        <p>Entre julio y noviembre de cada año la costa pacífica colombiana es el escenario de un espectáculo sin igual: la visita de las ballenas jorobadas o yubartas, las cuales recorren alrededor de 8.500 kilómetros desde la Antártida hasta las aguas cálidas de esta zona del país para aparearse y dar a luz a sus crías.</p>

        <p>Bahía Solano y Nuquí, en el Chocó, la Isla de Gorgona en el pacífico colombiano y Bahía Málaga, en el Valle del Cauca, son los lugares predilectos por cientos de turistas colombianos y extranjeros que buscan disfrutar de esta experiencia única, en medio de paisajes que quitan el aliento por su belleza y biodiversidad. Además, por las características de esta región, se pueden practicar distintas actividades de ecoturismo y de aventura como buceo en parques naturales, avistamiento de aves, adentrarse en cuevas marinas en las que se esconden diferentes especies de peces, delfines y tortugas, caminatas ecológicas y disfrutar del versátil paisaje que tiene variedad de fauna y flora.</p>

        <p><strong>Conoce más sobre los mejores destinos en Colombia para el avistamiento de ballenas.</strong></p>

        <div class="titulo-rojo">Bahía Málaga</div>
        <p>Anualmente más de 3000 ballenas yubarta llegan a las costas colombianas, gracias a esto el país es reconocido mundialmente por ser el destino de mayor migración estacional de ballenas jorobadas.</p>

        <p>Además del avistamiento de ballenas, Bahía Málaga tiene un gran atractivo turístico para los amantes de la naturaleza porque es una de las zonas con más especies de fauna y flora continental y marina en el planeta, albergando alrededor de 1.396 especies distribuidas entre moluscos, crustáceos, algas marinas, aves, reptiles, anfibios, y mamíferos costeros y acuáticos.</p>

        <p>El Parque Nacional Natural Uramba Bahía Málaga es también un destino turístico que goza de gran popularidad entre los amantes de la adrenalina, ya que brinda la posibilidad de realizar travesías en kayak, paseos en lancha, caminatas por acantilados y espeleología.</p>

        <p>Puedes llegar a Buenaventura por vía aérea o terrestre, y desde allí tomar una lancha hasta Juanchaco, en el departamento del Valle del Cauca.</p>
        
        <img class="imagen-section" src='{{ asset("images/b3.jpg") }}' alt="Bahía Málaga">

        <div class="titulo-rojo">Nuquí</div>
        <p>Ubicado en el Golfo de Tribugá, en el departamento del Chocó, Nuquí es uno de los lugares con mayor biodiversidad en el planeta y uno de los mejores sitios para el avistamiento de ballenas, porque es posible acercarse a unos 200 metros en lancha para tomar fotografías increíbles del ritual de apareamiento y el nacimiento de los ballenatos.</p>

        <p>La mayoría de las ballenas llegan a esta zona del país a finales de octubre. Sin embargo, los turistas que visiten este municipio en otras épocas del año pueden bucear, recorrer los manglares, disfrutar de las refrescantes aguas de la Cascada del amor, practicar senderismo, visitar los baños termales y realizar actividades de pesca artesanal.</p>

        <p>Existen dos maneras de llegar: por vía aérea, tomando un vuelo de 10 a 15 minutos desde Medellín o Quibdó hasta el aeropuerto Reyes Murillo, o por vía marítima desde Buenaventura o Bahía Solano.</p>

        <div class="titulo-rojo">Gorgona - Donde nacen las ballenas</div>
        <p>El Parque Nacional Natural Gorgona se encuentra a 46 kilómetros del municipio de Guapi, en el departamento del Cauca. Es un lugar de gran riqueza natural ya que es el hogar de 11 tipos de ballenas y delfines, 12 clases de arrecifes de coral, 75 especies de aves migratorias, 41 especies de reptiles y 723 especies de flora entre las que se encuentran musgos, macroalgas marinas y plantas herbáceas.</p>

        <p>Gorgona es uno de los destinos preferidos por los viajeros colombianos y extranjeros para avistar ballenas y descansar en medio de la selva y el mar, ya que el parque ofrece la posibilidad de practicar senderismo, snorkeling, buceo autónomo y participar en recorridos por las ruinas arqueológicas.</p>

        <p>Para llegar se debe tomar un avión desde Cali hasta Guapi o Buenaventura, luego viajar en lancha hasta ingresar a mar abierto y continuar el recorrido hasta la isla, el cual tiene una duración de entre dos y cuatro horas.</p>
        
        <img class="imagen-section" src='{{ asset("images/b2.jpg") }}' alt="Gorgona">

        <h3>Recomendaciones para el avistamiento de ballenas:</h3>
        <ul>
            <li>Existe mayor posibilidad de encontrar a las ballenas jorobadas en las primeras horas de la mañana o al final del día, cuando el mar está más calmado y el sol es menos intenso.</li>
            <li>Si vas a observar las ballenas desde la costa, te recomendamos usar binoculares.</li>
            <li>Si prefieres verlas desde una embarcación, lo más recomendable es ir acompañado de un guía. Recuerda siempre mantener una distancia prudente y permanecer en silencio para no interferir con las actividades de las ballenas y sus ballenatos.</li>
            <li>Ten paciencia y disfruta la belleza del paisaje colombiano mientras esperas este espectáculo de la naturaleza.</li>
        </ul>
    </div>

    <!-- Botones al final -->
    <div class="botones">
        <button class="boton" onclick="window.location.href='{{ url('/') }}'">Volver a Inicio</button>
        <button class="boton" onclick="window.location.href='{{ url('/planes-turisticos') }}'">Conoce sobre nuestros paquetes turísticos</button>
    </div>

</body>

</html>

@endsection
