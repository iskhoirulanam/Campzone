@extends('layouts.admin')
@section('konten')

<div class="container-fluid p-4">

    <!-- Modal -->
    <div class="modal fade" id="addBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nama_brand">Nama Brand</label>
                            <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand">
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Slug">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="savaButton">Save changes</button>
                    </div>
            </div>
            </form>


        </div>
    </div>
    <h3>Brand</h3>
    <div class="mb-3">
        <a href="" data-toggle="modal" data-target="#addBrand" id="createBrand">+ Tambah
            Brand</a>

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
                    <a href="/admin/brand/hapus-brand/{{$item->id}}" class="fas fa-trash text-danger deletebtn"></a>

                </td>


            </tr>
            @endforeach
        </table>

    </div>
</div>


@endsection