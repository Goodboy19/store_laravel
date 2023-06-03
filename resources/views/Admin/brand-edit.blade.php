@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Sửa thương hiệu</h5>
                <div class="col-md-12 col-lg-8">

                    @if(session('msg'))
                        <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                    @endif

                    <form method="POST" action={{url('/admin/update-brand')}}>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên thương hiệu</label>
                            <input name="brand_name" class="form-control"  value="{{old('brand_name') ?? $brandDetail->brand_name}}">
                            @error('brand_name')
                            <span style="color: red">{{$message}}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mô tả</label>
                            <input name="brand_desc" class="form-control"  value="{{old('brand_desc') ?? $brandDetail->brand_desc}}">
                            @error('brand_desc')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                            <select name="brand_status" class="form-select" aria-label="Default select example">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                            @error('brand_status')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Cập nhật</button>
                        <a style="background:#ffb703" class="btn btn-outline-light"href={{route('admin.get-brand')}}>Quay lại</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
