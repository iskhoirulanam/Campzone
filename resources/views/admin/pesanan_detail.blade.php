@extends('layouts.admin')
@section('konten')

<div class="container-fluid p-4">
  @if(session('sukses'))
  <div class="alert alert-success text-center">
    {{session('sukses')}}
  </div>
  @endif
  <h3>Detail Pesanan</h3>
  <div class="mb-2">
    <a href="{{url('admin/pesanan')}}">Kembali</a>
  </div>
  @if(!empty($pesanan_detail))
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr class="text-center">
        <th>No.</th>
        <th>Tanggal Transaksi</th>
        <th>User</th>
        <th>Produk</th>
        <th>Jumlah</th>
        <th>Pinjam</th>
        <th>Kembali</th>
        <th>Harga</th>
      </tr>

      @foreach ($pesanan_detail as $p)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{date('d-M-Y', strtotime($p->created_at))}}</td>
        <td>{{ $p->pesanan->user->name }}</td>
        <td>{{ $p->produk->nama_produk }}</td>
        <td>{{ $p->jumlah }}</td>
        <td>{{ $p->tanggal_pinjam }}</td>
        <td>{{ $p->tanggal_kembali }}</td>
        <td>Rp. {{ number_format($p->jumlah_harga) }}</td>
      </tr>
      @endforeach
    </table>
  </div>
  @endif

</div>

@endsection
