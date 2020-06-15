@extends('layouts.admin')
@section('konten')

<div class="container-fluid p-4">
    <h3>Brand</h3>
    <div class="mb-3">
        <a href="{{ url('admin/brand/tambah-brand') }}">+ Tambah Brand</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>No.</th>
                <th>Nama Brand</th>
                <th>Slug</th>

                <th>Aksi</th>


            </tr>
            @foreach ($brand as $item)
            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{$item->nama_brand}}</td>
                <td>{{$item->slug}}</td>
                <td class="text-center">
                    <a href="/admin/brand/edit-brand/{{$item->id}}" class="fas fa-edit text-success mr-3"></a>
                    <a href="/admin/brand/hapus-brand/{{$item->id}}" class="fas fa-trash text-danger"
                        onclick="return confirm('Hapus Produk?');"></a>
                </td>


            </tr>
            @endforeach
        </table>

    </div>
</div>
@endsection