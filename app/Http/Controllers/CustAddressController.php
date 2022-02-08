<?php

namespace App\Http\Controllers;
use App\Models\CustAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustAddressController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = Auth::id();

        $address = CustAddress::where('user_id', $userId)
        ->orderBy("id", "desc")
        ->get();

        // dd($address);
        return view('user.listaddress', compact('address'));
        return response()->json($address);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $userId = Auth::id();
        // return response()->json($book);

        return view('user.tambahalamat', compact('userId'));
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
        $request->validate([
            'nama_penerima' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
            'no_hp' => 'required',

        ]);

        // Book::create($request->all());
        $address = new CustAddress();
        $address->user_id = $request->get('user_id');
        $address->nama_penerima = $request->get('nama_penerima');
        $address->alamat = $request->get('alamat');
        $address->kota = $request->get('kota');
        $address->provinsi = $request->get('provinsi');
        $address->kode_pos = $request->get('kode_pos');
        $address->no_hp = $request->get('no_hp');

        // $buku->status_buku = $request->get('status_buku');
        // $buku->foto = $image_name;
        $address->save();


        return redirect()->route('alamat.index')
        ->with('success', 'Alamat Berhasil di tambahkan');

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
        $address = CustAddress::find($id);
        return view('user.editalamat', compact('address'));
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
            'nama_penerima' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kode_pos' => 'required',
            'no_hp' => 'required',

        ]);

        $address = CustAddress::find($id);

        $address->user_id = $request->get('user_id');
        $address->nama_penerima = $request->get('nama_penerima');
        $address->alamat = $request->get('alamat');
        $address->kota = $request->get('kota');
        $address->provinsi = $request->get('provinsi');
        $address->kode_pos = $request->get('kode_pos');
        $address->no_hp = $request->get('no_hp');


        $address->save();


        return redirect()->route('alamat.index')
        ->with('success', 'Alamat Berhasil di tambahkan');
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
        CustAddress::find($id)->delete();
        return redirect()->route('alamat.index')
        -> with('success', 'Alamat Berhasil Dihapus');
    }
}
