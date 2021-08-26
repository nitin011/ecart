@extends('web.layout.app')
@section('title','Login')
@section('page','index')
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
                                        @include('customer.layouts.partials.flash_messages')
                                        <div class="login mb-50">
                                            <div class="login-form-container">
                                                <div class="login-text">
                                                    <h3>{{ __('Login') }}</h3>
                                                </div>

                                                <form class="login-form" role="form" method="post" action="{{ route('customer.login') }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" class="form-control" placeholder="{{ __('Email or Phone Number') }}" name="user_phone">
                                                        </div>
                                                        @error('user_phone')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="password" class="form-control" placeholder="Password" name="user_password">
                                                        </div>
                                                        @error('user_password')
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                        @enderror
                                                    </div>
                                                    <div class="button-box mt-30">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox">
                                                            <label>Remember me</label>
                                                            <a href="{{ route('customer.password.email') }}">Forgot Password?</a>
                                                        </div>
                                                        <button type="submit" class="btn btn-common log-btn btn-primary w-100 mt-20">{{ __('Login') }}</button>
                                                    </div>
                                                </form>
                                                <p class="text-center mt-15">
                                                New to {{ env('APP_NAME') }}?
                                                <a href="{{ route('customer.register') }}" style="color:blue !important;">
                                                    <strong>Register</strong>
                                                </a>
                                                </p>
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

@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
