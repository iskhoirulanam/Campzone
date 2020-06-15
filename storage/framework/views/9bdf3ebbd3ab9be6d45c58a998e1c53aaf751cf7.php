<?php $__env->startSection('konten'); ?>
<div class="col-md-6 m-auto">
  <?php if(session('sukses')): ?>
  <div class="alert alert-success mt-3">
    <?php echo e(session('sukses')); ?>

  </div>
  <?php endif; ?>
  <?php if(!empty($pesanan)): ?>
  <div class="card mt-3">
    <div class="card-header">
      <h5>Informasi Pembayaran</h5>
    </div>
    <div class="card-body">
      <p class="card-text">
        Silakan Melakukan Pembayaran sebesar <strong>Rp. <?php echo e(number_format ( $pesanan->total_harga )); ?> </strong>
        Melalui Nomor
        Rekening di Bawah ini:
      </p>
      <table class="table table-hover">
        <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rek): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($rek->nama_bank); ?></td>
          <td>:</td>
          <td><?php echo e($rek->no_rekening); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>

      <?php if(empty($pesanan->bukti_pembayaran)): ?>
      <button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#uploadModal">
        Upload Bukti Pembayaran
      </button>
      <?php elseif($pesanan->status_pembayaran == 0): ?>
      <p class="p-2 w-100 bg-warning text-white text-center"><i class="fas fa-clock mr-2"></i> Menunggu Konfirmasi
      </p>
      <?php else: ?>
      <p class="p-2 bg-success w-100 text-white text-center"><i class="fas fa-check mr-2"></i> Pembayaran Sukses
      </p>
      <?php endif; ?>
    </div>
  </div>
  <?php else: ?>
  <div class="card mt-3">
    <div class="card-header">
      <h5>Tidak Ada Tagihan</h5>
    </div>
  </div>
  <?php endif; ?>
</div>

<!-- Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(url('upload-bukti-pembayaran')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <input type="file" class="form-control-file" name="bukti_pembayaran">
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/client/pembayaran.blade.php ENDPATH**/ ?>