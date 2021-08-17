@extends('web.layout.app')
@section('page','index')
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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                <div class="col-md-8">
                                    <div class="bg-white">
                                        <div class="arrordian-section">
                                            <div class="accordion" id="accordionExample">
                                                <!-- first card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingOne">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapse" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                <div class="number-content">1</div>
                                                                <div class="title-accordian">Account Details</div>
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <div id="collapseOne" class="collapse in" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                        <div class="card-body pb-0">
                                                            <p>We need your phone number so we can inform you about any delay or problem.
                                                            </p>
                                                            <div class="edit-btn-sec">
                                                                <div class="edit-content">4 digits code send your phone +918437176189
                                                                </div>
                                                                <button class="edit-btn">Edit</button>
                                                            </div>

                                                            <div class="enter-code-section">
                                                                <h5 class="code-title">Enter Code</h5>
                                                                <div class="enter-code-input-box">
                                                                    <input type="text">
                                                                    <input type="text">
                                                                    <input type="text">
                                                                    <input type="text">
                                                                    <button class="next-btn">Next</button>
                                                                </div>
                                                                <button class="code-title resend-btn">Resend Code</button>
                                                            </div>
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
                                                            <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <div class="number-content">2</div>
                                                                <div class="title-accordian"> Delivery Address</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            <div class="delivery-accordian mt-30">

                                                                <form action="post">
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Name*</label>
                                                                            <input type="text" placeholder="Name" class="form-control">
                                                                        </div>

                                                                        <div class="input-box">
                                                                            <label>Email Address*</label>
                                                                            <input type="text" placeholder="Email Address" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label>Flat / House / Office No.*</label>
                                                                        <input type="text" placeholder="Address" class="form-control">
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label>County*</label>
                                                                        <input type="text" placeholder="County" class="form-control">
                                                                    </div>
                                                                    <div class="input-group">
                                                                        <div class="input-box">
                                                                            <label>Postcode*</label>
                                                                            <input type="text" placeholder="Postcode" class="form-control">
                                                                        </div>
                                                                        <div class="input-box">
                                                                            <label>Town*</label>
                                                                            <input type="text" placeholder="Town" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="delivery-bottom-btn d-flex">
                                                                        <div class="left-btn">
                                                                            <button class="btn btn-primary btn-outline">Save</button>
                                                                        </div>
                                                                        <div class="right-btn ml-auto">
                                                                            <button class="btn btn-primary">Next</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- line -->
                                                <div>
                                                    <hr>
                                                </div>

                                                <!-- third card -->
                                                <div class="card">
                                                    <div class="card-head" id="headingThree">
                                                        <div class="container">
                                                            <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <div class="number-content">3</div>
                                                                <div class="title-accordian"> Order Summary</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            <div class="form-group">




                                                                <div class="row">
                                                                    <div class="col-12 mt-30">
                                                                        <div class="table-responsive shop_cart_table">
                                                                            <table class="table">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th class="product-thumbnail">&nbsp;
                                                                                    </th>
                                                                                    <th class="product-name">Product</th>
                                                                                    <th class="product-price">Price</th>
                                                                                    <th class="product-qty">Quantity</th>
                                                                                    <th class="product-subtotal">Total</th>
                                                                                    <th class="product-remove">Remove</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="product-thumbnail">
                                                                                        <a href="#"><img src="images/Home/common/1-1.jpg" alt="product1"></a>
                                                                                    </td>
                                                                                    <td class="product-name" data-title="Product"><a href="#">Watch For Woman</a>
                                                                                    </td>
                                                                                    <td class="product-price" data-title="Price">$45.00
                                                                                    </td>
                                                                                    <td class="product-quantity" data-title="Quantity">
                                                                                        <div class="quantity">
                                                                                            <input type="button" value="-" class="minus">
                                                                                            <input type="text" name="quantity" value="2" title="Qty" class="qty" size="4">
                                                                                            <input type="button" value="+" class="plus">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="product-subtotal" data-title="Total">
                                                                                        $90.00</td>
                                                                                    <td class="product-remove" data-title="Remove">
                                                                                        <a href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                    </svg>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="product-thumbnail">
                                                                                        <a href="#"><img src="images/Home/common/1-2.jpg" alt="product2"></a>
                                                                                    </td>
                                                                                    <td class="product-name" data-title="Product"><a href="#">Watch for women</a>
                                                                                    </td>
                                                                                    <td class="product-price" data-title="Price">$55.00
                                                                                    </td>
                                                                                    <td class="product-quantity" data-title="Quantity">
                                                                                        <div class="quantity">
                                                                                            <input type="button" value="-" class="minus">
                                                                                            <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                                                                            <input type="button" value="+" class="plus">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="product-subtotal" data-title="Total">
                                                                                        $55.00</td>
                                                                                    <td class="product-remove" data-title="Remove">
                                                                                        <a href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close-3" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                    </svg>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="product-thumbnail">
                                                                                        <a href="#"><img src="images/Home/common/2-1.jpg" alt="product3"></a>
                                                                                    </td>
                                                                                    <td class="product-name" data-title="Product"><a href="#">Smartphone</a></td>
                                                                                    <td class="product-price" data-title="Price">$68.00
                                                                                    </td>
                                                                                    <td class="product-quantity" data-title="Quantity">
                                                                                        <div class="quantity">
                                                                                            <input type="button" value="-" class="minus">
                                                                                            <input type="text" name="quantity" value="3" title="Qty" class="qty" size="4">
                                                                                            <input type="button" value="+" class="plus">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td class="product-subtotal" data-title="Total">
                                                                                        $204.00</td>
                                                                                    <td class="product-remove" data-title="Remove">
                                                                                        <a href="#">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="close-2" width="10px" height="10px" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717    L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859    c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287    l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285    L284.286,256.002z"></path>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                <g>
                                                                                                </g>
                                                                                                    </svg>
                                                                                        </a>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                                <div class="mt-20">
                                                                    <button class="btn btn-primary">Proceed to Payment</button>
                                                                </div>
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
                                                            <h2 class="mb-0 iocn-arroridan collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                <div class="number-content">4</div>
                                                                <div class="title-accordian">Payment</div>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                        <div class="card-body pt-0">
                                                            <div class="payment_method-checkout">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="rpt100 mt-30">
                                                                            <ul class="radio--group-inline-container_1 list-unstyled">
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                                        <label for="cashondelivery1" class="radio-label_1">Cash on
                                                                                            Delivery</label>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="radio-item_1">
                                                                                        <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                                        <label for="card1" class="radio-label_1">Credit
                                                                                            / Debit Card</label>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="form-group return-departure-dts mt-30" data-method="cashondelivery" style="display:none">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="pymnt_title">
                                                                                        <h4>Cash on Delivery</h4>
                                                                                        <p>Cash on Delivery will not be available if your order value exceeds $10.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group return-departure-dts mt-30" data-method="card" style="display:none">
                                                                            <div class="row">

                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Holder
                                                                                            Name*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div class="ui left icon input swdh11 swdh19">
                                                                                                <input class="form-control" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Card
                                                                                            Number*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div class="ui left icon input swdh11 swdh19">
                                                                                                <input class="form-control" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">Expiration
                                                                                            Month*</label>
                                                                                        <div class="custom_select">
                                                                                            <select class="form-control first_null not_chosen">
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
                                                                                                    May</option>
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
                                                                                            <div class="ui left icon input swdh11 swdh19">
                                                                                                <input class="form-control" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group mt-1">
                                                                                        <label class="control-label">CVV*</label>
                                                                                        <div class="ui search focus">
                                                                                            <div class="ui left icon input swdh11 swdh19">
                                                                                                <input class="form-control" name="card[cvc]" maxlength="3" placeholder="CVV">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <a href="#" class="btn btn-primary mt-20">Place Order</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-30">
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
                                                        Price (3 item)
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 349
                                                    </div>
                                                </div>

                                                <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Delivery Charges
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 40
                                                    </div>
                                                </div>


                                                <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Discount
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 100
                                                    </div>
                                                </div>

                                                <!-- <div class="amount-sec">
                                                    <div class="amount-left-content">
                                                        Total Saving
                                                    </div>
                                                    <div class="amount-right-content">
                                                        $ 3
                                                    </div>
                                                </div> -->

                                                <div class="amount-sec">
                                                    <div class="amount-left-content heading-bottom">
                                                        Total Amount
                                                    </div>
                                                    <div class="amount-right-content text-green">
                                                        $ 289
                                                    </div>
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
                                            <a href="#">Have a promocode?</a>
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
    <!-- wrapper end -->
@endsection
