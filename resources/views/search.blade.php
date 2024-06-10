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
        <link rel="stylesheet" href="style.css">
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
                style="background-image: url('Dune.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('Dunkirk.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('PeakyBlinders.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('endgame.jpeg');"></div>
        </div>

        <div class="container-film shadow-lg p-3 mb-5 bg-body rounded">
            <h1 class="text-center">Search: {{$search}} </h1>

            @include('partials.catalog')
        </div>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class>
                <div class="container text-center text-md-start mt-5 ">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize
                                your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div
                            class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="fas fa-home me-3"></i> Klaten, Jawa
                                Tengah, Indonesia</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                chornaeld@gmail.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i>
                                +62-8966-4470-092</p>
                            <p><i class="fas fa-print me-3"></i>
                                +62-8966-4470-092</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4"
                style="background-color: rgba(0, 0, 0, 0.05);">
                © 2024 Copyright:
                <a class="text-reset fw-bold"
                    href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <script>
            document.getElementById("btnLog").onclick = function () {
                location.href = "login.html";
            };
        </script>
    </body>
</html>
