<title>Kasetflix</title>
<!-- navbar setelah login -->
<nav class="navbar navbar-expand-lg bg-transparent mt-5">
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="#">Kasetflix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/horror">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Sci-Fi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu multi-column">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                        <li><a class="dropdown-item" href="#">Romance</a></li>
                        <li><a class="dropdown-item" href="#">Fantasy</a></li>
                        <li><a class="dropdown-item" href="#">Documentary</a></li>
                        <li><a class="dropdown-item" href="#">Thriller</a></li>
                        <li><a class="dropdown-item" href="#">Anime</a></li>
                        <li><a class="dropdown-item" href="#">Drama</a></li>
                        <li><a class="dropdown-item" href="#">Fiction</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex">
    @if (true)
        @auth
            <a href="{{ url('/dashboard') }}" class="btn rounded-md px-3 py-2 text-light ring-1 ring-transparent transition hover:text-light/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="btn rounded-md px-3 py-2 text-light ring-1 ring-transparent transition hover:text-light/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn rounded-md px-3 py-2 text-light ring-1 ring-transparent transition hover:text-light/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
            @else
                <p>Register route is not available</p>
            @endif
        @endauth
    @else
        <p>Login route is not available</p>
    @endif
</div>

        </div>
    </div>
</nav>
<!-- end navbar login -->
