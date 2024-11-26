<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\cartaController;
use App\Http\Controllers\ataqueController;
use App\Http\Controllers\raridadeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\tipoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('cartas', cartaController::class);

Route::resource('raridades', raridadeController::class);

Route::resource('tipos', tipoController::class);

Route::resource('ataques', ataqueController::class);

Route::resource('users', userController::class);

require __DIR__.'/auth.php';
