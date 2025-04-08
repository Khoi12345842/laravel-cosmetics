<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="card w-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">Thể loại bài viết</h5>
                    <a href="<?php echo e(route('post.create')); ?>" class="btn btn-primary m-1">Tạo mới</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tiêu đề / Thể loại</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-center">Người đăng</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 text-center">Ngày đăng</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"><?php echo e($key+1); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 d-flex align-items-center">
                                        <img class="rounded-1" style="height: 40px" src="<?php echo e($post->thumbnail); ?>" alt="">
                                        <div class="m-2">
                                            <h6 class="fw-semibold mb-1"><?php echo e($post->title); ?></h6>
                                            <span class="fw-normal"><?php echo e($post->postType->name); ?></span> 
                                        </div>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e($post->admin->name); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e(date_format($post->created_at, 'H:i:s, d/m/Y')); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="<?php echo e(route('post.edit', $post)); ?>" class="btn btn-outline-secondary m-1">Sửa</a>
                                            <form action="<?php echo e(route('post.destroy', $post)); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa thể loại này không?')"
                                                type="submit" class="btn btn-outline-danger m-1">Xóa</button>
                                            </form>
                                        </div>
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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/admin/post/list.blade.php ENDPATH**/ ?>