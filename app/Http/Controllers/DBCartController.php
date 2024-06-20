<?php

namespace App\Http\Controllers;

use App\Models\DBCart;
use App\Models\DBCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreDBCartRequest;
use App\Http\Requests\UpdateDBCartRequest;
use App\Models\DBProduct;

use function PHPUnit\Framework\isEmpty;

class DBCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()){
            $user_id = Auth::id();
            $items = DBCart::where('user_id', $user_id)->leftJoin('d_b_products', 'd_b_carts.product_id', '=', 'd_b_products.id')->get();
            $genres = DBCategory::all();
            $amount = count($items);
            $total = 0;
            for($i = 0; $i < $amount; $i++){
                $total += $items[$i]['price'];
            }
            return view('cart', [
                'title' => 'Cart',
                'genres' => $genres,
                'cart' => $items,
                'items' => $items,
                'logged' => true,
                'admin' => Auth::user()->role === 'admin',
                'amount' => $amount,
                'total' => $total
            ]);
        } else {
            return redirect('/home');
        }
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
    public function store(StoreDBCartRequest $request)
    {
        $request->validate([
            'price' => 'required',
            'product_id' => 'required',
            'user_id' => 'required'
        ]);

        DBCart::create($request->all());

        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(DBCart $dBCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBCart $dBCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBCartRequest $request, DBCart $dBCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBCart $dBCart)
    {
        //
    }
}
