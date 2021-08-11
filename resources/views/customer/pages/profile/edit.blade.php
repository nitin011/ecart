@extends('customer.layouts.master')
@section('title','Update Profile')
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
                            <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
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
                                        <label for="first_name" class="form-control-label">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name"
                                               value="{{ $user->first_name }}">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="last_name" class="form-control-label">Last Name </label>
                                        <input id="last_name" type="text" class="form-control" name="last_name"
                                               value="{{ $user->last_name }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="user_email" class="form-control-label">Email</label>
                                        <input id="user_email" type="text" class="form-control"
                                               value="{{ $user->user_email }}" disabled>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <label for="user_phone" class="form-control-label">Phone No.</label>
                                        <input type="text" class="form-control" id="user_phone" name="user_phone"
                                               value="{{ $user->user_phone }}">
                                        @error('user_phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-lg-12 text-center text-sm-right">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#address-form-group').on('click', function (e) {
                var clone = $(this).clone();

            });
        });
    </script>
@endsection
