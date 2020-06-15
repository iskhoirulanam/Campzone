<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;
use App\Brand;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
    	$produk = Produk::all();
        $brand = Brand::all();
    	return view('/client/produk', compact('brand', 'produk'));
    }

    public function list()
    {
        $produk = Produk::paginate(10);
       
        return view('admin/produk/produk', compact('produk'));
    }

    public function tambah()
    {
        $kategori = Kategori::select('id', 'kategori')->get();
        $brand = Brand::select('id', 'nama_brand')->get();
        return view('admin/produk/tambah_produk', compact('kategori', 'brand'));
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'nama_produk'=> 'required',
            'kategori_id'=> 'required',
            'brand_id'=> 'required',
            'harga_sewa'=> 'required',
            'stok'=> 'required',
            'deskripsi'=> 'required',
            'spesifikasi'=> 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
     
        $foto = $request->file('foto');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move('img/produk',$nama_foto);
     
        Produk::create([
            'file' => $nama_foto,
            'keterangan' => $request->keterangan,
            'nama_produk' => $request->nama_produk,
            'merek' => $request->merek,
            'kategori_id' => $request->kategori_id,
            'brand_id' => $request->kategori_id,
            'harga_sewa' => $request->harga_sewa,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'spesifikasi' => $request->spesifikasi,
            'foto' => $nama_foto
        ]);

        return redirect('/admin/produk')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$produk = DB::table('produk')->where('id',$id)->get();
        $kategori = Kategori::select('id', 'kategori')->get();
        return view('admin/produk/edit_produk', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
    	$produk = Produk::find($id);
        $produk->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('img/produk',$request->file('foto')->getClientOriginalName());
            $produk->foto = $request->file('foto')->getClientOriginalName();
            $produk->save();
        }
        return redirect('/admin/produk')->with('sukses', 'Data Berhasil Update');
    }

    public function hapus($id)
    {
    	$produk = Produk::where('id',$id)->delete();
        
        return redirect('/admin/produk');
    }

    public function brand_kategori(Brand $brand){
           return $brand;
    }
}