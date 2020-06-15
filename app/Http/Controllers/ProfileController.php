<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       // $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',1)->first();
       if(!empty($pesanan))
       {
           $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',1)->paginate(10);
           return view('client.profile.index', compact('pesanan'));
       }else
       {
           
           return view('client.profile.index');
       }
        
    }

    public function edit()
    {
        return view('client.profile.edit_profile');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'alamat' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'hp' => 'required',
            'no_ktp' => 'required',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        $user->alamat = $request->alamat;
        $user->jk = $request->jk;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->hp = $request->hp;
        $user->no_ktp = $request->no_ktp;
        $user->update();
        //dd($request);
        return redirect ('profile')->with('sukses', 'Profil Berhasil Diupdate');
    }

    public function transaksi()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
    }

    public function upload_foto_profil(Request $request)
    {
   
        $user = User::where('id', Auth::user()->id)->first();

        if($request->hasFile('foto_profil')){
            $request->file('foto_profil')->move('img/avatar',time()."_".$request->file('foto_profil')->getClientOriginalName());
            $user->foto_profil = time()."_".$request->file('foto_profil')->getClientOriginalName();
            $user->save();
        }
       // dd($request->all());
        return redirect('profile')->with('sukses', 'Upload Berhasil');
    }
}