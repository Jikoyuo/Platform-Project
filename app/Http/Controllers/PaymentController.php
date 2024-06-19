<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DBCategory;
use App\Models\User;
class PaymentController extends Controller
{
    Public function Payment(Request $request){
        $user=User::where('id', Auth::id())->get()->first();
        DD($request->total);
return view('payment', [
    'title'=>'payment',
    'logged'=>Auth::check(),
    'user'=>$user,
    'totalHarga'=>$request->total
]);
    }
        
    
}
