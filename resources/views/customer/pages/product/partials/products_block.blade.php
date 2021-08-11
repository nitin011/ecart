<div class="row all-product-list">
    @forelse($products as $product)
        <div class="product-single  m-height-300">
            <div class="product-single-img product-image">
                <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">
                <img src="{{ $product->product_image_url }}"
                     class="{{--product-card-img--}} img-thumbnail border-0">
                @if($product->variants[0]->mrp-$product->variants[0]->price != 0)
                    <div class="percentage-off-content">
                        {{ formatPrice($product->variants[0]->mrp-$product->variants[0]->price) }}
                        Off
                    </div>
                @endif
                {{--<div class="like-content"><img
                       src="{{ assetUrl('theme/images/heart.png') }}">
                </div>--}}
                </a>
            </div>
            <div class="product-description">
                <p>Available(In Stock)</p>
                <h4 class="product_name">
                    <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ $product->product_name }}</a>
                </h4>
                <div class="price">
                    <span class="text-green">£ {{ $product->variants[0]->price }}</span>
                    <span><del>£ {{ $product->variants[0]->mrp }}</del></span>
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
                        <button type="submit" class="shopping-cart-btn">
                            <img
                                src="{{ assetUrl('theme/images/shopping-cart.svg') }}">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"> Products not found. </h2>
            </div>
        </div>
    @endforelse
</div>
