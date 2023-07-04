<?php

namespace App\Http\Controllers;

use App\Models\BrandProductModel;
use App\Models\CategoryProductModel;
use App\Models\ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//    THÊM GIỎ HÀNG
    public function saveCart(Request $request)
    {
        $title = ' Giỏ hàng';
        $id = $request->product_id_hidden;
        $amount = $request->quantity;

        $product_info = ProductModel::where('product_id', $id)->first();

        if ($product_info) {
            $data = [
                'id' => $product_info->product_id,
                'name' => $product_info->product_name,
                'qty' => $amount,
                'price' => $product_info->product_price,
                'options' => ['image' => $product_info->product_image]
            ];
            Cart::add($data);
            Cart::tax(1,0, 0);
        }

        return Redirect::to('show-cart');

    }
//    HIỂN THỊ GI HÀNG
    public function showCart(){
        $title = ' Giỏ hàng';
        //        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
//        Hiển thị chi tiết sản phẩm
        return view('frontend.show-cart',compact('brand','category','title'));
    }
//  XÓA GIỎ HÀNG
    public function deleteCart($rowId){
        $title = ' Giỏ hàng';
//        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
//        Hiển thị chi tiết sản phẩm
        Cart::update($rowId, 0); // Will update the quantity
        return view('frontend.show-cart',compact('brand','category','title'));
    }
//    CẬP NHẬT GIỎ HÀNG
    public function updateCart(Request $request){
        $rowId = $request->rowIdCart;
        $qty = $request->quantity;
        $title = ' Giỏ hàng';
//        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
//        Hiển thị chi tiết sản phẩm
        Cart::update($rowId, $qty); // Will update the quantity
        return view('frontend.show-cart',compact('brand','category','title'));
    }


}
