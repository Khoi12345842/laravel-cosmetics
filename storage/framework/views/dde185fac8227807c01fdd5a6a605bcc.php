<div class="sidebar-block">
    <div class="title-block">Danh mục</div>
    <div class="block-content">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cateTitle hasSubCategory open level1">
                <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#cate-<?php echo e($key); ?>" >
                    <i class="zmdi zmdi-minus"></i>
                    <i class="zmdi zmdi-plus"></i>
                </span>
                <a class="cateItem" href="<?php echo e(route('category', $category)); ?>"><?php echo e($category->name); ?></a>
                <div class="subCategory collapse" id="cate-<?php echo e($key); ?>" aria-expanded="true" role="status">
                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cateTitle">
                            <a href="<?php echo e(route('category', $child_cate)); ?>" class="cateItem"><?php echo e($child_cate->name); ?></a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/layout/categories-sidebar.blade.php ENDPATH**/ ?>