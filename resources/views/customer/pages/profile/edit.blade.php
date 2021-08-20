@extends('web.layout.app')
@section('title','Update Profile')
@section('content')
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <div class="breadcrumb_section bg_gray page-title-mini">
                <div class="container">
                    <!-- STRART CONTAINER -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="page-title">
                                <h1>Update Profile</h1>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb d-flex justify-content-md-end">
                                <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Update Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END CONTAINER-->
            </div>
            <div id="main">
                <section id="content" class="page-home pagehome-two">
                    <div class="main_content mb-30 mt-30">


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">
                                                Manage Profile
                                            </h5>
                                        </div>
                                        <form action="{{ route('customer.profile.update') }}" method="POST">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="first_name" class="form-control-label">First
                                                            Name</label>
                                                        <input id="first_name" type="text" class="form-control"
                                                               name="first_name"
                                                               value="{{ $user->first_name }}">
                                                        @error('first_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="last_name" class="form-control-label">Last
                                                            Name </label>
                                                        <input id="last_name" type="text" class="form-control"
                                                               name="last_name"
                                                               value="{{ $user->last_name }}">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="user_email" class="form-control-label">Email</label>
                                                        <input id="user_email" type="text" class="form-control"
                                                               value="{{ $user->user_email }}" disabled>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <label for="user_phone" class="form-control-label">Phone
                                                            No.</label>
                                                        <input type="text" class="form-control" id="user_phone"
                                                               name="user_phone"
                                                               value="{{ $user->user_phone }}">
                                                        @error('user_phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="col-lg-12 text-center text-sm-right">
                                                    <button type="submit" class="btn btn-success">Update Profile
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });

        $('#address-form-group').on('click', function (e) {
            var clone = $(this).clone();

        });
    </script>
@endpush
