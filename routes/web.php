<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\models\Category;
use App\models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Beno Dwianto",
        "email" => "ben@gmail.com",
        "img" => "ben.jpg"
    ]);
});

Route::get('/form', function () {
    return view('form', [
        'title' => 'Form'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post Category BY : $category->name",
        'posts' => $category->posts->load(['author', 'category'])
    ]);
});

Route::get('/posts1', [AuthorController::class, 'index']);
Route::get('/authors/{author:username}', [AuthorController::class, 'show']);
