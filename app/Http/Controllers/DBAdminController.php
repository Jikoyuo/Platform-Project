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

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|max:99999',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'img_url' => 'required|max:99999',
            'trailer' => 'required|max:99999',
        ]);

        DBProduct::create($request->all());

        return redirect('/admin');
    }
}
