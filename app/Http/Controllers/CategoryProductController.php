<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\CategoryProductModel;




class CategoryProductController extends Controller
{


// Lấy tẩt cả danh mục sản phẩm
    public function getAllCategory(){
        $title = 'Danh sách danh mục';
        $categories = CategoryProductModel::all();
        return view('Admin.category-list',compact('categories','title'));
    }
//    Thêm danh mục sản phẩm - GET
    public function addCategory(){
        $title = 'Thêm mới danh mục';
        return view('Admin.category-add',compact('title'));
    }
    //    Thêm danh mục sản phẩm - POST
    public function postAddCategory(Request $request){
        $title = 'Thêm mới danh mục';
        $request->validate([
            'category_name'=>'required|unique:tbl_category,category_name',
            'category_desc'=>'required',
            'category_status'=>['required','integer']
        ],[
            'category_name.required'=>'Tên danh mục bắt buộc phải nhập',
            'category_desc.required'=>'Mô tả danh mục bắt buộc phải nhập',
            'category_name.unique'=>'Danh mục đã tồn tại trên hệ thống',
            'category_status.required'=>'Bắt buộc phải chọn chế độ hiển thị',
            'category_status.integer'=>'Chế độ hiển thị không hợp lệ'
        ]);
        $dataInsert =[
            'category_name'=> $request->category_name,
            'category_desc'=> $request->category_desc,
            'category_status'=> $request->category_status,
        ];
        CategoryProductModel::create($dataInsert);
        return redirect()->route('admin.get-category') ->with('msg','Thêm danh mục thành công');
    }

//    Sửa danh mục - UPDATE - GET
    public function editCategory(Request $request, $id)
    {
        $title = 'Sửa danh mục sản phẩm';
        if (!empty($id)) {
            $request->session()->put('id', $id);
            $categoryDetail = CategoryProductModel::where('category_id', $id)->first();
        }
        else {
            return redirect('admin/get-all-category')->with('msg', 'Danh mục không tồn tại');
        }
        return view('/admin/category-edit',compact('categoryDetail','title'));


    }

//    Sửa danh mục - UPDATE - POST
    public function postEditCategory(Request $request){
            $title = 'Update danh mục';
            $id= session('id');
            if (!empty($id)){
                $request->validate([
                    'category_name'=>'required',
                    'category_desc'=>'required',
                    'category_status'=>['required','integer']
                ],[
                    'category_name.required'=>'Tên danh mục bắt buộc phải nhập',
                    'category_desc.required'=>'Mô tả danh mục bắt buộc phải nhập',
                    'category_name.unique'=>'Danh mục đã tồn tại trên hệ thống',
                    'category_status.required'=>'Bắt buộc phải chọn chế độ hiển thị',
                    'category_status.integer'=>'Chế độ hiển thị không hợp lệ'
                ]);
                $dataInsert =[
                    'category_name'=> $request->category_name,
                    'category_desc'=> $request->category_desc,
                    'category_status'=> $request->category_status,
                    'created_at'=> date('y-m-d H:i:s')
                ];
                CategoryProductModel::where('category_id',$id)->update($dataInsert);
                return back() ->with('msg','Update danh mục thành công');
            }
            else{ return redirect('admin/get-all-category')->with('msg','Danh mục không tồn tại');
            }
        }

//    Xóa danh mục
     public function deleteCategory($id=0){
        if(!empty($id)){
           CategoryProductModel::where('category_id',$id)->delete();
            return redirect('admin/get-all-category')->with('msg','Xóa danh mục thành công');
        }
        else{
            return redirect('admin/get-all-category')->with('msg','Không thấy danh mục cần xóa');
        }

     }
}
