<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Khôi Trực Skincare - Mỹ phẩm chính hãng</title>
    <link rel="shortcut icon" type="image/png" href="assets/frontend/img/home/logo-black.png" />

    <meta name="keywords" content="Ngọc Châm Skincare, Cosmetics, Mỹ phẩm chính hãng">
    <meta name="description" content="Ngọc Châm Skincare - Mỹ phẩm chính hãng">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/assets/frontend/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/frontend/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/frontend/libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/assets/frontend/libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="/assets/frontend/libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="/assets/frontend/libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="/assets/frontend/libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/frontend/libs/toastr/css/toastr.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/quickview.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/reponsive.css">
    <style>
        .tab-content .item .product-miniature .product-description .product-buttons{
            bottom: 10px;
        }
        .product-title a{
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        [class~=main-menu] [class~=menu] [class~=menu-top] li{
            padding: 0 15px !important;
        }
        .pagination{
            justify-content: center;
        }
        .page-item {
            padding: 3px;
            text-align: center;
        }
        .page-item .page-link{
            height: 35px !important;
            width: 35px !important;
            background: #c4c4c4;
            color:#fff;
            border-radius: 5px !important;
            padding: 0.5rem 0.75rem !important;
            position: relative;
            display: block;
            margin-left: -1px !important;
            line-height: 1.25 !important;
            margin-top: 0 !important;
        }
        .page-item.active .page-link {
            background-color: #343434;
            border-color: #343434;
            color: #fff;
        }
        .page-item.disabled .page-link{
            background: #c4c4c4;
            border-color: #c4c4c4;
            color: #fff;
        }
        .page-link:hover {
            z-index: 2;
            color: #fff;
            text-decoration: none;
            background-color: #343434;
            border-color: #343434;
        }
        #button-contact-zalo{
            position: fixed;
            bottom: 110px;
            z-index: 99999;
            left: 0;
        }
        #gom-all-in-one #zalo-vr {
            transition: 1s all;
            -moz-transition: 1s all;
            -webkit-transition: 1s all;
        }
        .phone-vr-circle-fill {
            width: 65px;
            height: 65px;
            top: 12px;
            left: 12px;
            position: absolute;
            box-shadow: 0 0 0 0 #2196F3;
            background-color: rgba(33, 150, 243, 0.7);
            border-radius: 50%;
            border: 2px solid transparent;
            -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animuiion: zoom 1.3s infinite;
            animation: zoom 1.3s infinite;
        }

        .phone-vr-img-circle {
            background-color: #2196F3;
            width: 40px;
            height: 40px;
            line-height: 40px;
            top: 25px;
            left: 25px;
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation: phone-vr-circle-fill 1s infinite ease-in-out;
        }
        .phone-vr-img-circle a {
            display: block;
            line-height: 37px;
        }
        .phone-vr-img-circle img {
            max-height: 25px;
            max-width: 27px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
        }
        @keyframes zoom{
            0% {
                transform: scale(.9);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 15px transparent;
            }
            100% {
                transform: scale(.9);
                box-shadow: 0 0 0 0 transparent;
            }
        }
        @keyframes phone-vr-circle-fill{
            0% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                -webkit-transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
            }
        }
    </style>
    <?php echo $__env->yieldPushContent('css'); ?>
</head>



