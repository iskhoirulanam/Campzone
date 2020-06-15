<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/produk.css">
    <link rel="stylesheet" href="/css/profile.css">

    <!-- fa -->
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">
    <style>
    .badge {
      font-size: 8px;
      vertical-align: top;
      margin-left: -0.8em;
    }

    </style>
    <title>Campzone.co</title>

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!-- Left navbar links -->
        <a class="navbar-brand" href="/home">
          <img src="/img/brand2.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a class="nav-link" href="/produk">Produk</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a class="nav-link" href="/kontak">Kontak</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a class="nav-link" href="#">Syarat & Ketentuan</a>
            </li>

          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>
            <a class="nav-item nav-link btn btn-warning mr-2" data-toggle="modal" data-target="#loginModal">
              <?php echo e(__('Login')); ?>

            </a>
            <!-- <a class="nav-item nav-link btn btn-warning mr-3" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a> -->
            <?php if(Route::has('register')): ?>

            <a class="nav-item nav-link btn btn-warning" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>

            <?php endif; ?>
            <?php else: ?>
            <?php
                        $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status_pembayaran',0)->first();
                        if(!empty($pesanan_utama))
                        {
                            $notif = \App\PesananDetail::where('pesanan_id',$pesanan_utama->id)->count();
                        }
                    ?>
            <a class="nav-item nav-link ml-3 mr-3 " href="<?php echo e(url('checkout')); ?>">
              <i class="fas fa-cart-plus"></i>
              <?php if(!empty($notif)): ?>
              <span class="badge badge-danger navbar-badge"><?php echo e($notif); ?></span>
              <?php endif; ?>
            </a>
            <a class="nav-item nav-link fas fa-envelope mt-1 mr-3" href="#msg"></a>
            <a class="nav-item nav-link text-gray fas fa-bell mt-1 mr-3" href="#notif">

            </a>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(url('profile')); ?>">Profil</a>
                <a class="dropdown-item" href="<?php echo e(url('pembayaran')); ?>">Pembayaran</a>
                <a class="dropdown-item" href="<?php echo e(url('pesanan')); ?>">Pesanan</a>


                <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                  <?php echo csrf_field(); ?>
                </form>
              </div>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <?php echo $__env->yieldContent('konten'); ?>



    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo e(route('login')); ?>">
              <?php echo csrf_field(); ?>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Email')); ?></label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                    value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    name="password" required autocomplete="current-password">

                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($message); ?></strong>
                  </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                      <?php echo e(old('remember') ? 'checked' : ''); ?>>

                    <label class="form-check-label" for="remember">
                      <?php echo e(__('Remember Me')); ?>

                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-warning">
                    <?php echo e(__('Login')); ?>

                  </button>
                  <div class="mt-2">
                    <?php if(Route::has('password.request')): ?>
                    <a class="btn-link" href="<?php echo e(route('password.request')); ?>">
                      <?php echo e(__('Forgot Your Password?')); ?>

                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="mt-5">
      <span>©Copyright CampZone 2020. Allrights Reserved.</span>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>

</html>
<?php /**PATH C:\xampp\htdocs\campzone-master2\resources\views/layouts/client.blade.php ENDPATH**/ ?>