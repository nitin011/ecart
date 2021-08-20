
@foreach(\Cart::getContent() as $item)
    <tr>
        <td class="product-thumbnail">
            <a href="#"><img
                    src="{{$item->associatedModel->varient_image_url}}"
                    alt=""></a>
        </td>
        <td class="product-name" data-title="Product"><a
                href="#">{{ $item->associatedModel->product->product_name }}</a>
        </td>
        <td class="product-price"
            data-title="Price">{{ formatPrice($item->price) }}</td>
        <td class="product-quantity"
            data-title="Quantity">
            <div class="quantity">
                <button type="button"
                       class="minus" data-id="{{$item->id}}">-</button>
                <input type="text" name="quantity"
                       value="{{$item->quantity}}"
                       title="Qty" class="qty" size="4">
                <button type="button"
                        class="plus" data-id="{{$item->id}}">+</button>
            </div>
        </td>
        <td class="product-subtotal"
            data-title="Total">{{formatPrice($item->getPriceSum())}}</td>
        <td class="product-remove" data-title="Remove">
            <a href="javascript:void(0)" onclick="checkoutProduct('delete', {{$item->id}})">
                <svg xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     version="1.1" id="close"
                     width="10px" height="10px" x="0px"
                     y="0px"
                     viewBox="0 0 512.001 512.001"
                     style="enable-background:new 0 0 512.001 512.001;"
                     xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path
                                                                                                                    d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                                                                                                    </svg>
            </a>
        </td>
    </tr>
@endforeach
