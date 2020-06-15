@extends('layouts.admin')

@section('konten')
<div class="container-fluid p-4">
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @endif
    <h3>Edit Brand</h3>

    <div class="mb-3">
        <a href="{{ url('admin/brand') }}">Kembali</a>
    </div>

    <div class="col-md-6">
        @foreach($brand as $b)
        <form action="/admin/brand/update-brand/{{$b->id}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="nama_brand">Nama Brand</label>
                <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand"
                    value="{{$b->nama_brand}}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{$b->slug}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @endforeach
    </div>
</div>
@endsection