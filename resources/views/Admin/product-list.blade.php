@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card table-widget">
                        <div class="card-body">
                            <h5 class="card-title">Danh mục sản phẩm</h5>

                            @if(session('msg'))
                                <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                            @endif

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Hiển thị</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tùy chọn</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(($products->count())>0)

                                        @foreach($products as $key =>$item)

                                            <tr>
                                                <th scope="row">{{$loop->iteration }}</th>
                                                <td>{{$item->product_name}}</td>
                                                <td>
{{--                                                    Thêm hàm strip_tag để loại bỏ các thẻ tag HTML--}}
                                                    {{strip_tags($item->product_desc)}})

                                                </td>
                                                <td >
                                                    <img class="rounded-image" src="{{'/'.($item->product_image)}}" alt="Lỗi">
                                                </td>
                                                <td>
                                                    @if ($item->brand_status==1)
                                                        <span class="badge bg-success">Hiển thị</span>
                                                    @else
                                                        <span class="badge bg-warning">Đã ẩn</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div >
                                                        <a style="color: blue" href="{{url('/admin/edit-product',['id'=>$item->product_id])}}">Sửa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div >
                                                        <a  style="color: red" href="{{url('/admin/delete-product',['id'=>$item->product_id])}}">Xóa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    @if($item->trashed())
                                                        <span class="badge bg-primary"  >Đã xóa tạm thời</span>
                                                    @else
                                                        <span></span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->trashed())
                                                        <a style="color: mediumspringgreen" href={{route('admin.restore-product',$item->product_id)}}>Khôi phục</a>
                                                        <hr>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: deeppink"  href={{route('admin.destroy-product',$item->product_id)}}>Xóa vĩnh viễn</a>
                                                    @else
                                                        <span></span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert alert-success" role="alert">Không có dữ liệu để hiển thị</div>

                                    @endif
                                    </tbody>
                                </table>
                                {{--                                Phân trang--}}
                                {{--                                {{$label->render()}}--}}

                            </div>
                        </div>
                    </div>
                </div>
{{--                @if( $products-> count() > 5)--}}
                {{ $products->links() }}
{{--                @endif--}}
                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh sản phẩm mới</h5>
                            <div >
                                <a  style="background:#06d6a0" class="btn btn-outline-light" href={{route('admin.add-product')}}>Thêm sản phẩm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

@endsection
@section('js-custom')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

@endsection
