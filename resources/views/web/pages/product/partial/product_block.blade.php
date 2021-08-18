@foreach($products as $product)
<div class="col-xl-3 col-lg-3 col-md-3 col-xs-12">
    <div class="item  text-center">
        <div class="product-miniature js-product-miniature item-two first_item" data-id-product="{{$product->variants[0]->varient_id}}" data-id-product-attribute="{{$product->product_id}}" itemscope>
            <div class="product-cat-content">

                <div class="category-title"><a href="{{ route('customer.products.by-category',$product->cat_id) }}">{{ $product->category->title }}</a></div>


                <div class="product-title" itemprop="name">
                    <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}">{{ $product->product_name }}</a>
                </div>

            </div>
            <div class="thumbnail-container">

                <a href="{{ route('customer.product.show',$product->variants[0]->varient_id) }}" class="thumbnail product-thumbnail two-image">
                    <img class="img-fluid image-cover" src="{{$product->product_image_url}}" alt="" data-full-size-image-url="{{$product->product_image_url}}" width="270" height="360">
                    <img class="img-fluid image-secondary" src="{{$product->variants[0]->varient_image_url}}" alt="" data-full-size-image-url="{{$product->variants[0]->varient_image_url}}" width="270" height="360">
                </a>




            </div>
            <div class="product-description">
                <div class="product-groups">
                    <div class="product-group-price">

                        <div class="product-price-and-shipping">
                            <span itemprop="price" class="price">{{ $currency->currency_sign }} {{ $product->variants[0]->price }}</span>
                            <span class="regular-price">{{ $currency->currency_sign }} {{ $product->variants[0]->mrp }}</span>
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
                        <input type="hidden" name="variant_id" value="{{ $product->variants[0]->varient_id }}">
                        <input type="hidden" name="quantity" value="1">
                        <a class="add-to-cart" href="javascript:void(0)" data-button-action=""><i
                                class="novicon-cart"></i><span>Add to cart</span></a>
                    </form>
                    <a class="addToWishlist wishlistProd_1" href="javascript:void(0)" data-rel="1" onclick="">
                        <i class="fa fa-heart"></i>
                        <span>Add to Wishlist</span>
                    </a>
                    <a href="javascript:void(0)" class="quick-view hidden-sm-down" data-link-action="quickview">
                        <i class="fa fa-search"></i><span>Quick view</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@if($products->total() > 8)
<div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 text-center mt-20 mb-40" id="show_more">
    <button class="btn btn-primary" type="button" onclick="loadMore()" data-url="{{$products->nextPageUrl()}}">Show More</button>
</div>
@endif
