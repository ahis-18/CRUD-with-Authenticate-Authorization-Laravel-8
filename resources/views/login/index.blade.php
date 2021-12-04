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

  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if (session()->has('loginError'))
  <div class="alert alert-dark alert-dismissible fade show" role="alert">
   {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif


    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-group mb-3">
          <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required>
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
      <button class="w-100 btn btn-primary mb-2" type="submit">Sign in</button>
      <p>apakah anda belum memiliki akun ? <a href="/register">Register</a></p>
    </form>
  </main>
    
@endsection