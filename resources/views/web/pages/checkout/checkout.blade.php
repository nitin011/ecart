@extends('web.layout.app')
@section('title','Checkout')
@section('page','index')
@push('css')
    <style>
        .coupon {
            border: 3px dashed #bcbcbc;
            border-radius: 10px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: 300;
        }
        .offer {
            display: inline-table;
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
        .items {
            margin: 15px 0;
            list-style: none;
        }
        .loading_handler{
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #00000059;
            display: none;
        }
        .loading {
            display: block;
            width: 80px;
            height: 80px;
            margin: auto;
            position: relative;
            top: 45%;
        }
        .loading:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid #000;
            border-color: #000 transparent #000 transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .checkbox-budget:not(:checked) + label {
            background-color: var(--dark-light);
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 10%);
        }
        .checkbox-budget:checked + label, .checkbox-budget:not(:checked) + label {
            position: relative;
            display: inline-block;
            width: 100px;
            font-size: 16px;
            line-height: 52px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0 auto;
            margin-left: 5px;
            margin-right: 5px;
            text-align: center;
            border-radius: 4px;
            overflow: hidden;
            cursor: pointer;
            text-transform: uppercase;
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
            -webkit-text-stroke: 1px var(--white);
            text-stroke: 1px var(--white);

        }
        .checkbox-budget:checked + label span, .checkbox-budget:not(:checked) + label span {
            position: relative;
            display: block;
            background-color: aliceblue;
        }
        .checkbox-budget:not(:checked) + label span::before {
            max-height: 0;
        }
        .checkbox-budget:checked + label span::before, .checkbox-budget:not(:checked) + label span::before {
            position: absolute;
            content: attr(data-hover);
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            -webkit-text-stroke: transparent;
            text-stroke: transparent;
            -webkit-text-fill-color: var(--white);
            text-fill-color: var(--white);
            color: #fff;
            -webkit-transition: max-height 0.3s;
            -moz-transition: max-height 0.3s;
            transition: max-height 0.3s;
            background-color: #61275dad;
        }
        .checkbox-budget:checked + label::before, .checkbox-budget:not(:checked) + label::before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 4px;
            background-image: linear-gradient(
                138deg
                , var(--red), var(--yellow));
            z-index: -1;
        }
        #tsd [type="radio"]:checked, #tsd [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
            width: 0;
            height: 0;
            visibility: hidden;
        }
        .table-borderless td{border: none;}
    </style>
@endpush
@section('content')
    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Checkout</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="main_content mb-50">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="bg-white">
                                        <div class="arrordian-section">
                                            <div class="accordion" id="accordionExample">
                                                <!-- first card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingOne">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapse"
                                                                data-toggle="collapse" data-target="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                <div class="number-content">1</div>
                                                                <div class="title-accordian">Account Details</div>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <div id="collapseOne" class="collapse in"
                                                         aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body pb-0">
                                                            @php($user = auth()->user())
                                                            <table class="table table-borderless" style="width: 100%">
                                                                <tbody>
                                                                <tr>
                                                                    <td><strong>Name</strong></td>
                                                                    <td><p>{{ $user->user_name }}</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong><strong>Phone Number :</strong></strong></td>
                                                                    <td><p>{{ $user->user_phone }}</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Email :</strong></td>
                                                                    <td><p>{{ $user->user_email }}</p></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>



                                                            {{--<p>We need your phone number so we can inform you about any
                                                                delay or problem.
                                                            </p>
                                                            <div class="edit-btn-sec">
                                                                <div class="edit-content">4 digits code send your
                                                                    phone {{ auth()->user()->user_phone }}
                                                                </div>
                                                                <button class="edit-btn">Edit</button>
                                                            </div>

                                                            <div class="enter-code-section">
                                                                <h5 class="code-title">Enter Code</h5>
                                                                <div class="enter-code-input-box">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <input type="text" name="code[]">
                                                                    <button class="next-btn next-block" type="button" data-open="2">Next</button>
                                                                </div>
                                                                <button class="code-title resend-btn">Resend Code
                                                                </button>
                                                            </div>--}}
                                                            <form action="{{ route('customer.checkout.confirm') }}" method="POST" id="checkout-form"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                @method('POST')
                                                                <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                                                                <input type="hidden" name="transaction_id" id="transaction_id">
                                                                <input type="hidden" name="address_id" id="address_id">
                                                                <div class="row">
                                                                <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="delivery_date" class="control-label"><strong>Expected Date</strong></label>
                                                                    <input type="date" class="form-control" id="datepicker"
                                                                           min="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                                           value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d') }}"
                                                                           name="delivery_date" autocomplete="off">
                                                                </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="delivery_date" class="label"><strong>Time Slot</strong></label>
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
                                                                    <div class="col-12 text-right">
                                                                        <button class="btn btn-primary next-block" type="button" data-open="2">Next</button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- second card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingTwo">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapsed"
                                                                data-toggle="collapse" data-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="number-content">2</div>
                                                                <div class="title-accordian"> Delivery Address</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                         data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            <div class="delivery-accordian mt-30">
                                                                @if(auth()->user()->addresses()->count())
                                                                    <div class="row">
                                                                @foreach(auth()->user()->addresses as $address)
                                                                    <div class="col-4">
                                                                        <div class="card card-header" style="padding: 20px;">
                                                                            <div class="card-body p-0">
                                                                               <input type="radio" name="address" value="{{$address->id}}" @if($address->is_default) checked @endif>
                                                                                @if($address->is_default)
                                                                                    <a href="javascript:void(0)" class="btn btn-info btn-sm pull-right" style="width: 100%">Primary</a>
                                                                                @endif
