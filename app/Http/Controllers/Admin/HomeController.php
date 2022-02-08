<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin-web');
    }

    public function index()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("id", "desc")
        ->get();

        return view('admin.home', compact('produk'));
        // return view('admin.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::select('*')->get();
        return view('admin.tambah', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'deskripsi' => 'required',
            'file1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
        ]);

        $files = [];

        if ($request->file('file1')) $files[] = $request->file('file1');
        if ($request->file('file2')) $files[] = $request->file('file2');
        if ($request->file('file3')) $files[] = $request->file('file3');
        if ($request->file('file4')) $files[] = $request->file('file4');
        if ($request->file('file5')) $files[] = $request->file('file5');
        if ($request->file('file6')) $files[] = $request->file('file6');

        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $namafile[] = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', end($namafile));
            // $files[] =  $filename;
        }
        // dd($files);


        $produk = new Product();
        $produk->name = $request->get('name');
        $produk->price = $request->get('price');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->image1 = $namafile[0];
        if(!empty($namafile[1])){
        $produk->image2 = $namafile[1];
        }
        if(!empty($namafile[2])){
        $produk->image3 = $namafile[2];
        }
        if(!empty($namafile[3])){
        $produk->image4 = $namafile[3];
        }
        if(!empty($namafile[4])){
        $produk->image5 = $namafile[4];
        }
        if(!empty($namafile[5])){
        $produk->image6 = $namafile[5];
        }
        $produk->category = $request->get('category');
        $produk->save();

        // // dd($produk);

        return redirect()->route('admin.home')
        ->with('success', 'Produk Berhasil Ditambahkan');
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
                //
        $produk = Product::find($id);
        $categories = Categories::select('*')->get();

        return view('admin.edit', compact('produk','categories'));

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
            'price' => 'required',
            'deskripsi' => 'required',
            'category' => 'required',
        ]);
        $produk = Product::find($id);

        if($request->hasFile('file1')){
            $request->validate([
              'file1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file1');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image1 = $namafile;
        }

        if($request->hasFile('file2')){
            $request->validate([
              'file2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file2');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image2 = $namafile;
        }

        if($request->hasFile('file3')){
            $request->validate([
              'file3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file3');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image3 = $namafile;
        }

        if($request->hasFile('file4')){
            $request->validate([
              'file4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file4');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image4 = $namafile;
        }

        if($request->hasFile('file5')){
            $request->validate([
              'file5' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file5');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image5 = $namafile;
        }

        if($request->hasFile('file6')){
            $request->validate([
              'file6' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $file= $request->file('file6');
            $filename = $file->getClientOriginalName();
            $namafile = time().'_'.$filename;
            $file->move(base_path().'/public/storage/img/', $namafile);
            $produk->image6 = $namafile;
        }


        $produk->name = $request->get('name');
        $produk->price = $request->get('price');
        $produk->deskripsi = $request->get('deskripsi');
        $produk->category = $request->get('category');
        $produk->save();

        return redirect()->route('admin.home')
        ->with('success', 'Produk Berhasil Ditambahkan');
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

        Product::find($id)->delete();
        $this->expired($id);

        return redirect()->route('admin.home')
        -> with('success', 'Product Berhasil Dihapus');
    }

    public function expired($id)
    {
        $expired = Keranjang::where('product_id', $id)->first();
        if(!is_null($expired)){
        $expired->status = 'Tidak Tersedia';
        $expired->Save();
        }
    }

    public function kursi()
    {
        //
        $produk = Product::where("category", 2)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Rak';

        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function lemari()
    {
        //
        $produk = Product::where("category", 1)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'lemari';
        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function meja()
    {
        //
        $produk = Product::where("category", 3)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Meja';

        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function kitchen()
    {
        //
        $produk = Product::where("category", 4)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Kitchen Set';

        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }

    public function livingroom()
    {
        //
        $produk = Product::where("category", 5)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'Living Room Set';

        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }


    public function lain()
    {
        //
        $produk = Product::where("category", 6)
        ->orderBy("id", "desc")
        ->get();
        $kategori = 'More Product';

        return view('admin.homekategori', compact('produk','kategori'));
        // return view('admin.home');

    }


    public function murah()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "asc")
        ->get();
        return view('admin.home', compact('produk'));
        // return view('admin.home');

    }


    public function mahal()
    {
        //
        $produk = Product::Select("*")
        ->orderBy("price", "desc")
        ->get();
        return view('admin.home', compact('produk'));
        // return view('admin.home');

    }

    public function cari(Request $request){
        $search = $request->get('search');
        $produk = Product::Select("*")
        ->where('name','like','%'.$search.'%')
        ->orWhere('price','like','%'.$search.'%')->get();
        return view('admin.home', compact('produk'));
    }

}
