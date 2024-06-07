@extends('layouts.main')

@section('content')
<!-- jumbotron kalimat landing page dan search -->
@include('partials.navbar')
<div class="jumbotron jumbotron-fluid text-white">
    <div class="container">
        <h1 class="display-8">Film, acara TV tak terbatas, dan banyak
            lagi. Tonton di mana pun. Batalkan kapan pun. Siap belanja?
            Daftar dan mulai berbelanja film favoritmu!</h1>
    </div>
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

<!-- start sliders gambar -->
<audio id="background-music" loop>
    <source
        src="https://github.com/ecemgo/mini-samples-great-tricks/raw/main/song-list/stranger-things-luxide-remix-no-copyright-music.mp3"
        type="audio/mpeg" />
</audio>
<button id="play-pause-button">
    <ion-icon class="audio-icon" id="play-music" name="play"></ion-icon>
    <ion-icon
        class="audio-icon hidden"
        id="pause-music"
        name="pause"></ion-icon>
</button>

<div id="particles-js" class="particles"></div>

<div class="container">
    <div class="swiper">
        <h1 class="text-center text-white mb-lg-5"
            style="font-size: 3rem; font-weight: bold;">Star Wars Series</h1>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img
                    src="slide/sw1.jpeg" />
                <p>Star Wars Episode I: The Phantom Menace</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw2.jpeg" />
                <p>Episode II: Attack of the Clones</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw3.jpeg" />
                <p>Episode III: Revenge of the Sith</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw4.jpeg" />
                <p>Episode IV: A New Hope</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw5.jpeg" />
                <p>Episode V: The Empire Strikes Back</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw6.jpeg" />
                <p>Episode VI: Return of the Jedi</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw7.jpeg" />
                <p>Episode VII: The Force Awakens </p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw8.jpeg" />
                <p>Episode VIII: The Last Jedi</p>
            </div>
            <div class="swiper-slide">
                <img
                    src="slide/sw9.jpeg" />
                <p>Episode IX: The Rise of Skywalker</p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- end sliders gambar -->

<!-- katalog penjualan -->
<div class="row container-film shadow-lg  rounded">
    <h1 class="text-center text-white">Movie List</h1>
    @include('partials.catalog')
</div>
    <!-- end katalog penjualan -->

@endsection
