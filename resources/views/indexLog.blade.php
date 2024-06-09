@extends('layouts.main')

@include('partials.navbarLog')

@section('content')
<title>Kasetflix || {{$title}} </title>
<!-- jumbotron kalimat landing page dan search -->
<div class="jumbotron jumbotron-fluid text-white">
    <div class="container">
        <h1 class="display-8">Film, acara TV tak terbatas, dan banyak
            lagi. Tonton di mana pun. Batalkan kapan pun. Siap belanja?
            Daftar dan mulai berbelanja film favoritmu!</h1>
    </div>
    <form action="/search">
        <div class="input-group mb-3 mt-5 search-container">
            <input type="text" class="form-control search-input"
                placeholder="Cari judul film" aria-label="Cari judul film"
                aria-describedby="basic-addon2" id="search-input">
            <div class="input-group-append">
                <button
                    class="btn btn-outline-secondary search-button text-bg-danger"
                    type="button" id="search-button">Cari</button>
            </div>
        </div>
    </form>
</div>
<!-- end jumbotron kalimat landing page dan search -->

<!-- gambar background -->
<div class="img-container">
    <div class="bg-image"
        style="background-image: url('Dune.jpeg');"></div>
    <div class="bg-image"
        style="background-image: url('Dunkirk.jpeg');"></div>
    <div class="bg-image"
        style="background-image: url('PeakyBlinders.jpeg');"></div>
    <div class="bg-image"
        style="background-image: url('endgame.jpeg');"></div>
</div>
<!-- end gambar backgroudn -->

@include('partials.slide')

<!-- katalog penjualan -->
<div class="row container-film shadow-lg  rounded">
    <h1 class="text-center text-white">Movie List</h1>
    @include('partials.catalog')
</div>
<!-- end katalog penjualan -->

@endsection
