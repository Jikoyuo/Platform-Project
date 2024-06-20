<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DBCart;
class PaymentController extends Controller
{
    Public function payment(Request $request){
        $request->validate([
            'total' => 'required'
        ]);
        $user=User::where('id', Auth::id())->get()->first();
        $items = DBCart::where('user_id', Auth::id())->leftJoin('d_b_products', 'd_b_carts.product_id', '=', 'd_b_products.id')->get();
  
        return view('payment', [
            'title'=>'payment',
            'logged'=>Auth::check(),
            'user'=>$user,
            'totalHarga'=>$request->total,
            'carts'=>$items
            
        ]);
    }
        
    
}
