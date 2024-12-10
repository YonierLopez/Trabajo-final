@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Pago</title>
    <script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            margin-top: 150px; /* Espacio para no afectar el navbar */
            margin-bottom: 20px; /* Espacio entre el contenido y el footer */
        }

        h1 {
            color: #333;
            font-size: 1.8rem;
        }

        p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
        }

        #qr-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .download-link {
            color: #007bff;
            text-decoration: none;
            font-size: 1.1rem;
            margin-top: 10px;
            display: inline-block;
        }

        .download-link:hover {
            text-decoration: underline;
        }

        .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .qr-img {
            width: 150px; /* Tamaño pequeño para la vista inicial */
            cursor: pointer;
            transition: transform 0.2s ease; /* Efecto suave al pasar el ratón */
        }

        /* Clase que amplía el tamaño del QR */
        .qr-img.enlarged {
            transform: scale(2); /* Agrandar el QR */
        }

        /* Modal para mostrar el QR en tamaño grande */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }

        .modal-content img {
            width: 100%; /* Ajustar el tamaño de la imagen en el modal */
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 15px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- El contenedor para el contenido de la vista de pago -->
    <div class="container">
        <h1>QR NEQUI generado</h1>
        <p>Una copia de tu código QR fue enviada a tu correo.</p>
        <p>Puedes pagar tu compra con los siguientes datos:</p>
        
        <!-- Contenedor del código QR -->
        <div id="qr-container">
            <img id="qr-img" class="qr-img" src="{{ asset('images/qr.jpg') }}" alt="Código QR" onclick="toggleSize()">
        </div>
        
        <div class="price" id="precio-total">
            <!-- Este es el espacio para mostrar el precio dinámicamente -->
        </div>
        
        <p>Fecha de expiración: <strong>11/12, 12:01</strong></p>
        <p><strong>Paga con NEQUI:</strong></p>
        <p>Abre NEQUI en tu teléfono móvil y usa el siguiente código QR para pagar:</p>
        
        <a href="{{ asset('images/qr.jpg') }}" class="download-link" id="download-link" download>Descargar código QR</a>
    </div>

    <!-- Modal para mostrar el QR en tamaño grande -->
    <div id="qr-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="qr-modal-img" src="{{ asset('images/qr.jpg') }}" alt="Código QR en grande">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Obtener el precio de la reserva desde sessionStorage
            const precioReserva = sessionStorage.getItem("reservationPrice");

            if (precioReserva) {
                const precio = parseFloat(precioReserva); // Aseguramos que el precio sea un número float

                if (isNaN(precio)) {
                    alert("Precio inválido.");
                    return;
                }

                // Mostrar el precio en el contenedor con el formato adecuado
                document.getElementById("precio-total").textContent = `Total a pagar: $${precio.toLocaleString()}`;

                // Generar la URL de pago
                var urlPago = `https://nequi.com.co/pagar/${precio}`;

                // Generar el QR en el contenedor
                QRCode.toDataURL(urlPago, { errorCorrectionLevel: 'H' }, function (err, url) {
                    if (err) {
                        console.error('Error al generar el QR:', err);
                        return;
                    }

                    // Asignar el QR a la imagen
                    document.getElementById('qr-img').src = url;

                    // Hacer que el enlace de descarga descargue la imagen del QR
                    document.getElementById('download-link').addEventListener('click', function() {
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'codigo-qr-nequi.png';
                        link.click();
                    });

                    // Mostrar el QR en el modal cuando el usuario haga clic
                    document.getElementById('qr-modal-img').src = url;
                });

                // Limpiar el precio de sessionStorage después de mostrarlo
                sessionStorage.removeItem("reservationPrice");
            } else {
                // Si no hay un precio disponible, mostrar un mensaje y redirigir
                alert("No hay un precio disponible. Por favor, regresa a la página de reserva.");
                window.location.href = "/reserva"; // Redirigir a la página de reserva
            }
        });

        // Función para alternar entre tamaño grande y pequeño del QR
        function toggleSize() {
            const qrImg = document.getElementById('qr-img');
            qrImg.classList.toggle('enlarged');
        }

        // Función para abrir el modal
        function openModal() {
            document.getElementById('qr-modal').style.display = 'flex';
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('qr-modal').style.display = 'none';
        }
    </script>

</body>
</html>

@endsection
