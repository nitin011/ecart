@extends('web.layout.app')
@section('title','Profile')
@push('css')
    <style>
        .required{
            color: red !important;
        }
        .b-success,.b-success:focus{
            border-color: green !important;
        }
        .b-error,.b-error:focus{
            border-color: red !important;
        }
    </style>
    @endpush
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="breadcrumb_section bg_gray page-title-mini">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h1>My Account</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                    <li class="breadcrumb-item active">My Account</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <!-- my account page section start -->
                        <div class="row">
                            <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="col-md-12">
                                        <div class="main_content mt-40 mb-50">
                                            <div class="section">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4">
                                                            <!-- my account tab section start -->
                                                            <div class="dashboard_menu">
                                                                <ul class="nav nav-tabs flex-column mb-50"
                                                                    role="tablist">

                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="orders-tab"
                                                                           data-toggle="tab" href="#orders" role="tab"
                                                                           aria-controls="orders" aria-selected="false"><i
                                                                                class="ti-shopping-cart-full"></i>Orders</a>
                                                                    </li>
                                                                    @if(\Cart::getContent()->count())
                                                                        <li class="nav-item">
                                                                            <a class="nav-link" id="payment-tab"
                                                                               data-toggle="tab" href="#payment"
                                                                               role="tab" aria-controls="orders"
                                                                               aria-selected="true"><i
                                                                                    class="fa fa-money"></i>Payment</a>
                                                                        </li>
                                                                    @endif
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="address-tab"
                                                                           data-toggle="tab" href="#address" role="tab"
                                                                           aria-controls="address" aria-selected="true"><i
                                                                                class="ti-location-pin"></i>My
                                                                            Address</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="account-detail-tab"
                                                                           data-toggle="tab" href="#account-detail"
                                                                           role="tab" aria-controls="account-detail"
                                                                           aria-selected="true"><i
                                                                                class="ti-id-badge"></i>Account
                                                                            details</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="javascript:void(0)" onclick="$('#logout-form').submit();"><i
                                                                                class="ti-lock" ></i>Logout</a>
                                                                        <form id="logout-form" action="{{ route('customer.logout') }}"
                                                                              method="POST"
                                                                              class="d-none">
                                                                            @csrf
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- my account tab section end -->
                                                        </div>
                                                        <div class="col-lg-9 col-md-8">
                                                            <div class="tab-content dashboard_content">
                                                                <!-- order section start -->
                                                                <div class="tab-pane fade active show" id="orders"
                                                                     role="tabpanel" aria-labelledby="orders-tab">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>Orders</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Product</th>
                                                                                        <th>Name</th>
                                                                                        <th>Price</th>
                                                                                        <th>Detail</th>
                                                                                        <th>Total</th>
                                                                                        <th>Status</th>

                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    @if($orders->count())
                                                                                        @foreach($orders as $order)
                                                                                            @foreach($order->orderItems as $item)
                                                                                                <tr>
                                                                                                    <td>
                                                                                                        <a href="{{ route('customer.product.show',$item->product_variant_id) }}"><img
                                                                                                                src="{{ $item->variant->varient_image_url }}"
                                                                                                                alt="{{ $item->variant->product->product_name }}"
                                                                                                                class="img-fluid"
                                                                                                                height="80px"></a>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <a href="javascript:void(0)">Order
                                                                                                            no: <span
                                                                                                                class="dark-data"><b>{{ $item->order->order_id }}</b></span>
                                                                                                            <br>{{ $item->variant->product->product_name }}
                                                                                                        </a></td>

                                                                                                    <td>{{ formatPrice($item->price) }}</td>
                                                                                                    <td>
                                                                                                        <span>{{$item->quantity_unit}}</span>
                                                                                                        <br>
                                                                                                        <span>{{ $item->quantity_value}}</span>
                                                                                                    </td>
                                                                                                    <td>{{ formatPrice($item->price * $item->quantity_value) }}</td>
                                                                                                    <td>{{$order->order_status}}
                                                                                                        ({{ $order->order_date->format('M, d Y') }}
                                                                                                        )
                                                                                                    </td>

                                                                                                </tr>
                                                                                            @endforeach
                                                                                        @endforeach
                                                                                    @else
                                                                                        <tr>
                                                                                            <td colspan="6"><h3
                                                                                                    class="text-center text-warning">
                                                                                                    Orders Not
                                                                                                    Available</h3></td>
                                                                                        </tr>
                                                                                    @endif
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- order section end -->
                                                            @if(\Cart::getContent()->count())
                                                                <!-- payment section start -->
                                                                    <div class="tab-pane fade" id="payment"
                                                                         role="tabpanel" aria-labelledby="payment-tab">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h3>Payment Details</h3>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <div class="border p-3 p-md-4">
                                                                                    <div class="heading_s1 mb-20">
                                                                                        <h6>Cart Totals</h6>
                                                                                    </div>
                                                                                    <div class="table-responsive">
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td class="cart_total_label">
                                                                                                    Cart Subtotal
                                                                                                </td>
                                                                                                <td class="cart_total_amount">
                                                                                                    {{ formatPrice(\Cart::getSubTotal()) }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="cart_total_label">
                                                                                                    {{ $delivery_charge->getName() }}</td>
                                                                                                <td class="cart_total_amount">
                                                                                                    {{ formatPrice($delivery_charge->getValue()) }}
                                                                                                </td>
                                                                                            </tr>
                                                                                            @if(!is_null($coupon))
                                                                                                <tr>
                                                                                                    <td class="cart_total_label">
                                                                                                        Coupon Discount
                                                                                                    </td>
                                                                                                    <td class="cart_total_amount">
                                                                                                        {{ formatPrice($coupon['discount'] ?? (0.0)) }}
                                                                                                    </td>
                                                                                                </tr>
                                                                                            @endif
                                                                                            <tr>
                                                                                                <td class="cart_total_label">
                                                                                                    Total
                                                                                                </td>
                                                                                                <td class="cart_total_amount">
                                                                                                    <strong>{{ auth()->check()?formatPrice(getCartTotal()>0?getCartTotal():0):formatPrice(\Cart::getTotal()) }}</strong>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                    <a href="{{ route('customer.checkout.proceed') }}"
                                                                                       class="btn btn-fill-out btn-primary">Proceed
                                                                                        To CheckOut</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- payment section end -->
                                                            @endif
                                                            <!-- billing address section start -->
                                                                <div class="tab-pane fade" id="address" role="tabpanel"
                                                                     aria-labelledby="address-tab">
                                                                    <div class="row">
                                                                        @foreach($addresses as $address)
                                                                            <div class="col-lg-4 mb-20">
                                                                                <div class="card mb-3 mb-lg-0">
                                                                                    <div class="card-header">
                                                                                        @if($address->is_default ==1)
                                                                                            <h3>Billing Address</h3>
                                                                                        @endif
                                                                                        <a style="position: absolute; top:6px; right: 12px;" href="{{ route('customer.address.default',$address->id)}}"
                                                                                           class="btn float-right {{ ($address->is_default ==1)?'bg-primary text-white disabled':'bg-secondary text-white' }}">
                                                                                            {{ ($address->is_default ==1)?'Primary':'Make Primary' }}
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <address>
                                                                                            <strong>Full Name:</strong> {{ $address->first_name??null }} {{ $address->last_name??null }}<br/>
                                                                                            <strong>Contact No:</strong> {{ $address->receiver_phone??null }}<br/>
                                                                                            <strong>City:</strong> {{ $address->city->name??null }}<br>
                                                                                            <strong>Country:</strong> {{ $address->country->name??null }}<br/>
                                                                                            <strong>House/Flat No. :</strong> {{ $address->house_or_flat_no??null }}<br/>
                                                                                            <strong>Address :</strong> {{ $address->address_line_1??null }}.<br/>
                                                                                            {{ $address->address_line_2??null }}.<br/>
                                                                                            <strong>Postcode :</strong> {{ $address->post_code??null }}.
                                                                                        </address>

                                                                                        <p>{{ $address->city->name??null }}</p>
                                                                                        <a href="{{ route('customer.address.edit',$address->id ) }}"
                                                                                           class="btn btn-primary">Edit</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <!-- billing address section end -->

                                                                <!-- account details section start -->
                                                                <div class="tab-pane fade" id="account-detail"
                                                                     role="tabpanel"
                                                                     aria-labelledby="account-detail-tab">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>Account Details</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            @include('customer.layouts.partials.flash_messages')
                                                                            <form method="post" action="{{ route('customer.profile.update') }}" id="profile-form">
                                                                                @csrf
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label>First Name <span class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="first_name" type="text" value="{{ $user->first_name }}">
                                                                                        @error('first_name')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label>Last Name </label>
                                                                                        <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Contact No.<span class="required">*</span></label>
                                                                                        <input required class="form-control" name="user_phone" type="text" value="{{ $user->user_phone }}">
                                                                                        @error('user_phone')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Email Address <span class="required">*</span></label>
                                                                                        <input required class="form-control" name="user_email" type="email" value="{{ $user->user_email }}">
                                                                                        @error('user_email')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Current Password</label>
                                                                                        <input class="form-control" name="c_password" type="password">
                                                                                        @error('c_password')
                                                                                        <span class="text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>New Password</label>
                                                                                        <input class="form-control" name="n_password" id="n_password" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Confirm Password</label>
                                                                                        <input class="form-control" name="confirmed" id="confirmed" type="text" oninput="confirm()">
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <button type="submit" class="btn btn-primary" id="submit">Update</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- account details section end -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- my account page section end -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');


            $('#profile-form').submit(function () {
                return confirm();
            })
        });

        function confirm() {
            if($('#confirmed').val().trim() !== $('#n_password').val().trim()){
                $('#confirmed').addClass('b-error');
                $('#confirmed').removeClass('b-success');
                return false;
            }else{
                $('#confirmed').addClass('b-success');
                $('#confirmed').removeClass('b-error');
                return true;
            }
        }
    </script>
@endpush
