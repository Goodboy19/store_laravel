<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\BrandProductModel;
use App\Models\CategoryProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Get All
    public function getProduct(){

        $title ='Danh sách sản phẩm';
//        $products = ProductModel::withTrashed()->orderBy('product_id','ASC')->orderBy('deleted_at','DESC')->get();
//        if( $products-> count() > 5){
            $products = ProductModel::withTrashed()->orderBy('product_id','ASC')->orderBy('deleted_at','DESC')->paginate(6);
//        }
//        else{
//            $products = ProductModel::withTrashed()->orderBy('product_id','ASC')->orderBy('deleted_at','DESC')->get();
//        }

        return view('admin.product-list',compact('products','title'));
    }

    // Create Product - Get
    public function createProduct(){
        $title = 'Thêm sản phẩm';
        $categories = DB::table('tbl_category')->where('category_status','=',1)->orderBy('category_name','ASC')->get();
        $brands = BrandProductModel::where('brand_status','=',1)->orderBy('brand_name','ASC')->get();
        return view('admin.product-add',compact('brands','categories','title'));
    }

    // Create Product - POST
    public function createProductPost(Request $request){
        $request->validate([
            'product_name'=>'required|unique:tbl_product,product_name',
            'product_desc'=>'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'brand_list'=>['required','integer'],
//            'category_list'=>['required','integer'],
//            'product_status'=>['required','integer']
        ],[
            'product_name.required'     =>'Tên sản phẩm bắt buộc phải nhập',
            'product_name.unique'       =>'Sản phẩm đã tồn tại trên hệ thống',
            'product_desc.required'     =>'Mô tả sản phẩm bắt buộc phải nhập',
//            'product_status.required'   =>'Bắt buộc phải chọn chế độ hiển thị',
//            'product_status.integer'    =>'Chế độ hiển thị không hợp lệ',
//            'brand_list.required'       =>'Thương hiệu bắt buộc phải chọn',
//            'category_list.required'    =>'Danh mục bắt buộc phải chọn'
        ]);

        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            // Lưu tên file và đường dẫn vào bản ghi
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file_path = $file->move('uploads/images', $file_name);
        }
            $dataInsert =[
            'product_name'=> $request->product_name,
            'product_desc'=> $request->product_desc,
            'category_id'=>$request->product_category,
            'brand_id'=>$request->product_brand,
            'product_status'=> $request->product_status,
            'product_image'=>$file_path,
        ];
        ProductModel::create($dataInsert);
        return redirect()->route('admin.get-product')->with('msg','Thêm dữ liệu thành công');
    }

    // Edit Product - Get
    public function editProduct( Request $request, $id){
        $title = 'Sửa thông tin sản phẩm';
        if (!empty($id)) {
            $request->session()->put('id', $id);
            $productDetail = ProductModel::where('product_id', $id)->first();
        }
        else {
            return redirect('admin/getProduct')->with('msg', 'Sản phẩm không tồn tại');
        }
        return view('/admin/product-edit',compact('productDetail','title'));

    }

    // Edit Product - POST
    public function editProductPost(Request $request){
        $id= session('id');
        if (!empty($id)){
            if ($request->hasFile('product_image')) {
                $file = $request->file('product_image');
                // Lưu tên file và đường dẫn vào bản ghi
                $file_name = time() . '.' . $file->getClientOriginalExtension();
                $file_path = $file->move('uploads/images', $file_name);
                $dataInsert =[
                    'product_name'=> $request->product_name,
                    'product_desc'=> $request->product_desc,
                    'product_status'=> $request->product_status,
                    'product_image'=>$file_path
                ];
            }
            else{
                $dataInsert =[
                    'product_name'=> $request->product_name,
                    'product_desc'=> $request->product_desc,
                    'product_status'=> $request->product_status
                    ];
            }
            ProductModel::where('product_id',$id)->update($dataInsert);
            return redirect()->route('admin.get-product')->with('msg','Thêm dữ liệu thành công');
        }

        else{
            return redirect('admin/get-product')->with('msg','Sản phẩm không tồn tại');
        }

    }


    // Destroy Product - Get
    public function softDestroy($id){
        return 'Xóa';
    }

    // Restore Product - Get
    public function restoreProduct($id){
    }

    // Force Destroy Product - Get
    public function forceDestroy($id){

    }


}
