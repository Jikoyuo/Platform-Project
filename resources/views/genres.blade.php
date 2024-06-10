@extends('layouts.main')

@include('partials.navbar')

@section('content')
<title>Kasetflix </title>

@include('partials.background')

<!-- Container for movie genre list -->
<div class="row container-film shadow-lg  rounded">
    <div class="jumbotron mt-5 text-white bg-dark">
        <h1 class="display-3 text-center">Genre List</h1>
    </div>
        @foreach($genres as $genre)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <a href="/genres/{{$genre->slug}}" class="text-decoration-none text-dark">
                        <div class="card-body d-flex align-items-center justify-content-center bg-dark">
                            <h5 class="text-center text-light card-title">{{$genre->genre}}</h5>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- End container for movie genre list -->

@endsection
