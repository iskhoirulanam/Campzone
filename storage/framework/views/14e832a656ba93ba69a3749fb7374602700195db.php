<?php $__env->startSection('konten'); ?>

<div class="container-fluid p-4">
  <h3>Member</h3>
  <?php if(!empty($member)): ?>
  <div class="table-responsive">
    <table class="table table-bordered">
      <tr class="text-center">
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>No. KTP</th>
      </tr>

      <?php $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($m->name); ?></td>
        <td><?php echo e($m->email); ?></td>
        <td><?php echo e($m->jk); ?></td>
        <td><?php echo e($m->alamat); ?></td>
        <td><?php echo e($m->hp); ?></td>
        <td><?php echo e($m->no_ktp); ?></td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  </div>
  <?php endif; ?>
  <?php echo e($member->links()); ?>

  Halaman : <?php echo e($member->currentPage()); ?> <br />
  Jumlah Data : <?php echo e($member->total()); ?> <br />
  Data Per Halaman : <?php echo e($member->perPage()); ?> <br />

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/member.blade.php ENDPATH**/ ?>