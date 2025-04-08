<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'product-detail'); ?>

<?php $__env->startPush('css'); ?>
    <style>
        [class~=tab-content] [class~=item] [class~=product-miniature] {
            padding-bottom: 20px;
        }
        .tab-content .item .product-miniature .product-description .product-buttons{
            bottom: -15px !important;
        }
        .top-product .product-title a {
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .rating .star-content .star:after {
            content: url(../../../assets/frontend/img/product/star.png) !important;
        }
        .rating .star-content .star.fill:after {
            content: url(../../../assets/frontend/img/product/star1.png) !important;
        }
        [class~=rating] [class~=star-content] [class~=star] {
            float: left;
        }
    </style>
<?php $__env->stopPush(); ?>
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
                                            <a href="<?php echo e(route('shop')); ?>">
                                                <span><?php echo e($product->category->parent->name); ?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('shop')); ?>">
                                                <span><?php echo e($product->category->name); ?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <span>
                                                <span><?php echo e($product->name); ?></span>
                                            </span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>
                        <div class="container">
                            <div class="content">
                                <div class="row">
                                    <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">
                                        <!-- category -->
                                       <?php echo $__env->make('frontend.layout.categories-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <!-- best seller -->
                                        <div class="sidebar-block top-product">
                                            <div class="title-block">
                                                Bán chạy trong tuần
                                            </div>
                                            <div class="product-content tab-content">
                                                <div class="row">
                                                    <?php $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item col-md-12">
                                                        <div class="product-miniature item-one first-item d-flex">
                                                            <div class="thumbnail-container border">
                                                                <a href="<?php echo e(route('product', $topProduct)); ?>">
                                                                    <img class="img-fluid image-cover"
                                                                        src="<?php echo e($topProduct->firstImage()->image); ?>" alt="img">
                                                                    <?php if($topProduct->secondImage()): ?>
                                                                        <img class="img-fluid image-secondary" 
                                                                            src="<?php echo e($topProduct->secondImage()->image); ?>" alt="img">
                                                                    <?php else: ?>
                                                                        <img class="img-fluid image-secondary" 
                                                                            src="<?php echo e($topProduct->firstImage()->image); ?>" alt="img">
                                                                    <?php endif; ?>
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <div class="product-groups">
                                                                    <div class="product-title">
                                                                        <a href="<?php echo e(route('product', $topProduct)); ?>"><?php echo e($topProduct->name); ?></a>
                                                                    </div>
                                                                    <div class="product-group-price">
                                                                        <div class="product-price-and-shipping">
                                                                            <span class="price"><?php echo e(convertPrice($topProduct->price)); ?></span>
                                                                            <?php if($topProduct->discount): ?>
                                                                                <del class="regular-price"><?php echo e(convertPrice(initialPrice($topProduct->price, $topProduct->discount))); ?></del>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-8 col-lg-9 col-md-9">
                                        <div class="main-product-detail">
                                            <h2><?php echo e($product->name); ?></h2>
                                            <div class="product-single row">
                                                <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                    <div class="page-content" id="content">
                                                        <div class="images-container">
                                                            <div class="js-qv-mask mask tab-content border">
                                                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div id="item<?php echo e($key); ?>" class="tab-pane fade 
                                                                            <?php echo e($key == 0 ? 'active in show' : ''); ?> ">
                                                                        <img src="<?php echo e($item->image); ?>" alt="img">
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                                <div class="layer hidden-sm-down" data-toggle="modal"
                                                                    data-target="#product-modal">
                                                                    <i class="fa fa-expand"></i>
                                                                </div>
                                                            </div>
                                                            <ul class="product-tab nav nav-tabs d-flex">
                                                                <?php if($product->images->count() > 1): ?>
                                                                    <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="active col">
                                                                            <a href="#item<?php echo e($key); ?>" data-toggle="tab"
                                                                                aria-expanded="true" class="<?php echo e($key == 0 ? 'active show' : ''); ?>">
                                                                                <img src="<?php echo e($item->image); ?>" alt="img">
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                                
                                                            </ul>
                                                            <div class="modal fade" id="product-modal" role="dialog">
                                                                <div class="modal-dialog">
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <div class="modal-body">
                                                                                <div class="product-detail">
                                                                                    <div>
                                                                                        <div class="images-container">
                                                                                            <div
                                                                                                class="js-qv-mask mask tab-content">
                                                                                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <div id="modal-item<?php echo e($key); ?>"
                                                                                                        class="tab-pane fade <?php echo e($key == 0 ? 'active in show' : ''); ?>">
                                                                                                        <img src="<?php echo e($item->image); ?>"
                                                                                                            alt="img">
                                                                                                    </div>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            </div>
                                                                                            <ul class="product-tab nav nav-tabs">
                                                                                                <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <li class="active">
                                                                                                        <a href="#modal-item<?php echo e($key); ?>"
                                                                                                            data-toggle="tab"
                                                                                                            class=" <?php echo e($key == 0 ? 'active show' : ''); ?> ">
                                                                                                            <img src="<?php echo e($item->image); ?>"
                                                                                                                alt="img">
                                                                                                        </a>
                                                                                                    </li>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            </ul>
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
                                                <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <span class="price"><?php echo e(convertPrice($product->price)); ?></span>
                                                            <span class="float-right">
                                                                <span class="availb">Tình trạng: </span>
                                                                <?php if($product->quantity > 0): ?>
                                                                    <span class="check">
                                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>Còn hàng
                                                                    </span>
                                                                <?php else: ?>
                                                                    <span class="check text-danger">
                                                                        <i class="fa fa-times-circle-o" aria-hidden="true"></i>Hết hàng
                                                                    </span>
                                                                <?php endif; ?>
                                                            </span>
                                                        </div>
                                                        <div class="option has-border mt-2">
                                                            <div class="size">
                                                                <span class="size">Mã sản phẩm :</span>
                                                                <span><?php echo e($product->product_code); ?></span>
                                                                <span class="float-right">
                                                                    <span class="availb">Lượt xem: </span>
                                                                    <span><?php echo e($product->view); ?></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <form action="<?php echo e(route('cart.add', $product)); ?>" class="has-border cart-area" >
                                                            <div class="product-quantity">
                                                                <div class="qty">
                                                                    <div class="input-group">
                                                                        <div class="quantity">
                                                                            <span class="control-label">QTY : </span>
                                                                            <input type="text" name="quantity"
                                                                                id="quantity_wanted" value="1"
                                                                                class="input-group form-control">

                                                                            <span class="input-group-btn-vertical">
                                                                                <button
                                                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-up"
                                                                                    type="button">
                                                                                    +
                                                                                </button>
                                                                                <button
                                                                                    class="btn btn-touchspin js-touchspin bootstrap-touchspin-down"
                                                                                    type="button">
                                                                                    -
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <span class="add">
                                                                            <button class="btn btn-primary add-to-cart add-item"
                                                                                data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart"
                                                                                    aria-hidden="true"></i>
                                                                                <span>Thêm vào giỏ hàng</span>
                                                                            </button>
                                                                            <a class="addToWishlist" href="<?php echo e(route('favorite.add', $product)); ?>">
                                                                                <i class="fa fa-heart"
                                                                                    aria-hidden="true"></i>
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <p class="product-minimal-quantity">
                                                            </p>
                                                        </form>
                                                        <div class="d-flex2 has-border">
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
                                                        
                                                        <div class="content">
                                                            <p>Danh mục :
                                                                <span class="content2">
                                                                    <a href="#"><?php echo e($product->category->name); ?></a>
                                                                </span>
                                                            </p>
                                                            <p>Nơi sản xuất :
                                                                <span class="content2">
                                                                    <a href="#"><?php echo e($product->origin->name); ?></a>
                                                                </span>
                                                            </p>
                                                            <p>Thương hiệu :
                                                                <span class="content2">
                                                                    <a href="#"><?php echo e($product->brand->name); ?></a>,
                                                                </span>
                                                            </p>
                                                            <?php if($product->texture): ?>
                                                                <p>Kết cấu :
                                                                    <span class="content2">
                                                                        <a href="#"><?php echo e($product->texture); ?></a>,
                                                                    </span>
                                                                </p>
                                                            <?php endif; ?>
                                                            
                                                            <?php if($product->skin_type): ?>
                                                                <p>Loại da :
                                                                    <span class="content2">
                                                                        <a href="#"><?php echo e($product->skin_type); ?></a>,
                                                                    </span>
                                                                </p>
                                                            <?php endif; ?>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="review">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#description"
                                                            class="active show">Mô tả sản phẩm</a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a data-toggle="tab" href="#review">Đánh giá (<?php echo e($product->reviews->count()); ?>)</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div id="description" class="tab-pane fade in active show">
                                                        <?php echo $product->description; ?>

                                                    </div>
                                                    <div id="review" class="tab-pane fade">
                                                        <div class="spr-form">
                                                            <div class="user-comment">
                                                                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="spr-review">
                                                                        <div class="spr-review-header">
                                                                            <span class="spr-review-header-byline">
                                                                                <strong><?php echo e($review->user->name); ?></strong> -
                                                                                <span><?php echo e(date_format($review->created_at, 'd/m/Y')); ?></span>
                                                                            </span>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                                                                        <?php if($i <= $review->point): ?> 
                                                                                            <div class="star fill"></div> 
                                                                                        <?php else: ?>
                                                                                            <div class="star"></div>
                                                                                        <?php endif; ?>
                                                                                    <?php endfor; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="spr-review-content">
                                                                            <p class="spr-review-content-body"><?php echo e($review->content); ?></p>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="related">
                                                <div class="title-tab-content  text-center">
                                                    <div class="title-product justify-content-start">
                                                        <h2>Sản phẩm liên quan</h2>
                                                    </div>
                                                </div>
                                                <div class="tab-content">
                                                    <div class="row">
                                                        <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item text-center col-md-4">
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
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/frontend/product.blade.php ENDPATH**/ ?>