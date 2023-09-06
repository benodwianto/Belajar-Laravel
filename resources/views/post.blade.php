@extends('layouts.main')

@section('container')
        <h1>{{ $post->title }}</h1>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
        <h5>{{ $post->slug }}</h5>
        {!! $post->body !!}
        <br>
    <a href="/posts" class="text-decoration-none">Back to Post</a>
@endsection