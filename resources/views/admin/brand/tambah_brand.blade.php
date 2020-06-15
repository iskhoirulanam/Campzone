@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @endif
    <h3>Tambah Brand</h3>



    <div class="col-md-6">
        <form action="/admin/brand/insert-brand" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="kategori">Nama Brand</label>
                <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="{{ url('admin/brand') }}" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
@endsection