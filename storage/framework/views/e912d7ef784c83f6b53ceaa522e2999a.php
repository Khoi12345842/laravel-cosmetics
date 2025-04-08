<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'contact'); ?>
<?php $__env->startSection('page-class', 'user-reset-password blog'); ?>

<div class="main-content">
    <div class="wrap-banner">

        <!-- breadcrumb -->
        <nav class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">
                    <ol>
                        <li>
                            <a href="/">
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <span>
                                <span>Đặt lại mật khẩu</span>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </div>

    <!-- main -->
    <div id="wrapper-site">
        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="onecol">
                    <div id="main">
                        <div class="page-content">
                            <form action="<?php echo e(route('password.update')); ?>" class="forgotten-password" method="post" id="customer-form">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($token); ?>" name="token">
                                <h1 class="text-center title-page">Đặt lại mật khẩu</h1>
                                <div class="form-fields text-center ">
                                    <div class="form-group center-email-fields">
                                        <div class="email mb-3">
                                            <input type="email" name="email" id="email" value="" class="form-control" placeholder="Nhập email">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-danger text-left"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="password mb-3">
                                            <input type="password" name="password" id="password" value="" class="form-control" placeholder="Mật khẩu mới">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-danger text-left"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="password">
                                            <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control" placeholder="Nhập lại mật khẩu">
                                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <p class="text-danger text-left"><?php echo e($message); ?></p>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div>
                                            <button class="form-control-submit btn btn-primary" name="submit"
                                                type="submit">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                    <a href="<?php echo e(route('login')); ?>" class="account-link">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        <span class="text-center">Quay lại đăng nhập</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/frontend/auth/reset-password.blade.php ENDPATH**/ ?>