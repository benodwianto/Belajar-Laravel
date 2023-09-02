@extends('layouts.main')

@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        <p>By. Beno Dwianto In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Post</a>
@endsection