@foreach($products as $product)
    <div class="product-single">
        <div class="product-single-img ajax-loading">
            <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                <img src="{{ $product->product_image_url }}" class="product-card-img">
                <div class="percentage-off-content">25% Off</div>
                {{--<div class="like-content"><img src="{{ assetUrl('theme/images/heart.png') }}">
                </div>--}}
            </a>
        </div>
        <div class="product-description">
            <p>Available(In Stock)</p>
            <h4 class="product_name">
                <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ $product->product_name }}</a>
            </h4>
            <div class="price">
                <span class="text-green">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                <span><del>{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</del></span>
            </div>
            <div class="bottom-product">
                <div class="left-content">
                    <button class="minus-btn"><img
                            src="{{ assetUrl('theme/images/minus.png') }}"></button>
                    <span class="quantity">1</span>
                    <button class="plus-btn"><img
                            src="{{ assetUrl('theme/images/plus-white.png') }}"></button>
                </div>
                <div class="right-content">
                    <button class="shopping-cart-btn">
                        <img src="{{ assetUrl('theme/images/shopping-cart.svg') }}">
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
