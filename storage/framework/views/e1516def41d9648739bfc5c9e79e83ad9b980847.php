<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success text-center">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <h3>Pesanan</h3>
    <?php if(!empty($pesanan)): ?>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>No.</th>
                <th>Tanggal Transaksi</th>
                <th>User</th>
                <th>Total Harga</th>
                <th>Bukti Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Status Pengambilan</th>
                <th>Status Pengembalian</th>
            </tr>

            <?php $__currentLoopData = $pesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e(date('d-M-Y, h:s', strtotime($p->tanggal))); ?></td>
                <td><?php echo e($p->user->name); ?></td>
                <td>Rp. <?php echo e(number_format($p->total_harga)); ?></td>
                <td>
                    <img src="<?php echo e(asset('img/pembayaran/'.$p->bukti_pembayaran)); ?>" alt="" width="80px">
                </td>

                <td>
                    <?php if($p->bukti_pembayaran == null): ?>
                    <button class="btn btn-warning btn-xs w-100 mb-2 disabled">
                        Konfirmasi
                    </button>
                    </form>
                    <?php elseif($p->status_pembayaran == 0): ?>
                    <form action="pesanan/konfirmasi-pembayaran/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pembayaran" value="1"
                            class="btn btn-warning btn-xs w-100 mb-2">
                            Konfirmasi
                        </button>
                    </form>
                    <?php else: ?>
                    <p class="text-success text-xs text-center mb-2"><i class="fas fa-check mr-2"></i>Dikonfirmasi</p>
                    <form action="pesanan/batal-konfirmasi-pembayaran/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pembayaran" value="0"
                            class="btn btn-danger btn-xs w-100 mb-2">
                            Batal
                        </button>
                    </form>
                    <?php endif; ?>
                </td>

                <td>

                    <?php if($p->status_pembayaran == 0): ?>
                    <button class="btn btn-warning btn-xs w-100 mb-2 disabled">
                        Konfirmasi
                    </button>
                    <?php elseif($p->status_pengambilan == 0): ?>
                    <form action="pesanan/konfirmasi-pengambilan/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pengambilan" value="1"
                            class="btn btn-warning btn-xs w-100 mb-2">
                            Konfirmasi
                        </button>
                    </form>
                    <?php else: ?>
                    <p class="text-success text-xs text-center mb-2"><i class="fas fa-check mr-2"></i>Dikonfirmasi</p>
                    <form action="pesanan/batal-konfirmasi-pengambilan/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pengambilan" value="0"
                            class="btn btn-danger btn-xs w-100 mb-2">
                            Batal
                        </button>
                    </form>
                    <?php endif; ?>
                </td>

                <td>
                    <?php if($p->status_pengambilan == 0): ?>
                    <button class="btn btn-warning btn-xs w-100 mb-2 disabled">
                        Konfirmasi
                    </button>
                    <?php elseif($p->status_pengembalian == 0): ?>
                    <form action="pesanan/konfirmasi-pengembalian/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pengembalian" value="1"
                            class="btn btn-warning btn-xs w-100 mb-2">
                            Konfirmasi
                        </button>
                    </form>
                    <?php else: ?>
                    <p class="text-success text-xs text-center mb-2"><i class="fas fa-check mr-2"></i>Dikonfirmasi</p>
                    <form action="pesanan/batal-konfirmasi-pengembalian/<?php echo e($p->id); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <button type="hidden" name="status_pengembalian" value="0"
                            class="btn btn-danger btn-xs w-100 mb-2">
                            Batal
                        </button>
                    </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <?php endif; ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/pesanan.blade.php ENDPATH**/ ?>