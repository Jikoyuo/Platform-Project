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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @include('partials.navbar')
    <div id="particles-js" class="particles"></div>

    <div class="main-content">
        <div class="container-trans">
            <div class="container-title">
                <h1 class="text-white">History Transaction</h1>
            </div>
            @foreach ($transactions as $transaction)
                <div class="container-product align-content-center">
                    <div class="prod" data-movie-id="{{$transaction->product_id}}" data-movie-price="{{$transaction->price}}">
                        <div class="card">
                            <img src="{{$transaction->img_url}}" alt="Card image cap">
                        </div>
                        <div class="priceProd">
                            <h5 class="text-white">RP <span id="{{$transaction->product_id}}">{{$transaction->price}}x{{$transaction->quantity}}</span></h5>
                        </div>
                        <div class="desc-prod">
                            <h4 class="text-white">{{$transaction->name}}</h4>
                            <h7 class="text-white">{{$transaction->order_date}}</h7>
                        </div>
                        <a href="/review/{{$transaction->product_id}}">
                            <button type="button" class="btn btn-dark btn-bb">Beri Ulasan</button>
                        </a>
                        <a href="/product/{{$transaction->slug}}">
                            <button id="btnBuyBack" type="button" class="btn btn-dark btn-bb">Beli Lagi</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Popup -->
        <div id="reviewPopup" class="popup">
            <div class="popup-content">
                <span class="close">&times;</span>
                <h2>Beri Ulasan</h2>
                <form id="reviewForm">
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating (1-5):</label>
                        <input type="number" id="rating" class="form-control" name="rating" min="1" max="5" required>
                        <input type="hidden" id="id" value="">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Ulasan:</label>
                        <textarea id="review" class="form-control" name="review" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="footer-wrapper">
            <section class="sectionfoot">
                <hr class="hr hr-blurry">
                <!-- Footer -->
                @include('partials.footer')
            </section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const btnUlasan = document.querySelectorAll('#btnUlasan');
            const popup = document.getElementById('reviewPopup');
            const closeBtn = document.querySelector('.popup .close');
            const reviewForm = document.getElementById('reviewForm');

            btnUlasan.forEach(button => {
                button.addEventListener('click', () => {
                    popup.style.display = 'block';
                });
            });

            closeBtn.addEventListener('click', () => {
                popup.style.display = 'none';
            });

            window.addEventListener('click', (event) => {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            });

            reviewForm.addEventListener('submit', (event) => {
                event.preventDefault();
                Swal.fire({
                    title: 'Success!',
                    text: 'Ulasan berhasil diunggah!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    popup.style.display = 'none';
                    reviewForm.reset();
                });
            });



        //     <div id="reviewPopup" class="popup">
        //     <div class="popup-content">
        //         <span class="close">&times;</span>
        //         <h2>Beri Ulasan</h2>
        //         <form id="reviewForm">
        //             <div class="mb-3">
        //                 <label for="rating" class="form-label">Rating (1-5):</label>
        //                 <input type="number" id="rating" class="form-control" name="rating" min="1" max="5" required>
        //             </div>
        //             <div class="mb-3">
        //                 <label for="review" class="form-label">Ulasan:</label>
        //                 <textarea id="review" class="form-control" name="review" rows="4" required></textarea>
        //             </div>
        //             <button type="submit" class="btn btn-primary">Submit</button>
        //         </form>
        //     </div>
        // </div>

        });
    </script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>



</body>

</html>
