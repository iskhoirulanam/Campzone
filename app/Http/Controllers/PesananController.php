<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\User;
use App\PesananDetail;
use Illuminate\Http\Request;
use Auth;

class PesananController extends Controller
{
    public function index()
    {

        $user = User::all();
        $pesanan = Pesanan::orderBy('tanggal','desc')->get();
        
        return view('admin.pesanan', compact('pesanan'));
    }

    public function client()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->orderBy('tanggal','desc')->get();
        if(!empty($pesanan))
        {
            return view('client.pesanan', compact('pesanan'));
        }else
        return view('client.pesanan');
    }

    public function konfirmasi_pembayaran(Request $request, $id)
    {
       //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pembayaran' => $request->status_pembayaran
        ]);
        
        return redirect('admin/pesanan')->with('sukses', 'Berhasil');
    }
    
    public function batal_konfirmasi_pembayaran(Request $request, $id)
    {
       //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pembayaran' => $request->status_pembayaran
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('admin/pesanan');
    }

    public function konfirmasi_pengambilan(Request $request, $id)
    {
       //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pengambilan' => $request->status_pengambilan
        ]);
        
        return redirect('admin/pesanan')->with('sukses', 'Berhasil');
    }
    public function batal_konfirmasi_pengambilan(Request $request, $id)
    {
       //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pengambilan' => $request->status_pengambilan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('admin/pesanan');
    }

    
    public function konfirmasi_pengembalian(Request $request, $id)
    {
        //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pengembalian' => $request->status_pengembalian
        ]);
        
        return redirect('admin/pesanan')->with('sukses', 'Berhasil');
    }
    public function batal_konfirmasi_pengembalian(Request $request, $id)
    {
       //dd($request->all());
        $pesanan = Pesanan::where('id',$request->id)->update([
            'status_pengembalian' => $request->status_pengembalian
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('admin/pesanan');
    }
}