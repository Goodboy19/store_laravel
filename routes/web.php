<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\ProductController;
use App\Models\BrandProductModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//FrontEnd
Route::get('/', [HomeController::class,'index']);
Route::get('/detail-product/{id}', [HomeController::class,'detailProduct'])->name('detailProduct');


//-------------BACK END - QUẢN TRỊ ADMIN--------------
Route::prefix('admin')->name('admin.')->group(function () {

    //Trang đăng nhập
    Route::get('/',[AdminController::class,'index'])->name('index');
    //Trang Dashboard
//    -- Nhận dữ liệu:
    Route::get('/dashboard',[AdminController::class,'showdashboard'])->name('dashboard');
//    -- Gửi dữ liệu:
    Route::post('/login-dasboard',[AdminController::class,'dashboard'])->name('login');
//    Đăng xuất Admin
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

//-----------QUẢN TRỊ DANH MỤC SẢN PHẨM----------------

//   1. Lấy toàn bộ danh mục sản phẩm
    Route::get('/get-all-category',[CategoryProductController::class,'getAllCategory'])->name('get-category');
//    2.1 Thêm danh mục sản phẩm -GET
    Route::get('/add-category',[CategoryProductController::class,'addCategory']);
//    2.2 Thêm danh mục sản phẩm - POST
    Route::post('/add-category',[CategoryProductController::class,'postAddCategory'])->name('add-category-post');
//    3.1 Sửa danh mục sản phẩm - GET
    Route::get('/edit-category/{id}',[CategoryProductController::class,'editCategory']);
//    3.2  Sửa danh mục sản phẩm - POST
    Route::post('/update-category',[CategoryProductController::class,'postEditCategory']);
//    4. Xóa danh mục sản phẩm
    Route::get('/destroy-category/{id}',[CategoryProductController::class,'deleteCategory']);

//--------------------QUẢN TRỊ DANH MỤC THƯƠNG HIỆU-------------------------

//      1. Lấy toàn bộ label trong SQL - GET
    Route::get('/get-all-brand',[BrandProductController::class,'getAll'])->name('get-brand');
//      2.1 Thêm label mới - GET
    Route::get('/add-brand',[BrandProductController::class,'addBrand'])->name('add-brand');
//      2.2 Thêm label mới - POST
    Route::post('/add-brand',[BrandProductController::class,'addBrandPost'])->name('add-brand-post');
//    3.1 Update label -GET
    Route::get('edit-brand/{id}',[BrandProductController::class,'editBrand'])->name('edit-brand');
//    3.2 Update label -GET
    Route::post('update-brand',[BrandProductController::class,'postEditBrand'])->name('edit-brand-post');
//    4. Xóa label -GET
    Route::get('delete-brand/{id}',[BrandProductController::class,'softDelete'])->name('soft-delete-brand');
//    5. Restore -GET
    Route::get('restore-brand/{id}',[BrandProductController::class,'restoreBrand'])->name('restore-brand');
//    6. Xóa vĩnh viễn -Force Delete -GET
    Route::get('destroy-brand/{id}',[BrandProductController::class,'forceDestroyBrand'])->name('destroy-brand');

//----------QUẢN LÝ SẢN PHẨM---------------------

//      1. Lấy toàn bộ label trong SQL - GET
    Route::get('/get-product',[ProductController::class,'getProduct'])->name('get-product');
//      2.1 Thêm mới - GET
    Route::get('/add-product',[ProductController::class,'createProduct'])->name('add-product');
//      2.2 Thêm mới - POST
    Route::post('/add-product',[ProductController::class,'createProductPost'])->name('add-product-post');
//    3.1 Update edit -GET
    Route::get('edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
//    3.2 Update edit -GET
    Route::post('update-product',[ProductController::class,'editProductPost'])->name('edit-product-post');
//    4. Xóa -GET
    Route::get('destroy-product/{id}',[ProductController::class,'softDestroy'])->name('soft-delete-product');
//    5. Restore Khôi phục -GET
    Route::get('restore-product/{id}',[ProductController::class,'restoreProduct'])->name('restore-product');
//    6. Xóa vĩnh viễn -Force Delete -GET
    Route::get('destroy-product/{id}',[ProductController::class,'forceDestroyProduct'])->name('destroy-product');
});


