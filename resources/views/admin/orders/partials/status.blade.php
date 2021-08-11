<select name="status" id="order_status"
        class="order_status"
        data-id="{{ $data->order_id }}">
    @php($flag = true)
    @foreach(\App\Models\Order::ORDER_STATUS as $key=>$value)
        <option value="{{ $key }}"
                @if ($flag)
                disabled
        @if (mb_strtolower($key) == mb_strtolower($data['order_status']))
            @php($flag = false)
            @endif
            @endif
            {{ (mb_strtolower($key) == mb_strtolower($data['order_status']))?'selected':null }}>
            {{ ucfirst($value) }}
        </option>
    @endforeach
</select>
