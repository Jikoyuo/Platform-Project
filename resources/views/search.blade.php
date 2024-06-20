@extends('layouts.main')

@include('partials.navbar')

@section('content')
<title>Kasetflix </title>
<link rel="stylesheet" href="../style.css">
<script defer src="../newParticle.js"></script>

<style>
    .particles {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%; /* Ensure the particles container takes full height */
    z-index: -1;
}
</style>

@include('partials.background')
        <!-- <div class="jumbotron jumbotron-fluid text-white ">
            <div class="container">
                <h1 class="display-8">Search: {{$search}} </h1>
            </div>

            <div class="input-group mb-3 mt-5">
                <input type="text" class="form-control"
                    placeholder="Cari judul film"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary"
                        type="button">Button</button>
                </div>
            </div>

        </div>

        -->
        <div id="particles-js" class="particles"></div>

        <div class="container-film shadow-lg p-3 mb-5 bg-body rounded" style="position:absolute; top:30%; left:17%;">
            <h1 class="text-center">Search result: {{$search}} </h1>

            @include('partials.catalog')
            <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endsection


