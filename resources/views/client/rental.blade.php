@extends('layouts.client')
@section('konten')

<div class="container mb-4 mt-4">
    @if(session('sukses'))
    <div class="alert alert-success text-center">
        {{session('sukses')}}
    </div>
    @endif
    <div class="col-md-10 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{$produk->nama_produk}}</h4>
                <div class="row">
                    <div class="col-md-5 m-auto">
                        <div class="rental-imgBox">
                            <img src="{{ asset('img/produk/'.$produk->foto) }}" alt="">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>:</td>
                                    <td>{{$produk->nama_produk}}</td>
                                </tr>
                                <tr>
                                    <td>Spesifikasi</td>
                                    <td>:</td>
                                    <td>{{$produk->spesifikasi}}</td>
                                </tr>
                                <tr>
                                    <td>Harga Sewa</td>
                                    <td>:</td>
                                    <td>{{number_format($produk->harga_sewa)}}/hari</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action=" {{ url('rental') }}/{{$produk->id}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group pl-2 pr-2">
                                <label for="tanggal pinjam">Tanggal Pinjam</label>
                                <input type="date" name="tanggal_pinjam" required="required" class="form-control"
                                    placeholder="">
                            </div>

                            <div class="form-group pl-2 pr-2">
                                <label for="tanggal kembali">Tanggal Kembali</label>
                                <input type="date" name="tanggal_kembali" required="required" class="form-control"
                                    placeholder="">
                            </div>

                            <div class="form-group pl-2 pr-2">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" required="required" class="form-control"
                                    placeholder="">
                            </div>

                            <button type="submit" class="btn btn-warning mt-3 ml-2">
                                <i class="fas fa-shopping-cart mr-2"></i>Tambah ke Keranjang
                            </button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection