<?php $__env->startSection('content'); ?>

<div class="container-fluid" style="max-width: 1400px">

    <?php if(session('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="row">
        <div class="card w-100" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title fw-semibold mb-4">Sản phẩm</h5>
                    <form class="product-search d-flex">
                        <input type="text" class="border border-1 border-primary rounded px-2" value="<?php echo e(request('product_code')); ?>"
                        placeholder="Mã sản phẩm" name="product_code" style="margin-right: 10px">
                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </form>
                    <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary m-1">Tạo mới</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Thứ tự</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Tên / Danh mục</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Mã sản phẩm</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Giảm giá (%)</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Giá bán</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Số lượng</h6>
                                </th>
                                <th class="border-bottom-0 text-center">
                                    <h6 class="fw-semibold mb-0">Đã bán</h6>
                                </th>
                                <th class="border-bottom-0 text-end">
                                    <h6 class="fw-semibold mb-0">Hành động</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"><?php echo e($key+1); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 d-flex align-items-center">
                                        <img class="rounded-1" style="width: 40px" src="<?php echo e($product->firstImage()->image); ?>" alt="">
                                        <div class="m-2">
                                            <h6 class="fw-semibold mb-1"><?php echo e($product->name); ?></h6>
                                            <span class="fw-normal"><?php echo e($product->category->name); ?></span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e($product->product_code); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e(($product->discount)); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e(convertPrice($product->price)); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e($product->quantity); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-center">
                                        <h6 class="fw-semibold mb-0"><?php echo e($product->sold); ?></h6>
                                    </td>
                                    <td class="border-bottom-0 text-end">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <a href="<?php echo e(route('product.edit', $product)); ?>" class="btn btn-outline-warning m-1">Sửa</a>
                                            <form action="<?php echo e(route('product.destroy', $product)); ?>" method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')"
                                                 type="submit" class="btn btn-outline-danger m-1">Xóa</button>
                                            <a href="<?php echo e(route('product.show', $product)); ?>" class="btn btn-outline-info m-1">Chi tiết</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/admin/product/list.blade.php ENDPATH**/ ?>