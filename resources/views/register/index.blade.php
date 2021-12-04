@extends('layouts.main')

<style>

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

@section('content')

    
<main class="form-signin">
    <form action="/register" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Create Account</h1>
      <div class="form-group mb-3">
        <label class="form-label">Masukan nama</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan nama" required>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" required>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button class="w-100 btn btn-warning mb-2" type="submit">Sign in</button>
      <p>apakah anda sudah memiliki akun ? <a href="/login">Login</a></p>

    </form>
  </main>
    
@endsection