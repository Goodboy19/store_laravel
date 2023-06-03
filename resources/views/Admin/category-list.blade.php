@extends('admin.admin-layout')
@section('title')
    {{$title}}
@endsection
@section('dashboard')

    <div class="page-content">
        <div class="main-wrapper">

            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="card table-widget">
                        <div class="card-body">
                            <h5 class="card-title">Danh mục sản phẩm</h5>
                            @if(session('msg'))
                                <div class="alert alert-danger" role="alert">{{session('msg')}}</div>

                            @endif
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên danh mục</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty('$categories'))
                                        @foreach($categories as $key =>$item)
                                            <tr>
                                                <th scope="row">{{$item->category_id}}</th>
                                                <td>{{$item->category_name}}</td>
                                                <td>{{$item->category_desc}}</td>
                                                <td>
                                                    @if ($item->category_status==1)
                                                        <span class="badge bg-success">Hiển thị</span>
                                                    @else
                                                        <span class="badge bg-danger">Ẩn</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div >
                                                        <a style="color: blue" href={{url('admin/edit-category',$item->category_id)}}>Sửa</a>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div >
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" style="color: red" href="{{url('/admin/destroy-category',$item->category_id)}}">Xóa</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="alert alert-success" role="alert">Không có dữ liệu để hiển thị</div>
                                    @endif
                                    </tbody>
                                </table>
{{--                                {{$categorylist->render()}}--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Thêm danh mục mới</h5>
                            <div >
                                <a  style="background:#06d6a0" class="btn btn-outline-light" href="{{url('admin/add-category')}}">Thêm danh mục</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection
