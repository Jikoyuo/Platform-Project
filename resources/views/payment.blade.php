<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../trans.css" />
    <link rel="stylesheet" href="../newParticle.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <style>
    :root {
    --bg-color: #000000; /* Background hitam */
    --text-color: #f8f9fa;
    --card-bg-color: #333333; /* Warna abu-abu untuk container */
    --input-bg-color: #444;
    --input-border-color: #555;
    --input-focus-bg-color: #555;
    --input-focus-border-color: #777;
    --button-bg-color: #007bff;
    --button-hover-bg-color: #0056b3;
    --footer-bg-color: #222;
    --footer-text-color: #aaa;
    --footer-link-color: #ddd;
    --footer-link-hover-color: #fff;
    --footer-border-color: #444;
}

body {
    background-color: var(--bg-color);
    color: var(--text-color);
    font-family: "Roboto", sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
}

.container {
    /* background-color: #0056b3; */
    position: absolute;
    left: 15%;
    z-index: 2;
    padding-top: 10px;
    background-color: var(--card-bg-color);
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    top:15% ;
}

.checkout-header,
.checkout-body,
.summary {
    background-color: transparent;
    padding: 20px;
    border-radius: 8px;
}

.checkout-body,
.summary {
    margin-top: 20px;
}

.item-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    padding: 10px 0;
    border-bottom: 1px solid #444;
}

.item-row:last-child {
    border-bottom: none;
}

.item-details {
    display: flex;
}

.item-image {
    width: 80px;
    height: 80px;
    object-fit: cover;
    margin-right: 15px;
}

.item-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.item-info h5 {
    margin: 0;
    font-size: 16px;
    color: var(--text-color);
}

.item-info p {
    margin: 5px 0 0;
    color: #e0e0e0;
}

.item-price {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    font-weight: bold;
    color: var(--text-color);
}

.summary h5 {
    margin-bottom: 20px;
    color: var(--text-color);
}

.summary p {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    color: var(--text-color);
}

.summary-total {
    display: flex;
    justify-content: space-between;
    font-weight: bold;
    margin-top: 20px;
    color: var(--text-color);
}

.btn-primary {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: var(--button-bg-color);
    border: none;
}

.btn-primary:hover {
    background-color: var(--button-hover-bg-color);
}

.btn-success {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    background-color: #4caf50;
    border: none;
}

.btn-success:hover {
    background-color: #388e3c;
}

.promo-button {
    background-color: #4caf50;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
}

.form-control {
    background-color: var(--input-bg-color);
    border: 1px solid var(--input-border-color);
    color: var(--text-color);
}

.form-control:focus {
    background-color: var(--input-focus-bg-color);
    border-color: var(--input-focus-border-color);
    box-shadow: none;
    color: var(--text-color);
}

select.form-control {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.payment-methods {
    display: none;
    margin-top: 20px;
    background-color: var(--card-bg-color);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
}

.payment-methods button {
    display: inline-block;
    width: auto;
    margin: 5px;
    padding: 10px 20px;
    background-color: var(--input-bg-color);
    border: none;
    border-radius: 8px;
}

.payment-methods button img {
    width: 50px;
    height: 50px;
}

.bank-methods,
.ewallet-methods {
    display: none;
    margin-top: 20px;
}

button.payment-button.selected {
    background-color: #d3d3d3;
}

.bank-methods button,
.ewallet-methods button {
    display: inline-block;
    margin: 5px;
    background-color: var(--input-bg-color);
    border: none;
    border-radius: 8px;
    padding: 10px;
}

.bank-methods button img,
.ewallet-methods button img {
    width: 50px;
    height: 50px;
}

.form-control::placeholder {
    color: #aaa;
    opacity: 1;
}

#backButton {
    position: absolute;
    left: 20px;
    top: 20px;
}

#address{
    background-color:white;
    color: #000000
}


    </style>


</head>

