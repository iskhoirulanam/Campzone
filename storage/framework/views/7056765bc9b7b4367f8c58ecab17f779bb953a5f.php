<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
  <?php if(session('sukses')): ?>
  <div class="alert alert-success">
    <?php echo e(session('sukses')); ?>

  </div>
  <?php endif; ?>

  <h3>Rekening Campzone</h3>
  <div class="mb-3">
    <a href="<?php echo e(url('admin/rekening/tambah-rekening')); ?>">+ Tambah Rekening</a>
  </div>
  <table class="table table-bordered">
    <tr class="text-center">
      <th>No.</th>
      <th>Nama Bank</th>
      <th>No. Rekening</th>
      <th>Aksi</th>
    </tr>
    <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loop->iteration); ?></td>
      <td><?php echo e($rek->nama_bank); ?></td>
      <td><?php echo e($rek->no_rekening); ?></td>
      <td class="text-center">
        <a href="/admin/rekening/edit-rekening/<?php echo e($rek->id); ?>" class="fas fa-edit text-success"></a>
        <a href="/admin/rekening/hapus-rekening/<?php echo e($rek->id); ?>" class="fas fa-trash text-danger"
          onclick="return confirm('Hapus Rekening?');"></a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/rekening/rekening.blade.php ENDPATH**/ ?>