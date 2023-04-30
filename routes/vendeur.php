<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendeur\CourController;
use App\Http\Controllers\Vendeur\ImageController;
use App\Http\Controllers\Vendeur\ContenuController;
use App\Http\Controllers\Vendeur\VendeurController;

Route::get('/', [VendeurController::class, 'index'])->name('vendeur');

Route::get('/cours', [CourController::class, 'index'])->name('cours.index');
Route::post('/cour/store', [CourController::class, 'store'])->name('vendeur.cour.store');

//Route pour images
Route::get('/cour/images/{id}', [ImageController::class,'images'])->name('vendeur.cour.images');
Route::post('/cour/image/store', [ImageController::class, 'store'])->name('vendeur.image.store');
Route::delete('cour/image/delate/{id}', [ImageController::class, 'delete'])->name('cour.image.delete');
Route::post('/contenu/store', [ContenuController::class, 'store'])->name('vendeur.contenu.store');