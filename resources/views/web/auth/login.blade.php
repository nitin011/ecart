@extends('web.layout.app')

@section('content')
    <!-- wrapper start -->
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="container">
                        <!-- login page section start -->
                        <div class="row">
                            <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12">
                                <div class="nov-row-wrap row">
                                    <div class="col-md-12 col-lg-6 col-lg-offset-3 m-auto">
                                        <div class="login mb-50">
                                            <div class="login-form-container">
                                                <div class="login-text">
                                                    <h3>Login</h3>
                                                    <p>Please Register using account detail bellow.</p>
                                                </div>

                                                <form class="login-form" role="form" method="post">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="Username" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="button-box mt-30">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="#">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit" class="btn btn-common log-btn btn-primary w-100 mt-20">Login</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- login page section end -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- wrapper end -->
@endsection
