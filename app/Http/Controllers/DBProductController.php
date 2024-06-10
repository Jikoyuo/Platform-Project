<?php

namespace App\Http\Controllers;

use App\Models\DBProduct;
use App\Http\Requests\StoreDBProductRequest;
use App\Http\Requests\UpdateDBProductRequest;
use App\Models\DBCategory;
use App\Models\Taggable;

class DBProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(request('search'));
        $products = DBProduct::latest();
        if (request('q')){
            $products->where('name', 'like', '%'.request('q').'%');
            return view('search', [
                'title' => 'Home Page',
                'search' => request('q'),
                'products' => $products->get()
            ]);
        }
        else{
            return view('index', [
                'title' => 'Home Page',
                'sliders' => $products->get(),
                'products' => $products->get()
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
    public function store(StoreDBProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $genre_id = DBCategory::where('slug', $slug)->first()->id;

        $pivot = Taggable::where('taggable_id', $genre_id)->pluck('tag_id');

        $products = DBProduct::whereIn('id', $pivot)->get();

        return view('search', [
            'title' => 'Genre $slug',
            'search' => $slug,
            'products' => $products
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBProduct $dBProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBProductRequest $request, DBProduct $dBProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBProduct $dBProduct)
    {
        //
    }
}
