@extends('admin.auth.auth_master')
@section('content')
    <div class="az-signin-wrapper">
        <div class="az-card-signin">
            <h1 class="az-logo text-center">
                <img src="{{ url('front-theme/img/logo.png') }}" alt="" class="img-thumbnail">
            </h1>
            <div class="az-signin-header">
                <h4 class="text-center">{{ __('Reset Password') }}</h4>
                @include('admin.layout.partials.flash_messages')
                <form method="POST" action="{{ route('admin.password.email') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div><!-- form-group -->
                    <button class="btn btn-az-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                </form>
            </div><!-- az-signin-header -->
        </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->
@endsection
