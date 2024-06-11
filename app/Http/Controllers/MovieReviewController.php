<?php

namespace App\Http\Controllers;

use App\Models\movie_review;
use App\Http\Requests\Storemovie_reviewRequest;
use App\Http\Requests\Updatemovie_reviewRequest;

class MovieReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storemovie_reviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(movie_review $movie_review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movie_review $movie_review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemovie_reviewRequest $request, movie_review $movie_review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movie_review $movie_review)
    {
        //
    }
}
