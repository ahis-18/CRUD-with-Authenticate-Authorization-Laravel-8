@extends('layouts.main')

@section('content')

<div class="container">
    <img src="{{ ('/postingan/1.jpg') }}" alt="" class="img-fluid">

   <h3>{{ $post->title }} | <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h3>
    <p>By <a href="#">{{ $post->user->name }}</a></p>
   <p>
       {{ $post->body }}
   </p>
   <a href="/posts">Kembali</a>
</div>
@endsection