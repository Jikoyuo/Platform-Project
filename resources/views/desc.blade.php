<!doctype html>
<html lang="en">

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
    <div id="particles-js" class="particles"></div>
        @include('partials.navbarDesc')
        @include('partials.background')

        <div class="describe d-flex align-items-center full-height">
            <div class="card mb-3 text-white card-custom">

                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="Dune.jpeg" class="img-fluid rounded-start" alt="Dune">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Dune 2024</h5>
                            <div class="rating" data-rating="4.5">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <iframe width="150%" height="400" src="https://www.youtube.com/embed/6tzur6JrUEA?si=dVnsLDluvVfSlUSF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <p class="card-price mt-3">Price: Rp. 100.999</p>
                            <button class="btn btn-danger mt-2">Add to Cart</button>
                            <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Section 2: Ulasan Pembeli -->
    <section id="section2" class="my-5">
        <div class="container">
            <h2 class="text-center text-white mb-4">Ulasan Pembeli</h2>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pembeli 1</h5>
                    <div class="rating" data-rating="4.0">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="card-text">Film yang sangat bagus! Saya sangat menikmatinya dan sangat merekomendasikan untuk ditonton.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pembeli 2</h5>
                    <div class="rating" data-rating="5.0">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p class="card-text">Ceritanya sangat menarik dan visualnya luar biasa. Wajib ditonton!</p>
                    <p class="card-text"><small class="text-muted">Last updated 1 day ago</small></p>
                </div>
            </div>
            <!-- Tambahkan ulasan lainnya di sini -->
        </div>
    </section>

    <!-- Section 3: Rekomendasi Film Lain -->
    <section id="section3" class="my-5">
        <div class="container">
            <h2 class="text-center text-white mb-4">Rekomendasi Film Lain</h2>
            <div class="row">
                <!-- Card Film 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Dune.jpeg" class="img-fluid rounded-start" alt="Dune">
                        <div class="card-body">
                            <h5 class="card-title">Film 1</h5>
                            <p class="card-text">Deskripsi singkat tentang film 1.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Card Film 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Dune.jpeg" class="img-fluid rounded-start" alt="Dune">
                        <div class="card-body">
                            <h5 class="card-title">Film 2</h5>
                            <p class="card-text">Deskripsi singkat tentang film 2.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Card Film 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Dune.jpeg" class="img-fluid rounded-start" alt="Dune">
                        <div class="card-body">
                            <h5 class="card-title">Film 3</h5>
                            <p class="card-text">Deskripsi singkat tentang film 3.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan kartu film lainnya di sini -->
            </div>
        </div>
    </section>

    <!-- Section 4 -->
    <section id="section4">
        <hr class="hr hr-blurry">
        @include('partials.footer')
    </section>

    <script src="script.js"></script>
    <script>
        // Fungsi untuk mengubah penilaian ikon bintang dengan nilai desimal
        function setRating(ratingElement) {
            const rating = parseFloat(ratingElement.getAttribute('data-rating'));
            const stars = ratingElement.querySelectorAll('i');

            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.remove('far');
                    star.classList.add('fas');
                } else {
                    star.classList.remove('fas');
                    star.classList.add('far');
                }
            });

            // Add half-star class if the rating is not a whole number
            if (rating % 1 !== 0) {
                stars[Math.floor(rating)].classList.add('fas', 'fa-star-half-alt');
                stars[Math.floor(rating)].classList.remove('fa-star');
            }
        }

        // Set rating for all elements with class rating
        document.querySelectorAll('.rating').forEach(setRating);
    </script>
</body>

</html>