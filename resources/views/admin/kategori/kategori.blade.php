@extends('layouts.admin')
@section('konten')

<div class="container-fluid p-4">
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @endif
    <h3>List Kategori</h3>
    <div class="mb-3">
        <a href="{{ url('admin/kategori/tambah-kategori') }}">+ Tambah Kategori</a>
    </div>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>No.</th>
            <th>Kategori Produk</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kategori as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->kategori }}</td>
            <td class="text-center">
                <a href="/admin/kategori/edit-kategori/{{$k->id}}" class="fas fa-edit text-success"></a>
                <a href="/admin/kategori/hapus-kategori/{{$k->id}}" class="fas fa-trash text-danger"
                    onclick="return confirm('Hapus Kategori?');"></a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection