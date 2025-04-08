<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">Thể loại bài viết</h5>
                    <a href="<?php echo e(route('post_type.create')); ?>" class="btn btn-primary m-1">Tạo mới</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $post_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"><?php echo e($post_type->id); ?></h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-semibold"><?php echo e($post_type->name); ?></p>
                                    </td>
                                    <td class="border-bottom-0 text-center d-flex justify-content-center">
                                        <a href="<?php echo e(route('post_type.edit', $post_type)); ?>" class="btn btn-outline-secondary m-1">Sửa</a>
                                        <form action="<?php echo e(route('post_type.destroy', $post_type)); ?>" method="POST">
                                            <?php echo method_field('DELETE'); ?>
                                            <?php echo csrf_field(); ?>
                                            <button onclick="return confirm('Bạn có chắc chắn muốn xóa thể loại này không?')"
                                            type="submit" class="btn btn-outline-danger m-1">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/admin/post_type/list.blade.php ENDPATH**/ ?>