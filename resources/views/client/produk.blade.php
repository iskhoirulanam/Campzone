@extends('layouts.client')
@section('konten')

<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-md-2">
            <ul class="list-group list-group-flush fixed">
                <li class="list-group-item bg-detail">Brand</li>

                @foreach ($brand as $item)
                <li class="list-group-item">
                    <a href="{{route('brand.kategori', $item->slug)}}" class="link">{{$item->nama_brand}}</a>
                </li>

                @endforeach


            </ul>
        </div>

        <div class="col-md-10">
            @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
            @endif
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="slide-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active carousel-imgBox">
                        <img src="/img/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item carousel-imgBox">
                        <img src="/img/slide3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <section class="new-product">
                <h5 class="text-center sec-title">Produk Terbaru</h5>

                <div class="row mb-4">
                    @foreach ($produk as $p)
                    <div class="col-md-3">
                        <div class="product">

                            <div class="card border-0">
                                <div class="produkImg">
                                    <img src="{{ asset('img/produk/'.$p->foto) }}" class="card-img-top"
                                        alt="foto produk">
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{$p->nama_produk}}</h6>
                                    <p class="card-text">{{$p->deskripsi}}.</p>
                                    <p class="harga-sewa">
                                        Rp. {{number_format($p->harga_sewa)}}/hari
                                    </p>

                                    <a class="btn btn-warning" href="{{url('rental')}}/{{$p->id}}">Rental</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </section>

        </div>
    </div>
</div>



@endsection