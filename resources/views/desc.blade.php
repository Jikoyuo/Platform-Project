<!doctype html>
<html lang="en">
<<<<<<< HEAD
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.6/font/bootstrap-icons.min
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kasetflix</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="styleDesc.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    </head>
    <body>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg bg-transparent mt-5">
            <div class="container-fluid">
                <a class="navbar-brand text-danger" href="#">Kasetflix</a>
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
                            <a class="nav-link text-white" href="#">Horror</a>
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
                                        href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Comedy</a></li>
                                <li><a class="dropdown-item" href="#">Romance</a></li>
                                <li><a class="dropdown-item" href="#">Fantasy</a></li>
                                <li><a class="dropdown-item" href="#">Documenter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="input-group mb-3 mt-4" style="margin-right: 40%;">
                <input type="text" class="form-control"
                    placeholder="Cari judul film"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Button</button>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> <!-- Menggunakan ikon user -->
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

            </nav>

            <div
                class="d-flex justify-content-center align-items-center full-height">
                <div class="card mb-3 text-white"
                    style="height: 262px;width: 540px; margin-top: 10%; background-color: transparent; border-color: transparent;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="Dune.jpeg" class="img-fluid rounded-start"
                                alt="Dune">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Dune 2024</h5>
                                <div class="rating">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>

                                <p class="card-text">This is a wider card with
                                    supporting text below as a natural lead-in
                                    to
                                    additional content. This content is a little
                                    bit
                                    longer.</p>
                                <p class="card-text"><small
                                        class="text-white">Last
                                        updated 3 mins ago</small></p>
                            </div>
=======


<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.6/font/bootstrap-icons.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasetflix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styleDesc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <section id="section1">

        @include('partials.navbarDesc')
        <div class="img-container">
            <div class="bg-image" style="background-image: url('Dune.jpeg');"></div>
            <div class="bg-image" style="background-image: url('Dunkirk.jpeg');"></div>
            <div class="bg-image" style="background-image: url('PeakyBlinders.jpeg');"></div>
            <div class="bg-image" style="background-image: url('endgame.jpeg');"></div>
        </div>
        <div class="describe d-flex justify-content-center align-items-center full-height">
            <div class="card mb-3 text-white" style="height: 262px; width: 540px; margin-top: 10%; background-color: transparent; border-color: transparent;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="Dune.jpeg" class="img-fluid rounded-start" alt="Dune">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Dune 2024</h5>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
>>>>>>> 7b76d8a88afa4db8212a2ec9314ed0cf16a0cbec
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD

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

        </body>
        <script src="script.js"></script>
        <script>
// Fungsi untuk mengubah penilaian ikon bintang dengan nilai desimal
function setRating(rating) {
    const stars = document.querySelectorAll('.rating i');
    const roundedRating = Math.round(rating * 2) / 2;

    stars.forEach((star, index) => {
        if (index < roundedRating) {
            star.classList.remove('far');
            star.classList.add('fas');
        } else {
            star.classList.remove('fas');
            star.classList.add('far');
        }
    });

    // Add half-star class if the rating is not a whole number
    if (roundedRating % 1 !== 0) {
        stars[Math.floor(roundedRating)].classList.add('half');
    }
}

// Contoh: atur penilaian bintang ke 1.5
setRating(3);

</script>

    </html>
=======
        </div>

    </section>
    <section id="section2">
        <hr class="hr hr-blurry">
    </section>
    <section id="section3">
    <hr class="hr hr-blurry">
    </section>
    <script src="script.js"></script>
    <script>
        // Fungsi untuk mengubah penilaian ikon bintang dengan nilai desimal
        function setRating(rating) {
            const stars = document.querySelectorAll('.rating i');
            const roundedRating = Math.round(rating * 2) / 2;

            stars.forEach((star, index) => {
                if (index < roundedRating) {
                    star.classList.remove('far');
                    star.classList.add('fas');
                } else {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            });

            // Add half-star class if the rating is not a whole number
            if (roundedRating % 1 !== 0) {
                stars[Math.floor(roundedRating)].classList.add('half');
            }
        }

        // Contoh: atur penilaian bintang ke 4
        setRating(4);
    </script>
</body>

</html>
>>>>>>> 7b76d8a88afa4db8212a2ec9314ed0cf16a0cbec
