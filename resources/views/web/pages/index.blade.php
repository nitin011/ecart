@extends('web.layout.app')
@section('title','Home')
@section('page','index')
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
                                    @if(!$cleaning_household->isEmpty())
                                        @php
                                            $households=[];
                                            foreach($cleaning_household as $cleaning){
                                                foreach ($cleaning->variants as $variant){
                                                    $households[]= $variant;
                                                }
                                            }
                                        @endphp
                                    <div class="nov-productlist productlist-liststyle-3 col-xl-12 col-lg-12 col-md-12 col-xs-12 ">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                Cleaning <br>& Household
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist106970551" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="2"
                                                     data-items_mobile="1">
                                                    <div class="item  text-center">
                                                        @php
                                                            $count=0
                                                        @endphp
                                                    @foreach($households as $household)

                                                            <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature  {{ $count ==0?'first_item': ($count==3?'last_item':'') }}" data-id-product="{{$household->varient_id}}" data-id-product-attribute="{{$household->product_id}}" itemscope>
                                                                <div class="col-12 col-w37 no-padding">
                                                                    <div class="thumbnail-container">
                                                                        <a href="{{ route('customer.product.show',$household->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                            <img class="img-fluid image-cover" src="{{$household->varient_image_url}}" alt="" data-full-size-image-url="{{$household->varient_image_url}}" width="270" height="360">
                                                                            <img class="img-fluid image-secondary" src="{{$household->product_image_url}}" alt="" data-full-size-image-url="{{$household->product_image_url}}" width="270" height="360">
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
                                                                                <a href="{{ route('customer.product.show',$household->varient_id) }}" title="{{$household->product->product_name}}">{{ \Illuminate\Support\Str::limit($household->product->product_name,30) }}</a>
                                                                            </div>

                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $household->price }}</span>
                                                                                    <span class="regular-price">{{ $currency->currency_sign }} {{ $household->mrp }}</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php $count++ @endphp
                                                        @if($loop->iteration % 4 ==0)
                                                                @php $count = 0 @endphp
                                                    </div>
                                                                <div class="item  text-center">
                                                        @endif
                                                    @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                        @if(!$beauty_and_hygiene->isEmpty())
                                            @php
                                                $beauties=[];
                                                foreach($beauty_and_hygiene as $beauty){
                                                    foreach ($beauty->variants as $variant){
                                                        $beauties[]= $variant;
                                                    }
                                                }
                                            @endphp

                                    <div class="nov-productlist     productlist-liststyle-3  col-xl-12 col-lg-12 col-md-12 col-xs-12 ">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                Beauty and <br>Hygiene
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist7894997" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="0" data-dots="false" data-nav="true" data-items="1" data-items_large="1" data-items_tablet="2"
                                                     data-items_mobile="1">
                                                    <div class="item  text-center">
                                                        @php
                                                            $count=0
                                                        @endphp
                                                        @foreach($beauties as $beauty)

                                                        <div class="d-flex flex-wrap align-items-start product-miniature js-product-miniature {{ $count ==0?'first_item': ($count==3?'last_item':'') }}" data-id-product="{{$beauty->varient_id}}" data-id-product-attribute="{{$beauty->product_id}}" itemscope>
                                                            <div class="col-12 col-w37 no-padding">
                                                                <div class="thumbnail-container">
                                                                    <a href="{{ route('customer.product.show',$beauty->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="{{$beauty->varient_image_url}}" alt="" data-full-size-image-url="{{$beauty->varient_image_url}}" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="{{$beauty->product_image_url}}" alt="" data-full-size-image-url="{{$beauty->product_image_url}}" width="270" height="360">
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
                                                                            <a href="{{ route('customer.product.show',$beauty->varient_id) }}" title="{{$beauty->product->product_name}}">{{ \Illuminate\Support\Str::limit($beauty->product->product_name,30) }}</a>
                                                                        </div>
                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $beauty->price }}</span>
                                                                                <span class="regular-price">{{ $currency->currency_sign }} {{ $beauty->mrp }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            @php $count++ @endphp
                                                            @if($loop->iteration % 4 ==0 && count($beauties) != $loop->iteration)
                                                                @php $count = 0 @endphp
                                                    </div>
                                                    <div class="item  text-center">
                                                        @endif
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        @endif

                                </div>

                            </div>
                            <div class="nov-row page-home-right col-lg-cus-10 col-lg-9 col-xs-12">
                                <div class="nov-row-wrap row">
                                    @foreach($snack_store_banner as $banner)
                                    <div class="nov-image col-lg-6 col-md-6 mb-xs-30">
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="effect">
                                                    <a href="{{!is_null($banner->button_route)?route($banner->button_route):'javascript:void(0)'}}"> <img class="img-fluid" src="{{ asset($banner->banner_image) }}" alt="{{ $banner->banner_name }}" title="{{ $banner->banner_name }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                                                                        <a class="add-to-cart" href="#" data-button-action=""><img src="{{ asset('user/images/icons/cart.svg') }}" style="width:20px; height:40px; margin:auto;" alt=""/></a>
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
                                                                        <a class="add-to-cart" href="#" data-button-action=""><img src="{{ asset('user/images/icons/cart.svg') }}" style="width:20px; height:40px; margin:auto;" alt=""/></a>
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
                                        @if(!$home_kitchen->isEmpty())
                                    @php
                                        $kitchens=[];
                                        foreach($home_kitchen as $product){
                                            foreach($product->variants as $variant){
                                                        $kitchens[]=$variant;
                                            }
                                        }
                                        $count=0;
                                    @endphp
                                    <div class="nov-productlist productlist-liststyle-3 col-xl-4 col-lg-4 col-md-4 col-xs-12 col-lg-12 col-md-12">
                                        <div class="block block-product clearfix">
                                            <h2 class="title_block">
                                                Home & Kitchen
                                            </h2>
                                            <div class="block_content">
                                                <div id="productlist228809710" class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplaytimeout="6000" data-loop="false" data-margin="20" data-dots="false" data-nav="true" data-items="1" data-items_large="2" data-items_tablet="2"
                                                     data-items_mobile="2">
                                                    <div class="item  text-center">
                                                        @foreach($kitchens as $kitchen)
                                                        <div class="d-flex flex-wrap align-items-start product-miniature item-three js-product-miniature  {{ $count ==0?'first_item': ($count==2?'last_item':'') }}" data-id-product="{{$kitchen->varient_id}}" data-id-product-attribute="{{$kitchen->product_id}}" itemscope>
                                                            <div class="col-12 col-w27 no-padding">
                                                                <div class="thumbnail-container">

                                                                    <a href="{{ route('customer.product.show',$kitchen->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                        <img class="img-fluid image-cover" src="{{$kitchen->varient_image_url}}" alt="" data-full-size-image-url="{{$kitchen->varient_image_url}}" width="270" height="360">
                                                                        <img class="img-fluid image-secondary" src="{{$kitchen->product_image_url}}" alt="" data-full-size-image-url="{{$kitchen->product_image_url}}" width="270" height="360">
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
                                                                            <a href="{{ route('customer.product.show',$kitchen->varient_id) }}" title="{{$kitchen->product->product_name}}">{{ \Illuminate\Support\Str::limit($kitchen->product->product_name,30) }}</a>
                                                                        </div>

                                                                        <div class="product-group-price">
                                                                            <div class="product-price-and-shipping">
                                                                                <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $kitchen->price }}</span>
                                                                                <span class="regular-price">{{ $currency->currency_sign }} {{ $kitchen->mrp }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            @php $count++ @endphp
                                                            @if($loop->iteration % 3 ==0)
                                                                @php $count = 0 @endphp
                                                    </div>
                                                    <div class="item  text-center">
                                                        @endif
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endif
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="block block-producttab producttab-rows    groupproduct-right" id="groupproducttab937980878">
                                            <div class="block-tab-title d-flex align-items-center justify-content-between">
                                                <h4 class="title_block">
                                                    Trending Products
                                                </h4>

                                                <ul class="nav nav-tabs justify-content-center" role="tablist">

                                                    <li class="nav-item"><a href="{{ route('customer.products.by-slug','trending_products') }}" class="nav-link active" role="tab" data-toggle="tab">See All</a></li>

                                                </ul>

                                            </div>

                                            <div class="main-product-content  row d-flex  flex-row-reverse ">

                                                <div class="block_content  col-lg-12 col-md-12 ">
                                                    <div class="product_tab_content tab-content">
                                                        <div class="" id="">
                                                            <div id="groupproducttab937980878-newproducts" class="product_list grid owl-carousel owl-theme" data-autoplay="true" data-autoplaytimeout="6000" data-loop="true" data-margin="30" data-dots="false" data-nav="true" data-items="3" data-items_large="1" data-items_tablet="2"
                                                                 data-items_mobile="2">

                                                                <div class="item  text-center">
                                                                    @php
                                                                        $trendings=[];
                                                                        foreach($trending_products as $product){
                                                                            foreach($product->variants as $key => $variant){
                                                                                $trendings[]= $variant;
                                                                            }
                                                                        }
                                                                    @endphp
                                                                    @foreach($trendings as $key => $variant)


                                                                    <div class="d-flex flex-wrap align-items-center product-miniature js-product-miniature item-row {{ $loop->iteration % 2 == 0 ? 'last_item' : 'first_item' }}" data-id-product="{{$variant->varient_id}}" data-id-product-attribute="{{$variant->product_id}}" itemscope>
                                                                        <div class="col-12 col-w40 pl-0">
                                                                            <div class="thumbnail-container">

                                                                                <a href="{{ route('customer.product.show',$variant->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="{{ $variant->varient_image_url }}" alt="" data-full-size-image-url="{{ $variant->varient_image_url }}" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="{{ $variant->product->product_image_url }}" alt="" data-full-size-image-url="{{ $variant->product->product_image_url }}" width="270" height="360">
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


                                                                                    <div class="product-title" itemprop="name"><a href="{{ route('customer.product.show',$variant->varient_id) }}" title="{{$variant->product->product_name}}">{{ \Illuminate\Support\Str::limit($variant->product->product_name,30) }}</a></div>

                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">
                                                                                            <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $variant->price }}</span>
                                                                                            <span class="regular-price">{{ $currency->currency_sign }} {{ $variant->mrp }}</span>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex justify-content-center" itemprop="offers" itemscope>
                                                                                    <form action="{{ route('customer.cart.add') }}" method="post" class="formAddToCart">
                                                                                        @csrf
                                                                                        <input type="hidden" name="variant_id" value="{{ $variant->varient_id }}">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <a class="add-to-cart" href="javascript:void(0)" data-button-action=""><img src="{{ asset('user/images/icons/cart.svg') }}" style="width:20px; height:40px; margin:auto;" alt=""/><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>

                                                                                    <a class="addToWishlist wishlistProd_1" href="javascript:void(0)" data-rel="1" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="javascript:void(0)" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        @if($loop->iteration % 2 == 0 && count($trendings) != $loop->iteration)
                                                                </div>
                                                                <div class="item  text-center">
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        @if(!$fruits_and_vegetables->isEmpty())
                                    <div class=" col-xl-12 col-lg-12 col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="block block-product clearfix">
                                                <h2 class="title_block">
                                                    Fruits and Vegetable Corner
                                                </h2>
                                                @php
                                                    $fruits=[];
                                                    foreach($fruits_and_vegetables as $product){
                                                    foreach($product->variants as $variant){
                                                        $fruits[]=$variant;
                                                    }
                                                    }
                                                @endphp
                                                <div class="block_content">
                                                    <div class=" row d-flex">
                                                        <div class=" col-lg-12 col-md-12">
                                                            <div class="product-content">
                                                                <div id="groupproductlist94047333" class="product_list grid owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-dots="false" data-nav="true" data-margin="0" data-items="4" data-items_large="2" data-items_tablet="3"
                                                                     data-items_mobile="2">
                                                                    @foreach($fruits as $fruit)
                                                                    <div class="item  text-center">
                                                                        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="{{ $fruit->varient_id }}" data-id-product-attribute="{{ $fruit->product_id }}" itemscope>
                                                                            <div class="product-cat-content">

                                                                                <div class="category-title"><a href="{{ route('customer.products.by-category',$fruit->product->cat_id) }}">{{ $fruit->product->category->title }}</a></div>


                                                                                <div class="product-title" itemprop="name"><a href="{{ route('customer.product.show',$fruit->varient_id) }}" title="{{$fruit->product->product_name}}">{{ \Illuminate\Support\Str::limit($fruit->product->product_name,30) }}</a>
                                                                                </div>

                                                                            </div>
                                                                            <div class="thumbnail-container">

                                                                                <a href="{{ route('customer.product.show',$fruit->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                                    <img class="img-fluid image-cover" src="{{ $fruit->varient_image_url }}" alt="" data-full-size-image-url="{{ $fruit->varient_image_url }}" width="270" height="360">
                                                                                    <img class="img-fluid image-secondary" src="{{ $fruit->product->product_image_url }}" alt="" data-full-size-image-url="{{ $fruit->product->product_image_url }}" width="270" height="360">
                                                                                </a>
                                                                            </div>
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-group-price">

                                                                                        <div class="product-price-and-shipping">
                                                                                            <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $fruit->price }}</span>
                                                                                            <span class="regular-price">{{ $currency->currency_sign }} {{ $fruit->mrp }}</span>
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
                                                                                    <form action="{{ route('customer.cart.add') }}" method="post" class="formAddToCart">
                                                                                        @csrf
                                                                                        <input type="hidden" name="variant_id" value="{{ $variant->varient_id }}">
                                                                                        <input type="hidden" name="quantity" value="1">
                                                                                        <a class="add-to-cart" href="javascript:void(0)" data-button-action=""><img src="{{ asset('user/images/icons/cart.svg') }}" style="width:20px; height:40px; margin:auto;" alt=""/><span>Add
                                                                                                    to cart</span></a>
                                                                                    </form>
                                                                                    <a class="addToWishlist wishlistProd_1" href="javascript:void(0)" data-rel="1" onclick="">
                                                                                        <i class="fa fa-heart"></i>
                                                                                        <span>Add to Wishlist</span>
                                                                                    </a>
                                                                                    <a href="javascript:void(0)" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endif

                                        @foreach($drinks_beverages as $drink)
                                            <div class="nov-image col-lg-4 col-md-4 special-banner-1 mb-xs-15">
                                                <div class="block">
                                                    <div class="block_content">
                                                        <div class="effect">
                                                            <a href="{{ !is_null($banner->button_route)?$drink->button_route:'javascript:void(0)'}}"> <img class="img-fluid" src="{{ $drink->banner_image }}" alt="{{ $banner->banner_name }}" title="{{ $banner->banner_name }}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        @if(!$daily_staples->isEmpty())
                                            <div class=" col-xl-12 col-lg-12 col-md-12 col-xs-12">
                                                <div class="groupproductlist">
                                                    <div class="block block-product clearfix">
                                                        <h2 class="title_block">
                                                            Your Daily Staples
                                                        </h2>
                                                        @php
                                                            $variants=[];
                                                            foreach($daily_staples as $product){
                                                            foreach($product->variants as $variant){
                                                                $variants[]=$variant;
                                                            }
                                                            }
                                                        @endphp
                                                        <div class="block_content">
                                                            <div class=" row d-flex">
                                                                <div class=" col-lg-12 col-md-12">
                                                                    <div class="product-content">
                                                                        <div id="groupproductlist94047333" class="product_list grid owl-carousel owl-theme" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-dots="false" data-nav="true" data-margin="0" data-items="4" data-items_large="2" data-items_tablet="3"
                                                                             data-items_mobile="2">
                                                                            @foreach($variants as $variant)
                                                                                <div class="item  text-center">
                                                                                    <div class="product-miniature js-product-miniature item-two first_item" data-id-product="{{ $variant->varient_id }}" data-id-product-attribute="{{ $variant->product_id }}" itemscope>
                                                                                        <div class="product-cat-content">

                                                                                            <div class="category-title"><a href="{{ route('customer.products.by-category',$variant->product->cat_id) }}">{{ $variant->product->category->title }}</a></div>
                                                                                            <div class="product-title" itemprop="name"><a href="{{ route('customer.product.show',$variant->varient_id) }}" title="{{$variant->product->product_name}}">{{ \Illuminate\Support\Str::limit($variant->product->product_name,30) }}</a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="thumbnail-container">

                                                                                            <a href="{{ route('customer.product.show',$variant->varient_id) }}" class="thumbnail product-thumbnail two-image">
                                                                                                <img class="img-fluid image-cover" src="{{ $variant->varient_image_url }}" alt="" data-full-size-image-url="{{ $variant->varient_image_url }}" width="270" height="360">
                                                                                                <img class="img-fluid image-secondary" src="{{ $variant->product->product_image_url }}" alt="" data-full-size-image-url="{{ $variant->product->product_image_url }}" width="270" height="360">
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="product-description">
                                                                                            <div class="product-groups">
                                                                                                <div class="product-group-price">

                                                                                                    <div class="product-price-and-shipping">
                                                                                                        <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $variant->price }}</span>
                                                                                                        <span class="regular-price">{{ $currency->currency_sign }} {{ $variant->mrp }}</span>
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
                                                                                                <form action="{{ route('customer.cart.add') }}" method="post" class="formAddToCart">
                                                                                                    @csrf
                                                                                                    <input type="hidden" name="variant_id" value="{{ $variant->varient_id }}">
                                                                                                    <input type="hidden" name="quantity" value="1">
                                                                                                    <a class="add-to-cart" href="javascript:void(0)" data-button-action=""><img src="{{ asset('user/images/icons/cart.svg') }}" style="width:20px; height:40px; margin:auto;" alt=""/><span>Add
                                                                                                    to cart</span></a>
                                                                                                </form>
                                                                                                <a class="addToWishlist wishlistProd_1" href="javascript:void(0)" data-rel="1" onclick="">
                                                                                                    <i class="fa fa-heart"></i>
                                                                                                    <span>Add to Wishlist</span>
                                                                                                </a>
                                                                                                <a href="javascript:void(0)" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                                    <i class="fa fa-search"></i><span>
                                                                                                Quick view</span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
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
