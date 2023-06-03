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

                    <form method="POST" action="<?php echo e(url('/admin/update-label')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên thương hiệu</label>
                            <input name="name_label" class="form-control"  value="<?php echo e(old('name_label') ?? $labelDetail->name_label); ?>">
                            <?php $__errorArgs = ['name_label'];
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
                            <input name="desc_label" class="form-control"  value="<?php echo e(old('desc_label') ?? $labelDetail->desc_label); ?>">
                            <?php $__errorArgs = ['desc_label'];
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
                            <select name="status_label" class="form-select" aria-label="Default select example">
                                <option value="0" <?php echo e(old('status_label')==0 || $labelDetail->status_label ==0 ?'selected':false); ?>>Ẩn</option>
                                <option value="1" <?php echo e(old('status_label')==1 || $labelDetail->status_label ==1 ?'selected':false); ?> >Hiển thị</option>

                            </select>
                            <?php $__errorArgs = ['status_label'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div  >
                        <div class="mb-3">
                            <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Cập nhật <i class="fas fa-bolt"></i></button>
                            <a style="background:#ffb703" class="btn btn-outline-light" href=<?php echo e(route('admin.get-label')); ?>>Quay lại thương hiệu </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin/edit-label.blade.php ENDPATH**/ ?>