<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

use App;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::with('translations')->firstOrFail()->translate(App::getLocale());
        return view('about', compact('about'));
    }
}
