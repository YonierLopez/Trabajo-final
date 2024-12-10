<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Mostrar el formulario de contacto
    public function create()
    {
        return view('users.contacto');
    }

    // Guardar los datos del formulario
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'names' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        // Crear el registro en la base de datos
        Contact::create([
            'names' => $request->names,
            'phone' => $request->phone,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('contact.create')->with('success', 'Gracias por tu mensaje, nos pondremos en contacto contigo pronto.');
    }
}

