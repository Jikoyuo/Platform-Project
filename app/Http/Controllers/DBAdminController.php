<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DBProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

    public function addProduct(Request $request){
        Log::info('Request data:', $request->all()); // Logging request data
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|max:99999',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'img_url' => 'nullable|max:99999',
            'trailer' => 'required|max:99999',
        ]);
    
        try {
            DBProduct::create($request->all());
            Log::info('Product created successfully:', $request->all());
            return response()->json(['success' => true, 'message' => 'Product added successfully']);
        } catch (\Exception $e) {
            Log::error('Error storing product:', ['error' => $e->getMessage()]); // Logging error
            return response()->json(['success' => false, 'message' => 'Failed to add product']);
        }
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
