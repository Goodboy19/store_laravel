<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="card table-widget">
                        <div class="card-body">
                            <h5 class="card-title">Danh mục sản phẩm</h5>
                            <?php if(session('msg')): ?>
                                <div class="alert alert-danger" role="alert"><?php echo e(session('msg')); ?></div>

                            <?php endif; ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(!empty('$categorylist')): ?>
                                        <?php $__currentLoopData = $categorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($item->category_id); ?></th>
                                                <td><?php echo e($item->category_name); ?></td>
                                                <td><?php echo e($item->category_desc); ?></td>
                                                <td>
                                                    <?php if($item->category_status==1): ?>
                                                        <span class="badge bg-success">Hiển thị</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-danger">Ẩn</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div >
                                                        <a style="color: blue" href="<?php echo e(url('/admin/edit-category',['id'=>$item->category_id])); ?>">Sửa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div >
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: red" href="<?php echo e(url('/admin/destroy-category',['id'=>$item->category_id])); ?>">Xóa</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-success" role="alert">Không có dữ liệu để hiển thị</div>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php echo e($categorylist->render()); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục mới</h5>
                            <div >
                                <a  style="background:#06d6a0" class="btn btn-outline-light" href="<?php echo e(url('admin/add-category')); ?>">Thêm danh mục</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/Admin/list-category.blade.php ENDPATH**/ ?>