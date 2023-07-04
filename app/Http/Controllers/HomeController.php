<?php

namespace App\Http\Controllers;

use App\Models\BrandProductModel;
use App\Models\CategoryProductModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = ' Shop VN';
//        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
//        Hiển thị sản phẩm
        $products = ProductModel::withTrashed()->where('product_status',1)->limit(6)->get();
//        dd($category);
        return view ('frontend.home',compact('category','brand','products','title'));
    }

    public function detailProduct($id){
        $title = 'Chi tiết sản phẩm';
//        Hiển thị Categories
        $category = CategoryProductModel::where('category_status',1)->get();
//        Hiển thị Brand - Thương hiệu sản phẩm
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
//        Hiển thị chi tiết sản phẩm
        $productDetail = ProductModel::withTrashed()->where('product_id',$id)
            ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
            ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')->get();
        foreach ($productDetail as $key => $item) {
            $getId = $item->category_id;
        }
       $productRelation = ProductModel::withTrashed()->where('category_id',$getId)->whereNotIn('product_id',[$id])->limit(3)->get();
//        dd($getId);

        return view ('frontend.product-detail',compact('productDetail','category','brand','productRelation','title'));
    }

    public function saveCart(){
        return 'Show cart';
    }
}
