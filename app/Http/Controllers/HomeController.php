<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hilight;
use App\About;
use App\ProductCategory;
use App\Article;


class HomeController extends Controller
{
    public function index()
    {
        $about = About::findOrFail(1);
        $product_categories = ProductCategory::orderBy('order', 'asc')->get();
        $articles = Article::where('status', 1)->orderBy('id','desc')->take(4)->get();
        return view('home', compact('about', 'product_categories', 'articles'));
    }
}
