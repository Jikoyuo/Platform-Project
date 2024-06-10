<?php

namespace App\Http\Controllers;

use App\Models\DBUsers;
use App\Http\Requests\StoreDBUsersRequest;
use App\Http\Requests\UpdateDBUsersRequest;

class DBUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
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
    public function store(StoreDBUsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DBUsers $dBUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBUsers $dBUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBUsersRequest $request, DBUsers $dBUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBUsers $dBUsers)
    {
        //
    }
}
