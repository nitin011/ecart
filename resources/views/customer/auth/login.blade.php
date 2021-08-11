@extends('customer.layouts.master')
@section('title','Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                @include('customer.layouts.partials.flash_messages')
                <div class="card my-5">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customer.login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="user_phone"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Email or Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="user_phone" type="text"
                                           class="form-control @error('user_phone') is-invalid @enderror"
                                           name="user_phone" value="{{ old('user_phone') }}" required
                                           autocomplete="user_phone" autofocus>
                                    @error('user_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="user_password" type="password"
                                           class="form-control @error('user_password') is-invalid @enderror"
                                           name="user_password" required autocomplete="current-user_password">

                                    @error('user_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--<div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    <a class="btn btn-link" href="{{ route('customer.password.email') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                <div class="col-md-8 offset-md-4">
                                    <span>New to {{ env('APP_NAME') }}?
                                            <a href="{{ route('customer.register') }}" style="color:blue !important;">
                                                <strong>Register</strong>
                                            </a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
