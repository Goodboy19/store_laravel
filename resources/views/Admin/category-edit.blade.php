@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')
    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <h5 class="card-title">Sửa mục sản phẩm</h5>
                <div class="col-md-12 col-lg-8">

                    @if(session('msg'))
                        <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                    @endif

                    <form method="POST" action="{{url('/admin/update-category')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                            <input name="category_name" class="form-control"  value="{{old('category_name') ?? $categoryDetail->category_name}}">
                            @error('category_name')
                            <span style="color: red">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                            <input name="category_desc" class="form-control"  value="{{old('category_desc') ?? $categoryDetail->category_desc}}">
                            @error('category_desc')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                            <select name="category_status" class="form-select" aria-label="Default select example">
                                <option value="0" {{old('category_status')==0 || $categoryDetail->category_status ==0 ?'selected':false}}>Ẩn</option>
                                <option value="1" {{old('category_status')==1 || $categoryDetail->category_status ==1 ?'selected':false}} >Hiển thị</option>

                            </select>
                            @error('category_status')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div  >
                        <div class="mb-3">
                            <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Cập nhật <i class="fas fa-bolt"></i></button>
                            <a style="background:#ffb703" class="btn btn-outline-light" href="{{url('/admin/get-all-category')}}">Quay lại danh mục </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
