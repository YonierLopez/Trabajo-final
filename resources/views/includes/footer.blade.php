<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title> 
    <link href="{{ asset('resources-css-footer.css') }}" rel="stylesheet">

    <style>
        
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: Arial, sans-serif;
}

footer {
background-color: #808080;
color: white;
padding: 20px 0;
text-align: center;
}

.footer-top {
display: flex;
justify-content: center;
gap: 50px;
padding: 20px 0;
background-color: #f2f2f2;
}

.footer-top img {
height: 50px;
}

.footer-bottom {
display: flex;
justify-content: space-around;
flex-wrap: wrap;
gap: 20px;
padding: 20px 10px;
}

.footer-section {
flex: 1;
min-width: 200px;
}

.footer-section h4 {
font-size: 1.1em;
margin-bottom: 10px;
}

.footer-section p {
margin-bottom: 5px;
font-size: 0.9em;
}

.footer-social {
display: flex;
justify-content: center;
gap: 15px;
font-size: 1.5em;
padding-top: 20px;
}

/* Responsivo para pantallas pequeñas */
@media (max-width: 768px) {
.footer-top {
flex-direction: column;
align-items: center;
}

.footer-bottom {
flex-direction: column;
text-align: center;
}

.footer-section {
text-align: center;
}

.footer-social {
justify-content: center;
}
}

    </style>

</head>
<body>
    <footer>
        <div class="footer-top">
            <img src="https://via.placeholder.com/150x50" alt="Logo Comercio Industria y Turismo">
            <img src="https://via.placeholder.com/150x50" alt="Logo Procolombia">
        </div>
        <div class="footer-bottom">
            <div class="footer-section">
                <h4>LÍNEAS DE ATENCIÓN</h4>
                <p>Calle 28 No 13A - 15 Piso 35-36<br>Bogotá - Colombia</p>
                <p>+57 601 5600100</p>
                <p>Fax: +57 601 5600104</p>
                <p>Lun - Vi 8:30 A.M. - 5:30 P.M</p>
            </div>
            <div class="footer-section">
                <h4>NUESTROS EJES</h4>
                <p>Procolombia</p>
                <p>Inversión</p>
                <p>Exportaciones</p>
                <p>Turismo</p>
                <p>Marca País</p>
            </div>
            <div class="footer-section">
                <h4>ENLACES DE INTERÉS</h4>
                <p>Servicios al Ciudadano</p>
                <p>Informe de sostenibilidad</p>
                <p>Preguntas frecuentes</p>
                <p>PQRS</p>
                <p>Contacto</p>
            </div>
            <div class="footer-social">
                <span>Facebook</span>
                <span>Instagram</span>
                <span>YouTube</span>
                <span>Other</span>
            </div>
        </div>
    </footer>
</body>
</html>