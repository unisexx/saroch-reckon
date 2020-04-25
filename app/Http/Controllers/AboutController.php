<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::findOrFail(1);
        return view('about', compact('about'));
    }
}
