<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\OrderDetails;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin-web');
    }
    public function index()
    {
        //
        $order = order::Select("*")
        ->orderBy("id", "desc")
        ->get();
         return view('admin.penjualan.index', compact('order'));
        return response()->json($order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $alamat = order::where('id', $id)->first();

        $order = OrderDetails::where('order_id', $id)->get();

        return view('admin.penjualan.orderlist', compact('alamat','order'));
        // return view('user.keranjang', compact('keranjang', 'purchases','count'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $order = order::find($id);
        return view('admin.penjualan.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'order_status' => 'required',
        ]);
        $order = order::find($id);


        $order->order_status = $request->get('order_status');
        $order->estimasi_date = $request->get('estimasi_date');
        $order->progress = $request->get('progress');
        $order->save();


        return redirect()->route('admin.penjualan.index')
        ->with('success', 'Penjualan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        OrderDetails::where('order_id',$id)->delete();
        order::find($id)->delete();
        return redirect()->route('admin.penjualan.index')
        -> with('success', 'Penjualan Berhasil Dihapus');
    }


    public function cari(Request $request){
        $search = $request->get('search');
        $order = order::Select("*")
        ->where('order_date','like','%'.$search.'%')
        ->orWhere('order_status','like','%'.$search.'%')
        ->get();
        return view('admin.penjualan.index', compact('order'));
    }
}
