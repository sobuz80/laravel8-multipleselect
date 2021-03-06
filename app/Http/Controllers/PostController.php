<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
         return view('posts');
    }

    public function store(Request $request){
        Post::create($request->all());

        return redirect()->back();
    }
}