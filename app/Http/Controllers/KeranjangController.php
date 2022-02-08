<?php

namespace App\Http\Controllers;
use App\Models\Keranjang;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $borrows = Keranjang::where([['user_id', $userId],['status','keranjang'],])->get();
        $borrow_ids = [];
        foreach ($borrows as $borrow) {
            $subtotal = (int)$borrow->products->price * $borrow->jumlah;
            $borrow_ids[] = $subtotal;
        }
        $purchases = collect($borrow_ids)->sum();

        $count = Keranjang::where([['user_id', $userId],['status','keranjang'],])->sum('jumlah');


        $keranjang = Keranjang::Select("*")
        ->where([['user_id', $userId],['status','keranjang'],])
        ->orderBy("id", "desc")
        ->get();

        return view('user.keranjang', compact('keranjang', 'purchases','count'));
     }

     public function hargatotal()
     {
        $userId = Auth::id();
        $borrows = Keranjang::where('user_id', $userId)->get();
        $borrow_ids = [];


        //  $produk = Product::where('id');
        //  $tes = $produk->price;

        //  // $buku = Borrow::with('book', 'user')->get();
        //  $borrow = Keranjang::Select("*")->where('user_id', $userId)
        //  ->get();
        //  $total = $borrow->products->sum('price');
        // dd($userId);
        foreach ($borrows as $borrow) {
            $subtotal = (int)$borrow->products->price * $borrow->jumlah;
            $borrow_ids[] = $subtotal;
        }

        $purchases = collect($borrow_ids)->sum();
        // $purchases = DB::table('keranjang')
        // ->join('products', 'keranjang.order_id', '=', 'products.id')
        // ->where('keranjang.user_id', '=', 1)
        // ->sum('products.price');
        return view('user.beta', compact('purchases'));

        // dd($purchases);

     }

     public function hapus($id)
     {
         //
         Keranjang::find($id)->delete();
        // $cart = Keranjang::where('id', $id)->get();
        // $cart->delete();
         return redirect()->route('keranjang')
         -> with('success', 'Keranjang Berhasil Dihapus');
     }
}

