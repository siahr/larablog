<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(Request $request)
    {
        \Logger::info("test");
        \Logger::debug($request->request);
        $articles = Article::all();
        \Logger::info($articles);
        return view("article.index", ["articles" => $articles]);
    }
}
