@extends('web.layout.app')

@section('content')
    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <div class="breadcrumb_section bg_gray page-title-mini">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="page-title">
                                    <h1>My Account</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">My Account</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <!-- my account page section start -->
                        <div class="row">
                            <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="col-md-12">
                                        <div class="main_content mt-40 mb-50">
                                            <div class="section">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-4">
                                                            <!-- my account tab section start -->
                                                            <div class="dashboard_menu">
                                                                <ul class="nav nav-tabs flex-column mb-50" role="tablist">

                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" id="orders-tab" data-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false"><i
                                                                                class="ti-shopping-cart-full"></i>Orders</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="orders" aria-selected="true"><i
                                                                                class="fa fa-money"></i>Payment</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i
                                                                                class="ti-location-pin"></i>My
                                                                            Address</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" id="account-detail-tab" data-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i
                                                                                class="ti-id-badge"></i>Account
                                                                            details</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="login.html"><i
                                                                                class="ti-lock"></i>Logout</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <!-- my account tab section end -->
                                                        </div>
                                                        <div class="col-lg-9 col-md-8">
                                                            <div class="tab-content dashboard_content">
                                                                <!-- order section start -->
                                                                <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>Orders</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th>Product</th>
                                                                                        <th>Name</th>

                                                                                        <th>Price</th>
                                                                                        <th>Detail</th>
                                                                                        <th>Status</th>

                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <a href="javascript:void(0)"><img src="images/Home/common/10-1.jpg" alt="product" class="img-fluid  " height="80px"></a>
                                                                                        </td>
                                                                                        <td><a href="javascript:void(0)">Order no: <span class="dark-data"><b>15454841</b></span> <br>cotton shirt</a></td>

                                                                                        <td>$63.00</td>
                                                                                        <td>
                                                                                            <span>Size: L</span>
                                                                                            <br>
                                                                                            <span>Quntity: 1</span>
                                                                                        </td>
                                                                                        <td>Delivered (jul 01, 2019)</td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <a href="javascript:void(0)"><img src="images/Home/common/11-1.jpg" alt="product" class="img-fluid  " height="80px"></a>
                                                                                        </td>
                                                                                        <td><a href="javascript:void(0)">Order no: <span class="dark-data"><b>15454842</b></span> <br>cotton shirt</a></td>

                                                                                        <td>$63.00</td>
                                                                                        <td>
                                                                                            <span>Size: L</span>
                                                                                            <br>
                                                                                            <span>Quntity: 1</span>
                                                                                        </td>
                                                                                        <td>Processing (jul 01, 2019)</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- order section end -->

                                                                <!-- payment section start -->
                                                                <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>Payment Details</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <div class="border p-3 p-md-4">
                                                                                <div class="heading_s1 mb-20">
                                                                                    <h6>Cart Totals</h6>
                                                                                </div>
                                                                                <div class="table-responsive">
                                                                                    <table class="table">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td class="cart_total_label">
                                                                                                Cart Subtotal
                                                                                            </td>
                                                                                            <td class="cart_total_amount">
                                                                                                $349.00</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="cart_total_label">
                                                                                                Shipping</td>
                                                                                            <td class="cart_total_amount">
                                                                                                Free Shipping
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="cart_total_label">
                                                                                                Total</td>
                                                                                            <td class="cart_total_amount">
                                                                                                <strong>$349.00</strong>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <a href="#" class="btn btn-fill-out btn-primary">Proceed
                                                                                    To CheckOut</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- payment section end -->

                                                                <!-- billing address section start -->
                                                                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 mb-20">
                                                                            <div class="card mb-3 mb-lg-0">
                                                                                <div class="card-header">
                                                                                    <h3>Billing Address</h3>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <address>House #15<br>Road
                                                                                        #1<br>Block #C <br>Angali
                                                                                        <br> Vedora <br>1212
                                                                                    </address>
                                                                                    <p>New York</p>
                                                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h3>Shipping Address</h3>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <address>House #15<br>Road
                                                                                        #1<br>Block #C <br>Angali
                                                                                        <br> Vedora <br>1212
                                                                                    </address>
                                                                                    <p>New York</p>
                                                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- billing address section end -->

                                                                <!-- account details section start -->
                                                                <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3>Account Details</h3>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                                            <form method="post" name="enq">
                                                                                <div class="row">
                                                                                    <div class="form-group col-md-6">
                                                                                        <label>First Name <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="name" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-md-6">
                                                                                        <label>Last Name <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="phone">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Display Name <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="dname" type="text">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Email Address <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="email" type="email">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Current Password
                                                                                            <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="password" type="password">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>New Password <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="npassword" type="password">
                                                                                    </div>
                                                                                    <div class="form-group col-md-12">
                                                                                        <label>Confirm Password
                                                                                            <span
                                                                                                class="required">*</span></label>
                                                                                        <input required="" class="form-control" name="cpassword" type="password">
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Update</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- account details section end -->
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
                        <!-- my account page section end -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
