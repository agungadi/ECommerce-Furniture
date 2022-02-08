<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CustAddress;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $produk = Product::Select("*")
        ->orderBy("id", "desc")
        ->get();

        return view('user.home', compact('produk'));
     }


    public function kursi()
    {
        //
        $produk = Product::where("category", 2)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'kursi';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function lemari()
    {
        //
        $produk = Product::where("category", 1)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'lemari';
        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function meja()
    {
        //
        $produk = Product::where("category", 3)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Rak';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }


    public function kitchen()
    {
        //
        $produk = Product::where("category", 4)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Kitchen Set';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function livingroom()
    {
        //
        $produk = Product::where("category", 5)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Living Room Set';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function lain()
    {
        //
        $produk = Product::where("category", 6)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'More Product';

        return view('user.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }


    public function murah()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "asc")
        ->get();
        return view('user.home', compact('produk'));
        // return view('admin.home');

    }


    public function mahal()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "desc")
        ->get();
        return view('user.home', compact('produk'));
        // return view('admin.home');

    }

    public function cari(Request $request){
        $search = $request->get('search');
        $produk = Product::Select("*")
        ->where('name','like','%'.$search.'%')
        ->orWhere('price','like','%'.$search.'%')
        ->get();
        return view('user.home', compact('produk'));
    }



}
