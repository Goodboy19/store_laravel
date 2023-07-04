@extends('main')
@section('title')
    {{$title}}
@endsection
@section('contents')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập vào tài khoản của bạn</h2>
                        <form action="{{route('addCustomer')}}" method="POST">
                            @csrf
                            <input type="text" placeholder="Tên" />
                            <input type="email" placeholder="Email Address" />
                            <span>
								<input type="checkbox" class="checkbox">
								Giữ đăng nhập
							</span>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Tạo tài khoản mới</h2>
                        <form action="{{route('addCustomer')}}" method="POST">
                            @csrf
                            <input name="nameCus" type="text" placeholder="Tên"/>
                            <input name="emailCus" type="email" placeholder="Email"/>
                            <input name="passCus" type="password" placeholder="Password"/>
                            <input name="phoneCus" type="text" placeholder="Phone"/>
                            <button type="submit" class="btn btn-default">Tạo tài khoản</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
