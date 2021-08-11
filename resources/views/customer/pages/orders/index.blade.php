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
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
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
                                            <b class="mr-1 border-right">{{ $order->orderItems[0]->variant->product->product_name??null }}
                                                @if($order->orderItems->count() > 1)
                                                    and {{ $order->orderItems->count() }} items more.
                                                @endif
                                            </b>
                                            <span
                                                class="text-secondary border-right pr-2">ORDER ID #{{ $order->order_id }}</span>
                                            <span
                                                class="text-secondary">Order Date {{ formatDate($order->created_at) }}</span>
                                        </div>
                                        <div class="col-1 icon-col text-right" data-toggle="collapse"
                                             data-target="#collapse-{{ $order->order_id }}" aria-expanded="true"
                                             aria-controls="collapse-{{ $order->order_id }}">
                                            <div class="btn btn-default" style="display: contents">
                                                <i class="fa fa-list"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapse-{{ $order->order_id }}"
                                     class="collapse {{ $loop->iteration == 1?'show':null }}"
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
                                                                Status : {{ $order->transaction->status??'--' }}</br/>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="px-3">
                                                                    <h4 class="mb-3 font-weight-bold">Order Summary</h4>
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
                                                            <div
                                                                class="row border-bottom pb-3">
                                                                <div class="col-md-3">
                                                                    <div class="order-img">
                                                                        <a href="{{ route('customer.product.show',$item->product_variant_id) }}">
                                                                            <img
                                                                                src="{{ $item->variant->varient_image_url }}"
                                                                                class="img-fluid mx-auto d-block"
                                                                                style="max-height: 60px;">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <a href="{{ route('customer.product.show',$item->product_variant_id) }}"
                                                                       class="text-dark h4 font-weight-bold mb-3 d-block">
                                                                        {{ $item->title }}
                                                                    </a>
                                                                    <p class="mb-0">Quantity : <span
                                                                            class="text-dark">{{ $item->quantity_value.''.$item->quantity_unit }}</span>
                                                                    </p>
                                                                    <p class="mb-0">Order Status : <span
                                                                            class="text-dark">
                                                                            @switch($order->order_status)
                                                                                @case('completed')
                                                                                @php($badgeColor = 'success')
                                                                                @break
                                                                                @case('rejected')
                                                                                @case('canceled')
                                                                                @php($badgeColor = 'danger')
                                                                                @break
                                                                                @default
                                                                                @php($badgeColor = 'warning')
                                                                            @endswitch
                                                                            <span class="badge badge-{{ $badgeColor }}">
                                                                            {{ ucfirst(\App\Models\Order::ORDER_STATUS[strtolower(\Illuminate\Support\Str::slug($order->order_status,'_'))]) }}
                                                                                </span>
                                                                        </span>
                                                                    </p>
                                                                    <p class="mb-0">Order Date : <span
                                                                            class="text-dark">{{ formatDate($order->order_date,'d M Y')  }}</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4 text-md-center my-auto">
                                                                    <p class="mb-0">Per Unit Price : <span
                                                                            class="text-dark">{{ $currency->currency_sign }} {{ $item->price }}</span>
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
    <!-- Shoping Cart Section End -->
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
@endsection
