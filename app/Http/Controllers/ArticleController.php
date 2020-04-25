<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 1)->orderBy('id','desc')->paginate(4);
        return view('article', compact('articles'));
    }

    public function detail($id)
    {
        $article = Article::findOrFail($id);
        return view('article-detail', compact('article'));
    }
}
