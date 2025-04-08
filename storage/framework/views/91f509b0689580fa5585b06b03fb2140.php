<?php $__env->startSection('content'); ?>
<?php $__env->startSection('page-class', 'user-acount'); ?>
<?php $__env->startSection('page-id', 'user-acount'); ?>
<?php $__env->startPush('css'); ?>
    <style>
        [class~=user-acount] [class~=btn][class~=btn-primary] {
            margin-top: 0;
            margin-bottom: 0;
        }
        .table td, .table th{
            vertical-align: middle;
        }
        [class~=ratings] label:before{
            font-size: 45px;
            margin: 5.4px;
        }
        [class~=ratings] > input:checked ~ label {
            color: #f7bc3d;
        }
        [class~=ratings] label {
            margin: 0;
        }
        [class~=ratings]{
            margin: 0 101px;
        }
    </style>
<?php $__env->stopPush(); ?>
<div class="main-content">
    <div class="wrap-banner">
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
                                <span>Tài khoản</span>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </nav>

        <div class="acount head-acount">
            <div class="container">
                <div id="main">

                    <?php if(session('success_message')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(session('success_message')); ?></div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('account.update')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <h1 class="title-page">Thông tin tài khoản</h1>
                        <div class="content" id="block-history">
                            <table class="std table">
                                <tbody>
                                    <tr>
                                        <th class="first_item">Họ tên :</th>
                                        <td>
                                            <span><?php echo e($user->name); ?></span>
                                            <div class="form-group mb-0" id="user-name" placeholder="Nhập họ tên" hidden >
                                                <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="email">Email :</th>
                                        <td><?php echo e($user->email); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="first_item">Địa chỉ :</th>
                                        <td>
                                            <span><?php echo e($user->address); ?></span>
                                            <div class="form-group mb-0" id="user-address" placeholder="Nhập địa chỉ" hidden>
                                                <input type="type" name="address" class="form-control" value="<?php echo e($user->address); ?>">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="first_item">Số điện thoại :</th>
                                        <td>
                                            <span><?php echo e($user->phone); ?></span>
                                            <div class="form-group mb-0" id="user-phone" placeholder="Số điện thoại" hidden>
                                                <input type="type" name="phone" class="form-control" value="<?php echo e($user->phone); ?>">
                                            </div>
                                        </td>
                                    </tr>

                                                                <tr>
                                <th class="first_item">Giới tính :</th>
                                <td>
                                    <span><?php echo e($user->gender); ?></span>
                                    <div class="form-group mb-0" id="user-gender" placeholder="Giới tính" hidden>
                                        <select name="gender" class="form-control">
                                            <option value="Male" <?php echo e($user->gender == 'Male' ? 'selected' : ''); ?>>Nam (Male)</option>
                                            <option value="Female" <?php echo e($user->gender == 'Female' ? 'selected' : ''); ?>>Nữ (Female)</option>
                                            <option value="Other" <?php echo e($user->gender == 'Other' ? 'selected' : ''); ?>>Khác (Other)</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th class="first_item">Ngày sinh :</th>
                                <td>
                                <span><?php echo e($user->dob ? \Carbon\Carbon::parse($user->dob)->format('d/m/Y') : ''); ?></span>
                                <div class="form-group mb-0" id="user-dob" placeholder="Ngày sinh" hidden>
                                        <input type="date" name="dob" class="form-control" value="<?php echo e(\Carbon\Carbon::parse($user->dob)->format('Y-m-d')); ?>">
                                    </div>
                                </td>
                            </tr>


                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-primary" id="btn-edit" data-link-action="sign-in" type="button">
                            Cập nhập thông tin
                        </button>
                        <button class="btn btn-primary" id="btn-update" data-link-action="sign-in" type="submit" hidden>
                            Cập nhật
                        </button>
                    </form>
                    <div class="order">
                        <h4>Lịch sử đặt hàng</h4>
                        <?php if($orders->count() == 0): ?>
                            <p>Bạn chưa đặt bất kỳ đơn đặt hàng nào.</p>
                        <?php else: ?>
                            
                            <div class="accordion" id="order-table">
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card">
                                            <div class="card-header" id="heading<?php echo e($order->id); ?>">
                                                <h6 class="mb-0">
                                                    <div style="width: 100%" >
                                                        <div class="row align-items-center" style="min-height: 38px">
                                                            <div class="col-1">
                                                                <span>#<?php echo e($order->id); ?></span>
                                                            </div>
                                                            <div class="col-3">
                                                                <span><?php echo e(date_format($order->created_at, 'd-m-Y H:i:s')); ?></span>
                                                            </div>
                                                            <div class="col-2">
                                                                <span><?php echo e(strtoupper($order->payment)); ?></span>
                                                            </div>
                                                            <div class="col-2">
                                                                <?php if($order->status == 0): ?>
                                                                    <span class="text-secondary text-center">Đã hủy đơn</span>
                                                                <?php elseif($order->status == 1): ?>
                                                                    <span class="text-danger text-center">Đã trả hàng</span>
                                                                <?php elseif($order->status == 2): ?>
                                                                    <span class="text-warning text-center">Chờ xác nhận</span>
                                                                <?php elseif($order->status == 3): ?>
                                                                    <span class="text-primary text-center">Đang xử lý</span>
                                                                <?php else: ?>
                                                                    <span class="text-success text-center">Đã nhận hàng</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="col-4">
                                                                <span class="text-center">
                                                                    <div class="d-flex justify-content-end align-items-center">
                                                                        <?php if($order->status == 2): ?>
                                                                        <form action="<?php echo e(route('order.cancel', $order)); ?>" method="POST" id="formCancel">
                                                                            <?php echo csrf_field(); ?>
                                                                            <button type="submit" class="btn btn-secondary cancel mr-3" >Hủy đơn</button>
                                                                        </form>
                                                                        <?php elseif($order->status == 3): ?>
                                                                        <form action="<?php echo e(route('order.return', $order)); ?>" method="POST" id="formReturn">
                                                                            <?php echo csrf_field(); ?>
                                                                            <button type="submit" class="btn btn-danger return mr-3">Trả hàng</button>
                                                                        </form>
                                                                        <form action="<?php echo e(route('order.receive', $order)); ?>" method="POST" id="formReceive">
                                                                            <?php echo csrf_field(); ?>
                                                                            <button type="submit" class="btn btn-info receive mr-3">Nhận hàng</button>
                                                                        </form>
                                                                        <?php endif; ?>
                                                                        <button type="button" class="btn" data-toggle="collapse" href="#order-<?php echo e($order->id); ?>" aria-expanded="false" aria-controls="order-<?php echo e($order->id); ?>">Chi tiết</button>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h6>
                                            </div>
                                            <div id="order-<?php echo e($order->id); ?>" class="collapse" aria-labelledby="heading<?php echo e($order->id); ?>" data-parent="#order-table">
                                                <div class="card-body" style="padding: 0">
                                                    <table class="align-middle mb-0 table table-borderless border-bottom table-striped ">
                                                        <thead>
                                                            <tr>
                                                                <th>Sản phẩm</th>
                                                                <th class="text-center">Số lượng</th>
                                                                <th class="text-center">Đơn giá</th>
                                                                <th class="text-center"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                    <div>
                                                                        <img src="<?php echo e($item->image); ?>" width="70">
                                                                        <span><?php echo e($item->pivot->name); ?></span>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo e($item->pivot->quantity); ?>

                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo e(convertPrice($item->pivot->price)); ?>

                                                                </td>
                                                                <td class="text-center">
                                                                    <?php if(!isReview($item->pivot->id, $item->pivot->product_id) && $order->status == 4): ?>
                                                                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#review<?php echo e($key); ?><?php echo e($item->pivot->order_id); ?>">
                                                                            Đánh giá
                                                                        </button>

                                                                      <!-- Modal -->
                                                                        <div class="modal fade" id="review<?php echo e($key); ?><?php echo e($item->pivot->order_id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Đánh giá sản phẩm: <strong><?php echo e($item->pivot->name); ?></strong></h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body pt-0">
                                                                                        <form method="post" action="<?php echo e(route('review')); ?>" class="new-review-form">
                                                                                            <?php echo csrf_field(); ?>
                                                                                            <input type="hidden" name="product_id" value="<?php echo e($item->pivot->product_id); ?>">
                                                                                            <input type="hidden" name="order_product_id" value="<?php echo e($item->pivot->id); ?>">
                                                                                            <div class="spr-form-review-rating">
                                                                                                <fieldset style="float: none" class="ratings mb-2">
                                                                                                    
                                                                                                    <input type="radio" id="star5-<?php echo e($item->pivot->id); ?>" name="point" value="5">
                                                                                                    <label class="full" for="star5-<?php echo e($item->pivot->id); ?>" title=""></label>
                                                                                                    <input type="radio" id="star4-<?php echo e($item->pivot->id); ?>" name="point" value="4">
                                                                                                    <label class="full" for="star4-<?php echo e($item->pivot->id); ?>" title=""></label>
                                                                                                    <input type="radio" id="star3-<?php echo e($item->pivot->id); ?>" name="point" value="3">
                                                                                                    <label class="full" for="star3-<?php echo e($item->pivot->id); ?>" title=""></label>
                                                                                                    <input type="radio" id="star2-<?php echo e($item->pivot->id); ?>" name="point" value="2">
                                                                                                    <label class="full" for="star2-<?php echo e($item->pivot->id); ?>" title=""></label>
                                                                                                    <input type="radio" id="star1-<?php echo e($item->pivot->id); ?>" name="point" value="1">
                                                                                                    <label class="full" for="star1-<?php echo e($item->pivot->id); ?>" title=""></label>
                                                                                                </fieldset>
                                                                                            </div>
                                                                                            <div class="spr-form-review-body mb-2">
                                                                                                <textarea style="padding: 10px" class="w-100" name="content" rows="8"></textarea>
                                                                                            </div>
                                                                                            <div class="submit">
                                                                                                <input type="submit" id="submitComment" class="btn btn-default" value="Đánh giá">
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $( document ).ready(function() {
            $("#btn-edit").click(function(){
                $(this).hide();
                $('#btn-update').prop('hidden', false);
                const userAddress = $('#user-address');
                userAddress.prop('hidden', false);
                userAddress.prev().hide();
                const userPhone = $('#user-phone');
                userPhone.prop('hidden', false);
                userPhone.prev().hide();
                const userName = $('#user-name');
                userName.prop('hidden', false);
                userName.prev().hide();

                const userGender = $('#user-gender');
                userGender.prop('hidden', false);
                userGender.prev().hide();

                const userDOB = $('#user-dob');
                userDOB.prop('hidden', false);
                userDOB.prev().hide();
            });

            $('#formCancel').find('button').click(()=>{
                $('#formCancel').submit();
            })

            $('#formReturn').find('button').click(()=>{
                $('#formReturn').submit();
            })

            $('#formReceive').find('button').click(()=>{
                $('#formReceive').submit();
            })
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/frontend/account.blade.php ENDPATH**/ ?>