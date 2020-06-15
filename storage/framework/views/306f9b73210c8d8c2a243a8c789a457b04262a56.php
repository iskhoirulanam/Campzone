<?php $__env->startSection('konten'); ?>

<div class="container mb-4 mt-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <div class="col-md-10 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?php echo e($produk->nama_produk); ?></h4>
                <div class="row">
                    <div class="col-md-5 m-auto">
                        <div class="rental-imgBox">
                            <img src="/img/product1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-7">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Produk</td>
                                    <td>:</td>
                                    <td><?php echo e($produk->nama_produk); ?></td>
                                </tr>
                                <tr>
                                    <td>Spesifikasi</td>
                                    <td>:</td>
                                    <td><?php echo e($produk->spesifikasi); ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Sewa</td>
                                    <td>:</td>
                                    <td><?php echo e(number_format($produk->harga_sewa)); ?>/hari</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td><?php echo e($produk->stok); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="<?php echo e(url('rental')); ?>/<?php echo e($produk->id); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/client/rental.blade.php ENDPATH**/ ?>