@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
  @if(session('sukses'))
  <div class="alert alert-success">
    {{session('sukses')}}
  </div>
  @endif
  <h3>Tambah Kategori</h3>

  <div class="mb-3">
    <a href="{{ url('admin/kategori') }}">Kembali</a>
  </div>

  <div class="col-md-6">
    <form action="/admin/kategori/insert-kategori" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="kategori">Kategori Produk</label>
        <input type="text" name="kategori" class="form-control" placeholder="Nama Produk">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
