@extends('admin.layout.app')
@section('page_title','Order Details')
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ assetUrl('assets/plugins/hr-timeline/index.css') }}"/>
@endsection
@section('content')
    <div class="container">
        <div class="az-content-body az-content-body-invoice">
            <div class="card mb-3">
                <div class="card-header alert-primary">
                    Order Details
                    <div class="float-right d-flex">
                        <a href="{{ route('admin.order.index') }}" class="btn btn-warning btn-sm">
                            <i class="fa fa-arrow-left"></i>
                            Back
                        </a>
                        {{--<a href="{{ route('admin.order.edit',$order->order_id) }}"
                           class="btn btn-success action-button btn-sm">
                            <i class="fa fa-edit"></i></a>--}}

                        <a onclick="confirmPureDelete('{{ route('admin.order.destroy',$order->order_id) }}');"
                           class="btn btn-danger btn-sm text-white">
                            <i class="fa fa-trash"></i></a>
                        <a href="{{ route('admin.order.print-invoice',$order->order_id) }}" target="_blank"
                           class="btn btn-light btn-sm">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card card-invoice">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>{{ $order->user->user_name }}</h6>
                                    <address>
                                        <p>{{ $order->address->receiver_name??null }}<br/>
                                            {{ $order->address->receiver_phone??null }}
                                            <br/>
                                            {{ $order->address->city->name??null }}
                                            {{ $order->address->society??null }}
                                            <br/>
                                            {{ $order->address->house_or_flat_no??null }}

                                            {{ $order->address->landmark??null }}.
                                            {{ $order->address->state??null }}.
                                            {{ $order->address->pincode??null }}.</p>
                                    </address>
                                </div>
                                <div class="col-md-6 text-right">
                                    <label class="tx-gray-600">Order Information</label>
                                    <p class="invoice-info-row">
                                        <span>Order No</span>
                                        <span>#{{ $order->order_id }}</span><br/>
                                        <span>Order Date:</span>
                                        <span>{{ formatDate($order->order_date,"d-m-Y h:i A") }}</span><br/>
                                        <span>Total Items:</span>
                                        <span>{{ $order->orderItems->count() }}</span><br/>
                                        <span>Delivery Date:</span>
                                        <span>{{ $order->delivery_date?formatDate($order->delivery_date,"d-m-Y"):'---' }}</span>
                                    </p>
                                </div><!-- col -->
                            </div><!-- invoice-header -->

                            <div class="table-responsive mg-t-40">
                                <table class="table table-invoice">
                                    <thead>
                                    <tr>
                                        <th class="wd-20p">Image</th>
                                        <th class="wd-40p">Product</th>
                                        <th class="text-center">QNTY</th>
                                        <th class="text-center">Weight</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Sub Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->orderItems as $item)
                                        <tr>
                                            <td>
                                                <img
                                                    src="{{ assetUrl($item->extra_data['associatedModel']['varient_image']) }}"
                                                    style="max-width: 40px;">
                                            </td>
                                            <td class="tx-12">
                                                {{ $item->extra_data['name'] }}
                                            </td>
                                            <td class="text-center">{{ $item->extra_data['associatedModel']['quantity'] }}</td>
                                            <td class="text-center">
                                                {{ ($item->extra_data['quantity'].''.$item->extra_data['associatedModel']['unit']) }}
                                            </td>
                                            <td class="text-right">{{ formatPrice($item->price) }}</td>
                                            <td class="text-right">{{ formatPrice($item->extra_data['price']) }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3"></td>
                                        <td colspan="2" class="text-right">Status</td>
                                        <td class="text-right">{{ ($order->order_status) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0"></td>
                                        <td colspan="2" class="text-right">Total</td>
                                        <td class="text-right">{{ formatPrice($order->total_price) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0"></td>
                                        <td colspan="2" class="text-right">Delivery Charges</td>
                                        <td class="text-right">{{ formatPrice(($order->delivery_charge??(0.0))) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0"></td>
                                        <td colspan="2" class="text-right">Discount</td>
                                        <td class="text-right">{{ formatPrice($order->total_products_mrp-($order->total_price - $order->delivery_charge)) }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0"></td>
                                        <td colspan="2" class="text-right tx-uppercase tx-bold tx-inverse">Grand Total
                                        </td>
                                        <td class="text-right"><h4 class="tx-primary tx-bold">
                                                {{ formatPrice($order->total_price) }}</h4></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-responsive -->

                            {{--<hr class="mg-b-40">
                            <label class="az-content-label tx-13">Order Status</label>
                            <div class="flex-parent">
                                <div class="input-flex-container">
                                    @foreach($statuses as $id=>$title)
                                        @php($history = getOrderStatus($id,$order->order_id))
                                        <div
                                            class="input {{ (!is_null($last_status_history)&& ($last_status_history->status_id == $id))?'active':null }}">
                                                    <span
                                                        data-year="{{ $history['status']?formatDate($history['data']->created_at,'D M Y'):null }}"
                                                        data-info="{{ $title }}"></span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>--}}
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
            </div>
        </div><!-- az-content-body -->
    </div>
@endsection
@section('scripts')
    {{--    <script src="{{ assetUrl('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>--}}
@endsection
