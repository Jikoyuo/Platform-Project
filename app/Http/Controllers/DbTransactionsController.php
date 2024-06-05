<?php

namespace App\Http\Controllers;

use App\Models\db_transactions;
use App\Http\Requests\Storedb_transactionsRequest;
use App\Http\Requests\Updatedb_transactionsRequest;

class DbTransactionsController extends Controller
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
    public function store(Storedb_transactionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(db_transactions $db_transactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(db_transactions $db_transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedb_transactionsRequest $request, db_transactions $db_transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(db_transactions $db_transactions)
    {
        //
    }
}
