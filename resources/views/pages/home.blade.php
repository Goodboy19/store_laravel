@extends('main')
@section('content')
<div class="slider-wrapper">
    <div class="swiper-button-prev visible-lg"></div>
    <div class="swiper-button-next visible-lg"></div>
    <div class="swiper-container" data-parallax="1" data-auto-height="1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="cell-view page-height">
                                <div class="col-xs-b40 col-sm-b80"></div>
                                <div data-swiper-parallax-x="-600">
                                    <div class="simple-article grey size-5">BEST PRICE <span class="color">$199.00</span></div>
                                    <div class="col-xs-b5"></div>
                                </div>
                                <div data-swiper-parallax-x="-500">
                                    <h1 class="h1">smartphone x transform</h1>
                                    <div class="title-underline left"><span></span></div>
                                </div>
                                <div data-swiper-parallax-x="-400">
                                    <div class="simple-article size-4 grey">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                                    <div class="col-xs-b30"></div>
                                </div>
                                <div data-swiper-parallax-x="-300">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-b40 col-sm-b80"></div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-product-preview">
                        <div class="product-preview-shortcode">
                            <div class="preview">
                                <div class="swiper-lazy-preloader"></div>
                                <div class="entry full-size swiper-lazy active" data-background="{{asset('frontend/img/product-preview-1.jpg')}}"></div>
                                <div class="entry full-size swiper-lazy" data-background="{{asset('frontend/img/product-preview-2.jpg')}}"></div>
                                <div class="entry full-size swiper-lazy" data-background="{{asset('frontend/img/product-preview-3.jpg')}}"></div>
                            </div>
                            <div class="sidebar valign-middle" data-swiper-parallax-x="-300">
                                <div class="valign-middle-content">
                                    <div class="entry active"><img src="{{asset('frontend/img/product-4.png')}}" alt="" /></div>
                                    <div class="entry"><img src="{{asset('frontend/img/product-5.png')}}" alt="" /></div>
                                    <div class="entry"><img src="{{asset('frontend/img/product-6.png')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b80 col-sm-b0"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-6">
                            <div class="cell-view page-height">
                                <div class="col-xs-b40 col-sm-b80"></div>
                                <div data-swiper-parallax-x="-600">
                                    <div class="simple-article grey size-5">BEST PRICE <span class="color">$199.00</span></div>
                                    <div class="col-xs-b5"></div>
                                </div>
                                <div data-swiper-parallax-x="-500">
                                    <h1 class="h1">smartphone x transform</h1>
                                    <div class="title-underline left"><span></span></div>
                                </div>
                                <div data-swiper-parallax-x="-400">
                                    <div class="simple-article size-4 grey">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                                    <div class="col-xs-b30"></div>
                                </div>
                                <div data-swiper-parallax-x="-300">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-b40 col-sm-b80"></div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-product-preview align-left">
                        <div class="product-preview-shortcode">
                            <div class="preview">
                                <div class="swiper-lazy-preloader"></div>
                                <div class="entry full-size swiper-lazy active" data-background="{{asset('frontend/img/product-preview-1.jpg')}}"></div>
                                <div class="entry full-size swiper-lazy" data-background="{{asset('frontend/img/product-preview-2.jpg')}}"></div>
                                <div class="entry full-size swiper-lazy" data-background="{{asset('frontend/img/product-preview-3.jpg')}}"></div>
                            </div>
                            <div class="sidebar valign-middle" data-swiper-parallax-x="-300">
                                <div class="valign-middle-content">
                                    <div class="entry active"><img src="{{asset('frontend/img/product-4.png')}}" alt="" /></div>
                                    <div class="entry"><img src="{{asset('frontend/img/product-5.png')}}" alt="" /></div>
                                    <div class="entry"><img src="{{asset('frontend/img/product-6.png')}}" alt="" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b80 col-sm-b0"></div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="grey-background">
    <div class="empty-space col-xs-b40 col-sm-b80"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="tabs-block">
                    <div class="tabulation-menu-wrapper text-center">
                        <div class="tabulation-title simple-input">all</div>
                        <ul class="tabulation-toggle">
                            <li><a class="tab-menu active">all</a></li>
                            <li><a class="tab-menu">top 10</a></li>
                            <li><a class="tab-menu">gadgets</a></li>
                            <li><a class="tab-menu">laptops</a></li>
                            <li><a class="tab-menu">accessories</a></li>
                        </ul>
                    </div>
                    <div class="empty-space col-xs-b30"></div>
                    <div class="tab-entry visible">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-7.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-8.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-9.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4"><span class="color">$630.00</span>&nbsp;&nbsp;&nbsp;<span class="line-through">$350.00</span></div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-10.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-11.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-12.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-7.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-9.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-11.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-8.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-10.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-12.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-7.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-8.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-11.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-12.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-10.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-12.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="4">
                    <div class="h4 swiper-title">our best categories</div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="swiper-button-prev style-1"></div>
                    <div class="swiper-button-next style-1"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-13.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-17.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-14.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-18.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-15.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-19.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-16.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-20.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-15.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-16.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-13.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                            <a class="product-shortcode style-2" href="#">
                                <span class="preview"><img src="{{asset('frontend/img/product-14.png')}}" alt="" /></span>
                                <span class="description">
                                            <span class="h6 animate-to-green">smart watches</span>
                                            <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                        </span>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination relative-pagination visible-xs"></div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="swiper-container arrows-align-top">
                    <div class="h4 swiper-title">people choice</div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="swiper-button-prev style-1"></div>
                    <div class="swiper-button-next style-1"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-10.jpg')}});"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-4.png')}}" alt=""></span>
                                                        <span class="text">learn more</span>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-14.jpg')}});"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-4.png')}}" alt=""></span>
                                                        <span class="text">learn more</span>
                                                    </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination visible-xs"></div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="2" data-slides-per-view="2">
                    <div class="h4 swiper-title">hot proposes</div>
                    <div class="empty-space col-xs-b20"></div>
                    <div class="swiper-button-prev style-1"></div>
                    <div class="swiper-button-next style-1"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-shortcode style-3">
                                <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                <div class="products-line col-xs-b25">
                                    <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                    <div class="row">
                                        <div class="col-xs-6 text-left">
                                            <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container" data-loop="1" data-touch="0">
                                    <div class="swiper-button-prev style-1"></div>
                                    <div class="swiper-button-next style-1"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-21.jpg')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-23.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="description">
                                    <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="countdown-wrapper">
                                    <div class="countdown" data-end="Sep,1,2017"></div>
                                </div>
                                <div class="preview-buttons">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-shortcode style-3">
                                <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                <div class="products-line col-xs-b25">
                                    <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                    <div class="row">
                                        <div class="col-xs-6 text-left">
                                            <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container" data-loop="1" data-touch="0">
                                    <div class="swiper-button-prev style-1"></div>
                                    <div class="swiper-button-next style-1"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-22.jpg')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-24.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="description">
                                    <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="countdown-wrapper">
                                    <div class="countdown" data-end="Sep,1,2017"></div>
                                </div>
                                <div class="preview-buttons">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-shortcode style-3">
                                <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                <div class="products-line col-xs-b25">
                                    <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                    <div class="row">
                                        <div class="col-xs-6 text-left">
                                            <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container" data-loop="1" data-touch="0">
                                    <div class="swiper-button-prev style-1"></div>
                                    <div class="swiper-button-next style-1"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-21.jpg')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-23.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="description">
                                    <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="countdown-wrapper">
                                    <div class="countdown" data-end="Sep,1,2017"></div>
                                </div>
                                <div class="preview-buttons">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-shortcode style-3">
                                <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                <div class="products-line col-xs-b25">
                                    <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                    <div class="row">
                                        <div class="col-xs-6 text-left">
                                            <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-container" data-loop="1" data-touch="0">
                                    <div class="swiper-button-prev style-1"></div>
                                    <div class="swiper-button-next style-1"></div>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-22.jpg')}}" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{asset('frontend/img/product-24.jpg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                <div class="empty-space col-xs-b10"></div>
                                <div class="description">
                                    <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                </div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="countdown-wrapper">
                                    <div class="countdown" data-end="Sep,1,2017"></div>
                                </div>
                                <div class="preview-buttons">
                                    <div class="buttons-wrapper">
                                        <a class="button size-2 style-2" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                        <span class="text">Learn More</span>
                                                    </span>
                                        </a>
                                        <a class="button size-2 style-3" href="#">
                                                    <span class="button-wrapper">
                                                        <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                        <span class="text">Add To Cart</span>
                                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination relative-pagination visible-xs"></div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="tabs-block">
                    <div class="row">
                        <div class="col-lg-4 col-xs-b15 col-lg-b0">
                            <div class="h4">best proposes</div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tabulation-menu-wrapper col-lg-text-right">
                                <div class="tabulation-title simple-input">all</div>
                                <ul class="tabulation-toggle">
                                    <li><a class="tab-menu active">all</a></li>
                                    <li><a class="tab-menu">featured</a></li>
                                    <li><a class="tab-menu">on sale</a></li>
                                    <li><a class="tab-menu">top rated</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b15 col-sm-b30"></div>
                    <div class="tab-entry visible">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-25.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-26.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-27.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #d0c45c;"></div>
                                            <div class="entry" style="color: #000;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-26.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-27.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #d0c45c;"></div>
                                            <div class="entry" style="color: #000;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-25.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-26.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-entry">
                        <div class="row nopadding">
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-25.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #a7f050;"></div>
                                            <div class="entry" style="color: #50e3f0;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-27.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="color-selection">
                                            <div class="entry active" style="color: #d0c45c;"></div>
                                            <div class="entry" style="color: #000;"></div>
                                            <div class="entry" style="color: #eee;"></div>
                                        </div>
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="product-shortcode style-1">
                                    <div class="title">
                                        <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                        <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                    </div>
                                    <div class="preview">
                                        <img src="{{asset('frontend/img/product-26.jpg')}}" alt="" />
                                        <div class="preview-buttons valign-middle">
                                            <div class="valign-middle-content">
                                                <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                </a>
                                                <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <div class="simple-article size-4 dark">$630.00</div>
                                    </div>
                                    <div class="description">
                                        <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                        <div class="icons">
                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>
            </div>
            <div class="col-md-3 col-md-pull-9">

                <div class="h4 col-xs-b25">popular categories</div>
                <ul class="categories-menu">
                    <li>
                        <a href="#">laptops &amp; computers</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">video &amp; photo cameras</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">smartphones</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">tv &amp; audio</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">gadgets</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">car electronics</a>
                        <div class="toggle"></div>
                        <ul>
                            <li>
                                <a href="#">laptops &amp; computers</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">laptops &amp; computers</a>
                                    </li>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">video &amp; photo cameras</a>
                                <div class="toggle"></div>
                                <ul>
                                    <li>
                                        <a href="#">video &amp; photo cameras</a>
                                    </li>
                                    <li>
                                        <a href="#">smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">smartphones</a>
                            </li>
                            <li>
                                <a href="#">tv &amp; audio</a>
                            </li>
                            <li>
                                <a href="#">gadgets</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">video games &amp; consoles</a>
                    </li>
                    <li>
                        <a href="#">software</a>
                    </li>
                    <li>
                        <a href="#">offeci accessories</a>
                    </li>
                    <li>
                        <a href="#">accessories</a>
                    </li>
                </ul>

                <div class="empty-space col-xs-b25 col-sm-b50"></div>

                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="swiper-container banner-shortcode style-2">
                            <div class="swiper-button-prev hidden"></div>
                            <div class="swiper-button-next hidden"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-shortcode style-2">
                                        <div class="content">
                                            <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-11.jpg')}});"></div>
                                            <div class="description valign-middle">
                                                <div class="valign-middle-content">
                                                    <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                    <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                    <div class="banner-title color">- 35% OFF</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-shortcode style-2">
                                        <div class="content">
                                            <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-11.jpg')}});"></div>
                                            <div class="description valign-middle">
                                                <div class="valign-middle-content">
                                                    <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                    <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                    <div class="banner-title color">- 35% OFF</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-shortcode style-2">
                                        <div class="content">
                                            <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-11.jpg')}});"></div>
                                            <div class="description valign-middle">
                                                <div class="valign-middle-content">
                                                    <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                    <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                    <div class="banner-title color">- 35% OFF</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-shortcode style-2">
                                        <div class="content">
                                            <div class="background" style="background-image: url({{asset('frontend/img/thumbnail-11.jpg')}});"></div>
                                            <div class="description valign-middle">
                                                <div class="valign-middle-content">
                                                    <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                    <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                    <div class="banner-title color">- 35% OFF</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="h4 col-xs-b25">most viewed</div>
                        <div class="product-shortcode style-4 clearfix">
                            <a class="preview" href="#"><img src="{{asset('frontend/img/product-28.jpg')}}" alt="" /></a>
                            <div class="description">
                                <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                                <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                                <div class="simple-article dark">$98.00</div>
                            </div>
                        </div>
                        <div class="col-xs-b10"></div>
                        <div class="product-shortcode style-4 clearfix">
                            <a class="preview" href="#"><img src="{{asset('frontend/img/product-29.jpg')}}" alt="" /></a>
                            <div class="description">
                                <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                                <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                                <div class="simple-article dark">$12.00</div>
                            </div>
                        </div>
                        <div class="col-xs-b10"></div>
                        <div class="product-shortcode style-4 clearfix">
                            <a class="preview" href="#"><img src="{{asset('frontend/img/product-30.jpg')}}" alt="" /></a>
                            <div class="description">
                                <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                                <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                                <div class="simple-article dark">$4.00</div>
                            </div>
                        </div>

                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="h4 col-xs-b25">feature products</div>
                        <div class="swiper-container">
                            <div class="swiper-button-prev hidden"></div>
                            <div class="swiper-button-next hidden"></div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-1 text-center">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                            <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{asset('frontend/img/product-26.jpg')}}" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                    <span class="text">Learn More</span>
                                                                </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                    <span class="text">Add To Cart</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$950.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="empty-space col-xs-b60"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-1 text-center">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                            <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{asset('frontend/img/product-27.jpg')}}" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                    <span class="text">Learn More</span>
                                                                </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                    <span class="text">Add To Cart</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$950.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="empty-space col-xs-b60"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-1 text-center">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                            <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{asset('frontend/img/product-26.jpg')}}" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                    <span class="text">Learn More</span>
                                                                </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                    <span class="text">Add To Cart</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$950.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="empty-space col-xs-b60"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-shortcode style-1 text-center">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                            <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{asset('frontend/img/product-25.jpg')}}" alt="">
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-1.png')}}" alt=""></span>
                                                                    <span class="text">Learn More</span>
                                                                </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                                <span class="button-wrapper">
                                                                    <span class="icon"><img src="{{asset('frontend/img/icon-3.png')}}" alt=""></span>
                                                                    <span class="text">Add To Cart</span>
                                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$950.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="empty-space col-xs-b60"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="h4 col-xs-b25">latest post</div>
                        <div class="row m5 text-center">
                            <div class="blog-shortcode style-1">
                                <a href="#" class="preview simple-mouseover"><img src="{{asset('frontend/img/thumbnail-12.jpg')}}" alt="" /></a>
                                <div class="description">
                                    <div class="simple-article size-1 grey col-xs-b5">APR 07 / 15 &nbsp;&nbsp;&nbsp;<a href="#" class="color">GADGETS</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">Phasellus rhoncus in</a></h6>
                                    <div class="simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus</div>
                                </div>
                            </div>

                            <div class="blog-shortcode style-1">
                                <a href="#" class="preview simple-mouseover"><img src="{{asset('frontend/img/thumbnail-13.jpg')}}" alt="" /></a>
                                <div class="description">
                                    <div class="simple-article size-1 grey col-xs-b5">APR 07 / 15 &nbsp;&nbsp;&nbsp;<a href="#" class="color">GADGETS</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">Phasellus rhoncus in</a></h6>
                                    <div class="simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus</div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b25 col-sm-b50"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
