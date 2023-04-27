<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategorieController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/categories', [CategorieController::class, 'index'])->name('categorie.index');
Route::post('/admin/categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
Route::patch('/admin/categorie/update/{id}', [CategorieController::class, 'update'])->name('categorie.update');
