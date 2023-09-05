<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function show(User $user)
    {
        return view('posts', [
            'title' => 'All Posts by',
            'posts' => $user->posts,
        ]);
    }
}
