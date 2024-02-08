@extends('templete.templete')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action = "/register" class="form-registration" method="POST">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal text-center">Retister Now !</h1>

                <label for="name" class="sr-only">Name</label>
                <input type="text" id="name"
                    class="form-control rounded-top @error('name')
                    is-invalid
                @enderror"
                    placeholder="Name" name="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                <label for="username" class="sr-only">username</label>
                <input type="text" id="username"
                    class="form-control rounded-top @error('username')
                is-invalid
            @enderror"
                    placeholder="username" name="username" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror


                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="email"
                    class="form-control rounded-top @error('email')
                is-invalid
            @enderror"
                    placeholder="Email address" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror


                <label for="inputPassword" class="sr-only ">Password</label>
                <input type="password"
                    id="inputPassword"class="form-control rounded-top @error('password')
                is-invalid
            @enderror rounded-bottom"
                    placeholder="Password" name="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror



                <div class="checkbox mb-3">

                </div>
                <button class=" btn btn-lg btn-primary btn-block" type="submit">Register</button>

            </form>
            <small class=" d-block text-center mt-3">Belum Registrasi ? <a href="/login">Login</a></small>

        </div>
    @endsection
