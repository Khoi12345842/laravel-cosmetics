<?php $__env->startSection('content'); ?>

<?php if(Auth::guard('admin')->user()->role === 'Quản trị viên'): ?>
    <div class="container-fluid">
    <div class="row">
        <div class="card w-100" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h5 class="card-title fw-semibold">Nhân viên</h5>
                    <form class="product-search d-flex">
                        <input type="text" class="border border-1 border-primary rounded px-2" value="<?php echo e(request('name')); ?>"
                        placeholder="Tên nhân viên" name="name" style="margin-right: 10px">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </form>
                    <a href="<?php echo e(route('staff.create')); ?>" class="btn btn-primary m-1">Tạo mới</a>
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
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Chức vụ</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Ngày tạo</h6>
                                </th>
                                <th class="border-bottom-0 text-end">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $staffs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">#<?php echo e($staff->id); ?></h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($staff->name); ?></p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="fw-semibold mb-0"><?php echo e($staff->email); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <p class="fw-semibold mb-0"><?php echo e($staff->role); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <p class="fw-semibold mb-0"><?php echo e(date_format($staff->created_at, 'd/m/Y')); ?></p>
                                    </td>

                                    <td class="border-bottom-0 text-end">
                                        <a href="<?php echo e(route('staff.destroy', $staff)); ?>" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này không?')"
                                        class="btn btn-outline-danger m-1">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <?php echo e($staffs->links()); ?>

                </div>
            </div>
        </div>
    </div>
    </div>
<?php else: ?>
    <div class="container-fluid text-center ">
        <h3>Trang này chỉ dành cho quản trị viên.</h3>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/admin/staff/list.blade.php ENDPATH**/ ?>