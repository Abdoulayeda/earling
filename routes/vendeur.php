<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendeur\CourController;
use App\Http\Controllers\Vendeur\ImageController;
use App\Http\Controllers\Vendeur\VendeurController;

Route::get('/', [VendeurController::class, 'index'])->name('vendeur');

Route::get('/cours', [CourController::class, 'index'])->name('cours.index');
Route::post('/cour/store', [CourController::class, 'store'])->name('vendeur.cour.store');

//Route pour images
Route::post('/cour/image/store', [ImageController::class, 'store'])->name('vendeur.image.store');