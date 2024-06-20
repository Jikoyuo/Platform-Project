<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../trans.css" />
    <link rel="stylesheet" href="../newParticle.css" />
    <style>
        :root {
            --bg-color: #121212;
            --text-color: #f8f9fa;
            --card-bg-color: rgba(0, 0, 0, 0.8);
            --input-bg-color: #333;
            --input-border-color: #555;
            --input-focus-bg-color: #444;
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
        }

        .container {
            margin-top: 20px;
        }

        .checkout-header,
        .checkout-body,
        .summary {
            background-color: var(--card-bg-color);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
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
    </style>
    <script defer src="../newParticle.js"></script>
</head>

<body>
    <div id="particles-js" class="particles"></div>

    <div class="container">
        <div class="checkout-header">
            <h3 class="text-light">Checkout</h3>
            <div class="mb-3">
                <label for="address" class="form-label text-light">Alamat Pengiriman</label>
                <textarea class="form-control" id="address" rows="3" placeholder="Masukkan alamat pengiriman"></textarea>
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
                <div class="item-price">Rp. {{$item->price}}</div>
            </div>
            @endforeach
        </div>

        <div class="summary">
            <h5>Ringkasan Belanja</h5>
            <p>Total Harga (2 Produk) <span>Rp127.930</span></p>
            <div class="summary-total">
                <p>Total Tagihan</p>
                <p>Rp127.930</p>
            </div>
            <button class="btn btn-primary" id="payment-button">Pilih Pembayaran</button>
        </div>

        <div class="payment-methods" id="payment-methods">
            <h5 class="text-light">Metode Pembayaran</h5>
            <button class="btn btn-outline-light" id="bank-transfer-button">Transfer Bank</button>
            <button class="btn btn-outline-light" id="ewallet-button">E-Wallet</button>
            <div class="bank-methods" id="bank-methods">
                <button><img src="../BNI.png" alt="BNI"></button>
                <button><img src="../BCA.png" alt="BCA"></button>
                <button><img src="../BRI.png" alt="BRI"></button>
                <button><img src="../mandiri.png" alt="Mandiri"></button>
            </div>
            <div class="ewallet-methods" id="ewallet-methods">
                <button><img src="../qris.png" alt="Qris"></button>
                <button><img src="../gopay.png" alt="Gopay"></button>
                <button><img src="../ovo.png" alt="Ovo"></button>
                <button><img src="../shopeepay.png" alt="ShopeePay"></button>
            </div>
        </div>
        
        <!-- Tombol Bayar -->
        <button class="btn btn-primary mt-3" id="pay-button" style="display: none;">Bayar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    </script>
</body>

</html>
