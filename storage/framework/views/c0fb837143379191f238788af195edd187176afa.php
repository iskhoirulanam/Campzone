

<?php $__env->startSection('konten'); ?>
<div class="container-fluid p-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <h3>Edit Brand</h3>

    <div class="mb-3">
        <a href="<?php echo e(url('admin/brand')); ?>">Kembali</a>
    </div>

    <div class="col-md-6">
        <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/admin/brand/update-brand/<?php echo e($b->id); ?>" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="nama_brand">Nama Brand</label>
                <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand"
                    value="<?php echo e($b->nama_brand); ?>">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Slug" value="<?php echo e($b->slug); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/brand/edit_brand.blade.php ENDPATH**/ ?>