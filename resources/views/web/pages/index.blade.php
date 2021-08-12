@extends('web.layout.app')
@section('title','Home')
@section('content')
    <!-- banner section start -->
    <div id="displayTop" class="displaytoptwo">
        <div class="container">
            <div class="row">
                <div class="nov-row col-lg-cus-2 hidden-md-down col-lg-3 col-xs-12">
                    <div class="nov-row-wrap row">
                        <div class="nov-html col-xl-12 col-lg-12 col-md-12">
                            <div class="block">
                                <div class="block_content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nov-row col-lg-cus-10 policy-home spacing-15 col-lg-12 col-xs-12">
                    <div class="nov-row-wrap row">
                        <div id="nov-slider" class="slider-wrapper theme-default col-xl-12 col-lg-12 col-md-12" data-effect="random" data-slices="15" data-animspeed="500" data-pausetime="10000" data-startSlide="0" data-directionnav="true" data-controlnav="false" data-controlNavThumbs="false"
                             data-pauseonhover="true" data-manualadvance="false" data-randomStart="false">
                            <div class="nov_preload">
                                <div class="process-loading active">
                                    <div class="loader">
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                        <div class="dot"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="nivoSlider">
                                @foreach($home_slider_banners as $banner)
                                <a href="{{ route($banner->button_route) }}">
                                    <img src="{{ $banner->banner_image }}" alt="" title="{{ $banner->banner_name }}" />
                                </a>
                                @endforeach
                                {{--<a href="#">
                                    <img src="images/Home/banner/banner-2.jpg" alt="" title="#htmlcaption_56" />
                                </a>
                                <a href="#">
                                    <img src="images/Home/banner/banner-3.jpg" alt="" title="#htmlcaption_58" />
                                </a>--}}
                            </div>
                            <div id="htmlcaption_55" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slider Banner 1
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slider Banner 1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_56" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slider Banner 2
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slider Banner 2</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slider Banner 2</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="htmlcaption_58" class="nivo-html-caption">
                                <div class="nov-slider-ct">
                                    <div class="nov-center slider-none">
                                        <div class="nov-title effect-0">
                                            Slider Banner 3
                                        </div>
                                        <div class="nov-description effect-0">
                                            <p>Slider Banner 3</p>
                                        </div>
                                        <div class="nov-html effect-0">
                                            <p>Slider Banner 3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <div class="row">
                            <div class="nov-row page-home-left col-lg-cus-2 col-lg-3 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="nov-productlist productlist-liststyle-3 col-xl-12 col-lg-12 col-md-12 col-xs-12 ">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                BEST SELLERS
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist106970551" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="2"
                                                     data-items_mobile="1">
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                sed sollicitudin mauris</a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$25.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="9" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Lorem
                                                                                ipsum dolor sit amet
                                                                            </a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$43.20
                                                                                    </span>
                                                                                <span class="regular-price">$48.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="3" data-id-product-attribute="40" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Mauris
                                                                                molestie porttitor diam</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$69.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$49.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Vehicula
                                                                                vel tempus sit amet ulte
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$15.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="6" data-id-product-attribute="76" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$25.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="7" data-id-product-attribute="88" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Donec
                                                                                non lectus ac erat sedei
                                                                            </a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$37.05
                                                                                    </span>
                                                                                <span class="regular-price">$39.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="8" data-id-product-attribute="100" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Curabitur
                                                                                in lorem sit ameten alt
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$30.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 ">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                NEW ARRIVALS
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist7894997" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="2"
                                                     data-items_mobile="1">
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                sed sollicitudin mauris
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$25.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="2" data-id-product-attribute="9" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Lorem
                                                                                ipsum dolor sit amet
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$43.20
                                                                                    </span>
                                                                                <span class="regular-price">$48.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="3" data-id-product-attribute="40" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Mauris
                                                                                molestie porttitor diam
                                                                            </a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$69.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel
                                                                            </a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$49.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/13-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/12-1.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Vehicula
                                                                                vel tempus sit amet ulte
                                                                            </a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$15.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="6" data-id-product-attribute="76" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium
                                                                            </a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$25.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature " data-id-product="7" data-id-product-attribute="88" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Donec
                                                                                non lectus ac erat sedei</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">$37.05
                                                                                    </span>
                                                                                <span class="regular-price">$39.00
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  last_item" data-id-product="8" data-id-product-attribute="100" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w63 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups hidden-rate">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>
                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Curabitur
                                                                                in lorem sit ameten alt</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">$30.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="nov-row page-home-right col-lg-cus-10 col-lg-9 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="nov-image col-lg-6 col-md-6 mb-xs-30">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/products/1.jpg" alt="banner2-1" title="banner2-1"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nov-image col-lg-6 col-md-6">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/products/2.jpg" alt="banner8-2" title="banner8-2"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="productlist_deal col-xl-8 col-lg-8 col-md-8 col-xs-12 col-lg-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <div class="block_content">
                                                <div id="productlist_deal446294636" class="product_list owl-carousel owl-theme " data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="30" data-dots="false" data-nav="true" data-items="1" data-items_tablet="1" data-items_mobile="1">
                                                    <div class="item item-list">
                                                        <div class="row d-flex align-items-center product-miniature js-product-miniature first_item" data-id-product="2" data-id-product-attribute="9" itemscope>
                                                            <div class="col-xl-8 col-lg-7">
                                                                <div class="thumbnail row no-gutters d-flex align-items-center">
                                                                    <div class="thumnailslider-for col-cus-75 thumnailslider-for0" data-asnavfornav=".thumnailslider-nav0">
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/2-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/2-2.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/5-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/6-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/7-1.jpg" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="thumnailslider-nav col-cus-25 thumnailslider-nav0" data-asnavforfor=".thumnailslider-for0" data-vertical="true" data-autoplay="false" data-autoplayTimeout="6000" data-items="4" data-margin="0" data-nav="false" data-dots="false" data-loop="false"
                                                                         data-items_mobile="3">
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/2-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/2-2.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/5-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/6-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/7-1.jpg" alt="">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="product-description col-xl-4 col-lg-5">

                                                                <div class="category-title"><a href="#">Smartphone
                                                                        &amp; Tablet</a>
                                                                </div>


                                                                <div class="product-title" itemprop="name"><a href="#">Lorem
                                                                        ipsum dolor sit amet</a></div>

                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile" href="#">
                                                                        <i class="fa fa-user"></i> David James
                                                                    </a>
                                                                </p>

                                                                <div class="product-groups" itemprop="offers" itemscope>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">$43.20</span>



                                                                            <span class="regular-price">$48.00</span>




                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="product-buttons mt-5">
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="token" value="">
                                                                        <input type="hidden" name="id_product" value="2">
                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                class="novicon-cart"></i></a>
                                                                    </form>
                                                                    <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="">
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                        <i class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item item-list">
                                                        <div class="row d-flex align-items-center product-miniature js-product-miniature first_item" data-id-product="7" data-id-product-attribute="88" itemscope>
                                                            <div class="col-xl-8 col-lg-7">
                                                                <div class="thumbnail row no-gutters d-flex align-items-center">

                                                                    <div class="thumnailslider-for col-cus-75 thumnailslider-for0" data-asnavfornav=".thumnailslider-nav0">
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/14-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/15-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/16-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/10-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/11-1.jpg" alt="">
                                                                        </div>
                                                                    </div>

                                                                    <div class="thumnailslider-nav col-cus-25 thumnailslider-nav0" data-asnavforfor=".thumnailslider-for0" data-vertical="true" data-autoplay="false" data-autoplayTimeout="6000" data-items="4" data-margin="0" data-nav="false" data-dots="false" data-loop="false"
                                                                         data-items_mobile="3">
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/14-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/15-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/16-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/10-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="item thumb-container">
                                                                            <img class="img-fluid" src="images/Home/common/11-1.jpg" alt="">
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="product-description col-xl-4 col-lg-5">

                                                                <div class="category-title"><a href="#">Electronics</a>
                                                                </div>


                                                                <div class="product-title" itemprop="name"><a href="#">Donec
                                                                        non lectus ac erat sedei</a></div>

                                                                <div class="product-comments">
                                                                    <div class="star_content">
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                        <div class="star"></div>
                                                                    </div>
                                                                    <span>0 review</span>
                                                                </div>
                                                                <p class="seller_name">
                                                                    <a title="View seller profile" href="#">
                                                                        <i class="fa fa-user"></i> David James
                                                                    </a>
                                                                </p>

                                                                <div class="product-groups" itemprop="offers" itemscope>
                                                                    <div class="product-group-price">

                                                                        <div class="product-price-and-shipping">



                                                                            <span itemprop="price" class="price">$37.05</span>



                                                                            <span class="regular-price">$39.00</span>




                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="product-buttons">
                                                                    <form action="" method="post">
                                                                        <input type="hidden" name="token" value="">
                                                                        <input type="hidden" name="id_product" value="7">
                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                class="novicon-cart"></i></a>
                                                                    </form>
                                                                    <a class="addToWishlist wishlistProd_7" href="#" data-rel="7" onclick="">
                                                                        <i class="fa fa-heart"></i>
                                                                        <span>Add to Wishlist</span>
                                                                    </a>
                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                        <i class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="nov-productlist productlist-liststyle-3 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-lg-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                ON SALE
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist228809710" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="20" data-dots="false" data-nav="true" data-items="1" data-items_large="2" data-items_tablet="2"
                                                     data-items_mobile="2">
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature  first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                sed sollicitudin mauris</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$25.00</span>





                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature " data-id-product="2" data-id-product-attribute="9" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Lorem
                                                                                ipsum dolor sit amet</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$43.20</span>



                                                                                <span class="regular-price">$48.00</span>




                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature  last_item" data-id-product="3" data-id-product-attribute="40" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Mauris
                                                                                molestie porttitor diam</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$69.00</span>





                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item  text-center">
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature  first_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$49.00</span>





                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature " data-id-product="5" data-id-product-attribute="64" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/8-2.jpg" alt="" data-full-size-image-url="images/Home/common/8-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Vehicula
                                                                                vel tempus sit amet ulte</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$15.00</span>





                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature  last_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="#" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-w73 no-padding">
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-comments">
                                                                            <div class="star_content">
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                                <div class="star"></div>
                                                                            </div>
                                                                            <span>0 review</span>
                                                                        </div>
                                                                        <p class="seller_name">
                                                                            <a title="View seller profile" href="#">
                                                                                <i class="fa fa-user"></i> David James
                                                                            </a>
                                                                        </p>




                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium</a>
                                                                        </div>

                                                                        <div class="product-group-price">

                                                                            <div class="product-price-and-shipping">



                                                                                <span itemprop="price" class="price">$25.00</span>





                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="block block-producttab producttab-rows    groupproduct-right" id="groupproducttab937980878">
                                            <div class="block-tab-title d-flex align-items-center justify-content-between">
                                                <h4 class="title_block">
                                                    SMARTPHONE
                                                </h4>

                                                <ul class="nav nav-tabs justify-content-center" role="tablist">

                                                    <li class="nav-item"><a href="#groupproducttab937980878newproducts" class="nav-link active" role="tab" data-toggle="tab">New
                                                            Arrivals</a></li>

                                                </ul>

                                            </div>

                                            <div class="main-product-content  row d-flex  flex-row-reverse ">

                                                <div class="block_content  col-lg-12 col-md-12 ">
                                                    <div class="product_tab_content tab-content">
                                                        <div class="" id="">
                                                            <div id="groupproducttab937980878-newproducts" class="product_list grid owl-carousel owl-theme" data-autoplay="false" data-autoplaytimeout="6000" data-loop="true" data-margin="30" data-dots="false" data-nav="true" data-items="3" data-items_large="1" data-items_tablet="2"
                                                                 data-items_mobile="2">
                                                                <div class="item  text-center">
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Nullam
                                                                                            sed sollicitudin
                                                                                            mauris</a></div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$25.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="1">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="2" data-id-product-attribute="9" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Lorem
                                                                                            ipsum dolor sit amet</a>
                                                                                    </div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$43.20</span>



                                                                                            <span class="regular-price">$48.00</span>




                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="2">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item  text-center">
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="3" data-id-product-attribute="40" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Mauris
                                                                                            molestie porttitor
                                                                                            diam</a></div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$69.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="3">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Maecenas
                                                                                            vulputate ligula vel</a>
                                                                                    </div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$49.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="4">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item  text-center">
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/13-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/12-1.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Vehicula
                                                                                            vel tempus sit amet
                                                                                            ulte</a></div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$15.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="5">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row last_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                                </a>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-w60 no-padding">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>


                                                                                    <div class="product-title" itemprop="name"><a href="#">Nullam
                                                                                            tempor </a></div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$25.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="6">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nov-image col-lg-12 col-md-12 effect-special">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/banner/banner-4.jpg" alt="banner2-5" title="banner2-5"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-xl-12 col-lg-12 col-md-12 col-xs-12">
                                        <div class="groupproductlist  ">
                                            <div class="block block-product clearfix">
                                                <h2 class="title_block">
                                                    AUDIO
                                                </h2>
                                                <div class="block_content">
                                                    <div class=" row d-flex">
                                                        <div class=" col-lg-12 col-md-12">
                                                            <div class="product-content">
                                                                <div id="groupproductlist94047333" class="product_list grid owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-dots="false" data-nav="true" data-margin="0" data-items="4" data-items_large="2" data-items_tablet="3"
                                                                     data-items_mobile="2">
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Smartphone
                                                                                        &amp; Tablet</a></div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Nullam
                                                                                        sed sollicitudin mauris</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$25.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="1">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="9" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Smartphone
                                                                                        &amp; Tablet</a></div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Lorem
                                                                                        ipsum dolor sit amet</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                                </a>


                                                                                <div class="product-flags discount">
                                                                                    Sale</div>


                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$43.20</span>



                                                                                            <span class="regular-price">$48.00</span>




                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="2">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="3" data-id-product-attribute="40" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Smartphone
                                                                                        &amp; Tablet</a></div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Mauris
                                                                                        molestie porttitor diam</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$69.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="3">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Electronics</a>
                                                                                </div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Maecenas
                                                                                        vulputate ligula vel</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$49.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="4">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Smartphone
                                                                                        &amp; Tablet</a></div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Vehicula
                                                                                        vel tempus sit amet ulte</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/13-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/12-1.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$15.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="5">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Electronics</a>
                                                                                </div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Nullam
                                                                                        tempor orci eu pretium</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$25.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="6">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="7" data-id-product-attribute="88" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Electronics</a>
                                                                                </div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Donec
                                                                                        non lectus ac erat sedei</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                                </a>


                                                                                <div class="product-flags discount">
                                                                                    Sale</div>


                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$37.05</span>



                                                                                            <span class="regular-price">$39.00</span>




                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="7">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_7" href="#" data-rel="7" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="8" data-id-product-attribute="100" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="#">Audio</a>
                                                                                </div>


                                                                                <div class="product-title" itemprop="name"><a href="#">Curabitur
                                                                                        in lorem sit ameten alt</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="#" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                                </a>




                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">



                                                                                            <span itemprop="price" class="price">$30.00</span>





                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="product-comments">
                                                                                        <div class="star_content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                        <span>0 review</span>
                                                                                    </div>
                                                                                    <p class="seller_name">
                                                                                        <a title="View seller profile" href="#">
                                                                                            <i class="fa fa-user"></i> David James
                                                                                        </a>
                                                                                    </p>

                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                                    <form action="" method="post" class="formAddToCart">
                                                                                        <input type="hidden" name="token" value="">
                                                                                        <input type="hidden" name="id_product" value="8">
                                                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                                class="novicon-cart"></i><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_8" href="#" data-rel="8" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nov-image col-lg-4 col-md-4 special-banner-1 mb-xs-15">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/banner/banner-mega-4.jpg" alt="banner2-6" title="banner2-6"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nov-image col-lg-4 col-md-4 special-banner-2 mb-xs-15">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/banner/banner-mega-5.jpg" alt="banner2-7" title="banner2-7"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nov-image col-lg-4 col-md-4 special-banner-3">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="#"> <img class="img-fluid" src="images/Home/banner/banner-mega-6.jpg" alt="banner2-8" title="banner2-8"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                                        <div class="block block-producttab   producttab-show-title" id="producttab209387596">
                                            <div class="block-tab-title d-flex align-items-center justify-content-between">
                                                <h4 class="title_block">
                                                    ELECTRONIC
                                                </h4>
                                                <ul class="nav nav-tabs justify-content-center nav-tab-right" role="tablist">
                                                    <li class="nav-item"><a href="#producttab209387596newproducts" class="nav-link active" role="tab" data-toggle="tab">New
                                                            Arrivals</a></li>
                                                    <li class="nav-item"><a href="#producttab209387596bestseller" class="nav-link" role="tab" data-toggle="tab">Best
                                                            Seller</a></li>
                                                    <li class="nav-item"><a href="#producttab209387596featured" class="nav-link" role="tab" data-toggle="tab">Featured</a></li>

                                                </ul>
                                            </div>
                                            <div class="block_content">
                                                <div class="product_tab_content tab-content">
                                                    <div class="tab-pane fade in active" id="producttab209387596newproducts">
                                                        <div id="producttab209387596-newproducts" class="product_list grid owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000" data-loop="true" data-margin="0" data-dots="false" data-nav="true" data-items="4" data-items_large="2" data-items_tablet="2"
                                                             data-items_mobile="2">
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                sed sollicitudin mauris</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$25.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="1">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="9" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Lorem
                                                                                ipsum dolor sit amet</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                        </a>


                                                                        <div class="product-flags discount">Sale
                                                                        </div>


                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$43.20</span>



                                                                                    <span class="regular-price">$48.00</span>




                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="2">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="3" data-id-product-attribute="40" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Mauris
                                                                                molestie porttitor diam</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$69.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="3">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$49.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="4">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Vehicula
                                                                                vel tempus sit amet ulte</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/13-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/12-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$15.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="5">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$25.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="6">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="producttab209387596bestseller">
                                                        <div id="producttab209387596-bestseller" class="product_list grid owl-carousel owl-theme" data-autoplay="true" data-autoplayTimeout="6000" data-loop="true" data-margin="0" data-dots="false" data-nav="true" data-items="4" data-items_large="2" data-items_tablet="2"
                                                             data-items_mobile="2">
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$49.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="4">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$25.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="6">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="8" data-id-product-attribute="100" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Audio</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Curabitur
                                                                                in lorem sit ameten alt</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$30.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="8">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_8" href="#" data-rel="8" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="10" data-id-product-attribute="116" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                lacinia metus posuere</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$45.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="10">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_10" href="#" data-rel="10" onclick="WishlistCart('wishlist_block_list', 'add', '10', false, 1); return false;">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="12" data-id-product-attribute="134" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Audio</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Proin
                                                                                placerat lacus eget auctor</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/4-1.jpg" alt="" data-full-size-image-url="images/Home/common/4-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/4-2.jpg" alt="" data-full-size-image-url="images/Home/common/4-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$30.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="12">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_12" href="#" data-rel="12" onclick="WishlistCart('wishlist_block_list', 'add', '12', false, 1); return false;">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="15" data-id-product-attribute="160" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Audio</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nunc
                                                                                tempus velit quis urnanb</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/9-1.jpg" alt="" data-full-size-image-url="images/Home/common/9-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/9-2.jpg" alt="" data-full-size-image-url="images/Home/common/9-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$35.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="15">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_15" href="#" data-rel="15" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="producttab209387596featured">
                                                        <div id="producttab209387596-featured" class="product_list grid owl-carousel owl-theme" data-autoplay="true" data-autoplayTimeout="6000" data-loop="true" data-margin="0" data-dots="false" data-nav="true" data-items="4" data-items_large="2" data-items_tablet="2"
                                                             data-items_mobile="2">
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="1" data-id-product-attribute="1" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                sed sollicitudin mauris</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/1-1.jpg" alt="" data-full-size-image-url="images/Home/common/1-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/1-2.jpg" alt="" data-full-size-image-url="images/Home/common/1-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$25.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="1">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="2" data-id-product-attribute="9" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Lorem
                                                                                ipsum dolor sit amet</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/2-1.jpg" alt="" data-full-size-image-url="images/Home/common/2-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/2-2.jpg" alt="" data-full-size-image-url="images/Home/common/2-2.jpg" width="270" height="360">
                                                                        </a>


                                                                        <div class="product-flags discount">Sale
                                                                        </div>


                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$43.20</span>



                                                                                    <span class="regular-price">$48.00</span>




                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="2">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="3" data-id-product-attribute="40" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Mauris
                                                                                molestie porttitor diam</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/3-1.jpg" alt="" data-full-size-image-url="images/Home/common/3-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/3-2.jpg" alt="" data-full-size-image-url="images/Home/common/3-2.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$69.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="3">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="4" data-id-product-attribute="52" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Maecenas
                                                                                vulputate ligula vel</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/8-1.jpg" alt="" data-full-size-image-url="images/Home/common/8-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/11-1.jpg" alt="" data-full-size-image-url="images/Home/common/11-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$49.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="4">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="5" data-id-product-attribute="64" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Smartphone
                                                                                &amp; Tablet</a></div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Vehicula
                                                                                vel tempus sit amet ulte</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/13-1.jpg" alt="" data-full-size-image-url="images/Home/common/13-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/12-1.jpg" alt="" data-full-size-image-url="images/Home/common/12-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$15.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="5">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item  text-center">
                                                                <div class="product-miniature js-product-miniature item-two first_item" data-id-product="6" data-id-product-attribute="76" itemscope>
                                                                    <div class="product-cat-content">

                                                                        <div class="category-title"><a href="#">Electronics</a>
                                                                        </div>


                                                                        <div class="product-title" itemprop="name">
                                                                            <a href="#">Nullam
                                                                                tempor orci eu pretium</a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="thumbnail-container">

                                                                        <a href="#" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="images/Home/common/15-1.jpg" alt="" data-full-size-image-url="images/Home/common/15-1.jpg" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="images/Home/common/16-1.jpg" alt="" data-full-size-image-url="images/Home/common/16-1.jpg" width="270" height="360">
                                                                        </a>




                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-group-price">

                                                                                <div class="product-price-and-shipping">



                                                                                    <span itemprop="price" class="price">$25.00</span>





                                                                                </div>

                                                                            </div>
                                                                            <div class="product-comments">
                                                                                <div class="star_content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                                <span>0 review</span>
                                                                            </div>
                                                                            <p class="seller_name">
                                                                                <a title="View seller profile" href="#">
                                                                                    <i class="fa fa-user"></i> David James
                                                                                </a>
                                                                            </p>

                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-start" itemprop="offers" itemscope>
                                                                            <form action="" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token" value="">
                                                                                <input type="hidden" name="id_product" value="6">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i
                                                                                        class="novicon-cart"></i><span>Add
                                                                                            to cart</span></a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_6" href="#" data-rel="6" onclick="">
                                                                                <i class="fa fa-heart"></i>
                                                                                <span>Add to Wishlist</span>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-search"></i><span>
                                                                                        Quick view</span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
