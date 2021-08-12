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
                                    <h1>Order Completed</h1>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ol class="breadcrumb d-flex justify-content-md-end">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Order Completed</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTAINER-->
                </div>
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <div class="row">
                            <!-- product list section start -->
                            <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="col-md-8 mb-50 mt-20 m-auto">
                                        <div class="text-center order_complete">
                                            <i class="fa fa-check-circle"></i>
                                            <div class="heading_s1 mb-20">
                                                <h2>Your order is completed!</h2>
                                            </div>
                                            <p>Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                                            <a href="#" class="btn btn-primary mt-20">Continue
                                                Shopping</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- product list section end -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
