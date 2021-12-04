@extends('dashboard.layouts.main')

@section('content-admin')
        
<div class="container">
    
    <h1 class="text-center mb-5">My Posts</h1>

    <div class="bg-white p-5 shadow" style="border-radius: 30px">

        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
        </div>
        @else
        <img src="{{ ('/postingan/1.jpg') }}" alt="" class="img-fluid">
        @endif

        <h3>{{ $post->title }} | <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
         <p>By <a href="#">{{ $post->user->name }}</a></p>
        <p>
            {{ $post->body }}
        </p>
        <a href="/dashboard/posts">Kembali</a>
    </div>
  
</div>
@endsection