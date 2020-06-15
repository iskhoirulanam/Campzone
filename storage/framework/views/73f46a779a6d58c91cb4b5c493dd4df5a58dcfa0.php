<?php $__env->startSection('konten'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 m-auto">
            <?php if(session('sukses')): ?>
            <div class="alert alert-danger mt-3">
                <?php echo e(session('sukses')); ?>

            </div>
            <?php endif; ?>
            <?php if(!empty($pesanan)): ?>
            <div class="card mt-3 mb-3">
                <div class="card-header">
                    <h4 class="card-title">Keranjang Belanja</h4>
                    <p align="right">Tanggal Pesan: <?php echo e(date('d M Y', strtotime($pesanan->tanggal))); ?></p>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produk</th>
                                <th>Harga Sewa</th>
                                <th>Jumlah</th>
                                <th>Pinjam</th>
                                <th>Kembali</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $pesanan_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e($pd->produk->nama_produk); ?></td>
                                <td>Rp. <?php echo e(number_format($pd->produk->harga_sewa)); ?>/hari</td>
                                <td><?php echo e($pd->jumlah); ?> Produk</td>
                                <td><?php echo e(date('d-M-Y', strtotime($pd->tanggal_pinjam))); ?></td>
                                <td><?php echo e(date('d-M-Y', strtotime($pd->tanggal_kembali))); ?></td>

                                <td>Rp. <?php echo e(number_format($pd->jumlah_harga)); ?></td>
                                <td>
                                    <form action="<?php echo e(url('checkout')); ?>/<?php echo e($pd->id); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Hapus Pesanan?');"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th colspan="6">Total Harga</th>
                                <th colspan="">Rp. <?php echo e(number_format($pesanan->total_harga)); ?></th>
                                <td>
                                    <a href="<?php echo e(url('pembayaran')); ?>" class="btn btn-sm btn-success ml-auto">Pembayaran
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php endif; ?>
                    <?php if(empty($pesanan)): ?>
                    <div class="row">
                        <div class="col-md-6 m-auto">

                            <div class="card mt-3 mb-3">
                                <div class="card-header">
                                    <h6><i class="fas fa-shopping-cart mr-3"></i>Keranjang Belanja Kosong</h6>
                                </div>
                                <div class="card-body">
                                    <a href="/produk" class="btn btn-warning">Belanja Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/client/checkout.blade.php ENDPATH**/ ?>