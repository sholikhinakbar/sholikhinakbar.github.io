@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-center flex-wrap flex-md-nowrap             align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category by administrator {{ auth()->user()->name }}</h1>
    </div>
    <div class="table-responsive justify-content-center ">
        <a class="btn btn-success" aria-current="page" href="/dashboard/categories/create"class="align-text-bottom"> Create new
            category
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
                    <th scope="col">category name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $n)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $n->name }}</td>
                        <td><a class="btn btn-info" aria-current="page" href="/dashboard/categorires/{{ $n->slug }}">
                                <span data-feather="eye" class="align-text-bottom">view</span>
                            </a>
                            <main></main>
                        </td>
                        <td><a class="btn btn-warning" aria-current="page"
                                href="/dashboard/categorires/{{ $n->slug }}/edit"class="align-text-bottom"> Edit
                            </a>
                        </td>
                        <td>
                            <form action="/dashboard/categoris/{{ $n->slug }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0"
                                    onclick="return confirm('yakin mau hapus postingan ?')" aria-current="page"
                                    href="/dashboard/categoris/delete"class="align-text-bottom">
                                    Delete
                                    category
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
