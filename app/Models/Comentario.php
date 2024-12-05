<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    // Especificar la tabla si es necesario (opcional, Laravel lo hace automáticamente en plural)
    protected $table = 'comments_ratings'; // Si la tabla se llama 'comments_ratings'

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = ['user_id', 'comment', 'date', 'rating'];

    // Relaciones (si las hay, por ejemplo con el modelo User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