<body id="<?php echo $__env->yieldContent('page-id', 'home'); ?>" class="<?php echo $__env->yieldContent('page-class', ''); ?>">
    <header>
        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="fa fa-bars"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="/">
                        <img class="logo-mobile img-fluid" src="/assets/frontend/img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="<?php echo e(route('shop')); ?>">
                        <input type="text" name="keyword" value="<?php echo e(request('keyword')); ?>" placeholder="Tìm kiếm sản phẩm...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart d-flex">
                    <div class="blockcart block-cart cart-preview tiva-toggle mr-2">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count"><?php echo e(session('cart') ? count(session('cart')) : 0); ?></span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <?php if(session('cart')): ?>
                                    <table>
                                        <tbody>
                                            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="<?php echo e(route('product', $cart['product_id'])); ?>">
                                                            <img src="<?php echo e($cart['image']); ?>" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="<?php echo e(route('product', $cart['product_id'])); ?>"><?php echo e($cart['name']); ?></a>
                                                        </div>
                                                        <div>
                                                            <?php echo e($cart['quantity']); ?> x
                                                            <span class="product-price"><?php echo e(convertPrice($cart['price'])); ?></span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="<?php echo e(route('cart.decrease', $cart['product_id'])); ?>">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="total">
                                                <td colspan="2">Tổng tiền:</td>
                                                <td><?php echo e(convertPrice(session('total_price')) ?? 0); ?></td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" class="d-flex justify-content-center">
                                                    <div class="cart-button">
                                                        <a href="<?php echo e(route('cart')); ?>" title="View Cart">Giỏ hàng</a>
                                                        <a href="<?php echo e(route('checkout')); ?>" title="Checkout">Thanh toán</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php else: ?>
                                    <div class="text-center p-3">
                                        <span>Không có sản phẩm nào!</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <i class="fa fa-random" aria-hidden="true" title="So sánh sản phẩm"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="/">
                                <img class="img-fluid" src="/assets/frontend/img/home/logo-black.png" width="180" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="/" class="parent">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('shop')); ?>" class="parent">Cửa hàng</a>
                                </li>
                                <li>
                                    <a href="#" class="parent">Danh mục</a>
                                    <div class="dropdown-menu drop-tab">
                                        <ul>
                                            <li class="item container group">
                                                <div class="dropdown-menu dropdown-tab">
                                                    <ul>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li class="item col-md-4 float-left">
                                                                <span class="menu-title"><?php echo e($category->name); ?></span>
                                                                <div class="menu-content">
                                                                    <ul class="col">
                                                                        <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <li>
                                                                                <a href="<?php echo e(route('category', $child_cate)); ?>"><?php echo e($child_cate->name); ?></a>
                                                                            </li>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog')); ?>" class="parent">Tin tức</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>" class="parent">Liên hệ</a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="<?php echo e(route('shop')); ?>">
                            <input type="text" name="keyword" value="<?php echo e(request('keyword')); ?>" placeholder="Tìm kiếm sản phẩm..." class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <?php if(Auth::guard('web')->check()): ?>
                                        <span><?php echo e(Auth::guard('web')->user()->name); ?></span>
                                    <?php else: ?>
                                        <span>Tài khoản</span>
                                    <?php endif; ?>

                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <?php if(Auth::guard('web')->check()): ?>
                                        <div>
                                            <a href="<?php echo e(route('account')); ?>" title="Tài khoản">
                                                <i class="fa fa-cog"></i>
                                                <span>Tài khoản</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('favorite')); ?>" title="My Wishlists">
                                                <i class="fa fa-heart"></i>
                                                <span>Yêu thích</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('account.change-password')); ?>" title="Dổi mật khẩu">
                                                <i class="fa fa-cog"></i>
                                                <span>Đổi mật khẩu</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('logout')); ?>" title="logout">
                                                <i class="fa fa-sign-out"></i>
                                                <span>Đăng xuất</span>
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div>
                                            <a class="login" href="<?php echo e(route('login')); ?>" rel="nofollow" title="Log in to your customer account">
                                                <i class="fa fa-sign-in"></i>
                                                <span>Đăng nhập</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="register" href="<?php echo e(route('register')); ?>" rel="nofollow" title="Register Account">
                                                <i class="fa fa-user"></i>
                                                <span>Đăng ký</span>
                                            </a>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="desktop_cart d-flex">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count"><?php echo e(session('cart') ? count(session('cart')) : 0); ?></span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <?php if(session('cart')): ?>
                                            <table>
                                                <tbody>
                                                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td class="product-image">
                                                                <a href="<?php echo e(route('product', $cart['product_id'])); ?>">
                                                                    <img src="<?php echo e($cart['image']); ?>" alt="Product">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="product-name">
                                                                    <a href="<?php echo e(route('product', $cart['product_id'])); ?>"><?php echo e($cart['name']); ?></a>
                                                                </div>
                                                                <div>
                                                                    <?php echo e($cart['quantity']); ?> x
                                                                    <span class="product-price"><?php echo e(convertPrice($cart['price'])); ?></span>
                                                                </div>
                                                            </td>
                                                            <td class="action">
                                                                <a class="remove" href="<?php echo e(route('cart.decrease', $cart['product_id'])); ?>">
                                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="total">
                                                        <td colspan="2">Tổng tiền:</td>
                                                        <td><?php echo e(convertPrice(session('total_price')) ?? 0); ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="3" class="d-flex justify-content-center">
                                                            <div class="cart-button">
                                                                <a href="<?php echo e(route('cart')); ?>" title="View Cart">Giỏ hàng</a>
                                                                <a href="<?php echo e(route('checkout')); ?>" title="Checkout">Thanh toán</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        <?php else: ?>
                                            <div class="text-center p-3">
                                                <span>Không có sản phẩm nào!</span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <a href="<?php echo e(route('compare')); ?>" class="header-cart tiva-toggle-btn border-0 p-0">
                                    <i class="fa fa-random" aria-hidden="true" title="So sánh sản phẩm"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <div class="overlay">
        <div class="cd-quick-view row">
            <div class="product-detail col-xs-12 col-md-5 col-sm-5 p-0">
                <div class="product-img">
                    <img src="" alt="Product Image">
                </div>
            </div>
            <div class="product-info col-xs-12 col-md-7 col-sm-7 py-2 cd-item-info">
                <h4 class="text-dark">Product title</h4>
                <div class="detail-description">
                    <div class="price-del d-flex align-items-center justify-content-between">
                        <span class="price"></span>
                        <span class="float-right">
                            <span class="availb font-weight-bold">Tình trạng: </span>
                            <span class="check">Còn hàng</span>
                        </span>
                    </div>
                    <div class="option has-border mt-2">
                        <div class="size" style="font-size: 16px">
                            <span class="size">Mã sản phẩm :</span>
                            <span id="product-code"></span>
                        </div>
                    </div>
                    <form action="" class="has-border cart-area" id="form-add-to-cart">
                        <div class="product-quantity">
                            <div class="qty">
                                <div class="input-group">
                                    <span class="add">
                                        <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart"
                                            type="submit">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span>Thêm vào giỏ hàng</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                    <div class="content">
                        <p>Danh mục :
                            <span class="content2">
                                <a href="#" id="category"></a>
                            </span>
                        </p>
                        <p>Nơi sản xuất :
                            <span class="content2">
                                <a href="#" id="origin"></a>
                            </span>
                        </p>
                        <p>Thương hiệu :
                            <span class="content2">
                                <a href="#" id="brand"></a>
                            </span>
                        </p>
                        <p>Kết cấu :
                            <span class="content2">
                                <a href="#" id="texture"></a>
                            </span>
                        </p>

                        <p>Loại da :
                            <span class="content2">
                                <a href="#" id="skin_type"></a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
             <a href="#0" class="cd-close">Close</a>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="tiva-html col-lg-4 col-md-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="/assets/frontend/img/home/logo-black.png" width="180" alt="img">
                                    </p>
                                    <p class="content-logo">Welcome to our beauty website, where we inspire confidence and enhance your natural beauty with expert tips, high-quality products, and personalized care.
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        <img class="img-fluid" src="/assets/frontend/img/home/payment-footer.png" alt="img">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="title-block">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p>123 Co Nhue, Tran Cung, Ha Noi, Viet Nam</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                        <a href="mailto:eshop.stable@gmail.com" style="color: blue;">
                                        eshop.stable@gmail.com
                                    </a>
                                 </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Hotline :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                        <a href="tel:0123456789" style="color: blue; text-decoration: none;">
                                                +012-345-6789
                                            </a>
                                        </div>
                                    </div>
                                    <div cl ass="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p>Monday - Sunday / 08.00AM - 19.00</p>
                                            <span>(Except Holidays)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes direct
                                        to your inbox
                                    </div>
                                    <div class="block-newsletter">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="action" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="/assets/frontend/img/home/payment.png" alt="img">
                                        </div>
                                    </div>
                                    <!-- Popup newsletter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tiva-copyright">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12 ">
                        <span>
							<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <div id="button-contact-zalo" class="">
        <div id="gom-all-in-one"><!-- v3 -->
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0398481902">
                            <img src="<?php echo e(asset('assets/frontend/img/other/zalo.png')); ?>">
                        </a>
                    </div>
                </div>
                </div>
        </div>
    </div>

    <!-- menu mobie right -->
    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Menu</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <nav>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div id="megamenu" class="clearfix">
                        <ul class="menu level1">
                            <li class="item home-page has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#home1" aria-expanded="true" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="index-2.html" title="Home">
                                    <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                                <div class="subCategory collapse" id="home1" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="index-2.html" title="Home Page 1">Home Page 1</a>
                                        </li>
                                        <li class="item">
                                            <a href="home2.html" title="Home Page 2">Home Page 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="home3.html" title="Home Page 3">Home Page 3</a>
                                        </li>
                                        <li class="item">
                                            <a href="home4.html" title="Home Page 4">Home Page 4</a>
                                        </li>
                                        <li class="item">
                                            <a href="home5.html" title="Home Page 5">Home Page 5</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#blog" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Blog">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>

                                <div class="subCategory collapse" id="blog" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="blog-list-sidebar-left.html" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-sidebar-left2.html" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-list-no-sidebar.html" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-grid-no-sidebar.html" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="blog-detail.html" title="Blog Detail">Blog Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item group has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#page" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Page">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>page</a>
                                <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                    <ul class="group-page">
                                        <li class="item container group">
                                            <div>
                                                <ul>
                                                    <li class="item col-md-4 ">
                                                        <span class="menu-title">Category Style</span>
                                                        <div class="menu-content">
                                                            <ul class="col">
                                                                <li>
                                                                    <a href="product-grid-sidebar-left.html">Product Grid (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-grid-sidebar-right.html">Product Grid (Sidebar Right)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="product-list-sidebar-left.html">Product List (Sidebar Left) </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Product Detail Style</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="product-detail.html">Product Detail (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Product Detail (Sidebar Right)</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Bonus Page</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="404.html">404 Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="about-us.html">About Us Page</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <a href="contact.html" title="Contact us">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "184655318071837");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            xfbml            : true,
            version          : 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Vendor JS -->
    <script src="/assets/frontend/libs/jquery/jquery.min.js"></script>
    <script src="/assets/frontend/libs/popper/popper.min.js"></script>
    <script src="/assets/frontend/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="/assets/frontend/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/frontend/libs/velocity/velocity.min.js"></script>
    <script src="/assets/frontend/libs/toastr/js/toastr.min.js"></script>


    <!-- Template JS -->
    <script src="/assets/frontend/js/theme.js"></script>
    <script src="/assets/frontend/js/quickview.js"></script>
    <script src="/assets/frontend/js/my_script.js"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
<?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/layout/master.blade.php ENDPATH**/ ?>