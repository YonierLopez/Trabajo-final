<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentRatingController;


Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/sobre-nosotros', [PageController::class, 'sobreNosotros'])->name('sobreNosotros');
Route::get('/planes-turisticos', [PageController::class, 'planesTuristicos'])->name('planesTuristicos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
Route::get('/Ballenas', [PageController::class, 'Ballenas'])->name('Ballenas');
Route::get('/montañas', [PageController::class, 'montañas'])->name('montañas');
Route::get('/playas', [PageController::class, 'playas'])->name('playas');
Route::get('/cartagena', [PageController::class, 'cartagena'])->name('cartagena');
Route::get('/bogota', [PageController::class, 'bogota'])->name('bogota');
Route::get('/medellin', [PageController::class, 'medellin'])->name('medellin');
Route::get('/popayan', [PageController::class, 'popayan'])->name('popayan');
Route::get('/reserva', [PageController::class, 'reserva'])->name('reserva');
Route::get('/compra', [PageController::class, 'compra'])->name('compra');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/comentarios', [CommentRatingController::class, 'index'])->name('comentarios.index');
Route::post('/comentarios', [CommentRatingController::class, 'store'])->name('comments.store');


require __DIR__.'/auth.php';
