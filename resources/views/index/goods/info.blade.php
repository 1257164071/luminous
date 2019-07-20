@extends('index.layouts.default')
@section('title','goodsInfo')

@section('content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2" style="background-image: url(static/images/breadcrumb-bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Single Product</span>
                            <h1>That Perfectly Fits Your Life</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="{{ route('index.home') }}">Home</a></li>
                                <li class="active">GoodsInfo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start shop area-->
    <section id="shop-area" class="single-shop-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="shop-content">
                        <!--Start single shop content-->
                        <div class="single-shop-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single-product-image-holder">
                                        <img src="{{ $goods->goods_index_img }}" alt="{{ $goods->goods_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content-box">
                                        <span class="price">${{ $goods->goods_price }}</span>
                                        <h2>{{ $goods->goods_name }}</h2>
                                        <div class="review-box">
                                            <ul>
                                                @for($i = 0; $i < $goods->goods_stars; $i++)
                                                    <li><i class="fa fa-star"></i></li>
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>{{ $goods->goods_introduce }}</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single shop content-->
                        <!--Start product tab box-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-tab-box tabs-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#desc" class="tab-btn"><span>Descriprion</span></li>
                                    </ul>
                                    <div class="tabs-content" id="review">
                                        <div class="tab active-tab" id="desc">
                                            <div class="product-details-content">
                                                <div class="desc-content-box">
                                                    {!! $goods->goods_detail !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End product tab box-->
                        <!--Start related product box-->
                        <div class="related-product">
                            <div class="shop-page-title">
                                <div class="title">Raleted <span>Products</span></div>
                            </div>
                            <div class="row">
                                @foreach($like_goods as $like_good)
                                    @include('index.layouts._goods_info',['good' => $like_good])
                                @endforeach
                            </div>
                        </div>
                        <!--End related product box-->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End shop area-->



@stop
