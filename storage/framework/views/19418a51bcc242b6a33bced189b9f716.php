<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-class', 'product-checkout checkout-cart'); ?>
<?php $__env->startSection('page-id', 'checkout-cart'); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .form-check{
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
<?php $__env->stopPush(); ?>
    <!-- main content -->
    <div id="checkout" class="main-content">
        <div class="wrap-banner">
            <!-- breadcrumb -->
            <nav class="breadcrumb-bg">
                <div class="container no-index">
                    <div class="breadcrumb">
                        <ol>
                            <li>
                                <a href="#">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <span>
                                    <span>Thanh toán</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <!-- main -->
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div id="main">
                                <form action="<?php echo e(route('checkoutPost')); ?>" id="customer-form" class="js-customer-form" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class="cart-grid row">
                                        <div class="col-md-9 check-info">
                                            <div class="checkout-personal-step">
                                                <h3 class="step-title h3 info">
                                                    Thông tin nhận hàng
                                                </h3>
                                            </div>
                                            <div class="content pl-0">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active show" id="checkout-guest-form" role="tabpanel">
                                                        <?php if(Auth::guard('web')->check()): ?>
                                                            <div>
                                                                <div class="form-group row">
                                                                    <span>Họ tên</span>
                                                                    <input class="form-control" value="<?php echo e(old('name', Auth::guard('web')->user()->name)); ?>" name="name" type="text" placeholder="Họ tên">
                                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                <span>Email</span>
                                                                    <input class="form-control" value="<?php echo e(old('email', Auth::guard('web')->user()->email)); ?>" name="email" type="email" placeholder="Email">
                                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                <span>Số điện thoại</span>
                                                                    <input class="form-control" value="<?php echo e(old('phone', Auth::guard('web')->user()->phone)); ?>" name="phone" type="phone" placeholder="Số điện thoại">
                                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                <span>Địa chỉ nhận hàng</span>
                                                                    <input class="form-control" value="<?php echo e(old('address', Auth::guard('web')->user()->address)); ?>" name="address" type="address" placeholder="Địa chỉ nhận hàng">
                                                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                <span>Ghi chú</span>
                                                                    <textarea name="note" class="form-control" placeholder="Ghi chú" cols="30" rows="4"><?php echo e(old('note')); ?></textarea>
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <div>
                                                                <div class="form-group row">
                                                                    <input class="form-control" value="<?php echo e(old('name')); ?>" name="name" type="text" placeholder="Họ tên">
                                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <input class="form-control" value="<?php echo e(old('email')); ?>" name="email" type="email" placeholder="Email">
                                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <input class="form-control" value="<?php echo e(old('phone')); ?>" name="phone" type="phone" placeholder="Số điện thoại">
                                                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <input class="form-control" value="<?php echo e(old('address')); ?>" name="address" type="address" placeholder="Địa chỉ nhận hàng">
                                                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <div class="text-danger"><?php echo e($message); ?></div>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <textarea name="note" class="form-control" placeholder="Ghi chú" cols="30" rows="4"><?php echo e(old('note')); ?></textarea>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkout-personal-step">
                                                <h3 class="step-title h3 info">
                                                    Phương thức thanh toán
                                                </h3>
                                            </div>
                                            <div class="content pl-0">
                                                <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="text-danger"><?php echo e($message); ?></div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment" id="cod" value="cod" checked>
                                                    <label class="form-check-label" for="cod">
                                                        Thanh toán khi nhận hàng
                                                    </label>
                                                  </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment" id="vnpay" value="vnpay">
                                                    <label class="form-check-label" for="vnpay">
                                                        Ví VNPay
                                                        <img src="https://cdn.haitrieu.com/wp-content/uploads/2022/10/Logo-VNPAY-QR-1.png" alt="" height="25">
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="payment" id="momo" value="momo">
                                                    <label class="form-check-label" for="momo">
                                                        Ví MOMO
                                                        <img src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png" alt="" height="25">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                                <div class="row">
                                                    <button class="continue btn btn-primary pull-xs-right" type="submit">
                                                        Đặt hàng
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-grid-right col-xs-12 col-lg-3">
                                            <div class="cart-summary">
                                                <div class="cart-detailed-totals">
                                                    <div class="cart-summary-products">
                                                        <div class="summary-label">Có <?php echo e(count(session('cart'))); ?> sản phẩm trong giỏ</div>
                                                    </div>
                                                    <div class="cart-summary-line cart-total">
                                                        <span class="label">Tổng tiền:</span>
                                                        <span class="value"><?php echo e(convertPrice(session('total_price'))); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="block-reassurance">
                                                <ul>
                                                    <li>
                                                        <div class="block-reassurance-item">
                                                            <img src="/assets/frontend/img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                                                            <span>Security policy (edit with Customer reassurance module)</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="block-reassurance-item">
                                                            <img src="/assets/frontend/img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                            <span>Delivery policy (edit with Customer reassurance module)</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="block-reassurance-item">
                                                            <img src="/assets/frontend/img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                                                            <span>Return policy (edit with Customer reassurance module)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>