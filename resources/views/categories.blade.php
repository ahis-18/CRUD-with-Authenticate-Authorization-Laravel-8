@extends('layouts.main')

@section('content')

<div class="container">
  <h1 class="mb-3">Categories</h1>
    <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
        
        @foreach ($categories as $category)
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-body">
                <p class="fw-bold">
                    {{ $category->name }}
                </p>
                <a href="/categories/{{ $category->slug }}" class="w-100 btn btn-lg btn-outline-primary">Show</a>
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>

@endsection