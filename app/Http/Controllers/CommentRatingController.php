<?php

// app/Http/Controllers/CommentRatingController.php
namespace App\Http\Controllers;

use App\Models\CommentRating;
use Illuminate\Http\Request;

class CommentRatingController extends Controller
{
    // Mostrar todos los comentarios y valoraciones
    public function index()
    {
        $comments = CommentRating::all(); // Obtener todos los comentarios
        return view('users.comentarios', compact('comments')); // Actualiza la vista a la carpeta correcta
    }
    

    // Almacenar un nuevo comentario y valoración
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5', // Asegurar que la valoración esté entre 1 y 5
        ]);

        // Guardar el comentario y la valoración en la base de datos
        CommentRating::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('comments.index')
                         ->with('success', '¡Gracias por tu comentario y valoración!');
    }
}
