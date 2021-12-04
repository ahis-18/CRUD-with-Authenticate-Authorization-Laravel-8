@extends('dashboard.layouts.main')

@section('content-admin')

<div class="container">

    <h1 class="text-center mb-5">My Posts</h1>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-white p-5 shadow" style="border-radius: 30px">

        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Tambah Artikel</a>

        <div class="table-responsive">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Excerpt</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info text-white">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white">
                                <i class="bi bi-gear"></i>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection