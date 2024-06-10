@extends('layouts.main')

@include('partials.navbar')

@section('content')
<title>Kasetflix </title>
<link rel="stylesheet" href="../style.css">

@include('partials.background')
        <div class="jumbotron jumbotron-fluid text-white ">
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

        <div class="container-film shadow-lg p-3 mb-5 bg-body rounded">
            <h1 class="text-center">Search: {{$search}} </h1>

            @include('partials.catalog')
        </div>
@include('partials.footer')
@endsection

    
