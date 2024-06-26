<style>
    .text-red {
    color: #dc3545 !important;
}
</style>

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
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="/genres/horror">Horror</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/genres">Genres</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/home#section3">MovieList</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Genres
                    </a>

                    <ul class="dropdown-menu multi-column">
                        @foreach ($genres as $genre)
                        <li><a class="dropdown-item" href="/genres/{{$genre->slug}}">{{$genre->genre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <a href="/history" style="margin-left: 63%;" id="buttonPay">
                <box-icon class="custom-icon" name='receipt' type='solid' color='#ffffff'></box-icon>
            </a>

            <a href="/cart" style="margin-left:55px;">
                <box-icon class="custom-icon" name="cart" type="solid" color="#ffffff"></box-icon>
            </a>



            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../profile.jpeg" width="40" height="40" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        @if ($admin)
                            <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
                        @endif
                        <li><a class="dropdown-item" href="/profile">Edit
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

@else
<nav class="navbar navbar-expand-lg mt-5">
    <div class="container-fluid">
        <a class="navbar-brand text-light navbar-brand-custom text-red" href="/home">Kasetflix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Genres
                    </a>
                    <ul class="dropdown-menu multi-column">
                        @foreach ($genres as $genre)
                        <li><a class="dropdown-item" href="/genres/{{$genre->slug}}">{{$genre->genre}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-end text-white me-xxl-5">
            <a href="/login">
                <button class="btn" style="height: 40px; background-color: rgba(182,6,25,255);">Login</button>
            </a>
        </div>
    </div>
</nav>

<!-- end navbar login -->
@endif
