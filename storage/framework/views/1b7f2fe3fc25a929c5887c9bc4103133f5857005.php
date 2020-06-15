<?php $__env->startSection('konten'); ?>
<?php if(session('sukses')): ?>
<div class="alert alert-success">
    <?php echo e(session('sukses')); ?>

</div>
<?php endif; ?>

<!-- hero -->
<div class="hero">
    <div class="jumbotron-fluid">
        <div class="row">
            <div class="col-md-7 mx-auto text-center">
                <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quam eos iure
                    provident, consequatur dolorem dolor! Pariatur possimus, sequi numquam..</p>
                <a class="btn btn-warning" href="/produk" role="button">Explore Perlengkapan</a>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->

<!-- tentang kami -->
<section class="tentang-kami">
    <div class="container">
        <h2 class="sec-title">Tentang Kami</h2>
        <div class="row">
            <div class="col-md-5">
                <div class="tentang-imgBox">
                    <img src="/img/office.jpg" alt="" class="rounded">
                </div>
            </div>
            <div class="col-md-7">
                <div class="tentang-konten">
                    <h5>Campzone</h5>
                    <p class="sec-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem
                        eveniet, quas deleniti error qui fugit, culpa architecto distinctio consequatur voluptates.
                        Fuga, rem labore cum consequuntur illum excepturi, quis explicabo a magnam recusandae inventore!
                    </p>

                    <a href="#" class="btn btn-warning">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end tentang kami -->

<!-- galeri -->
<section class="galeri">
    <div class="container">
        <h2 class="sec-title">Galeri</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="galeri-img mx-auto">
                    <img src="/img/galeri1.jpg" alt="" class="rounded">
                </div>
            </div>
            <div class="col-md-4">
                <div class="galeri-img">
                    <img src="/img/galeri1.jpg" alt="" class="rounded" height="200px">
                </div>
            </div>
            <div class="col-md-4">
                <div class="galeri-img">
                    <img src="/img/galeri1.jpg" alt="" class="rounded" height="200px">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="galeri-img mx-auto">
                    <img src="/img/galeri1.jpg" alt="" class="rounded">
                </div>
            </div>
            <div class="col-md-4">
                <div class="galeri-img mx-auto">
                    <img src="/img/galeri1.jpg" alt="" class="rounded">
                </div>
            </div>
            <div class="col-md-4">
                <div class="galeri-img mx-auto">
                    <img src="/img/galeri1.jpg" alt="" class="rounded">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end galeri -->

<!-- review -->
<section class="review">
    <div class="container">
        <h2 class="sec-title">Review</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="pp">
                    <img src="/img/pp1.jpg" alt="">
                </div>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui deleniti quo sit optio aliquam totam
                    vero incidunt.accusantium."
                </p>
                <p>- Mas Ganteng -</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="pp">
                    <img src="/img/pp1.jpg" alt="">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolor illum accusantium adipisci
                    repellat iusto unde temporibus, blanditiis dolore aperiam magni expedita.
                </p>
                <p>- Mas Ganteng -</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="pp">
                    <img src="/img/pp1.jpg" alt="">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, aliquam odit sit incidunt vero
                    illo perferendis tenetur.
                </p>
                <p>- Mas Ganteng -</p>
            </div>
        </div>
    </div>
</section>
<!-- end review -->

<!-- hubungi kami -->
<section class="kontak">
    <div class="container">
        <h2 class="sec-title">Hubungi Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Campzone</h5>
                <div class="office-imgBox">
                    <img src="/img/office.jpg" alt="office" class="rounded">
                </div>
                <div class="contact">
                    <h6>ALAMAT KANTOR</h6>
                    <p>Jl. Kaliurang KM 4, Depok, Sleman, Yogyakarta</p>
                </div>
                <div class="contact">
                    <h6>TELEPON</h6>
                    <p>0822-2019828</p>
                </div>
                <div class="contact">
                    <h6>EMAIL</h6>
                    <p>campzone@email.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Almat Email</label>
                            <input type="email" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">Kami tidak membagikan alamat email Anda
                                ke siapapun.</small>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hubungi kami -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/client/index.blade.php ENDPATH**/ ?>