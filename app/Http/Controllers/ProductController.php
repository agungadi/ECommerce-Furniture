<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //    public function index()

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function detailproduct($id)
    {

        $product = Product::where('id', $id)->get();
        // return response()->json($jadwal);
        return view('user.detailproduct', compact('product'));
        // dd($product);

     }


    // public function tambahkeranjang($id)
    // {
    //     $cart = Product::where('id', $id)->get();
    //     // return response()->json($book);

    //     return view('user.keranjang', compact('cart'));

    // }

    public function konfirmasikeranjang(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'jumlah' => 'required',
        ]);

        // Book::create($request->all());
        $cart = new Keranjang();
        $cart->product_id = $request->get('product_id');
        $cart->user_id = $request->get('user_id');
        $cart->jumlah = $request->get('jumlah');
        $cart->warna = $request->get('warna');
        $cart->catatan = $request->get('catatan');
        $cart->status = 'Keranjang';


        $cart->save();


        return redirect()->route('keranjang')
        ->with('success', 'Product Berhasil ditambahkan');

    }




}
