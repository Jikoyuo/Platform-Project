<?php

namespace App\Http\Controllers;

use App\Models\DBReview;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreDBReviewRequest;
use App\Http\Requests\UpdateDBReviewRequest;
use App\Models\DBProduct;
use App\Models\DBTransactions;

class DBReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id)
    {
        return view('review', [
            'title' => 'Review',
            'product_id' => $product_id
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
    public function store(StoreDBReviewRequest $request)
    {
        $review = new DBReview();
        $review->movie_id = $request->movie_id;
        $review->star = $request->star;
        $review->review = $request->review;
        $review->created_at = now();
        $review->updated_at = now();
        $review->save();

        $transaction = DBTransactions::where('product_id', $request->movie_id)->get()->first();

        $transaction->review = true;
        $transaction->save();

        return redirect('/history');
    }

    /**
     * Display the specified resource.
     */
    public function show(DBReview $dBReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBReview $dBReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBReviewRequest $request, DBReview $dBReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBReview $dBReview)
    {
        //
    }
}
