<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $product = Product::Select("*")
        ->orderBy("id", "desc")
        ->limit(1)
        ->get();
        $products = Product::Select("*")
        ->orderBy("id", "desc")
        ->limit(4)
        ->get();

        return view('welcome', compact('product','products'));
        // return response()->json($product);

        // return view('home');
    }


}
