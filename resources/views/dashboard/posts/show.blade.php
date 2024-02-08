@extends('dashboard.layouts.main')
@section('container')
    <div class="jumbotron">
        <h1 class="display-4">{{ $data->title }}</h1>

        <a class="btn btn-success" aria-current="page" href="/dashboard/posts/ "class="align-text-bottom"><span
                data-feather="arrow-left" class="align-text-bottom"></span> Bacok To Post
        </a>
        <a class="btn btn-warning" aria-current="page"
            href="/dashboard/posts/{{ $data->slug }}/edit "class="align-text-bottom"><span data-feather="edit"
                class="align-text-bottom"></span> Edit
        </a>
        <form action="/dashboard/posts/{{ $data->slug }} " class="d-inline" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm('yakin mau hapus postingan ?')"
                aria-current="page" href="/dashboard/posts/delete"class="align-text-bottom">
                Delete
                Post
            </button>
        </form>
        <br>
        <hr class="my-4">
        @if ($data->image)
            <div style="max-height: 350px; overlow:hidden">
                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="...">
            @else
                <img src="https://source.unsplash.com/500x150?politic" class="card-img-top" alt="...">
        @endif
        <p>{!! $data->body !!}</p>
    @endsection
