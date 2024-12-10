<?php

// app/Models/CommentRating.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',       // Nombre del usuario
        'email',      // Correo del usuario
        'comment',    // Comentario
        'rating'      // Valoración
    ];
}

