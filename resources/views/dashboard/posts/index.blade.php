@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-center flex-wrap flex-md-nowrap             align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My post {{ auth()->user()->name }}</h1>
    </div>
    <div class="table-responsive justify-content-center ">
        <a class="btn btn-success" aria-current="page" href="/dashboard/posts/create"class="align-text-bottom"> Create Post
        </a>

        <br>
        <br>
        @if (session()->has('succsess'))
            <div class="alert alert-primary" role="alert">
                {{ session('succsess') }}
            </div>
        @endif
        <br>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Excerpt</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $n)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->excerpt }}</td>
                        <td>{{ $n->category->name }}</td>
                        <td><a class="btn btn-info" aria-current="page" href="/dashboard/posts/{{ $n->slug }}">
                                <span data-feather="eye" class="align-text-bottom">view</span>
                            </a>
                            <main></main>
                        </td>
                        <td><a class="btn btn-warning" aria-current="page"
                                href="/dashboard/posts/{{ $n->slug }}/edit"class="align-text-bottom"> Edit
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/posts/{{ $n->slug }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0"
                                    onclick="return confirm('yakin mau hapus postingan ?')" aria-current="page"
                                    href="/dashboard/posts/delete"class="align-text-bottom">
                                    Delete
                                    Post
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
