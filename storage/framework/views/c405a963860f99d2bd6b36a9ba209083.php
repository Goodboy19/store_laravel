<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@200..900&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('backend/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/plugins/font-awesome/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/plugins/perfectscroll/perfect-scrollbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/plugins/apexcharts/apexcharts.css')); ?>" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="<?php echo e(asset('backend/css/main.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('backend/css/custom.css')); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <![endif]-->
</head>
<body>

<div class="page-container">
    <div class="page-header">
        <nav class="navbar navbar-expand-lg d-flex justify-content-between">
            <div class="" id="navbarNav">
                <ul class="navbar-nav" id="leftNav">
                    <li class="nav-item">
                        <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo e(route('admin.dashboard')); ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a class="navbar-brand" href=<?php echo e(route('admin.dashboard')); ?>></a>
            </div>
            <div class="" id="headerNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                            <form>
                                <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
                            </form>
                            <h6 class="dropdown-header">Recent Searches</h6>
                            <a class="dropdown-item" href="#">charts</a>
                            <a class="dropdown-item" href="#">new orders</a>
                            <a class="dropdown-item" href="#">file manager</a>
                            <a class="dropdown-item" href="#">new users</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notifications-dropdown" href="#" id="notificationsDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                        <div class="dropdown-menu dropdown-menu-end notif-drop-menu" aria-labelledby="notificationsDropDown">
                            <h6 class="dropdown-header">Notifications</h6>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge bg-info text-white">
                                    <i class="fas fa-bullhorn"></i>
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                        <small>19:00</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge bg-primary text-white">
                                    <i class="fas fa-bolt"></i>
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p class="bold-notif-text">faucibus dolor in commodo lectus mattis</p>
                                        <small>18:00</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge bg-success text-white">
                                    <i class="fas fa-at"></i>
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p>faucibus dolor in commodo lectus mattis</p>
                                        <small>yesterday</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge">
                                    <img src="<?php echo e(asset('backend/images/avatars/profile-image.png')); ?>" alt="">
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p>faucibus dolor in commodo lectus mattis</p>
                                        <small>yesterday</small>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="header-notif">
                                    <div class="notif-image">
                                  <span class="notification-badge">
                                    <img src="<?php echo e(asset('backend/images/avatars/profile-image.png')); ?>" alt="">
                                  </span>
                                    </div>
                                    <div class="notif-text">
                                        <p>faucibus dolor in commodo lectus mattis</p>
                                        <small>yesterday</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo e(asset('backend/images/avatars/profile-image.png')); ?>" alt=""></a>
                        <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                            <a class="dropdown-item" href="#"><i data-feather="user"></i>Thông tin</a>
                            <a class="dropdown-item" href="#"><i data-feather="inbox"></i>Messages</a>
                            <a class="dropdown-item" href="#"><i data-feather="edit"></i>Activities<span class="badge rounded-pill bg-success">12</span></a>
                            <a class="dropdown-item" href="#"><i data-feather="check-circle"></i>Tasks</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                            <a class="dropdown-item" href="<?php echo e(url('/admin')); ?>"><i data-feather="unlock"></i>Khóa</a>
                            <a class="dropdown-item" href="<?php echo e(url('admin/logout')); ?>"><i data-feather="log-out"></i>Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
            <li class="sidebar-title">
                Main
            </li>
            <li class="active-page">
                <a href="<?php echo e(url('admin/dashboard')); ?>"><i data-feather="home"></i>Trang chủ</a>
            </li>
            <li class="sidebar-title">
                Tài khoản
            </li>
            <li>
                <a href="#"><i data-feather="inbox"></i>Email</a>

            </li>
            <li>
                <a href="#"><i data-feather="calendar"></i>Calendar</a>
            </li>
            <li>
                <a href="#"><i data-feather="user"></i>Social</a>
            </li><li>
                <a href="#"><i data-feather="message-circle"></i>File Manager</a>
            </li>
            <li class="sidebar-title">
                NỘI DUNG
            </li>
            <li>
                <a href="index.html"><i data-feather="code"></i>Thông tin<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                    <li><a href="alerts.html"><i class="far fa-circle"></i>Alerts</a></li>
                    <li><a href="typography.html"><i class="far fa-circle"></i>Typography</a></li>
                    <li><a href="icons.html"><i class="far fa-circle"></i>Icons</a></li>
                    <li><a href="badge.html"><i class="far fa-circle"></i>Badge</a></li>
                    <li><a href="buttons.html"><i class="far fa-circle"></i>Buttons</a></li>
                    <li><a href="dropdowns.html"><i class="far fa-circle"></i>Dropdowns</a></li>
                    <li><a href="list-group.html"><i class="far fa-circle"></i>List Group</a></li>
                    <li><a href="toasts.html"><i class="far fa-circle"></i>Toasts</a></li>
                    <li><a href="modal.html"><i class="far fa-circle"></i>Modal</a></li>
                    <li><a href="pagination.html"><i class="far fa-circle"></i>Pagination</a></li>
                    <li><a href="popovers.html"><i class="far fa-circle"></i>Popovers</a></li>
                    <li><a href="progress.html"><i class="far fa-circle"></i>Progress</a></li>
                    <li><a href="spinners.html"><i class="far fa-circle"></i>Spinners</a></li>
                    <li><a href="accordion.html"><i class="far fa-circle"></i>Accordion</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i data-feather="gift"></i>Sản phẩm<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                    <li><a href="<?php echo e(url('admin/get-all-category')); ?>"><i class="far fa-circle"></i>Danh mục</a></li>

                    <li><a href=<?php echo e(route('admin.get-brand')); ?>><i class="far fa-circle"></i>Thương hiệu</a></li>
                    <li><a href=<?php echo e(route('admin.get-product')); ?>><i class="far fa-circle"></i>Quản lý sản phẩm</a></li>
                    <li><a href="tree-view.html"><i class="far fa-circle"></i>Tree View</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i data-feather="user"></i>User<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                    <li><a href="form-elements.html"><i class="far fa-circle"></i>Form Elements</a></li>
                    <li><a href="form-layout.html"><i class="far fa-circle"></i>Form Layout</a></li>
                    <li><a href="form-validation.html"><i class="far fa-circle"></i>Form Validation</a></li>
                </ul>
            </li>
            <li>
                <a href="cards.html"><i data-feather="layers"></i>Cards</a>
            </li>
            <li>
                <a href="index.html"><i data-feather="list"></i>Tables<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                    <li><a href="tables.html"><i class="far fa-circle"></i>Basic Tables</a></li>
                    <li><a href="data-tables.html"><i class="far fa-circle"></i>Data Tables</a></li>
                </ul>
            </li>
            <li>
                <a href="charts.html"><i data-feather="pie-chart"></i>Charts</a>
            </li>
            <li class="sidebar-title">
                Other
            </li>
            <li>
                <a href="index.html"><i data-feather="star"></i>Pages<i class="fas fa-chevron-right dropdown-icon"></i></a>
                <ul class="">
                    <li><a href="invoice.html"><i class="far fa-circle"></i>Invoice</a></li>
                    <li><a href="404.html"><i class="far fa-circle"></i>404 Page</a></li>
                    <li><a href="500.html"><i class="far fa-circle"></i>500 Page</a></li>
                    <li><a href="blank-page.html"><i class="far fa-circle"></i>Blank Page</a></li>
                    <li><a href="login.html"><i class="far fa-circle"></i>Login</a></li>
                    <li><a href="register.html"><i class="far fa-circle"></i>Register</a></li>
                    <li><a href="lockscreen.html"><i class="far fa-circle"></i>Lockscreen</a></li>
                    <li><a href="price.html"><i class="far fa-circle"></i>Price</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i data-feather="check-circle"></i>Documentation</a>
            </li>
        </ul>
    </div>
<?php echo $__env->yieldContent('dashboard'); ?>
</div>

<!-- Javascripts -->
<script src="<?php echo e(asset('backend/plugins/jquery/jquery-3.4.1.min.js')); ?>"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="<?php echo e(asset('backend/plugins/perfectscroll/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/apexcharts/apexcharts.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/main.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/js/pages/dashboard.js')); ?>"></script>
<?php echo $__env->yieldContent('js-custom'); ?>;
</body>
</html>
<?php /**PATH /Users/goodboy/Desktop/NAM/Learning/Laravel/project_store/resources/views/admin/admin-layout.blade.php ENDPATH**/ ?>