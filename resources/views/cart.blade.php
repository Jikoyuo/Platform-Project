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

        .promo-button {
            background-color: #4caf50;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
    <script defer src="../newParticle.js"></script>
</head>

<body>
    <div id="particles-js" class="particles"></div>

    <div class="container">
        <div class="checkout-header">
            <h3 class="text-light">Checkout</h3>
            <div>
                <p><strong>Alamat Pengiriman</strong></p>
                <p>Ade (Alamat Rumah) - Usman</p>
                <button class="btn btn-outline-secondary btn-sm">Pilih Alamat Lain</button>
                <button class="btn btn-outline-secondary btn-sm">Kirim Ke Beberapa Alamat</button>
            </div>
        </div>

        <div class="checkout-body">
            <div class="item-row">
                <div class="item-details">
                    <img src="https://via.placeholder.com/80" alt="Product Image" class="item-image">
                    <div class="item-info">
                        <h5>Unicharm Official Store</h5>
                        <p>ManyPoko Wipes Tisu Basah Reguler S2 Perfume</p>
                        <button class="promo-button">Gunakan Promo Tokopedia</button>
                    </div>
                </div>
                <div class="item-price">Rp8.930</div>
            </div>
            <div class="item-row">
                <div class="item-details">
                    <img src="https://via.placeholder.com/80" alt="Product Image" class="item-image">
                    <div class="item-info">
                        <h5>Maxim Official Store</h5>
                        <p>Maxim Valentino in Color Red 26cm - Wajan Teflon</p>
                        <button class="promo-button">Gunakan Promo Tokopedia</button>
                    </div>
                </div>
                <div class="item-price">Rp119.000</div>
            </div>
        </div>

        <div class="summary">
            <h5>Ringkasan Belanja</h5>
            <p>Total Harga (2 Produk) <span>Rp127.930</span></p>
            <div class="summary-total">
                <p>Total Tagihan</p>
                <p>Rp127.930</p>
            </div>
            <button class="btn btn-primary">Pilih Pembayaran</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const reviewForm = document.querySelector('form');

            reviewForm.addEventListener('submit', (event) => {
                event.preventDefault();
                Swal.fire({
                    title: 'Success!',
                    text: 'Ulasan berhasil diunggah!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    reviewForm.reset();
                });
            });
        });
    </script>
</body>

</html>
