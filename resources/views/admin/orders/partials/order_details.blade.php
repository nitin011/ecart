<table class="table table-borderless" style="width: 100%">
    <thead>
    <tr>
        <td>Product Name</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Total</td>
    </tr>
    </thead>
    <tbody>
    <?php $subtotal= 0; $mrp =0?>
    @foreach($products as $product)
        @php
            $subtotal += $product->price * $qty[$product->varient_id];
            $mrp += $product->mrp * $qty[$product->varient_id]
        @endphp
        <tr>
            <td>{{ $product->product->product_name }}</td>
            <td>{{ formatPrice($product->price) }}</td>
            <td> {{ $qty[$product->varient_id] }}</td>
            <td>{{ formatPrice($product->price * $qty[$product->varient_id]) }}</td>
        </tr>
    @endforeach
    <input type="hidden" name="subTotal" value="{{$subtotal}}">
    <input type="hidden" name="total" value="{{$subtotal + $delivery_charge->value}}">
    <input type="hidden" name="mrp" value="{{$mrp}}">
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>SubTotal</td>
        <td>{{ formatPrice($subtotal) }}</td>
    </tr>
    @if($delivery_charge)
    <tr>
        <td></td>
        <td></td>
        <td>{{$delivery_charge->title}}</td>
        <td>{{ formatPrice($delivery_charge->value) }}</td>
    </tr>
    @endif

    <tr>
        <td></td>
        <td></td>
        <td>Total</td>
        <td>{{ formatPrice($subtotal + $delivery_charge->value) }}</td>
    </tr>
    </tbody>
</table>
