<?php $__env->startSection('title'); ?>
    Thêm sản phẩm
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard'); ?>
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Thêm danh mục sản phẩm</h5>
                <div class="col-md-12 col-lg-8">

                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                                    <input name="category_name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                                    <input name="category_desc" type="password" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                                    <select name="category_status" class="form-select" aria-label="Default select example">
                                        <option value="1">Hiển thị</option>
                                        <option value="2">Ẩn</option>

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Thêm</button>
                            </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin/add-category.blade.php ENDPATH**/ ?>