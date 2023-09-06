<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class AuthorController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::latest()->get()
            // "posts" => Post::all()
        ]);
    }

    public function show(User $author)
    {
        return view('posts', [
            'title' => "Post Author By : $author->name",
            'posts' => $author->posts,
        ]);
    }
}
