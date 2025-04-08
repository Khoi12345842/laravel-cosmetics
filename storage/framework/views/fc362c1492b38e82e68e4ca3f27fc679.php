<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'product-sidebar-left'); ?>
<?php $__env->startSection('page-class', 'product-grid-sidebar-left'); ?>
    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
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
                                                <span>CỬa hàng</span>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </nav>

                        <div class="container">
                            <div class="content">
                                <form action="">
                                    <div class="row">
                                        <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">
                                            <!-- category menu -->
                                            <?php echo $__env->make('frontend.layout.categories-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <!-- best seller -->
                                            <div class="sidebar-block">
                                                <div class="title-block">Catalog</div>
                                                <div class="new-item-content">
                                                    <h3 class="title-product">Thương hiệu</h3>
                                                    <ul class="scroll-product">
                                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <label class="check" for="brand-<?php echo e($key); ?>">
                                                                    <input type="checkbox" name="thuong_hieu[<?php echo e($brand->id); ?>]" id="brand-<?php echo e($key); ?>"
                                                                    <?php echo e((request('thuong_hieu')[$brand->id] ?? '' ) == 'on' ? 'checked' : ''); ?> onchange="this.form.submit()">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                                <span>
                                                                    <b><?php echo e($brand->name); ?></b>
                                                                    <span class="quantity">(<?php echo e($brand->products->count()); ?>)</span>
                                                                </span>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                                <div class="new-item-content">
                                                    <h3 class="title-product">Nơi sản xuất</h3>
                                                    <ul class="scroll-product">
                                                        <?php $__currentLoopData = $origins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$origin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <label class="check" for="origin-<?php echo e($key); ?>">
                                                                    <input type="checkbox" name="xuat_xu[<?php echo e($origin->id); ?>]" id="origin-<?php echo e($key); ?>"
                                                                    <?php echo e((request('xuat_xu')[$origin->id] ?? '' ) == 'on' ? 'checked' : ''); ?> onchange="this.form.submit()">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                                <span>
                                                                    <b><?php echo e($origin->name); ?></b>
                                                                    <span class="quantity">(<?php echo e($origin->products->count()); ?>)</span>
                                                                </span>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-lg-9 col-md-8 product-container">
                                            <?php if(request('keyword')): ?>
                                                <h4>Kết quả tìm kiếm cho: <b><?php echo e(request('keyword')); ?></b></h4>
                                            <?php else: ?>
                                                <h1>Sản phẩm</h1>
                                            <?php endif; ?>
                                            <div class="js-product-list-top firt nav-top">
                                                <div class="d-flex justify-content-around row">
                                                    <div class="col col-xs-12">
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                            </li>
                                                        </ul>
                                                        <div class="hidden-sm-down total-products">
                                                            <p>Có <?php echo e($products->total()); ?> sản phẩm</p>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xs-12">
                                                        <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">
                                                            <div class="products-sort-order dropdown">
                                                                <select class="select-title" name="sort_by" onchange="this.form.submit()">
                                                                    <option value="" disabled selected>Sắp xếp</option>
                                                                    <option <?php echo e(request('sort_by') == 'discount' ? 'selected' : ''); ?> value="discount">Giảm giá</option>
                                                                    <option <?php echo e(request('sort_by') == 'latest' ? 'selected' : ''); ?> value="latest">Mới nhất</option>
                                                                    <option <?php echo e(request('sort_by') == 'oldest' ? 'selected' : ''); ?> value="oldest">Cũ nhât</option>
                                                                    <option <?php echo e(request('sort_by') == 'price-ascending' ? 'selected' : ''); ?> value="price-ascending">Giá tăng dần</option>
                                                                    <option <?php echo e(request('sort_by') == 'price-desending' ? 'selected' : ''); ?> value="price-desending">Giá giảm dần</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content product-items">
                                                <div id="grid" class="related tab-pane fade in active show">
                                                    <div class="row">
                                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="item text-center col-md-4">
                                                                <?php echo $__env->make('frontend.layout.product-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <!-- pagination -->
                                            <div class="pagination justify-content-center">
                                                <?php echo e($products->withQueryString()->links()); ?>

                                            </div>
                                        </div>
    
                                        <!-- end col-md-9-1 -->
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cosmetics\resources\views/frontend/shop.blade.php ENDPATH**/ ?>