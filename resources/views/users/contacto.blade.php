@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Contacto</title>
  <style>
    /* Estilos generales */
    body {
      margin: 0;
      padding-top: 120px;
      font-family: "Raleway", sans-serif;
      font-size: 16px;
      font-weight: 500;
      background-color: #edf2f4;
      background-image: url('https://www.transparenttextures.com/patterns/black-linen-embossed.png');
      background-size: cover;
      -webkit-font-smoothing: antialiased;
    }

    .form_wrap {
      width: 90%;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
    }

    .cantact_info {
      width: 38%;
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #fff;
      background: url('https://images.pexels.com/photos/886051/pexels-photo-886051.jpeg') no-repeat center center;
      background-size: cover;
    }

    .cantact_info::before {
      content: '';
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.6);
    }

    .info_title,
    .info_items {
      position: relative;
      z-index: 2;
      text-align: center;
    }

    .info_title {
      margin-bottom: 40px;
    }

    .info_title span {
      font-size: 60px;
      display: block;
      margin-bottom: 15px;
    }

    .info_title h2 {
      font-size: 30px;
      font-weight: bold;
    }

    .info_items p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .form_contact {
      width: 62%;
      padding: 20px 40px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form_contact h2 {
      text-align: center;
      font-size: 25px;
      font-weight: 600;
      color: #303030;
      margin-bottom: 20px;
    }

    .user_info {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .form_contact label {
      font-weight: 600;
    }

    .form_contact input,
    .form_contact textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: 'Open sans';
      font-size: 14px;
      color: #333;
    }

    .form_contact textarea {
      resize: none;
    }

    .form_contact input[type="submit"] {
      width: 180px;
      background: #8d6e63;
      padding: 10px;
      border: none;
      border-radius: 25px;
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      align-self: center;
    }

    .form_contact input[type="submit"]:hover {
      background: #6d4c41;
    }

    @media (max-width: 1024px) {
      .form_wrap {
        width: 95%;
      }
      .cantact_info {
        text-align: center;
        padding: 20px;
      }
    }

    @media (max-width: 480px) {
      .info_title span {
        font-size: 40px;
      }
      .info_title h2 {
        font-size: 20px;
      }
      .form_contact h2 {
        font-size: 20px;
      }
      .form_contact input[type="submit"] {
        width: 100%;
        border-radius: 5px;
      }
    }
  </style>
</head>
<body>

  <section class="form_wrap">
    <section class="cantact_info">
      <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACIÓN<br>DE CONTACTO</h2>
      </section>
      <section class="info_items">
        <p><span class="fa fa-envelope"></span> vacaciones_top@gmail.com</p>
        <p><span class="fa fa-mobile"></span> +57 3225165649</p>
      </section>
    </section>

    <form action="{{ route('contact.store') }}" method="POST" class="form_contact">
      @csrf
      <h2>Tu opinión es muy importante para nosotros</h2>
      <div class="user_info">
      <label for="names">Nombres *</label>
      <input type="text" id="names" name="names" placeholder="Escribe tu nombre" required>


        <label for="phone">Teléfono / Celular</label>
        <input type="text" id="phone" name="phone" placeholder="Escribe tu número de teléfono">

        <label for="email">Correo electrónico *</label>
        <input type="text" id="email" name="email" placeholder="Escribe tu correo electrónico">

        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí"></textarea>


        <input type="submit" value="Enviar Mensaje">
      </div>
    </form>
  </section>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script>
    document.querySelector('form').addEventListener('submit', function(e) {
      let errors = [];
      const names = document.getElementById('names');
      const email = document.getElementById('email');
      const mensaje = document.getElementById('mensaje');

      if (names.value.trim() === '') {
        errors.push('El nombre es obligatorio.');
        names.style.border = '1px solid #F14B4B';
      } else {
        names.style.border = '1px solid #ccc';
      }

      if (email.value.trim() === '' || !email.value.includes('@')) {
        errors.push('El correo es obligatorio y debe ser válido.');
        email.style.border = '1px solid #F14B4B';
      } else {
        email.style.border = '1px solid #ccc';
      }

      if (mensaje.value.trim() === '') {
        errors.push('El mensaje es obligatorio.');
        mensaje.style.border = '1px solid #F14B4B';
      } else {
        mensaje.style.border = '1px solid #ccc';
      }

      if (errors.length > 0) {
        e.preventDefault();
        alert(errors.join('\n'));
      }
    });

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

  </script>
</body>
</html>

@endsection
