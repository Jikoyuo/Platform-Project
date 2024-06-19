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
    <link rel="stylesheet" href="../historyStyle.css">
    <link rel="stylesheet" href="../newParticle.css">
    <script defer src="../newParticle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @include('partials.navbar')
    <div id="particles-js" class="particles"></div>

    <div class="main-content">
        <!-- <div class="jumbotron jumbotron-fluid text-white">
                <div class="container">
                    <h1 class="display-8">Keranjang Anda Kosong !<br> Ayo Isi Keranjang Anda Dengan Film Favorite Kamu !</h1>
                </div>
            </div> -->

        <div class="container-trans">
            <div class="container-title">
                <h1 class="text-white">History Transaction</h1>
            </div>
            <div class="container-product align-content-center">
                <div class="prod" data-movie-id="1" data-movie-price="1000">
                    <div class="card">
                        <img src="https://i.pinimg.com/564x/ec/26/30/ec26305be8193a6ec10b20e69f9861e0.jpg" alt="Card image cap">
                        <h5 class="text-center text-white">Action</h5>
                    </div>
                    <div class="priceProd">
                        <h5 class="text-white">RP <span id="ewe">1000</span></h5>
                    </div>
                    <div class="desc-prod">
                        <h3 class="text-white">ewe</h3>
                        <h4 class="text-white">1999</h4>
                    </div>
                    <button id="btnBuyBack" href="/home" type="button" class="btn btn-dark btn-bb">Beli Lagi</button>
                </div>
            </div>

            <div class="container-product align-content-center">
                <div class="prod" data-movie-id="1" data-movie-price="1000">
                    <div class="card">
                        <img src="https://i.pinimg.com/564x/ec/26/30/ec26305be8193a6ec10b20e69f9861e0.jpg" alt="Card image cap">
                        <h5 class="text-center text-white">Action</h5>
                    </div>
                    <div class="priceProd">
                        <h5 class="text-white">RP <span id="ewe">1000</span></h5>
                    </div>
                    <div class="desc-prod">
                        <h3 class="text-white">ewe</h3>
                        <h4 class="text-white">1999</h4>
                    </div>
                    <button id="btnBuyBack" href="/home" type="button" class="btn btn-dark btn-bb">Beli Lagi</button>
                </div>
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


        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>



</body>

</html>
