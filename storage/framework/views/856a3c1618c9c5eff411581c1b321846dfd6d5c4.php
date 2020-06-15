<?php $__env->startSection('konten'); ?>
<div class="container-fluid p-4">
  <?php if(session('sukses')): ?>
  <div class="alert alert-success">
    <?php echo e(session('sukses')); ?>

  </div>
  <?php endif; ?>
  <h3>Tambah Kategori</h3>

  <div class="mb-3">
    <a href="<?php echo e(url('admin/kategori')); ?>">Kembali</a>
  </div>

  <div class="col-md-6">
    <form action="/admin/kategori/insert-kategori" method="POST">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label for="kategori">Kategori Produk</label>
        <input type="text" name="kategori" class="form-control" placeholder="Nama Produk">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/kategori/tambah_kategori.blade.php ENDPATH**/ ?>