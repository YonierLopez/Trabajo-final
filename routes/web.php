<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [PageController::class, 'inicio'])->name('inicio');
    Route::get('/sobre-nosotros', [PageController::class, 'sobreNosotros'])->name('sobreNosotros');
    Route::get('/planes-turisticos', [PageController::class, 'planesTuristicos'])->name('planesTuristicos');
    Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');
});

require __DIR__.'/auth.php';