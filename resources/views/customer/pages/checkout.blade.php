@extends('customer.layouts.master')
@section('title','Checkout')
@section('header_styles')
    <style type="text/css">
        .coupon {
            border: 3px dashed #bcbcbc;
            border-radius: 10px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light",
            "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }

        .coupon #head {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            min-height: 56px;
        }

        .coupon #footer {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .offer {
            display: inline-table;
        }

        #title .visible-xs {
            font-size: 12px;
        }

        .coupon #title img {
            font-size: 30px;
            height: 30px;
            margin-top: 5px;
        }

        @media screen and (max-width: 500px) {
            .coupon #title img {
                height: 15px;
            }
        }

        .coupon #title span {
            float: right;
            margin-top: 5px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .coupon-img {
            width: 100%;
            margin-bottom: 15px;
            padding: 0;
        }

        .items {
            margin: 15px 0;
        }

        .usd, .cents {
            font-size: 20px;
        }

        .number {
            font-size: 40px;
            font-weight: 700;
        }

        sup {
            top: -15px;
        }

        #business-info ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            text-align: center;
        }

        #business-info ul li {
            display: inline;
            text-align: center;
        }

        #business-info ul li span {
            text-decoration: none;
            padding: .2em 1em;
        }

        #business-info ul li span i {
            padding-right: 5px;
        }

        .disclosure {
            padding-top: 15px;
            font-size: 11px;
            color: #bcbcbc;
            text-align: center;
        }

        .coupon-code {
            color: #333333;
            font-size: 11px;
        }

        .exp {
            color: #f34235;
        }

        .print {
            font-size: 14px;
            float: right;
        }

        .create-address-card {
            border: 0;
        }
    </style>
