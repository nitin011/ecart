@extends('web.layout.app')
@section('title','Checkout')
@section('page','index')
@push('css')
    <style>
        .coupon {
            border: 3px dashed #bcbcbc;
            border-radius: 10px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }
        .offer {
            display: inline-table;
        }
        .disclosure {
            padding-top: 15px;
            font-size: 11px;
            color: #bcbcbc;
            text-align: center;
        }
        .coupon-code {
            color: #333333;
            font-size: 11px;
        }
        .exp {
            color: #f34235;
        }
        .items {
            margin: 15px 0;
            list-style: none;
        }
    </style>
@endpush
@section('content')
    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Checkout</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="main_content mb-50">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="bg-white">
                                        <div class="arrordian-section">
                                            <div class="accordion" id="accordionExample">
                                                <!-- first card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingOne">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapse"
                                                                data-toggle="collapse" data-target="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                <div class="number-content">1</div>
                                                                <div class="title-accordian">Account Details</div>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <div id="collapseOne" class="collapse in"
                                                         aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body pb-0">
                                                            <p>We need your phone number so we can inform you about any
                                                                delay or problem.
                                                            </p>
                                                            <div class="edit-btn-sec">
                                                                <div class="edit-content">4 digits code send your
                                                                    phone {{ auth()->user()->user_phone }}
                                                                </div>
                                                                <button class="edit-btn">Edit</button>
                                                            </div>

                                                            <div class="enter-code-section">
                                                                <h5 class="code-title">Enter Code</h5>
                                                                <div class="enter-code-input-box">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <button class="next-btn">Next</button>
                                                                </div>
                                                                <button class="code-title resend-btn">Resend Code
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- second card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingTwo">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapsed"
                                                                data-toggle="collapse" data-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="number-content">2</div>
                                                                <div class="title-accordian"> Delivery Address</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            <div class="delivery-accordian mt-30">

                                                                <form action="{{ route('customer.store.address') }}"
                                                                      method="post">
                                                                    @csrf
                                                                    {{ Form::hidden('user_id',auth()->user()->user_id) }}
                                                                    <input type="hidden" name="is_default" value="1">
                                                                    <input type="hidden" name="redirect_to_checkout"
                                                                           value="1">
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>First Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="first_name"
                                                                                   placeholder="First Name"
                                                                                   class="form-control"
                                                                                   value="{{ $address->first_name ?? auth()->user()->first_name ?? old('first_name') }}">
                                                                            @error('first_name')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Last Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="last_name"
                                                                                   placeholder="Last Name"
                                                                                   class="form-control"
                                                                                   value="{{ $address->last_name ?? auth()->user()->last_name ?? old('last_name') }}">
                                                                        </div>

                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Email<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="email"
                                                                                   placeholder="Email Address"
                                                                                   class="form-control"
                                                                                   value="{{ $address->email ?? auth()->user()->user_email ?? old('email') }}">
                                                                            @error('email')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Phone<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="receiver_phone"
                                                                                   placeholder="phone"
                                                                                   class="form-control"
                                                                                   value="{{ $address->receiver_phone ?? auth()->user()->user_phone ?? old('receiver_phone') }}">
                                                                            @error('receiver_phone')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="input-box">
                                                                        <label>Flat / House / Office No.<span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="house_or_flat_no"
                                                                               placeholder="Flat / House / Office No."
                                                                               class="form-control"
                                                                               value="{{ $address->house_or_flat_no ?? old('house_or_flat_no') }}">
                                                                        @error('house_or_flat_no')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Address<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="address_line_1"
                                                                                   placeholder="Address"
                                                                                   class="form-control"
                                                                                   value="{{ $address->address_line_1 ?? old('address_line_1') }}">
                                                                            @error('address_line_1')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Address Line 2</label>
                                                                            <input type="text" name="address_line_2"
                                                                                   placeholder="Address Line 2"
                                                                                   class="form-control"
                                                                                   value="{{ $address->address_line_2 ?? old('address_line_2') }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Postcode<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="post_code"
                                                                                   placeholder="Postcode"
                                                                                   class="form-control"
                                                                                   value="{{ $address->post_code ?? old('post_code') }}">
                                                                            @error('post_code')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="custom_select" style="width: 50%;">
                                                                            <label>Town<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select name="city_id" id="city_id"
                                                                                    class="">
                                                                                @foreach($cities as $city)
                                                                                    <option
                                                                                        value="{{ $city->id }}"
                                                                                        {{ isset($address)?($address->city_id == $city->id?'selected':''):(old('city_id') == $city->id?'selected':'') }}>
                                                                                        {{ ucfirst($city->name) }}
                                                                                        / {{ ucfirst($city->country->name) }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('city_id')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="delivery-bottom-btn d-flex">
                                                                        <div class="left-btn">
                                                                            <button class="btn btn-primary btn-outline"
                                                                                    type="submit">Save
                                                                            </button>
                                                                        </div>
                                                                        <div class="right-btn ml-auto">
                                                                            <button class="btn btn-primary">Next
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- forth card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingFour">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapsed"
                                                                data-toggle="collapse" data-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                <div class="number-content">3</div>
                                                                <div class="title-accordian">Payment</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="collapse"
                                                         aria-labelledby="headingFour" data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            {{--<div class="payment_method-checkout">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="rpt100 mt-30">
                                                                            <ul class="radio--group-inline-container_1 list-unstyled">
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="cashondelivery1"
                                                                                               value="cashondelivery"
                                                                                               name="paymentmethod"
                                                                                               type="radio"
                                                                                               data-minimum="50.0">
                                                                                        <label for="cashondelivery1"
                                                                                               class="radio-label_1">Cash
                                                                                            on
                                                                                            Delivery</label>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="card1" value="card"
                                                                                               name="paymentmethod"
                                                                                               type="radio"
                                                                                               data-minimum="50.0">
                                                                                        <label for="card1"
                                                                                               class="radio-label_1">Credit
                                                                                            / Debit Card</label>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="form-group return-departure-dts mt-30"
                                                                            data-method="cashondelivery"
                                                                            style="display:none">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="pymnt_title">
                                                                                        <h4>Cash on Delivery</h4>
                                                                                        <p>Cash on Delivery will not be
                                                                                            available if your order
                                                                                            value exceeds $10.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="form-group return-departure-dts mt-30"
                                                                            data-method="card" style="display:none">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Holder
                                                                                            Name*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="holdername"
                                                                                                    value=""
                                                                                                    id="holder[name]"
                                                                                                    required=""
                                                                                                    maxlength="64"
                                                                                                    placeholder="Holder Name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Card
                                                                                            Number*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="cardnumber"
                                                                                                    value=""
                                                                                                    id="card[number]"
                                                                                                    required=""
                                                                                                    maxlength="64"
                                                                                                    placeholder="Card Number">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Expiration
                                                                                            Month*</label>
                                                                                        <div class="custom_select">
                                                                                            <select
                                                                                                class="form-control first_null not_chosen">
                                                                                                <option value="">
                                                                                                    Month
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                    January
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                    February
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                    March
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                    April
                                                                                                </option>
                                                                                                <option value="5">
                                                                                                    May
                                                                                                </option>
                                                                                                <option value="6">
                                                                                                    June
                                                                                                </option>
                                                                                                <option value="7">
                                                                                                    July
                                                                                                </option>
                                                                                                <option value="8">
                                                                                                    August
                                                                                                </option>
                                                                                                <option value="9">
                                                                                                    September
                                                                                                </option>
                                                                                                <option value="10">
                                                                                                    October
                                                                                                </option>
                                                                                                <option value="11">
                                                                                                    November
                                                                                                </option>
                                                                                                <option value="12">
                                                                                                    December
                                                                                                </option>
                                                                                            </select>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Expiration
                                                                                            Year*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="card[expire-year]"
                                                                                                    maxlength="4"
                                                                                                    placeholder="Year">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">CVV*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    name="card[cvc]"
                                                                                                    maxlength="3"
                                                                                                    placeholder="CVV">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#" class="btn btn-primary mt-20">Place
                                                                            Order</a>
                                                                    </div>
                                                                </div>
                                                            </div>--}}
                                                            <div id="paypal-checkout"></div>
                                                            <input type="hidden" name="transaction_id" id="transaction_id">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5 mt-30">

                                    <div class="order-summary-section">
                                        <div>
                                            <h2 class="title-checkout">Order Summary</h2>
                                        </div>
                                        <div>
                                            <hr>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 mt-30">
                                                        <div class="table-responsive shop_cart_table">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="product-thumbnail">&nbsp;</th>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-price">Price</th>
                                                                    <th class="product-qty">Quantity</th>
                                                                    <th class="product-subtotal">Total</th>
                                                                    <th class="product-remove">Remove</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
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
                                                                                <input type="button" value="-"
                                                                                       class="minus">
                                                                                <input type="text" name="quantity"
                                                                                       value="{{$item->quantity}}"
                                                                                       title="Qty" class="qty" size="4">
                                                                                <input type="button" value="+"
                                                                                       class="plus">
                                                                            </div>
                                                                        </td>
                                                                        <td class="product-subtotal"
                                                                            data-title="Total">{{formatPrice($item->getPriceSum())}}</td>
                                                                        <td class="product-remove" data-title="Remove">
                                                                            <a href="#">
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
                                                                </tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg_gray mb-30 p-5">
                                        <div class="order-summary-section">
                                            <div>
                                                <h2 class="title-checkout">Price details</h2>
                                            </div>


                                            <!-- line -->
                                            <div>
                                                <hr>
                                            </div>

                                            <!-- amount description -->
                                            <div class="amount-description-sec">
                                                <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Sub Total
                                                    </div>
                                                    <div class="amount-right-content">
                                                        {{ formatPrice(\Cart::getSubTotal()) }}
                                                    </div>
                                                </div>
                                                @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                    <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            {{ $delivery_charge->getName() }}
                                                        </div>
                                                        <div class="amount-right-content">
                                                            {{ formatPrice($delivery_charge->getValue()) }}
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(!is_null($coupon))
                                                    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                        <div class="amount-sec">
                                                            <div class="amount-left-content">
                                                                {{ $coupon['coupon_name'] }}
                                                                <a class="btn btn-danger btn-sm" href="{{ route('customer.delete-coupon') }}">
                                                                    <i class="fa fa-trash" style="margin: 0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="amount-right-content">
                                                                -{{ formatPrice($coupon['discount'] ?? (0.0)) }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="amount-sec">

                                                        <div class="amount-left-content" style="width: 30%">
                                                            Coupon Code
                                                        </div>
                                                        <div class="amount-right-content" style="width: 70%">
                                                            <div class="input-box" style="width: 100%; display: flex;">
                                                                <input type="text" class="form-control"
                                                                       id="coupon_code">
                                                                <div class="input-group-prepend">
                                                                <span class="{{--input-group-text --}}btn btn-primary"
                                                                      id="coupon_code_apply_button">
                                                                    Apply</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                            @endif

                                            <!-- <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Total Saving
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 3
                                                    </div>
                                                </div> -->

                                                <div class="amount-sec">
                                                    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                        <div class="amount-left-content heading-bottom">
                                                            Total Amount
                                                        </div>
                                                        <div class="amount-right-content text-green">
                                                            {{ formatPrice(getCartTotal()) }}
                                                        </div>
                                                    @else
                                                        <div class="amount-left-content heading-bottom">
                                                            <h6 class="text-danger">
                                                                Minimum order amount should be greater than
                                                                <strong>{{ formatPrice($site_configurations['min_order_amt_value']) }}
                                                                    .</strong>
                                                            </h6>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- line -->
                                            <div>
                                                <hr>
                                            </div>

                                            <!-- secure checkout -->
                                            <div class="secure-checkout-sec text-center">
                                                <img src="images/icons/lock.png"> Secure checkout
                                            </div>
                                        </div>
                                    </div>

                                    <!-- have a promocode -->
                                    <div class="bg_gray mb-30 p-5">
                                        <div class="have-a-promocode">
                                            @foreach($coupons as $coupon)
                                                <div class="card alert-success coupon mt-2">
                                                    <div class="card-body py-1">
                                                        <div class="row my-0">
                                                            <div class="col-lg-9 col-md-9">
                                                                <ul class="items">
                                                                    <li>{{ $coupon->coupon_name }}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <div class="offer text-success my-3">
                                                                <span>
                                                                    <b class="text-green">
                                                                        {{ $coupon->type=='percentage'?$coupon->amount.'%':formatPrice($coupon->amount) }}
                                                                    </b>
                                                                </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p class="disclosure">{{ $coupon->coupon_description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="coupon-code">
                                                            Code: {{ $coupon->coupon_code }}
                                                        </div>
                                                        <div class="exp">
                                                            Expires: {{ formatDate($coupon->end_date) }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>
        </div>
    </div>
    <form id="coupon-code-form" action="{{ route('customer.apply-coupon') }}" method="POST"
          style="display: none;">
        @csrf
        <input name="coupon_code" type="hidden">
    </form>
    <!-- wrapper end -->
@endsection
@push('js')
    <script type="text/javascript" src="{{asset('user/js/script.js')}}"></script>
    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency={{ config('services.paypal.currency') }}"></script>
    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            // Set up the transaction
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ (double)\Cart::getTotal() + (double)$delivery_charge->getValue() }}'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function (data, actions) {
                return actions.order.capture().then(function (details) {
                    // Show a success message to the buyer
                    document.getElementById("transaction_id").value = details.id;
                    storeTransaction(details);
                    swal("Success!", 'Transaction completed by ' + details.payer.name.given_name + '!', "success");
                });
            },
            onError: function (err) {
                // Show an error page here, when an error occurs
                swal("Error!", err, "error");
            },
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
                height: 40
            }

        }).render('#paypal-checkout');
    </script>
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');

            $('#coupon_code_apply_button').click(function () {
                $("input[name='coupon_code']").val($('#coupon_code').val());
                $('#coupon-code-form').submit();
            });

            $('input[name="paymentmethod"]').on('click', function () {
                var $value = $(this).attr('value');
                $('.return-departure-dts').slideUp();
                $('[data-method="' + $value + '"]').slideDown();
            });
        });

        function storeTransaction(transaction) {
            return $.ajax({
                type: "POST",
                url: "{{ route('customer.order.transaction.store') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    transaction: JSON.stringify(transaction),
                    details: transaction,
                },
                success: function (response) {
                    console.log(response);
                    document.getElementById("checkout-form").submit();
                },
                error: function (response) {
                    swal('Error', response, 'error');
                },
                /*dataType: "json",
                contentType: "application/json"*/
            });
        }
    </script>

@endpush
