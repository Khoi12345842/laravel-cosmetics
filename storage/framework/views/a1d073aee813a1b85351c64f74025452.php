<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-class', 'blog'); ?>
<?php $__env->startSection('page-id', 'blog-list-sidebar-left'); ?>
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">
                <div id="main">
                    <div class="page-home">

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
                                                <span>Tin tức và sự kiện</span>
                                            </span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <?php echo $__env->make('frontend.layout.blog-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <div class="col-sm-8 col-lg-9 col-md-9 flex-xs-first main-blogs">
                                        <h2>Bài viết mới</h2>
                                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="list-content row">
                                                <div class="hover-after col-md-5 col-xs-12">
                                                    <a href="<?php echo e(route('blog.detail', $post)); ?>">
                                                        <img src="<?php echo e($post->thumbnail); ?>" alt="img">
                                                    </a>
                                                </div>
                                                <div class="late-item col-md-7 col-xs-12">
                                                    <p class="content-title">
                                                        <a href="<?php echo e(route('blog.detail', $post)); ?>"><?php echo e($post->title); ?></a>
                                                    </p>
                                                    <p class="post-info">
                                                        <span><?php echo e($post->view); ?> lượt xem</span>
                                                        <span><?php echo e($post->postType->name); ?></span>
                                                        <span><?php echo e($post->admin->name); ?></span>
                                                    </p>
                                                    <p class="description">
                                                        <?php echo $post->shortContent($post->content, 200); ?>

                                                    </p>
                                                    <span class="view-more">
                                                        <a href="<?php echo e(route('blog.detail', $post)); ?>">Xem thêm</a>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="page-list col">
                                            <?php echo e($posts->links()); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/blog.blade.php ENDPATH**/ ?>