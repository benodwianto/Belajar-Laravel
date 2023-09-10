<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            "img" => "ben.jpg"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'username' => ['required', 'min:3', 'max:200', 'unique:users'],
            'email' => 'required|unique:users|email:dns',
            'password' => 'required'
        ]);

        $validatedData['[password'] = Hash::make($validatedData['password']);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $request->session()->flash('success', 'Registration Succesfull!! Please Login!');

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration SuccessFull!! Please Login!');
    }
}
