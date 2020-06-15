@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
  @if(session('sukses'))
  <div class="alert alert-success">
    {{session('sukses')}}
  </div>
  @endif
  <h3>Tambah Rekening</h3>

  <div class="mb-3">
    <a href="{{ url('admin/rekening') }}">Kembali</a>
  </div>

  <div class="col-md-6">
    <form action="/admin/rekening/insert-rekening" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="nama_bank">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank">
      </div>
      <div class="form-group">
        <label for="no_rekening">Nomor Rekening</label>
        <input type="text" name="no_rekening" class="form-control" placeholder="Nomor Rekening">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection
