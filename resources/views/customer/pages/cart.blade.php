@extends('customer.layouts.master')
@section('title','Cart')
@section('content')
    <!-- border bottom -->
    <div class="border-bottom"></div>
    <!-- ee Breadcfumb -->
    <div class="ee-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- checkout content -->
    <div class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('customer.layouts.partials.flash_messages')
                </div>
                @if(\Cart::getContent()->count() > 0)
                    <div class="col-md-8">
                        <div class="white-bg">
                            <form action="{{ route('customer.cart.update') }}" method="POST">
                                @csrf
                                <table class="table">
                                    <tr class="bg-app-primary text-white">
                                        <th colspan="2">Product</th>
                                        <th>Price</th>
                                        <th>quantity</th>
                                        <th>Total</th>
                                        <th class="text-right">Remove</th>
                                    </tr>
                                    @foreach(\Cart::getContent() as $item)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{ route('customer.product.show',$item->id) }}">
                                                    <img src="{{ $item->associatedModel['varient_image_url'] }}"
                                                         alt=""
                                                         height="50px">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('customer.product.show',$item->id) }}">
                                                    {{ $item->associatedModel['product']['product_name'] }}
                                                </a>
                                            </td>
                                            <td>{{ $currency->currency_sign }} {{ $item->price }}</td>
                                            <td>
                                                <div class="qty-group mt-0">
                                                    <div class="quantity buttons_added">
                                                        <input type="button" value="-" class="minus minus-btn">
                                                        <input type="number" step="1"
                                                               name="quantity[{{ $item['id'] }}]"
                                                               value="{{ $item->quantity }}"
                                                               class="input-text qty text">
                                                        <input type="button" value="+" class="plus plus-btn">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $currency->currency_sign }} {{ $item->price*$item->quantity }}</td>
                                            <td class="text-right">
                                                <button class="btn btn-danger text-white rounded-0 remove-cart-item"
                                                        onclick="deleteCartItem({{ $item->id }},true)">
                                                    <i class="text-white fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <button class="btn btn-primary float-right text-white rounded-0"
                                        type="submit">
                                    <span class="icon_loading"></span>
                                    Update Cart Items
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="white-bg">
                            <ul class="list-group">
                                <li class="list-group-item bg-app-primary"><h5 class="text-white">Details</h5></li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <h6>Sub Total</h6>
                                    <span> {{ formatPrice(\Cart::getSubTotal()) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <h6 class="text-green">Total
                                        <Price></Price>
                                    </h6>
                                    <span>{{ formatPrice(\Cart::getTotal()) }}</span>
                                </li>
                                <li class="list-group-item px-0 border-0">

                                    <a href="{{ route('customer.checkout.proceed') }}"
                                       class="btn btn-success w-100 rounded-0 text-white">Checkout Now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="col-md-6 offset-md-3 text-center">
                        <img src="{{ assetUrl('theme\images\default\empty_cart.gif') }}">
                        <h3>No items in cart</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
