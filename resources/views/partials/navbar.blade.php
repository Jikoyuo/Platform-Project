<!-- navbar setelah login -->
@if ($logged)
<!-- navbar setelah login -->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand text-danger" href="/">Kasetflix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/genres/horror">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/genres">Genres</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More Genres
                    </a>
                    <ul class="dropdown-menu multi-column">
                        @foreach ($genres as $genre)
                        <li><a class="dropdown-item" href="/genres/{{$genre->slug}}">{{$genre->genre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <a href="#" style="margin-left: 55%;" id="buttonPay">
                <box-icon name='receipt' type='solid' color='#ffffff'></box-icon>
            </a>

            <a href="/cart" style="margin-left:40px;">
                <box-icon name="cart" type="solid" color="#ffffff"></box-icon>
            </a>

            <div class="cart-icon">
            <span class="cart-count">0</span>
            🛒
        </div>


            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../profile.jpeg" width="40" height="40" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        @if ($admin)
                            <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
                        @endif
                        <li><a class="dropdown-item" href="#">Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Log
                                Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar login -->

<script>
const buttonPay = document.getElementById("buttonPay");
            buttonPay.addEventListener("click", showAlert);


        function showAlert() {
                const alertBox = document.createElement("div");
                alertBox.className = "custom-alert alert alert-success alert-dismissible fade show";
                alertBox.role = "alert";
                alertBox.innerHTML = `
                    <strong>Success!</strong> Your payment has been processed.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                document.body.appendChild(alertBox);

                // Automatically remove the alert after a certain time (optional)
                setTimeout(() => {
                    alertBox.classList.remove('show');
                    alertBox.addEventListener('transitionend', () => {
                        alertBox.remove();
                    });
                }, 5000); // 5 seconds

                // Create the popup div
                const popupDiv = document.createElement("div");
                popupDiv.className = "popup";
                popupDiv.innerHTML = `
                    <div class="popup-content">
                        <span class="close">&times;</span>
                        <h1 class="text-center">Transaction History</h1>
                        <p>Date: 21 June 2024</p>
                        <p>Nama Kaset: Dune</p>
                    </div>
                `;
                document.body.appendChild(popupDiv);

                // Display the popup
                popupDiv.style.display = "block";

                // Add close event to the close button
                const closeBtn = popupDiv.querySelector(".close");
                closeBtn.addEventListener("click", () => {
                    popupDiv.style.display = "none";
                });

                // Close the popup when clicking outside of the popup content
                window.addEventListener("click", (event) => {
                    if (event.target == popupDiv) {
                        popupDiv.style.display = "none";
                    }
                });
            }

            // scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const addToCartButton = document.querySelector('.add-to-cart');
    const cartCount = document.querySelector('.cart-count');

    let itemCount = 0;

    addToCartButton.addEventListener('click', () => {
        itemCount++;
        cartCount.textContent = itemCount;
    });
});

</script>
@else
<nav class="navbar navbar-expand-lg  mt-5">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/home">Kasetflix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/genres/horror">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/genres">Genres</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More Genres
                    </a>
                    <ul class="dropdown-menu multi-column">
                        @foreach ($genres as $genre)
                        <li><a class="dropdown-item" href="/genres/{{$genre->slug}}">{{$genre->genre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-end text-light me-xxl-5">
            <a href="/login">
                <button class="btn btn-danger" style="height: 40px; font-family: 'Poppins', sans-serif;">Login</button>
            </a>
        </div>

    </div>
</nav>
<!-- end navbar login -->
@endif