<br><br><br>
                                                                                @include('web.pages.address.partials.full_address')
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                                        <div class="col-12 mt-15" style="display: inherit">
                                                                            <div class="right-btn">
                                                                                <a class="btn btn-primary btn-outline" href="{{ route('customer.address.index') }}">Manage Address</a>
                                                                            </div>
                                                                            <div class="right-btn ml-auto text-right">
                                                                                <button class="btn btn-primary next-block" type="button" data-open="3">Next
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <form action="{{ route('customer.store.address') }}"
                                                                      method="post">
                                                                    @csrf
                                                                    {{ Form::hidden('user_id',auth()->user()->user_id) }}
                                                                    <input type="hidden" name="is_default" value="1">
                                                                    <input type="hidden" name="redirect_to_checkout"
                                                                           value="1">
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>First Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="first_name"
                                                                                   placeholder="First Name"
                                                                                   class="form-control"
                                                                                   value="{{ auth()->user()->first_name ?? old('first_name') }}">
                                                                            @error('first_name')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror

                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Last Name<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="last_name"
                                                                                   placeholder="Last Name"
                                                                                   class="form-control"
                                                                                   value="{{ auth()->user()->last_name ?? old('last_name') }}">
                                                                        </div>

                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Email<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="email"
                                                                                   placeholder="Email Address"
                                                                                   class="form-control"
                                                                                   value="{{ auth()->user()->user_email ?? old('email') }}">
                                                                            @error('email')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Phone<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="receiver_phone"
                                                                                   placeholder="phone"
                                                                                   class="form-control"
                                                                                   value="{{ auth()->user()->user_phone ?? old('receiver_phone') }}">
                                                                            @error('receiver_phone')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="input-box">
                                                                        <label>Flat / House / Office No.<span
                                                                                class="text-danger">*</span></label>
                                                                        <input type="text" name="house_or_flat_no"
                                                                               placeholder="Flat / House / Office No."
                                                                               class="form-control"
                                                                               value="{{ old('house_or_flat_no') }}">
                                                                        @error('house_or_flat_no')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Address<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="address_line_1"
                                                                                   placeholder="Address"
                                                                                   class="form-control"
                                                                                   value="{{ old('address_line_1') }}">
                                                                            @error('address_line_1')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Address Line 2</label>
                                                                            <input type="text" name="address_line_2"
                                                                                   placeholder="Address Line 2"
                                                                                   class="form-control"
                                                                                   value="{{ old('address_line_2') }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Postcode<span
                                                                                    class="text-danger">*</span></label>
                                                                            <input type="text" name="post_code"
                                                                                   placeholder="Postcode"
                                                                                   class="form-control"
                                                                                   value="{{ old('post_code') }}">
                                                                            @error('post_code')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="custom_select" style="width: 50%;">
                                                                            <label>Town<span
                                                                                    class="text-danger">*</span></label>
                                                                            <select name="city_id" id="city_id"
                                                                                    class="">
                                                                                @foreach($cities as $city)
                                                                                    <option
                                                                                        value="{{ $city->id }}"
                                                                                        {{ old('city_id') == $city->id?'selected':'' }}>
                                                                                        {{ ucfirst($city->name) }}
                                                                                        / {{ ucfirst($city->country->name) }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('city_id')
                                                                            <span
                                                                                class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="delivery-bottom-btn d-flex">
                                                                        <div class="left-btn">
                                                                            <button class="btn btn-primary btn-outline"
                                                                                    type="submit">Save
                                                                            </button>
                                                                        </div>
                                                                        <div class="right-btn ml-auto">
                                                                            <button class="btn btn-primary next-block" type="button" data-open="3">Next
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- forth card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingFour">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapsed"
                                                                data-toggle="collapse" data-target="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                <div class="number-content">3</div>
                                                                <div class="title-accordian">Payment</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="collapse"
                                                         aria-labelledby="headingFour" data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            {{--<div class="payment_method-checkout">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="rpt100 mt-30">
                                                                            <ul class="radio--group-inline-container_1 list-unstyled">
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="cashondelivery1"
                                                                                               value="cashondelivery"
                                                                                               name="paymentmethod"
                                                                                               type="radio"
                                                                                               data-minimum="50.0">
                                                                                        <label for="cashondelivery1"
                                                                                               class="radio-label_1">Cash
                                                                                            on
                                                                                            Delivery</label>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="card1" value="card"
                                                                                               name="paymentmethod"
                                                                                               type="radio"
                                                                                               data-minimum="50.0">
                                                                                        <label for="card1"
                                                                                               class="radio-label_1">Credit
                                                                                            / Debit Card</label>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="form-group return-departure-dts mt-30"
                                                                            data-method="cashondelivery"
                                                                            style="display:none">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="pymnt_title">
                                                                                        <h4>Cash on Delivery</h4>
                                                                                        <p>Cash on Delivery will not be
                                                                                            available if your order
                                                                                            value exceeds $10.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="form-group return-departure-dts mt-30"
                                                                            data-method="card" style="display:none">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Holder
                                                                                            Name*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="holdername"
                                                                                                    value=""
                                                                                                    id="holder[name]"
                                                                                                    required=""
                                                                                                    maxlength="64"
                                                                                                    placeholder="Holder Name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Card
                                                                                            Number*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="cardnumber"
                                                                                                    value=""
                                                                                                    id="card[number]"
                                                                                                    required=""
                                                                                                    maxlength="64"
                                                                                                    placeholder="Card Number">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Expiration
                                                                                            Month*</label>
                                                                                        <div class="custom_select">
                                                                                            <select
                                                                                                class="form-control first_null not_chosen">
                                                                                                <option value="">
                                                                                                    Month
                                                                                                </option>
                                                                                                <option value="1">
                                                                                                    January
                                                                                                </option>
                                                                                                <option value="2">
                                                                                                    February
                                                                                                </option>
                                                                                                <option value="3">
                                                                                                    March
                                                                                                </option>
                                                                                                <option value="4">
                                                                                                    April
                                                                                                </option>
                                                                                                <option value="5">
                                                                                                    May
                                                                                                </option>
                                                                                                <option value="6">
                                                                                                    June
                                                                                                </option>
                                                                                                <option value="7">
                                                                                                    July
                                                                                                </option>
                                                                                                <option value="8">
                                                                                                    August
                                                                                                </option>
                                                                                                <option value="9">
                                                                                                    September
                                                                                                </option>
                                                                                                <option value="10">
                                                                                                    October
                                                                                                </option>
                                                                                                <option value="11">
                                                                                                    November
                                                                                                </option>
                                                                                                <option value="12">
                                                                                                    December
                                                                                                </option>
                                                                                            </select>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Expiration
                                                                                            Year*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    type="text"
                                                                                                    name="card[expire-year]"
                                                                                                    maxlength="4"
                                                                                                    placeholder="Year">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">CVV*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div
                                                                                                class="ui left icon input swdh11 swdh19">
                                                                                                <input
                                                                                                    class="form-control"
                                                                                                    name="card[cvc]"
                                                                                                    maxlength="3"
                                                                                                    placeholder="CVV">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#" class="btn btn-primary mt-20">Place
                                                                            Order</a>
                                                                    </div>
                                                                </div>
                                                            </div>--}}
                                                            <div id="paypal-checkout" style="margin-top:25px;"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5 mt-30">

                                    <div class="order-summary-section">
                                        <div>
                                            <h2 class="title-checkout">Order Summary</h2>
                                        </div>
                                        <div>
                                            <hr>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-12 mt-30">
                                                        <div class="table-responsive shop_cart_table">
                                                            <div class="loading_handler">
                                                                <div class="loading"></div>
                                                            </div>
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <th class="product-thumbnail">&nbsp;</th>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-price">Price</th>
                                                                    <th class="product-qty">Quantity</th>
                                                                    <th class="product-subtotal">Total</th>
                                                                    <th class="product-remove">Remove</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="checkout_product">
                                                            {!! view('web.pages.checkout.checkout_product')->render() !!}
                                                                </tbody>

                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg_gray mb-30 p-5">
                                        <div class="order-summary-section">
                                            <div>
                                                <h2 class="title-checkout">Price details</h2>
                                            </div>


                                            <!-- line -->
                                            <div>
                                                <hr>
                                            </div>

                                            <!-- amount description -->
                                            <div class="amount-description-sec">
                                                <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Sub Total
                                                    </div>
                                                    <div class="amount-right-content">
                                                        {{ formatPrice(\Cart::getSubTotal()) }}
                                                    </div>
                                                </div>
                                                @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                    <div class="amount-sec">
                                                        <div class="amount-left-content">
                                                            {{ $delivery_charge->getName() }}
                                                        </div>
                                                        <div class="amount-right-content">
                                                            {{ formatPrice($delivery_charge->getValue()) }}
                                                        </div>
                                                    </div>
                                                @endif
                                                @if(!is_null($coupon))
                                                    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                        <div class="amount-sec">
                                                            <div class="amount-left-content">
                                                                {{ $coupon['coupon_name'] }}
                                                                <a class="btn btn-danger btn-sm" href="{{ route('customer.delete-coupon') }}">
                                                                    <i class="fa fa-trash" style="margin: 0"></i>
                                                                </a>
                                                            </div>
                                                            <div class="amount-right-content">
                                                                -{{ formatPrice($coupon['discount'] ?? (0.0)) }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="amount-sec">

                                                        <div class="amount-left-content" style="width: 30%">
                                                            Coupon Code
                                                        </div>
                                                        <div class="amount-right-content" style="width: 70%">
                                                            <div class="input-box" style="width: 100%; display: flex;">
                                                                <input type="text" class="form-control"
                                                                       id="coupon_code">
                                                                <div class="input-group-prepend">
                                                                <span class="{{--input-group-text --}}btn btn-primary"
                                                                      id="coupon_code_apply_button">
                                                                    Apply</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                            @endif

                                            <!-- <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Total Saving
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 3
                                                    </div>
                                                </div> -->

                                                <div class="amount-sec">
                                                    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
                                                        <div class="amount-left-content heading-bottom">
                                                            Total Amount
                                                        </div>
                                                        <div class="amount-right-content text-green">
                                                            {{ formatPrice(getCartTotal()) }}
                                                        </div>
                                                    @else
                                                        <div class="amount-left-content heading-bottom">
                                                            <h6 class="text-danger">
                                                                Minimum order amount should be greater than
                                                                <strong>{{ formatPrice($site_configurations['min_order_amt_value']) }}
                                                                    .</strong>
                                                            </h6>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- line -->
                                            <div>
                                                <hr>
                                            </div>

                                            <!-- secure checkout -->
                                            <div class="secure-checkout-sec text-center">
                                                <img src="images/icons/lock.png"> Secure checkout
                                            </div>
                                        </div>
                                    </div>

                                    <!-- have a promocode -->
                                    <div class="bg_gray mb-30 p-5">
                                        <div class="have-a-promocode">
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
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>
        </div>
    </div>
    <form id="coupon-code-form" action="{{ route('customer.apply-coupon') }}" method="POST"
          style="display: none;">
        @csrf
        <input name="coupon_code" type="hidden">
    </form>

    <!-- wrapper end -->
@endsection
@push('js')
    <script type="text/javascript" src="{{asset('user/js/script.js')}}"></script>
    @if(\Cart::getSubTotal() >= $site_configurations['min_order_amt_value'])
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
    @endif
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');

            $('#coupon_code_apply_button').click(function () {
                $("input[name='coupon_code']").val($('#coupon_code').val());
                $('#coupon-code-form').submit();
            });

            $('input[name="paymentmethod"]').on('click', function () {
                var $value = $(this).attr('value');
                $('.return-departure-dts').slideUp();
                $('[data-method="' + $value + '"]').slideDown();
            });

            $(".next-block").on('click', function(){
                let open= $(this).data('open');
                if(open == 2){
                    $('#collapseTwo').collapse('show');
                    $('#collapseOne').collapse('hide');
                }
                if(open == 3){
                    $('#collapseFour').collapse('show');
                    $('#collapseTwo').collapse('hide');
                }
            });
            $(document).on('click', '#set-time-slot', function () {
                $('#tsd').toggleClass('d-none');
            });

            $("input[name='address']").on('click', function () {
                setAddress();
            });
            setAddress();
        });
function setAddress(){
    $("input[name='address']").each(function (k, v) {
        if($(v).is(':checked'))
            $('#address_id').val($(v).val());
    })
}
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
    <script>
       function checkoutProduct(type, id, qty=null) {
           $.ajax({
               url:'{{ route('customer.checkout.ajax') }}',
               method:'post',
               data:{type: type, id: id, qty:qty},
               beforeSend:function(){
                   $(".loading_handler").show();
               },
               success: function (res) {
                   $('#checkout_product').html(res.html);
                   window.location.reload();
               }
           });
       }
    </script>

@endpush
