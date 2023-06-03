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
                            <h5 class="card-title">Danh mục thương hiệu</h5>

                            @if(session('msg'))
                                <div class="alert alert-success" role="alert">{{session('msg')}}</div>
                            @endif

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên thương hiệu</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Hiển thị</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Tùy chọn</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(($brand->count())>0)
                                        @php($i=1)
                                        @foreach($brand as $key =>$item)

                                            <tr>
                                                <th scope="row">{{$i++}}</th>
                                                <td>{{$item->brand_name}}</td>
                                                <td>{{$item->brand_desc}}</td>
                                                <td>
                                                    @if ($item->brand_status==1)
                                                        <span class="badge bg-success">Hiển thị</span>
                                                    @else
                                                        <span class="badge bg-warning">Đã ẩn</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div >
                                                            <a  style="color: mediumspringgreen" href={{route('admin.edit-brand',$item->brand_id)}}>Sửa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div >
                                                        <a  style="color: red" href={{route('admin.soft-delete-brand',$item->brand_id)}}>Xóa</a>
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
                                                        <a style="color: mediumspringgreen" href={{route('admin.restore-brand',$item->brand_id)}}>Khôi phục</a>
                                                        <hr>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: deeppink"  href={{route('admin.destroy-brand',$item->brand_id)}}>Xóa vĩnh viễn</a>
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
                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục mới</h5>
                            <div >
                                <a  style="background:#06d6a0" class="btn btn-outline-light" href={{route('admin.add-brand')}}>Thêm danh mục</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
