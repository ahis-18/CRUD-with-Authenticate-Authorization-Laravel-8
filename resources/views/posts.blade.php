@extends('layouts.main')

@section('content')

<div class="container">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Halaman Blog</h1>
    <p class="fs-5 text-muted">Cari artikel menarik di halaman blog ini</p>
  </div>

  <form action="/posts">
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="search" placeholder="masukan kata kunci" value="{{ request('search') }}">
      <button class="btn btn-success" type="submit">Cari Artikel</button>
    </div>
  </form>

    <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
        
        @foreach ($posts as $post)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <img src="{{ ('/postingan/1.jpg') }}" alt="" class="img-fluid">
              <div class="card-body">
                <p class="fw-bold">{{ $post->title }}</p>
                <p><a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> | {{ $post->category->name }}</p>
                <a href="/posts/{{ $post->slug }}" class="w-100 btn btn-outline-primary">Show</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

@endsection