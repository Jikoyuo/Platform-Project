<?php

namespace App\Http\Controllers;

use App\Models\DBCategory;
use App\Http\Requests\StoreDBCategoryRequest;
use App\Http\Requests\UpdateDBCategoryRequest;

class DBCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = DBCategory::all();
        return view('genres', [
            'title' => 'Genres',
            'genres' => $genres
        ]);
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
    public function store(StoreDBCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DBCategory $dBCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBCategory $dBCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBCategoryRequest $request, DBCategory $dBCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBCategory $dBCategory)
    {
        //
    }
}
