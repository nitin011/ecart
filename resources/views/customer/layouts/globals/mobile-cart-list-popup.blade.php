<div>
    <div class="dropdown-shadow">
        <div class="bg-primary p-3">
            <h5 class="mb-0 text-white">Cart<small
                    class="badge  badge-light float-right pt-1 cart-count cart-count-mobile-dropdown">
                    {{ \Cart::getContent()->count() }}
                </small>
            </h5>
        </div>
        <div class="popup-scroll">
            @foreach(\Cart::getContent() as $item)
                <div class="dropdown-item iq-sub-card">
                    <div class="media align-items-center">
                        <div class="text-center">
                            <img class="img-thumbnail"
                                 style="min-width: 80px !important; height: 70px !important; max-width: 81px !important;"
                                 src="{{ assetUrl($item->associatedModel['varient_image']) }}"
                                 alt="">
                        </div>
                        <div class="media-body ml-3">
                            <h6 class="mb-0 text-break">{{ $item['associatedModel']->product->product_name }}</h6>
                            <div class="popup-price mt-2">
                                <div class="popup-price-left-content">
                                    <h6 class="text-green"> {{ formatPrice($item->getPriceSum()) }}</h6>
                                </div>
                                <div class="popup-price-right-content">
                                    {{--<button class="edit-icon"><img
                                            src="{{ assetUrl('theme/images/edit.svg') }}"
                                            height="20px"></button>--}}
                                    <a onclick="deleteCartItem({{ $item->id }},true)"
                                       class="delete-icon btn"><img
                                            src="{{ assetUrl('theme/images/trash.svg') }}"
                                            height="20px"></a>
                                </div>
                            </div>
                            <div class="quantity-section mt-0">
                                <label>Qty<span>{{ $item->quantity."".$item->associatedModel['unit'] }}</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="popup-bottom">
                <div class="popup-price">
                    <div class="popup-price-left-content">
                        <h6 class="text-green">Total Price</h6>
                    </div>

                    <div class="popup-price-right-content">
                        <div>{{ $currency->currency_sign }} {{ \Cart::getTotal() }}</div>
                    </div>
                </div>

                <div class="popup-price">
                    <div class="popup-price-left-content">
                        <a href="{{ route('customer.cart.index') }}"
                           class="see-all-btn">View All</a>
                    </div>

                    <div class="popup-price-right-content">
                        <a href="{{ route('customer.checkout.proceed') }}"
                           class="see-all-btn">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

