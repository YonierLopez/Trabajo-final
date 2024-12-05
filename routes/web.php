<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentarioController;


Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/sobre-nosotros', [PageController::class, 'sobreNosotros'])->name('sobreNosotros');
Route::get('/planes-turisticos', [PageController::class, 'planesTuristicos'])->name('planesTuristicos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/Ballenas', [PageController::class, 'Ballenas'])->name('Ballenas');
Route::get('/montañas', [PageController::class, 'montañas'])->name('montañas');
Route::get('/playas', [PageController::class, 'playas'])->name('playas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('comentarios', [ComentarioController::class, 'index'])->name('comentarios.index');
    Route::get('comentarios/create', [ComentarioController::class, 'create'])->name('comentarios.create');
    Route::post('comentarios', [ComentarioController::class, 'store'])->name('comentarios.store');
    Route::get('comentarios/{id}', [ComentarioController::class, 'show'])->name('comentarios.show');  
});

require __DIR__.'/auth.php';
