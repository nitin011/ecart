@extends('web.layout.app')
@section('title','Register')
@section('page','index')
@push('css')
    <style>
        body {
            background-color: #EBEBEB !important;
        }
        .invalid-feedback{color: red;}
    </style>
@endpush
@section('content')
    <div class="container"
         style="background-color: white;border-radius: 10px;width: 73%;padding: 40px 40px 30px 40px;margin-top: 30px;">

        <div class="row">
            <div class="col-sm-12" style="">
                <h3>{{ __('Register') }}</h3>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-7" style="border-right: 1px solid #CCCCCC">
            <form class="login100-form validate-form" method="POST" action="{{ route('customer.register') }}">
                @csrf


                    <label for="basic-url" style="color: gray;">{{ __('First Name') }} <span
                            style="color: red;">*</span></label>
                    <div class="input-group mb-3">
                        <input type="text" name="first_name" style="max-width: 84%;" class="form-control" id="basic-url"
                               aria-describedby="basic-addon3" value="{{old('first_name')}}">
                    </div>
                @error('first_name')

                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                <br>
                @enderror

                    <label for="basic-url" style="color: gray;">{{ __('Last Name') }} <span style="color: red;">*</span></label>
                    <div class="input-group mb-3">
                        <input type="text" name="last_name" style="max-width: 84%;" class="form-control" id="basic-url"
                               aria-describedby="basic-addon3" value="{{ old('last_name') }}">
                    </div>
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                <br>
                @enderror

                    <label for="basic-url" style="color: gray;">{{ __('User Phone') }}<span style="color: red;">*</span></label>
                    <div class="input-group mb-3">
                        <input type="text" name="user_phone" style="max-width: 84%;" class="form-control" id="basic-url"
                               aria-describedby="basic-addon3" value="{{ old('user_phone') }}">
                    </div>
                @error('user_phone')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                <br>
                @enderror


                    <label for="basic-url" style="color: gray;">{{ __('E-Mail Address') }} <span
                            style="color: red;">*</span></label>
                    <div class="input-group mb-3">
                        <input type="text" name="user_email" style="max-width: 84%;" class="form-control" id="basic-url"
                               aria-describedby="basic-addon3" value="{{ old('user_email') }}">
                    </div>
                @error('user_email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                <br>
                @enderror

                    <label for="basic-url" style="color: gray;">{{ __('Password') }} <span style="color: red;">*</span></label>
                    <div class="input-group mb-3">
                        <input type="password" name="password" style="max-width: 84%;" class="form-control"
                               id="basic-url" aria-describedby="basic-addon3">
                    </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                <br>
                @enderror
                    <label for="basic-url" style="color: gray;">{{ __('Confirm Password') }} <span
                            style="color: red;">*</span></label>
                    <div class="input-group mb-3">

                        <input type="password" name="password_confirmation" style="max-width: 84%;" class="form-control"
                               id="basic-url" aria-describedby="basic-addon3">
                    </div>


                    <button type="submit" class="btn"
                            style="background-color: #FB641B;color: white;width: 45%;font-size: 17px;margin-top: 20px;">
                        Register
                    </button>


            </form>

            <p style="color: gray;margin-top: 30px;">Already Registered on Growcer <a
                    href="{{ route('customer.login') }}" style="color:#FB641B; ">LOGIN</a></p>

            </div>
            <div class="col-sm-5">


                <div class="row">
                    <div class="col-sm-3" style="margin-top: 40px;">

                        <span style="float: right;color: #B8B8B8;font-size: 30px;"><i class="fas fa-truck"></i></span>

                    </div>
                    <div class="col-sm-9" style="margin-top: 40px;">
                        <p style="color: #B8B8B8;font-weight: 500">Manage your orders</p>
                        <p style="color: #B8B8B8;font-weight: 500;margin-top: -15px;">
                            Easily track orders, Create returns.


                        </p>

                    </div>

                    <div class="col-sm-3" style="margin-top: 20px;">

                        <span style="float: right;color: #B8B8B8;font-size: 30px;"><i class="fas fa-bell"></i></span>

                    </div>
                    <div class="col-sm-9" style="margin-top: 20px;">
                        <p style="color: #B8B8B8;font-weight: 500">Manage your orders</p>
                        <p style="color: #B8B8B8;font-weight: 500;margin-top: -15px;">
                            Easily track orders, Create returns.


                        </p>

                    </div>

                    <div class="col-sm-3" style="margin-top: 20px;">

                        <span style="float: right;color: #B8B8B8;font-size: 30px;"><i
                                class="fas fa-thumbs-up"></i></span>

                    </div>
                    <div class="col-sm-9" style="margin-top: 20px;">
                        <p style="color: #B8B8B8;font-weight: 500">Manage your orders</p>
                        <p style="color: #B8B8B8;font-weight: 500;margin-top: -15px;">
                            Easily track orders, Create returns.


                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            $('.toggle-nav').trigger('click');
        });
    </script>
@endpush
