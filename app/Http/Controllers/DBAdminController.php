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

    public function edit(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required|max:99999',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'img_url' => 'required|max:99999',
            'trailer' => 'required|max:99999',
        ]);

        $product = DBProduct::find($request->id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->slug = $request->slug;
        $product->year = $request->year;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->img_url = $request->img_url;
        $product->trailer = $request->trailer;

        $product->save();

        return redirect('/admin');
    }

    public function delete(Request $request){
        $request->validate([
            'id' => 'required',
        ]);

        $product = DBProduct::find($request->id);
        $product->delete();

        return redirect('/admin');
    }
}
