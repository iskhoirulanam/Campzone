<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <h3>List Produk</h3>
    <div class="mb-3">
        <a href="<?php echo e(url('admin/produk/tambah-produk')); ?>">+ Tambah Produk</a>
    </div>
    <table class="table table-bordered table-responsive">
        <tr class="text-center">
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Brand</th>
            <th>Harga Sewa Per Hari</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Spesifikasi</th>
            <th>Foto Produk</th>
            <th>Aksi</th>
        </tr>

        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($p->nama_produk); ?></td>
            <td>kategori</td>
            <td>Eiger</td>


            <td>Rp. <?php echo e(number_format($p->harga_sewa)); ?></td>
            <td><?php echo e($p->stok); ?></td>
            <td><?php echo e($p->deskripsi); ?></td>
            <td><?php echo e($p->spesifikasi); ?></td>
            <td>
                <img src="<?php echo e(asset('img/produk/'.$p->foto)); ?>" alt="" width="80px">
            </td>
            <td class="text-center">
                <a href="/admin/produk/edit-produk/<?php echo e($p->id); ?>" class="fas fa-edit text-success mr-3"></a>
                <a href="/admin/produk/hapus-produk/<?php echo e($p->id); ?>" class="fas fa-trash text-danger"
                    onclick="return confirm('Hapus Produk?');"></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br />
    <?php echo e($produk->links()); ?>

    Halaman : <?php echo e($produk->currentPage()); ?> <br />
    Jumlah Data : <?php echo e($produk->total()); ?> <br />
    Data Per Halaman : <?php echo e($produk->perPage()); ?> <br />

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/produk/produk.blade.php ENDPATH**/ ?>