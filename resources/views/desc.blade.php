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
                        </div>
                    </div>
                </div>
            </div>
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
