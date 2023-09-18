@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-info"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
              <button class="btn btn-danger" onclick="return confirm('Are you Sure?')">Delete <span data-feather="x-circle"></button>
              </form>

              @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{  asset($post->image_path) }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3">
                </div>

                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="img-fluid mt-3">
              @endif

            <article class="my-3 font-size-5">
                {!! $post->body !!}
            </article>  
        </div>
    </div>
</div>

@endsection