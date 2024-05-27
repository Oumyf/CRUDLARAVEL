<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article', [ArticleController::class,'listeArticle']);
Route::get('/ajouter', [ArticleController::class, 'ajouterArticle']);
