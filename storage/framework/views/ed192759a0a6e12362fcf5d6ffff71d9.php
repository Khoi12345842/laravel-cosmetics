<?php $__env->startSection('content'); ?>

<div class="container-fluid" style="max-width: 1400px">
    <div class="row">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="card-title fw-semibold">Đơn hàng</h5>
                    <form action="" style="width: 25%">
                        <select class="form-select" name="status" onchange="this.form.submit()">
                            <option <?php echo e(request('status') == '' ? 'selected' : ''); ?> value="">Tất cả đơn hàng</option>
                            <option <?php echo e(request('status') == '0' ? 'selected' : ''); ?> value="0">Đơn hàng đã hủy</option>
                            <option <?php echo e(request('status') == '1' ? 'selected' : ''); ?> value="1">Đơn hàng đã trả</option>
                            <option <?php echo e(request('status') == '2' ? 'selected' : ''); ?> value="2">Đơn hàng chờ xác nhận</option>
                            <option <?php echo e(request('status') == '3' ? 'selected' : ''); ?> value="3">Đơn hàng đang xử lý</option>
                            <option <?php echo e(request('status') == '4' ? 'selected' : ''); ?> value="4">Đơn hàng đã nhận</option>
                        </select>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">ID</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên khách hàng</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Phương thức thanh toán</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Tổng tiền</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">#<?php echo e($order->id); ?></h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($order->name); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($order->address); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($order->phone); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <p class="fw-semibold mb-0"><?php echo e(strtoupper($order->payment)); ?></p>
                                    </td>
                                    <?php if($order->status == 0): ?>
                                        <td class="border-bottom-0 text-center"><span class="badge bg-dark rounded-3 fw-semibold">Hủy đơn</span></td>
                                    <?php elseif($order->status == 1): ?>
                                        <td class="border-bottom-0 text-center"><span class="badge bg-danger rounded-3 fw-semibold">Trả hàng</span></td>
                                    <?php elseif($order->status == 2): ?>
                                        <td class="border-bottom-0 text-center"><span class="badge bg-warning rounded-3 fw-semibold">Chờ xác nhận</span></td>
                                    <?php elseif($order->status == 3): ?>
                                        <td class="border-bottom-0 text-center"><span class="badge bg-info rounded-3 fw-semibold">Đang xử lý</span></td>
                                    <?php else: ?>
                                        <td class="border-bottom-0 text-center"><span class="badge bg-success rounded-3 fw-semibold">Đã giao hàng</span></td>
                                    <?php endif; ?>
                                    <td class="border-bottom-0 text-center">
                                        <p class="fw-semibold mb-0"><?php echo e(convertPrice($order->total_price)); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-end">
                                        <?php if($order->status === 2): ?>
                                            <a href="<?php echo e(route('order.confirm', $order)); ?>" class="btn btn-outline-success m-1">Xác nhận</a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('order.show', $order)); ?>" class="btn btn-outline-info m-1">Chi tiết</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <?php echo e($orders->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/admin/order/list.blade.php ENDPATH**/ ?>