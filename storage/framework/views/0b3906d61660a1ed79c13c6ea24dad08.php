<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Sửa thương hiệu</h5>
                <div class="col-md-12 col-lg-8">

                    <?php if(session('msg')): ?>
                        <div class="alert alert-success" role="alert"><?php echo e(session('msg')); ?></div>
                    <?php endif; ?>

                    <form method="POST" action=<?php echo e(url('/admin/update-brand')); ?>>
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên thương hiệu</label>
                            <input name="brand_name" class="form-control"  value="<?php echo e(old('brand_name') ?? $brandDetail->brand_name); ?>">
                            <?php $__errorArgs = ['brand_name'];
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
                            <input name="brand_desc" class="form-control"  value="<?php echo e(old('brand_desc') ?? $brandDetail->brand_desc); ?>">
                            <?php $__errorArgs = ['brand_desc'];
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
                            <select name="brand_status" class="form-select" aria-label="Default select example">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                            <?php $__errorArgs = ['brand_status'];
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
                        <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Cập nhật</button>
                        <a style="background:#ffb703" class="btn btn-outline-light"href=<?php echo e(route('admin.get-brand')); ?>>Quay lại</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin/brand-edit.blade.php ENDPATH**/ ?>