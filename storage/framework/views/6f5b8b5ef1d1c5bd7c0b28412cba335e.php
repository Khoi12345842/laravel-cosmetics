<div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">
    <!-- category -->
    <div class="sidebar-block">
        <div class="title-block">Danh mục</div>
        <div class="block-content">
            <?php $__currentLoopData = $post_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="cateTitle hasSubCategory open level1">
                <a class="cateItem" href="#"><?php echo e($type->name); ?></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>


    <!-- recent posts -->
    <div class="sidebar-block">
        <div class="title-block">Bài viết xem nhiều</div>
        <div class="post-item-content">
            <?php $__currentLoopData = $topPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="late-item first-child">
                    <a href="<?php echo e(route('blog.detail', $post)); ?>">
                        <p class="content-title"><?php echo e($post->title); ?></p>
                    </a>
                    <span>
                        <i class="zmdi zmdi-comments"></i><?php echo e($post->view); ?> luợt xem</span>
                    <span>
                        <i class="zmdi zmdi-calendar-note"></i><?php echo e(date_format($post->created_at, 'd/m/Y')); ?>

                    </span>
                    <p class="description">
                        <?php echo $post->shortContent($post->content, 80); ?>

                    </p>
                    <p class="remove">
                        <a href="<?php echo e(route('blog.detail', $post)); ?>">Xem thêm</a>
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!-- advertising -->
    <div class="sidebar-block group-image-special">
        <div class="effect">
            <a href="#">
                <img class="img-fluid" src="/assets/frontend/img/blog/advertising.jpg" alt="banner-2" title="banner-2">
            </a>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\DoAn\resources\views/frontend/layout/blog-sidebar.blade.php ENDPATH**/ ?>