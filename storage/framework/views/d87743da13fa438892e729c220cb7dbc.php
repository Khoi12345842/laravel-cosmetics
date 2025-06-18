<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="card w-100" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="card-title fw-semibold">Khách hàng</h5>
                    <form class="product-search d-flex">
                    <input type="text" class="border border-1 border-primary rounded px-2" value="<?php echo e(request('email')); ?>"
                        placeholder="Nhập Email" name="email" style="margin-right: 10px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
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
                                    <h6 class="fw-semibold mb-0">Họ tên</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Email</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                                </th>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Giới tính</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Ngày sinh</h6>
                                </th>

                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Trạng thái</h6>
                                </th>
                                <th class="border-bottom-0 text-end">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">#<?php echo e($user->id); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 d-flex align-items-center ">
                                        <img class="rounded-circle" style="width: 40px;" src="<?php echo e($user->avatar ?? asset('assets/frontend/img/no-avatar.png')); ?>" alt="">
                                        <div class="m-2">
                                            <p class="fw-semibold mb-0"><?php echo e($user->name); ?></p>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($user->email); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($user->phone); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($user->address); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($user->gender); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($user->dob ? \Carbon\Carbon::parse($user->dob)->format('d/m/Y') : ''); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <?php if($user->status === 1): ?>
                                            <p class="fw-semibold mb-0 text-success">Hoạt động</p>
                                        <?php else: ?>
                                            <p class="fw-semibold mb-0 text-danger">Bị khóa</p>
                                        <?php endif; ?>
                                    </td>

                                    <td class="border-bottom-0 text-end">
                                        <?php if($user->status === 1): ?>
                                            <a href="<?php echo e(route('user.status', $user)); ?>" onclick="return confirm('Bạn có chắc muốn khóa tài khoản này không?')"
                                             class="btn btn-outline-warning m-1">Khóa</a>
                                        <?php else: ?>
                                            <a href="<?php echo e(route('user.status', $user)); ?>" onclick="return confirm('Bạn có chắc muốn mở khóa tài khoản này không?')"
                                             class="btn btn-outline-success m-1">Mở khóa</a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('user.destroy', $user)); ?>" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này không?')"
                                        class="btn btn-outline-danger m-1">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <?php echo e($users->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/admin/user/list.blade.php ENDPATH**/ ?>