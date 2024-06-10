<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
<<<<<<< HEAD
        <link rel="stylesheet" href="../style.css">

=======
        <link rel="stylesheet" href="style.css">
>>>>>>> d212d6129f0de4b7178416c095aacf98f8e4b734
    </head>
    <body>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg bg-transparent mt-5">
            <div class="container-fluid">
                <a class="navbar-brand text-#dc3545" href="#">NETFLIX</a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white"
                                aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="horror.html">Horror</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Sci-Fi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white"
                                href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="#">Horror</a></li>
                                <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
                                <li><a class="dropdown-item" href="#">Actions</a></li>
                                <li><a class="dropdown-item" href="#">Thriller</a></li>
                                <li><a class="dropdown-item" href="#">Comedy</a></li>
                                <li><a class="dropdown-item" href="#">Korea</a></li>
                                <li><a class="dropdown-item" href="#">Actions</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="buttonNav">
                        <button type="button" class="btn btn-danger me-3"
                            id="btnLog" href="login.html">Login</button>
                    </div>
                </div>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid text-white ">
            <div class="container">
                <h1 class="display-8">Search: {{$search}} </h1>
            </div>

            <div class="input-group mb-3 mt-5">
                <input type="text" class="form-control"
                    placeholder="Cari judul film"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary"
                        type="button">Button</button>
                </div>
            </div>

        </div>

        <div class="img-container">
            <div class="bg-image"
                style="background-image: url('../Dune.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../Dunkirk.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../PeakyBlinders.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../endgame.jpeg');"></div>
        </div>

        <div class="container-film shadow-lg p-3 mb-5 bg-body rounded">
            <h1 class="text-center">Search: {{$search}} </h1>

            @include('partials.catalog')
        </div>
@include('partials.footer')
@endsection

    
