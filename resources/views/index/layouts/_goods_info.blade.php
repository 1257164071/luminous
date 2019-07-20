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
                    <a href="{{ route('goods_info') }}?goods_id={{ $good->id }}">Details</a>
                </ul>
            </div>
        </div>
    </div>
</div>
