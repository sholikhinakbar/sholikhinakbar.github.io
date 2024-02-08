@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-center flex-wrap flex-md-nowrap             align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post By Author : {{ auth()->user()->name }}</h1>
    </div>
    <div class="col-md-12">
        <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}" autofocus
                        class="form-control @error('title')
                        is-invalid
                    @enderror"
                        id="title">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" value="{{ old('slug', $post->slug) }}" required name="slug"
                        class="form-control disable readonly
                        @error('slug')
                    is-invalid
                @enderror"
                        id="slug">
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="slug">Category</label>
                    <select class="form-control" name="category_id">
                        @foreach ($category as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value={{ $category->id }} selected>{{ $category->name }}
                                </option>
                            @else
                                <option value={{ $category->id }}>{{ $category->name }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="mb-3">
                <label for="formFile" class="form-label">Post Image</label>
                <input type="hidden" name="oldimage" value="{{ $post->image }}">

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    <input
                        class="form-control @error('image')
                    is-invalid
                     @enderror"
                        onchange="previewimage()" type="file" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

            </div>

            <input id="body" value="{{ old('body', $post->body) }}" type="hidden" name="body">

            <trix-editor input="body"></trix-editor>
            @error('body')
                <p class="text-danger"> {{ $message }}</p>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>



    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewimage() {
            const image = document.querySelector('#image')

            const imgpreview = document.querySelector('.img-preview')

            imgpreview.style.display = 'block';
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgpreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
