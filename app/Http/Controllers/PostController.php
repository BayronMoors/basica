<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = \App\Models\Post::orderBy('created_at', 'desc')->paginate(4);
        return view('posts.index',compact('posts'));
    }

    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
    }
}
