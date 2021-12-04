@extends('dashboard.layouts.main')

@section('content-admin')
        
<div class="container">
    <h1 class="text-center mb-5">Edit Post</h1>
    <div class="bg-white p-5 shadow" style="border-radius: 30px">

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf 
            <div class="form-group row mb-3">
              <label class="col-md-3">Masukan Title</label>
             <div class="col-md-9">
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required autofocus value="{{ old('title', $post->title) }}"> 
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-md-3">Slug</label>
               <div class="col-md-9">
                  <input type="text" name="slug" id="slug" class="form-control  @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}" required>
                  @error('slug')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-md-3">Category</label>
                <div class="col-md-9">
                    <select class="form-select" name="category_id">
                        <option selected>- Category -</option>
                        @foreach ($categories as $category )
                            @if(old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <div class="col-md-3">Upload Gambar</div>
                <div class="col-md-9">
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image)  }}" class="img-preview img-fluid col-md-6">
                    @else
                    <img class="img-preview img-fluid col-md-6">
                    @endif

                    <input type="file" name="image" id="image" onchange="previewImage()" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
               </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-md-3">Body</label>
                <div class="col-md-9">
                    @error('body')
                    <p class="text-danger"> {{ $message }} </p>
                    @enderror
                    <input id="x" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="x"></trix-editor>
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>


            <button class="btn btn-primary mb-2" type="submit">Update Post</button>
        </form>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title='+title.value)
        .then(response =>response.json())
        .then(data => slug.value = data.slug)
    });

    // Matiin fitur upload Trix
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection