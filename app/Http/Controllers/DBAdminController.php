<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DBProduct;
use Illuminate\Http\Request;

class DBAdminController extends Controller
{
    public function show(){
        $products = DBProduct::all();
        $users = User::all();
        return view('admin', [
            'title' => 'Dashboard',
            'products' => $products,
            'users' => $users
        ]);
    }
}
