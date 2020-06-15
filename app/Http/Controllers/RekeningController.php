<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rekening;

class RekeningController extends Controller
{
    public function index()
    {
        $rekening = Rekening::all();
        return view('admin.rekening.rekening', compact('rekening'));
    }

    public function tambah()
    {
        return view('admin.rekening.tambah_rekening');
    }

    public function insert(Request $request)
    {
        $this->validate($request, [
            'nama_bank'=> 'required',
            'no_rekening'=> 'required',
        ]);
     
     
        Rekening::create([
            'nama_bank' => $request->nama_bank,
            'no_rekening' => $request->no_rekening,
        ]);

        return redirect('/admin/rekening')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
    	$rekening = Rekening::where('id',$id)->get();
        return view('admin.rekening.edit_rekening', compact('rekening'));
    }

    public function update(Request $request, $id)
    {
        $rekening = Rekening::find($id);
        $rekening->nama_bank = $request->nama_bank;
        $rekening->no_rekening = $request->no_rekening;
        $rekening->update();
        return redirect('/admin/rekening')->with('sukses', 'Data Berhasil Update');
    }

    public function hapus($id)
    {
    	$rekening = Rekening::where('id',$id)->delete();
        return redirect('admin/rekening')->with('sukses', 'Data Berhasil Dihapus');
    }
    
}
