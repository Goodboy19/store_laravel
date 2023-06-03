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
    <title>Circl - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/perfectscroll/perfect-scrollbar.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{asset('backend/css/main.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js')}} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class='loader'>
    <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12 col-lg-4">
            <div class="card login-box-container">
                <div class="card-body">
                    <div class="authent-logo">
                        <img src="{{asset('backend/images/logo@2x.png')}}" alt="">
                    </div>
                    <div class="authent-text">
                        <p>Xin chào bạn</p>
                        <p>Vui lòng đăng nhập tài khoản</p>
                    </div>

                    <form method="POST" action="{{url('admin/login-dasboard')}}">
                        @csrf
                        <div class="mb-3">
                            <div class="form-floating">
                                <input name="admin_email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                @error('admin_email')
                               <span style="color: red">Vui lòng nhập Email</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <input name="admin_password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('admin_password')
                                <span style="color: red">Sai mật khẩu</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lưu thông tin đăng nhập</label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-info m-b-xs">Đăng nhập</button>
                            <button class="btn btn-primary">Facebook</button>
                        </div>
                    </form>
                    <div class="authent-reg">
                        <p>Chưa đăng ký? <a href="register.html">Tạo một tài khoản</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Javascripts -->
<script src="{{asset('backend/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="{{asset('backend/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('backend/js/main.min.js')}}"></script>
</body>
</html>
