<address>
    <strong>Full Name:</strong> {{ $address->first_name??null }} {{ $address->last_name??null }}<br/>
    {{ $address->receiver_phone??null }}<br/>
    <strong>House/Flat No. :</strong> {{ $address->house_or_flat_no??null }}<br/>
    <strong>Address :</strong> {{ $address->address_line_1??null }}.<br/>
    {{ $address->address_line_2??null }}.<br/>
    <strong>City:</strong> {{ $address->city->name??null }}
    <strong>Country:</strong> {{ $address->country->name??null }}<br/>
    <strong>Postcode :</strong> {{ $address->post_code??null }}.
</address>
