<style>
    .cart{position: relative; display: inline-flex; width: 100%; margin-bottom: 2px;}
    .cart .cart-product-img{min-width: 80px; max-width: 81px; width: 20%}
    .cart .cart-product-img img{width: 100%; border-radius: 5px;}
    .cart .cart-product-detail{width: 80%}
    .cart .cart-product-name{font-weight: 600; color: #000;}
    .cart .cart-product-price{font-weight: 600; color: #000}
    .cart .cart-product-price span:first-child{color: green;}
    .cart .cart-product-price a:hover{color: red;}
</style>

@if(\Cart::getContent()->count())
@foreach(\Cart::getContent() as $item)
    <div class="cart" style="{{$loop->iteration < \Cart::getContent()->count()?'border-bottom:0.5px solid #000;padding-bottom: 5px;margin-bottom: 10px;border-bottom-style: dashed;':''}} ">
        <div class="cart-product-img"><img src="{{$item['associatedModel']->varient_image_url}}"></div>
        &nbsp;
        <div class="cart-product-detail">
            <div class="cart-product-name">
                {{\Illuminate\Support\Str::limit($item['associatedModel']->product->product_name, 30)}}
            </div>
            <div class="cart-product-price">Qty: {{ $item->quantity."".$item->associatedModel['unit'] }}&nbsp;&nbsp;&nbsp;&nbsp;<span>{{formatPrice($item->getPriceSum())}}</span><a href="javascript:void(0)" class="pull-right remove-item" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></a></div>
        </div>
    </div>

@endforeach
@if(\Cart::getContent()->count())
    <hr style="margin: 10px 0">
    <div style="width:100%;font-weight:600;text-align:center;">Total Price: {{ formatPrice(\Cart::getSubTotal()) }}</div>
@endif
@else
    No products in the cart
@endif
