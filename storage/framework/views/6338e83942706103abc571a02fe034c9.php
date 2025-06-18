<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'contact'); ?>
<?php $__env->startSection('page-class', 'user-login blog'); ?>

<style>
    /* Nền tổng quan */
    body {
        background: url('/assets/frontend/img/home/backgroundLogin.png') no-repeat center center fixed;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    /* Lớp phủ */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    /* Tiêu đề và nội dung chính */
    .title-page {
        font-family: 'Dancing Script', cursive;
        font-size: 2.5rem;
        color: #ff6f61;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
    }

    .login-form {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        padding: 2rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 0.75rem;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        border-color: #ff6f61;
        box-shadow: 0 0 5px rgba(255, 111, 97, 0.5);
    }

    .btn-primary {
        background-color: #ff6f61;
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-primary:hover {
        background-color: #fa5c50;
        transform: scale(1.05);
    }

    .btn-primary:active {
        transform: scale(0.95);
    }

    .forgot-password a {
        color: #ff6f61;
        text-decoration: none;
        transition: color 0.3s;
    }

    .forgot-password a:hover {
        color: #fa5c50;
    }

    /* Breadcrumb */
    .breadcrumb {
        margin-bottom: 2rem;
    }

    .breadcrumb-bg {
        background: rgba(255, 255, 255, 0.8);
        padding: 1rem;
        border-radius: 10px;
    }

    .breadcrumb ol li a {
        color: #ff6f61;
        text-decoration: none;
    }

    .breadcrumb ol li a:hover {
        text-decoration: underline;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .login-form {
            padding: 1.5rem;
        }

        .title-page {
            font-size: 2rem;
        }
    }
    .breadcrumb {
    color: none !important; /* Ensure breadcrumb text color is inherited from the parent */
    background: none !important;
}

</style>

<div class="main-content">
    <div class="wrap-banner">
        <!-- Breadcrumb -->
        <nav class="breadcrumb-bg">
            <div class="container no-index">
                <div class="breadcrumb">
                    <ol>
                        <li>
                            <a href="/">
                                <b>Trang chủ</b>
                            </a>
                        </li>
                        <li>
                            <span>
                                <b>Đăng nhập</b>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>
    </div>

    <!-- Main login form -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="container position-relative">
                    <div class="overlay"></div>
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
                    <div class="login-form mx-auto">
                        <form id="customer-form" action="<?php echo e(route('loginPost')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div>
                                <input type="hidden" name="back" value="my-account">
                                <div class="form-group no-gutters">
                                    <input class="form-control" name="email" type="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
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
                                        <input class="form-control js-child-focus js-visible-password" name="password" type="password" placeholder="Mật khẩu">
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

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/auth/login.blade.php ENDPATH**/ ?>