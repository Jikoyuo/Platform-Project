<?php

namespace App\Http\Controllers;

use App\Models\DBCategory;
use App\Models\User;
use App\Models\DBProduct;
use App\Models\Taggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class DBAdminController extends Controller
{
    public function show(){
        $products = DBProduct::all();
        $genres = DBCategory::all();
        $users = User::all();
        return view('admin', [
            'title' => 'Dashboard',
            'products' => $products,
            'genres' => $genres,
            'users' => $users
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|max:99999',
            'slug' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'img_url' => 'required|max:99999',
            'trailer' => 'required|max:99999',
        ]);

        $product = DBProduct::create($validated);
        foreach ($request->genres as $genre_id) {
            DB::table('taggables')->insert([
                'tag_id' => $product->id,
                'taggable_id' => $genre_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

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

        Taggable::where('tag_id', $request->id)->delete();
        foreach ($request->genres as $genre_id) {
            DB::table('taggables')->insert([
                'tag_id' => $product->id,
                'taggable_id' => $genre_id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

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
