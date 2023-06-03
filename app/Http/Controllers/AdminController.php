<?php

namespace App\Http\Controllers;
//Khai báo request cho phần tương tác Database
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function index()
    {
        Session::put('admin_name',null);
        Session::put('admin_password',null);
        return view('admin.admin-login');
    }
    public function showdashboard()
    {
        $title = 'Trang quản trị';
        $check_admin = Session::get('admin_id');
        if ($check_admin){
            return view('admin.dashboard',compact('title'));


        } return redirect()->route('admin.index');
    }
    public function dashboard(Request $request){
        $request->validate([
            'admin_email'=>'required',
            'admin_password'=>'required'
        ]);
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
         Session::put('admin_name',$result->admin_name);
         Session::put('admin_id',$result->admin_id);
          return  Redirect::to('admin/dashboard');
        }
        else{
//            Đăng nhập thất bại
            Session::put('message','mật khẩu hoặc tài khoản không đúng');
            return  Redirect::to('/admin');
        }


    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
