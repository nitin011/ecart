@extends('customer.layouts.master')
@section('title','Home')
@section('content')
    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @include('customer.layouts.partials.flash_messages')
                </div>
                <div id="carouselHero" class="carousel mb-5 slide w-100" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($home_slider_banners as $banner)
                            <div class="carousel-item {{ $loop->first?'active':null }}">
                                <img class="d-block w-100 img-fluid"
                                     src="{{ assetUrl($banner->banner_image) }}" alt="{{ $banner->banner_name }}">
                                <div class="carousel-caption d-md-block">
                                    <h1>{{ $banner->sub_title }}</h1>
                                    <h2>{{ $banner->banner_name }}</h2>
                                    <p>{{ $banner->slogan }}</p>
                                    <div class="slide-btn small-btn">
                                        <a class="see-all-btn"
                                           href="{{ route($banner->button_route) }}">{{ $banner->button_title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev btn" href="#carouselHero" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next btn" href="#carouselHero" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- trending products section -->
    <section class="trending-products-section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-12 mb-2">
                    <div class="w-75 float-left">
                        <h2>Trending Products</h2>
                    </div>
                    <a class="see-all-btn float-right btn"
                       href="{{ route('customer.products.by-slug','trending_products') }}">See
                        All</a>
                </div>
                <div class="col-md-4 text-right">

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="trending-products-all">
                        @foreach($trending_products as $product)
                            @if($loop->iteration ==5)
                                @break;
                            @endif
                            @foreach($product->variants as $variant_key =>$variant)
                                <div class="trending-product-single">
                                    <div class="trending-single-img text-center product-image">
                                        <img src="{{ $product->product_image_url }}">
                                        @if($product->variants[0]->mrp-$product->variants[0]->price != 0)
                                            <div
                                                class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                                Off
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-description border-0">
                                        <h4 class="product_name">
                                            <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                                                {{ \Illuminate\Support\Str::limit($product->product_name,30) }}
                                            </a>
                                        </h4>
                                        <p>
                                            {{ is_null($product->variants[0]->short_description)??substr($product->variants[0]->short_description,0,45) }}
                                        </p>
                                        <div class="price">
                                        <span
                                            class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                            <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                        </div>
                                        <a class="btn add-btn add-btn-custom add-single-item-in-cart"
                                           data-item-id="{{ $product->variants[0]->varient_id }}">
                                            Add
                                            <div class="home-add-btn">
                                                <img src="{{ assetUrl('theme/images/plus-white.png') }}">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @if($variant_key ==0)
                                    @break;
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- snack store -->
    <section class="snack-store-section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-12 my-2">
                    <div class="w-75 float-left">
                        <h2>Snack Store </h2>
                    </div>
                    {{--<a class="see-all-btn float-right btn"
                       href="{{ route('customer.products.by-slug','snack_store_banner') }}">See
                        All</a>--}}
                </div>
            </div>

            <div class="row mt-5">
                @foreach($snack_store_banner as $banner)
                    <div class="col-md-6">
                        <div class="left-bg" style="background-image: url({{ assetUrl($banner->banner_image) }});">
                            <h5>{{ $banner->banner_name }}</h5>
                            @if(!is_null($banner->button_route))
                                <a class="see-all-btn" href="{{ route($banner->button_route) }}">
                                    {{ $banner->button_title }}
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(!$fruits_and_vegetables->isEmpty())

        <section class="product-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="w-75 float-left">
                            <h2>Fruits and Vegetable Corner</h2>
                        </div>
                        <a href="{{ route('customer.products.by-category',$fruits_and_vegetables[0]->cat_id) }}"
                           class="see-all-btn float-right btn">
                            See All
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="all-product-list">
                            <div class="row">
                                @foreach($fruits_and_vegetables as $product)
                                    <div class="col-md-3">
                                        <div class="product-single w-auto m-height-300">
                                            <div class="product-single-img product-image">
                                                <img src="{{ $product->product_image_url }}"
                                                     class="img-thumbnail border-0">
                                                @if($product->variants[0]->mrp-$product->variants[0]->price != 0)
                                                    <div
                                                        class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                                        Off
                                                    </div>
                                                @endif
                                                {{--<div class="like-content"><img
                                                        src="{{ assetUrl('theme/images/heart.png') }}">
                                                </div>--}}
                                            </div>
                                            <div class="product-description border-0">
                                                <p>Available(In Stock)</p>
                                                <h4 class="product_name">
                                                    <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ \Illuminate\Support\Str::limit($product->product_name,30) }}</a>
                                                </h4>
                                                <div class="price">
                                                        <span
                                                            class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                                    <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
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
        </section>
    @endif
    {{-- @if(!$fruits_and_vegetables->isEmpty())
         <!-- fruits and vegetables section -->
         <section>
             <div class="container">
                 <div class="row border-bottom">
                     <div class="col-md-12 mb-2">
                         <div class="w-75 float-left">
                             <h2>Fruits and Vegetable Corner</h2>
                         </div>
                         <a href="{{ route('customer.products.by-category',$fruits_and_vegetables[0]->cat_id) }}"
                            class="see-all-btn float-right btn">
                             See All
                         </a>
                     </div>
                 </div>
                 <div class="row">
                     @foreach($fruits_and_vegetables as $product)
                         @if($loop->iteration ==5)
                             @break;
                         @endif
                         <div class="col-md-3">
                             <div class="product-single w-auto m-height-300 border p-2 mt-3">
                                 <div class="product-single-img">
                                     <img src="{{ $product->product_image_url) }}" class="img-thumbnail border-0"
                                         --}}{{--class="product-card-img"--}}{{-->
                                     <div
                                         class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                         Off
                                     </div>
                                     --}}{{--<div class="like-content"><img
                                             src="{{ assetUrl('theme/images/heart.png') }}">
                                     </div>--}}{{--
                                 </div>
                                 <div class="product-description border-0">
                                     <p>Available(In Stock)</p>
                                     <h4 class="product_name">
                                         <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ \Illuminate\Support\Str::limit($product->product_name,30) }}</a>
                                     </h4>
                                     <div class="price">
                                                         <span
                                                             class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                         <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                     </div>
                                     <div class="bottom-product">
                                         <input type="hidden" name="variant_id"
                                                value="{{ $product->variants[0]->varient_id }}">
                                         <div class="left-content">
                                             <a class="minus-btn btn">
                                                 <img src="{{ assetUrl('theme/images/minus.png') }}">
                                             </a>
                                             <input type="hidden" name="quantity" value="1">
                                             <span class="quantity">1</span>
                                             <a class="plus-btn btn">
                                                 <img
                                                     src="{{ assetUrl('theme/images/plus-white.png') }}">
                                             </a>
                                         </div>
                                         <div class="right-content">
                                             <a class="btn shopping-cart-btn">
                                                 <img src="{{ assetUrl('theme/images/shopping-cart.svg') }}">
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>
     @endif--}}

    @if(!$daily_staples->isEmpty())
        <!-- your daily staples -->
        <section class="daily-staples-section">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-md-12 mb-2">
                        <div class="w-75 float-left">
                            <h2>Your Daily Staples</h2>
                        </div>
                        <a class="see-all-btn float-right btn"
                           href="{{ route('customer.products.by-slug',$daily_staples[0]->category->slug) }}">See
                            All</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="daily-staples-products-all">
                            @foreach($daily_staples as $product)
                                @if($loop->iteration ==5)
                                    @break;
                                @endif
                                <div class="daily-staples-product-single">
                                    <div class="daily-staples-single-img product-image">
                                        <img src="{{ $product->product_image_url }}">
                                        @if($product->variants[0]->mrp-$product->variants[0]->price)
                                            <div
                                                class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                                Off
                                            </div>
                                        @endif
                                    </div>

                                    <div class="product-description border-0">
                                        <h4 class="product_name">
                                            <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                                                {{ \Illuminate\Support\Str::limit($product->product_name,30) }}
                                            </a>
                                        </h4>
                                        <p>
                                            {{ is_null($product->variants[0]->short_description)??substr($product->variants[0]->short_description,0,45) }}
                                        </p>
                                        <div class="price">
                                        <span
                                            class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                            <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- drink and beverage section -->
    <section class="drink-and-beverage-store-section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-8">
                    <div class="section-title-content">
                        <h2>Drinks & Beverages</h2>
                    </div>
                </div>
                {{--<div class="col-md-4 text-right">
                    <a class="see-all-btn" href="{{ route('customer.products.by-slug','drinks_beverages') }}">See
                        All</a>
                </div>--}}
            </div>

            <div class="row">
                @foreach($drinks_beverages as $banner)
                    <div class="col-md-6">
                        <div class="left-bg" style="background-image:url({{ $banner->banner_image }});">
                            <h5>{{ $banner->banner_name }}</h5>
                            @if(!is_null($banner->button_route))
                                <div class="text-right">
                                    <a class="see-all-btn"
                                       href="{{ route($banner->button_route) }}">{{ $banner->button_title }}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    @if(!$cleaning_household->isEmpty())
        <!-- cleaning and household -->
        <section class="cleaning-staples-section">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-md-12 mb-2">
                        <div class="float-left w-75">
                            <h2>Cleaning & Household</h2>
                        </div>
                        <a class="see-all-btn float-right btn"
                           href="{{ route('customer.products.by-slug',$cleaning_household[0]->category->slug) }}">
                            See All
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="cleaning-products-all">
                            @foreach($cleaning_household as $product)
                                @if($loop->iteration ==5)
                                    @break;
                                @endif
                                @foreach($product->variants as $variant_key=> $variant)
                                    <div class="cleaning-product-single">
                                        <div class="cleaning-single-img">
                                            <img src="{{ $product->product_image_url }}">
                                            @if($variant->mrp-$variant->price != 0)
                                                <div
                                                    class="percentage-off-content">{{ formatPrice( $variant->mrp-$variant->price) }}
                                                    off
                                                </div>
                                            @endif
                                        </div>
                                        <div class="product-description border-0">
                                            <h4 class="product_name">
                                                <a href="{{ route('customer.product.show',$variant->varient_id) }}">
                                                    {{ \Illuminate\Support\Str::limit($product->product_name,30) }}
                                                </a>
                                            </h4>
                                            <p>
                                                {{ is_null($variant->short_description)??substr($variant->short_description,0,45) }}
                                            </p>
                                            <div class="price">
                                        <span
                                            class="text-green">{{ $currency->currency_sign }} {{ $variant->price }}</span>
                                                <span><del>{{ $currency->currency_sign }} {{ $variant->mrp }}</del></span>
                                            </div>
                                        </div>
                                    </div>
                                    @if($variant_key == 0)
                                        @break
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(!$beauty_and_hygiene->isEmpty())
        <!-- beauty and hygenie -->
        <section class="beauty-and-hygiene-section">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-md-12 mb-2">
                        <div class="w-75 float-left">
                            <h2>Beauty and Hygiene</h2>
                        </div>
                        <a class="see-all-btn float-right btn"
                           href="{{ route('customer.products.by-slug',$beauty_and_hygiene[0]->category->slug) }}">
                            See All
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="beauty-and-hygiene-products-all">
                            @foreach($beauty_and_hygiene as $product)
                                @if($loop->iteration ==5)
                                    @break;
                                @endif
                                <div class="beauty-and-hygiene-product-single">
                                    <div class="beauty-and-hygiene-single-img">
                                        <img src="{{ $product->product_image_url }}">
                                        @if($product->variants[0]->mrp-$product->variants[0]->price != 0)
                                            <div
                                                class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                                Off
                                            </div>
                                        @endif
                                    </div>
                                    <div class="product-description border-0">
                                        <h4 class="product_name">
                                            <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                                                {{ \Illuminate\Support\Str::limit($product->product_name,30) }}
                                            </a>
                                        </h4>
                                        <p>
                                            {{ is_null($product->variants[0]->short_description)??substr($product->variants[0]->short_description,0,45) }}
                                            ...
                                        </p>
                                        <div class="price">
                                        <span
                                            class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                            <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- cleaning and household -->
    @if(!$home_kitchen->isEmpty())
        <section class="home-and-kitchen-section">
            <div class="container">
                <div class="row border-bottom">
                    <div class="col-md-12 mb-2">
                        <div class="w-75 float-left">
                            <h2>Home & Kitchen- up to 60% off</h2>
                        </div>
                        <a class="see-all-btn float-right btn"
                           href="{{ route('customer.products.by-slug',$home_kitchen[0]->category->slug) }}">See All</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="home-and-kitchen-products-all">
                            @foreach($home_kitchen as $product)
                                @if($loop->iteration == 5)
                                    @break;
                                @endif
                                <div class="home-and-kitchen-product-single">
                                    <div class="home-and-kitchen-single-img">
                                        <img src="{{ $product->product_image_url }}">
                                        @if($product->variants[0]->mrp-$product->variants[0]->price != 0)
                                            <div class="percentage-off-content">
                                                {{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                                Off
                                            </div>
                                        @endif
                                    </div>

                                    <div class="product-description border-0">
                                        <h4 class="product_name">
                                            <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                                                {{ \Illuminate\Support\Str::limit($product->product_name,30) }}
                                            </a>
                                        </h4>
                                        <p>T
                                            {{ is_null($product->variants[0]->short_description)??substr($product->variants[0]->short_description,0,45).'...' }}
                                        </p>
                                        <div class="price">
                                        <span
                                            class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                                            <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- about section -->
    <section class="about-us-ee">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-8">
                    <div class="section-title-content">
                        <h2>ee - Online grocery store</h2>
                    </div>
                </div>
                <div class="col-md-4 text-right">

                </div>
            </div>

            <div class="row content-about">
                <div class="col-md-12 padding-about-us-right">
                    <h2 class="fontsize">ee &ndash; online grocery store</h2>
                    <p class="text-justify">Did you ever imagine that the freshest of<strong><a
                                href="{{ env('APP_URL') }}">&nbsp;fruits and
                                vegetables</a></strong>, top quality pulses and food grains,&nbsp;<strong><a
                                href="{{ env('APP_URL') }}">
                                dairy products</a></strong>&nbsp;and hundreds of branded items could be handpicked and
                        delivered to your home, all at the click of a button? London&rsquo;s first comprehensive online
                        megastore, ee.com, brings a whopping 2000+ products with more than 1000 brands, to over 4
                        million happy customers. From household cleaning products to beauty and makeup, ee has
                        everything you need for your daily needs. ee.com is convenience personified We&rsquo;ve
                        taken away all the stress associated with shopping for daily essentials, and you can now order
                        all your household products and even buy groceries online without travelling long distances or
                        standing in serpentine queues. Add to this the convenience of finding all your requirements at
                        one single source, along with great savings, and you will realize that ee- London&rsquo;s
                        largest online supermarket, has revolutionized the way London shops for groceries. Online
                        grocery
                        shopping has never been easier. Need things fresh? Whether it&rsquo;s fruits and vegetables or
                        dairy and meat, we have this covered as well Hassle-free Home Delivery options</p>
                    <p>We deliver to 25 cities across London and maintain excellent delivery times, ensuring that all
                        your products from groceries to snacks&nbsp;<strong><a
                                href="{{ env('APP_URL') }}">branded foods</a></strong>&nbsp;reach
                        you in time.</p>
                    <ul>
                        <li>ee Specialty stores: Missed out on buying that essential item from your favorite
                            neighborhood store for tonight&rsquo;s party? We&rsquo;ll deliver it for you! From bakery,
                            sweets, verified by us.
                        </li>
                    </ul>

                    {{--<div class="learn-more-btn-box">
                        <a class="see-all-btn" href="#">Learn More</a>
                    </div>--}}
                </div>
                <div class="col-md-5">
                    <div class="single-histry-one">
                        {{--<img src="{{ assetUrl('theme/images/about/bg-back.jpg') }}" alt="Store">
                        <div class="store-img-two">
                            <img src="{{ assetUrl('theme/images/about/bg-front.jpg') }}" alt="Store">
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- brand store -->
    <section class="brand-store-section">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-8">
                    <div class="section-title-content">
                        <h2>Brand store</h2>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="brand-store-products-all">
                        <div class="brand-store-product-single">
                            <div class="brand-store-single-img">
                                <img src="{{ assetUrl('theme/images/brand-store/1.jpg') }}">
                            </div>
                        </div>

                        <!-- second -->
                        <div class="brand-store-product-single">
                            <div class="brand-store-single-img">
                                <img src="{{ assetUrl('theme/images/brand-store/2.jpg') }}">
                            </div>
                        </div>

                        <!-- third -->
                        <div class="brand-store-product-single">
                            <div class="brand-store-single-img">
                                <img src="{{ assetUrl('theme/images/brand-store/3.jpg') }}">
                            </div>
                        </div>

                        <!-- four -->
                        <div class="brand-store-product-single">
                            <div class="brand-store-single-img">
                                <img src="{{ assetUrl('theme/images/brand-store/4.jpg') }}">
                            </div>
                        </div>

                        <!-- five -->
                        <div class="brand-store-product-single">
                            <div class="brand-store-single-img">
                                <img src="{{ assetUrl('theme/images/brand-store/5.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
