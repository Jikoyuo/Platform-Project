<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title || {{$title}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../trans.css">
    <link rel="stylesheet" href="../newParticle.css">
    <script defer src="../newParticle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @include('partials.navbar')
    <div id="particles-js" class="particles"></div>

    <div class="main-content">
        @if (!empty($cart) && count($cart) > 0)
            <div class="trans">
                <h1 class="text-light">Rincian Belanja</h1>
                <h2 class="text-light">Item: <span id="total-items">{{$amount}}</span></h2>
                <h2 class="text-light" style="margin-top: 7%;">Total: <span id="total-price">{{$total}}</span></h2>
                <a id="buttonPay" href="/payment" class="btn btn-dark btn-trans">Checkout</a>
            </div>
        @else
            <div class="jumbotron jumbotron-fluid text-white">
                <div class="container">
                    <h1 class="display-8">Keranjang Anda Kosong !<br> Ayo Isi Keranjang Anda Dengan Film Favorite Kamu !</h1>
                </div>
            </div>
        @endif

        <div class="container-trans">
            <div class="container-title"></div>
            @foreach ($items as $item)
                <div class="container-product align-content-center" >
                    <div class="prod" data-movie-id="{{ $item['id'] }}" data-movie-price="{{ $item['price'] }}">
                        <div class="card" style="width: 100px; height: auto; background-color: #444444;">
                            <img class="card-img-top" src="{{$item['img_url']}}" alt="Card image cap">
                        </div>
                        <div class="priceProd">
                            <h5 class="text-white">RP <span id="{{$item['slug']}}">{{$item['price']}}</span></h5>
                        </div>
                        <div class="desc-prod">
                            <h3 class="text-white">{{$item['name']}}</h3>
                            <h4 class="text-white">{{$item['year']}}</h4>
                        </div>
                        <div class="quantity">
                            <button class="minus minus-button" aria-label="Decrease" data-movie-id="{{$item['id']}}">-</button>
                            <input type="number" id="quantity-{{$item['id']}}" class="input-box quantity-input" value="1" min="1" max="{{$item['stock']}}" min="1" value="1">
                            <button class="plus plus-button" aria-label="Increase" data-movie-id="{{$item['id']}}">+</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="footer-wrapper">
        <section class="sectionfoot">
            <hr class="hr hr-blurry">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block text-white">
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
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class>
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4 text-white">
                                    <i class="fas fa-gem me-3"></i>Company name
                                </h6>
                                <p class="text-white">
                                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                                    dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-white">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    ####
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    ####
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">####</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3"></i> Sleman, DIY, Indonesia</p>
                                <p><i class="fas fa-envelope me-3"></i> sadhar@sadhar.com</p>
                                <p><i class="fas fa-phone me-3"></i> 911</p>
                                <p><i class="fas fa-print me-3"></i> 911</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div class="text-center p-4 text-white" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2024 Copyright:
                    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
        </section>
    </div>

    <script type="text/javascript">


        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.quantity-input').forEach(input => {
                input.addEventListener('input', () => {
                    updateSummary();
                });
            });

            document.querySelectorAll('.minus-button').forEach(button => {
                button.addEventListener('click', () => {
                    updateQuantity(button.getAttribute('data-movie-id'), -1);
                });
            });

            document.querySelectorAll('.plus-button').forEach(button => {
                button.addEventListener('click', () => {
                    updateQuantity(button.getAttribute('data-movie-id'), 1);
                });
            });

            updateSummary(); // Initialize the summary
        });

        function updateQuantity(item, change) {
            const quantityElement = document.getElementById(`quantity-${item}`);
            let quantity = parseInt(quantityElement.value);
            quantity = Math.max(0, quantity + change); // Ensure quantity is not negative
            quantityElement.value = quantity;

            updateSummary();
        }

        function updateSummary() {
            let totalItems = 0;
            let totalPrice = 0;

            document.querySelectorAll('div[data-movie-id]').forEach(movieDiv => {
                const movieId = movieDiv.getAttribute('data-movie-id');
                const moviePrice = parseFloat(movieDiv.getAttribute('data-movie-price'));
                const quantityElement = document.getElementById(`quantity-${movieId}`);
                const quantity = parseInt(quantityElement.value);

                if (!isNaN(quantity) && !isNaN(moviePrice)) {
                    totalItems += quantity;
                    totalPrice += quantity * moviePrice;
                }
            });

            document.getElementById('total-items').innerText = totalItems;
            document.getElementById('total-price').innerText = `Rp ${totalPrice}`;
        }
        
    </script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>



</body>

</html>
