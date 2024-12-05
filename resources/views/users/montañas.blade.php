@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo de Naturaleza en las Montañas de Colombia</title>
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

    .imagen-montanas {
        position: relative;
        width: 100%;
        height: 80vh;
        background: url('{{ asset("images/montañas.jpg") }}') no-repeat center center/cover;
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

    .botones {
        text-align: center;
        margin-top: 40px;
    }

    .boton {
        padding: 15px 30px;
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
    <div class="imagen-montanas">
        <div class="texto-imagen-principal">
            <h2>Turismo de Naturaleza en las Montañas de Colombia</h2>
        </div>
    </div>

    <div class="descripcion">
        <p>Hoy acompáñenos a realizar un recorrido por las montañas de este bello país, a descubrir los misterios y encantos que resguardan…</p>
        
        <p>Para aquellos viajeros que se aventuraron a recorrer el territorio colombiano, para los que hasta ahora empiezan y para quienes tienen la proyección de hacerlo, les queremos decir que desde Guía de Rutas por Colombia les hemos acompañado hace algunas décadas y les seguiremos acompañando con toda la información que requieran para hacer de su viaje toda una experiencia.</p>

        <p>Nosotros, al igual que ustedes, tenemos la convicción de que conocer nuestro territorio es definitivamente conocernos a nosotros mismos, recorrer Colombia no es sólo disfrutar de sus bellos destinos, sino que también es un descubrimiento de nuestra historia, cultura e identidad.</p>

        <p>Colombia es un país de montaña y buena parte de su territorio, de sur a norte, está atravesado por la cordillera de los Andes. Esta a su vez se ramifica en tres y entre páramos, volcanes y sierras nevadas, mesetas y toda una variedad de relieve se extiende dando vida a diversos ecosistemas, cuencas hídricas y gran variedad de especies de flora y fauna. La montaña, sin lugar a dudas, es sinónimo de vida y cultura, es por ello que en muchas regiones del país buena parte de los colombianos se establecen entre estos parajes y el cielo y allí, en las alturas, es donde han configurado su visión de mundo, su identidad y cultura.</p>

        <p>La ciudad capital está ubicada en el centro del país, en la cordillera Central, y sus alrededores son toda una promesa para los amigos de la naturaleza, porque es allí donde las montañas se imponen luciendo la frescura de ese verde exuberante y en donde podrá observar el cielo y sentirse un poco más cerca de él. Esta ciudad privilegiada, resguardada por montañas, cuenta con los más bellos paisajes para ofrecer al viajero. Por ejemplo, en la mismísima Bogotá, en los cerros Orientales, vivir una experiencia ecológica es posible; el ascenso a ellos por los senderos donde serpentea la quebrada las Delicias es quizá de las experiencias más bellas, no sólo por la vista panorámica de la ciudad, sino también por las maravillas que descubrirá en el recorrido: acacias e inmensos eucaliptos, gran diversidad de aves, pozos de agua y una cascada de 41 metros de altura.</p>

        <p>A 30 minutos de Bogotá, en inmediaciones del páramo, el municipio de La Calera es un lugar muy frecuentado no sólo porque el trayecto de arribo cuenta con unos miradores privilegiados de la ciudad capital, sino también porque es epicentro del turismo ecológico debido a las maravillas naturales que alberga: el Parque Nacional Chingaza, la peña de Tunjaque, el páramo El Verjón, Siete Cascadas y cascadas Mundo Nuevo.</p>

        <p>El municipio de Choachí es también otro destino ecoturístico insigne de la región gracias a la afamada Chorrera, la caída de agua escalonada más alta de Colombia y la sexta a nivel de Latinoamérica. En este paraje natural no sólo podrá apreciar cómo el torrente de agua es atraído por la fuerza gravitacional de la tierra, sino que también podrá disfrutar de la gran variedad de flora que habita el bosque de niebla que circunda la cascada. Sin lugar a dudas, todo un espectáculo natural en medio de la montaña.</p>

        <p>Suesca, Guatavita, el páramo de Sumapaz y los farallones de Sutatausa son también otros destinos en donde la montaña se alza creando bellos y ricos ecosistemas, ideales para realizar actividades como el senderismo y disfrutar de las riquezas naturales que la tierra nos ofrece.</p>

        <p>Conformada por páramos, bosque andino, lagunas glaciares y picos nevados se extiende la zona montañosa del Cocuy. Arribar a este parque es transitar por todos los pisos térmicos, avizorar 25 picos nevados que, desde lo alto, dan la sensación de ser un caminito de piedra que conduce a la laguna Grande y a la laguna Grande de los Verdes. Estos cuerpos de agua son un verdadero paraíso en medio de la montaña, circundados por rocas y vegetación característica de la alta montaña.</p>

        <p>El eje cafetero es otra de las regiones en donde la montaña se impone imprimiendo características particulares en sus paisajes y quienes la habitan. En esta zona donde el café no es sólo una tradición sino también un estilo de vida, la montaña luce esplendorosas plantaciones de café por doquier y fincas cafeteras adornan el paisaje. En los alrededores de Pereira, capital del departamento de Risaralda, los paisajes hacen parte de la ruta cafetera y también es un destino por excelencia, al contar con una de las entradas al Parque Nacional los Nevados, un complejo volcánico conformado por el volcán Nevado del Ruíz, el volcán Nevado de Santa Isabel, el volcán Nevado del Tolima y los Paramillos del Cisne, de Santa Rosa y Quindío. Esta reserva natural está ubicada entre los departamentos de Caldas, Tolima y Risaralda, desde este último se tiene acceso al volcán Nevado del Ruíz. La travesía de ascenso es una experiencia inolvidable en la que descubrirá un paisaje en donde el frailejón y las fuentes hídricas cubren la montaña cuesta arriba hasta que las nieves perpetuas se apoderan de ella. El departamento de Caldas también cuenta con uno de los accesos al parque desde el municipio de Villamaría.</p>

        <p>El Quindío no se queda por fuera de los paisajes de montaña más importantes de Colombia. El valle del Cocora, ubicado en la cordillera Central, es de esos destinos que encanta a quienes lo visitan. Este valle hace parte del Parque Nacional los Nevados y es especial no solo porque las montañas que se erigen a su alrededor configurando uno de los paisajes más bellos y únicos, sino también porque allí crecen centenares de palmas de cera (árbol Nacional).</p>

        <p>El paisaje de montaña se impone en el territorio colombiano y como si no fuera suficiente el último vestigio de la cordillera Occidental se posa con gran altura en el litoral del mar Caribe. La Sierra Nevada de Santa Marta es un lugar de una belleza indescriptible, donde los viajeros pueden experimentar una caminata de varios días por sus paisajes y montañas llenos de biodiversidad. En sus faldas se encuentran los pueblos indígenas que habitan la región y que han mantenido vivas sus costumbres ancestrales a lo largo del tiempo. Un lugar realmente único donde la montaña toca el mar.</p>

    </div>

    <!-- Botones al final -->
    <div class="botones">
        <button class="boton" onclick="window.location.href='{{ url('/') }}'">Volver a Inicio</button>
        <button class="boton" onclick="window.location.href='{{ url('/planes-turisticos') }}'">Conoce sobre nuestros paquetes turísticos</button>
    </div>

</body>

</html>

@endsection