@stop
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
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                <div class="col-md-12">
                    @include('customer.layouts.partials.flash_messages')
                </div>
            </div>
            <div class="row card">
                @php($user = auth()->user())
                @if(count(auth()->user()->addresses) == 0)
                    <h2 class="bg-app-primary px-3 py-2 text-white">Provide the Delivery Address</h2>
                    <form action="{{ route('customer.store.address') }}" method="POST">
                        @csrf
                        @include('customer.pages.address.form')
                        <input type="hidden" name="is_default" value="1">
                        <input type="hidden" name="redirect_to_checkout" value="1">
                        <div class="row text-right m-2">
                            <div class="col-md-12">
                                <input type="submit" name="submit" value="Store Address" class="app-btn">
                            </div>
                        </div>
                    </form>
                @else
                    <div class="card-header">
                        <h4 class="card-header-text">Billing Details</h4>
                    </div>
                    <form action="{{ route('customer.checkout.confirm') }}" method="POST" id="checkout-form"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row card-body">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <table class="table table-borderless">
                                            <tr>
                                                <th><label class="text-secondary">Full Name </label></th>
                                                <td>{{ $user->user_name }}</td>
                                            </tr>
                                            <tr>
                                                <th><label class="text-secondary">Phone Number </label></th>
                                                <td>{{ $user->user_phone }}</td>
                                            </tr>
                                            <tr>
                                                <th><label class="text-secondary">Email </label></th>
                                                <td>{{ $user->user_email }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                                        <div class="form-group">
                                            <label for="delivery_date" class="label">Expected Date</label>
                                            <input type="date" class="form-control" id="datepicker"
                                                   min="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                   value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                   name="delivery_date" autocomplete="off">

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="delivery_date" class="label">Time Slot</label>
                                        <br/>
                                        <span class="btn btn-info w-auto" id="set-time-slot">
                                                Set Delivery Time Slot
                                            </span>
                                    </div>
                                    <div id="tsd" class="d-none">
                                        <div class="col-lg-12">
                                            @php($k = 0)
                                            @for($i = 7; $i<22;  $i++)
                                                @php($j = $i)
                                                @php($m = (($i+1>=12)?' PM':' AM'))
                                                @if($j>=12)
                                                    @php($j=++$k)
                                                @endif

                                                <input class="checkbox-budget" type="radio" name="time_slot"
                                                       value="{{ $j.' - '.($j+1) .''.$m }}"
                                                       id="budget-{{ $i }}"
                                                    {{--{{ (($i == 7)?'checked':null) }}--}}>
                                                <label class="for-checkbox-budget" for="budget-{{ $i }}">
                                                <span
                                                    data-hover="{{ $j.' - '.($j+1) .''.$m }}">{{ $j.' - '.($j+1) .''.$m }}</span>
                                                </label>

                                            @endfor
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    @foreach(auth()->user()->addresses as $address)
                                        @if($loop->iteration == 1)
                                            <div class="col-lg-12">
                                                <h3 class="mb-0">Select Address
                                                    <span class="pull-right">
                                                        <a href="{{ route('customer.address.index') }}"
                                                           class="btn btn-secondary pull-right mb-2 text-white rounded-0">
                                                            Manage Addresses
                                                        </a>
                                                    </span>
                                                </h3>
                                                <hr>
                                            </div>
                                        @endif
                                        <div class="col-md-4">
                                            <div class="card address-card card-header">
                                                <div class="card-body p-0">
                                                    <label for="address_{{ $address->id }}"
                                                           style="width:inherit">
                                                        <div class="checkout__order mb-2">
                                                    <span class="primary-check">
                                                        <div class="custom-control custom-radio">
                                                            {{ Form::radio('address_id',$address->id,($address->is_default == 1),['class'=>'custom-control-input','id'=>'address_'.$address->id]) }}
                                                            <label class="custom-control-label"
                                                                   for="{{ 'address_'.$address->id }}">
                                                                Primary Address
                                                            </label>
                                                        </div>
                                                    </span>
                                                            @include('customer.pages.address.partials.full_address')
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-cente activer">
                                        <h5>Items</h5>
                                    </li>
                                    @foreach(\Cart::getContent() as $item)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $item->associatedModel->product->product_name }}
                                            <span>{{ formatPrice($item->price*$item->quantity) }}</span>
                                        </li>
                                    @endforeach
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <input type="hidden" name="sub_total" value="{{ \Cart::getSubTotal() }}">
                                        <h6>Sub Total</h6>
                                        <span>{{ formatPrice(\Cart::getSubTotal()) }}</span>
                                    </li>
                                    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <input type="hidden" name="sub_total"
                                                   value="{{ $delivery_charge->getValue() }}">
                                            <h6>{{ $delivery_charge->getName() }}</h6>
                                            <span>{{ formatPrice($delivery_charge->getValue()) }}</span>
                                        </li>
                                    @endif
                                    @if(is_null($coupon))
                                        <li class="list-group-item">
                                            <label for="coupon_code" class="label w-100">Coupon Code</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="coupon_code">
                                                <div class="input-group-prepend">
                                                <span class="{{--input-group-text --}}btn btn-primary"
                                                      id="coupon_code_apply_button">
                                                    Apply
                                                </span>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <h6>{{ $coupon['coupon_name'] }} <span
                                                        class="bg-grey p-2">{{ $coupon['coupon_code'] }}</span></h6>
                                                <a href="{{ route('customer.delete-coupon') }}">
                                                    <i class="fa fa-trash btn remove_coupon btn-danger icon-circle w-auto"></i>
                                                </a>
                                                <span>{{ formatPrice($coupon['discount'] ?? (0.0)) }}</span>
                                            </li>
                                        @endif
                                    @endif
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                            <h6 class="text-green">
                                                Total</h6>
                                            <h6 class="text-green">
                                                {{ formatPrice(getCartTotal()) }}
                                            </h6>
                                        @else
                                            <h6 class="text-danger">
                                                Minimum order amount should be greater than
                                                <strong>{{ formatPrice($site_configurations['min_order_amt_value']) }}
                                                    .</strong>
                                            </h6>
                                        @endif
                                    </li>
                                    <li class="list-group-item d-flex" id="paypal-checkout">
                                        <input type="hidden" name="transaction_id" id="transaction_id">
                                    </li>
                                    <li class="list-group">
                                        @foreach($coupons as $coupon)
                                            <div class="card alert-success coupon mt-2">
                                                <div class="card-body py-1">
                                                    <div class="row my-0">
                                                        <div class="col-lg-9 col-md-9">
                                                            <ul class="items">
                                                                <li>{{ $coupon->coupon_name }}</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="offer text-success my-3">
                                                                <span>
                                                                    <b class="text-green">
                                                                        {{ $coupon->type=='percentage'?$coupon->amount.'%':formatPrice($coupon->amount) }}
                                                                    </b>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p class="disclosure">{{ $coupon->coupon_description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="coupon-code">
                                                        Code: {{ $coupon->coupon_code }}
                                                    </div>
                                                    <div class="exp">
                                                        Expires: {{ formatDate($coupon->end_date) }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    <form id="coupon-code-form" action="{{ route('customer.apply-coupon') }}" method="POST"
                          style="display: none;">
                        @csrf
                        <input name="coupon_code" type="hidden">
                    </form>
                @endif
            </div>
        </div>
    </div>
@stop
@section('scripts')
    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
        <!-- Include the PayPal JavaScript SDK -->
        <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}&currency={{ config('services.paypal.currency') }}"></script>
        <script>
            // Render the PayPal button into #paypal-button-container
            paypal.Buttons({
                // Set up the transaction
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: '{{ (double)\Cart::getTotal() + (double)$delivery_charge->getValue() }}'
                            }
                        }]
                    });
                },

                // Finalize the transaction
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (details) {
                        // Show a success message to the buyer
                        document.getElementById("transaction_id").value = details.id;
                        storeTransaction(details);
                        swal("Success!", 'Transaction completed by ' + details.payer.name.given_name + '!', "success");
                    });
                },
                onError: function (err) {
                    // Show an error page here, when an error occurs
                    swal("Error!", err, "error");
                },
                style: {
                    color: 'blue',
                    shape: 'pill',
                    label: 'pay',
                    height: 40
                }

            }).render('#paypal-checkout');
        </script>
        <script type="text/javascript">
            /*$(function () {
                $('#datepicker').datepicker({
                    format: 'mm/dd/yyyy',
                    startDate: '+2d',
                    minDate: 2,
                });
            });*/
            /*var today = new Date().toISOString().split('T')[0];
            document.getElementById("datepicker")[0].setAttribute('min', today);*/
            $(document).ready(function () {
                $('#coupon_code_apply_button').click(function () {
                    $("input[name='coupon_code']").val($('#coupon_code').val());
                    $('#coupon-code-form').submit();
                });
                $(document).on('click', '#set-time-slot', function () {
                    $('#tsd').toggleClass('d-none');
                });
                $('.address-cart').on('click', function () {
                    $('.address-cart').removeClass('bg-info');
                    $(this).addClass('bg-info');
                });
            });

            function storeTransaction(transaction) {
                return $.ajax({
                    type: "POST",
                    url: "{{ route('customer.order.transaction.store') }}",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                        transaction: JSON.stringify(transaction),
                        details: transaction,
                    },
                    success: function (response) {
                        console.log(response);
                        document.getElementById("checkout-form").submit();
                    },
                    error: function (response) {
                        swal('Error', response, 'error');
                    },
                    /*dataType: "json",
                    contentType: "application/json"*/
                });
            }
        </script>
    @endif
@stop
