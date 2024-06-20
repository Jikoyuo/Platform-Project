<?php

namespace App\Http\Controllers;

use App\Models\DBReview;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreDBReviewRequest;
use App\Http\Requests\UpdateDBReviewRequest;

class DBReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
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
