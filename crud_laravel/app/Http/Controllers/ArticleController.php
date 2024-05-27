<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function listeArticle(){
        return view('article.liste');
    }

    public function ajouterArticle() {

        return view('article.ajouter');
        
    }
}
