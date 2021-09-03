@extends('web.layout.app')
@section('title','Orders')
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Orders</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Orders</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="main_content mt-30 mb-30">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    @include('customer.layouts.partials.flash_messages')
                                </div>
                                <div class="col-md-12">
                                    <div class="accordion" id="accordionOrders">
                                        @foreach($orders as $order)
                                            <div class="card my-2 border">
                                                <div class="card-header" id="heading-{{ $order->order_id }}">
                                                    <div class="row align-items-center">
                                                        <div class="col-11">
                                                            <span
                                                                class="text-secondary border-right pr-2">ORDER ID #{{ $order->order_id }}</span>
                                                            <span
                                                                class="text-secondary">Order Date {{ formatDate($order->created_at) }}</span>
                                                        </div>
                                                        <div class="col-1 icon-col text-right" data-toggle="collapse"
                                                             data-target="#collapse-{{ $order->order_id }}"
                                                             aria-expanded="true"
                                                             aria-controls="collapse-{{ $order->order_id }}">
                                                            <div class="btn btn-default" style="display: contents">
                                                                <i class="fa fa-list"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="collapse-{{ $order->order_id }}"
                                                     class="collapse {{ $loop->iteration == 1?'in':null }}"
                                                     aria-labelledby="heading-{{ $order->order_id }}"
                                                     data-parent="#accordionOrders">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <b>Shipping Address</b>
                                                                                @include('customer.pages.address.partials.full_address',['address'=>$order->address])
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <b>Payment Method</b><br/>
                                                                                Mode : Paypal</br/>
                                                                                Status
                                                                                : {{ $order->transaction->status??'--' }}</br
                                                                                />
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="px-3">
                                                                                    <h4 class="mb-3 font-weight-bold">
                                                                                        Order Summary</h4>
                                                                                    Sub Total<a
                                                                                        class="pull-right">{{ formatPrice($order->total_price) }}</a><br/>
                                                                                    Delivery Charge<a
                                                                                        class="pull-right">{{ formatPrice($order->delivery_charge) }}</a><br/>
                                                                                    Coupon Discount<a
                                                                                        class="pull-right">{{ formatPrice($order->coupon_discount??(0.0)) }}</a><br/>
                                                                                    Discount<a
                                                                                        class="pull-right">{{ formatPrice($order->total_price - ($order->delivery_charges+$order->sub_total)) }}</a><br/>
                                                                                    <hr class="my-1"/>
                                                                                    <h5 class="mb-0 font-weight-bold">
                                                                                        Total
                                                                                        <a class="pull-right">{{ formatPrice($order->total_price) }}</a>
                                                                                    </h5>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card mt-3">
                                                                    <div class="card-body">
                                                                        @foreach($order->orderItems as $item)
                                                                            <div class="row border-bottom pb-3">
                                                                                <div class="col-md-2">
                                                                                    <div class="order-img">
                                                                                        <a href="{{ route('customer.product.show',$item->product_variant_id) }}">
                                                                                            <img
                                                                                                src="{{ $item->variant->varient_image_url }}"
                                                                                                class="img-fluid mx-auto d-block"
                                                                                                style="max-height: 60px;">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <a href="{{ route('customer.product.show',$item->product_variant_id) }}"
                                                                                       class="text-dark h4 font-weight-bold mb-3 d-block">
                                                                                        {{ $item->variant->product->product_name }}
                                                                                    </a>
                                                                                    <p class="mb-0">Quantity : <span
                                                                                            class="text-dark">{{ $item->quantity_value.''.$item->quantity_unit }}</span>
                                                                                    </p>
                                                                                    <p class="mb-0">Product Status : <span
                                                                                            class="text-dark">
                                                                            @switch($item->status)
                                                                                                @case(0)
                                                                                                @php $badgeColor = 'warning'; $status='On Hold'; @endphp
                                                                                                @break
                                                                                                @case(-1)
                                                                                                @php $badgeColor = 'danger'; $status='Cancel'; @endphp
                                                                                                @break
                                                                                                @case(1)
                                                                                                @php $badgeColor = 'info'; $status='In Stock'; @endphp
                                                                                                @break
                                                                                            @endswitch
                                                                            <span class="badge badge-{{ $badgeColor }}">
                                                                                    {{ $status }}
                                                                                </span>
                                                                        </span>
                                                                                    </p>
                                                                                    <p class="mb-0">Delivery Date : <span
                                                                                            class="text-dark">{{ formatDate($item->delivery_date,'d M Y')  }}</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3 text-md-center my-auto">
                                                                                    <p class="mb-0">Per {{$item->quantity_unit}} Price :
                                                                                        <span
                                                                                            class="text-dark">{{ $currency->currency_sign }} {{ $item->price }}</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-3 text-md-center my-auto">
                                                                                    <p class="mb-0">Total Price :
                                                                                        <span class="text-dark"> {{ formatPrice($item->price * $item->quantity_value) }}</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Shoping Cart Section End -->
@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
