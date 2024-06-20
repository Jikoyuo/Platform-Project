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
            <form action="/cart/payment" method="POST">
                @csrf
                <div class="trans">
                    <h1 class="text-light">Rincian Belanja</h1>
                    <h2 class="text-light">Item: <span id="total-items">{{$amount}}</span></h2>
                    <h2 class="text-light" style="margin-top: 7%;">Total: <span id="total-price">{{$total}}</span></h2>
                    <input type="hidden" id="total_price" name="total" value="0">
                    <button type="submit" id="buttonPay" class="btn btn-dark btn-trans">Checkout</button>
                </div>
            </form>
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
                            <img class="card-img-top" src="{{$item['img_url']}}" alt="Card image cap" style="max-height:170px;">
                        </div>
                        <div class="priceProd">
                            <h5 class="text-white">RP <span id="{{$item['slug']}}">{{$item['price']}}</span></h5>
                        </div>
                        <div class="desc-prod">
                            <h3 class="text-white">{{$item['name']}}</h3>
                            <h4 class="text-white">{{$item['year']}}</h4>
                        </div>
                        <a href="#">
                        <box-icon id="deleteCart" class="custom-icon" name='trash' type='solid' color='#ffffff' style="margin-left: 10px; margin-right: 10px;"></box-icon> <!-- Icon trash -->
                        </a>
                        <div class="quantity" style="background-color: aquamarine;">
    <button class="minus minus-button" aria-label="Decrease" data-movie-id="{{$item['id']}}">-</button>
    <input type="number" id="quantity-{{$item['id']}}" class="input-box quantity-input" value="1" min="0" max="{{$item['stock']}}" value="1">
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
            @include('partials.footer')
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
            quantity = Math.max(1, quantity + change); // Ensure quantity is not negative
            quantityElement.value = quantity;
            if (quantity > quantityElement.getAttribute('max')) {
                quantityElement.value = quantityElement.getAttribute('max');
            }
            else if (quantity.value < quantityElement.getAttribute('min')){
                quantityElement.value = quantityElement.getAttribute('min');
            }

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
            document.getElementById('total_price').value = totalPrice;
        }

    </script>
 <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>



</body>

</html>
