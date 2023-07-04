<?php

namespace App\Http\Controllers;

use App\Models\BrandProductModel;
use App\Models\CategoryProductModel;
use App\Models\CheckOutModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkOut(){
        $title = 'Thanh toán giỏ hàng';
        //        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
        return view('frontend.check-out',compact('title','category','brand'));
    }
    public function addCustomer(Request $request){
        $title = 'Thanh toán giỏ hàng';
        $products = ProductModel::withTrashed()->where('product_status',1)->limit(6)->get();
        //        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
        $dataInsert =[
            'customer_name'     => $request->nameCus,
            'customer_email'    => $request->emailCus,
            'customer_password' => $request->passCus,
            'customer_phone'    => $request->phoneCus
        ];
        CheckOutModel::create($dataInsert);
        return view('frontend.home',compact('title','category','brand','products'));
    }
    //
}
