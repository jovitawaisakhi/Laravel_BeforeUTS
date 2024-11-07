<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('/category', [ArticleController::class, 'articleCategory'])->name('category');
Route::get('/detail/{category}', [ArticleController::class, 'showCategoryArticle'])->name('detail.category');
Route::get('/writer', [WriterController::class, 'index'])->name('writer');



