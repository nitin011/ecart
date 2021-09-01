<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}_invoice_{{ $order->order_id }}_print</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(3) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        .invoice-box table tr.total td:nth-child(3) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .main-table {
            border: 1px solid #eeeeee
        }

        td:last-child {
            text-align: right;
            padding-right: 10px;
        }

        .border-bottom {
            border-bottom: 1px solid #eee !important;
        }

        .border-right {
            border-right: 1px solid #eee !important;
        }

        .border-left {
            border-left: 1px solid #eee !important;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons button {
            cursor: pointer;
            background: #999999;
            border: 0px;
            border-radius: 4px;
            padding: 5px 14px;
            color: whitesmoke;
        }

        .buttons button:hover {
            cursor: pointer;
            background: #999989;
            border: 0px;
            border-radius: 4px;
            padding: 5px 14px;
            color: whitesmoke;
        }

        @media print {
            .no-print, .no-print * {
                display: none !important;
            }
        }
    </style>
</head>

<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0" class="main-table">
        <tr class="top">
            <td colspan="4">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{ assetUrl('theme/images/logo.png') }}" style="width:100px;">
                        </td>

                        <td class="text-right">
                            Invoice #: {{ $order->order_id }}<br>
                            Created: {{ formatDate($order->created_at,'M d, Y') }}<br>
                            Status : {{ $order->order_status }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <b>From</b>
                            {!! $site_configurations['office_address'] !!}
                        </td>
                        <td class="text-left">
                            <b>Shipping Info</b>
                            {!! view('customer.pages.address.partials.full_address',['address'=>$order->address])->render() !!}
                        </td>
                        <td>
                            <b>To</b><br>
                            {{ ucfirst($order->user->user_name) }}<br>
                            {{ $order->user->user_phone }}<br>
                            {{ $order->user->user_email }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td>Item</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Total</td>
        </tr>
        @foreach($order->orderItems as $item)
            <tr class="item {{ $loop->last?'last':null }}">
                <td class="{{ $loop->last?'border-bottom':null }}">
                    {{ $item->extra_data['name'] }}
                </td>
                <td class="{{ $loop->last?'border-bottom':null }}">
                    {{ $item->extra_data['quantity'] }}
                </td>
                <td class="{{ $loop->last?'border-bottom':null }}">
                    {{ formatPrice($item->extra_data['associatedModel']['price']) }}
                </td>
                <td class="{{ $loop->last?'border-bottom':null }}">
                    {{ formatPrice($item->extra_data['associatedModel']['price']*$item->extra_data['quantity']) }}
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2"></td>
            <td class="border-left border-bottom">Total:</td>
            <td class="border-bottom">{{ formatPrice($order->price_without_delivery) }}</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td class="border-left ">Delivery Charge:</td>
            <td>{{ formatPrice($order->delivery_charge) }}</td>
        </tr>
        <tr class="total">
            <td colspan="2"></td>
            <td class="border-left">Grand Total:</td>
            <td>{{ formatPrice($order->total_price) }}</td>
        </tr>
    </table>
    @if(!isset($pdf))
    <div class="buttons no-print">
        <button onclick="window.print();">Print</button>
        {{--        <button>Download</button>--}}
    </div>
    @endif
</div>
</body>
</html>
