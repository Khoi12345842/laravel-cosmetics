<?php $__env->startSection('content'); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .thumbnail-container a .img-fluid{
            background: #fff;
        }
        #home [class~=main-menu]{
            padding-left: 0;
        }
    </style>
<?php $__env->stopPush(); ?>
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner1.jpg" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner2.jpg" title="#caption2" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner3.jpg" title="#caption3" alt="Slideshow image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="container">
                            <!-- delivery form -->
                            <div class="section policy-home col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy1">
                                                        <img src="/assets/frontend/img/home/home1-policy.png" alt="img">
                                                        <div class="policy-name mb-5">Miễn phí vận chuyển từ 499,000đ</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy2">
                                                        <img src="/assets/frontend/img/home/home1-policy2.png" alt="img">
                                                        <div class="policy-name mb-5">Cam kết hàng chính hãng</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy3">
                                                        <img src="/assets/frontend/img/home/home1-policy3.png" alt="img">
                                                        <div class="policy-name mb-5">Đảm bảo hoàn tiền</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- product living room -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <?php if(count($product_recommends) > 0): ?>
                                            <div class="grouptab row">
                                                <div class="categoriestab-left product-tab col-md-12 flex-9">
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <h2 class="title-block">Gợi ý cho bạn</h2>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div id="new" class="tab-pane fade in active show">
                                                            <div class="saleoff-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <?php $__currentLoopData = $product_recommends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="item text-center">
                                                                    <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="grouptab row">
                                            <div class="categoriestab-left product-tab col-md-12 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <h2 class="title-block">Sản phẩm giảm giá</h2>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div class="saleoff-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            <?php $__currentLoopData = $discountProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item text-center">
                                                                <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

                        <div class="container">
                            <!-- banner -->
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect1.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect2.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- best seller -->
                            <div class="section best-sellers col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="row d-flex align-items-center">
                                                <!-- column 4 -->
                                                <div class="flex-4 col-lg-4 flex-4">
                                                    <h2 class="title-block">
                                                        <span class="sub-title">Sản phẩm bán chạy</span>Bán chạy
                                                    </h2>
                                                    <div class="content-text">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                            tempor incididunt ut labore dolore magna aliqua.
                                                        </p>
                                                        <div>
                                                            <a href="<?php echo e(route('shop')); ?>"> Tất cả sản phẩm</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <?php $__currentLoopData = $topSellingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($index % 2 == 0): ?>
                                                                    <div class="item text-center">
                                                                    <?php endif; ?>
                                                                        <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                    <?php if($index % 2 != 0 || $index == count($topSellingProducts) - 1): ?>
                                                                    </div>
                                                                    <?php endif; ?>
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

                        <!-- product kitchen -->
                        <div class="section kitchen">
                            <div class="living-room">
                                <div class="container">
                                    <div class="tiva-row-wrap row">
                                        <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                            <div class="grouptab row">
                                                <div class="categoriestab-left product-tab col-md-12 flex-9">
                                                    <h2 class="title-block"><?php echo e($categories->first()->name); ?></h2>
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <ul class="nav nav-tabs">
                                                            <?php $__currentLoopData = $categories->first()->children->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a href="#cate-<?php echo e($child_cate->id); ?>" data-toggle="tab"
                                                                        class="<?php echo e($key==0 ? 'active' : ''); ?>"><?php echo e($child_cate->name); ?></a>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <?php $__currentLoopData = $categories->first()->children->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div id="cate-<?php echo e($child_cate->id); ?>" class="tab-pane fade <?php echo e($key==0 ? 'in active show' : ''); ?>">
                                                                <div class="saleoff-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                    <?php $__currentLoopData = $child_cate->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="item text-center">
                                                                            <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                        <!-- banner -->
                        <div class="container">
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect3.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect4.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- testimonial -->
                            <div class="section testimonial-block col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div class="block">
                                            <div class="owl-carousel owl-theme testimonial-type-one">
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">David Jame</h5>
                                                            <p class="box-dress">DESIGNER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Max Control</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">John Do</h5>
                                                            <p class="box-dress">CSS - HTML</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Elizabeth Pham</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product kitchen -->
                        <div class="section kitchen">
                            <div class="living-room">
                                <div class="container">
                                    <div class="tiva-row-wrap row">
                                        <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                            <div class="grouptab row">
                                                <div class="categoriestab-left product-tab col-md-12 flex-9">
                                                    <h2 class="title-block"><?php echo e($categories->skip(1)->first()->name); ?></h2>
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <ul class="nav nav-tabs">
                                                            <?php $__currentLoopData = $categories->skip(1)->first()->children->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a href="#cate-<?php echo e($child_cate->id); ?>" data-toggle="tab"
                                                                        class="<?php echo e($key==0 ? 'active' : ''); ?>"><?php echo e($child_cate->name); ?></a>
                                                            </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <?php $__currentLoopData = $categories->skip(1)->first()->children->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div id="cate-<?php echo e($child_cate->id); ?>" class="tab-pane fade <?php echo e($key==0 ? 'in active show' : ''); ?>">
                                                                <div class="saleoff-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                    <?php $__currentLoopData = $child_cate->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="item text-center">
                                                                            <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                        </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                        <!-- recent posts -->
                        <div class="container">
                            <div class="section recent-post">
                                <div class="title-block">Tin tức và sự kiện</div>
                                <div class="row">
                                    <?php $__currentLoopData = $newPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="<?php echo e(route('blog.detail', $post)); ?>">
                                                    <img src="<?php echo e($post->thumbnail); ?>" alt="img" width="100%">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="comment">
                                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                        <span><?php echo e($post->view); ?> lượt xem</span>
                                                    </span>
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span><?php echo e(date_format($post->created_at, 'd/m/Y')); ?></span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="<?php echo e(route('blog.detail', $post)); ?>"><?php echo e($post->title); ?></a>
                                                </div>
                                                <div class="post-desc">
                                                    <?php echo e($post->shortContent($post->content)); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>

                            <!-- partner -->
                            <div class="section introduct-logo">
                                <div class="row">
                                    <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="block">
                                            <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo1.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo2.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo3.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo4.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo5.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo6.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $('.saleoff-product-index',).owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            },
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
        })

        $('.category-product-index',).owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            },
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/frontend/index.blade.php ENDPATH**/ ?>