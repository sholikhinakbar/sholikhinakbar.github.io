<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DB:</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-grow-1 justify-content-center" id="navbarNav">
        <ul class="navbar-nav mr-2">
            <li class="nav-item ">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="home">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item dropdown {{ Request::is('author') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Author
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/opini?author=penulis-pertama">Nikmatul Sugiyarto</li>
                    <li><a class="dropdown-item" href="/opini?author=penulis-kedua">Kiki Daliyo</a></li>

                </ul>
            </li>
            <li class="nav-item {{ Request::is('opini') ? 'active' : '' }}">
                <a class="nav-link" href="/opini">Opini</a>
            </li>
            <li class="nav-item dropdown {{ Request::is('category') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Category
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/category/politik">Politik</a></li>
                    <li><a class="dropdown-item" href="/category/olahraga">Olahraga</a></li>
                    <li><a class="dropdown-item" href="/category/bisnis">Bisnis</a></li>
                    <li><a class="dropdown-item" href="/category/animal">Animal</a></li>
                </ul>
            </li>

        </ul>

    </div>
    <div>
        @auth()
            <ul class="nav-item dropdown">
                <div class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Welcome back {{ auth()->user()->name }}
                </div>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                        Dashboard</a>
                    <div class="dropdown-divider"></div>

                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Logout</a></button>
                    </form>
                </div>
            </ul>
        @else
            <li class="nav-item ">
                <ul class="navbar-nav justify-conten-right">
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a href="/login" class="nav-link">Login<i class="bi bi-door-open"></i></a>
                </ul>
            </li>
        @endauth
    </div>

</nav>
