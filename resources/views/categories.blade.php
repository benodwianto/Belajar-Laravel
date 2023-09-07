@extends('layouts.main')

    @section('container')
    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
        @foreach ($categories as $category)
                <ul>
                    <li>
                        <h2><a href="/categories/{{ $category->slug}}">{{ $category->name }}</a></h2>
                    </li>
                </ul>
        @endforeach
    @endsection
 