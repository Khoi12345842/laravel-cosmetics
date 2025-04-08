<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'blog-detail'); ?>
<?php $__env->startSection('page-class', 'blog'); ?>

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
                                            <a href="/">
                                                <span>Trang chủ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><?php echo e($post->postType->name); ?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <span>
                                                <span><?php echo e($post->title); ?></span>
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
                                        <h3><?php echo e($post->title); ?></h3>
                                        <div class="hover-after">
                                            <img src="<?php echo e($post->thumbnail); ?>" alt="img" class="img-fluid">
                                        </div>
                                        <div class="late-item">
                                            <?php echo $post->content; ?>

                                            <div class="border-detail">
                                                <p class="post-info float-left">
                                                    <span><?php echo e($post->view); ?> lượt xem</span>
                                                    <span><?php echo e($post->postType->name); ?></span>
                                                    <span><?php echo e($post->admin->name); ?></span>
                                                </p>
                                                <div class="btn-group">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-share"></i>
                                                        <span>Share</span>
                                                    </a>
                                                    <a href="#" class="email">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        <span>SEN TO A FRIEND</span>
                                                    </a>
                                                    <a href="#" class="print">
                                                        <i class="zmdi zmdi-print"></i>
                                                        <span>Print</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="related">
                                            <h2 class="title-block">Bài viết liên quan</h2>
                                            <div class="main-blogs">
                                                <div class="row">
                                                    <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-4">
                                                        <div class="hover-after">
                                                            <a href="<?php echo e(route('blog.detail', $post)); ?>">
                                                                <img src="<?php echo e($post->thumbnail); ?>" alt="img" class="img-fluid">
                                                            </a>
                                                        </div>
                                                        <div class="late-item">
                                                            <p class="content-title">
                                                                <a href="<?php echo e(route('blog.detail', $post)); ?>"><?php echo e($post->title); ?></a>
                                                            </p>
                                                            <p class="description">
                                                                <?php echo $post->shortContent($post->content); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/frontend/blog-details.blade.php ENDPATH**/ ?>