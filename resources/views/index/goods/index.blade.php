@extends('index.layouts.default')
@section('title','goods')

@section('content')

<style>
    .page-link {
        color: #222222;
        padding: .9rem 1.2rem;
    }
    .page-item.active .page-link{
        background-color: #ff000c;
        border-color: #ff000c;
    }
    .page-link:hover
    {
        color: #ff000c;
    }
</style>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(static/images/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                       <span>Our Products</span>
                       <h1>That Perfectly Fits Your Life</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="{{ route('index.home') }}">Home</a></li>
                            <li class="active">Goods</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Shop area-->
<section id="shop-area" class="main-shop-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 float-right">
                <div class="shop-content">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <div class="row">
                        <!--Start single product item-->
                        @foreach($goods as $good)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-product-item text-center">
                                <div class="img-holder">
                                    <img src="{{ $good->goods_index_img }}" alt="Awesome Product Image">
                                </div>
                                <div class="title-holder text-center">
                                    <div class="static-content">
                                        <h3 class="title text-center"><a href="shop-single.html">{{ $good->goods_name }}</a></h3>
                                        <span>${{ $good->goods_price }}</span>
                                    </div>
                                    <div class="overlay-content">
                                        <ul class="clearfix">
                                            <a href="">Details</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <!--End single product item-->
                    </div>
                    <!--Start post pagination-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="offset-4 col-md-4">
                            {!! $goods->render() !!}

                            </div>
{{--                            <ul class="post-pagination text-center">--}}
{{--                                <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>--}}
{{--                                <li class="active"><a href="#">1</a></li>--}}
{{--                                <li><a href="#">2</a></li>--}}
{{--                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                    <!--End post pagination-->
                </div>
            </div>

            <!--Start sidebar Wrapper-->
            <div class="col-xl-3 col-lg-4 col-md-8 col-sm-12 float-left">
                <div class="shop-sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar-box">
                        <form class="search-form" action="" id="search">
							<input placeholder="Search..." type="text" name="goods_name" value="{{ $goods_name }}">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                            <input type="hidden" name="goods_cat_id" id="goods_cat_id">
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar-box pdbtm">
                        <div class="shop-sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="javascript:query_type('')">ALL</a></li>
                            @foreach($goods_cats as $goods_cat)
                                <li><a href="javascript:query_type('{{ $goods_cat->id }}')">{{ $goods_cat->goods_cat_name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar-box">
                        <div class="shop-sidebar-title">
                            <h3>Popular Products</h3>
                        </div>
                        <ul class="products-post">
                            @foreach($rand_goods as $rand_good)
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ $rand_good->goods_index_img }}" alt="{{ $rand_good->goods_name }}">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#"><span class="icon-link"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h5 class="post-title"><a href="#">{{ $rand_good->goods_name }}</a></h5>
                                        <span>${{ $rand_good->goods_price }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--End single sidebar-->
                </div>
            </div>
            <!--End Sidebar Wrapper-->

        </div>
    </div>
</section>
<!--End Shop area-->

@stop

@section('script')
    <script>
        function query_type(id){
            $('#goods_cat_id').val(id);
            $("#search").submit();
        }
    </script>
@stop
