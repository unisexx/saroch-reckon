<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hilight;
use App\About;
use App\ProductCategory;
use App\Article;

use App;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::with('translations')->firstOrFail()->translate(App::getLocale());
        $product_categories = ProductCategory::with('translations')->orderBy('order', 'asc')->get()->translate(App::getLocale());
        $articles = Article::with('translations')->where('status', 1)->orderBy('id','desc')->take(1)->get()->translate(App::getLocale());
        return view('home', compact('about', 'product_categories', 'articles'));
    }
}
