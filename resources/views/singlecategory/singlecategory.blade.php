@extends('templete.templete')
@section('container')
    <div class="container">
        <div class="row">
            @foreach ($data as $data)
                <div class="card mb-4 mr-3 ml-3" style="max-width: 520px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/180x310?{{ $data->category->name }}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <p class="card-text">{{ $data->excerpt }}.</p>
                                <p class="card-text">Author By :<a href="/author/{{ $data->author->slug }}"> <small
                                            class="text-mute">{{ $data->author->name }}</small></a></p>
                                <p class="card-text">Catgory :<a href=""> <small
                                            class="text-mute">{{ $data->category->name }}</small></a></p>
                                <p class="card-text"><small cl ass="text-muted">Last updated 3 mins ago<span>
                                            <a class="btn btn-primary" href="/opini/{{ $data->slug }}"
                                                role="button">Selengkapnya</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
