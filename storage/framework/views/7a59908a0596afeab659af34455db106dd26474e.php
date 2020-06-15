<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <h3>List Kategori</h3>
    <div class="mb-3">
        <a href="<?php echo e(url('admin/kategori/tambah-kategori')); ?>">+ Tambah Kategori</a>
    </div>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>No.</th>
            <th>Kategori Produk</th>
            <th>Aksi</th>
        </tr>
        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($k->kategori); ?></td>
            <td class="text-center">
                <a href="/admin/kategori/edit-kategori/<?php echo e($k->id); ?>" class="fas fa-edit text-success"></a>
                <a href="/admin/kategori/hapus-kategori/<?php echo e($k->id); ?>" class="fas fa-trash text-danger"
                    onclick="return confirm('Hapus Kategori?');"></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/kategori/kategori.blade.php ENDPATH**/ ?>