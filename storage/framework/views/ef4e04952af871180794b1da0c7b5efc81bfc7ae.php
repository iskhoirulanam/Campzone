<?php $__env->startSection('konten'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 m-auto">
            <div class="card border-0">
                <!-- <div class="text-center mt-3">
                    <h5 class="card-title">My Profile</h5>
                </div> -->
                <div class="card-body text-center">
                    <?php
                        $user = \App\User::where('id', Auth::user()->id)->first();
                    ?>
                    <div class="pp mb-3">
                        <?php if(empty($user->foto_profil)): ?>
                        <img src="<?php echo e(asset('img/default-avatar.png')); ?>">
                        <?php else: ?>
                        <img src="<?php echo e(asset('img/'.$user->foto_profil)); ?>">
                        <?php endif; ?>
                    </div>
                    <h4><?php echo e($user->name); ?></h4>
                    <p class="card-text text-secondary"><?php echo e($user->email); ?></p>

                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6>Edit Profil</h6>
                </div>
                <div class="card-body p-4">
                    <form action="<?php echo e(url('update-profile')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="nama_produk">Nama Lengkap</label>

                            <input type="text" name="name" disabled class="form-control" value="<?php echo e($user->name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" disabled class="form-control" value="<?php echo e($user->email); ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2"><?php echo e($user->alamat); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="form-control" name="jk">
                                <option selected disabled>Jenis-Kelamin
                                <option value="Laki-Laki" <?php if($user->jk === 'Laki-Laki'): ?>
                                    selected
                                    <?php endif; ?>>Laki-Laki
                                </option>
                                <option value="Perempuan" <?php if($user->jk === 'Perempuan'): ?>
                                    selected
                                    <?php endif; ?>>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?php echo e($user->tgl_lahir); ?>">
                        </div>

                        <div class="form-group">
                            <label for="hp">No. HP</label>
                            <input type="text" name="hp" class="form-control" value="<?php echo e($user->hp); ?>">
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">No. KTP</label>
                            <input type="text" name="no_ktp" class="form-control" value="<?php echo e($user->no_ktp); ?>">
                        </div>


                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="<?php echo e(url('profile')); ?>" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/client/profile/edit_profile.blade.php ENDPATH**/ ?>