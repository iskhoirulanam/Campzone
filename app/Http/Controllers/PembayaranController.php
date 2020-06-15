<?php

namespace App\Http\Controllers;
use App\Pesanan;
use Auth;
use App\User;
use App\Rekening;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        if(empty($user->alamat))
        {
            return redirect('profile')->with('gagal', 'Harap Lengkapi Profile');
        }
        
        if(empty($user->hp))
        {
            return redirect('profile')->with('gagal', 'Harap Lengkapi Profile');
        }

        if(empty($user->no_ktp))
        {
            return redirect('profile')->with('gagal', 'Harap Lengkapi Profile');
        }
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status_pembayaran',0)->first();
        $rekening = Rekening::all();

        return view('client.pembayaran', compact('pesanan','rekening'));
        
    }
    public function upload_bukti(Request $request)
    {

        $user = User::where('id', Auth::user()->id)->first();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status_pembayaran',0)->first();

        if($request->hasFile('bukti_pembayaran')){
            $request->file('bukti_pembayaran')->move('img/pembayaran',time()."_".$request->file('bukti_pembayaran')->getClientOriginalName());
            $pesanan->bukti_pembayaran = time()."_".$request->file('bukti_pembayaran')->getClientOriginalName();
            $pesanan->save();
        }
        return redirect('pembayaran')->with('sukses', 'Upload Berhasil');
    }
}
