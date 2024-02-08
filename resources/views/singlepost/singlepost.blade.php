@extends('templete.templete')
@section('container')
    <div class="">
        @if ($data->image)
            <div class="card mb-3 mt-5 overflow=hidden">
                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="...">
            @else
                <div class="card mb-3 mt-5">
                    <img src="https://source.unsplash.com/500x150?politic" class="card-img-top" alt="...">
        @endif
        <h1 class="display-4">{{ $data->title }}</h1>
        <br>
        <p class="lead">Author : {{ $data->author->name }}</p>
        <hr class="my-4">
        <p>{!! $data->body !!}</p>
        <a href="/opini">kembali</a>
    @endsection
