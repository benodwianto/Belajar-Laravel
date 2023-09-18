@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories </h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <a href="/dashboard/posts/create" class="btn btn-primary">Create New Category</a>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
      </thead>
      <tbody>
        @foreach ($categories as $category )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-success"><span data-feather="eye"></span></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-info"><span data-feather="edit"></span></a>

            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you Sure?')"><span data-feather="x-circle"></button>
            </form>
          </td>
        </tr>    
        @endforeach
      </tbody>
    </table>
  </div>

@endsection