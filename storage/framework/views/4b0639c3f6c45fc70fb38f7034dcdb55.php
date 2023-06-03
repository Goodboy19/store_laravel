<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card table-widget">
                        <div class="card-body">
                            <h5 class="card-title">Danh mục sản phẩm</h5>

                            <?php if(session('msg')): ?>
                                <div class="alert alert-success" role="alert"><?php echo e(session('msg')); ?></div>
                            <?php endif; ?>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Hiển thị</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tùy chọn</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(($products->count())>0): ?>
                                        <?php ($i=1); ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <th scope="row"><?php echo e($i++); ?></th>
                                                <td><?php echo e($item->product_name); ?></td>
                                                <td>

                                                    <?php echo e(strip_tags($item->product_desc)); ?>)

                                                </td>
                                                <td >
                                                    <img class="rounded-image" src="<?php echo e('/'.($item->product_image)); ?>" alt="Lỗi">
                                                </td>
                                                <td>
                                                    <?php if($item->brand_status==1): ?>
                                                        <span class="badge bg-success">Hiển thị</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-warning">Đã ẩn</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <div >
                                                        <a style="color: blue" href="<?php echo e(url('/admin/edit-product',['id'=>$item->product_id])); ?>">Sửa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div >
                                                        <a  style="color: red" href="<?php echo e(url('/admin/delete-product',['id'=>$item->product_id])); ?>">Xóa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <?php if($item->trashed()): ?>
                                                        <span class="badge bg-primary"  >Đã xóa tạm thời</span>
                                                    <?php else: ?>
                                                        <span></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if($item->trashed()): ?>
                                                        <a style="color: mediumspringgreen" href=<?php echo e(route('admin.restore-product',$item->product_id)); ?>>Khôi phục</a>
                                                        <hr>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: deeppink"  href=<?php echo e(route('admin.destroy-product',$item->product_id)); ?>>Xóa vĩnh viễn</a>
                                                    <?php else: ?>
                                                        <span></span>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-success" role="alert">Không có dữ liệu để hiển thị</div>

                                    <?php endif; ?>
                                    </tbody>
                                </table>
                                
                                

                            </div>
                        </div>
                    </div>
                </div>

                <?php echo e($products->links()); ?>


                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh sản phẩm mới</h5>
                            <div >
                                <a  style="background:#06d6a0" class="btn btn-outline-light" href=<?php echo e(route('admin.add-product')); ?>>Thêm sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-custom'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin/product-list.blade.php ENDPATH**/ ?>