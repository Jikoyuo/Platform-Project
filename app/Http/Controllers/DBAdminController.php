<?php

namespace App\Http\Controllers;

use App\Models\DBProduct;
use Illuminate\Http\Request;

class DBAdminController extends Controller
{
    public function showProducts(){
        $products = DBProduct::all()->toArray();
        return view('admin', [
            'title' => 'Dashboard',
            'products' => $products
        ]);
    }
}
