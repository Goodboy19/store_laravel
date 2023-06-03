<?php

namespace App\Http\Controllers;

use App\Models\BrandProductModel;
use Illuminate\Http\Request;

class BrandProductController extends Controller
{
//    Lấy tất cả dữ liệu
    public function getAll(){
        $title ='Danh mục thương hiệu';
        $brand = BrandProductModel::withTrashed()->orderBy('brand_id','ASC')->orderBy('deleted_at','DESC')->get();
        return view('Admin.brand-list',compact('brand','title'));
    }
//    Create dữ liệu mới -Get
    public function addBrand()
    {
        $title = 'Thêm thương hiệu';
        return view('admin.brand-add',compact('title'));

    }
//    Create dữ liệu mới - POST
    public function addBrandPost(Request $request){

        $request->validate([
            'brand_name'=>'required|unique:tbl_brand_product,brand_name',
            'brand_desc'=>'required',
            'brand_status'=>['required','integer']
        ],[
            'brand_name.required'=>'Tên thương hiệu bắt buộc phải nhập',
            'brand_name.unique'=>'Thương hiệu đã tồn tại trên hệ thống',
            'brand_desc.required'=>'Mô tả thương hiệu bắt buộc phải nhập',
            'brand_status.required'=>'Bắt buộc phải chọn chế độ hiển thị',
            'brand_status.integer'=>'Chế độ hiển thị không hợp lệ'
        ]);
        $dataInsert =[
            'brand_name'=> $request->brand_name,
            'brand_desc'=> $request->brand_desc,
            'brand_status'=> $request->brand_status,
            'updated_at'=> date('y-m-d H:i:s')
        ];
        BrandProductModel::create($dataInsert);
        return redirect()->route('admin.get-brand')->with('msg','Thêm dữ liệu thành công');
    }

//    3.1 Update thương hiệu - Get
    public function editBrand(Request $request, $id=0){
        $title = 'Cập nhật thương hiệu';
        if (!empty($id)) {
            $request->session()->put('id', $id);
            $brandDetail = BrandProductModel::withTrashed()->where('brand_id',$id)->first();
        }
        else{
                redirect()->route('admin.get-brand')->with('msg', 'Thương hiệu không tồn tại');
            }
        return view('admin.brand-edit', compact('brandDetail', 'title'));
    }

//    3.2 Update thương hiệu - POST
    public function postEditBrand(Request $request){
        $id= session('id');
        if (!empty($id)){
            $request->validate([
                'brand_name'=>'required',
                'brand_desc'=>'required',
                'brand_status'=>'integer'
            ],[
                'name_label.required'=>'Tên thương hiệu bắt buộc phải nhập',
                'desc_label.required'=>'Mô tả thương hiệu bắt buộc phải nhập',
                'brand_status.integer'=>'Chế độ hiển thị không hợp lệ'
            ]);
            $dataInsert =[
                'brand_name'=> $request->brand_name,
                'brand_desc'=> $request->brand_desc,
                'brand_status'=> $request->brand_status,
            ];
            BrandProductModel::withTrashed()->where('brand_id',$id)->update($dataInsert);
            return back() ->with('msg','Update thành công');
        }
        else{ return redirect()->route('admin.get-brand')->with('msg','Danh mục không tồn tại');
        }
    }

//   4.1  Xóa dữ liệu - SOFT DELETE
    public function softDelete($id){
        $status = BrandProductModel::withoutTrashed()->where('brand_id',$id);
//        dd($status);
        if($status->count()>0){
            $action = BrandProductModel::find($id)->delete();
            if(!empty($action )){
                $msg = 'Xóa mềm thành công';
            }
            else{
                $msg = 'Thao tác xóa thất bại';
            }
        }
        $msg = 'Đã được xóa trước đó';

        return back() ->with('msg',$msg);
    }
//    5. Restore label
    public function restoreBrand($id){
           $brandSelect = BrandProductModel::onlyTrashed()->where('brand_id',$id);
           if (!empty($brandSelect)){
               $brandSelect->restore();
               return redirect()->route('admin.get-brand')->with('msg','Khôi phục thành công');
           }
           return redirect()->route('admin.get-brand')->with('msg','Khôi phục thất bại');
       }
//       Forcedelete
   public function forceDestroyBrand($id){
        $brandSelected = BrandProductModel::onlyTrashed()->where('brand_id',$id);
           if (!empty($brandSelected)){
               $brandSelected->forceDelete();
               return redirect()->route('admin.get-brand')->with('msg','Đã xóa vĩnh viễn');
           }
    return redirect()->route('admin.get-brand')->with('msg','Xóa thất bại');
    }

}
