<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-id', 'contact'); ?>
<?php $__env->startSection('page-class', 'blog'); ?>

<div class="main-content">
    <div id="wrapper-site">
        <div id="content-wrapper">
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
                                <span>
                                    <span>Liên hệ</span>
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div id="main">
                <div class="page-home">
                    <div class="container">
                        <h1 class="text-center title-page">Liên hệ chúng tôi</h1>
                        <div class="row-inhert">
                            <div class="header-contact">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Email:</div>
                                                <div class="contact-content">
                                                    <a href="mailto:eshop.stable@gmail.com">eshop.stable@gmail.com</a>
                                                    <br>
                                                    <a href="mailto:contact@domain.com">contact@domain.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Địa chỉ:</div>
                                                <div class="contact-content">
                                                   123 Tran Cung, Co Nhue
                                                    <br>TP. Hà Nội, Việt Nam
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="item d-flex justify-content-end  last">
                                            <div class="item-left">
                                                <div class="icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                            </div>
                                            <div class="item-right d-flex">
                                                <div class="title">Hotline:</div>
                                                <div class="contact-content">
                                                    0123-456-78910
                                                    <br>0987-654-32100
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-map">
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3785754726428!2d105.78134315594316!3d21.01753304734255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam+Hanoi+Landmark+Tower!5e0!3m2!1svi!2s!4v1530175498947" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="input-contact">
                                <p class="text-intro text-center">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum
                                    auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                                    amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit auctor aliquet.”
                                </p>

                                <p class="icon text-center">
                                    <a href="#">
                                        <img src="/assets/frontend/img/other/contact_mess.png" alt="img">
                                    </a>
                                </p>

                                <div class="d-flex justify-content-center">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="contact-form">
                                            <form action="#" method="post" enctype="multipart/form-data">
                                                <div class="form-fields">
                                                    <div class="form-group row">
                                                        <div class="col-md-6">
                                                            <input class="form-control" name="name" placeholder="Họ tên">
                                                        </div>
                                                        <div class="col-md-6 margin-bottom-mobie">
                                                            <input class="form-control" name="from" type="email" value="" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" name="message" placeholder="Nội dung" rows="8"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn" type="submit" name="submitMessage">
                                                        <img class="img-fl" src="/assets/frontend/img/other/contact_email.png" alt="img">Gửi tin nhắn
                                                    </button>
                                                </div>
                                            </form>
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

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-ecommerce\DoAn\resources\views/frontend/contact.blade.php ENDPATH**/ ?>