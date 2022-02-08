<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

        //
        public function index()
    {
        //
        $userId = Auth::id();

        $order = order::where('user_id', $userId)
        ->orderBy("id", "desc")
        ->get();
         return view('user.order.index', compact('order'));
        return response()->json($order);
    }

    public function show($id)
    {
        //

        $alamat = order::where('id', $id)->first();

        $order = OrderDetails::where('order_id', $id)->get();

        return view('user.order.orderlist', compact('alamat','order'));
        // return view('user.keranjang', compact('keranjang', 'purchases','count'));

    }

    public function batalkan($id)
    {
        //
        OrderDetails::where('order_id',$id)->delete();
        order::find($id)->delete();
        return redirect()->route('pesanan')
        -> with('success', 'Order Berhasil Dibatalkan');
    }

    public function cari(Request $request){
        $search = $request->get('search');
        $order = order::Select("*")
        ->where('order_date','like','%'.$search.'%')
        ->orWhere('order_status','like','%'.$search.'%')
        ->get();
        return view('user.order.index', compact('order'));
    }
}


