@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('LoginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <main class="form-signin">
            <form action="/login" method="POST">
              @csrf
              <img class="mb-4" src="img/{{ $img }}" alt="Beno Dwianto" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
          
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                <label for="email">Email address</label>
              </div>
              @error('email')
                <div class="is-invalid">
                  {{ $message }}
                </div>
                @enderror
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" >
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="d-block text-center mt-2">
                Not Register <a href="/register">Register Now!</a>
            </small>
          </main>
    </div>
</div>


@endsection

