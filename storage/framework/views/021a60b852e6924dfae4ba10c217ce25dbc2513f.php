
<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
    <h3>Brand</h3>
    <div class="mb-3">
        <a href="<?php echo e(url('admin/brand/tambah-brand')); ?>">+ Tambah Brand</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>No.</th>
                <th>Nama Brand</th>
                <th>Slug</th>
                <th>Aksi</th>


            </tr>
            <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->nama_brand); ?></td>
                <td><?php echo e($item->slug); ?></td>
                <td class="text-center">
                    <a href="/admin/brand/edit-brand/<?php echo e($item->id); ?>" class="fas fa-edit text-success mr-3"></a>
                    <a href="/admin/brand/hapus-brand/<?php echo e($item->id); ?>" class="fas fa-trash text-danger"
                        onclick="return confirm('Hapus Produk?');"></a>
                </td>


            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/brand/index.blade.php ENDPATH**/ ?>