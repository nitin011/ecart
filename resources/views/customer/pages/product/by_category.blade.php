@extends('customer.layouts.master')
@section('title','Shop')
@section('content')
    <!-- border bottom -->
    <div class="border-bottom"></div>

    <!-- ee breadcrumb -->
    <div class="ee-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $current_category->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- shop page -->
    <div class="bg-grey">
        <section class="type-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>{{ $current_category->title }}</h5>
                    </div>
                    {{--<div class="col-md-6 text-right">
                        <div class="d-flex justify-content-end">
                            <div class="popularity-input">
                                <input type="text" placeholder="Popularity">
                            </div>
                            <button class="filter-btn">FILTERS</button>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>
        <section class="product-list">
            <div class="container">
                @if($products->isEmpty())
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-center"> Products not found. </h2>
                        </div>
                    </div>
                @else
                    <div class="row all-product-list">
                        @foreach($products as $product)
                            @if($product->variants->count() == 0)
                                @continue
                            @endif
                            <div class="product-single">
                                <div class="product-single-img product-image">
                                    <img src="{{ $product->product_image_url }}" class="img-thumbnail border-0"
                                        {{--class="product-card-img"--}}
                                    >
                                    @if($product->variants[0]->mrp-$product->variants[0]->price > 0)
                                    <div
                                        class="percentage-off-content">{{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                                        Off
                                    </div>
                                    @endif
                                    {{--<div class="like-content"><img
                                            src="{{ assetUrl('theme/images/heart.png') }}">
                                    </div>--}}
                                </div>
                                <div class="product-description">
                                    <p>Available(In Stock)</p>
                                    <h4 class="product_name">
                                        <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ $product->product_name }}</a>
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
                                                <img src="{{ assetUrl('theme/images/plus-white.png') }}">
                                            </a>
                                        </div>
                                        <div class="right-content">
                                            <button class="shopping-cart-btn">
                                                <img
                                                    src="{{ assetUrl('theme/images/shopping-cart.svg') }}">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(!$products->isEmpty())
                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $products->links() }}
                        </div>
                    </div>
                @endif
            </div>
        </section>
    </div>
@endsection
