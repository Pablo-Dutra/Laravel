<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;

Route::get('/', [OfertaController::class, 'index']);
Route::get('/oferta/create', [OfertaController::class, 'create'])->middleware(['auth']);
Route::post('/oferta/store', [OfertaController::class, 'store'])->middleware(['auth']);

Route::delete('/oferta/{id}', [OfertaController::class, 'destroy']);
Route::get('/oferta/{id}', [OfertaController::class, 'edit']);
Route::put('/oferta/{id}', [OfertaController::class, 'update']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
