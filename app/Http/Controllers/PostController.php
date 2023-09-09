<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::latest()->filter(request(['search']))->get()
        ]);
    }


    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
