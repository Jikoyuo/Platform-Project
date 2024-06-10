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
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/6tzur6JrUEA?si=dVnsLDluvVfSlUSF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <p class="card-price mt-3">Price: Rp. 100.999</p>
                            <button class="btn btn-danger mt-2">Add to Cart</button>
                            <p class="card-text"><small class="text-white">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
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
