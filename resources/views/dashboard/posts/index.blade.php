@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">M Posts </h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
      </thead>
      <tbody>
        @foreach ($posts as $post )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
            <a href="#" class="badge bg-info"><span data-feather="edit"></span></a>
            <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
  </div>

@endsection