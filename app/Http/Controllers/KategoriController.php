<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
    	return view('admin.kategori.kategori', ['kategori' => $kategori]);
    }

    public function tambah()
    {
        return view('admin.kategori.tambah_kategori');
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'kategori'=> 'required',
        ]);
     
     
        Kategori::create([
            'kategori' => $request->kategori
        ]);
        return redirect('/admin/kategori')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$kategori = DB::table('kategori')->where('id',$id)->get();
        return view('admin.kategori.edit_kategori', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->kategori = $request->kategori;
        $kategori->update();
        return redirect('/admin/kategori')->with('sukses', 'Data Berhasil Update');
    }

    public function hapus($id)
    {
    	$kategori = Kategori::where('id',$id)->delete();
        return redirect('admin/kategori')->with('sukses', 'Data Berhasil Dihapus');
    }
   
}
