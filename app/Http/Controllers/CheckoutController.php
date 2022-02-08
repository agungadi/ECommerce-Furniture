<?php

namespace App\Http\Controllers;
use App\Models\CustAddress;
use App\Models\Keranjang;
use App\Models\order;
use App\Models\OrderDetails;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::id();

        $borrows = Keranjang::where([['user_id', $userId],['status','keranjang'],])->get();
        $borrow_ids = [];
        foreach ($borrows as $borrow) {
            $subtotal = (int)$borrow->products->price * $borrow->jumlah;
            $borrow_ids[] = $subtotal;
        }
        $totalharga = collect($borrow_ids)->sum();


        $address = CustAddress::where('user_id', $userId)
        ->orderBy("id", "desc")
        ->get();


        return view('user.checkout.chooseaddress', compact('address', 'totalharga', 'borrows'));
        return response()->json($address);
    }




    public function order(Request $request)
    {

        $dattenow = Carbon::now()->format('Y-m-d');

        $harga =  $request->get('total_cost');

        $randomNumber = random_int(1, 999);

        $totalharga = $harga * 0.5 + $randomNumber;


        $order = new Order;
        $order->user_id = $request->get('user_id');
        $order->address_id = $request->get('alamat_id');
        $order->total_cost = $request->get('total_cost');
        $order->down_payment = $totalharga;
        $order->order_date = $dattenow;
        $order->order_status = 'Menunggu Konfirmasi';
        $order->save();

        $this->orderdetails();
        $this->hapuskeranjang();
        // dd($order);
        return redirect()->route('ordercomplete');


        // $orderid = order::where([['user_id', $userId], ['order_status', 'Menunggu Konfirmasi'],])
        // // $orderid = order::where('user_id', $userId)
        // ->orderBy('id', 'desc')->first();
        // dd($order);


    }

    public function orderdetails()
    {
        $userId = Auth::id();

        $borrow_ids = [];

        $orderid = order::where([['user_id', $userId], ['order_status', 'Menunggu Konfirmasi'],])
        // $orderid = order::where('user_id', $userId)
        ->orderBy('id', 'desc')->first();

        $cart = Keranjang::where([['user_id', $userId],['status','keranjang'],])->get();
        // $keranjang_id = [];
        foreach ($cart as $keranjang) {
            $od = new OrderDetails;
            $od->keranjang_id = $keranjang->id;
            $od->order_id = $orderid->id;
            $od->jumlah = $keranjang->jumlah;
            $od->unit_price = $keranjang->products->price;
            $od->total_price = $keranjang->products->price * $keranjang->jumlah;
            $od->save();
            $borrow_ids[] = $od;
        }



    }

    public function hapuskeranjang(){

        $userId = Auth::id();
        // $expired =Carbon::parse($borrow->tanggal_pinjam);
        $borrow_ids = [];
        $cart = Keranjang::where('user_id', $userId)->get();
        foreach ($cart as $keranjang) {
        $keranjang->status = 'selesai';
        $keranjang->save();

        }
    }

    public function ordercomplete() {

        $userId = Auth::id();

        $order = order::where([['user_id', $userId], ['order_status', 'Menunggu Konfirmasi'],])
        // $orderid = order::where('user_id', $userId)
        ->orderBy('id', 'desc')->first();
        // dd($order);

        return view('user.checkout.ordercomplete', compact('order'));

    }

    public function showbukti($id)
    {
        //
        $order = Order::find($id);

        return view('user.checkout.uploadbukti', compact('order'));

    }


    public function bukti(Request $request,$id)
    {
        $order = Order::find($id);


        if($request->hasFile('bukti')){
            $request->validate([
              'bukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('bukti');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $order->bukti = $namafile;
            $order->save();

        }


        // dd($order);
        return redirect()->route('pesanan')
        ->with('success', 'Produk Berhasil Ditambahkan');

    }




}
