@extends('dashboard.layouts.main')

@section('content-admin')
        
<div class="container">
    
    <h1 class="text-center mb-5">My Dashboard</h1>
  
    <div class="row">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Daftar Berita</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/dashboard/posts" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          {{-- Hanya Admin --}}
          @can('admin')
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Daftar Categories</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/dashboard/categories" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          @endcan
    </div>
</div>
@endsection