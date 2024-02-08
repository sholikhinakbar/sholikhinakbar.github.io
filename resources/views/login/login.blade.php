@extends('templete.templete')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">

            @if (session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('berhasil') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            @endif

            @if (session()->has('logingagal'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('logingagal') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            @endif

            <form class="form-signin" action="/login/autenticate">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal text-center">Login</h1>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" value="{{ old('email') }}"
                    class="form-control @error('email')
                    is-invalid
                @enderror"
                    placeholder="Email address" name="email" required autofocus>

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="inputPassword" class="sr-only ">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"
                    required>

                <div class="checkbox mb-3">

                </div>
                <button class=" btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

            </form>
            <small class=" d-block text-center mt-3">Belum Registrasi ? <a href="/register"> Registrasi dulu dong
                    !</a></small>

        </div>
    @endsection
