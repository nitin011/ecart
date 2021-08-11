@extends('admin.auth.auth_master')
@section('content')
    <div class="az-signin-wrapper">
        <div class="az-card-signin">
            <h1 class="az-logo text-center">
                <img src="{{ url('front-theme/img/logo.png') }}" alt="" class="img-thumbnail">
            </h1>
            <div class="az-signin-header">
                <h4>{{ __('Reset Password') }}</h4>
                <form method="POST" action="{{ route('admin.password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                               autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                    </div><!-- form-group -->
                    <button type="submit" class="btn btn-az-primary btn-block">
                        {{ __('Reset Password') }}
                    </button>
                </form>
            </div><!-- az-signin-header -->
        </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->
@endsection
