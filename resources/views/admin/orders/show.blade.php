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
                        <a href="javascript:void(0)"
                           class="btn btn-success btn-sm" id="manage-product" data-toggle="tooltip" title="Manage Product Status">
                            <i class="fa fa-edit"></i></a>

                        <a onclick="confirmPureDelete('{{ route('admin.order.destroy',$order->order_id) }}');"
                           class="btn btn-danger btn-sm text-white">
                            <i class="fa fa-trash"></i></a>
                        <a href="{{ route('admin.order.print-invoice',$order->order_id) }}" target="_blank"
                           class="btn btn-light btn-sm" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card card-invoice">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><strong>{{ $order->user->user_name }}</strong></h6>
                                    <address>
                                        <strong>City:</strong> {{ $address->city->name??null }}
                                        <strong>Country:</strong> {{ $address->country->name??null }}<br/>
                                        <strong>House/Flat No. :</strong> {{ $address->house_or_flat_no??null }}<br/>
                                        <strong>Address :</strong> {{ $address->address_line_1??null }}.<br/>
                                        {{ $address->address_line_2??null }}.<br/>
                                        <strong>Postcode :</strong> {{ $address->post_code??null }}<br>
                                        <strong>Contact :</strong> {{ $address->receiver_phone??null }}
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
    <div class="modal fade" id="manage-product-modal" tabindex="-1" role="dialog" aria-labelledby="product-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="product-modal-label">Manage Product Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('admin.order.item.status') }}">
                    @csrf
                    <input type="hidden" name="order_id" value="{{$order->order_id}}">
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Delivery Date</th>
                                    <th>Availability</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->orderItems as $item)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('edit-varient',$item->product_variant_id) }}"><img
                                                            src="{{ $item->variant->varient_image_url }}"
                                                            alt="{{ $item->variant->product->product_name }}"
                                                            class="img-fluid"
                                                            height="80px"></a>
                                                </td>
                                                <td>{{ $item->variant->product->product_name }}</td>
                                                <td><input type="date" name="item[{{$item->id}}][delivery_date]" value="{{ $item->delivery_date }}" {{$item->status ==-1? 'disabled' : '' }}></td>
                                                <td>
                                                    <select name="item[{{$item->id}}][status]" {{$item->status ==-1? 'disabled' : '' }}>
                                                        <option value="0" {{$item->status == 0?'selected':''}}>On Hold</option>
                                                        <option value="1" {{$item->status == 1?'selected':''}}>Available</option>
                                                        <option value="-1" {{$item->status == -1?'selected':''}}>Cancel</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{--    <script src="{{ assetUrl('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>--}}
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();

            $("#manage-product").on('click', function(){
                $("#manage-product-modal").modal('show');
            });
        });
    </script>
@endsection