<body>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <div id="particles-js" class="particles"></div>
    <a href="/cart" id="backButton" class="btn btn-danger">Back to Cart</a>
    <div class="container">

        <div class="checkout-header">
            <h3 class="text-light">Checkout</h3>
            <div class="mb-3">
                <label for="address" class="form-label text-light">Alamat Pengiriman</label>
                <textarea class="form-control" id="address" rows="3" placeholder="Masukkan alamat pengiriman">{{$address}}</textarea>
            </div>
        </div>

        <div class="checkout-body">
            @foreach ($carts as $item)
            <div class="item-row">
                <div class="item-details">
                    <img src="{{$item->img_url}}" alt="Product Image" class="item-image">
                    <div class="item-info">
                        <h5>{{$item->name}}</h5>
                    </div>
                </div>
                <div class="item-price">Rp. {{$item->price}}x{{$item->quantity}}</div>
            </div>
            @endforeach
        </div>

        <div class="summary">
            <h5>Ringkasan Belanja</h5>
            <p>Total Harga ({{$amount}} Produk) <span>{{$totalHarga}}</span></p>
            <div class="summary-total">
                <p>Total Tagihan</p>
                <p>{{$totalHarga}}</p>
            </div>
            <button class="btn btn-primary" id="payment-button">Pilih Pembayaran</button>
        </div>

        <div class="payment-methods" id="payment-methods">
            <h5 class="text-light">Metode Pembayaran</h5>
            <button class="btn btn-outline-light" id="bank-transfer-button">Transfer Bank</button>
            <button class="btn btn-outline-light" id="ewallet-button">E-Wallet</button>
            <div class="bank-methods" id="bank-methods">
                <button class="payment-button"><img src="../bni.webp" alt="BNI"></button>
                <button class="payment-button"><img src="../bca.jpeg" alt="BCA"></button>
                <button class="payment-button"><img src="../bri.jpg" alt="BRI"></button>
                <button class="payment-button"><img src="../mandiri.png" alt="Mandiri"></button>
            </div>
            <div class="ewallet-methods" id="ewallet-methods">
                <button class="payment-button"><img src="../qris.jpg" alt="Qris"></button>
                <button class="payment-button"><img src="../gopay.jpg" alt="Gopay"></button>
                <button class="payment-button"><img src="../ovo.png" alt="Ovo"></button>
                <button class="payment-button"><img src="../shoopee.jpg" alt="ShopeePay"></button>
            </div>
        </div>

        <!-- Popup -->
        <div id="paymentPopup" class="popup">
            <div class="popup-content">
                <span class="close">&times;</span>
                <h2>Pembayaran Berhasil!</h2>
                <p>Your payment has been processed successfully.</p>
                <button id="closePopup" class="btn btn-primary">OK</button>
            </div>
        </div>

        <form action="/transaction/completed" method="POST">
            @csrf
            @foreach ($carts as $item)
                <input type="hidden" name="items[{{$item->product_id}}][id]" value="{{$item->product_id}}">
                <input type="hidden" name="items[{{$item->product_id}}][quantity]" value="{{$item->quantity}}">
                <input type="hidden" name="items[{{$item->product_id}}][price]" value="{{$item->price}}">
            @endforeach
            <!-- Tombol Bayar -->
            <button type="submit" class="btn btn-primary mt-3" id="pay-button" style="display: none;">Bayar</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('payment-button').addEventListener('click', function () {
            document.getElementById('payment-methods').style.display = 'block';
        });

        document.getElementById('bank-transfer-button').addEventListener('click', function () {
            document.getElementById('bank-methods').style.display = 'block';
            document.getElementById('ewallet-methods').style.display = 'none';
            document.getElementById('pay-button').style.display = 'block';
        });

        document.getElementById('ewallet-button').addEventListener('click', function () {
            document.getElementById('bank-methods').style.display = 'none';
            document.getElementById('ewallet-methods').style.display = 'block';
            document.getElementById('pay-button').style.display = 'block';
        });

        document.addEventListener('DOMContentLoaded', () => {
            const bankMethodsButtons = document.querySelectorAll('#bank-methods .payment-button');
            const ewalletMethodsButtons = document.querySelectorAll('#ewallet-methods .payment-button');

            const handleButtonClick = (event) => {
                // Hapus kelas 'selected' dari semua tombol
                [...bankMethodsButtons, ...ewalletMethodsButtons].forEach(btn => btn.classList.remove('selected'));

                // Tambahkan kelas 'selected' pada tombol yang diklik
                event.currentTarget.classList.add('selected');
            };

            bankMethodsButtons.forEach(button => {
                button.addEventListener('click', handleButtonClick);
            });

            ewalletMethodsButtons.forEach(button => {
                button.addEventListener('click', handleButtonClick);
            });
        });

        document.getElementById('pay-button').addEventListener('click', function (event) {
            event.preventDefault();
            Swal.fire({
                title: 'Pembayaran anda berhasil!',
                text: 'Your payment has been processed successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/history"; // Ganti dengan URL halaman riwayat transaksi
                }
            });
        });
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

</body>

</html>
