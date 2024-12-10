<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'phone', 'email', 'mensaje'];  // Campos que se pueden rellenar masivamente
}
