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
    @foreach($products as $product)
        <tr>
            <td>{{ $product->product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td><div class="form-group" style="display: flex;">
                    <button type="button"  class="btn btn-primary btn-sm quantity" data-type="less" data-price="{{ $product->price }}" data-id="{{$product->varient_id}}"><i class="fa fa-minus"></i></button>
                    <input type="text" class="form-control" value="1" style="width:15%" name="qty[{{$product->varient_id}}]" readonly>
                    <button type="button" class="btn btn-primary btn-sm quantity" data-type="add" data-price="{{ $product->price }}" data-id="{{$product->varient_id}}"><i class="fa fa-plus"></i></button>
                </div></td>
            <td id="price_{{$product->varient_id}}">{{ $product->price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
