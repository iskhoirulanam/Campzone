@extends('layouts.admin')
@section('konten')

<div class="container-fluid p-4">
  @if(session('sukses'))
  <div class="alert alert-success">
    {{session('sukses')}}
  </div>
  @endif

  <h3>Rekening Campzone</h3>
  <div class="mb-3">
    <a href="{{ url('admin/rekening/tambah-rekening') }}">+ Tambah Rekening</a>
  </div>
  <table class="table table-bordered">
    <tr class="text-center">
      <th>No.</th>
      <th>Nama Bank</th>
      <th>No. Rekening</th>
      <th>Aksi</th>
    </tr>
    @foreach ($rekening as $rek)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $rek->nama_bank }}</td>
      <td>{{ $rek->no_rekening }}</td>
      <td class="text-center">
        <a href="/admin/rekening/edit-rekening/{{$rek->id}}" class="fas fa-edit text-success"></a>
        <a href="/admin/rekening/hapus-rekening/{{$rek->id}}" class="fas fa-trash text-danger"
          onclick="return confirm('Hapus Rekening?');"></a>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
