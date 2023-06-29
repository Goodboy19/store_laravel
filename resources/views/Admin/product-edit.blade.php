@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Cập nhật sản phẩm</h5>
                <div class="col-md-12 col-lg-8">

                    @if(session('msg'))
                        <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                    @endif

                    <form method="POST" enctype="multipart/form-data" action="{{url('/admin/update-product')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                            <label>
                                <input name="product_name" class="form-control"  value="{{old('product_name') ?? $productDetail->product_name}}">
                            </label>
                            @error('product_name')
                            <span style="color: red">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                            <label>
                                <input name="product_desc" class="form-control"  value="{{old('product_desc') ?? $productDetail->product_desc}}">
                            </label>
                            @error('product_desc')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        {{--                        Chèn file ảnh--}}
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Chọn hình ảnh sản phẩm</label>
                            <input name="product_image" class="form-control" type="file" id="formFile" >
                            @error('product_image')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                            <select name="product_status" class="form-select" aria-label="Default select example">
                                <option>Chế độ hiển thị</option>
                                <option value="0" {{old('product_status')==0 || $productDetail->product_status ==0 ?'selected':false}}>Ẩn</option>
                                <option value="1" {{old('product_status')==1 || $productDetail->product_status ==1 ?'selected':false}} >Hiển thị</option>

                            </select>
                            @error('brand_status')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Cập nhật</button>
                        <a style="background:#ffb703" class="btn btn-outline-light" href={{route('admin.get-product')}}>Quay lại</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
