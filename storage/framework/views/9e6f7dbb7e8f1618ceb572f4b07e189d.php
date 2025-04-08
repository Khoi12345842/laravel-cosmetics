<?php $__env->startSection('content'); ?>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Order
                    <div class="page-title-subheading">
                        View, create, update, delete and manage.
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body display_data">

                    <div class="table-responsive">
                        <h2 class="text-center">Danh sách sản phẩm</h2>
                        <hr>
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th class="text-center">Số lượng</th>
                                    <th class="text-center">Đơn giá</th>
                                    <th class="text-center">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <div>
                                            <img src="<?php echo e($item->image); ?>" width="70">
                                            <span><?php echo e($item->pivot->name); ?></span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->pivot->quantity); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e(convertPrice($item->pivot->price)); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e(convertPrice($item->pivot->price * $item->pivot->quantity)); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>


                    <h2 class="text-center mt-5">Thông tin giao hàng</h2>
                    <hr>
                    <div>
                        <div class="position-relative row form-group align-items-center">
                            <label for="name" class="col-md-3 text-md-right col-form-label">
                                Tên khách hàng
                            </label>
                            <div class="col-md-9 col-xl-8">
                                <span><?php echo e($order->name); ?></span>
                            </div>
                        </div>

                        <div class="position-relative row form-group align-items-center">
                            <label for="email" class="col-md-3 text-md-right col-form-label">Email</label>
                            <div class="col-md-9 col-xl-8">
                                <span><?php echo e($order->email); ?></span>
                            </div>
                        </div>

                        <div class="position-relative row form-group align-items-center">
                            <label for="phone" class="col-md-3 text-md-right col-form-label">Số điện thoại</label>
                            <div class="col-md-9 col-xl-8">
                                <span><?php echo e($order->phone); ?></span>
                            </div>
                        </div>

                        <div class="position-relative row form-group align-items-center">
                            <label for="address" class="col-md-3 text-md-right col-form-label">
                                Địa chỉ giao hàng</label>
                            <div class="col-md-9 col-xl-8">
                                <span><?php echo e($order->address); ?></span>
                            </div>
                        </div>

                        <div class="position-relative row form-group align-items-center">
                            <label for="address" class="col-md-3 text-md-right col-form-label">
                                Trạng thái đơn hàng
                            </label>
                            <div class="col-md-9 col-xl-8">
                                <?php if($order->status === 0): ?>
                                    <span class="status cancel">Hủy đơn</span>
                                <?php elseif($order->status === 1): ?>
                                    <span class="status return">Trả hàng</span>
                                <?php elseif($order->status === 2): ?>
                                    <span class="status pending">Chờ xác nhận</span>
                                <?php elseif($order->status === 3): ?>
                                    <span class="status inprogress">Đang xử lý</span>
                                <?php else: ?>
                                    <span class="status delivered">Đã giao hàng</span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="position-relative row form-group align-items-center">
                            <label for="address" class="col-md-3 text-md-right col-form-label">
                                Thanh toán</label>
                            <div class="col-md-9 col-xl-8">
                                <span><?php echo e(strtoupper($order->payment)); ?></span>
                            </div>
                        </div>  
                    </div>
                        


                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/admin/order/show.blade.php ENDPATH**/ ?>