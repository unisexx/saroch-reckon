<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::where('status', 1)->orderBy('id','desc')->paginate(4);
        return view('video', compact('videos'));
    }
}
