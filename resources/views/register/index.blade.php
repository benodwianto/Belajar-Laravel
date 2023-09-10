@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register">
            <form action="/register" method="POST">
              @csrf
              <img class="mb-4" src="img/{{ $img }}" alt="Beno Dwianto" width="72" height="57">
              <h1 class="h3 mb-3 fw-normal">Registration</h1>
          
              <div class="form-floating ">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required value="{{ old('name') }}">
                @error('name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="name">Name</label>
              </div>

              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" required value="{{ old('username') }}">
                @error('username')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="@example.com" name="email" required value="{{ old('email') }}">
                @error('email')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="email">Email address</label>
              </div>
              
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') id-invalid @enderror" id="password" placeholder="Password" name="password" required>
                @error('password')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-2">
                Already Acount <a href="/login">Signin!</a>
            </small>
          </main>
    </div>
</div>


@endsection

