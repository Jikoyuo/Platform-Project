<?php

namespace App\Http\Controllers;

use App\Models\db_users;
use App\Http\Requests\Storedb_usersRequest;
use App\Http\Requests\Updatedb_usersRequest;

class DbUsersController extends Controller
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
    public function store(Storedb_usersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(db_users $db_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(db_users $db_users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedb_usersRequest $request, db_users $db_users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(db_users $db_users)
    {
        //
    }
}
