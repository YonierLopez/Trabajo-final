<?php
 namespace App\Http\Controllers;

use App\Models\Comentario;  // Importar el modelo Comentario
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    // Mostrar todos los comentarios
    public function index()
    {
        // Obtener todos los comentarios
        $comentarios = Comentario::all(); 

        // Retornar la vista correcta en la carpeta users
        return view('users.comentarios', compact('comentarios'));
    }

    // Mostrar el formulario para crear un nuevo comentario
    public function create()
    {
        return view('users.comentarios.create');
    }

    // Guardar un nuevo comentario
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
        ]);

        // Guardar el comentario en la base de datos
        Comentario::create([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'date' => $request->date,
            'rating' => $request->rating,
        ]);

        // Redirigir a la lista de comentarios
        return redirect()->route('comentarios.index')->with('success', 'Comentario guardado correctamente');
    }

    // Mostrar un comentario específico
    public function show($id)
    {
        $comentario = Comentario::findOrFail($id);
        return view('users.comentarios.show', compact('comentario'));
    }
}
