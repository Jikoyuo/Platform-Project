<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DBCart;
class PaymentController extends Controller
{
    Public function payment(Request $request){
        $products = $request->input('items');
        foreach ($products as $product){
            $cartItem = DBCart::where('user_id', Auth::id())
                                ->where('product_id', $product['id'])
                                ->first();

            if ($cartItem) {
                $cartItem->quantity = $product['quantity'];
                $cartItem->save();
            }
        }

        $user = User::where('id', Auth::id())->get()->first();
        $items = DBCart::where('user_id', Auth::id())->leftJoin('d_b_products', 'd_b_carts.product_id', '=', 'd_b_products.id')->get();

        $address = User::where('id', Auth::id())->get()->first()->address;

        return view('payment', [
            'title'=>'payment',
            'logged'=>Auth::check(),
            'user'=>$user,
            'totalHarga'=>$request->total,
            'carts'=>$items,
            'amount'=>$request->amount,
            'address'=>$address
        ]);
    }
        
    
}
