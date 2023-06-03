<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Thêm danh mục sản phẩm</h5>
                <div class="col-md-12 col-lg-8">

                    <form method="POST" action="">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                                    <input name="category_name" class="form-control"  value="<?php echo e(old('category_name')); ?>">
                                    <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color: red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                                    <input name="category_desc" class="form-control"  value="<?php echo e(old('category_desc')); ?>">
                                    <?php $__errorArgs = ['category_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color: red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="mb-3">

                                    <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                                    <select name="category_status" class="form-select" aria-label="Default select example">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                    <?php $__errorArgs = ['category_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span style="color: red"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Thêm</button>
                             <a style="background:#ffb703" class="btn btn-outline-light"href="<?php echo e(url('admin/dashboard')); ?>">Quay lại</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/Admin/category-add.blade.php ENDPATH**/ ?>