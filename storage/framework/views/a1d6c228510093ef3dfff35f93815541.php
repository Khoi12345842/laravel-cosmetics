<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Danh mục</h5>
                <form method="POST" action="<?php echo e(route('category.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="parent" class="form-label">Danh mục cha
                            <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" name="parent_id" id="parent">
                            <option value="" disabled selected>--- Chọn danh mục cha ---</option>
                            <option value="0">Danh mục gốc</option>
                            <?php $__currentLoopData = $parent_cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($parent_cate->id); ?>"><?php echo e($parent_cate->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['parent_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-danger"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DoAn\resources\views/admin/category/create.blade.php ENDPATH**/ ?>