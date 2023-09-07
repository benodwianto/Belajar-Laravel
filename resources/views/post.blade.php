@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
            <h5>{{ $post->slug }}</h5>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 font-size-5">
                {!! $post->body !!}
            </article>
            <br>
        <a href="/posts" class="text-decoration-none">Back to Post</a>   
        </div>
    </div>
</div>
        
@endsection