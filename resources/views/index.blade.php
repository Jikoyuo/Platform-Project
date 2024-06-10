@extends('layouts.main')


@section('content')
<title>Kasetflix</title>

<!-- Section 1 -->
<section id="section1" class="full-height">
    @include('partials.navbar')


    <!-- gambar background -->
   @include('partials.background')
    <!-- end gambar background -->


    <div class="jumbotron jumbotron-fluid text-white">
        <div class="container">
            <h1 class="display-8">Film, acara TV tak terbatas, dan banyak lagi. Tonton di mana pun. Batalkan kapan pun. Siap belanja? Daftar dan mulai berbelanja film favoritmu!</h1>
        </div>
        <form action="/search">
            <div class="input-group mb-3 mt-5 search-container">
                <input type="text" class="form-control search-input" placeholder="Cari judul film" aria-label="Cari judul film" aria-describedby="basic-addon2" name="q">
                <button class="btn btn-outline-secondary search-button text-bg-danger" type="submit" id="search-button">Cari</button>
            </div>
        </form>
    </div>
</section>


<!-- Section 2 -->
<section id="section2">
    <hr class="hr hr-blurry">
    @include('partials.slide')
</section>

<!-- Section 3 -->
<section id="section3">
    <hr class="hr hr-blurry">
    <!-- katalog penjualan -->
    <div class="row container-film shadow-lg rounded">
        <h1 class="text-center text-white">Movie List</h1>
        @include('partials.catalog')
    </div>
    <!-- end katalog penjualan -->
</section>

<!-- Section 4 -->
<section id="section4">
<hr class="hr hr-blurry">
@include('partials.footer')
</section>

@endsection
