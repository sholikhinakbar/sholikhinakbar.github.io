@extends('templete.templete')
@section('container')
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">All Post {{ $title }}</h3>
            <hr>
            <br>

            <form action="/opini">
                @if (request('author'))
                    <input type="hidden" value="{{ request('author') }}" name="author">
                @elseif (request('category'))
                    <input type="hidden" value="{{ request('category') }}" name="category">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
        </div>
    </div>

    @if ($data->count())
        @if ($data[0]->image)
            <div class="card mb-3 mt-5 overflow=hidden">
                <img src="{{ asset('storage/' . $data[0]->image) }}" class="card-img-top" alt="...">
            @else
                <div class="card mb-3 mt-5">
                    <img src="https://source.unsplash.com/500x150?politic" class="card-img-top" alt="...">
        @endif

        <div class="card-body">
            <h3 class="card-title">{{ $data[0]->title }}</h3>
            <p class="card-text">{{ $data[0]->excerpt }}</p>
            <p class="card-text">Author By :<a href="/opini?author={{ $data[0]->user->name }}"> <small
                        class="text-mute">{{ $data[0]->user->name }}</small></a></p>
            <p class="card-text">Category By :<a href="/opini?category={{ $data[0]->category->slug }}"> <small
                        class="text-mute">{{ $data[0]->category->name }}</small></a></p>
            <p class="card-text"><small class="text-muted">{{ $data[0]->created_at->diffForHumans() }}</small></p>
            <a class="btn btn-primary" href="/opini/{{ $data[0]->slug }}" role="button">Selengkapnya</a>
        </div>

        </div>


        <div class="container">
            <div class="row">

                @foreach ($data->skip(1) as $n)
                    <div class="card mb-1 mr-1 ml-3" style="max-width: 527px; overflow=hidden">
                        <div class="row no-gutters">
                            @if ($n->image)
                                <div class="col-md-8">
                                    <img src="{{ asset('storage/' . $n->image) }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                @else
                                    <div class="col-md-4">
                                        <img src="https://source.unsplash.com/150x310?{{ $n->category->name }}"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $n->title }}</h5>
                                <p class="card-text">{{ $n->excerpt }}.</p>
                                <p class="card-text">Author By :<a href="/opini?author={{ $n->user->name }}"> <small
                                            class="text-mute">{{ $n->user->name }}</small></a></p>
                                <p class="card-text">Catgory :<a href="/opini?category={{ $n->category->slug }}">
                                        <small class="text-mute">{{ $n->category->name }}</small></a></p>
                                <p class="card-text"><small cl ass="text-muted">Last updated 3 mins ago<span>
                                            <a class="btn btn-primary" href="/opini/{{ $n->slug }}"
                                                role="button">Selengkapnya</a></small></p>
                            </div>
                        </div>
                    </div>
            </div>


            {{-- <div class="col-md-4 ">
      <div class="card" style="">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$data->title }}</h5>
          <p class="card-text">{{ $data->excerpt }}</p>
          <a href="/opini/{{ $data->slug }}" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
  </div> --}}
    @endforeach
    </div>
@else
    <H3>Posts Not Found</H3>
    @endif
    <br>
    <hr>
    <div class="pagination justify-content-center">{{ $data->links() }}</div>
@endsection
