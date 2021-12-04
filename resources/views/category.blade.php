@extends('layouts.main')

@section('content')

<div class="container">
  <h1>Post Category : {{ $category }}</h1>
    <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
        
        @foreach ($posts as $post)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <img src="{{ ('/postingan/1.jpg') }}" alt="" class="img-fluid">

              <div class="card-body">
                <p class="fw-bold">
                    {{ $post->title }}
                </p>
                <a href="/posts/{{ $post->slug }}" class="w-100 btn btn-lg btn-outline-primary">Show</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

@endsection