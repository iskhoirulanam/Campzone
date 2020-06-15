@extends('layouts.client')
@section('konten')
<div class="container">
    @if(session('sukses'))
    <div class="alert alert-success">
        {{session('sukses')}}
    </div>
    @elseif(session('gagal'))
    <div class="alert alert-danger">
        {{session('gagal')}}
    </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-6 m-auto">
            <div class="card border-0">
                <!-- <div class="text-center mt-3">
                    <h5 class="card-title">My Profile</h5>
                </div> -->
                <div class="card-body text-center">
                    <?php
                        $user = \App\User::where('id', Auth::user()->id)->first();
                    ?>
                    <div class="pp mb-3">
                        @if(empty($user->foto_profil))
                        <a href="{{ url('upload-foto-profil') }}" data-toggle="modal" data-target="#uploadModal">
                            <img src="{{ asset('img/default-avatar.png') }}">
                        </a>
                        @else
                        <a href="{{ url('upload-foto-profil') }}" data-toggle="modal" data-target="#uploadModal">
                            <img src="{{ asset('img/avatar/'.$user->foto_profil) }}">
                        </a>
                        @endif
                    </div>
                    <h4>{{ $user->name }}</h4>
                    <p class="card-text text-secondary">{{ $user->email }}</p>
                    <a href="{{ url('edit-profile') }}" class="nav-link text-warning">
                        <i class="fas fa-edit mr-2"></i>Edit Profil
                    </a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>Data Diri</h6>
                    </div>
                    <div class="card-body p-4">
                        <div>
                            <h6>Alamat</h6>
                            <p class="text-secondary">{{ $user->alamat }}</p>
                        </div>
                        <div>
                            <h6>Jenis Kelamin</h6>
                            <p class="text-secondary">{{ $user->jk }}</p>
                        </div>
                        <div>
                            <h6>Tanggal Lahir</h6>
                            <p class="text-secondary">{{date('d-M-Y', strtotime($user->tgl_lahir))}}</p>
                        </div>
                        <div>
                            <h6>No HP</h6>
                            <p class="text-secondary">{{ $user->hp }}</p>
                        </div>
                        <div>
                            <h6>No KTP</h6>
                            <p class="text-secondary">{{ $user->no_ktp }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Upload Foto Profil</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('upload-foto-profil') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto_profil">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection