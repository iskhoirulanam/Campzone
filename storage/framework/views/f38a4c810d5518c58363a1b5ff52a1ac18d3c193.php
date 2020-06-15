

<?php $__env->startSection('konten'); ?>
<div class="container-fluid p-4">
    <?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
    <?php endif; ?>
    <h3>Tambah Brand</h3>



    <div class="col-md-6">
        <form action="/admin/brand/insert-brand" method="POST">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="kategori">Nama Brand</label>
                <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand">
            </div>

            <div class="form-group">
                <label for="kategori">Slug</label>
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <a href="<?php echo e(url('admin/brand')); ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/brand/tambah_brand.blade.php ENDPATH**/ ?>