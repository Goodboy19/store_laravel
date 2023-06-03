<!doctype html>
<html lang="en" class="light-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- loader-->
    <link href="<?php echo e(asset('backend/css/pace.min.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('backend/js/pace.min.js')); ?>"></script>

    <!--plugins-->
    <link href="<?php echo e(asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="<?php echo e(asset('backend/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/css/bootstrap-extended.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/css/icons.css')); ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Admin Nam Store</title>
</head>

<body class="bg-white">

<!--start wrapper-->
<div class="wrapper">
    <div class="">
        <div class="row g-0 m-0">
            <div class="col-xl-6 col-lg-12">
                <div class="login-cover-wrapper">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Đăng Nhập</h4>
                                <p>Đăng nhập vào tài khoản của bạn</p>
                            </div>
                            <form class="form-body row g-3">
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Tên đăng nhập</label>
                                    <input type="email" class="form-control" id="inputEmail">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="inputPassword">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember">
                                        <label class="form-check-label" for="flexSwitchCheckRemember">Lưu thông tin đăng nhập</label>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 text-end">
                                    <a href="authentication-reset-password-cover.html">Quên mật khẩu?</a>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary">Đăng nhập</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="position-relative border-bottom my-3">
                                        <div class="position-absolute seperator translate-middle-y">Tiếp tục với</div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <div class="social-login d-flex flex-row align-items-center justify-content-center gap-2 my-2">
                                        <a href="javascript:;" class=""><img src="<?php echo e(asset('backend/images/icons/facebook.png')); ?>" alt=""></a>
                                        <a href="javascript:;" class=""><img src="<?php echo e(asset('backend/images/icons/apple-black-logo.png')); ?>" alt=""></a>
                                        <a href="javascript:;" class=""><img src="<?php echo e(asset('backend/images/icons/google.png')); ?>" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 text-center">
                                    <p class="mb-0">Bạn không có tài khoản? <a href="authentication-sign-up-cover.html">Đăng ký</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end wrapper-->


</body>

</html>
<?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin-login.blade.php ENDPATH**/ ?>