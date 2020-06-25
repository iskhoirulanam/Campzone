@extends('layouts.admin')

@section('konten')

<div class="container-fluid p-4">
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @endif
    <h3>List Produk</h3>
    <div class="mb-3">
        <a href="{{ url('admin/produk/tambah-produk') }}">+ Tambah Produk</a>
    </div>
    <table class="table table-bordered table-responsive">
        <tr class="text-center">
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Brand</th>
            <th>Harga Sewa Per Hari</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Spesifikasi</th>
            <th>Foto Produk</th>
            <th>Aksi</th>
        </tr>

        @foreach ($produk as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>{{$p->kategori->kategori}}</td>
            <td>{{$p->brand->nama_brand}}</td>


            <td>Rp. {{ number_format($p->harga_sewa) }}</td>
            <td>{{ $p->stok }}</td>
            <td>{{ $p->deskripsi }}</td>
            <td>{{ $p->spesifikasi }}</td>
            <td>
                <img src="{{asset('img/produk/'.$p->foto) }}" alt="" width="80px">
            </td>
            <td class="text-center">
                <a href="/admin/produk/edit-produk/{{$p->id}}" class="fas fa-edit text-success mr-3"></a>
                <a href="/admin/produk/hapus-produk/{{$p->id}}" class="fas fa-trash text-danger"
                    onclick="return confirm('Hapus Produk?');"></a>
            </td>
        </tr>
        @endforeach
    </table>
    <br />
    {{ $produk->links() }}
    Halaman : {{ $produk->currentPage() }} <br />
    Jumlah Data : {{ $produk->total() }} <br />
    Data Per Halaman : {{ $produk->perPage() }} <br />

</div>
@endsection