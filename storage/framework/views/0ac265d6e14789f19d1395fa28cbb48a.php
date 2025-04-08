<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'contact'); ?>
<?php $__env->startSection('page-class', 'user-login blog'); ?>

    <!-- main content -->
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
                                    <span>Đăng nhập</span>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <div class="container">
                        <h1 class="text-center title-page">Đăng nhập</h1>
                        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-center text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="login-form">
                            <form id="customer-form" action="<?php echo e(route('loginPost')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <input type="hidden" name="back" value="my-account">
                                    <div class="form-group no-gutters">
                                        <input class="form-control" name="email" type="email" placeholder=" Email" value="<?php echo e(old('email')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <p class="text-left text-danger"><?php echo e($message); ?></p>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="form-group no-gutters">
                                        <div class="input-group js-parent-focus">
                                            <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <div class="no-gutters text-center d-flex justify-content-between">
                                        <div class="forgot-password">
                                            <a href="<?php echo e(route('password.email')); ?>" rel="nofollow">
                                                Quên mật khẩu?
                                            </a>
                                        </div>
                                        <div class="forgot-password">
                                            <a href="<?php echo e(route('register')); ?>" rel="nofollow">
                                                Tạo tài khoản mới!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-center no-gutters">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                            Đăng nhập
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>