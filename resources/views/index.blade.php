@extends('layouts.main')


@section('content')
<title>Kasetflix || {{$title}} </title>

<!-- Section 1 -->
<section id="section1" class="full-height">
    @include('partials.navbar')

    <!-- gambar background -->
    <div class="img-container">
        <div class="bg-image" style="background-image: url('Dune.jpeg');"></div>
        <div class="bg-image" style="background-image: url('Dunkirk.jpeg');"></div>
        <div class="bg-image" style="background-image: url('PeakyBlinders.jpeg');"></div>
        <div class="bg-image" style="background-image: url('endgame.jpeg');"></div>
    </div>
    <!-- end gambar background -->

    <div class="jumbotron jumbotron-fluid text-white">
        <div class="container">
            <h1 class="display-8">Hiburan tanpa batas dengan kaset film berkualitas. Tonton film klasik dan terbaru kapan saja, di mana saja. Siap untuk mulai berbelanja? Daftar sekarang dan lengkapi koleksi film favoritmu!</h1>
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
