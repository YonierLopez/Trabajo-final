<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio()
    {
        return view('users.inicio'); // vista inicio.blade.php
    }

    // Método para la página de sobre nosotros
    public function sobreNosotros()
    {
        return view('users.sobreNosotros'); // vista sobreNosotros.blade.php
    }

    // Método para la página de planes turísticos
    public function planesTuristicos()
    {
        return view('users.planesTuristicos'); // vista planesTuristicos.blade.php
    }

    // Método para la página de contacto
    public function contacto()
    {
        return view('users.contacto'); // vista contacto.blade.php
    }

    public function Ballenas()
    {
        return view('users.Ballenas'); // vista contacto.blade.php
    }

    public function montañas()
    {
        return view('users.montañas'); // vista contacto.blade.php
    }
}
