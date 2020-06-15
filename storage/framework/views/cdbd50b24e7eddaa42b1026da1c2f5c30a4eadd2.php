<?php $__env->startSection('konten'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Admin Home</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Starter Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <?php
              $pesanan = \App\Pesanan::count();
            ?>
            <?php if(!empty($pesanan)): ?>
            <h3><?php echo e($pesanan); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>
            <p>Pesanan</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo e(url('admin/pesanan')); ?>" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <?php
              $pesanan_baru = \App\Pesanan::where('status_pengambilan',0)->count();
            ?>
            <?php if(!empty($pesanan_baru)): ?>
            <h3><?php echo e($pesanan_baru); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>

            <p>Pesanan Baru</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo e(url('admin/pesanan')); ?>" class="small-box-footer">More info <i
              class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <?php
              $member = \App\User::where('is_admin',0)->count();
            ?>
            <?php if(!empty($member)): ?>
            <h3><?php echo e($member); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>

            <p>Member</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo e(url('admin/member')); ?>" class="small-box-footer">More info <i
              class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner">
            <?php
              $produk = \App\Produk::count();
            ?>
            <?php if(!empty($produk)): ?>
            <h3><?php echo e($produk); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>
            <p>Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo e(url('admin/produk')); ?>" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <?php
              $kategori = \App\Kategori::count();
            ?>
            <?php if(!empty($kategori)): ?>
            <h3><?php echo e($kategori); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>

            <p>Kategori</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo e(url('admin/kategori')); ?>" class="small-box-footer">More info <i
              class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <?php
              $rekening = \App\Rekening::count();
            ?>
            <?php if(!empty($rekening)): ?>
            <h3><?php echo e($rekening); ?></h3>
            <?php else: ?>
            <h3>0</h3>
            <?php endif; ?>

            <p>Rekening</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo e(url('admin/rekening')); ?>" class="small-box-footer">More info <i
              class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\campzone-master\resources\views/admin/home.blade.php ENDPATH**/ ?>