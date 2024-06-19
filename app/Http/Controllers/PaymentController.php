<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DBCategory;
class PaymentController extends Controller
{
    Public function Payment(){
        $genres=DBCategory::all();
return view('payment', [
    'title'=>'payment',
    'logged'=>Auth::check(),
    'genres'=>$genres

]);
    }
        
    
}
