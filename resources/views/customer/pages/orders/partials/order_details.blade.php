<div class="row">
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-header">
                <b>Order Details</b>
                <span class="pull-right">
                    @if($canEditOrder)
                        <button class="btn btn-info text-white edit-order btn-sm">Edit Order</button>
                    @endif
                    @if($canReOrder)
                        <a href="{{ route('order.re-order',$order_id) }}"
                           class="btn btn-info text-white btn-sm">Reorder</a>
                    @endif
                    @if($canCancelOrder)
                        <button class="btn btn-warning text-white btn-sm order-cancel">Cancel Order</button>
                    @endif
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <table class='table' style='width:100%'>
            <thead class="thead-light">
            <tr>
                <th>Title</th>
                <th>Weight</th>
                <th>Quantity</th>
                <th class="text-right">{{ $currency->currency_sign }} Total Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $key => $item)
                @php
                    $isCombo = ($item->product_combo) ? "Combo" .$item->product_combo->title : '';
                @endphp
                <tr>
                    <td>{{ $item->title }} <small>{{ $item->title_gujarati }}</small><br/>{{ $isCombo }}</td>
                    <td>{{ ($item->package_weight/1000) . 'kg' }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td class="text-right">{{ $item->price_per_unit_package }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3">

                </td>
                <td>
                    Delivery Charges <small class="pull-right">383</small>
                </td>
            </tr>
            <tr>
                <td colspan="3">

                </td>
                <td>
                    Discount <small class="pull-right">383</small>
                </td>
            </tr>
            <tr>
                <td colspan="3">

                </td>
                <td>
                    Sub Total <small class="pull-right">383</small>
                </td>
            </tr>
            <tr>
                <td colspan="3">

                </td>
                <td>
                    Total <small class="pull-right">383</small>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>
<script>
    var shouldMergeCart = '{{ $shouldMergeCart }}';
    var mergeCart = '{{ route('order.edit',['order_id'=>$order_id,'customer_id'=>auth()->guard('web')->user()->id,'should_merge_cart' => $shouldMergeCart]) }}';
    var clearAndAdd = '{{ route('order.edit',['order_id'=>$order_id,'customer_id'=>auth()->guard('web')->user()->id,'should_merge_cart' => false]) }}';
    var cancelOrder = '{{ route('order.cancel',$order_id) }}';
</script>
