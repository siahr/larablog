<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        \Debugbar::debug($request);
        $articles = Article::all();
        \Debugbar::info($articles);
        return view("article.index", ["articles" => $articles]);
    }
}
