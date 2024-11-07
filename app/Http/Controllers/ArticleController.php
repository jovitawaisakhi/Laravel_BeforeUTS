<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function index(){
        $articles = Article::all();

        return view('home',[
            'articles' => $articles
        ]);
    }

    public function articleCategory(){
        $articles = Article::all();

        return view('category',[
            'articles' => $articles
        ]);
    }

    public function showCategoryArticle($category){
        $articles = Article::where('CategoryName', $category)->get();

        return view('detail', [
            'articles' => $articles
        ]);
    }
}
