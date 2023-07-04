@extends('main')
@section('title')
    {{$title}}
@endsection
@section('contents')

        <div id="cart_items" class="col-sm-9 padding-right">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Tên sản phẩm</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tiền</td>
                        <td>Xóa</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(Cart::content() as $row)
{{--                        @dd($row)--}}
                    <tr>
                        <td >
                            <img width="20%" height="10%" src="{{$row->options->image}}">
                        </td>
                        <td width="24%" class="cart_description">
                            <h4><a href="">{{$row->name}}</a></h4>
                        </td>
                        <td width="12%" class="cart_price">
                            <p>{{number_format($row->price)}} đ</p>
                        </td>
                        <td width="20%"  class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{route('updateCart')}}" method="POST">
                                    @csrf
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$row->qty}}" size="2">
                                <input type="hidden" value="{{$row->rowId}}" name="rowIdCart" class="form-control">
                                <input type="submit" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td width="16%"  class="cart_total">
                            <p class="cart_total_price">{{number_format($row->subtotal)}} đ</p>
                        </td>
                        <td  class="cart_delete">
                            <a class="cart_quantity_delete" href={{route('deleteCart',$row->rowId)}}><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

            <div id="do_action" class="container">
                <div class="heading">
                    <h3>What would you like to do next?</h3>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="total_area">
                            <ul>
                                <li>Tổng tiền <span>{{number_format(Cart::subtotal())}} đ</span></li>
                                <li>Thuế <span>{{number_format(Cart::tax())}} đ</span></li>
                                <li>Phí ship <span>Free</span></li>
                                <li>TỔNG CỘNG <span>{{number_format(Cart::total())}} đ</span></li>
                            </ul>
{{--                            <a class="btn btn-default update" href="">Update</a>--}}
                            <a class="btn btn-default check_out" href="{{route('checkOut')}}">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>

@endsection
