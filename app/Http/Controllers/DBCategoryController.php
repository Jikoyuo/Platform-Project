<?php

namespace App\Http\Controllers;

use App\Models\DBCategory;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()) {
            return view('genres', [
                'title' => 'Genres',
                'genres' => $genres,
                'logged' => true
            ]);
        } else {
            return view('genres', [
                'title' => 'Genres',
                'genres' => $genres,
                'logged' => false
            ]);
        }
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
