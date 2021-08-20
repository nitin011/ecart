@extends('web.layout.app')
@section('title','Update Address')

@section('header_styles')

@endsection
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Update Address</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Manage Address</li>
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
                        <div class="nov-row page-home-right product-list-section col-lg-cus-12 col-lg-12 col-xs-12"
                             style="padding-bottom: 43px">
                            <div class="nov-row-wrap row">
                                <!-- checkout content -->

                                <div class="col-lg-12">
                                    @include('customer.layouts.partials.flash_messages')


                                    <form method="POST" action="{{ route('customer.address.store') }}">
                                        @csrf
                                        @include('customer.pages.address.form')
                                        <input type="hidden" value="{{ $address->id }}" name="id">
                                        <div class="row">
                                            <div class="col-lg-12 mt-25 text-center">
                                                <button type="submit" class="btn btn-primary">Update Address
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Contact Form End -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
