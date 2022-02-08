<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustAddress;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
        $user = User::Select("*")
        ->orderBy("id", "asc")
        ->get();
         return view('admin.customer.index', compact('user'));
        return response()->json($user);
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
        $user = User::find($id);
        return view('admin.customer.edit', compact('user'));

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
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        $user = User::find($id);


        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->alamat = $request->get('alamat');
        $user->no_hp = $request->get('no_hp');
        $user->jenis_kelamin = $request->get('jenis_kelamin');
        $user->save();


        return redirect()->route('admin.customer.index')
        ->with('success', 'Customer Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keranjang::where('user_id',$id)->delete();
        CustAddress::where('user_id',$id)->delete();
        User::find($id)->delete();
        return redirect()->route('admin.customer.index')
        -> with('success', 'Customer Berhasil Dihapus');
    }

    public function cari(Request $request){
        $search = $request->get('search');
        $user = User::Select("*")
        ->where('name','like','%'.$search.'%')
        ->orWhere('email','like','%'.$search.'%')
        ->get();
        return view('admin.customer.index', compact('user'));
    }
}
