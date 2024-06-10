<?php

namespace App\Http\Controllers;

use App\Models\Taggable;
use App\Http\Requests\StoreTaggableRequest;
use App\Http\Requests\UpdateTaggableRequest;

class TaggableController extends Controller
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
    public function store(StoreTaggableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Taggable $taggable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taggable $taggable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaggableRequest $request, Taggable $taggable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taggable $taggable)
    {
        //
    }
}
