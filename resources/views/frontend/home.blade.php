@extends('main')
@section('title')
    {{$title}}
@endsection
@section('contents')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Sản phẩm mới nhất</h2>
            @if(($products->count())>0)
                @foreach($products as $key=>$itemProduct)
                    <div class="col-sm-4">

                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset($itemProduct->product_image)}}" alt=""/>
                                    <h2>{{number_format($itemProduct->product_price)}} đ</h2>
                                    <p>{{$itemProduct->product_name}}</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add
                                        to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>{{number_format($itemProduct->product_price)}}đ</h2>
                                        <p>{{$itemProduct->product_name}}</p>

                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="{{route('detailProduct',$itemProduct->product_id)}}"><i
                                                class="fa fa-plus-square"></i>Chi tiết sản phẩm</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                @endforeach
            @else
                <h1>Không có sản phẩm để hiển thị</h1>
            @endif
        </div><!--features_items-->
    </div>
@endsection
