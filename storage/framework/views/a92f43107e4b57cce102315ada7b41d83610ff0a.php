<?php $__env->startSection('konten'); ?>
<div class="container-fluid p-4">
    <h3>Tambah Produk</h3>

    <div class="mb-3">
        <a href="<?php echo e(url('admin/produk')); ?>">Kembali</a>
    </div>

    <div class="col-md-6">
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="/admin/produk/update-produk/<?php echo e($p->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" required="required" class="form-control"
                    value="<?php echo e($p->nama_produk); ?>">
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="" name="kategori_id">
                    <option selected disabled>Pilih Kategori
                    </option>
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k->id); ?>" <?php if($k->id === $k->id): ?>
                        selected
                        <?php endif; ?>
                        > <?php echo e($k->kategori); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" required="required" class="form-control"
                    value="<?php echo e($p->harga_sewa); ?>">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" required="required" class="form-control" value="<?php echo e($p->stok); ?>">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="2"><?php echo e($p->deskripsi); ?></textarea>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control" rows="3"><?php echo e($p->spesifikasi); ?></textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto Produk</label>
                <input type="file" class="form-control-file" name="foto">
            </div>
            <input type="submit" class="btn btn-success" value="Update Data">
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/produk/edit_produk.blade.php ENDPATH**/ ?>