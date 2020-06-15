<?php $__env->startSection('konten'); ?>
<div class="container-fluid p-4">
    <h3>Tambah Produk</h3>

    <div class="mb-3">
        <a href="<?php echo e(url('admin/produk')); ?>">Kembali</a>
    </div>

    <div class="col-md-6">
        <form action="/admin/produk/insert-produk" method="POST" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="kategori">Nama Produk</label>
                <input type="text" name="nama_produk" required="required" class="form-control"
                    placeholder="Nama Produk">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="" name="kategori_id">
                    <option selected disabled>Pilih Kategori
                    </option>
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($k->id); ?>"><?php echo e($k->kategori); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <select class="form-control" id="" name="brand_id">
                    <option selected disabled>Pilih Brand
                    </option>
                    <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama_brand); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_sewa">Harga Sewa</label>
                <input type="number" name="harga_sewa" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" name="stok" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="foto">Foto Produk (max 2Mb)</label>
                <input type="file" class="form-control-file" name="foto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/admin/produk/tambah_produk.blade.php ENDPATH**/ ?>