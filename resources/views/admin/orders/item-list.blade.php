<style>
    table{width: 100%; border: 1px solid #000;}
    table td{border:1px solid #000}
</style>
<div style="position: relative; display: block; width: 100%;">
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->variant->product->product_name }}</td>

                <td>{{ formatPrice($item->price) }}</td>
                <td>
                    <span>{{ $item->quantity_value}}</span>
                </td>
                <td>{{ formatPrice($item->price * $item->quantity_value) }}</td>
                <td>
                    @php
                        switch ($item->status){
                          case 0 :
                              $status='On Hold';
                              break;
                          case 1 :
                              $status='Available';
                              break;
                          case -1:
                              $status='Cancel';
                        }
                    @endphp
                    {{ $status }}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
