@extends('customer.layouts.master')
@section('title','Shop Details')
@section('header_styles')
    <link href="//www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ assetUrl('plugins/xzoom/jquery.exzoom.css') }}" rel="stylesheet" type="text/css"/>
@stop
@section('content')
    <!-- ee breadcrumb -->
    <div class="ee-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.blade.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.blade.php">Vegetables & Fruits</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Grape Fruit Turkey</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- shop details -->
    <div class="bg-grey shop-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-dt-view">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                {{--<img src="{{ $variant->varient_image_url }}" alt="" class="img-thumbnail border-0">--}}
                                <div class="container">
                                    <div class="exzoom hidden" id="exzoom">
                                        <div class="exzoom_img_box">
                                            <ul class='exzoom_img_ul'>
                                                <li><img src="{{ $variant->product->product_image_url }}"/></li>
                                                {{--<li><img src="https://picsum.photos/320/320/?random"/></li>
                                                <li><img src="https://picsum.photos/600/600/?random"/></li>
                                                <li><img src="https://picsum.photos/500/500/?random"/></li>
                                                <li><img src="https://picsum.photos/700/700/?random"/></li>
                                                <li><img src="https://picsum.photos/310/310/?random"/></li>
                                                <li><img src="https://picsum.photos/410/410/?random"/></li>
                                                <li><img src="https://picsum.photos/400/400/?random"/></li>--}}
                                            </ul>
                                        </div>
                                        <div class="exzoom_nav"></div>
                                        <p class="exzoom_btn">
                                            <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="product-dt-right">
                                    <h2>{{ $variant->product->product_name }}</h2>
                                    <div class="no-stock">
                                        <p class="stock-qty">Available<span>(In Stock)</span></p>
                                    </div>
                                    <div class="product-radio">
                                        <ul class="product-now">
                                            @foreach($variant->product->variants as $tVariant)
                                                <li>
                                                    @if($tVariant->varient_id != $variant->varient_id)
                                                        <a href="{{ route('customer.product.show',$tVariant->varient_id) }}">
                                                            @endif
                                                            <label
                                                                class="{{ ($tVariant->varient_id == $variant->varient_id)?'bg-secondary':'bg-primary' }} text-white"
                                                                for="p{{ $tVariant->varient_id }}">{{ $tVariant->quantity." ".$tVariant->unit }}</label>
                                                            @if($tVariant->varient_id != $variant->varient_id)
                                                        </a>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <p class="pp-descp">
                                        @if($variant->short_description != 'null')
                                            {!! $variant->short_description !!}
                                        @endif
                                    </p>
                                    <div class="product-group-dt">
                                        <ul>
                                            <li class="mr-0">
                                                <div class="main-price color-discount">Price
                                                    <span>{{ $currency->currency_sign }} {{ $variant->price }}</span>
                                                </div>
                                            </li>
{{--                                            @if($variant->price < $variant->mrp)--}}
                                                <li>
                                                    <div class="main-price mrp-price">
                                                        <small class="text-dark">{{ $currency->currency_sign }} {{ $variant->mrp }}</small>
                                                    </div>
                                                </li>
{{--                                            @endif--}}
                                        </ul>
                                        <input type="hidden" id="dacib-variant_id" name="variant_id"
                                               value="{{ $variant->varient_id }}">
                                        <ul class="gty-wish-share">
                                            <li>
                                                <div class="qty-product">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" id="dacib-quantity" step="1"
                                                               name="quantity" value="1"
                                                               class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span class="like-icon save-icon" title="wishlist"></span></li>
                                        </ul>
                                        <ul class="ordr-crt-share">
                                            <li>
                                                <button class="add-cart-btn hover-btn" id="dacib">
                                                    <i class="uil uil-shopping-cart-alt"></i>Add to Cart
                                                </button>
                                            </li>
                                            {{--<li>
                                                <button class="order-btn hover-btn">Order Now</button>
                                            </li>--}}
                                        </ul>

                                    </div>
                                    <div class="pdp-details">
                                        <ul>
                                            <li>
                                                <div class="pdp-group-dt">
                                                    <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                    <div class="pdp-text-dt">
                                                        <span>Lowest Price Guaranteed</span>
                                                        <p>Get difference refunded if you find it cheaper anywhere
                                                            else.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pdp-group-dt">
                                                    <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                    <div class="pdp-text-dt">
                                                        <span>Easy Returns &amp; Refunds</span>
                                                        <p>Return products at doorstep and get refund in seconds.
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    {{--<div class="white-bg pdpt-bg">
                        <div class="pdpt-title">
                            <h4>More Like This</h4>
                        </div>
                        <div class="pdpt-body scrollstyle_4">
                            <div class="cart-item border_radius">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html"
                                   class="cart-product-img">
                                    <img src="{{ assetUrl('theme/images/product/img-6.jpg') }}" alt="">
                                    <div class="offer-badge">4% OFF</div>
                                </a>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="k1" name="cart1">
                                                <label for="k1">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k2" name="cart1">
                                                <label for="k2">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k3" name="cart1">
                                                <label for="k3">2kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k4" name="cart1">
                                                <label for="k4">3kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                   class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$12 <span>$15</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item border_radius">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html"
                                   class="cart-product-img">
                                    <img src="{{ assetUrl('theme/images/product/img-2.jpg') }}" alt="">
                                    <div class="offer-badge">6% OFF</div>
                                </a>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="k5" name="cart2">
                                                <label for="k5">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k6" name="cart2">
                                                <label for="k6">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k7" name="cart2">
                                                <label for="k7">2kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                   class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$24 <span>$30</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-item border_radius">
                                <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html"
                                   class="cart-product-img">
                                    <img src="{{ assetUrl('theme/images/product/img-5.jpg') }}" alt="">
                                </a>
                                <div class="cart-text">
                                    <h4>Product Title Here</h4>
                                    <div class="cart-radio">
                                        <ul class="kggrm-now">
                                            <li>
                                                <input type="radio" id="k8" name="cart3">
                                                <label for="k8">0.50</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k9" name="cart3">
                                                <label for="k9">1kg</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="k10" name="cart3">
                                                <label for="k10">1.50kg</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="qty-group">
                                        <div class="quantity buttons_added">
                                            <input type="button" value="-" class="minus minus-btn">
                                            <input type="number" step="1" name="quantity" value="1"
                                                   class="input-text qty text">
                                            <input type="button" value="+" class="plus plus-btn">
                                        </div>
                                        <div class="cart-item-price">$15</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="white-bg pdpt-bg">
                        <div class="pdpt-title">
                            <h4>Product Details</h4>
                        </div>
                        <div class="pdpt-body scrollstyle_4">
                            <div class="pdct-dts-1">
                                {!! $variant->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-list">
                <div class="row">
                    <div class="col-md-12 border-bottom">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>For You</span>
                                <h2>Top Featured Products</h2>
                            </div>
                            <a href="#" class="see-all-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12 mt-30">
                        <!-- all product list -->
                        <div class="all-product-list">
                            <div class="owl-carousel featured-slider owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2360px;">
                                        @foreach($featured_products as $product)
                                            <div class="owl-item active" style="width: 285px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="product-item">
                                                        <div class="bg-white trending-product-single">
                                                            <div class="trending-single-img">
                                                                <img src="{{ $product->product_image_url }}"
                                                                     class="m-auto w-auto d-block" height="200px">
                                                                {{--<div class="percentage-off-content">25% Off</div>--}}
                                                            </div>
                                                            <div class="product-description">
                                                                <h4 class="product_name">
                                                                    <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}"
                                                                       title="{{  $product->product_name  }}">
                                                                        {{ \Illuminate\Support\Str::limit( $product->product_name ,25) }}
                                                                    </a>
                                                                </h4>
                                                                {{--<p>
                                                                    {{ substr($product->variants[0]->short_description,0,45) }}
                                                                </p>--}}
                                                                <div class="price">
                                                                    <span
                                                                        class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                                                    <span>
                                                                        <del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                                                </div>
                                                                <button class="add-btn">
                                                                    Add
                                                                    <div class="home-add-btn" style="height: 30px;">
                                                                        <img
                                                                            src="{{ assetUrl('theme/images/plus-white.png') }}">
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation"
                                            class="owl-prev disabled"><i class="uil uil-angle-left"></i></button>
                                    <button
                                        type="button" role="presentation" class="owl-next"><i
                                            class="uil uil-angle-right"></i></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ assetUrl('theme/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ assetUrl('theme/js/product/custom.js') }}"></script>
    <script src="{{ assetUrl('theme/js/product/product.thumbnail.slider.js') }}"></script>
    <script src="{{ assetUrl('theme/js/function.js') }}"></script>

    <script src="//unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="{{ assetUrl('plugins/xzoom/jquery.exzoom.js') }}"></script>

    <script type="text/javascript">
        $('.container').imagesLoaded(function () {
            $("#exzoom").exzoom({
                autoPlay: false,
            });
            $("#exzoom").removeClass('hidden')
        });
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
@stop

