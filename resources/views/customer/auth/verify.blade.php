@extends('customer.layouts.master')
@section('title','Verify')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @include('customer.layouts.partials.flash_messages')

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('customer.forgot-password.resend-email') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">
                            <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">
                                {{ __('click here to request another') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
