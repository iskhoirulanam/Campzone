@extends('layouts.client')
@section('konten')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-2">
            <ul class="list-group list-group-flush fixed">
                <li class="list-group-item bg-detail">Kategori Produk</li>
                <li class="list-group-item">
                    <a href="#" class="kat-link">Tas</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="kat-link">Tenda</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="kat-link">Sleeping Bag</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10">

            <section class="new-product">
                <h5 class="text-center sec-title">Produk Terbaru</h5>

                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="product">

                            <div class="card" style="width: 16rem;">
                                <img src="/img/product1.jpg" class="card-img-top" alt="produk2">
                                <div class="card-body">
                                    <h5 class="card-title">{{}}</h5>
                                    <p class="card-text">Tas Gunung Camping Touring Hiking Outdoor Backpack Catenzo
                                        Traveling CT416.</p>
                                    <p class="harga-sewa">
                                        Rp. 100000/hari
                                    </p>
                                    <a href="#" class="btn btn-detail" data-toggle="modal"
                                        data-target="#product1">Detail</a>
                                    <a class="btn btn-warning" href="/rental_detail">Rental</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </section>

        </div>
    </div>
</div>


<!-- Modal Product 1 -->
<div class="modal fade" id="product1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="deskripsi">
                    <table class="table-borderless">
                        <tr>
                            <td>Nama Produk</td>
                            <td>:</td>
                            <td>Carrier CATENZO STCT C066</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>Tas Ransel</td>
                        </tr>
                        <tr>
                            <td>Harga Sewa</td>
                            <td>:</td>
                            <td>Rp 100000/hari</td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td>10</td>
                        </tr>
                    </table>
                    <h5>Spesifikasi</h5>
                    <table class="table-borderless">
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>1.0 Kg</td>
                        </tr>
                        <tr>
                            <td>Warna</td>
                            <td>:</td>
                            <td>Tosca</td>
                        </tr>
                        <tr>
                            <td>Ukuran</td>
                            <td>:</td>
                            <td>34 X 67 X 20</td>
                        </tr>
                        <tr>
                            <td>Kapasitas</td>
                            <td>:</td>
                            <td>40 + 5 Liter</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <a class="btn btn-warning" href="/rental_detail">Rental</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
@endsection