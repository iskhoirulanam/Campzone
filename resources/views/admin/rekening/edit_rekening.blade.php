@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
  @if(session('sukses'))
  <div class="alert alert-success">
    {{session('sukses')}}
  </div>
  @endif
  <h3>Edit Rekening</h3>

  <div class="mb-3">
    <a href="{{ url('admin/rekening') }}">Kembali</a>
  </div>
  <div class="col-md-6">
    @foreach ($rekening as $rek)
    <form action="/admin/rekening/update-rekening/{{$rek->id}}" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="nama_bank">Nama Bank</label>
        <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="{{$rek->nama_bank}}">
      </div>
      <div class="form-group">
        <label for="no_rekening">Nomor Rekening</label>
        <input type="text" name="no_rekening" class="form-control" placeholder="Nomor Rekening"
          value="{{$rek->no_rekening}}">
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    @endforeach
  </div>
</div>
@endsection
