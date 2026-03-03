<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('multimedia', compact('videos'));
    }

    public function store(Request $request)
    {
        Video::create($request->all());

        return redirect('/multimedia');
    }
}