<?php

namespace App\Http\Controllers;

use App\Models\DBTransactions;
use App\Http\Requests\StoreDBTransactionsRequest;
use App\Http\Requests\UpdateDBTransactionsRequest;
use App\Models\DBCategory;
use Illuminate\Support\Facades\Auth;

class DBTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = false;
        if(Auth::check()){
            $admin=Auth::user()->role === 'admin';
        }
        $transactions = DBTransactions::where('user_id', Auth::id())->latest()->get();
        $genres=DBCategory::all();
        return view('history',[
            'title'=>'history',
            'logged'=>Auth::check(),
            'genres'=>$genres,
            'admin'=>$admin,
            'transactions'=>$transactions
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
    public function store(StoreDBTransactionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DBTransactions $dBTransactions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBTransactions $dBTransactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBTransactionsRequest $request, DBTransactions $dBTransactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBTransactions $dBTransactions)
    {
        //
    }
}
