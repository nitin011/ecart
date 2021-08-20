@extends('web.layout.app')
@section('title','Profile')
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Profile</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="main_content mt-30 mb-30">


                        <div class="container">
                            <div class="row">
                <div class="col-lg-12">
                    @include('customer.layouts.partials.flash_messages')
                </div>
                <div class="col-lg-4 border-right-lg user-profile">
                    <div class="card">
                        <div class="card-header">
                            Profile
                            <div class="float-right">
                                <a href="{{ route('customer.profile.edit',$user->user_id) }}"
                                   class="btn btn-block btn-sm text-right">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="mb-0"><label>Name :</label> <span
                                            class="text-dark">{{ $user->user_name }}</span></p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="mb-0"><label>Email :</label> <span
                                            class="text-dark">{{ $user->user_email }}</span>
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="mb-0"><label>Phone No :</label> <span
                                            class="text-dark">{{ $user->user_phone }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 user-address mt-5 mt-lg-0 mb-5">
                    <div class="card">
                        <div class="card-header">
                            Manage Addresses
                            <div class="float-right">
                                <a class="btn btn-info text-white" href="{{ route('customer.address.create') }}">
                                    Add New Address
                                </a>
                                <a href="{{ route('customer.address.index') }}"
                                   class="btn btn-sm text-green text-right pr-0">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($user->addresses as $address)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                @include('customer.pages.address.partials.full_address')
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($user->addresses->count() ==0)
                                <h3>No Addresses Added yet.</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div></section></div></div></div>
    <!-- Contact Form End -->
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
