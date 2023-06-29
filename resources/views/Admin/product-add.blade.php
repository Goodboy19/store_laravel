@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <h5 class="card-title">Thêm sản phẩm</h5>
                <div class="col-md-12 col-lg-8">
                    @if(session('msg'))
                        <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action={{route('admin.add-product-post')}} >
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Chọn danh mục sản phẩm</label>
                            <select name="product_category" class="form-select" aria-label="Default select example">
                                @foreach($categories as $key =>$item)
                                <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                                @endforeach
                            </select>
                            @error('product_category')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                            <input name="product_name" class="form-control"  value="{{old('product_name')}}">
                            @error('product_name')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Giá sản phẩm</label>
                            <input name="product_price" class="form-control"  value="{{old('product_price')}}">
                            @error('product_price')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Chọn thương hiệu</label>
                            <select name="product_brand" class="form-select" aria-label="Default select example">
                                @foreach($brands as $key =>$item)
                                    <option value={{$item->brand_id}}>{{$item->brand_name}}</option>
                                @endforeach
                            </select>
                            @error('product_brand')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Chọn hình ảnh sản phẩm</label>
                            <input name="product_image" class="form-control" type="file" id="formFile" >
                            @error('product_image')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3" >
                            <label for="exampleInputPassword1" class="form-label">Mô tả sản phẩm</label>

                                <textarea name="product_desc" id="editorInput" cols="30" rows="10" placeholder="Nhập mô tả sản phẩm"></textarea>

                            @error('product_desc')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tùy chọn chế độ hiển thị</label>
                            <select name="product_status" class="form-select" aria-label="Default select example">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                            @error('product_status')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" style="background:#06d6a0" class="btn btn-outline-light">Thêm</button>
                        <a style="background:#ffb703" class="btn btn-outline-light"href={{route('admin.get-product')}}>Quay lại</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-custom')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#editorInput' ) )
            .catch( error => {
                console.error( error );
            });
    </script>
@endsection
