@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
    <h3>Tambah Produk</h3>

    <div class="mb-3">
        <a href="{{ url('admin/produk') }}">Kembali</a>
    </div>

    <div class="col-md-6">
        @foreach ($produk as $p)
        <form action="/admin/produk/update-produk/{{$p->id}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" required="required" class="form-control"
                    value="{{$p->nama_produk}}">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="" name="kategori_id">
                    <option selected disabled>Pilih Kategori
                    </option>
                    @foreach ($kategori_produk as $k)
                    <option value="{{$k->id}}" @if ($k->id === $k->id)
                        selected
                        @endif
                        > {{ $k->kategori }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <select class="form-control" id="" name="brand_id">
                    <option selected disabled>Pilih Brand
                    </option>
                    @foreach ($brand_kategori as $b)
                    <option value="{{$b->id}}">{{ $b->nama_brand }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" required="required" class="form-control"
                    value="{{$p->harga_sewa}}">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" required="required" class="form-control" value="{{$p->stok}}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="2">{{$p->deskripsi}}</textarea>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control" rows="3">{{$p->spesifikasi}}</textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto Produk</label>
                <input type="file" class="form-control-file" name="foto">
            </div>
            <input type="submit" class="btn btn-success" value="Update Data">
        </form>
        @endforeach
    </div>
</div>
@endsection