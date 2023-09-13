@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My Posts</a>
            <a href="" class="btn btn-info"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3">

            <article class="my-3 font-size-5">
                {!! $post->body !!}
            </article>  
        </div>
    </div>
</div>

@endsection