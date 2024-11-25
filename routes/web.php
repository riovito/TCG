<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartaController;
 
Route::get('/carta/create/basic', [CartaController::class, 'Basic'])->name('carta.basic'); //Nao puxa arquivos custom sozinho
Route::post('/carta/store/basic', [CartaController::class, 'storeBasic'])->name('carta.store.basic');
Route::post('/carta/store/type', [CartaController::class, 'storeType'])->name('carta.store.type');
Route::get('/carta/type', [cartaController::class, 'type'])->name('carta.type');





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
});

Route::resource('carta', cartaController::class);

Route::resource('magic', magicController::class);

Route::resource('pokemon', pokemonController::class);

Route::resource('yugioh', yugiohController::class);

require __DIR__.'/auth.php';
