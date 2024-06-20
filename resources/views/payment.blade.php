<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../trans.css" />
    <link rel="stylesheet" href="../newParticle.css" />
    <script defer src="../newParticle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.0/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        /* General Body Styles */
        body {
            background-color: #121212;
            color: #f8f9fa;
            font-family: "Roboto", sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Particles Background */
        .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        /* Form Container Styles */
        .trans {
            position: relative;
            left: -28%;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            width: 700px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        /* Form Element Styles */
        .form-label {
            color: #e0e0e0;
        }

        .form-control {
            background-color: #333;
            border: 1px solid #555;
            color: #f8f9fa;
        }

        .form-control:focus {
            background-color: #444;
            border-color: #777;
            box-shadow: none;
            color: #f8f9fa;
        }

        select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Bank Icons Container */
        .bank-icons,
        .ewallet-icons {
            display: none;
            margin-top: 15px;
        }

        .bank-icons img,
        .ewallet-icons img {
            width: 80px;
            margin: 0 10px;
            filter: brightness(0) invert(1);
            /* Adjust to fit the dark theme */
        }

        /* Credit Card Form */
        .credit-card-form {
            display: none;
            margin-top: 15px;
        }

        /* Footer Styles */
        .footer-wrapper {
            background-color: #222;
            padding: 40px 0;
        }

        .sectionfoot {
            padding: 20px;
        }

        .footer-wrapper hr {
            border-color: #444;
        }

        footer {
            color: #aaa;
        }

        footer a {
            color: #ddd;
            text-decoration: none;
        }

        footer a:hover {
            color: #fff;
        }

        footer i {
            font-size: 1.2em;
            margin-right: 10px;
        }
    </style>
    <link rel="stylesheet" href="../newParticle.css">
    <script defer src="../newParticle.js"></script>
</head>

<body>
    <div id="particles-js" class="particles"></div>

        <div class="main-content">
            <div class="trans">
                <h1 class="text-light">Isi Data Diri</h1>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label text-light"
                            >Nama</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="name" value="{{ $user->username }}"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-light"
                            >Nomor Telepon</label
                        >
                        <input
                            type="tel"
                            class="form-control"
                            value="{{ $user->phone_number }}"
                            id="phone"
                            required
                        />
                    </div>
                    <div class="mb-3">
                        <label
                            for="payment-method"
                            class="form-label text-light"
                            >Metode Pembayaran</label
                        >
                        <select
                            class="form-control"
                            id="payment-method"
                            required
                        >
                            <option value="credit-card">Kartu Kredit</option>
                            <option value="bank-transfer">Transfer Bank</option>
                            <option value="ewallet">E-Wallet</option>
                        </select>
                    </div>
                    <!-- Container untuk form kartu kredit -->
                    <div id="credit-card-form" class="credit-card-form">
                        <div class="mb-3">
                            <label
                                for="card-number"
                                class="form-label text-light"
                                >Nomor Kartu</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="card-number"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label
                                for="expiry-date"
                                class="form-label text-light"
                                >Tanggal Kadaluarsa</label
                            >
                            <input
                                type="month"
                                class="form-control"
                                id="expiry-date"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="cvv" class="form-label text-light"
                                >CVV</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="cvv"
                                required
                            />
                        </div>
                    </div>
                    <!-- Container untuk gambar ikon bank -->
                    <div id="bank-icons" class="bank-icons text-center">
                        <img src="../BCA.png" alt="BCA" />
                        <img src="../BRI.png" alt="BRI" />
                        <img src="../BNI.png" alt="BNI" />
                        <img src="../mandiri.png" alt="Mandiri" />
                    </div>
                    <!-- Container untuk ikon E-Wallet -->
                    <div id="ewallet-icons" class="ewallet-icons text-center">
                        <img src="../gopay.png" alt="GoPay" />
                        <img src="../ovo.png" alt="OVO" />
                        <img src="../shopeepay.png" alt="ShopeePay" />
                        <img src="../qris.png" alt="QRIS" />
                    </div>
                    <div>Total Harga: Rp {{ $totalHarga }}</div>
                    <button type="submit" class="btn btn-primary mt-3">
                        Submit
                    </button>
                </form>
            </div>
        </div>

    <div class="footer-wrapper">
        <section class="sectionfoot">
            <hr class="hr hr-blurry" />
            <footer class="text-center text-lg-start text-muted">
                <!-- Footer content -->
            </footer>
        </section>
    </div>

    <script>
        document.getElementById("payment-method").addEventListener("change", function() {
            var paymentMethod = this.value;
            var creditCardForm = document.getElementById("credit-card-form");
            var bankIcons = document.getElementById("bank-icons");
            var ewalletIcons = document.getElementById("ewallet-icons");

            // Tampilkan form atau ikon yang sesuai
            if (paymentMethod === "credit-card") {
                creditCardForm.style.display = "block";
                bankIcons.style.display = "none";
                ewalletIcons.style.display = "none";
            } else if (paymentMethod === "bank-transfer") {
                creditCardForm.style.display = "none";
                bankIcons.style.display = "block";
                ewalletIcons.style.display = "none";
            } else if (paymentMethod === "ewallet") {
                creditCardForm.style.display = "none";
                bankIcons.style.display = "none";
                ewalletIcons.style.display = "block";
            } else {
                creditCardForm.style.display = "none";
                bankIcons.style.display = "none";
                ewalletIcons.style.display = "none";
            }
        });

        document.addEventListener('DOMContentLoaded', (event) => {
            const reviewForm = document.getElementById('trans');

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
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>

</html>
