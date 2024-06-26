<?php

namespace App\Http\Controllers;

use App\Models\DBReview;
use App\Models\Taggable;
use App\Models\DBProduct;
use App\Models\DBCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDBProductRequest;
use App\Http\Requests\UpdateDBProductRequest;

class DBProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(request('search'));
        $products = DBProduct::latest();
        $genres = DBCategory::all();
        $random = DBProduct::inRandomOrder()->take(5)->get();

        if (request('q')){
            $products->where('name', 'like', '%'.request('q').'%');
            if (Auth::check()) {
                return view('search', [
                    'title' => 'search',
                    'search' => request('q'),
                    'genres' => $genres,
                    'products' => $products->get(),
                    'logged' => true,
                    'admin' => Auth::user()->role === 'admin'
                ]);
            } else {
                return view('search', [
                    'title' => 'search',
                    'search' => request('q'),
                    'genres' => $genres,
                    'products' => $products->get(),
                    'logged' => false,
                    'admin' => false
                ]);
            }
            
        } else{
            if (Auth::check()) {
                return view('index', [
                    'title' => 'Home Page',
                    'genres' => $genres,
                    'sliders' => $random,
                    'products' => $products->get(),
                    'logged' => true,
                    'admin' => Auth::user()->role === 'admin'
                ]);
            } else {
                return view('index', [
                    'title' => 'Home Page',
                    'genres' => $genres,
                    'sliders' => $random,
                    'products' => $products->get(),
                    'logged' => false,
                    'admin' => false
                ]);
            }
        }
    }

    public function productDesc($slug){
        // $products = DBProduct::latest();
        $product = DBProduct::where('slug', $slug)->first();
        $product_id = DBProduct::where('slug', $slug)->first()->id;

        $pivot = Taggable::where('tag_id', $product_id)->pluck('taggable_id');
        $reviews = DBReview::where('movie_id', $product_id)->get()->toArray();
        $rating = 0;
        foreach ($reviews as $review){
            $rating += $review['star'];
        }
        if ($rating != 0){
            $rating /= count($reviews);
        }
        $genres = DBCategory::where('id', $pivot);

        $recommend = DBProduct::inRandomOrder()->take(3)->get();

        if (Auth::check()) {
            return view('desc', [
                'title' => 'Product',
                'genres' => $genres,
                'product' => $product,
                'reviews' => $reviews,
                'rating' => $rating,
                'logged' => true,
                'recommends' => $recommend,
                'admin' => Auth::user()->role === 'admin',
                'id' => Auth::user()->id
            ]);
        } else {
            return view('desc', [
                'title' => 'Product',
                'genres' => $genres,
                'product' => $product,
                'reviews' => $reviews,
                'rating' =>  $rating,
                'logged' => false,
                'recommends' => $recommend,
                'admin' => false
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

        $genres = DBCategory::all();

        if (Auth::check()) {
            return view('search', [
                'title' => 'Genre $slug',
                'genres' => $genres,
                'search' => $slug,
                'products' => $products,
                'logged' => true,
                'admin' => Auth::user()->role === 'admin'
            ]);
        }
        else {
            return view('search', [
                'title' => 'Genre $slug',
                'genres' => $genres,
                'search' => $slug,
                'products' => $products,
                'logged' => false,
                'admin' => false
            ]);
        }

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
