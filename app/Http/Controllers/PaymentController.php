<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class PaymentController extends Controller
{
    Public function payment(Request $request){
        $request->validate([
            'total' => 'required'
        ]);
        $user=User::where('id', Auth::id())->get()->first();
        return view('payment', [
            'title'=>'payment',
            'logged'=>Auth::check(),
            'user'=>$user,
            'totalHarga'=>$request->total
        ]);
    }
        
    
}
