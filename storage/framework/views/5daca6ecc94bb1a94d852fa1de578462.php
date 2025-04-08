<div class="product-miniature js-product-miniature item-one first-item">
    <div class="thumbnail-container <?php echo e(request()->route()->named('home')? '' : 'border'); ?>">
        <a href="<?php echo e(route('product', $product)); ?>">
            <img class="img-fluid image-cover"
                src="<?php echo e($product->firstImage()->image); ?>" alt="img">
            <?php if($product->secondImage()): ?>
                <img class="img-fluid image-secondary" 
                    src="<?php echo e($product->secondImage()->image); ?>" alt="img">
            <?php else: ?>
                <img class="img-fluid image-secondary" 
                    src="<?php echo e($product->firstImage()->image); ?>" alt="img">
            <?php endif; ?>
        </a>
        <?php if($product->discount): ?>
            <div class="product-flags discount">-<?php echo e($product->discount); ?>%</div>
        <?php endif; ?>
    </div>
    <div class="product-description">
        <div class="product-groups">
            <div class="product-title">
                <a href="<?php echo e(route('product', $product)); ?>"><?php echo e($product->name); ?></a>
            </div>
            <div class="product-group-price">
                <div class="product-price-and-shipping">
                    <span class="price"><?php echo e(convertPrice($product->price)); ?></span>
                    <?php if($product->discount && !$product->is_best_selling): ?>
                        <del class="regular-price"><?php echo e(convertPrice(initialPrice($product->price, $product->discount))); ?></del>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="product-buttons d-flex justify-content-center">
            <div class="formAddToCart">
                <a class="add-to-cart" href="<?php echo e(route('cart.add', $product)); ?>" data-button-action="add-to-cart" title="Thêm vào giỏ hàng">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
            </div>
            <a class="addToWishlist" href="<?php echo e(route('favorite.add', $product)); ?>" data-rel="1" onclick="" title="Yêu thích">
                <i class="fa fa-heart" aria-hidden="true"></i>
            </a>
            <span class="quick-view product hidden-sm-down" style="cursor: pointer;" data-link-action="quickview" data-id="<?php echo e($product->id); ?>" title="Xem nhanh">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
            <span class="quick-view hidden-sm-down" style="cursor: pointer;" onclick="addProdToCompare(<?php echo e($product->id); ?>)" data-id="<?php echo e($product->id); ?>" title="So sánh">
                <i class="fa fa-random" aria-hidden="true"></i>
            </span>
        </div>
    </div>
</div><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/layout/product-info.blade.php ENDPATH**/ ?>